@extends('layouts.admin-layout')

@section('section')
<div class="row">

          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Registrar un evento</h4>
              </div>
              <div class="card-body">
                <form action="/" method="get" class="form-horizontal">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                          <label>Nombre del evento</label>
                        <input type="text" class="form-control"  placeholder="Ingresa el nombre del evento">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-md-1">
                      <div class="form-group">
                        <label>Fecha de inicio</label>
                        <input type="date" class="form-control" placeholder="Company">
                      </div>
                    </div>
                    <div class="col-md-6 pl-md-1">
                      <div class="form-group">
                        <label>Fecha final</label>
                        <input type="date" class="form-control" placeholder="Last Name">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                          <label>Ubicacion del evento</label>
                        <input type="text" class="form-control"  placeholder="Ingresa la ubicacion del evento">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                          <label>Descripcion del evento</label>
                        <textarea rows="4" cols="80" class="form-control" placeholder="Aqui puede ir la descripcion del evento." value="Mike"></textarea>
                      </div>
                    </div>
                  </div>
                    <div class="card-footer">
                      <button type="submit" class="btn btn-fill btn-primary">Guardar</button>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>
@endsection
