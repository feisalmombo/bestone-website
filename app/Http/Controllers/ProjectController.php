<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use DB;
use Auth;
use Session;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = DB::table('project_category_assignments')
        ->select('category_name','total','id')
        ->get();
        
        return view('admin_layouts.projects.index',compact('projects'));
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

        $project = new Project();
        $this->validate(request(),[
            'project_name' => 'required',
            'category' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|dimensions:width>=500,height>=500',
        ]);     

        $project->project_name = $request->project_name;
        $project->description = $request->description;
        $project->image_path = $request->image->store('projects','public');
        $project->category_id = $request->category;
        $project->user_id = Auth::user()->id;
        $this->totalPost($request->category);

        $project->save();

        return redirect('project/'.$request->category);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     $projects = Project::where('category_id',$id)
     ->latest()
     ->get();
        // return Project::find($id)->categoryNames;

     return view('admin_layouts.projects.show_projects',compact('projects'));
 }

 public function sowProject($id){
    $project = Project::where('id',$id)
    ->select('*')
    ->first();


    $userDetails = DB::table('projects')
    ->join('users','users.id','=','projects.user_id')
    ->select('users.first_name','users.last_name','users.id')
    ->where('users.id','=',$project->user_id)
    ->first();

    return view('admin_layouts.projects.show_one_project',compact('project','userDetails'));
}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit($project)
    {
        $projects = Project::where('id',$project)
        ->select('*')
        ->first();
        $cat_project = DB::table('project_category_assignments')
        ->select('category_name','id')
        ->get();

        Session::put('id',$project);

        return view('admin_layouts.projects.edit_project',compact('projects','cat_project')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $project = Project::find($id);
        $pro_id = Session::get('id');

        $project->project_name = $request->project_name;
        $project->category_id = $request->category;
        $project->description = $request->description;

        if($pro_id != $request->category){
            $this->totalPost($request->category);
            $this->totalRemain($pro_id);
        }
        
        $project->save();


        

        return redirect()->back()->with('msg','Edit Successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::find($id);
        $this->totalRemain($id);
        $project->delete();

        return redirect()->back()->with('message','Item Have Been Deleted');
    }

    public function uploadForm(){
        $cat_project = DB::table('project_category_assignments')
        ->select('id','category_name')
        ->get();
        return view('admin_layouts.projects.upload_project',compact('cat_project'));
    }


    public function totalPost($cat_id){
        $available = DB::table('project_category_assignments')
        ->select('total')
        ->where('id',$cat_id)
        ->first()->total;

        $total = $available + 1;

        DB::table('project_category_assignments')
        ->where('id',$cat_id)
        ->update([
            'total' => $total,
        ]);

    }
    public function totalRemain($id){
        $cat_id = DB::table('projects')
        ->select('category_id')
        ->where('id',$id)
        ->first()->category_id;

        $available = DB::table('project_category_assignments')
        ->select('total')
        ->where('id',$cat_id)
        ->first()->total;

        $total = $available - 1;

        DB::table('project_category_assignments')
        ->where('id',$cat_id)
        ->update([
            'total' => $total,
        ]);
    }
}
