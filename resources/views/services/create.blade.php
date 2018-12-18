@extends('home')
@section('title','Services')
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

           @include('msgs.success')
           
            <h3 class="sub-tittle">New Service
                <a href="{{ url()->previous() }}" class="hidden-xs btn-danger btn-lg pull-right">
                    <span class="glyphicon glyphicon-arrow-left"></span> 
                    Back 
                </a>
                <a href="{{ url()->previous() }}" class="visible-xs pull-right">
                    <span class="glyphicon glyphicon-arrow-left"></span> 
                    Back 
                </a>
            </h3>
           
            <div class="row">

                <div class="col-sm-7 col-sm-offset-2">
                    <form method="POST" action="{{ url('service') }}" enctype="multipart/form-data">
                        
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="service_name">Service Name</label> 
                            <input type="text" name="service_name"
                            class="form-control" id="service_name" placeholder="Service Name" required>
                        </div>

                        <div class="form-group">
                            <label for="description">Description:</label>
                            <textarea class="form-control" rows="5" name="description" id="description" required>

                            </textarea>
                        </div>
                        <div class="form-group">
                            <label for="image_path">Service Image</label>
                            <input type="file" name="image_path" id="profile-img" class="btn-success" required>
                        </div>
                        <img src="" class="img img-responsive" id="profile-img-tag" width="70%"  /> <br>
                        <button type="submit" id="submit" class="btn btn-default">Submit</button> 

                    </form> 

                </div>

            </div>
        </div>
    </div>

    @endsection