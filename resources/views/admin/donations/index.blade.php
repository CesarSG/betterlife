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
        <h4 class="card-title">Donaciones</h4>
      </div>
      <div class="card-body">

        <form class="" action="index.html" method="post">
          <label for="filtro_nombre"></label>
        </form>
        <div class="table-responsive ps">
          <table class="table table-striped">
            <thead class="text-primary">
              <tr>
                <th class="text-center">#</th>
                <th class="text-center">Hora</th>
                <th>Monto</th>
                <th>Estatus</th>
                <th class="text-center">Accion</th>
              </tr>
            </thead>
            <tbody>
              @if(isset($donations))
              @foreach ($donations as $donation)
              <tr>
                <td class="text-center">{{ $donation->id}}</td>
                <td class="text-center">{{$donation->dataTime_donation}}</td>
                <td>$ {{$donation->Total}}</td>
                <td>Aprovada</td>
                <td class="td-actions text-center">
                <form action="{{ route('donacion.destroy', $donation->id) }}" method="POST">
                    <button type="button" rel="tooltip" class="btn btn-success btn-sm btn-icon">
                      <a href="{{ route('causa.show', $donation->id) }}" style="color:white;" class="tim-icons icon-notes"></a>
                    </button>
                      @csrf
                      @method('DELETE')
                    <button type="submit" rel="tooltip" class="btn btn-danger btn-sm btn-icon">
                      <a style="color:white;" class="tim-icons icon-simple-remove"></a>
                    </button>
                </form>
              </td>
              </tr>
              @endforeach
              @else
              <p>tabla vacia</p>
              @endif
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
