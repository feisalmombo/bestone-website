@extends('home')
@section('title','Services Panel')
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

      @include('msgs.success')
      
      <h3 class="sub-tittle">
        Services

        <a href="{{ url('service/create') }}" class="btn-danger btn-lg pull-right hidden-xs">
          <span class="glyphicon glyphicon-plus"></span> 
          Service
        </a>
        <a href="{{ url('service') }}" class=" pull-right visible-xs">
          <span class="glyphicon glyphicon-plus"></span> 
        Services                </a>
      </h3>


      <div class="row hidden-xs">

       @if(count($services) > 0)

       <table class="table table-bordered">
        <thead>
          <tr>
            <th>SN</th>
            <th>Service Name</th>
            <th>Description</th>
            <th>Image</th>
            <th>Created_at</th>
            <th>Updated_at</th>
            <th colspan="3"><center>Action</center></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            @foreach($services as $service)
            <td>{{ $counts++ }}</td>
            <td>{{ $service->service_name}}</td>
            <td>{{ str_limit($service->description,50) }}</td>
            <td>
              <img src="{{ asset('storage/' .$service->image_path) }}" alt="" width="100px">
            </td>
            <td>{{ (new Carbon\Carbon($service->created_at))->diffForHumans() }}</td>
            <td>{{ (new Carbon\Carbon($service->updated_at))->diffForHumans() }}</td>
            <td>
              <a href="{{ url('/service/'.$service->id.'/edit') }}"><button class="btn btn-default">Edit</button></a>
            </td>
            <td>
              <a href="{{ url('/service/'.$service->id) }}"><button type="button" class="btn btn-default">Show</button></a>
            </td>
            <td>

              <a class="btn btn-danger" data-toggle="modal" href='#{{ $service->id }}'>Delete</a>
              <div class="modal fade" id="{{ $service->id }}">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title">Confirmation</h4>
                    </div>
                    <div class="modal-body">
                      Are you sure you want to delete this service? <p style="color: blue;">{{ $service->service_name }}</p>
                    </div>
                    <form action="{{ url('/service/'.$service->id) }}" method="POST" role="form">

                      {{ csrf_field() }}
                      {{ method_field('DELETE') }}
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                        <button type="submit" class="btn btn-primary">Yes</button>
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
       <strong>No Services</strong>
     </div>
     <br>
     @endif

     {{ $services->links() }}
   </div>


   @endsection