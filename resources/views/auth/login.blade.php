
<!--
    Author: Siltech
    
    -->
    <!DOCTYPE HTML>
    <html>
    <head>
    <title>Best One Ltd | Login </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Augment Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
     <!-- Bootstrap Core CSS -->
    <link href="admin/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <!-- Custom CSS -->
    <link href="admin/css/style.css" rel='stylesheet' type='text/css' />
    <!-- Graph CSS -->
    <link href="admin/css/font-awesome.css" rel="stylesheet"> 
    <!-- jQuery -->
    <link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
    <!-- lined-icons -->
    <link rel="stylesheet" href="admin/css/icon-font.min.css" type='text/css' />
    <!-- //lined-icons -->
    <script src="admin/js/jquery-1.10.2.min.js"></script>
    <!--clock init-->
    </head> 
    <body >
                                    <!--/login-->
                                    
                                           <div class="error_page">
                                                    <!--/login-top-->
                                                    
                                                        <div class="error-top">
                                                        <h2 class="inner-tittle page" style="color:#EA3535">Best One</h2>
                                                            <div class="login">
                                                            <h3 class="inner-tittle t-inner">Login</h3>
                                                                   
                                                                    <form method="POST" action="{{ route('login') }}">
                                                                        {{ csrf_field() }}
                                                                        @if(Session::has('msg1'))
                                                                            <div class="alert alert-success" role="alert">
                                                                                <strong>Success</strong> {{ session('msg1') }}
                                                                            </div>
                                                                        @endif
                                                                        @if($errors->has('email'))
                                                                            <span class="help-block">
                                                                                <p style="color:red">{{ $errors->first('email') }}</p>
                                                                            </span>
                                                                        @endif
                                                                            <input type="text" class="text" name="email" required>
                                                                            
                                                                            @if ($errors->has('password'))
                                                                                <span class="help-block">
                                                                                    <p style="color:red">{{ $errors->first('password') }}</p>
                                                                                </span>
                                                                            @endif
                                                                            <input type="password" name="password"   required>
                                                                            <div class="submit"><input type="submit" onclick="myFunction()" value="Login" ></div>
                                                                            <div class="clearfix"></div>
                                                                            
                                                                            <div class="new">
                                                                                    <a class="" href="{{ route('password.request') }}">
                                                                                            Forgot Your Password?
                                                                                        </a>
                                                                                
                                                                                <div class="clearfix"></div>
                                                                            </div>
                                                                        </form>
                                                            </div>
    
                                                            
                                                        </div>
                                                        
                                                        
                                                    <!--//login-top-->
                                               </div>
                            
                                                  <!--//login-->
                                                <!--footer section start-->
                                            <div class="footer">
                                                    
                                               <p>Copyright &copy; 2018 All rights reserved | Designed by <a href="https://siltech.co.tz/" target="_blank">siltech.</a></p>
                                            </div>
                                        <!--footer section end-->
                                        <!--/404-->
    <!--js -->
    <script src="js/jquery.nicescroll.js"></script>
    <script src="js/scripts.js"></script>
    <!-- Bootstrap Core JavaScript -->
       <script src="js/bootstrap.min.js"></script>
    </body>
    </html>