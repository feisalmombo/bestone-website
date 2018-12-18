@extends('home')
@section('title','Show Projects')
@section('content')

<style>
        .item1 {
    
            max-width: 530px; 
            max-height: 490px;
            
          
          }
          .item1 img{
            height: auto; 
            width: auto; 
            max-width: 530px; 
            max-height: 490px;
            margin: 0;
            margin-left: auto;
              margin-right: auto;
              display: block;
          }
          .item2 img{
            height: auto; 
            width: auto; 
            max-width: 230px; 
            max-height: 195px;
            margin: 0;
            margin-left: auto;
              margin-right: auto;
              display: block;
          }
</style>
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
        <h3 class="sub-tittle">Projects
                <a href="{{ url('upload') }}" class="hidden-xs btn-danger btn-lg pull-right">
                        <span class="glyphicon glyphicon-plus"></span> Project
                </a>
                <a href="{{ url('upload') }}" class="visible-xs pull-right">
                        <span class="glyphicon glyphicon-plus"></span> Project
                </a>
        </h3>

    @if (Session::has('message'))
    <div class="alert alert-success alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Success!</strong> Item Deleted.
          </div>
    @endif

    @if (count($projects) > 0)
    @foreach ($projects as $project)
    <div class="row ">
            <div class="col-md-4 item1">
                <div class="item2">
                    <div >
                  <a href="{{ url('storage/'.$project->image_path) }}">
                    <img src="{{ asset('storage/'.$project->image_path) }}" alt="{{ $project->project_name }}" class="img-rounde" style="width:100%">
                </div>
                </a>
            </div>
        </div>
        <div class="col-sm-8">
            <p><b>Project Title:</b></p> {{ $project->project_name }}</p>
            {{--  <p><b>Price:</b> <span style="color: red"> {{ $detail->price}} TSH</span></p>  --}}
            <p><b>Project Description:</b><p> {{ str_limit($project->description,80)}}</p>
            <p style="color:blue;">Uploade By:
                @php 
                    $name = \DB::table('users')
                        ->select('first_name','last_name','id')
                        ->where('id','=',$project->user_id)
                        ->first()
                    
                 @endphp
                 @if($name->id == Auth::user()->id)
                    You
                 @else
                    {{ $name->first_name }} {{ $name->last_name }}
                @endif
            </p>
            <i>Uploaded:{{ (new Carbon\Carbon($project->created_at))->diffForHumans() }}</i>
            
            <div class="pull-right">
                
                <a href="{{ url('/project/'.$project->id.'/edit') }}" class="btn btn-info" role="button"><span class="glyphicon glyphicon-edit"></span> Edit</a>
                
                
                <a href="{{ url('/show/'.$project->id) }}" class="btn btn-warning" role="button"><span class="glyphicon glyphicon-eye-open"></span> Show</a>
                
                <a class="btn btn-danger" data-toggle="modal" href='#{{ $project->id }}'>
                    <span class="glyphicon glyphicon-trash">
                    </span> Delete</a>
                    <div class="modal " id="{{ $project->id }}">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header ">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title">Confirmation</h4>
                                </div>
                                <div class="modal-body">
                                    <p style="color: red">Are You Sure, You Want To Delete it?</p>
                                </div>
                                <div class="modal-footer">

                                    <form action="/project/{{ $project->id }}" method="POST" role="form">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>

                                        <button type="submit" class="btn btn-primary">
                                            <span class="glyphicon glyphicon-trash">
                                            </span> Delete</button>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                
    
    @endforeach
    @else
        <div class="alert alert-success" role="alert">
            <strong>No Entry</strong>
        </div>
    @endif
       

</div>

</div>

@endsection