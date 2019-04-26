@extends('layouts.admin')

@section('section')
@if(session('message'))
<div class="alert alert-success">
                  <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                    <i class="tim-icons icon-simple-remove"></i>
                  </button>
                  <span>
                    <b> Success - </b> {{session('message')}}"</span>
                </div>
@endif
<div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Editar Perfil</h5>
              </div>
              <div class="card-body">
                <form method="POST" action="{{ route('user.update') }}">
                  @csrf
                  <div class="row">
                    <div class="col-md-6 pr-md-1">
                      <div class="form-group">
                        <label>Nombre</label>
                        <input name="name" type="text" class="form-control" placeholder="Company" value="{{Auth::user()->name}}">
                      </div>
                      @if ($errors->has('name'))
                      <p class="text-danger">
                      {{ $errors->first('name') }}
                    </p>
          						@endif
                    </div>
                    <div class="col-md-6 pl-md-1">
                      <div class="form-group">
                        <label>Apellido</label>
                        <input name="apellido" type="text" class="form-control" placeholder="Last Name" value="{{Auth::user()->last_name}}">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-md-1">
                      <div class="form-group">
                        <label>Username</label>
                        <input name="username" type="text" class="form-control" placeholder="Username" value="{{Auth::user()->username}}">
                        @if ($errors->has('username'))
                        <p class="text-danger">
                        {{ $errors->first('username') }}
                      </p>
                        @endif
                      </div>
                    </div>
                    <div class="col-md-6 pl-md-1">
                      <div class="form-group">
                        <label >Email</label>
                        <input name="email" type="email" class="form-control" value="{{Auth::user()->email}}">
                        @if ($errors->has('email'))
                        <p class="text-danger">
                        {{ $errors->first('email') }}
                      </p>
                        @endif
                      </div>
                    </div>
                  </div>

                  <div class="card-footer">
                    <button type="submit" class="btn btn-fill btn-primary">Actualizar información</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-user">
              <div class="card-body">
                <p class="card-text">
                  <div class="author">
                    <div class="block block-one"></div>
                    <div class="block block-two"></div>
                    <div class="block block-three"></div>
                    <div class="block block-four"></div>
                    <a href="javascript:void(0)">
                      <img class="avatar" src="../assets/img/emilyz.jpg" alt="...">
                      <h5 class="title">{{Auth::user()->name .' '. Auth::user()->last_name}}</h5>
                    </a>
                    <p class="description">
                      {{Auth::user()->username}}
                    </p>
                  </div>
                </p>
              </div>

            </div>
          </div>
        </div>
@endsection
