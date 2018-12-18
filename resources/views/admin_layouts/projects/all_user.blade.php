@extends('home')
@section('title','Home')
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
            <h3 class="sub-tittle">All Admin</h3>
            
            @if(count($users) > 0)
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    
                </tr>
            </thead>
            <tbody>

                @foreach ($users as $user)
                <tr>
                    <td>{{ $user->first_name }}</td>
                    <td>{{ $user->last_name }}</td>
                    <td>{{ $user->email }}</td>
                    
                </tr>
                @endforeach
                
            </tbody>
        </table>
        @else
        <center>No User Registered Yet</center>
        @endif

    </div>

</div>

@endsection