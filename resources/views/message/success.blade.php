@if(Session::has('msg1'))

<div class="alert alert-success">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<strong>{{ Session('msg-success') }}</strong> 
</div>

@endif

