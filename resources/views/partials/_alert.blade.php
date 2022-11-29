@if(session()->has("message"))
<script>
  Swal.fire({
    icon: 'success',
    title: 'Thành công',
    text: '{{Session::get("message")}}',
  });
</script>
@endif

@if(session()->has("error"))
<script>
  Swal.fire({
    icon: 'error',
    title: 'Lỗi',
    text: '{{Session::get("error")}}',
  });
</script>
@endif

@if(session()->has("info"))
<script>
  Swal.fire({
    icon: 'info',
    title: 'Thông báo',
    text: '{{Session::get("info")}}',
  });
</script>
@endif

@if(session()->has("warning"))
<script>
  Swal.fire({
    icon: 'warning',
    title: 'Thông báo',
    text: '{{Session::get("warning")}}',
  });
</script>
@endif
