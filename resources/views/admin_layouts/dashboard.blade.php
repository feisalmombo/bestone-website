@extends('home')
@section('title','Dashboard')
@section('content')

<style>
.hide-bullets {
    list-style:none;
    margin-left: -40px;
    margin-top:20px;
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
    <div class="custom-widgets hidden-xs">
       <div class="row-one">
        <div class="col-md-3 widget">
            <div class="stats-left ">
                <h5>Total</h5>
                <h4>Subscriber</h4>
            </div>
            <div class="stats-right">
                <label>{{ $subscribers }}</label>
            </div>
            <div class="clearfix"> </div>   
        </div>
        <div class="col-md-3 widget states-mdl">
            <div class="stats-left">
                <h5>Total</h5>
                <h4>Visitors</h4>
            </div>
            <div class="stats-right">
                <label> 85</label>
            </div>
            <div class="clearfix"> </div>   
        </div>
        <div class="col-md-3 widget states-thrd">
            <div class="stats-left">
                <h5>Total</h5>
                <h4>Projects</h4>
            </div>
            <div class="stats-right">
                <label>{{ $project_total }}</label>
            </div>
            <div class="clearfix"> </div>   
        </div>
        <div class="col-md-3 widget states-last">
            <div class="stats-left">
                <h5>Total</h5>
                <h4>Images</h4>
            </div>
            <div class="stats-right">
                <label>{{ $total_img }}</label>
            </div>
            <div class="clearfix"> </div>   
        </div>
        <div class="clearfix"> </div>   
    </div>
</div>
<!--//custom-widgets-->
<!--/candile-->
<div class="candile"> 
    <div class="candile-inner">
        <h3 class="sub-tittle">Events
            <a href="#" data-toggle="modal" data-target="#myModal1" class=" btn-danger btn-lg pull-right hidden-xs">
                <span class="glyphicon glyphicon-plus"></span> 
                Image
            </a>
            <a href="#" data-toggle="modal" data-target="#myModal1" class="pull-right visible-xs">
                <span class="glyphicon glyphicon-plus"></span> 
                Image
            </a>
            
            
        </h3>
        
        @if (count($images) > 0)
        <div id="main_area">
            <!-- Slider -->
            <div class="row">
                <div class="col-xs-12" id="slider">
                    <!-- Top part of the slider -->
                    <div class="row">
                        <div class="col-sm-12"  id="carousel-bounding-box">
                            <div class="carousel slide" id="myCarousel">
                                <!-- Carousel items -->
                                <div class="carousel-inner" style="max-height:200">
                                    @foreach ($images as $key => $image)
                                    <div class="item{{ $key == 0 ? ' active' : '' }}" data-slide-number="{{ $key }}">
                                        <img src="{{ asset('storage/'.$image->image_path) }}"
                                        style="width:500px; max-height:300px;" class="img-responsive ">
                                    </div>
                                    @endforeach
                                </div>
                                
                            </div>
                            <!-- Carousel nav -->
                            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>                                       
                            </a>
                            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>                                       
                            </a>                                
                        </div>
                    </div>

                    
                </div>
            </div>
        </div><!--/Slider-->

        <div class="row hidden-xs" id="slider-thumbs">
            <!-- Bottom switcher of slider -->
            <ul class="hide-bullets">
                @foreach ($images as $key => $image)
                <li class="col-sm-2">
                    <a class="thumbnail" id="carousel-selector-{{ $key }}">
                        <img src="{{ asset('storage/'.$image->image_path) }}"
                        style="width:100%; height:120px;"></a>
                    </li>  
                    @endforeach
                    
                </ul>                 
            </div>
        </div>
        @else
        <center><h2>No Image Added !!!</h2></center>  
        @endif
        
    </div>



    <!-- Modal -->
    <div class="modal fade" id="myModal1" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Add Image</h4>
        </div>
        <div class="modal-body">
            <p>Choose Your Image.</p>

            <form action="{{ url('gallery') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type='file' name="image" id="image" onchange="readURL(this);" required />
                <br>
                <div class="" style="max-width: 100%; max-height:50%;">
                    <img id="blah" src="{{ asset('storage/'.$image->image_path) }}" alt="your image" style="height:30px;" />
                </div>
            </div>
            <button type="submit" class="btn btn-default" >Upload</button>
      {{--  <div class="modal-footer">
        <button type="submit" class="btn btn-default" data-dismiss="modal">Upload</button>
    </div>  --}}
    
</form>
</div>



@endsection

