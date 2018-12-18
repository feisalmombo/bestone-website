@extends('home')
@section('title','Profile')
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
        
<div class="row">

        <div class="error_page">
                <!--/login-top-->
                
                    <div class="error-top">
                    
                        <div class="login">
                        <h3 class="inner-tittle t-inner">Change Password</h3>
                               
                                <form method="POST" action="{{ url('update_password') }}">
                                    {{ csrf_field() }}
                                    @if (Session::has('msg'))
                                        <span class="help-block">
                                            <p style="color:red;font-size:16px;">{!! Session::get('msg') !!}</p>
                                        </span>
                                    @endif

                                    @if($errors->any())
                                    <span class="help-block">
                                        @foreach ($errors->all() as $error)
                                        <p style="color:red;font-size:16px;">{{ $error }}</p>
                                        @endforeach

                                        </span>
                                    @endif

                                    @if (session()->has('message'))
                                    <div class="alert alert-success" role="alert">
                                        <strong>
                                            {{ session()->get('message') }}
                                            <p><a href="/dashboard">Back Home</a></p>
                                        </strong>
                                    </div>
                                    @endif
                                        <input type="password" class="text" name="old_password" placeholder="Enter old password" required>
                                        <input type="password" name="new_password" placeholder="Enter new password"   required>
                                    <input type="password" name="conf_password" placeholder="Confirm new password"   required>
                                    <div class="submit"><input type="submit" value="Login" ></div>
                                    <div class="clearfix"></div>
                                        
                                        
                                    </form>
                        </div>

                        
                    </div>
                    
                    
                <!--//login-top-->
           </div>

              <!--//login-->
            <!--footer section start-->
        <div class="footer">
                
         </div> 

</div>
</div>
</div>

@endsection