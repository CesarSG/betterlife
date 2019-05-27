@extends('layouts.admin')

@section('section')
<div class="alert alert-info">
                  <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                    <i class="tim-icons icon-simple-remove"></i>
                  </button>
                  <span>
                    <b> Info - </b>Verifique que sus datos sean correctos </span>
                </div>
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Registro de donación</h4>
        </div>

          <div class="card-body">
            <form role="form" action="{{ route('donacion.store') }}" method="POST">
              {{ csrf_field() }}
              <div class="row">
                <div class="col-md-9">
                  <div class="form-group">
                    <label for="nombre" class="control-label">Nombre completo</label>
                      <!-- <input  type="text" name="user_id" class="form-control" value="{{Auth::user()->id}}"> -->
                      <input  type="text" name="user_id" class="form-control" value="{{Auth::user()->name}}  {{Auth::user()->last_name}}">
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
                    <!-- <a href="/admin/donacion" class="btn btn-inverse waves-effect waves-light">Volver</a> -->
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Continuar</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
            </div>
              </div>

@endsection
