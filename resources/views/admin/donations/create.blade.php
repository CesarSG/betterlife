@extends('layouts.admin-layout')

@section('section')
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Crear Donacion</h4>
        </div>

          <div class="card-body">
            <form role="form" action="" method="POST">
              {{ csrf_field() }}
              <div class="row">
                <div class="col-md-9">
                  <div class="form-group">
                    <label for="nombre" class="control-label">Nombre completo</label>
                      <input  type="text" class="form-control" value="{{Auth::user()->id}}">
                    </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <label class="control-label">Fecha</label>
                      <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker-autoclose" name="date" value="{{ old('date', date('d / m / Y')) }}" required>
                  </div>
                </div>

                <div class="col-sm-12">
                  <div class="form-group">
                    <a href="/ventas" class="btn btn-inverse waves-effect waves-light">Volver</a>
                    <button class="btn btn-primary waves-effect waves-light">Guardar</button>
                  </div>
                </div>
              </div>
            </form>
          </div>

@endsection
