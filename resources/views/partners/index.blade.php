@extends('home')
@section('title','Partners Panel')
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

            @include('msgs.success')
            
            <h3 class="sub-tittle">
                Partners
                <a href="{{ url('partner/create') }}" class="btn-danger btn-lg pull-right hidden-xs">
                    <span class="glyphicon glyphicon-plus"></span> 
                    Partner
                </a>
                <a href="{{ url('partner') }}" class=" pull-right visible-xs">
                    <span class="glyphicon glyphicon-plus"></span> 
                Partners                </a>
            </h3>
            

            <div class="row hidden-xs">

              @foreach ($partners as $key => $partner)
              
              <a href="{{ url('partner/'.$partner->id) }}">

                  <div class="col-sm-3" style="margin-bottom:20px;">
                    <div class=" panel-default clearfix" >
                        <div class="panel-heading" style="padding:30px;">
                            <span style="font-size:30px; color: white"; class="">
                                <img src="{{ asset('storage/' .$partner->logo_path) }}" alt="" width="50px">
                            </span>
                        </div>
                        <div class="panel-body">
                            <span style="color:black; font-size:19px;">
                                {{ $partner->logo_name }}
                            </span>
                            <p style="color:blue;">Uploaded: 
                                <span style="color:red"> {{ (new Carbon\Carbon($partner->created_at))->diffForHumans() }}
                                </span></p>

                            </div>
                        </div>
                    </div>


                </a>
                @if(($key+1) % 4 == 0)
                <div class="clearfix"></div>
                @endif
                @endforeach

                </div> 

                
                </div>
                </div>

                @endsection