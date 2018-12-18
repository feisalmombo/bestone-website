@extends('home')
@section('title','Edit Services')
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

            <h3 class="sub-tittle">Edit Service
                <a href="/service" class="hidden-xs btn-danger btn-lg pull-right">
                    <span class=""></span> 
                    Services 
                </a>
                <a href="{{ url()->previous() }}" class="visible-xs pull-right">
                    <span class="glyphicon glyphicon-arrow-left"></span> 
                    Back 
                </a>
            </h3>

            <div class="row">

                <div class="col-sm-7 col-sm-offset-2">
                    <form method="POST" action="{{ url('service/'.$service->id) }}">
                        <input type="hidden"name="_method"value="PATCH">

                        {{ csrf_field() }}  
                        {{ method_field('PATCH') }}
                        
                        <div class="form-group">
                            <label for="service_name">Service Name</label> 
                            <input type="text" name="service_name"
                            value="{{ isset($service->service_name) ? $service->service_name : old('service_name') }}"
                            class="form-control" id="service_name" placeholder="Service Name" required>
                        </div>

                        <div class="form-group">
                            <label for="description">Description:</label>
                            <textarea class="form-control" rows="5" name="description" id="description" required>{{ isset($service->description) ? $service->description : old('description') }}</textarea>
                        </div>
                        <button type="submit" id="submit" class="btn btn-default">Submit</button> 
                        
                    </form> 

                </div>

            </div>
        </div>
    </div>

    @endsection