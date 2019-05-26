<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

        <!-- FontAwesome CSS -->
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">

        <!-- ElegantFonts CSS -->
        <link rel="stylesheet" href="{{ asset('css/elegant-fonts.css') }}">

        <!-- themify-icons CSS -->
        <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">

        <!-- Swiper CSS -->
        <link rel="stylesheet" href="{{ asset('css/swiper.min.css') }}">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Better Life</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="shortcut icon" type="image/png" href="images/icono.png"/>

</head>
<body>

    <header class="site-header">
      <div class="top-header-bar">
          <div class="container">
              <div class="row flex-wrap justify-content-center justify-content-lg-between align-items-lg-center">
                  <div class="col-12 col-lg-8 d-none d-md-flex flex-wrap justify-content-center justify-content-lg-start mb-3 mb-lg-0">
                      <div class="header-bar-email">
                          CORREO: <a href="#">contacto@betterlife.com</a>
                      </div><!-- .header-bar-email -->

                      <div class="header-bar-text">
                          <p>TELEFONO: <span>+24 3772 120 091 / +56452 4567</span></p>
                      </div><!-- .header-bar-text -->
                  </div><!-- .col -->

                  <div class="col-12 col-lg-4 d-flex flex-wrap justify-content-center justify-content-lg-end align-items-center">
                      <div class="donate-btn">
                          <a href="{{ route('login') }}">Dona Ahora</a>
                      </div><!-- .donate-btn -->
                  </div><!-- .col -->
              </div><!-- .row -->
          </div><!-- .container -->
      </div><!-- .top-header-bar -->

        <div class="nav-bar">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex flex-wrap justify-content-between align-items-center">
                        <div class="site-branding d-flex align-items-center">
                            <a class="d-block" href="{{ url('/') }}" rel="home"><img class="d-block" src="images/BetterLogo.png" alt="logo"></a>
                        </div><!-- .site-branding -->

                        <nav class="site-navigation d-flex justify-content-end align-items-center">
                            <ul class="d-flex flex-column flex-lg-row justify-content-lg-end align-content-center">
                                <li class="current-menu-item"><a href="{{ url('/') }}">Inicio</a></li>
                                <li><a href="{{ route('about') }}">Nosotros</a></li>
                                <li><a href="{{ route('causes') }}">Causas</a></li>
                                @guest
                                    <li class="nav-item">
                                        <a style="color:#FFBB00;" class="nav-link" href="{{ route('login') }}">{{ __('Ingresa') }}</a>
                                    </li>
                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a style="color:#FFBB00;" class="nav-link" href="{{ route('register') }}">{{ __('Registrate') }}</a>
                                        </li>
                                    @endif
                                @else
                                  <li class="nav-item">
                                  <a class="nav-link" href="{{route('home')}}" role="button" style="color:#FFBB00;">
                                    {{ Auth::user()->name }}
                                  </a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" style="color:#FFBB00;" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();">
                                     {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                  </li>
                                @endguest
                            </ul>
                        </nav><!-- .site-navigation -->

                        <div class="hamburger-menu d-lg-none">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div><!-- .hamburger-menu -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .nav-bar -->
    </header><!-- .site-header -->



  @yield('content')



    <footer class="site-footer">
        <div class="footer-widgets">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="foot-about">
                            <h2><a class="foot-logo" href="#"><img src="images/foot-logoBetter.png" alt=""></a></h2>

                            <p>Lorem ipsum dolor sit amet, con sectetur adipiscing elit. Mauris temp us vestib ulum mauris.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris.Lorem ipsum dolo.</p>

                            <ul class="d-flex flex-wrap align-items-center">
                                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div><!-- .foot-about -->
                    </div><!-- .col -->

                    <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">
                        <h2>Enlace Útiles</h2>

                        <ul>
                            <li><a href="#">Aviso de Privacidad</a></li>
                            <li><a href="{{ url('/') }}">Inicio</a></li>
                            <li><a href="{{ route('about') }}">Nosotros</a></li>
                            <li><a href="{{ route('causes') }}">Causas</a></li>
                            <li><a href="{{ route('register') }}">Registrate</a></li>
                            <li><a href="{{ route('login') }}">Ingresa</a></li>
                        </ul>
                    </div><!-- .col -->

                    <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">
                        <div class="foot-latest-news">
                            <h2>Últimas noticias</h2>

                            <ul>
                                <li>
                                    <h3><a href="#">Nuevo aliado</a></h3>
                                    <div class="posted-date">Marzo 26, 2019</div>
                                </li>

                                <li>
                                    <h3><a href="#">Ampliamos nuestra meta</a></h3>
                                    <div class="posted-date">Mayo 02, 2019</div>
                                </li>

                                <li>
                                    <h3><a href="#">Casi logramos nuestra meta anual</a></h3>
                                    <div class="posted-date">Mayo 20, 2019</div>
                                </li>
                            </ul>
                        </div><!-- .foot-latest-news -->
                    </div><!-- .col -->

                    <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">
                        <div class="foot-contact">
                            <h2>Contacto</h2>

                            <ul>
                                <li><i class="fa fa-phone"></i><span>+45 677 8993000 223</span></li>
                                <li><i class="fa fa-envelope"></i><span> contacto@betterlife.com</span></li>
                                <li><i class="fa fa-map-marker"></i><span>Av. dirección, 56832, Guadalajara, MX</span></li>
                            </ul>
                        </div><!-- .foot-contact -->

                        <div class="subscribe-form">
                            <form class="d-flex flex-wrap align-items-center">
                                <input type="email" placeholder="Correo">
                                <input type="submit" value="enviar">
                            </form><!-- .flex -->
                        </div><!-- .search-widget -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .footer-widgets -->

    </footer><!-- .site-footer -->

    <script type='text/javascript' src='{{ asset('js/jquery.js') }}'></script>
    <script type='text/javascript' src='{{ asset('js/jquery.collapsible.min.js') }}'></script>
    <script type='text/javascript' src='{{ asset('js/swiper.min.js') }}'></script>
    <script type='text/javascript' src='{{ asset('js/jquery.countdown.min.js') }}'></script>
    <script type='text/javascript' src='{{ asset('js/circle-progress.min.js') }}'></script>
    <script type='text/javascript' src='{{ asset('js/jquery.countTo.min.js') }}'></script>
    <script type='text/javascript' src='{{ asset('js/jquery.barfiller.js') }}'></script>
    <script type='text/javascript' src='{{ asset('js/custom.js') }}'></script>


</body>
</html>
