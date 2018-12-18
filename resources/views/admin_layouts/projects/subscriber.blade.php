@extends('home')
@section('title','Subscribers')
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
        <h3 class="sub-tittle">Subscribers</h3>
       
        @if(count($subscribers) > 0)
        <table class="table table-bordered">
                <thead>
                  <tr>
                      <th>S/N</th>
                    <th>Email</th>
                    <th>Created</th>
         
                  </tr>
                </thead>
                <tbody>

                    @foreach ($subscribers as $key => $subscriber)
                    <tr>
                        <td>{{ ($key+1) }} </td>
                        <td>{{ $subscriber->email }}</td>
                        <td>{{ $subscriber->created_at->diffForHumans() }}</td>
  
                    </tr>
                    @endforeach
     
                </tbody>
              </table>
        @else
            <center>No User Registered Yet</center>
        @endif
<center>{{ $subscribers->links() }}</center>
</div>

</div>

@endsection