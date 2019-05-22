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
@section('section')
<div class="row">

          <div class="col-md-12">
            <div class="card">
            @if (@isset($event))
              <div class="card-header">
                <h4 class="card-title">Actualicion del evento</h4>
              </div>
            @else
              <div class="card-header">
                <h4 class="card-title">Registrar un evento</h4>
              </div>
            @endif
              <div class="card-body">
                @if (@isset($event))
                <form action="{{ route('evento.update', $event->id) }}" method="POST">
                  <input type="hidden" name="_method" value="PATCH">
                @else
                <form action="{{ route('evento.store') }}" method="POST" class="form-horizontal">
                @endif
                @csrf
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                          <label>Nombre del evento</label>
                        <input type="text" class="form-control" name="name" value="{{ isset($event) ? $event->name : '' }}{{ old('name  ') }}"  placeholder="Ingresa el nombre del evento">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-md-1">
                      <div class="form-group">
                        <label>Fecha de inicio</label>
                        <input type="date" name="date_begin" value="{{ isset($event) ? $event->date_begin : '' }}{{ old('date_begin  ') }}"  class="form-control">
                      </div>
                    </div>
                    <div class="col-md-6 pl-md-1">
                      <div class="form-group">
                        <label>Fecha final</label>
                        <input type="date" name="date_final" value="{{ isset($event) ? $event->date_final : '' }}{{ old('date_final  ') }}" class="form-control" >
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                          <label>Ubicacion del evento</label>
                        <input type="text" name="location" class="form-control" value="{{ isset($event) ? $event->location : '' }}{{ old('location  ') }}" placeholder="Ingresa la ubicacion del evento">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label class="form-label">Seleccionar causa/s</label>
                        <select name="cause_id[]" class="form-control" multiple>
                          @foreach($causes as $cause)
                              <option value="{{ $cause->id }}" {{ isset($event) && array_search($cause->id, $event->causes->pluck('id')->toArray()) !== false ? 'selected' : '' }}>{{ $cause->name }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                          <label>Descripcion del evento</label>
                        <textarea rows="4" cols="80" class="form-control" name="description" value="{{ isset($event) ? $event->description : '' }}{{ old('description  ') }}" placeholder="Aqui puede ir la descripcion del evento.">{{ isset($event) ? $event->description : '' }}{{ old('description  ') }}</textarea>
                      </div>
                    </div>
                  </div>
                    <div class="card-footer">
                      <button type="submit" value="submit" class="btn btn-fill btn-primary">Guardar</button>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>
@endsection
