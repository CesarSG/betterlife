@extends('layouts.app')

@section('content')
<body class="single-page causes-page">
  <div class="page-header">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <h1>Nuestras Causas</h1>
              </div><!-- .col -->
          </div><!-- .row -->
      </div><!-- .container -->
  </div><!-- .page-header -->

  <div class="our-causes pt-0">
      <div class="container">
          <div class="row">
              @foreach($causes as $cause)
              <div class="col-12 col-md-6 col-lg-4">
                  <div class="cause-wrap">
                      <figure class="m-0">
                          <img src="{{asset('storage').'/'.$cause->images->image_patch}}" alt="">

                          <div class="figure-overlay d-flex justify-content-center align-items-center position-absolute w-100 h-100">
                              <a href="#" class="btn gradient-bg mr-2">Donate Now</a>
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
              </div><!-- .col -->
              @endforeach

          </div><!-- .row -->
      </div><!-- .container -->
  </div><!-- .our-causes -->


</body>

@endsection
