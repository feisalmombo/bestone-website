@extends('home')
@section('title','Edit Partners')
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

            <h3 class="sub-tittle">Edit Partner
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
                    <form method="POST" action="{{ url('partner/'.$partner->id) }}">
                        <inputtype="hidden"name="_method"value="PATCH">

                        {{ csrf_field() }}  
                        {{ method_field('PATCH') }}
                        
                        <div class="form-group">
                            <label for="logo_name">Partner Title</label> 
                            <input type="text" name="logo_name"
                            value="{{ isset($partner->logo_name) ? $partner->logo_name : old('logo_name') }}"
                            class="form-control" id="logo_name" placeholder="Partner Title" required>
                        </div>
                        <button type="submit" id="submit" class="btn btn-default">Submit</button> 
                        
                    </form> 

                </div>

            </div>
        </div>
    </div>

    @endsection