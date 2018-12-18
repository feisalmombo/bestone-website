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
            <h3 class="sub-tittle">View Comments</h3>  

            @include('msgs.success')

            <div class="panel panel-default">
                <div class="panel-heading">{{ $comment->name }}
                    <a href="/comment" class="pull-right" style="color: white;">Comments</a>
                </div>

                <div class="panel-body">
                    <form  class="form-horizontal " role="form" style="font-size: 17px; padding: 40px;">

                        <div class="form-group">
                            <label>Name:</label>
                            <p>{{ $comment->name }}</p>
                        </div>
                        <div class="form-group">
                            <label>Email:</label>
                            <p>{{ $comment->email }}</p>
                        </div>
                        <div class="form-group">
                            <label>Subject:</label>
                            <p>{{ $comment->subject }}</p>
                        </div>
                        <div class="form-group">
                            <label>Comment:</label>
                            <p>{{ $comment->comment }}</p>
                        </div>
                        <div class="form-group">
                            <label>Delivered:</label>
                            <p>{{ $comment->created_at->diffForHumans() }}</p>
                        </div>
                    </form>

                    <!-- Reply Button l -->
                    <button class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModalNorm">
                        Reply
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="myModalNorm" tabindex="-1" role="dialog" 
                    aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <!-- Modal Header -->
                            <div class="modal-header">
                                <button type="button" class="close" 
                                data-dismiss="modal">
                                <span aria-hidden="true">&times;</span>
                                <span class="sr-only">Close</span>
                            </button>
                            <h4 class="modal-title" id="myModalLabel">
                                Reply Comment to <p style="color: blue;"> {{ $comment->email }}</p>
                            </h4>
                        </div>
                        
                        <!-- Modal Body -->
                        <div class="modal-body">

                            <form role="form" action="{{ url('/comment/send') }}" method="POST">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="email">To</label>
                                    <input type="email" class="form-control"
                                    id="to"  name="to" value="{{ $comment->email }}" />
                                </div>
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control"
                                    id="title" placeholder="Enter Title" name="title" />
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Body</label>
                                    <textarea class="form-control" name="body"></textarea>
                                </div>
                                
                                <button type="submit" class="btn btn-default">Reply now</button>
                            </form>


                        </div>

                        <!-- Modal Footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default"
                            data-dismiss="modal">
                            Close
                        </button>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>   
</div>
</div>
@endsection