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
            <div class="card-pricing card-primary card">
              <div class="card-body">
                <h3 class="card-title">{{$cause->name}}</h3>
                <img alt="..." src="../../../images/3.jpg" class="card-img">
                <div class="card-prices">
                  <br>
                  <p class="plan">{{$cause->description}}</p>
                  <br>
                  <div class="progress-container">
                    <h4>${{$cause->goal}}</h4>
                    <span class="progress-badge">$ {{ $cause->current_money}}</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: {{$cause->pct}}%;">
                      </div>
                    </div>
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
