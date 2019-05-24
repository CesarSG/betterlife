@extends('layouts.admin-layout')
@section('section')
@if(session('message'))
<div class="alert alert-success">
  <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
    <i class="tim-icons icon-simple-remove"></i>
  </button>
  <span><b> Success - </b> {{session('message')}}</span>
</div>
@endif
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Eventos</h4>
      </div>
      <div class="card-body">
        <div class="table-responsive ps">
          <table class="table tablesorter">
            <thead class="text-primary">
              <tr>
                <th class="text-center">#</th>
                <th class="text-center">Imagen</th>
                <th>Nombre Evento</th>
                <th>Fecha Inicio</th>
                <th>Fecha Final</th>
                <th class="text-center">Ubicacion</th>
                <th class="text-center">Info</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($events as $event)
              <tr>
                <td class="text-center">{{ $event->id}}</td>
                <td class="text-center"><div class="photo"><img src="{{asset('storage').'/'.$event->images->image_patch}}" alt=""></div></td>
                <td>{{ $event->name}}</td>
                <td>{{ $event->date_begin}}</td>
                <td>{{ $event->date_final}}</td>
                <td class="text-center">{{ $event->location}}</td>
                <td class="td-actions text-center">
                <button type="button" rel="tooltip" class="btn btn-primary btn-sm btn-icon">
                      <a href="{{ route('evento.info', $event->id) }}" style="color:white;" class="tim-icons icon-alert-circle-exc"></a>
                </button>
                <button type="button" rel="tooltip" class="btn btn-success btn-sm btn-icon">
                      <a href="{{ route('evento.edit', $event->id) }}" style="color:white;" class="tim-icons icon-settings"></a>
                </button>
              </td>
              </tr>
              @endforeach
              </tbody>
            </table>
            <a href="{{ route('evento.create') }}" class="btn-round float-right mr-5 btn btn-info">Crear un nuevo evento<i href="{{ route('evento.create') }}"  class="tim-icons icon-minimal-right"></i></a>
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
