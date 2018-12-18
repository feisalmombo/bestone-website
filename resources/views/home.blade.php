<!DOCTYPE HTML>
<html>
<head>
  <title>Admin | @yield('title')</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="keywords" content="Augment Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
  Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
  <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
  <!-- Bootstrap Core CSS -->
  <link href="{{ URL::asset('../admin/css/bootstrap.min.css') }}" rel='stylesheet' type='text/css' />
  <!-- Custom CSS -->
  <link href="{{ URL::asset('../admin/css/style.css') }}" rel='stylesheet' type='text/css' />
  <!-- Graph CSS -->
  <link href="{{ URL::asset('../admin/css/font-awesome.css') }}" rel="stylesheet"> 
  <!-- jQuery -->
  
  <link href='{{ URL::asset('//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400') }}' rel='stylesheet' type='text/css'>
  <!-- lined-icons -->
  <link rel="stylesheet" href="{{ URL::asset('../admin/css/icon-font.min.css') }}" type='text/css' />
  <!-- //lined-icons -->
  <script src="{{ URL::asset('../admin/js/jquery-1.10.2.min.js') }}"></script>
  <script src="{{ URL::asset('../admin/js/amcharts.js') }}"></script>  
  <script src="{{ URL::asset('../admin/js/serial.js') }}"></script>    
  <script src="{{ URL::asset('../admin/js/light.js') }}"></script> 
  <script src="{{ URL::asset('../admin/js/radar.js') }}"></script> 
  {{-- <link href="{{ URL::asset('../admin/css/barChart.css') }}" rel='stylesheet' type='text/css' /> --}}
  <link href="{{ URL::asset('../admin/css/fabochart.css') }}" rel='stylesheet' type='text/css' />
  <!--clock init-->
  <script src="{{ URL::asset('../admin/js/css3clock.js') }}"></script>
  <!--Easy Pie Chart-->
  <!--skycons-icons-->
  <script src="{{ URL::asset('../admin/js/skycons.js') }}"></script>

  {{-- <script src="{{ URL::asset('../admin/js/jquery.easydropdown.js') }}"></script> --}}

  <!--//skycons-icons-->
</head> 
<body>
 <div class="page-container">
   <!--/content-inner-->
   <div class="left-content">
     <div class="inner-content">
      <!-- header-starts -->
      <div class="header-section">
        <!--menu-right-->
        <div class="top_menu">

         <div class="srch">
           <p style="color:white;font-size:39px;text-align:center;">
             Best One Ltd
           </p>
         </div>
         
         <!--/profile_details-->
         
         
         @yield('content')
         <div class="clear-fix">

         </div>


       </div>
     </div>
     <!--footer section start-->
     <footer>
       <p>&copy {{ date('Y') }} Best One Ltd . All Rights Reserved | Design by <a href="https://siltech.co.tz/" target="_blank">Siltech</a></p>
     </footer>
     <!--footer section end-->

     <!--//content-inner-->
     <!--/sidebar-menu-->
     <div class="sidebar-menu">
      <header class="logo">
        <a href="#" class="sidebar-icon"> <span class="fa fa-bars">
        </span> </a> <a href="index.html"> <span id="logo"> <h1>Admin</h1></span> 
          <!--<img id="logo" src="" alt="Logo"/>--> 
        </a> 
      </header>
      <div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
      <!--/down-->
      <div class="down">  
        <a href="" data-toggle="modal" data-target="#myModal">
          @if (count(Auth::user()->profile_image_path) > 0)
          <img src="{{ asset('storage/profile/'.Auth::user()->profile_image_path) }}">
          @else
          <img src="{{ URL::asset('../admin/images/profile.png') }}"> 
          @endif
          
        </a>
        

        



        <span class=" name-caret">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</span>
        <p>System Administrator of Best One Ltd</p>
        <ul>
          <li><a class="tooltips" href="{{ url('profile/'.Auth::user()->id.'/edit') }}"><span>Profile</span><i class="lnr lnr-user"></i></a></li>
          <li><a class="tooltips" href="{{ url('update_password') }}"><span>Password</span><i class="lnr lnr-cog"></i></a></li>
          <li><a class="tooltips" href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            <span>Log out</span><i class="lnr lnr-power-switch">
            </i>
          </a>
          
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
          </form>
        </li>
      </ul>
    </div>
    <!--//down-->
    <div class="menu">
      <ul id="menu" >
        <li><a href="{{ url('gallery') }}"><i class="fa fa-camera-retro"></i> <span>Events</span></a></li>
        <li id="menu-academico">
          <a href="{{ url('project') }}"><i class="fa fa-table"></i> <span>Projects</span> </a>
          
        </li>
        
{{--  <li>
    @if(Auth::user()->status)
    <a href="{{ url('send-token') }}"><i class="lnr lnr-plus-circle">
    </i> <span>Add Admin</span></a>
    @endif
  </li>  --}}
{{--  <li>
        @if(Auth::user()->status)
        <a href="{{ url('see-user') }}"><i class="lnr lnr-user">
        </i> <span>See All User</span></a>
        @endif
      </li>  --}}

      {{--  @if(Auth::user()->status)
        <a href="{{ url('subscribers') }}"><i class="lnr lnr-user">
        </i> <span>Subscribers</span></a>
        @endif
      </li> --}}<li>


        <li><a href="{{ url('comment') }}"><i class="fa fa-comments"></i> <span>Comments</span></a></li>

        <li><a href="{{ url('partner') }}"><i class="fa fa-user"></i> <span>Partners</span></a></li>

        <li><a href="{{ url('service') }}"><i class="fa fa-medkit"></i> <span>Services</span></a></li>
      </ul>
    </div>
  </div>
  <div class="clearfix"></div>      
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Change Your Profile Image</h4>
      </div>
      <div class="modal-body">
        <p>Choose Your Image.</p>

        <form action="{{ url('profile-imaage') }}" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
          <input type='file' name="image" id="image" onchange="readURL1(this);" required />
          <br>
          <div class="" style="max-width: 100%; max-height:50%;">
            <img id="blah1" src="{{ asset('storage/profile/'.Auth::user()->profile_image_path) }}" alt="your image" style="width:100px;" />
          </div>
          <button type="submit" class="btn btn-default" >Upload</button>
        </form>
      </div>
      
    </div>
    
  </div>
</div>
<!--End Modal -->



<script>

  function check(){
    alert("Your Not Authorized with This Action")
    return false
  }

  var toggle = true;

  $(".sidebar-icon").click(function() {                
    if (toggle)
    {
      $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
      $("#menu span").css({"position":"absolute"});
    }
    else
    {
      $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
      setTimeout(function() {
        $("#menu span").css({"position":"relative"});
      }, 400);
    }

    toggle = !toggle;
  });

  function readURL(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      
      reader.onload = function (e) {
        $('#profile-img-tag').attr('src', e.target.result);
      }
      reader.readAsDataURL(input.files[0]);
    }
    
  }
  $("#profile-img").change(function(){
    readURL(this);
  });



  jQuery(document).ready(function($) {

    $('#myCarousel').carousel({
      interval: 5000
    });

    $('#carousel-text').html($('#slide-content-0').html());

    //Handles the carousel thumbnails
    $('[id^=carousel-selector-]').click( function(){
      var id = this.id.substr(this.id.lastIndexOf("-") + 1);
      var id = parseInt(id);
      $('#myCarousel').carousel(id);
    });


    // When the carousel slides, auto update the text
    $('#myCarousel').on('slid.bs.carousel', function (e) {
     var id = $('.item.active').data('slide-number');
     $('#carousel-text').html($('#slide-content-'+id).html());
   });
  });

  function readURL(input) {

    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function (e) {
        $('#blah')
        .attr('src', e.target.result)
        
        .height(300);
      };
      reader.readAsDataURL(input.files[0]);
    }
  }

  function readURL1(input) {

    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function (e) {
        $('#blah1')
        .attr('src', e.target.result)
        
        .height(300);
      };
      reader.readAsDataURL(input.files[0]);
    }
  }
</script>
<!--js -->
<link rel="stylesheet" href="{{ URL::asset('../admin/css/vroom.css') }}">
<script type="text/javascript" src="{{ URL::asset('../admin/js/vroom.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('../admin/js/TweenLite.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('../admin/js/CSSPlugin.min.js') }}"></script>
<script src="{{ URL::asset('../admin/js/jquery.nicescroll.js') }}"></script>
<script src="{{ URL::asset('../admin/js/scripts.js') }}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{ URL::asset('../admin/js/bootstrap.min.js') }}"></script>

</body>
</html>
