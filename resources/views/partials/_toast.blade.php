@if(Session::has("message"))
<div class="toast-container position-fixed bottom-0 end-0 p-3">
  <div id="toast" class="toast" role="alert" aria-live="polite" aria-atomic="true">
    <div class="toast-header">
      <img src="{{asset('images/app/icon.png')}}" class="rounded me-2" width="16" height="16">
      <strong class="me-auto">PA Fashion</strong>
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
      {{Session::get("message")}}
    </div>
  </div>
</div>
@endif
