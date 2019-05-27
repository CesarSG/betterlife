@extends('layouts.admin')

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
              @if (@isset($cause))
              <div class="card-header">
                <h4 class="card-title">Actualicion de causa</h4>
              </div>
              @else
              <div class="card-header">
                <h4 class="card-title">Registro de causa</h4>
              </div>
              @endif
              <div class="card-body">
                @if (@isset($cause))
                <form  action="{{ route('causa.update', $cause->id) }}" method="POST" enctype="multipart/form-data">
                  <input type="hidden" name="_method" value="PATCH">
                @else
                <form action="{{ route('causa.store') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                  @endif
                  @csrf
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                          <label>Nombre del la causa</label>
                        <input required type="text" class="form-control" name="name" value="{{ isset($cause) ? $cause->name : '' }}{{ old('name  ') }}"  placeholder="Ingresa el nombre del evento">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                          <label>Descripción de la causa</label>
                              <textarea required rows="3" cols="80" name="description" value="" class="form-control" placeholder="Aqui puede ir la descripcion de la causa.">{{ isset($cause) ? $cause->description : '' }}{{ old('description') }}</textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Meta del evento</label>
                        <input required type="number" class="form-control" name="goal" value="{{ isset($cause) ? $cause->goal : '' }}{{ old('goal') }}" placeholder="Ingresa la meta del evento">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 ">
                      <label>Logo</label>
                      <div class="form-group">
                        <input required name="image_path" type="file" class="form-control" placeholder="Company" required>
                      </div>
                    </div>
                    </div>
                    <input type="hidden" name="current_money" value="{{ isset($cause) ? $cause->current_money : '' }}{{ old('current_money  ') }}">
                    <div class="card-footer">
                      <button type="submit" value="Submit" class="btn btn-fill btn-primary">Guardar</button>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>
@endsection
