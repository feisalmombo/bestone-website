@extends('home')
@section('title','Partners')
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

            <h3 class="sub-tittle">New Partner
                <a href="{{ url()->previous() }}" class="hidden-xs btn-danger btn-lg pull-right">
                    <span class="glyphicon glyphicon-arrow-left"></span> 
                    Back 
                </a>
                <a href="{{ url()->previous() }}" class="visible-xs pull-right">
                    <span class="glyphicon glyphicon-arrow-left"></span> 
                    Back 
                </a>
            </h3>

            @include('msgs.success')
            <div class="row">

                <div class="col-sm-7 col-sm-offset-2">
                    <form method="POST" action="{{ url('partner') }}" enctype="multipart/form-data">

                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="logo_name">Partner Title</label> 
                            <input type="text" name="logo_name"
                            class="form-control" id="logo_name" placeholder="Partner Title" required>
                        </div>
                        <div class="form-group">
                            <label for="logo_path">Partner Image</label>
                            <input type="file" name="logo_path" id="logo_path" class="btn-success" required>
                        </div>
                        <img src="" class="img img-responsive" id="profile-img-tag" width="70%"  /> <br>
                        <button type="submit" id="submit" class="btn btn-default">Submit</button> 

                    </form> 

                </div>

            </div>
        </div>
    </div>

    @endsection