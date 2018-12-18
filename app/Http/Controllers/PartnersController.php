<?php

namespace App\Http\Controllers;

use App\Partner;
use DB;

use Auth;
use Illuminate\Http\Request;

class PartnersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partners = DB::table('partners')
        ->latest()
        ->get();

        //return $partners->all();

        return view('partners.index',compact('partners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('partners.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(),[
            'logo_name' => 'required',
            'logo_path' => 'required|image|mimes:jpeg,png,jpg,gif,svg|dimensions:width>=300,height>=300',
        ]);  

        $partner = new Partner();   
        $partner->logo_name = $request->logo_name;
        $partner->logo_path = $request->logo_path->store('partner','public');
        $partner->user_id = Auth::user()->id;

        $partner->save();

        //return $partner;

        //return $partner->all();
        
        return redirect('/partner')->with('message', 'Partner Successful created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function show(Partner $partner)
    {
        $partner = Partner::findOrFail($partner->id);
        return view('partners.show',compact('partner'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function edit(Partner $partner)
    {
        $partner = Partner::findOrFail($partner->id);
        return view('partners.edit',compact('partner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Partner $partner)
    { 

       $partner->logo_name = $request->logo_name;
       $partner->user_id = Auth::user()->id;

       $partner->save();

       return redirect()->back()->with('message','Partner Edit Successful');
   }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partner $partner)
    {

       $partner = DB::table('partners')->delete($partner->id);

       return redirect('/partner')->with('message','Partner Logo Successful deleted');
   }
}
