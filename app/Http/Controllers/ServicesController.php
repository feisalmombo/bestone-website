<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;
use DB;
use Auth;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = DB::table('services')
        ->latest()->paginate(6);

        //return $services->all();

        return view('services.index',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $service = new Service();
        $this->validate(request(),[
            'service_name' => 'required',
            'description' => 'required',
            'image_path' => 'required|image|mimes:jpeg,png,jpg,gif,svg|dimensions:width>=300,height>=300',
        ]);     

        $service->service_name = $request->service_name;
        $service->description = $request->description;
        $service->image_path = $request->image_path->store('services','public');
        $service->user_id = Auth::user()->id;

        $service->save();

        return redirect('/service')->with('message', 'Service Successful created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        $service = Service::findOrFail($service->id);
        return view('services.show',compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        $service = Service::findOrFail($service->id);
        return view('services.edit',compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $service = Service::find($service->id);

        $service->service_name = $request->service_name;
        $service->user_id = Auth::user()->id;
        $service->description = $request->description;

        $service->save();

        return redirect()->back()->with('message','Service Edit Successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $service = DB::table('services')->delete($service->id);

        return redirect('/service')->with('message','Service Successful deleted');
    }
}
