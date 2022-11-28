@if(session()->has("message"))
<script>
  setTimeout(() => {
    toastr.success('{{Session::get("message")}}');
  },800);
</script>
@endif

@if(session()->has("error"))
<script>
  setTimeout(() => {
    toastr.error('{{Session::get("error")}}');
  },800);
</script>
@endif

@if(session()->has("info"))
<script>
  setTimeout(() => {
    toastr.info('{{Session::get("info")}}');
  },800);
</script>
@endif

@if(session()->has("warning"))
<script>
  setTimeout(() => {
    toastr.warning('{{Session::get("warning")}}');
  },800);
</script>
@endif
