@extends('home')
@section('title','Show Services')
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
            <h3 class="sub-tittle">Services
                <a href="{{ url('service') }}" class="hidden-xs btn-danger btn-lg pull-right">
                    <span></span> Services
                </a>
                <a href="{{ url('service') }}" class="visible-xs pull-right">
                    <span class="glyphicon glyphicon-plus"></span> Service
                </a>
            </h3>

            @if (Session::has('message'))
            <div class="alert alert-success alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Success!</strong> Deleted.
            </div>
            @endif

            @if (count($service) > 0)

            <div class="row ">
                <div class="col-md-4 item1">
                    <div class="item2">
                        <div >
                          <a href="{{ url('storage/'.$service->image_path) }}">
                            <img src="{{ asset('storage/'.$service->image_path) }}" alt="{{ $service->service_name }}" class="img-rounde" style="width:100%">
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-8">
                <p><b>Service Name:</b></p> {{ $service->service_name }}</p>

                <p><b>Description:</b></p> {{ $service->description }}</p>

                <p style="color:blue;">Uploade By:
                    @php 
                    $name = \DB::table('users')
                    ->select('first_name','last_name','id')
                    ->where('id','=',$service->user_id)
                    ->first()
                    
                    @endphp
                    @if($name->id == Auth::user()->id)
                    You
                    @else
                    {{ $name->first_name }} {{ $name->last_name }}
                    @endif
                </p>
                <i>Uploaded:{{ (new Carbon\Carbon($service->created_at))->diffForHumans() }}</i>

                
                
                @else
                <div class="alert alert-success" role="alert">
                    <strong>No Entry</strong>
                </div>
                @endif


            </div>

        </div>

        @endsection