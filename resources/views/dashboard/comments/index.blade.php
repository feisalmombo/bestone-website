@extends('home')
@section('title','Comments')
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
      <h3 class="sub-tittle">Comments</h3>

      @include('msgs.success')
      
      @if(count($comments) > 0)
      <table class="table table-bordered">
       <thead>
         <tr>
           <th>SN</th>
           <th>Name</th>
           <th>Email</th>
           <th>Subject</th>
           <th>Comment</th>
           <th>Delivered</th>
           <th colspan="2"><center>Action</center></th>
         </tr>
       </thead>
       <tbody>

         <tr>
           @foreach($comments as $comment)
           <td>{{ $counts ++ }}</td>
           <td>{{ $comment->name }}</td>
           <td>{{ $comment->email }}</td>
           <td>{{ $comment->subject }}</td>
           <td>{{ str_limit($comment->comment,50) }}</td>
           <td>{{ $comment->created_at->diffForHumans() }}
           </td>
           <td>
             <a href="/comment/{{ $comment->id }}"><button type="button" class="btn btn-default">Show</button></a>
           </td>
           <td>

            <a class="btn btn-danger" data-toggle="modal" href='#{{ $comment->id }}'>Delete</a>
            <div class="modal fade" id="{{ $comment->id }}">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Confirmation</h4>
                  </div>
                  <div class="modal-body">
                    Are you sure you want to delete comment from <p style="color: blue;">{{ $comment->email }}</p>
                  </div>
                  <form action="/comment/{{ $comment->id}}" method="POST" role="form">

                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                      <button type="submit" class="btn btn-default">Yes</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>

          </td>

        </tr>
        @endforeach
      </tbody>
    </table>
    @else
    <div class="alert alert-info">
     <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
     <strong>No Comments</strong>
   </div>
   <br>
   @endif

   {{ $comments->links() }}
 </div>


 @endsection