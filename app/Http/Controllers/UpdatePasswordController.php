<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UpdatePasswordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */
    public function __construct() {
 
        $this->middleware('auth');
 
    }
    public function index()
    {
        return view('auth.passwords.update_password');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
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
        $user = User::find(Auth::id());
        $pass = $user->password;

        $this->validate(request(),[
            'old_password' => 'required',
            'new_password' => 'required|min:6',
            'conf_password' => 'required|min:6',
        ]);

        if(strcmp($request->new_password, $request->conf_password) == 0){
            if(Hash::check($request->old_password,$pass)){
                $user->fill([
                    'password' => Hash::make($request->new_password)
                ])->save();
               // $request->session()->flash('message', 'Your password has been changed.');

                return redirect()->back()->with('message','Your password has been changed.');
            }else{
                $request->session()->flash('msg', 'Your old password not correct.');
                return back();
                
            }
        }else{
            $request->session()->flash('msg', 'Your new password not match.');

            return redirect()->back();
            
        }
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
}
