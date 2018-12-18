@extends('home')
@section('title','Register Token')
@section('content')
<!--//profile_details-->
</div>
<!--//menu-right-->
<div class="clearfix"></div>
</div>
<!-- //header-ends -->
<div class="outter-wp">
    
<!--//custom-widgets-->
<!--/candile-->
<div class="candile"> 
    <div class="candile-inner">
        <h3 class="sub-tittle">Register Token</h3>
          @if(Session::has('msg'))
          <div class="alert alert-success alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Success!</strong> {{ session('msg') }}.
              </div>
          @endif
            <form action="{{ url('send-token') }}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                  <label for="email">Email address:</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
                
                <button type="submit" class="btn btn-default">Send</button>
              </form>
      
        
</div>

</div>

@endsection