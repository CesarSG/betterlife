@extends('layouts.admin')

@section('section')
  <div class="row">
    <div class="col-12">
      <div class="card card-chart">
        <div class="card-header ">
          <div class="row">
            <div class="col-sm-6 text-left">
              <h5 class="card-category">Total Shipments</h5>
              <h2 class="card-title">Performance</h2>
            </div>
            <div class="col-sm-6">
              <div class="btn-group btn-group-toggle float-right" data-toggle="buttons">
                <label class="btn btn-sm btn-primary btn-simple active" id="0">
                  <input type="radio" name="options" checked>
                  <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Accounts</span>
                  <span class="d-block d-sm-none">
                    <i class="tim-icons icon-single-02"></i>
                  </span>
                </label>
                <label class="btn btn-sm btn-primary btn-simple" id="1">
                  <input type="radio" class="d-none d-sm-none" name="options">
                  <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Purchases</span>
                  <span class="d-block d-sm-none">
                    <i class="tim-icons icon-gift-2"></i>
                  </span>
                </label>
                <label class="btn btn-sm btn-primary btn-simple" id="2">
                  <input type="radio" class="d-none" name="options">
                  <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Sessions</span>
                  <span class="d-block d-sm-none">
                    <i class="tim-icons icon-tap-02"></i>
                  </span>
                </label>
              </div>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="chart-area">
            <canvas id="chartBig1"></canvas>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 col-lg-3"><div class="card-stats card"><div class="card-body"><div class="row"><div class="col-5"><div class="info-icon text-center icon-warning"><i class="tim-icons icon-chat-33"></i></div></div><div class="col-7"><div class="numbers"><p class="card-category">Number</p><h3 class="card-title">150GB</h3></div></div></div></div><div class="card-footer"><hr><div class="stats"><i class="tim-icons icon-refresh-01"></i> Update Now</div></div></div></div>
    <div class="col-md-6 col-lg-3"><div class="card-stats card"><div class="card-body"><div class="row"><div class="col-5"><div class="info-icon text-center icon-primary"><i class="tim-icons icon-shape-star"></i></div></div><div class="col-7"><div class="numbers"><p class="card-category">Followers</p><h3 class="card-title">+45k</h3></div></div></div></div><div class="card-footer"><hr><div class="stats"><i class="tim-icons icon-sound-wave"></i> Last Research</div></div></div></div>
    <div class="col-md-6 col-lg-3"><div class="card-stats card"><div class="card-body"><div class="row"><div class="col-5"><div class="info-icon text-center icon-success"><i class="tim-icons icon-single-02"></i></div></div><div class="col-7"><div class="numbers"><p class="card-category">Users</p><h3 class="card-title">150,000</h3></div></div></div></div><div class="card-footer"><hr><div class="stats"><i class="tim-icons icon-trophy"></i> Customers feedback</div></div></div></div>
    <div class="col-md-6 col-lg-3"><div class="card-stats card"><div class="card-body"><div class="row"><div class="col-5"><div class="info-icon text-center icon-danger"><i class="tim-icons icon-molecule-40"></i></div></div><div class="col-7"><div class="numbers"><p class="card-category">Errors</p><h3 class="card-title">12</h3></div></div></div></div><div class="card-footer"><hr><div class="stats"><i class="tim-icons icon-watch-time"></i> In the last hours</div></div></div></div>
  </div>
  <div class="row">
    <div class="col-lg-4">
      <div class="card card-chart">
        <div class="card-header">
          <h5 class="card-category">Total Shipments</h5>
          <h3 class="card-title"><i class="tim-icons icon-bell-55 text-primary"></i> 763,215</h3>
        </div>
        <div class="card-body">
          <div class="chart-area">
            <canvas id="chartLinePurple"></canvas>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="card card-chart">
        <div class="card-header">
          <h5 class="card-category">Daily Sales</h5>
          <h3 class="card-title"><i class="tim-icons icon-delivery-fast text-info"></i> 3,500€</h3>
        </div>
        <div class="card-body">
          <div class="chart-area">
            <canvas id="CountryChart"></canvas>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="card card-chart">
        <div class="card-header">
          <h5 class="card-category">Completed Tasks</h5>
          <h3 class="card-title"><i class="tim-icons icon-send text-success"></i> 12,100K</h3>
        </div>
        <div class="card-body">
          <div class="chart-area">
            <canvas id="chartLineGreen"></canvas>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-6 col-md-12">
      <div class="card card-tasks">
        <div class="card-header ">
          <h6 class="title d-inline">Tasks(5)</h6>
          <p class="card-category d-inline">today</p>
          <div class="dropdown">
            <button type="button" class="btn btn-link dropdown-toggle btn-icon" data-toggle="dropdown">
              <i class="tim-icons icon-settings-gear-63"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
              <a class="dropdown-item" href="#pablo">Action</a>
              <a class="dropdown-item" href="#pablo">Another action</a>
              <a class="dropdown-item" href="#pablo">Something else</a>
            </div>
          </div>
        </div>
        <div class="card-body ">
          <div class="table-full-width table-responsive">
            <table class="table">
              <tbody>
                <tr>
                  <td>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" value="">
                        <span class="form-check-sign">
                          <span class="check"></span>
                        </span>
                      </label>
                    </div>
                  </td>
                  <td>
                    <p class="title">Update the Documentation</p>
                    <p class="text-muted">Dwuamish Head, Seattle, WA 8:47 AM</p>
                  </td>
                  <td class="td-actions text-right">
                    <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Edit Task">
                      <i class="tim-icons icon-pencil"></i>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" value="" checked="">
                        <span class="form-check-sign">
                          <span class="check"></span>
                        </span>
                      </label>
                    </div>
                  </td>
                  <td>
                    <p class="title">GDPR Compliance</p>
                    <p class="text-muted">The GDPR is a regulation that requires businesses to protect the personal data and privacy of Europe citizens for transactions that occur within EU member states.</p>
                  </td>
                  <td class="td-actions text-right">
                    <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Edit Task">
                      <i class="tim-icons icon-pencil"></i>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" value="">
                        <span class="form-check-sign">
                          <span class="check"></span>
                        </span>
                      </label>
                    </div>
                  </td>
                  <td>
                    <p class="title">Solve the issues</p>
                    <p class="text-muted">Fifty percent of all respondents said they would be more likely to shop at a company </p>
                  </td>
                  <td class="td-actions text-right">
                    <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Edit Task">
                      <i class="tim-icons icon-pencil"></i>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" value="">
                        <span class="form-check-sign">
                          <span class="check"></span>
                        </span>
                      </label>
                    </div>
                  </td>
                  <td>
                    <p class="title">Release v2.0.0</p>
                    <p class="text-muted">Ra Ave SW, Seattle, WA 98116, SUA 11:19 AM</p>
                  </td>
                  <td class="td-actions text-right">
                    <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Edit Task">
                      <i class="tim-icons icon-pencil"></i>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" value="">
                        <span class="form-check-sign">
                          <span class="check"></span>
                        </span>
                      </label>
                    </div>
                  </td>
                  <td>
                    <p class="title">Export the processed files</p>
                    <p class="text-muted">The report also shows that consumers will not easily forgive a company once a breach exposing their personal data occurs. </p>
                  </td>
                  <td class="td-actions text-right">
                    <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Edit Task">
                      <i class="tim-icons icon-pencil"></i>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" value="">
                        <span class="form-check-sign">
                          <span class="check"></span>
                        </span>
                      </label>
                    </div>
                  </td>
                  <td>
                    <p class="title">Arival at export process</p>
                    <p class="text-muted">Capitol Hill, Seattle, WA 12:34 AM</p>
                  </td>
                  <td class="td-actions text-right">
                    <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Edit Task">
                      <i class="tim-icons icon-pencil"></i>
                    </button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6 col-md-12">
      <div class="card ">
        <div class="card-header">
          <h4 class="card-title"> Simple Table</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table tablesorter " id="">
              <thead class=" text-primary">
                <tr>
                  <th>
                    Name
                  </th>
                  <th>
                    Country
                  </th>
                  <th>
                    City
                  </th>
                  <th class="text-center">
                    Salary
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    Dakota Rice
                  </td>
                  <td>
                    Niger
                  </td>
                  <td>
                    Oud-Turnhout
                  </td>
                  <td class="text-center">
                    $36,738
                  </td>
                </tr>
                <tr>
                  <td>
                    Minerva Hooper
                  </td>
                  <td>
                    Curaçao
                  </td>
                  <td>
                    Sinaai-Waas
                  </td>
                  <td class="text-center">
                    $23,789
                  </td>
                </tr>
                <tr>
                  <td>
                    Sage Rodriguez
                  </td>
                  <td>
                    Netherlands
                  </td>
                  <td>
                    Baileux
                  </td>
                  <td class="text-center">
                    $56,142
                  </td>
                </tr>
                <tr>
                  <td>
                    Philip Chaney
                  </td>
                  <td>
                    Korea, South
                  </td>
                  <td>
                    Overland Park
                  </td>
                  <td class="text-center">
                    $38,735
                  </td>
                </tr>
                <tr>
                  <td>
                    Doris Greene
                  </td>
                  <td>
                    Malawi
                  </td>
                  <td>
                    Feldkirchen in Kärnten
                  </td>
                  <td class="text-center">
                    $63,542
                  </td>
                </tr>
                <tr>
                  <td>
                    Mason Porter
                  </td>
                  <td>
                    Chile
                  </td>
                  <td>
                    Gloucester
                  </td>
                  <td class="text-center">
                    $78,615
                  </td>
                </tr>
                <tr>
                  <td>
                    Jon Porter
                  </td>
                  <td>
                    Portugal
                  </td>
                  <td>
                    Gloucester
                  </td>
                  <td class="text-center">
                    $98,615
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-6 col-md-12">
      <div class="card card-tasks">
        <div class="card-header ">
          <h6 class="title d-inline">Tasks(5)</h6>
          <p class="card-category d-inline">today</p>
          <div class="dropdown">
            <button type="button" class="btn btn-link dropdown-toggle btn-icon" data-toggle="dropdown">
              <i class="tim-icons icon-settings-gear-63"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
              <a class="dropdown-item" href="#pablo">Action</a>
              <a class="dropdown-item" href="#pablo">Another action</a>
              <a class="dropdown-item" href="#pablo">Something else</a>
            </div>
          </div>
        </div>
        <div class="card-body ">
          <div class="table-full-width table-responsive">
            <table class="table">
              <tbody>
                <tr>
                  <td>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" value="">
                        <span class="form-check-sign">
                          <span class="check"></span>
                        </span>
                      </label>
                    </div>
                  </td>
                  <td>
                    <p class="title">Update the Documentation</p>
                    <p class="text-muted">Dwuamish Head, Seattle, WA 8:47 AM</p>
                  </td>
                  <td class="td-actions text-right">
                    <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Edit Task">
                      <i class="tim-icons icon-pencil"></i>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" value="" checked="">
                        <span class="form-check-sign">
                          <span class="check"></span>
                        </span>
                      </label>
                    </div>
                  </td>
                  <td>
                    <p class="title">GDPR Compliance</p>
                    <p class="text-muted">The GDPR is a regulation that requires businesses to protect the personal data and privacy of Europe citizens for transactions that occur within EU member states.</p>
                  </td>
                  <td class="td-actions text-right">
                    <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Edit Task">
                      <i class="tim-icons icon-pencil"></i>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" value="">
                        <span class="form-check-sign">
                          <span class="check"></span>
                        </span>
                      </label>
                    </div>
                  </td>
                  <td>
                    <p class="title">Solve the issues</p>
                    <p class="text-muted">Fifty percent of all respondents said they would be more likely to shop at a company </p>
                  </td>
                  <td class="td-actions text-right">
                    <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Edit Task">
                      <i class="tim-icons icon-pencil"></i>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" value="">
                        <span class="form-check-sign">
                          <span class="check"></span>
                        </span>
                      </label>
                    </div>
                  </td>
                  <td>
                    <p class="title">Release v2.0.0</p>
                    <p class="text-muted">Ra Ave SW, Seattle, WA 98116, SUA 11:19 AM</p>
                  </td>
                  <td class="td-actions text-right">
                    <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Edit Task">
                      <i class="tim-icons icon-pencil"></i>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" value="">
                        <span class="form-check-sign">
                          <span class="check"></span>
                        </span>
                      </label>
                    </div>
                  </td>
                  <td>
                    <p class="title">Export the processed files</p>
                    <p class="text-muted">The report also shows that consumers will not easily forgive a company once a breach exposing their personal data occurs. </p>
                  </td>
                  <td class="td-actions text-right">
                    <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Edit Task">
                      <i class="tim-icons icon-pencil"></i>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" value="">
                        <span class="form-check-sign">
                          <span class="check"></span>
                        </span>
                      </label>
                    </div>
                  </td>
                  <td>
                    <p class="title">Arival at export process</p>
                    <p class="text-muted">Capitol Hill, Seattle, WA 12:34 AM</p>
                  </td>
                  <td class="td-actions text-right">
                    <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Edit Task">
                      <i class="tim-icons icon-pencil"></i>
                    </button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6 col-md-12">
      <div class="card">
        <div class="card-header">
          <div class="tools float-right">
            <div class="dropdown">
              <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-icon dropdown-toggle btn btn-link">
                <i class="tim-icons icon-settings-gear-63"></i>
              </button>
              <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                <a href="#pablo" tabindex="0" role="menuitem" class="dropdown-item">Action</a>
                <a href="#pablo" tabindex="0" role="menuitem" class="dropdown-item">Another action</a>
                <a href="#pablo" tabindex="0" role="menuitem" class="dropdown-item">Something else</a>
                <a href="#pablo" tabindex="0" role="menuitem" class="text-danger dropdown-item">Remove Data</a>
              </div>
            </div>
          </div>
          <h5 class="card-title">Management Table</h5>
        </div>
        <div class="card-body">
          <div class="table-responsive ps">
            <table class="table">
              <thead class="text-primary">
                <tr>
                  <th class="text-center">#</th>
                  <th>Name</th>
                  <th>Job Position</th>
                  <th>Milestone</th>
                  <th class="text-right">Salary</th>
                  <th class="text-right">Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="text-center">
                    <div class="photo">
                      <img alt="..." src="/black-dashboard-pro-react/static/media/tania.ae5396e9.jpg">
                    </div>
                  </td>
                  <td>Tania Mike</td>
                  <td>Develop</td>
                  <td class="text-center">
                    <div class="progress-container progress-sm">
                      <div class="progress">
                        <span class="progress-value">25%</span>
                        <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">
                        </div>
                      </div>
                    </div>
                  </td>
                  <td class="text-right">€ 99,225</td>
                  <td class="text-right">
                    <button type="button" id="tooltip618296632" title="Refresh" class="btn-link btn-icon btn-neutral btn btn-success btn-sm"><i class="tim-icons icon-refresh-01"></i></button>
                    <button type="button" id="tooltip707467505" title="Delete" class="btn-link btn-icon btn-neutral btn btn-danger btn-sm"><i class="tim-icons icon-simple-remove"></i></button>
                  </td>
                </tr>
                <tr>
                  <td class="text-center">
                    <div class="photo">
                      <img alt="..." src="/black-dashboard-pro-react/static/media/robi.aace4600.jpg">
                    </div>
                  </td>
                  <td>John Doe</td>
                  <td>CEO</td>
                  <td class="text-center">
                    <div class="progress-container progress-sm">
                      <div class="progress">
                        <span class="progress-value">77%</span>
                        <div class="progress-bar" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;">
                        </div>
                      </div>
                    </div>
                  </td>
                  <td class="text-right">€ 89,241</td>
                  <td class="text-right">
                    <button type="button" id="tooltip216846074" title="Refresh" class="btn-link btn-icon btn-neutral btn btn-success btn-sm"><i class="tim-icons icon-refresh-01"></i></button>
                    <button type="button" id="tooltip391990405" title="Delete" class="btn-link btn-icon btn-neutral btn btn-danger btn-sm"><i class="tim-icons icon-simple-remove"></i></button>
                  </td>
                </tr>
                <tr>
                  <td class="text-center">
                    <div class="photo">
                      <img alt="..." src="/black-dashboard-pro-react/static/media/lora.b2c3ec49.jpg">
                    </div>
                    </td>
                    <td>Alexa Mike</td>
                    <td>Design</td>
                    <td class="text-center">
                      <div class="progress-container progress-sm">
                        <div class="progress">
                          <span class="progress-value">41%</span>
                          <div class="progress-bar" role="progressbar" aria-valuenow="41" aria-valuemin="0" aria-valuemax="100" style="width: 41%;">
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="text-right">€ 92,144</td>
                    <td class="text-right">
                      <button type="button" id="tooltip191500186" title="Refresh" class="btn-link btn-icon btn-neutral btn btn-success btn-sm"><i class="tim-icons icon-refresh-01"></i></button>
                      <button type="button" id="tooltip320351170" title="Delete" class="btn-link btn-icon btn-neutral btn btn-danger btn-sm"><i class="tim-icons icon-simple-remove"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center">
                      <div class="photo">
                        <img alt="..." src="/black-dashboard-pro-react/static/media/jana.ffa18048.jpg">
                      </div>
                    </td>
                    <td>Jana Monday</td>
                    <td>Marketing</td>
                    <td class="text-center">
                      <div class="progress-container progress-sm">
                        <div class="progress">
                          <span class="progress-value">50%</span>
                          <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="text-right">€ 49,990</td>
                    <td class="text-right">
                      <button type="button" id="tooltip345411997" title="Refresh" class="btn-link btn-icon btn btn-success btn-sm"><i class="tim-icons icon-refresh-01"></i></button>
                      <button type="button" id="tooltip601343171" title="Delete" class="btn-link btn-icon btn btn-danger btn-sm"><i class="tim-icons icon-simple-remove"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center">
                      <div class="photo">
                        <img alt="..." src="/black-dashboard-pro-react/static/media/mike.8d9bbf30.jpg">
                      </div>
                    </td>
                    <td>Paul Dickens</td>
                    <td>Develop</td>
                    <td class="text-center">
                      <div class="progress-container progress-sm">
                        <div class="progress">
                          <span class="progress-value">100%</span>
                          <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                        </div>
                      </div>
                    </td>
                    <td class="text-right">€ 69,201</td>
                    <td class="text-right">
                      <button type="button" id="tooltip774891382" title="Refresh" class="btn-link btn-icon btn btn-success btn-sm"><i class="tim-icons icon-refresh-01"></i></button>
                      <button type="button" id="tooltip949929353" title="Delete" class="btn-link btn-icon btn btn-danger btn-sm"><i class="tim-icons icon-simple-remove"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-center">
                      <div class="photo">
                        <img alt="..." src="/black-dashboard-pro-react/static/media/emilyz.00401056.jpg">
                      </div>
                    </td>
                    <td>Manuela Rico</td>
                    <td>Manager</td>
                    <td class="text-center">
                      <div class="progress-container progress-sm">
                        <div class="progress">
                          <span class="progress-value">15%</span>
                          <div class="progress-bar" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" style="width: 15%;"></div>
                        </div>
                      </div>
                    </td>
                    <td class="text-right">€ 99,201</td>
                    <td class="text-right">
                      <button type="button" id="tooltip30547133" title="Refresh" class="btn-link btn-icon btn btn-success btn-sm"><i class="tim-icons icon-refresh-01"></i></button>
                      <button type="button" id="tooltip156899243" title="Delete" class="btn-link btn-icon btn btn-danger btn-sm"><i class="tim-icons icon-simple-remove"></i></button>
                    </td>
                  </tr>
                </tbody>
              </table>
              <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
              </div>
              <div class="ps__rail-y" style="top: 0px; right: 0px;">
                <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
@endsection
