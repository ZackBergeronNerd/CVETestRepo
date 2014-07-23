@if (isset($errors) && count($errors->all()) > 0)
<div class="alert alert-block alert-danger fade in">
  	<button data-dismiss="alert" class="close close-sm" type="button">
      	<i class="fa fa-times"></i>
  	</button>
  	<h4 class="alert-heading">Whoops!</h4>
	@foreach ($errors->all('<li>:message</li>') as $message)
	{{ $message }}
	@endforeach
	</ul>
</div>
@elseif (!is_null(Session::get('status_error')))
<div class="alert alert-block alert-danger fade in">
  	<button data-dismiss="alert" class="close close-sm" type="button">
      	<i class="fa fa-times"></i>
  	</button>
	<h4 class="alert-heading">Whoops!</h4>
	@if (is_array(Session::get('status_error')))
		<ul>
		@foreach (Session::get('status_error') as $error)
			<li>{{ $error }}</li>
		@endforeach
		</ul>
	@else
		{{ Session::get('status_error') }}
	@endif
</div>
@endif

@if (!is_null(Session::get('status_success')))
<div class="alert alert-success alert-block fade in">
  <button data-dismiss="alert" class="close close-sm" type="button">
      <i class="fa fa-times"></i>
  </button>
	<h4 class="alert-heading">Success!</h4>
	@if (is_array(Session::get('status_success')))
		<ul>
		@foreach (Session::get('status_success') as $success)
			<li>{{ $success }}</li>
		@endforeach
		</ul>
	@else
		{{ Session::get('status_success') }}
	@endif
</div>
@endif