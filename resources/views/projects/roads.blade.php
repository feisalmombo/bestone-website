<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="img/favicon.ico" type="image/x-icon" />
    
    <title>Best One Ltd - Quality, Speed and Integrity</title>

    <!-- Icon css link -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/materialdesignicons.min.css" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Rev slider css -->
    <link href="vendors/revolution/css/settings.css" rel="stylesheet">
    <link href="vendors/revolution/css/layers.css" rel="stylesheet">
    <link href="vendors/revolution/css/navigation.css" rel="stylesheet">
    <link href="vendors/animate-css/animate.css" rel="stylesheet">
    <link href="vendors/owl-carousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Extra plugin css -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

</head>
<body>


    <!--================Header Area =================-->
    <header class="main_header_area">
        <div class="header_top_area">
            <div class="container">
                <div class="pull-left">
                    <a href="#" style="color: #fff;"><i class="fa fa-phone"></i>+255 656875538</a>
                    <a href="#" style="color: #fff;"><i class="fa fa-map-marker"></i>Salasala, Mbezi Beach, Kinondoni, New Bagamoyo Rd</a>
                    <a href="#" style="color: #fff;"><i class="fa fa-address-card" aria-hidden="true"></i>P.O. BOX 35782, DAR ES SALAAM, TANZANIA</a>
                </div>
                <div class="pull-right">
                    <ul class="header_social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="main_menu_area">
            <div class="container">
                <nav class="navbar navbar-default">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"><img src="img/logo.png" alt="" width="55px"></a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                           <li class="dropdown submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home</a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ URL::asset('/') }}">Home</a></li>
                            </ul>
                        </li>
                        <li class="dropdown submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Projects</a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ URL::asset('/building') }}">Building and Structures</a></li>
                                <li><a href="{{ URL::asset('/road') }}">Road Networks</a></li>
                                <li><a href="{{ URL::asset('/water') }}">Water Networks</a></li>
                                <li><a href="{{ URL::asset('/fiber') }}">Fiber Networks</a></li>
                                <li><a href="{{ URL::asset('/electrical') }}">Electrical Networks</a></li>
                                <li><a href="{{ URL::asset('/data') }}">Data Center</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ URL::asset('/service') }}">Services</a></li>
                        <li><a href="#">about us</a></li>
                        <li><a href="#">Contact</a></li>
                        <li class="icon_search"><a href="#"><i class="mdi mdi-cart"></i></a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav>
        </div>
    </div>
</header>
<!--================Header Area =================-->

<!--================Banner Area =================-->
<section class="banner_area">
    <div class="container">
        <div class="banner_inner_text">
            <h4>Road Networks</h4>
            <ul>
                <li><a href="{{ URL::asset('/') }}">Home</a></li>
                <li class="active"><a href="{{ URL::asset('/road') }}">Road Networks</a></li>
            </ul>
        </div>
    </div>
</section>
<!--================End Banner Area =================-->

<!--================Our Project2 Area =================-->
<section class="our_project2_area project_grid_three">
 <div class="container">
     <div class="main_c_b_title">
        <h2>Our<br class="title_br">Projects</h2>
        <h6>Great & Awesome Works</h6>
    </div>
    <ul class="our_project_filter">
        <li class="active" data-filter="*"><a href="#">All</a></li>
        <li data-filter=".building"><a href="#">Buildings</a></li>
        <li data-filter=".interior"><a href="#">Roads</a></li>
        <li data-filter=".design"><a href="#">Water</a></li>
        <li data-filter=".isolation"><a href="#">Fiber</a></li>
        <li data-filter=".plumbing"><a href="#">Electrical</a></li>
        <li data-filter=".tiling"><a href="#">Data</a></li>
    </ul>
    <div class="row our_project_details">
        <div class="col-md-4 col-sm-6 building isolation interior">
            <div class="project_item">
                <img src="img/project/project-grid-three/project-g-three-1.jpg" alt="">
                <div class="project_hover">
                    <div class="project_hover_inner">
                        <div class="project_hover_content">
                            <a href="#"><h4>Buildings and  Structure</h4></a>
                            <p>This is how to provide the fiber configuration item of internet with high speed to the client.</p>
                            <a class="view_btn" href="#">View Project</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 building isolation tiling design">
            <div class="project_item">
                <img src="img/project/project-grid-three/project-g-three-2.jpg" alt="">
                <div class="project_hover">
                    <div class="project_hover_inner">
                        <div class="project_hover_content">
                            <a href="#"><h4>Road Networks</h4></a>
                            <p>This is how to provide the fiber configuration item of internet with high speed to the client.</p>
                            <a class="view_btn" href="#">View Project</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 isolation tiling interior design plumbing">
            <div class="project_item">
                <img src="img/project/project-grid-three/project-g-three-3.jpg" alt="">
                <div class="project_hover">
                    <div class="project_hover_inner">
                        <div class="project_hover_content">
                            <a href="#"><h4>Water Networks</h4></a>
                            <p>This is how to provide the fiber configuration item of internet with high speed to the client.</p>
                            <a class="view_btn" href="#">View Project</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 building isolation tiling plumbing">
            <div class="project_item">
                <img src="img/project/project-grid-three/project-g-three-4.jpg" alt="">
                <div class="project_hover">
                    <div class="project_hover_inner">
                        <div class="project_hover_content">
                            <a href="#"><h4>Fiber Networks</h4></a>
                            <p>This is how to provide the fiber configuration item of internet with high speed to the client.</p>
                            <a class="view_btn" href="#">View Project</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 isolation tiling interior plumbing">
            <div class="project_item">
                <img src="img/project/project-grid-three/project-g-three-5.jpg" alt="">
                <div class="project_hover">
                    <div class="project_hover_inner">
                        <div class="project_hover_content">
                            <a href="#"><h4>Electrical Networks</h4></a>
                            <p>This is how to provide the fiber configuration item of internet with high speed to the client.</p>
                            <a class="view_btn" href="#">View Project</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 building isolation tiling design plumbing">
            <div class="project_item">
                <img src="img/project/project-grid-three/project-g-three-6.jpg" alt="">
                <div class="project_hover">
                    <div class="project_hover_inner">
                        <div class="project_hover_content">
                            <a href="#"><h4>Data Center</h4></a>
                            <p>This is how to provide the fiber configuration item of internet with high speed to the client.</p>
                            <a class="view_btn" href="#">View Project</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 building isolation tiling plumbing">
            <div class="project_item">
                <img src="img/project/project-grid-three/project-g-three-7.jpg" alt="">
                <div class="project_hover">
                    <div class="project_hover_inner">
                        <div class="project_hover_content">
                            <a href="#"><h4>Telecommunication Networks</h4></a>
                            <p>This is how to provide the fiber configuration item of internet with high speed to the client.</p>
                            <a class="view_btn" href="#">View Project</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 isolation tiling interior plumbing">
            <div class="project_item">
                <img src="img/project/project-grid-three/project-g-three-8.jpg" alt="">
                <div class="project_hover">
                    <div class="project_hover_inner">
                        <div class="project_hover_content">
                            <a href="#"><h4>Fiber Networks</h4></a>
                            <p>This is how to provide the fiber configuration item of internet with high speed to the client.</p>
                            <a class="view_btn" href="#">View Project</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 building isolation tiling design plumbing">
            <div class="project_item">
                <img src="img/project/project-grid-three/project-g-three-9.jpg" alt="">
                <div class="project_hover">
                    <div class="project_hover_inner">
                        <div class="project_hover_content">
                            <a href="#"><h4>Water Networks</h4></a>
                            <p>This is how to provide the fiber configuration item of internet with high speed to the client.</p>
                            <a class="view_btn" href="#">View Project</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!--================End Our Project2 Area =================-->

<!--================Footer Area =================-->
<footer class="footer_area">
    <div class="footer_widgets_area">
        <div class="container">
            <div class="row footer_widgets_inner">
                <div class="col-md-3 col-sm-6">
                    <aside class="f_widget about_widget">
                        <img src="img/footer-logo.png" width="100px" alt="">
                        <p>Best One Limited is registered as Telecom, Civil, Building and Specialist Contractors as our main activities in Construction Industry.</p>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        </ul>
                    </aside>
                </div>
                <div class="col-md-3 col-sm-6">
                    <aside class="f_widget recent_widget">
                        <div class="f_w_title">
                            <h3>Recent Projects</h3>
                        </div>
                        <div class="recent_w_inner">
                            <div class="media">
                                <div class="media-left">
                                    <img src="img/blog/recent-post/recent-1.png" alt="">
                                </div>
                                <div class="media-body">
                                    <a href="#"><p>The road to success is always under con-struction</p></a>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <img src="img/blog/recent-post/recent-2.png" alt="">
                                </div>
                                <div class="media-body">
                                    <a href="#"><p>The road to success is always under con-struction</p></a>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
                <div class="col-md-3 col-sm-6">
                    <aside class="f_widget address_widget">
                        <div class="f_w_title">
                            <h3>Office Address</h3>
                        </div>
                        <div class="address_w_inner">
                            <div class="media">
                                <div class="media-left">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <div class="media-body">
                                    <p>Salasala, Mbezi Beach, Kinondoni, New Bagamoyo Rd.</p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="media-body">
                                    <p>+255 656875538 </p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div class="media-body">
                                    <p>info@bestone.co.tzsss</p>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
                <div class="col-md-3 col-sm-6">
                    <aside class="f_widget give_us_widget">
                     <h5 class="pull-left">EMAIL SUBSCRIBER</h5>
                     <br> 
                     {{--  <a class="get_bg_btn" href="#" style="color: #fff;">EMAIL</a> --}}
                     <form action="" method="POST">
                       <div class="form-group">

                        <div class="form-group">
                           <input type="email" class="form-control" name="email" id="email" placeholder="Please enter your email"> 
                       </div>

                       <div class="form-group">
                        <div class="pull-left">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </aside>
    </div>
</div>
</div>
</div>
<div class="footer_copy_right">
    <div class="container">
        <h4>
            Copyright &copy; {{ date('Y') }} All rights reserved | This websited designed by <a href="https://siltech.co.tz" target="_blank">siltech</a>
        </h4>
    </div>
</div>
</footer>
<!--================End Footer Area =================-->









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