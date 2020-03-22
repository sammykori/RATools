<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>ADMIN | NCA COMMUNICATION TOWER MAP</title>
        <link href="../assets/css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="#"><img src="../assets/img/towlogo.png" style="height:50px"></a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button
            ><!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                      <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        {{ __('Logout') }}
                      </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST"
                      style="display: none;">
                          @csrf
                      </form>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="index.html"
                                ><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard</a
                            >
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        {{ Auth::user()->name }}
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header"><i class="fas fa-chart-area mr-1"></i>Area Chart Example</div>
                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header"><i class="fas fa-chart-bar mr-1"></i>Bar Chart Example</div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">+ Add New Tower</button>
                        </div>
                        <br>
                        @include('inc.message')
                        <br>
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add New Tower Details</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                @include('inc.message')
                                {!! Form::open(['action' => 'TowersController@store', 'method'=> 'POST']) !!}
                                  <div class="form-group">
                                    {{Form::label('system', 'SystemCode', ['class' => 'col-form-label', 'for' => 'recipient-name'])}}
                                    {{Form::text('system', '', ['class' => 'form-control', 'id' => 'recipient-name'])}}
                                  </div>
                                  <div class="form-group">
                                    {{Form::label('towerId', 'TowerID', ['class' => 'col-form-label', 'for' => 'recipient-name'])}}
                                    {{Form::text('towerId', '', ['class' => 'form-control', 'id' => 'recipient-name'])}}
                                  </div>
                                  <div class="form-group">
                                    {{Form::label('towerOwner', 'TowerOwner', ['class' => 'col-form-label', 'for' => 'recipient-name'])}}
                                    {{Form::text('towerOwner', '', ['class' => 'form-control', 'id' => 'recipient-name'])}}
                                  </div>
                                  <div class="form-group">
                                    {{Form::label('towerName', 'TowerName', ['class' => 'col-form-label', 'for' => 'message-text'])}}
                                    {{Form::text('towerName', '', ['class' => 'form-control', 'id' => 'recipient-name'])}}
                                  </div>
                                  <div class="form-group">
                                    {{Form::label('district', 'District', ['class' => 'col-form-label', 'for' => 'message-text'])}}
                                    {{Form::text('district', '', ['class' => 'form-control', 'id' => 'recipient-name'])}}
                                  </div>
                                  <div class="form-group">
                                    {{Form::label('region', 'Region', ['class' => 'col-form-label', 'for' => 'message-text'])}}
                                    {{Form::text('region', '', ['class' => 'form-control', 'id' => 'recipient-name'])}}
                                  </div>
                                  <div class="form-group">
                                    {{Form::label('lat', 'Latitude', ['class' => 'col-form-label', 'for' => 'message-text'])}}
                                    {{Form::text('lat', '', ['class' => 'form-control', 'id' => 'recipient-name'])}}
                                  </div>
                                  <div class="form-group">
                                    {{Form::label('lng', 'Longitude', ['class' => 'col-form-label', 'for' => 'message-text'])}}
                                    {{Form::text('lng', '', ['class' => 'form-control', 'id' => 'recipient-name'])}}
                                  </div>
                                  <div class="form-group">
                                    {{Form::label('coverage', 'Coverage', ['class' => 'col-form-label', 'for' => 'message-text'])}}
                                    {{Form::text('coverage', '', ['class' => 'form-control', 'id' => 'recipient-name'])}}
                                  </div>
                                  <div class="form-group">
                                    {{Form::label('siteCount', 'SiteCount', ['class' => 'col-form-label', 'for' => 'message-text'])}}
                                    {{Form::text('siteCount', '', ['class' => 'form-control', 'id' => 'recipient-name'])}}
                                  </div>
                                  {{Form::submit('Save', ['class' => 'btn btn-primary'])}}
                                {!! Form::close() !!}
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              
                                {{-- <button type="button" class="btn btn-primary">Send message</button> --}}
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>DataTable Example</div>
                            @if(count($towers)>= 1)
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Tower ID</th>
                                                <th>Tower Owner</th>
                                                <th>Tower Name</th>
                                                <th>District</th>
                                                <th>Region</th>
                                                <th>Lat</th>
                                                <th>Lng</th>
                                                <th>Site Count</th>
                                            </tr>
                                        </thead>
                                        {{-- <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                            </tr>
                                        </tfoot> --}}
                                        <tbody>
                                          @foreach($towers as $tower)
                                          <tr>
                                            <td>{{$tower->tower_id}}</td>
                                            <td>{{$tower->tower_owner}}</td>
                                            <td>{{$tower->tower_name}}</td>
                                            <td>{{$tower->district}}</td>
                                            <td>{{$tower->region}}</td>
                                            <td>{{$tower->latitude}}</td>
                                            <td>{{$tower->longitude}}</td>
                                            <td>{{$tower->site_count}}</td>
                                        </tr>
                                        @endforeach
                                        @else
                                        <p>No Data Found</p>
                                        @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; NCA 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="..assets/js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="../assets/demo/chart-area-demo.js"></script>
        <script src="../assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="../assets/demo/datatables-demo.js"></script>
    </body>
</html>
