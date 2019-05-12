@extends('layouts.admin-layout')

@section('section')

<!-- Modal para agregar causas a la donacion -->
<div id="panel-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-sm">
        <div class="modal-content card">
            <div class="panel panel-color panel-primary card-body">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title card-title">Agregar Causa</h4>
              </div>
              <div class="modal-body ">
                <form role="form" action="/admin/donacion/{{$donation->id}}/editar" method="POST">
                    {{ csrf_field() }}
                <div class="panel-body ">
                    <div class="form-group ">
                        <label for="nombre" class="control-label">Cause</label>
                        <select class="form-control select2" name="cause_id">
                            <option>Seleccionar</option>
                            @foreach($causes as $cause)
                            <option value="{{ $cause->id }}">{{ $cause->name }} </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="amount" class="control-label">Cantidad</label>
                                <input type="number" name="amount" class="form-control" id="amount" value="{{ old('amount') }}" required>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
                <div class="modal-footer">
                    <div class="form-group">
                        <button class="btn btn-default waves-effect" data-dismiss="modal">Cerrar</button>
                        <button class="btn btn-primary waves-effect waves-light">Registrar</button>

                    </div>

                </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
@if(session('notification'))
<div class="alert alert-success">
  <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
    <i class="tim-icons icon-simple-remove"></i>
  </button>
  <span><b> Success - </b> {{session('notification')}}</span>
</div>
@endif

    <!--Form Content Donacion  -->
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Registro de donacion</h4>
        </div>
          <div class="card-body">
              {{ csrf_field() }}
              <div class="row">
                <div class="col-md-9">
                  <div class="form-group">
                    <label for="nombre" class="control-label">Nombre completo</label>
                      <input  disabled type="text" name="user_id" class="form-control" value="{{Auth::user()->name}}  {{Auth::user()->last_name}}">
                    </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <label class="control-label">Fecha</label>
                      <input disabled type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker-autoclose" name="date" value="{{ old('date', date('d / m / Y')) }}" required>
                  </div>
                  </div>
                </div>
              </div>
              </div>
                </div>

                <!-- <div class="col-md-12">
                  <div class="card">
                    <div class="card-body">

                    </div>
                  </div>
                </div> -->
                <div class="col-md-12">
                  <div class="card">
                    <div class="card-header">
                      <div class="tools float-right">
                        <div class="dropdown">
                        <button class=" btn btn-primary btn-simple" data-toggle="modal"  data-target="#panel-modal">Agregar una causa a donar  <i class="tim-icons icon-heart-2"></i></button>
                      </div>
                    </div></div>

                <div class="card-body"><div class="table-responsive ps">
                  <table class="table-shopping table">
                    <thead>
                      <tr>
                        <th class="text-center" width="100">IMG</th>
                        <th class="text-left" width="500">Causa apoyada</th>
                          <th class="text-left" width="500">Descripción</th>
                        <th class="text-left"width="150">Monto</th>
                        <th class="text-left">opc</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($donation_details as $donation_detail )
                      <tr>
                      <td><div class="img-container "><img alt="..." src="{{route('user.avatar',['filename'=>Auth::user()->image])}}"></div></td>
                      <td class="td-name"><a href="">{{$donation_detail->cause->name}}</a><br></td>
                      <td class="td-name">{{$donation_detail->cause->description}}<br></td>
                      <td class="td-number"><small>$ </small>{{$donation_detail->amount,2}}</td>
                      <td class="td-actions"><button type="button" data-placement="top" title="" class="btn-link btn btn-primary"><i class="tim-icons icon-simple-remove"></i></button></td>
                      </tr>
                      @endforeach
                      <!-- FOOTER SHOPING TABLE -->
                      <td></td>
                      <tr><td colspan="3"></td><td class="td-total">Total</td>
                      <td class="td-price"><small>$</small>{{ number_format( $total,2)}}</td>
                      </tr>
                    </tbody></table>
                    <form class="" action="{{route('paypal')}}" method="post">
                    <a href="/admin/donacion" class="btn btn-inverse waves-effect waves-light">Volver</a>
                      {{ csrf_field() }}
                      <input type="hidden" name="amount" value="{{$total}}">
                      <button class="btn-round float-right mr-5 btn btn-info animation-on-hover"> Completar donacion<i class="tim-icons icon-minimal-right"></i></button>
                    </form>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div>
                    <div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                    </div>
                    </div>
                  </div>
                </div>
                </div>
@endsection
