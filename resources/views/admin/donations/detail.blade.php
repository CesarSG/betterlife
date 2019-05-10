@extends('layouts.admin-layout')

@section('section')
  @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif
<div class="row">

          <div class="col-md-12">
            <div class="card">

              <div class="card-header">
                <h4 class="card-title">Detalle de donacion</h4>
              </div>

              <div class="card-body">

                <form action="{{ route('donacion.update', $donation->id) }}" method="POST">
                  <input type="hidden" name="_method" value="PATCH">

                  @csrf
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                          <label>Nombre del la donacion</label>
                        <input type="text" class="form-control" name="name" value="{{ isset($cause) ? $cause->name : '' }}"  placeholder="Ingresa el nombre del evento">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                          <label>Descripción de la donacion</label>
                              <textarea rows="3" cols="80" name="description" value="" class="form-control" placeholder="Aqui puede ir la descripcion de la donacion.">{{ isset($cause) ? $cause->description : '' }}{{ old('description') }}</textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Meta del evento</label>
                        <input type="number" class="form-control" name="goal" value="{{ isset($cause) ? $cause->goal : '' }}{{ old('goal') }}" placeholder="Ingresa la meta del evento">
                      </div>
                    </div>
                  </div>
                    <div class="card-footer">
                      <button type="submit" value="Submit" class="btn btn-fill btn-primary">Guardar</button>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>
@endsection
