<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    {{-- Css assets --}}
    <link rel="stylesheet" href="{{asset('assets/lib/bootstrap/css/bootstrap.min.css')}}">

    {{-- Css code for each page --}}
    @yield("styles")
  </head>

  <body>
    <main>
      @yield('content')
    </main>

    <script type="text/javascript" src="{{asset('assets/lib/jquery/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/lib/popper/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    {{-- Javascript code for each page --}}
    @yield("scripts")
  </body>

</html>
