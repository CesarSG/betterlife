@extends('layouts.admin')

@section('section')
<div class="wrapper wrapper-full-page">
  <div class="full-page pricing-page">
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="ml-auto mr-auto text-center col-md-6">
            <h1 class="title">Todas nuestras causas</h1>
            <h4 class="description">Le mostramos nuestras actuales causas, ayudenos a ayudar.</h4>
          </div>
        </div>
        <div class="row">
          @foreach($causes as $cause)
          <div class="col-md-6 col-lg-3">
            <div style="height: 400px" class="card-pricing card-primary card">
              <div class="card-body">
                <h3 class="card-title">{{$cause->name}}</h3>
                <img alt="..." src="../images/3.jpg" class="card-img">
                <div class="card-prices">
                  <br>
                  <p class="plan">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris.</p>
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
