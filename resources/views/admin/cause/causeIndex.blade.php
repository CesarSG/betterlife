@extends('layouts.admin-layout')

@section('section')
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Causas</h4>
      </div>
      <div class="card-body">
        <div class="table-responsive ps">
          <table class="table table-striped">
            <thead class="text-primary">
              <tr>
                <th class="text-center">#</th>
                <th class="text-center">Imagen</th>
                <th>Nombre Causa</th>
                <th>Estatus</th>
                <th>Meta</th>
                <th class="text-center">Cantidad Actual</th>
                <th class="text-center">Accion</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($causes as $cause)
              <tr>
                <td class="text-center">{{ $cause->id}}</td>
                <td class="text-center"><div class="photo"><img alt="..." src="../images/2.jpg"></div></td>
                <td>{{ $cause->name}}</td>
                <td>Activo</td>
                <td>${{ $cause->goal}}</td>
                <td>
                  <div class="progress-container">
                    <span class="progress-badge">$ {{ $cause->current_money}}</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 85%;">
                      </div>
                    </div>
                  </div>
                </td>
                <td class="td-actions text-center">
                <button type="button" rel="tooltip" class="btn btn-success btn-sm btn-icon">
                    <a href="{{ route('causa.edit', $cause->id) }}" style="color:white;" class="tim-icons icon-settings"></a>
                </button>
                <button type="button" rel="tooltip" class="btn btn-danger btn-sm btn-icon">
                    <a href="{{ route('causa.destroy', $cause->id) }}" style="color:white;" class="tim-icons icon-simple-remove"></a>
                </button>
              </td>
              </tr>
              @endforeach
              </tbody>
            </table>
            <a href="{{ route('causa.create') }}" class="btn-round float-right mr-5 btn btn-info">Crear una nueva causa <i href="{{ route('causa.create') }}"  class="tim-icons icon-minimal-right"></i></a>
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
@endsection
