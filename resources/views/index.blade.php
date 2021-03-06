@extends('layouts.app')

@section('content')
<div class="swiper-container hero-slider">
    <div class="swiper-wrapper">
        <div class="swiper-slide hero-content-wrap">
            <img src="images/Banner.jpg" alt="">

            <div class="hero-content-overlay position-absolute w-100 h-100">
                <div class="container h-100">
                    <div class="row h-100">
                        <div class="col-12 col-lg-8 d-flex flex-column justify-content-center align-items-start">
                            <header class="entry-header">
                                <h1>Dona</h1>
                                <h4>para una buena causa</h4>
                            </header><!-- .entry-header -->

                            <div class="entry-content mt-4">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestibulum mauris quis aliquam. Integer accumsan sodales odio, id tempus ullamcorper</p>
                            </div><!-- .entry-content -->

                            <footer class="entry-footer d-flex flex-wrap align-items-center mt-5">
                                <a href="{{ route('login') }}" class="btn gradient-bg mr-2">Dona Ahora</a>
                                <a href="#" class="btn orange-border">Leer más</a>
                            </footer><!-- .entry-footer -->
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- .container -->
            </div><!-- .hero-content-overlay -->
        </div><!-- .hero-content-wrap -->

        <div class="swiper-slide hero-content-wrap">
            <img src="images/Banner2.jpg" alt="">

            <div class="hero-content-overlay position-absolute w-100 h-100">
                <div class="container h-100">
                    <div class="row h-100">
                        <div class="col-12 col-lg-8 d-flex flex-column justify-content-center align-items-start">
                            <header class="entry-header">
                                <h1>Juntos</h1>
                                <h4>por la educación</h4>
                            </header><!-- .entry-header -->

                            <div class="entry-content mt-4">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestibulum mauris quis aliquam. Integer accumsan sodales odio, id tempus ullamcorper</p>
                            </div><!-- .entry-content -->

                            <footer class="entry-footer d-flex flex-wrap align-items-center mt-5">
                                <a href="{{ route('login') }}" class="btn gradient-bg mr-2">Dona Ahora</a>
                                <a href="#" class="btn orange-border">Leer más</a>
                            </footer><!-- .entry-footer -->
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- .container -->
            </div><!-- .hero-content-overlay -->
        </div><!-- .hero-content-wrap -->

        <div class="swiper-slide hero-content-wrap">
            <img src="images/Banner3.jpg" alt="">

            <div class="hero-content-overlay position-absolute w-100 h-100">
                <div class="container h-100">
                    <div class="row h-100">
                        <div class="col-12 col-lg-8 d-flex flex-column justify-content-center align-items-start">
                            <header class="entry-header">
                                <h1>Por</h1>
                                <h4>mejores oportunidades</h4>
                            </header><!-- .entry-header -->

                            <div class="entry-content mt-4">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestibulum mauris quis aliquam. Integer accumsan sodales odio, id tempus ullamcorper</p>
                            </div><!-- .entry-content -->

                            <footer class="entry-footer d-flex flex-wrap align-items-center mt-5">
                                <a href="{{ route('login') }}" class="btn gradient-bg mr-2">Dona Ahora</a>
                                <a href="#" class="btn orange-border">Leer más</a>
                            </footer><!-- .entry-footer -->
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- .container -->
            </div><!-- .hero-content-overlay -->
        </div><!-- .hero-content-wrap -->
    </div><!-- .swiper-wrapper -->

    <div class="pagination-wrap position-absolute w-100">
        <div class="container">
            <div class="swiper-pagination"></div>
        </div><!-- .container -->
    </div><!-- .pagination-wrap -->

    <!-- Add Arrows -->
    <div class="swiper-button-next flex justify-content-center align-items-center">
        <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1171 960q0 13-10 23l-466 466q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l393-393-393-393q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l466 466q10 10 10 23z"/></svg></span>
    </div>

    <div class="swiper-button-prev flex justify-content-center align-items-center">
        <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1203 544q0 13-10 23l-393 393 393 393q10 10 10 23t-10 23l-50 50q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l50 50q10 10 10 23z"/></svg></span>
    </div>
</div><!-- .hero-slider -->

<div class="home-page-icon-boxes">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4 mt-4 mt-lg-0">
                <div class="icon-box">
                    <figure class="d-flex justify-content-center">
                        <img src="images/hands-gray.png" alt="">
                        <img src="images/hands-white.png" alt="">
                    </figure>

                    <header class="entry-header">
                        <h3 class="entry-title">Vuelvete un Voluntario</h3>
                    </header>

                    <div class="entry-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris quis aliquam. </p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4 mt-4 mt-lg-0">
                <div class="icon-box">
                    <figure class="d-flex justify-content-center">
                        <img src="images/donation-gray.png" alt="">
                        <img src="images/donation-white.png" alt="">
                    </figure>

                    <header class="entry-header">
                        <h3 class="entry-title">Enterate de nuestro eventos</h3>
                    </header>

                    <div class="entry-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris quis aliquam. </p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4 mt-4 mt-lg-0">
                <div class="icon-box">
                    <figure class="d-flex justify-content-center">
                        <img src="images/charity-gray.png" alt="">
                        <img src="images/charity-white.png" alt="">
                    </figure>

                    <header class="entry-header">
                        <h3 class="entry-title">Ayudanos a recaudar fondos</h3>
                    </header>

                    <div class="entry-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris quis aliquam. </p>
                    </div>
                </div>
            </div>
        </div><!-- .row -->
    </div><!-- .container -->
</div><!-- .home-page-icon-boxes -->

<div class="home-page-welcome">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 order-2 order-lg-1">
                <div class="welcome-content">
                    <header class="entry-header">
                        <h2 class="entry-title">Bienvenido a nuestra fundación</h2>
                    </header><!-- .entry-header -->

                    <div class="entry-content mt-5">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris quis aliquam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestibulum mauris quis aliquam. Integer accumsan sodales odio, id tempus velit ullamcorper id. Quisque at erat eu libero consequat tempus. Quisque molestie convallis tempus. Ut semper purus metus, a euismod sapien sodales ac. Duis viverra eleifend fermentum.</p>
                    </div><!-- .entry-content -->

                    <div class="entry-footer mt-5">
                        <a href="#" class="btn gradient-bg mr-2">Leer más </a>
                    </div><!-- .entry-footer -->
                </div><!-- .welcome-content -->
            </div><!-- .col -->

            <div class="col-12 col-lg-6 mt-4 order-1 order-lg-2">
                <img src="images/welcome.jpg" alt="welcome">
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</div><!-- .home-page-icon-boxes -->

<div class="home-page-events">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="upcoming-events">
                    <div class="section-heading">
                        <h2 class="entry-title">Eventos</h2>
                    </div><!-- .section-heading -->
                    <p hidden>{{$count = 0}}</p>
                    @foreach($events as $event)
                    <div class="event-wrap d-flex flex-wrap justify-content-between">
                        <figure class="m-0">
                            <img src="{{asset('storage').'/'.$event->images->image_patch}}" alt="">
                        </figure>

                        <div class="event-content-wrap">
                            <header class="entry-header d-flex flex-wrap align-items-center">
                                <h3 class="entry-title w-100 m-0"><a href="#">{{$event->name}}</a></h3>

                                <div class="posted-date">
                                    <a href="#">{{$event->date_final}}</a>
                                </div><!-- .posted-date -->

                                <div class="cats-links">
                                    <a href="#">{{$event->location}}</a>
                                </div><!-- .cats-links -->
                            </header><!-- .entry-header -->

                            <div class="entry-content">
                                <p class="m-0">{{$event->description}}</p>
                            </div><!-- .entry-content -->

                            <div class="entry-footer">
                                <a href="#">Leer más</a>
                            </div><!-- .entry-footer -->
                        </div><!-- .event-content-wrap -->
                    </div><!-- .event-wrap -->
                    <p hidden>{{$count = $count + 1}}</p>
                    @if($count == 3)
                        @break
                    @endif
                    @endforeach
                </div><!-- .upcoming-events -->
            </div><!-- .col -->

            <div class="col-12 col-lg-6">
                <div class="featured-cause">
                    <div class="section-heading">
                        <h2 class="entry-title">Causa Destacada</h2>
                    </div><!-- .section-heading -->

                    <div class="cause-wrap d-flex flex-wrap justify-content-between">
                        <figure class="m-0">
                            <img src="images/featured-causes.jpg" alt="">
                        </figure>

                        <div class="cause-content-wrap">
                            <header class="entry-header d-flex flex-wrap align-items-center">
                                <h3 class="entry-title w-100 m-0"><a href="#">Mejores Opotunidades</a></h3>

                                <div class="posted-date">
                                    <a href="#">05 Enero, 2019 </a>
                                </div><!-- .posted-date -->

                                <div class="cats-links">
                                    <a href="#">Guadalajara</a>
                                </div><!-- .cats-links -->
                            </header><!-- .entry-header -->

                            <div class="entry-content">
                                <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris. Lorem ipsum dolor sit amet, consectetur.</p>
                            </div><!-- .entry-content -->

                            <div class="entry-footer mt-5">
                                <a href="{{ route('login') }}" class="btn gradient-bg mr-2">Dona Ahora</a>
                            </div><!-- .entry-footer -->
                        </div><!-- .cause-content-wrap -->

                        <div class="fund-raised w-100">
                            <div class="featured-fund-raised-bar barfiller">
                                <div class="tipWrap">
                                    <span class="tip"></span>
                                </div><!-- .tipWrap -->

                                <span class="fill" data-percentage="65"></span>
                            </div><!-- .fund-raised-bar -->

                            <div class="fund-raised-details d-flex flex-wrap justify-content-between align-items-center">
                                <div class="fund-raised-total mt-4">
                                    Recaudado: $65 000
                                </div><!-- .fund-raised-total -->

                                <div class="fund-raised-goal mt-4">
                                    Meta: $100 000
                                </div><!-- .fund-raised-goal -->
                            </div><!-- .fund-raised-details -->
                        </div><!-- .fund-raised -->
                    </div><!-- .cause-wrap -->
                </div><!-- .featured-cause -->
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</div><!-- .home-page-events -->

<div class="our-causes">
    <div class="container">
        <div class="row">
            <div class="coL-12">
                <div class="section-heading">
                    <h2 class="entry-title">Nuestras Causas</h2>
                </div><!-- .section-heading -->
            </div><!-- .col -->
        </div><!-- .row -->

        <div class="row">
            <div class="col-12">
                <div class="swiper-container causes-slider">
                    <div class="swiper-wrapper">

                    @foreach($causes as $cause)
                        <div class="swiper-slide">
                            <div  class="cause-wrap">
                                <figure class="m-0">
                                    <img src="{{asset('storage').'/'.$cause->images->image_patch}}" alt="">

                                    <div class="figure-overlay d-flex justify-content-center align-items-center position-absolute w-100 h-100">
                                        <a href="{{ route('login') }}" class="btn gradient-bg mr-2">Dona Ahora</a>
                                    </div><!-- .figure-overlay -->
                                </figure>

                                <div style="height: 300px" class="cause-content-wrap">
                                    <header class="entry-header d-flex flex-wrap align-items-center">
                                        <h3 class="entry-title w-100 m-0"><a href="#">{{$cause->name}}</a></h3>
                                    </header><!-- .entry-header -->

                                    <div class="entry-content">
                                        <p class="m-0">{{$cause->description}}</p>
                                    </div><!-- .entry-content -->

                                    <div class="fund-raised w-100">
                                        <div class="fund-raised-bar-1 barfiller">
                                            <div class="tipWrap">
                                                <span class="tip"></span>
                                            </div><!-- .tipWrap -->

                                            <span class="fill" data-percentage="{{$cause->pct}}"></span>
                                        </div><!-- .fund-raised-bar -->

                                        <div class="fund-raised-details d-flex flex-wrap justify-content-between align-items-center">
                                            <div class="fund-raised-total mt-4">
                                                Recaudado: ${{ $cause->current_money}} 
                                            </div><!-- .fund-raised-total -->

                                            <div class="fund-raised-goal mt-4">
                                                Meta: ${{$cause->goal}}  
                                            </div><!-- .fund-raised-goal -->
                                        </div><!-- .fund-raised-details -->
                                    </div><!-- .fund-raised -->
                                </div><!-- .cause-content-wrap -->
                            </div><!-- .cause-wrap -->
                        </div><!-- .swiper-slide -->
                    @endforeach
                    </div><!-- .swiper-wrapper -->

                </div><!-- .swiper-container -->

                <!-- Add Arrows -->
                <div class="swiper-button-next flex justify-content-center align-items-center">
                    <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1171 960q0 13-10 23l-466 466q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l393-393-393-393q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l466 466q10 10 10 23z"/></svg></span>
                </div>

                <div class="swiper-button-prev flex justify-content-center align-items-center">
                    <span><svg fill='yellow' viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path stroke="black" d="M1203 544q0 13-10 23l-393 393 393 393q10 10 10 23t-10 23l-50 50q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l50 50q10 10 10 23z"/></svg></span>
                </div>
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</div><!-- .our-causes -->

<div class="home-page-limestone">
    <div class="container">
        <div class="row align-items-end">
            <div class="coL-12 col-lg-6">
                <div class="section-heading">
                    <h2 class="entry-title">Nos encanta ayudar a todos los niños que tienen problemas en el mundo.</h2>

                    <p class="mt-5">Dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris quis aliquam. Lorem ipsum dolor sit amet.</p>
                </div><!-- .section-heading -->
            </div><!-- .col -->

            <div class="col-12 col-lg-6">
                <div class="milestones d-flex flex-wrap justify-content-between">
                    <div class="col-12 col-sm-4 mt-5 mt-lg-0">
                        <div class="counter-box">
                            <div class="d-flex justify-content-center align-items-center">
                                <img src="images/teamwork.png" alt="">
                            </div>

                            <div class="d-flex justify-content-center align-items-baseline">
                                <div class="start-counter" data-to="120" data-speed="2000"></div>
                                <div class="counter-k">K</div>
                            </div>

                            <h3 class="entry-title">Niños ayudados</h3><!-- entry-title -->
                        </div><!-- counter-box -->
                    </div><!-- .col -->

                    <div class="col-12 col-sm-4 mt-5 mt-lg-0">
                        <div class="counter-box">
                            <div class="d-flex justify-content-center align-items-center">
                                <img src="images/donation.png" alt="">
                            </div>

                            <div class="d-flex justify-content-center align-items-baseline">
                                <div class="start-counter" data-to="79" data-speed="2000"></div>
                            </div>

                            <h3 class="entry-title">Pozos</h3><!-- entry-title -->
                        </div><!-- counter-box -->
                    </div><!-- .col -->

                    <div class="col-12 col-sm-4 mt-5 mt-lg-0">
                        <div class="counter-box">
                            <div class="d-flex justify-content-center align-items-center">
                                <img src="images/dove.png" alt="">
                            </div>

                            <div class="d-flex justify-content-center align-items-baseline">
                                <div class="start-counter" data-to="253" data-speed="2000"></div>
                            </div>

                            <h3 class="entry-title">Voluntarios</h3><!-- entry-title -->
                        </div><!-- counter-box -->
                    </div><!-- .col -->
                </div><!-- .milestones -->
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</div><!-- .our-causes -->
@endsection
