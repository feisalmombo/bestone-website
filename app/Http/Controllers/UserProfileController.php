<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Auth;
use Image;
use Storage;
use DB;

class UserProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    
    
    public function index()
    {
       // return view('admin_layouts.admin_profile');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
       // $id = $user->id;
        $user = User::find(1);
        // return $user;
      //  return view('admin_layouts.admin_profile',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $user = User::find(Auth::user()->id);
        return view('admin_layouts.admin_profile',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {

        $user = User::find(Auth::user()->id);
        $this->validate(request(),[

            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required',

            ]);

        $user->first_name = $request->fname;
        $user->last_name = $request->lname;
        $user->email = $request->email;
        
        
        $user->save();

        return redirect()->back()->with('message','Update Successful');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }

    public function seeUser(){
        $users = User::all();

        return view('admin_layouts.projects.all_user',compact('users'));
    }

    public function changeProfile(Request $request){
        $this->validate(request(),[
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg'
        ]);

        $filename = $request->file('image')->getClientOriginalName();
        $image_thumb = Image::make($request->file('image'))->resize(70,70)->stream();

        $image_path = Storage::disk('public')->put('/profile/'.$filename, $image_thumb->__toString());
        
         if ($image_path) {
             DB::table('users')
                    ->where('id',Auth::user()->id)
                    ->update([
                        'profile_image_path' => $filename,
                    ]);
         }

         return redirect()->back();
    }
}
