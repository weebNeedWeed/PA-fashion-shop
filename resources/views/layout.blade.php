<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    {{-- Css assets --}}
    <link rel="stylesheet" href="{{asset('assets/lib/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/lib/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">

    {{-- Css code for each page --}}
    @yield("styles")
  </head>

  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mb-2 mb-lg-0 me-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
              </li>
            </ul>

            <ul class="navbar-nav mb-2 mb-lg-0 ms-auto">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <i class="fa-solid fa-lock"></i> Đăng nhập
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <i class="fa-solid fa-user"></i> Đăng kí
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <main class="main">
      @yield('content')
    </main>

    <footer>
      footer
    </footer>

    <script type="text/javascript" src="{{asset('assets/lib/jquery/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/lib/popper/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/lib/fontawesome/js/all.min.js')}}"></script>

    {{-- Javascript code for each page --}}
    @yield("scripts")
  </body>

</html>
