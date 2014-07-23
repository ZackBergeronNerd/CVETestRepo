@if (!is_null(Session::get('modal_success')))
<div id="modal_status" class="modal">
  <div class="modal-body">
    <p class="text-center">{{ Session::get('modal_success') }}</p>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
  </div>
</div>
@elseif(!is_null(Session::get('modal_error')))
<div id="modal_status" class="modal">
  <div class="modal-body">
    <p class="text-center">{{ Session::get('modal_error') }}</p>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
  </div>
</div>
@endif