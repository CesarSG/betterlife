@extends('layouts.admin-layout')

@section('section')
<div class="wrapper wrapper-full-page">
  <div class="full-page pricing-page">
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="ml-auto mr-auto text-center col-md-6">
            <h1 class="title">{{$event->name}}</h1>
            <p>{{$event->description}}</p>
            <br>
          </div>

        </div>
        <div class="text-left">
          <h3>Causas involucradas en el evento</h3>
        </div>
        <div class="row">
        @foreach($event->causes as $cause)
          <div class="col-md-6 col-lg-3">
            <div style="height: 440px" class="card-pricing card-primary card">
              <div class="card-body">
                <h3 class="card-title">{{$cause->name}}</h3>
                <img class="card-img" src="{{asset('storage').'/'.$cause->images->image_patch}}" alt="">
                <div class="card-prices">
                  <br>
                  <p class="plan">{{$cause->description}}</p>
                  <br>
                  <div class="progress-container">
                    <h4>${{number_format($cause->goal)}} Meta </h4>
                    <span class="progress-badge">$ {{ number_format($cause->current_money)}} - Dinero actual</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        @endforeach
        </div>
      </div>
    </div>
  </div>
</div>



@endsection
