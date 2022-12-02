<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{csrf_token()}}">

    <link rel="shortcut icon" href="{{asset('images/app/icon.png')}}">

    <title>
      @yield("title") | PA Fashion Shop
    </title>

    {{-- Css assets --}}
    <link rel="stylesheet" href="{{asset('assets/lib/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/lib/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/lib/sweetalert/css/sweetalert2.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">

    {{-- Css code for each page --}}
    @yield("styles")
  </head>

  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">
            <img class="app-icon" src="{{asset('images/app/icon.png')}}" alt="PA icon">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mb-2 mb-lg-0 me-auto">
              <li class="nav-item">
                <a class="nav-link" href="/">
                  <i class="fa-solid fa-house"></i> Trang chủ
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="/news">
                  <i class="fa-solid fa-newspaper"></i> Tin tức
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="/contact">
                  <i class="fa-solid fa-address-book"></i> Liên hệ
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="/cart">
                  <i class="fa-solid fa-cart-shopping"></i> Giỏ hàng
                </a>
              </li>
            </ul>

            <ul class="navbar-nav mb-2 mb-lg-0 ms-auto">
              @guest
              <li class="nav-item">
                <a class="nav-link" href="/account/login">
                  <i class="fa-solid fa-lock"></i> Đăng nhập
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/account/register">
                  <i class="fa-solid fa-user"></i> Đăng kí
                </a>
              </li>
              @endguest

              @auth
              <li class="nav-item">
                <a class="nav-link" href="/account/dashboard">
                  <i class="fa-solid fa-user"></i> Người dùng
                </a>
              </li>
              <li class="nav-item">
                <a id="logout-button" class="nav-link text-danger" href="#">
                  <i class="fa-solid fa-right-from-bracket"></i> Đăng xuất
                </a>
                <form method="POST" action="/account/logout" id="logout-form">
                  @csrf
                </form>
              </li>
              @endauth
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <main class="main">
      @yield('content')
    </main>

    <footer class="footer container-fluid">
      <div class="row pb-3">
        <div class="col-md-2">
          <div class="footer__item">
            <a href="/">
              <img class="footer__icon" src="{{asset('images/app/icon.png')}}" alt="Icon">
            </a>
            <div class="footer__social-icon-list">
              <div class="footer__social-icon footer__social-icon--facebook">
                <i class="fa-brands fa-facebook"></i>
              </div>
              <div class="footer__social-icon footer__social-icon--twitter">
                <i class="fa-brands fa-twitter"></i>
              </div>
              <div class="footer__social-icon footer__social-icon--reddit">
                <i class="fa-brands fa-reddit"></i>
              </div>
              <div class="footer__social-icon footer__social-icon--linkedin">
                <i class="fa-brands fa-linkedin"></i>
              </div>
            </div>
          </div>


        </div>
        <div class="col-md-2">
          <div class="footer__item">
            <a href="/" class="footer__link">Trang chủ</a>
          </div>
        </div>

        <div class="col-md-2">
          <div class="footer__item">
            <a href="/news" class="footer__link">Tin tức</a>
          </div>
        </div>

        <div class="col-md-2">
          <div class="footer__item">
            <a href="/contact" class="footer__link">Liên hệ</a>
          </div>
        </div>

        <div class="col-md-2">
          <div class="footer__item">
            <a href="/account/login" class="footer__link">Đăng nhập</a>
          </div>
        </div>

        <div class="col-md-2">
          <div class="footer__item">
            <a href="/cart" class="footer__link">Giỏ hàng</a>
          </div>
        </div>
      </div>
      <p class="footer__copyright">Copyright &#169; 2022 PA Fashion Shop.</p>
    </footer>


    <script type="text/javascript" src="{{asset('assets/lib/jquery/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/lib/popper/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/lib/fontawesome/js/all.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/lib/sweetalert/js/sweetalert2.all.min.js')}}"></script>

    @include("partials._alert")

    <script type="text/javascript" src="{{asset('assets/js/scripts.js')}}"></script>

    {{-- Javascript code for each page --}}
    @yield("scripts")
  </body>

</html>
