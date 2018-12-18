<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <link rel="icon" href="img/favicon.ico" type="image/x-icon" />
  
  <title>Best One Ltd - Quality, Speed and Integrity</title>

  <link href="vendors/revolution/css/settings.css" rel="stylesheet">
  <link href="vendors/revolution/css/layers.css" rel="stylesheet">
  <link href="vendors/revolution/css/navigation.css" rel="stylesheet">
  <link href="vendors/animate-css/animate.css" rel="stylesheet">
  <link href="vendors/owl-carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="vendors/flex-slider/flexslider.css" rel="stylesheet">
  <link href="vendors/magnific-popup/magnific-popup.css" rel="stylesheet">
  <link href="css/materialdesignicons.min.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">
  <link href="css/font-awesome.min.css" rel="stylesheet">



  <!-- Bootstrap core CSS -->
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Plugin CSS -->
  <link href="{{ asset('vendor/magnific-popup/magnific-popup.css') }}" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="{{ asset('css/freelancer.min.css') }}" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Best One LTD</a>
      <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fa fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger active" href="{{ URL::asset('/') }}">Home</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Services</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#project">Projects</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#events">Events</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">About</a>
          </li>

          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contacts">Partners</a>
          </li>

          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="masthead bg-primary1 text-white text-center">
    <div class="container">
      <img class="img-fluid mb-5 d-block mx-auto" src="img/profile2.png" alt="">
      <h1 class="text-uppercase mb-0">Best One Ltd</h1>
      <hr class="star-light">
      <h2 class="font-weight-light mb-0">Quality, Speed and Integrity</h2>
    </div>

  </header>

  <!-- Portfolio Grid Section -->
  <section class="portfolio" id="portfolio">
    <div class="container">
      <h2 class="text-center text-uppercase text-secondary mb-0">Our Services</h2>
      <hr class="star-dark mb-5">
      <div class="row ">
       <div class="row">
        @if (count($services) > 0)
        @foreach ($services as $service)
        <div class="col-md-6 col-lg-4">

          <center><h3>{{ $service->service_name }}</h3></center>

          <img style="height:270px;" class="img-fluid" src="{{ asset('storage/'.$service->image_path) }}" alt="">

        </div>
        @endforeach
        @endif

      </div>
    </div>
  </div>
</section>

<!-- Projects Section -->
<section class="bg-projects text-projects mb-0" id="project" style="background-color:red;">
  <div class="container">
    <h2 class="text-center text-uppercase text-projects">Our Projects</h2>
    <hr class="star-dark mb-5">

    <div class="row">
      @if (count($projects) > 0)
      @foreach ($projects as $project)
      <div class="col-md-6 col-lg-4">
        <center><h3>{{ $project->project_name }}</h3></center>
        <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-1">

          <img style="height:270px;" class="img-fluid" src="{{ asset('storage/'.$project->image_path) }}" alt="">
        </a>
      </div>
      @endforeach
      @endif

    </div>
    <div class="text-center mt-4">
      <a class="btn btn-xl btn-primary" href="#">
        <i class="fa fa-eye mr-2"></i>
        See All Projects!
      </a>
    </div>
  </div>
</section>
<!-- Events -->
<section class="portfolio" id="events">
  <div class="">
    <h2 class="text-center text-uppercase text-secondary mb-0">Our Events</h2>
    <hr class="star-dark mb-5">
    <section class="service_single_area">
      <div class="container">
        <div class="service_single_inner">
          <div class="project_single_slider">

            @if(count($galleries) > 0)
            <div id="slider" class="flexslider">
              <ul class="slides">
                @foreach ($galleries as $gallery)
                <li><img src="{{ asset('storage/'.$gallery->image_path) }}" style="width:100%; height:290px;" alt=""></li>                            
                @endforeach

              </ul>
            </div>
            <div id="carousel" class="flexslider">
              <ul class="slides">
                @foreach ($galleries as $gallery)
                <li><img src="{{ asset('storage/'.$gallery->image_path) }}" style="width:100%; height:120px;" alt=""></li>                            
                @endforeach
              </ul>
              <div class="custom-navigation">
                <a href="#" class="flex-prev"><i class="fa fa-angle-left"></i></a>
                <a href="#" class="flex-next"><i class="fa fa-angle-right"></i></a>
              </div>
            </div>

            @endif


          </div>

        </div>
      </div>
    </div>
  </section>
</section>
<!-- About Section -->
<section class="bg-primary text-white mb-0" id="about">
  <div class="container">
    <h2 class="text-center text-uppercase text-white">About Us</h2>
    <hr class="star-light mb-5">
    <div class="row">
      <div class="col-lg-4 ml-auto">
        <center><h3>COMPANY VISION</h3></center>
        <p class="lead">To be the most desired partner for Infrastructure services.</p>
      </div>
      <div class="col-lg-4 mr-auto">
        <center><h3>COMPANY MISSION</h3></center>
        <p class="lead">To make Africa accessible to the world by providing durable infrastructures through technological innovation.</p>
      </div>
    </div>
    {{-- <div class="text-center mt-4">
      <a class="btn btn-xl btn-outline-light" href="#">
        <i class="fa fa-download mr-2"></i>
        Download Now!
      </a>
    </div> --}}
  </div>
</section>

<!-- Partners Section -->
<section id="contacts">
  <div class="container">
    <h2 class="text-center text-uppercase text-secondary mb-0">Our Partners</h2>
    <hr class="star-dark mb-5">
    <div class="row">
      @if (count($partners) > 0)
      @foreach ($partners as $partner)
      <div class="col-md-6 col-lg-4">



        <img style="height:270px;" class="img-fluid" src="{{ asset('storage/'.$partner->logo_path) }}" alt="">

      </div>
      @endforeach
      @endif

    </div>
  </div>
</div>
</section>

<section class="bg-projects text-projects mb-0" id="contact" style="background-color:red;">
  <div class="container">
    <h2 class="text-center text-uppercase text-projects">Contact Us</h2>
    <hr class="star-dark mb-5">
    <div class="row">
      <div class="col-md-5">
        <p style="color: black;">Contact us and we'll get back to you within 24 hours.</p>
        <p><span class="glyphicon glyphicon-envelope"><i class="fa fa-envelope" aria-hidden="true"></i> </span> info@bestone.co.tz</p>
        <p><span class="glyphicon glyphicon-phone"><i class="fa fa-phone" aria-hidden="true"></i> </span> +255 656875538</p>
        <p><span class="glyphicon glyphicon-map-marker"><i class="fa fa-map-marker" aria-hidden="true"></i> </span> Salasala,Mbezi Beach, Kinondoni, New Bagamoyo Rd</p>
        <p><span class="glyphicon glyphicon-archive"><i class="fa fa-archive" aria-hidden="true"></i> </span> P.O.BOX 35782, DAR-ES-SALAAM, TANZANIA</p>        
      </div>
      <div class="col-md-7">

        @include('msgs.success')

        <form action="/comment/validate" method="POST" novalidate>
          {{ csrf_field() }}

          <div class="form-group">
            <input class="form-control" id="name" name="name" placeholder="Please Enter Your Name" type="text" required>
          </div>
          <div class="form-group">
            <input class="form-control" id="email" name="email" placeholder="Please Enter Your Email" type="email" required="required">
          </div>

          <div class="form-group">
            <input class="form-control" id="subject" name="subject" placeholder="Please Enter Your Subject" type="text" required>
          </div>

          <div class="form-group">
            <textarea class="form-control" id="comment" placeholder="Please Enter Your Comment Here..."  name="comment" required></textarea>

          </div>
        </br>

        <div class="form-group">
          <button class="btn btn-primary" type="submit">Send</button>
        </div>

      </div>
    </form>
  </div>
</section>


<!-- Footer -->
<footer class="footer text-center">
  <div class="container">
    <div class="row">
      <div class="col-md-4 mb-5 mb-lg-0">
        <h4 class="text-uppercase mb-4">Best One Ltd</h4>
        <p class="lead mb-0">Making the world a better place</p>
      </div>
      <div class="col-md-4 mb-5 mb-lg-0">
        <h4 class="text-uppercase mb-4">Around the Web</h4>
        <ul class="list-inline mb-0">
          <li class="list-inline-item">
            <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
              <i class="fa fa-fw fa-facebook"></i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
              <i class="fa fa-fw fa-google-plus"></i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
              <i class="fa fa-fw fa-twitter"></i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
              <i class="fa fa-fw fa-linkedin"></i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
              <i class="fa fa-fw fa-dribbble"></i>
            </a>
          </li>
        </ul>
      </div>
          <!--<div class="col-md-4">
            <h4 class="text-uppercase mb-4" id="subscriber">Subscriber</h4>
            @if($errors->any())

            <div class="alert alert-danger" role="alert">

              <ul>
                @foreach ($errors->all() as $error)
                <li>
                  {{ $error }}
                </li>
                @endforeach
              </ul>
            </div>

            @endif

            @if (Session::has('msg'))
            <div class="alert alert-danger" role="alert">
              <strong>{{ session('msg') }}</strong>
            </div>
            @endif
            @if (Session::has('msg1'))
            <div class="alert alert-success" role="alert">
              <strong>Success</strong> 
              <p>
                {{ session('msg1') }}
              </p>

            </div>
            @endif
            <form action="{{ url('subscriber-email') }}" method="POST">
              {{ csrf_field() }}
              <div class="form-group">
                <label for="email">Enter Email address:</label>
                <input type="email" name="email" class="form-control" id="email">
              </div>

              <button type="submit" class="btn btn-default">Submit</button>
            </form>
          </div>-->
        </div>
      </div>
    </footer>

    <div class="copyright py-4 text-center text-white">
      <div class="container">
        <small>Copyright &copy; {{ date('Y') }} All rights reserved | Designed by <a href="https://siltech.co.tz" target="_blank">siltech</a></small>
        <a href="{{ route('login') }}" style="color: white; padding-left: 50px;" class="pull-right">Login</a>
      </div>
    </div>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-to-top d-lg-none position-fixed ">
      <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>

    <!-- Portfolio Modals -->

    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-1">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Telecommunication Networks</h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="img/portfolio/tele.jpg" alt="">
              <p class="mb-5">Telecommunication network is a collection of terminal nodes, links are connected so as to enable telecommunication between the terminals.The transmission links connect the nodes together.</p>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
              Close Service</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-2">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Building and Structures</h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="img/portfolio/building.jpg" alt="">
              <p class="mb-5">Building construction is an ancient human activity. It began with the purely functional need for a controlled environment to moderate the effects of climate.</p>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
              Close Service</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modal 3 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-3">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Road Networks Construction</h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="img/portfolio/road.jpg" alt="">
              <p class="mb-5">Road network consists of a system of interconnected paved carriagesways which are designed to carry huses, cars and goods vehicles. The road network generally forms the most basic level of transport infrastructure within urban areas, and will link with all other areas, both within and beyond the boundaries.</p>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
              Close Service</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modal 4 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-4">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Water Networks</h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="img/portfolio/water.jpg" alt="">
              <p class="mb-5">Water network is a system of engineered hydrologic and hydraulic components which provide water supply.</p>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
              Close Service</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modal 5 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-5">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Fiber Networks</h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="img/portfolio/fiber.jpg" alt="">
              <p class="mb-5">Fiber network is a technology that uses glass or plastic threads (fibers) to transmit data. A fiber optic cable consists of a bundle of glass threads, each of which is capable of transmitting messages modulated onto light waves.</p>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
              Close Service</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modal 6 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-6">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Electrical Networks</h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="img/portfolio/electrical.jpg" alt="">
              <p class="mb-5">Electrical network is an interconnection of electrical components or a model of such an interconnection, consisting of electrical elements.</p>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
              Close Service</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>

    <!-- Contact Form JavaScript -->
    <script src="{{ asset('js/jqBootstrapValidation.js') }}"></script>
    <script src="{{ asset('js/contact_me.js') }}"></script>

    <!-- Custom scripts for this template -->
    <script src="{{ asset('js/freelancer.min.js') }}"></script>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-2.2.4.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Rev slider js -->
    <script src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script src="vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>

    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="vendors/isotope/isotope.pkgd.min.js"></script>
    <script src="vendors/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="vendors/counterup/waypoints.min.js"></script>
    <script src="vendors/counterup/jquery.counterup.min.js"></script>
    <script src="vendors/flex-slider/jquery.flexslider-min.js"></script>

    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="js/gmaps.min.js"></script>

    <script src="js/theme.js"></script>
  </body>

  </html>
