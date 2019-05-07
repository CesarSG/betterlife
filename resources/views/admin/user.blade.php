@extends('layouts.admin-layout')

@section('section')
<div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Creacion de usuario</h5>
              </div>
              <div class="card-body">
                <form>
                  <div class="row">
                    <div class="col-md-5 pr-md-1">
                      <div class="form-group">
                        <label>Company (disabled)</label>
                        <input type="text" class="form-control" disabled="" placeholder="Company" value="Creative Code Inc.">
                      </div>
                    </div>
                    <div class="col-md-3 px-md-1">
                      <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" placeholder="Username" value="michael23">
                      </div>
                    </div>
                    <div class="col-md-4 pl-md-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" placeholder="mike@email.com">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-md-1">
                      <div class="form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control" placeholder="Company" value="Mike">
                      </div>
                    </div>
                    <div class="col-md-6 pl-md-1">
                      <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" class="form-control" placeholder="Last Name" value="Andrew">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control" placeholder="Home Address" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 pr-md-1">
                      <div class="form-group">
                        <label>City</label>
                        <input type="text" class="form-control" placeholder="City" value="Mike">
                      </div>
                    </div>
                    <div class="col-md-4 px-md-1">
                      <div class="form-group">
                        <label>Country</label>
                        <input type="text" class="form-control" placeholder="Country" value="Andrew">
                      </div>
                    </div>
                    <div class="col-md-4 pl-md-1">
                      <div class="form-group">
                        <label>Postal Code</label>
                        <input type="number" class="form-control" placeholder="ZIP Code">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-8">
                      <div class="form-group">
                        <label>About Me</label>
                        <textarea rows="4" cols="80" class="form-control" placeholder="Here can be your description" value="Mike">Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</textarea>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-fill btn-primary">Save</button>
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
                      <h5 class="title">Mike Andrew</h5>
                    </a>
                    <p class="description">
                      Ceo/Co-Founder
                    </p>
                  </div>
                </p>
                <div class="card-description">
                  Do not be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                </div>
              </div>
              <div class="card-footer">
                <div class="button-container">
                  <button href="javascript:void(0)" class="btn btn-icon btn-round btn-facebook">
                    <i class="fab fa-facebook"></i>
                  </button>
                  <button href="javascript:void(0)" class="btn btn-icon btn-round btn-twitter">
                    <i class="fab fa-twitter"></i>
                  </button>
                  <button href="javascript:void(0)" class="btn btn-icon btn-round btn-google">
                    <i class="fab fa-google-plus"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
                  <div class="col-md-8">
                    <div class="card">
                      <div class="card-header">
                        <h5 class="title">Registrar un evento</h5>
                      </div>
                      <div class="card-body">
                        <form>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label>Nombre del evento</label>
                                <input type="text" class="form-control" placeholder="Ingresa el nombre del evento">
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
                            <div class="col-md-12">
                              <div class="form-group">
                                <label>Ubicacion del evento</label>
                                <input type="text" class="form-control" placeholder="Ingresa la ubicacion del evento">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-8">
                              <div class="form-group">
                                <label>Descripcion del evento</label>
                                <textarea rows="4" cols="80" class="form-control" placeholder="Aqui puede ir la descripcion del evento." value="Mike"></textarea>
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                      <div class="card-footer">
                        <button type="submit" class="btn btn-fill btn-primary">Guardar</button>
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
                              <img class="avatar" src="../images/mike.jpg" alt="...">
                              <h5 class="title">Mike LeValley</h5>
                            </a>
                            <p class="description">
                              Ceo/Co-Founder
                            </p>
                          </div>
                        </p>
                        <div class="card-description">
                          Do not be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                        </div>
                      </div>
                      <div class="card-footer">
                        <div class="button-container">
                          <button href="javascript:void(0)" class="btn btn-icon btn-round btn-facebook">
                            <i class="fab fa-facebook"></i>
                          </button>
                          <button href="javascript:void(0)" class="btn btn-icon btn-round btn-twitter">
                            <i class="fab fa-twitter"></i>
                          </button>
                          <button href="javascript:void(0)" class="btn btn-icon btn-round btn-google">
                            <i class="fab fa-google-plus"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="card">
                      <div class="card-header">
                        <h4 class="card-title">Form Elements</h4>
                      </div>
                      <div class="card-body">
                        <form action="/" method="get" class="form-horizontal">
                          <div class="row">
                            <label class="col-sm-2 col-form-label">With help</label>
                            <div class="col-sm-10">
                              <div class="form-group">
                                <input type="text" class="form-control">
                                <span class="form-text">A block of help text that breaks onto a new line.</span>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <label class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                              <div class="form-group">
                                <input autocomplete="off" type="password" class="form-control">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <label class="col-sm-2 col-form-label">Placeholder</label>
                            <div class="col-sm-10">
                              <div class="form-group">
                                <input placeholder="placeholder" type="text" class="form-control">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <label class="col-sm-2 col-form-label">Disabled</label>
                            <div class="col-sm-10">
                              <div class="form-group">
                                <input disabled="" type="text" class="form-control" value="Disabled input here..">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <label class="col-sm-2 col-form-label">Static control</label>
                            <div class="col-sm-10">
                              <div class="form-group">
                                <p class="form-control-static">hello@creative-tim.com</p>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <label class="col-sm-2 col-form-label">Checkboxes and radios</label>
                            <div class="checkbox-radios col-sm-10">
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input type="checkbox" class="form-check-input">
                                  <span class="form-check-sign">
                                  </span>First Checkbox</label>
                                </div><div class="form-check">
                                  <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input">
                                    <span class="form-check-sign"></span>Second Checkbox</label>
                                  </div>
                                  <div class="form-check-radio form-check">
                                    <label class="form-check-label">
                                      <input id="exampleRadios1" name="exampleRadios" type="radio" class="form-check-input" value="option1" checked="">
                                      <span class="form-check-sign"></span>First Radio</label>
                                    </div>
                                    <div class="form-check-radio form-check">
                                      <label class="form-check-label">
                                        <input id="exampleRadios2" name="exampleRadios" type="radio" class="form-check-input" value="option2">
                                        <span class="form-check-sign"></span>Second Radio</label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <label class="col-sm-2 col-form-label">Inline checkboxes</label>
                                    <div class="col-sm-10">
                                      <div class="form-check form-check-inline">
                                        <label class="form-check-label">
                                          <input type="checkbox" class="form-check-input">
                                          <span class="form-check-sign"></span>a</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                          <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input">
                                            <span class="form-check-sign"></span>b</label>
                                          </div>
                                          <div class="form-check form-check-inline">
                                            <label class="form-check-label">
                                              <input type="checkbox" class="form-check-input">
                                              <span class="form-check-sign"></span>c</label>
                                            </div>
                                          </div>
                                        </div>
                                      </form>
                                    </div>
                                  </div>
                                </div>

                  <div class="col-md-12">
                    <div class="card">
                      <div class="card-header">
                        <h4 class="card-title">Input Variants</h4>
                      </div>
                      <div class="card-body">
                        <form action="/" method="get" class="form-horizontal">
                          <div class="row">
                            <label class="col-sm-2 col-form-label">Custom Checkboxes &amp; radios</label>
                            <div class="checkbox-radios col-sm-4">
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input type="checkbox" class="form-check-input">
                                  <span class="form-check-sign"></span>Unchecked</label>
                                </div>
                                <div class="form-check">
                                  <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" checked="">
                                    <span class="form-check-sign"></span>Checked</label>
                                  </div>
                                  <div class="form-check disabled">
                                    <label class="form-check-label">
                                      <input disabled="" type="checkbox" class="form-check-input">
                                      <span class="form-check-sign"></span>Disabled Unchecked
                                    </label>
                                    </div>
                                    <div class="form-check disabled">
                                      <label class="form-check-label">
                                        <input disabled="" type="checkbox" class="form-check-input">
                                        <span class="form-check-sign"></span>Disabled Checked
                                      </label>
                                      </div>
                                    </div>
                                    <div class="checkbox-radios col-sm-5">
                                      <div class="form-check-radio form-check">
                                        <label class="form-check-label">
                                          <input id="exampleRadios3" name="exampleRadio" type="radio" class="form-check-input" value="option1">
                                          <span class="form-check-sign"></span>Radio is off
                                        </label>
                                      </div>
                                      <div class="form-check-radio form-check">
                                        <label class="form-check-label">
                                          <input id="exampleRadios4" name="exampleRadio" type="radio" class="form-check-input" value="option2" checked="">
                                          <span class="form-check-sign"></span>Radio is on
                                        </label>
                                      </div>
                                      <div class="form-check-radio form-check disabled">
                                        <label class="form-check-label">
                                          <input disabled="" id="exampleRadios5" name="exampleRadio1" type="radio" class="form-check-input" value="option1">
                                          <span class="form-check-sign"></span>Radio is off
                                        </label>
                                      </div>
                                      <div class="form-check-radio form-check disabled">
                                        <label class="form-check-label">
                                          <input disabled="" id="exampleRadios6" name="exampleRadio1" type="radio" class="form-check-input" value="option2" checked="">
                                          <span class="form-check-sign"></span>Radio is on
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <label class="col-sm-2 col-form-label">Input with success</label>
                                    <div class="col-sm-10">
                                      <div class="has-success form-group">
                                        <input type="text" class="form-control" value="Success">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <label class="col-sm-2 col-form-label">Input with error</label>
                                    <div class="col-sm-10">
                                      <div class="has-danger form-group">
                                        <input type="text" class="form-control" value="Error">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <label class="col-sm-2 col-form-label">Column sizing</label>
                                    <div class="col-sm-10">
                                      <div class="row">
                                        <div class="col-md-3">
                                          <div class="form-group">
                                            <input placeholder=".col-md-3" type="text" class="form-control">
                                          </div>
                                        </div>
                                        <div class="col-md-4">
                                          <div class="form-group">
                                            <input placeholder=".col-md-4" type="text" class="form-control">
                                          </div>
                                        </div>
                                        <div class="col-md-5">
                                          <div class="form-group">
                                            <input placeholder=".col-md-5" type="text" class="form-control">
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>



                </div>
@endsection
