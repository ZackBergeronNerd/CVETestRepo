<div class="modal fade" id="newClientModal" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false" aria-labelledby="myModalLabel" aria-hidden="false">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Welcome!</h4>
			</div>
			<div class="modal-body text-center">
				<h4>You have been invited to view {{ $package->name }}, a private presentation from {{ $package->user_package()->first()->user()->first()->name }}.</h4>
			</div>
			<div class="modal-footer">
				<input type="submit" class="btn btn-primary btn-default" type="button" value="View Package">
			</div>
		</div>
	</div>
</div>