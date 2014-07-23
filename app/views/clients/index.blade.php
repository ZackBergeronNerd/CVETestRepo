@extends('layouts.dashboard')

@section('css')
    <link rel="stylesheet" href="/flatlab/assets/data-tables/DT_bootstrap.css" />
@stop

@section('title')
	Client Manager
@stop

@section('content')
<div class="row">
	<div class="col-lg-12">
		<section class="panel">
			<header class="panel-heading">
				<a href="/clients/create" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Create New Client</a>
				<h3 class="no-margin-top">Client Manager</h3>
			</header>
			<div class="panel-body">
				<div class="adv-table">
					<table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
						<thead>
							<tr>
								<th>First Name</th>
								<th>Last Name</th>
								<th class="hidden-xs">Opens</th>
								<th class="hidden-xs">Pageviews</th>
								<th class="hidden-xs">Type</th>
								<th class="hidden-xs">Source</th>
								<th class="hidden-xs">Status</th>
                <th class="hidden-xs">Temperature</th>
								<th class="hidden">ID</th>
								<th class="hidden">Email</th>
								<th class="hidden">Phone</th>
							</tr>
						</thead>
						<tbody>
							@foreach($user_clients as $user_client)
							<tr data-id="{{ $user_client->client->id }}">
								<td><a href="/clients/{{ $user_client->client->id }}/edit" style="color:#EF6F66">{{ $user_client->client->first_name }}</a></td>
								<td><a href="/clients/{{ $user_client->client->id }}/edit" style="color:#EF6F66">{{ $user_client->client->last_name }}</a></td>
								<td class="text-center hidden-xs">{{ Clearview::opens_by_user_and_client(Auth::user()->id, $user_client->client->id) }}</td>
								<td class="text-center hidden-xs">{{ Clearview::page_opens_by_user_and_client(Auth::user()->id, $user_client->client->id) }}</td>
								<td class="hidden-xs">{{ Client_type::find($user_client->client->client_type_id)->name }}</td>
								<td class="hidden-xs">{{ Client_source::find($user_client->client->client_source_id)->name }}</td>
								<td class="hidden-xs">{{ Client_status::find($user_client->client->client_status_id)->name }}</td>
                <td class="hidden-xs">{{ ClientTemperature::find($user_client->client->client_temperature_id)->name }}</td>
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

@foreach($user_clients as $user_client)
<div class="modal fade" id="phoneModal-{{ $user_client->client->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Give {{ $user_client->client->first_name }} a call</h4>
      </div>
      <div class="modal-body text-center">
        @if(!is_null($user_client->client->phone_number))
        <h3>{{ $user_client->client->first_name }}'s Phone Number is:</h3>
        <h2>{{ $user_client->client->phone_number }}</h2>
        <h4 style="margin-top:25px">On a mobile phone?</h4>
        <a href="tel:{{ $user_client->client->clean_phone() }}" class="btn btn-lg btn-primary"><i class="fa fa-phone"></i> Call {{ $user_client->client->first_name }} Now</a>
        @else
        <h3>Whoops! {{ $user_client->client->first_name }} doesn't have a phone number in their record.</h3>
        @endif
      </div>
      <div class="modal-footer">
        <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
      </div>
    </div>
  </div>
</div>
@endforeach
@stop

@section('javascript')
	<script type="text/javascript" language="javascript" src="/flatlab/assets/advanced-datatable/media/js/jquery.js"></script>
    <script src="/flatlab/js/respond.min.js" ></script>
    <script type="text/javascript" language="javascript" src="/flatlab/assets/advanced-datatable/media/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="/flatlab/assets/data-tables/DT_bootstrap.js"></script>

    <script type="text/javascript">
      /* Formating function for row details */
      function fnFormatDetails ( oTable, nTr )
      {
          var aData = oTable.fnGetData( nTr );
          /*
          var sOut = '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">';
          sOut += '<tr><td>Rendering engine:</td><td>'+aData[1]+' '+aData[4]+'</td></tr>';
          sOut += '<tr><td>Link to source:</td><td>Could provide a link here</td></tr>';
          sOut += '<tr><td>Extra info:</td><td>And any further details here (images etc)</td></tr>';
          sOut += '</table>';
          */
         var sOut = '<div class="row" style="margin-bottom: 10px;">';
         sOut += '<div class="col-lg-4"><a href="mailto:'+aData[10]+'" class="btn btn-primary btn-large btn-block"><i class="fa fa-envelope"></i> Email</a></div>';
         sOut += '<div class="col-lg-4"><a data-toggle="modal" href="#phoneModal-'+aData[9]+'" class="btn btn-primary btn-large btn-block"><i class="fa fa-phone"></i> Call</a></div>';
         sOut += '<div class="col-lg-4"><a href="/clients/'+aData[9]+'/send_website" class="btn btn-primary btn-large btn-block"><i class="fa fa-archive"></i> Send Package</a></div>';
         sOut += '</div>';
         sOut += '<div class="row">';
         sOut += '<div class="col-lg-4"><a href="/clients/'+aData[9]+'#clearview" class="btn btn-primary btn-large btn-block"><i class="fa fa-bar-chart-o"></i> Clearview</a></div>';
         sOut += '<div class="col-lg-4"><a href="/clients/'+aData[9]+'/notes" class="btn btn-primary btn-large btn-block"><i class="fa fa-pencil"></i> Notes</a></div>';
         sOut += '<div class="col-lg-4"><a href="/clients/'+aData[9]+'/edit" class="btn btn-primary btn-large btn-block"><i class="fa fa-user"></i> View / Edit</a></div>';
         sOut += '</div>';
          console.log(aData[8]);

          return sOut;
      }

      $(document).ready(function() {
          /*
           * Insert a 'details' column to the table
           */
          var nCloneTh = document.createElement( 'th' );
          var nCloneTd = document.createElement( 'td' );
          nCloneTd.innerHTML = '<img src="/flatlab/assets/advanced-datatable/examples/examples_support/details_open.png">';
          nCloneTd.className = "center";

          $('#hidden-table-info thead tr').each( function () {
              this.insertBefore( nCloneTh, this.childNodes[0] );
          } );

          $('#hidden-table-info tbody tr').each( function () {
              this.insertBefore(  nCloneTd.cloneNode( true ), this.childNodes[0] );
          } );

          /*
           * Initialse DataTables, with no sorting on the 'details' column
           */
          var oTable = $('#hidden-table-info').dataTable( {
              "aoColumnDefs": [
                  { "bSortable": false, "aTargets": [ 0 ] }
              ],
              "aaSorting": [[4, 'desc']]
          });

          /* Add event listener for opening and closing details
           * Note that the indicator for showing which row is open is not controlled by DataTables,
           * rather it is done here
           */
          $('#hidden-table-info tbody td img').live('click', function () {
              var nTr = $(this).parents('tr')[0];
              if ( oTable.fnIsOpen(nTr) )
              {
                  /* This row is already open - close it */
                  this.src = "/flatlab/assets/advanced-datatable/examples/examples_support/details_open.png";
                  oTable.fnClose( nTr );
              }
              else
              {
                  /* Open this row */
                  this.src = "/flatlab/assets/advanced-datatable/examples/examples_support/details_close.png";
                  oTable.fnOpen( nTr, fnFormatDetails(oTable, nTr), 'details' );
              }
          } );
      } );
  </script>
@stop