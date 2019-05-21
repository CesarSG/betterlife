@extends('layouts.admin-layout')
@section('section')
    <!--Form Content Donacion  -->
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Detalle de donacion realizada</h4>
        </div>
          <div class="card-body">
              {{ csrf_field() }}
              <div class="row">
                <div class="col-md-8">
                  <div class="form-group">
                    <p>Nombre completo: <u><strong>{{Auth::user()->name}}  {{Auth::user()->last_name}}</strong></u></p><hr>
                    </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <p>Fecha y hora: <u><strong>{{$donation->dataTime_donation}}</strong></u></p><hr>
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
                      <td></td>
                      </tr>


                    </tbody></table>
                    <a href="/admin/donacion" class="btn btn-inverse waves-effect waves-light">Volver</a>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div>
                      <div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div>
                    </div>
                  </div>
                </div>
                </div>



@endsection
