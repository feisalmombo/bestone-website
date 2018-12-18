@extends('home')
@section('title','Projects Panel')
@section('content')
<!--//profile_details-->
</div>
<!--//menu-right-->
<div class="clearfix"></div>
</div>
<!-- //header-ends -->
<div class="outter-wp">
    <!--custom-widgets-->
    
    <!--//custom-widgets-->
    <!--/candile-->
    <div class="candile"> 
        <div class="candile-inner">
            <h3 class="sub-tittle">
                Projects
                <a href="{{ url('upload') }}" class="btn-danger btn-lg pull-right hidden-xs">
                    <span class="glyphicon glyphicon-plus"></span> 
                    Project
                </a>
                <a href="{{ url('upload') }}" class=" pull-right visible-xs">
                    <span class="glyphicon glyphicon-plus"></span> 
                    Project
                </a>
            </h3>
            

            <div class="row hidden-xs">
                
              @foreach ($projects as $key => $project)
              <a href="{{ url('project/'.$project->id) }}">
                  <div class="col-sm-3" style="margin-bottom:20px;">
                    <div class=" panel-default clearfix" >
                        <div class="panel-heading" style="padding:30px;">
                            <span style="font-size:30px;" class="">
                                Total {{ $project->total }}
                            </span>
                        </div>
                        <div class="panel-body">
                            <span style="color:black; font-size:19px;">
                                {{ $project->category_name }}
                            </span>
                            
                        </div>
                    </div>
                </div>
                

            </a>
            @if(($key+1) % 4 == 0)
            <div class="clearfix"></div>
            @endif
            @endforeach
            
            </div> 

            <table class="table table-bordered visible-xs" >
            <thead>
            <tr>
            <th>Project Category</th>
            <th>No. Project</th>
            <th>Action</th>
            </tr>
            </thead>
            <tbody>
            
            @foreach ($projects as $project)
            
            <tr>
            <td>{{ $project->category_name }}</td>
            <td>{{ $project->total }}</td>
            <td>
            <a href="{{ url('project/'.$project->id) }}" role="button">View</a>
            </td> 
            </tr>
            
            @endforeach
            
            </tbody>
            </table>

            </div>

            </div>

            @endsection