
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
            @if(session()->has('message'))
            <div class="alert alert-success" role="alert">
                <strong>
                    {{ session('message') }}
                </strong>
            </div>
            @endif



            @if (count($errors))
            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach ($errors->all() as $error )
                    <li>
                        {{ $error }}
                    </li>
                    @endforeach
                </ul>
            </div>
            @endif
            <h3 class="sub-tittle">My Profile</h3>
            <div class="row">

                <div class="col-sm-7 col-sm-offset-2">
                    <form method="POST" action="{{ url('profile/'.$user->id) }}">
                        <input type="hidden" name="_method" value="PATCH">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}
                        
                        <div class="form-group">
                            <label for="fname">First Name</label> 
                            <input type="text" name="fname"
                            value="{{ isset($user->first_name) ? $user->first_name : old('fname') }}" class="form-control" id="fname" placeholder="First Name" required>
                        </div>
                        <div class="form-group">
                            <label for="lname">Last Name</label> 
                            <input type="text" name="lname"
                            value="{{ isset($user->last_name) ? $user->last_name : old('lname') }}" class="form-control" id="fname" placeholder="First Name" required>
                        </div>  
                        <div class="form-group">
                           <label for="email">Email address</label>
                           <input type="email" class="form-control" name="email"
                           value="{{ isset($user->email) ? $user->email : old('email') }}" id="email" placeholder="Email" required>
                       </div>
                       <button type="submit" id="submit" class="btn btn-default">Submit</button> 
                   </form> 

               </div>

{{--  <div class="col-sm-4">
        <div class="down">	
                <a href="index.html">
                    <img src="../admin/images/admin.jpg">
                </a>
                
               <p></p>
              <ul>
                    <button type="submit" class="btn btn-default">Change</button> 
                    
              </ul>
              </div>
          </div>  --}}
      </div>
  </div>
</div>

@endsection