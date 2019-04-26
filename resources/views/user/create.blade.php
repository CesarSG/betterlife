@extends('layouts.admin')
@section('section')
@if(session('message'))
<div class="alert alert-success">
                  <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                    <i class="tim-icons icon-simple-remove"></i>
                  </button>
                  <span>
                    <b> Success - </b> {{session('message')}}</span>
                </div>
@endif

<div class="row">

          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="title">Creacion de usuario</h4>
                <p>Como Administrador</p>
              </div>
              <div class="card-body">
                <form method="POST" action="{{ route('create.user') }}">
                  @csrf
                  <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-4 pr-md-1">
                      <div class="form-group">
                        <label>{{__('Name')}}</label>
                        <input name="name" type="text" class="form-control" placeholder="Nombre" value="{{ old('name') }}">
                      </div>
                      @if ($errors->has('name'))
                      <p class="text-danger">
                      {{ $errors->first('name') }}
                    </p>
          						@endif
                    </div>

                    <div class="col-md-4 pl-md-1">
                      <div class="form-group">
                        <label>Apellido</label>
                        <input name="last_name" type="text" class="form-control" placeholder="Apellido" value="{{ old('last_name') }}">
                      </div>
                      @if ($errors->has('last_name'))
                      <p class="text-danger">
                      {{ $errors->first('last_name') }}
                    </p>
          						@endif
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-4 pr-md-1">
                      <div class="form-group">
                        <label>Username</label>
                        <input name="username" type="text" class="form-control" placeholder="Username" value="{{old('username')}}">
                        @if ($errors->has('username'))
                        <p class="text-danger">
                        {{ $errors->first('username') }}
                      </p>
                        @endif
                      </div>
                    </div>
                    <div class="col-md-4 pl-md-1">
                      <div class="form-group">
                        <label >{{ __('E-Mail Address')}}</label>
                        <input name="email" type="email" class="form-control" placeholder="example@mail.com" value="{{old('email')}}">
                        @if ($errors->has('email'))
                        <p class="text-danger">
                        {{ $errors->first('email') }}
                      </p>
                        @endif
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-4 pr-md-1">
                      <div class="form-group">
                        <label>{{ __('Password') }}</label>
                        <input name="username" type="password" class="form-control" value="">
                        @if ($errors->has('password'))
                        <p class="text-danger">
                        {{ $errors->first('password') }}
                      </p>
                        @endif
                      </div>
                    </div>
                    <div class="col-md-4 pl-md-1">
                      <div class="form-group">
                        <label >{{ __('Confirm Password') }}</label>
                        <input  id="password-confirm" type="password" name="password_confirmation" class="form-control" value="" required>

                      </div>
                    </div>
                  </div>

                  <div class="card-footer">
                    <button type="submit" class="btn btn-fill btn-primary">Guardar Informacion</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>



@endsection
