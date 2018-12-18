
@extends('home')
@section('title','Projects')
@section('content')
<!--//profile_details-->
</div>
<!--//menu-right-->
<div class="clearfix"></div>
</div>
<!-- //header-ends -->
<div class="outter-wp">
    
    <!--/candile-->
    <div class="candile"> 
        <div class="candile-inner">
         
            @if (count($errors))
            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach ($errors->all() as $error )
                    <li>
                        {{ $error }}
                    </li>
                    @endforeach
                </ul>
            </div>
            @endif
            <h3 class="sub-tittle">New Project
                <a href="{{ url()->previous() }}" class="hidden-xs btn-danger btn-lg pull-right">
                    <span class="glyphicon glyphicon-arrow-left"></span> 
                    Back 
                </a>
                <a href="{{ url()->previous() }}" class="visible-xs pull-right">
                    <span class="glyphicon glyphicon-arrow-left"></span> 
                    Back 
                </a>
            </h3>
            @if (Session::has('msg'))
            
            <div class="alert alert-success" role="alert">
                <strong>{{ session('msg') }}</strong>
            </div>
            
            @endif
            <div class="row">

                <div class="col-sm-7 col-sm-offset-2">
                    <form method="POST" action="{{ url('project') }}" enctype="multipart/form-data">
                        {{--  <input type="hidden" name="_method" value="PATCH">  --}}
                        {{--  <input type="hidden" name="_token" value="{{ csrf_token() }}">  --}}
                        {{ csrf_field() }}
                        {{--  {{ method_field('PATCH') }}  --}}
                        
                        <div class="form-group">
                            <label for="project_name">Project Title</label> 
                            <input type="text" name="project_name"
                            class="form-control" id="project_name" placeholder="Project Title" required>
                        </div>
                        <div class="form-group">
                            <label for="selector1" >Select Category</label>
                            
                            <select name="category" id="category" class="form-control1" required>
                                <option value="">-- Default --</option>
                                @foreach ($cat_project as $category)
                                <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                @endforeach
                            </select>
                            
                        </div> 
                        <div class="form-group">
                            <label for="description">Description:</label>
                            <textarea class="form-control" rows="5" name="description" id="description" required>

                            </textarea>
                        </div>
                        <div class="form-group">
                            <label for="image">Project Image</label>
                            <input type="file" name="image" id="profile-img" class="btn-success" required>
                        </div>
                        <img src="" class="img img-responsive" id="profile-img-tag" width="70%"  /> <br>
                        <button type="submit" id="submit" class="btn btn-default">Submit</button> 
                        
                    </form> 

                </div>

            </div>
        </div>
    </div>

    @endsection