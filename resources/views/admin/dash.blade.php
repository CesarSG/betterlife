@extends('layouts.admin')

@section('section')

  <div class="row">
    <div class="col-md-6 col-lg-3">
      <div class="card-stats card">
        <div class="card-body">
          <div class="row">
            <div class="col-5">
              <div class="info-icon text-center icon-warning">
                <i style="font-size: 60px" class="tim-icons icon-heart-2 text-danger"></i>
              </div>
            </div>
            <div class="col-7">
              <div class="numbers">
                <p class="card-category">Causas</p>
                <h3 class="card-title">{{count($causes)}}</h3>
              </div>
            </div>
          </div>
        </div>
        <div class="card-footer"><hr>
          <div class="stats">
            <i class="tim-icons icon-sound-wave"></i> Causas Activas
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-3">
      <div class="card-stats card">
        <div class="card-body">
          <div class="row">
            <div class="col-5">
              <div class="info-icon text-center icon-primary">
                <i style="font-size: 60px" class="tim-icons icon-square-pin text-info"></i>
              </div>
            </div>
            <div class="col-7">
              <div class="numbers">
                <p class="card-category">Eventos</p>
                <h3 class="card-title">{{count($events)}}</h3>
              </div>
            </div>
          </div>
        </div>
        <div class="card-footer"><hr>
          <div class="stats">
            <i class="tim-icons icon-world"></i> Eventos Activos
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-3">
      <div class="card-stats card">
        <div class="card-body">
          <div class="row">
            <div class="col-5">
              <div class="info-icon text-center icon-success">
                <i style="font-size: 60px" class="tim-icons icon-badge text-primary"></i>
              </div>
            </div>
            <div class="col-7">
              <div class="numbers">
                <p class="card-category">Usuarios</p>
                <h3 class="card-title">{{count($users)}}</h3>
              </div>
            </div>
          </div>
        </div>
        <div class="card-footer"><hr>
          <div class="stats">
            <i class="tim-icons icon-alert-circle-exc"></i> Usuarios de Better Life
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-3">
      <div class="card-stats card">
        <div class="card-body">
          <div class="row">
            <div class="col-5">
              <div class="info-icon text-center icon-danger">
                <i style="font-size: 60px" class="tim-icons icon-gift-2 text-warning"></i>
              </div>
            </div>
            <div class="col-7">
              <div class="numbers">
                <p class="card-category">Donaciones</p>
                <h3 class="card-title">{{count($donations)}}</h3>
              </div>
            </div>
          </div>
        </div>
        <div class="card-footer"><hr>
          <div class="stats">
            <i class="tim-icons icon-watch-time"></i> Donaciones del año
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-6 col-md-12">
      <div class="card ">
        <div class="card-header">
          <h4 class="card-title"><i class="tim-icons icon-square-pin text-info"></i> Eventos Better Life</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table tablesorter " id="">
              <thead class=" text-primary">
                <tr>
                  <th>
                    Nombre
                  </th>
                  <th>
                    Fecha Final
                  </th>
                  <th class="text-center">
                    Ubicacion
                  </th>
                </tr>
              </thead>
              <tbody>
                @foreach($events as $event)
                <tr>
                  <td>
                    {{$event->name}}
                  </td>
                  <td>
                    {{$event->date_final}}
                  </td>
                  <td class="text-center">
                    {{$event->location}}
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6 col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"><i class="tim-icons icon-heart-2 text-danger"></i> Causas Better Life</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive ps">
            <table class="table">
              <thead class="text-primary">
                <tr>
                  <th>Nombre</th>
                  <th>Meta</th>
                  <th>Dinero Actual</th>
                </tr>
              </thead>
              <tbody>
                @foreach($causes as $cause)
                <tr>
                  <td>{{$cause->name}}</td>
                  <td>${{number_format($cause->goal)}}</td>
                  <td class="text-center">
                    <div class="progress-container progress-sm">
                      <span class="progress-value">${{number_format($cause->current_money)}}</span>
                      <div class="progress">
                        
                        <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: {{$cause->pct}}%;">
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
                @endforeach
                </tbody>
              </table>
              <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
              </div>
              <div class="ps__rail-y" style="top: 0px; right: 0px;">
                <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>

@endsection
