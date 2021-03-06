@extends('layouts.admin')
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
        <h4 class="card-title">Causas</h4>
        <form action="{{route('causa.index')}}" method="GET" class="pull-right form-inline ml-auto">
          <div class="form-group">
            <input name="name" type="search" class="form-control" placeholder="Search">
          </div>
          <button type="submit" class="btn btn-info btn-icon btn-round ml-2"><i class="tim-icons icon-zoom-split"></i></button>
        </form>
      </div>
      <div class="card-body">
        <div class="table-responsive ps">
          <table class="table tablesorter">
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
              @if(isset($causes))
              @foreach ($causes as $cause)
              <tr>
                <td class="text-center">{{ $cause->id}}</td>
                <td class="text-center">
                  <div class="photo"><img src="{{asset('storage').'/'.$cause->images->image_patch}}" alt=""></div>
              </td>
                <td>{{ $cause->name}}</td>
                <td>Activo</td>
                <td id="meta" >${{ $cause->goal}}</td>
                <td>
                  <div class="progress-container">
                    <span class="progress-badge" id="current_money">$ {{ $cause->current_money}}</span>

                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width:{{$cause->pct}}%;">
                      </div>
                    </div>
                  </div>
                </td>
                <td class="td-actions text-center">
                <form action="{{ route('causa.destroy', $cause->id) }}" method="POST">
                    <button type="button" rel="tooltip" class="btn btn-success btn-sm btn-icon">
                      <a href="{{ route('causa.edit', $cause->id) }}" style="color:white;" class="tim-icons icon-settings"></a>
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
            {{$causes->links()}}
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

    <script>
        function Sumar() {
            var n1 = document.getElementById('meta').value;
            var n2 = document.getElementById('current_money').value;
            var divicion = parseInt(n1) / parseInt(n2);
            var resultado = divicion*100;
            return (resultado);
        }
    </script>
@endsection
