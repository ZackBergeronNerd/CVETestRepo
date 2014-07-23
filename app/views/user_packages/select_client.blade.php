@extends('layouts.dashboard')

@section('css')
    <link rel="stylesheet" href="/flatlab/assets/data-tables/DT_bootstrap.css" />
@stop

@section('title')
	Find a client to send {{ $user_package->package()->first()->name }}
@stop

@section('content')
<div class="row">
	<div class="col-lg-12">
		<section class="panel">
			<header class="panel-heading">
        <div class="row">
          <div class="col-md-9">
            <h3 class="no-margin-top">Find a client to send {{ $user_package->package()->first()->name }}</h3>
          </div>
          <div class="col-md-3">
            <a href="/user_packages" class="btn pull-right btn-info"><i class="fa fa-archive"></i> Back to Packages</a>
          </div>
        </div>
			</header>
			<div class="panel-body">
				<div class="adv-table">
					<table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
						<thead>
							<tr>
                <th></th>
								<th>First Name</th>
								<th>Last Name</th>
								<th class="hidden-xs">Opens</th>
								<th class="hidden-xs">Pageviews</th>
								<th class="hidden-xs">Temperature</th>
								<th class="hidden-xs">Status</th>
								<th class="hidden">ID</th>
								<th class="hidden">Email</th>
								<th class="hidden">Phone</th>
							</tr>
						</thead>
						<tbody>
							@foreach($user_clients as $user_client)
							<tr data-id="{{ $user_client->client->id }}">
                <td style="width:10%">
                  <a href="/clients/{{ $user_client->client->id }}/send_package/{{ $user_package->id }}" class="btn btn-sm btn-primary">
                    <i class="fa fa-mail-forward"></i> Select Client
                  </a>
                </td>
								<td><a href="/clients/{{ $user_client->client->id }}/edit" style="color:#EF6F66" target="_blank">{{ $user_client->client->first_name }}</a></td>
								<td><a href="/clients/{{ $user_client->client->id }}/edit" style="color:#EF6F66" target="_blank">{{ $user_client->client->last_name }}</a></td>
								<td class="text-center hidden-xs">{{ $user_client->client->total_opens() }}</td>
								<td class="text-center hidden-xs">{{ $user_client->client->total_pageviews() }}</td>
								<td class="hidden-xs">{{ ClientTemperature::find($user_client->client->client_temperature_id)->name }}</td>
								<td class="hidden-xs">{{ Client_status::find($user_client->client->client_status_id)->name }}</td>
								<td class="hidden">{{ $user_client->client->id }}</td>
								<td class="hidden">{{ $user_client->client->email }}</td>
								<td class="hidden">{{ $user_client->client->phone }}</td>
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

          /*
           * Initialse DataTables, with no sorting on the 'details' column
           */
          var oTable = $('#hidden-table-info').dataTable( {
            "aoColumnDefs": [
                  { "bSortable": false, "aTargets": [ 0 ] }
              ],
              "aaSorting": [[3, 'desc']]
          });

          
      } );
  </script>
@stop