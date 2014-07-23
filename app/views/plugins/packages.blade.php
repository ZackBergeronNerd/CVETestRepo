<div id="packages_modal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="packages_modal_label" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="packages_modal_label">Send a Package</h3>
  </div>
  <div class="modal-body">
    @foreach(Auth::user()->user_package()->get() as $package)
    <div class="padded-content light-border margin-bottom">
      <div class="row-fluid">
        <div class="span3">
          <span class="thumb"><img src="/uploads/logos/{{ $package->package()->first()->logo }}" alt=""></span>
        </div>
        <div class="span6">
            <h3>{{ $package->package()->first()->name }}</h3>
            @if($package->owner)
            <p>URL: <a href="http://{{ $package->package()->first()->subdomain }}.cve.io" target="_blank">{{ $package->package()->first()->subdomain }}.cve.io</a></p>
            @elseif($package->agent && !is_null($package->slug))
            <p>URL: <a href="http://{{ $package->slug }}.{{ $package->package()->first()->subdomain }}.cve.io" target="_blank">{{ $package->slug }}.{{ $package->package()->first()->subdomain }}.cve.io</a></p>
            @endif
        </div>
        <div class="span3">
          <button class="btn btn-block send-package" data-id="{{ $package->id }}" data-client="">Send Package</button>
        </div>
      </div>
      <div class="row-fluid" id="send_package_form-{{ $package->id }}">
        <!-- Subject, Message, Contents, CC, Self BCC, Attachments -->
        <div class="row-fluid">
          <div class="span12">
            <label for="package_subject">Email Subject:</label>
            <input type="text" class="input-block-level" name="package_subject" id="package_subject">
          </div>
        </div>
        <div class="row-fluid">
          <div class="span12">
            <label for="package_message">Welcome Message:</label>
            <textarea name="package_message"></textarea>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
  </div>
</div>