@extends('layouts.dashboard')

@section('title')
Manage Users
@stop

@section('content')
<div class="row">
	<div class="col-lg-12">
		<section class="panel">
			<header class="panel-heading">
				<a href="/admin/users/create" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Create New User</a>
				<h3 class="no-margin-top">User Manager</h3>
			</header>
			<div class="panel-body">
				<div class="adv-table">
					<table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
						<thead>
							<tr>
								<th></th>
								<th>Display Name</th>
								<th>Email</th>
								<th>Cell Phone</th>
								<th>Office Phone</th>
								<th>Number of Packages</th>
							</tr>
						</thead>
						<tbody>
							@foreach($users as $user)
							<tr data-id="{{ $user->id }}">
								<td><a href="/admin/users/{{ $user->id }}/edit" class="btn btn-primary btn-block btn-sm">Edit User</a></td>
								<td>
									@if(!is_null($user->name))
									{{ $user->name }}
									@else
									N/A
									@endif
								</td>
								<td>
									@if(!is_null($user->email))
									{{ $user->email }}
									@else
									N/A
									@endif
								</td>
								<td>
									@if(!is_null($user->details->cell_number))
									{{ $user->details->cell_number}}
									@else
									N/A
									@endif
								</td>
								<td>
									@if(!is_null($user->details->office_number))
									{{ $user->details->office_number }}
									@else
									N/A
									@endif
								</td>
								<td>
									@if(count($packages = $user->user_website()->get()))
									{{ count($packages) }}
									@else
									None
									@endif
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</section>
		<!-- page end-->
	</div>
</div>
@stop


@section('javascript')
<script type="text/javascript" language="javascript" src="/flatlab/assets/advanced-datatable/media/js/jquery.js"></script>
<script src="/flatlab/js/respond.min.js" ></script>
<script type="text/javascript" language="javascript" src="/flatlab/assets/advanced-datatable/media/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="/flatlab/assets/data-tables/DT_bootstrap.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	var oTable = $('#hidden-table-info').dataTable( {
              "aoColumnDefs": [
                  { "bSortable": false, "aTargets": [ 0 ] }
              ],
              "aaSorting": [[1, 'asc']]
          });
});
</script>
@stop
