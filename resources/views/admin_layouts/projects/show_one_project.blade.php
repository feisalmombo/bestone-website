@extends('home')
@section('title','Home')
@section('content')
<!--//profile_details-->
</div>
<!--//menu-right-->
<div class="clearfix"></div>
</div>
<!-- //header-ends -->
<div class="outter-wp">
    
<!--//custom-widgets-->
<!--/candile-->
<div class="candile"> 
    <div class="candile-inner">
        <h3 class="sub-tittle">{{ $project->project_name }}
            <a href="{{ url()->previous() }}" class="hidden-xs btn-danger btn-lg pull-right">
                <span class="glyphicon glyphicon-arrow-left"></span> 
                Back 
        </a>
        <a href="{{ url()->previous() }}" class="pull-right visible-xs">
                <span class="glyphicon glyphicon-arrow-left"></span> 
                Back 
        </a>
        </h3>
       

        <div class="thumbnail">
                
                  <img src="{{ asset('storage/'.$project->image_path) }}" alt="Fjords" style="width:100%">
                  <div class="caption">
                      <br>
                      <br>
                      <h3>Description</h3>
                    <p>{{ $project->description }}</p>
                    <p style="color:blue;">
                        Uploaded by:
                        @if ($userDetails->id == Auth::user()->id)
                            <span style="color:red">You</span>

                        @else
                        <span style="color:red">{{ $userDetails->first_name }} {{ $userDetails->last_name }}</span>
                        @endif
                            
                    </p>
                    <p style="color:blue;">Uploaded: 
                        <span style="color:red"> {{ (new Carbon\Carbon($project->created_at))->diffForHumans() }}
                        </span></p>
                  </div>
               
              </div>
</div>

</div>

@endsection