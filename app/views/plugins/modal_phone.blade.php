<div class="modal fade" id="phoneModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title">Give {{ $client->first_name }} a call</h4>
			</div>
			<div class="modal-body text-center">
				@if(!is_null($client->phone_number))
				<h3>{{ $client->first_name }}'s Phone Number is:</h3>
				<h2>{{ $client->phone_number }}</h2>
				<h4 style="margin-top:25px">On a mobile phone?</h4>
				<a href="tel:{{ $client->clean_phone() }}" class="btn btn-lg btn-primary"><i class="fa fa-phone"></i> Call {{ $client->first_name }} Now</a>
				@else
				<h3>Whoops! {{ $client->first_name }} doesn't have a phone number in their record.</h3>
				@endif
			</div>
			<div class="modal-footer">
				<button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
			</div>
		</div>
	</div>
</div>