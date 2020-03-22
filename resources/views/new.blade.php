<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>NCA COMMUNICATION TOWER MAP</title>
        <link href="../assets/css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-light bg-light" style="box-shadow: 0px 0px 10px -1px">
            <a class="navbar-brand" href="#"><img src="../assets/img/towlogo.png" style="height:50px"></a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button
            ><!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input id="site" class="form-control" type="text" placeholder="Tower ID search" aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button id = "searchSite" class="btn btn-primary" type="button"><i class="fas fa-search-location"></i></button>
                    </div>
                </div>
            </form>
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input id="address" class="form-control" type="text" value= "" placeholder="Search a Location" aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button id = "search" class="btn btn-primary" type="button"><i class="fab fa-google " style="color:yellow"></i></button>
                    </div>
                </div>
            </form>
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input id="radius" class="form-control" type="text" value= "" placeholder="400m radius" aria-label="Search" aria-describedby="basic-addon2" readonly/>
                    <input id="center" class="form-control" type="text" value= "" placeholder="Center:" aria-label="Search" aria-describedby="basic-addon2" readonly/>
                </div>
            </form>
            <!-- Navbar-->
            {{-- <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Settings</a><a class="dropdown-item" href="#">Activity Log</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="login.html">Logout</a>
                    </div>
                </li>
            </ul> --}}
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav" style="box-shadow: 0px 0px 10px -1px">
                <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="row" style="padding-left: 20px; padding-bottom: 10px">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch6" onchange="region1(this);">
                                    <label class="custom-control-label" for="customSwitch6"><strong style="color:#314f57">Accra</strong></label><br><p id="count6"></p>
                                  </div>
                            </div>
                            <div class="row" style="padding-left: 20px; padding-bottom: 10px">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch7" onchange="region2(this);">
                                    <label class="custom-control-label" for="customSwitch7"><strong style="color:#314f57">Ashanti</strong></label><br><p id="count7"></p>
                                  </div>
                            </div>
                            <div class="row" style="padding-left: 20px; padding-bottom: 10px">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch8" onchange="region3(this);">
                                    <label class="custom-control-label" for="customSwitch8"><strong style="color:#314f57">Western</strong></label><br><p id="count8"></p>
                                  </div>
                            </div>
                            <div class="row" style="padding-left: 20px; padding-bottom: 10px">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch9" onchange="region4(this);">
                                    <label class="custom-control-label" for="customSwitch9"><strong style="color:#314f57">Eastern</strong></label><br><p id="count9"></p>
                                  </div>
                            </div>
                            <div class="row" style="padding-left: 20px; padding-bottom: 10px">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch10" onchange="region5(this);">
                                    <label class="custom-control-label" for="customSwitch10"><strong style="color:#314f57">Volta</strong></label><br><p id="count10"></p>
                                  </div>
                            </div>
                            <div class="row" style="padding-left: 20px; padding-bottom: 10px">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch11" onchange="region6(this);">
                                    <label class="custom-control-label" for="customSwitch11"><strong style="color:#314f57">Central</strong></label><br><p id="count11"></p>
                                  </div>
                            </div>
                            <div class="row" style="padding-left: 20px; padding-bottom: 10px">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch12" onchange="region7(this);">
                                    <label class="custom-control-label" for="customSwitch12"><strong style="color:#314f57">Brong Ahafo</strong></label><br><p id="count12"></p>
                                  </div>
                            </div>
                            <div class="row" style="padding-left: 20px; padding-bottom: 10px">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch13" onchange="region8(this);">
                                    <label class="custom-control-label" for="customSwitch13"><strong style="color:#314f57">Northern</strong></label><br><p id="count13"></p>
                                  </div>
                            </div>
                            <div class="row" style="padding-left: 20px; padding-bottom: 10px">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch14" onchange="region9(this);">
                                    <label class="custom-control-label" for="customSwitch14"><strong style="color:#314f57">Upper West</strong></label><br><p id="count14"></p>
                                  </div>
                            </div>
                            <div class="row" style="padding-left: 20px; padding-bottom: 10px">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch15" onchange="region10(this);">
                                    <label class="custom-control-label" for="customSwitch15"><strong style="color:#314f57">Upper East</strong></label><br><p id="count15"></p>
                                  </div>
                            </div>
                           
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div id="map" style="height: calc(90vh - 70px);"></div>
                </main>
                <footer class="py-4 bg-light mt-auto" style="height:80px; box-shadow: 0px 0px 15px -1px">
                    <div class="container-fluid">
                        <div class="row">
                          <div class="col-sm-2"> 
                            <div class="custom-control custom-switch">
                              <input type="checkbox" class="custom-control-input" id="customSwitch1" onchange="filter1(this);">
                              <label class="custom-control-label" for="customSwitch1"><img src="../assets/img/maps/redtower.png"> <strong style="color:#314f57">ATC</strong></label><br><p id="count1"></p>
                            </div>
                          </div>
                          <div class="col-sm-2"> 
                              <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="customSwitch2" onchange="filter2(this);">
                                <label class="custom-control-label" for="customSwitch2"><img src="../assets/img/maps/yellowtower.png"> <strong style="color:#314f57">Eaton</strong></label><br><p id="count2"></p>
                              </div>
                            </div>
                            <div class="col-sm-2"> 
                              <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="customSwitch3" onchange="filter3(this);">
                                <label class="custom-control-label" for="customSwitch3"><img src="../assets/img/maps/bluetower.png"> <strong style="color:#314f57">Helios</strong></label><br><p id="count3"></p>
                              </div>
                            </div>
                            <div class="col-sm-2"> 
                              <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="customSwitch4" onchange="filter4(this);">
                                <label class="custom-control-label" for="customSwitch4"><img src="../assets/img/maps/greentower.png"> <strong style="color:#314f57">Glomobile</strong></label><br><p id="count4"></p>
                              </div>
                            </div>
                            <div class="col-sm-2"> 
                              <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="customSwitch5" onchange="filter5(this);">
                                <label class="custom-control-label" for="customSwitch5">
                                  <img src="../assets/img/maps/whitetower.png">
                                </label><br><p id="count5"></p>
                              </div>
                            </div>
                            <div class="col-sm-2"> 
                              <div class="input-group" style="margin-left:-70px">
                                <select class="custom-select" id="inputGroupSelect04" onchange="switchTelco(this);">
                                  <option selected>All other towers</option>
                                  <option value="1">Ecoband</option>
                                  <option value="2">AFT</option>
                                  <option value="3">MTN</option>
                                  <option value="4">MainOne</option>
                                  <option value="5">National Security</option>
                                  <option value="6">BBH</option>
                                  <option value="7">VF</option>
                                  <option value="8">NITA</option>
                                  <option value="9">DiscoveryTel</option>
                                  <option value="10">GCB</option>
                                  <option value="11">Iburst</option>
                                  <option value="12">Internet Solutions</option>
                                  <option value="13">STL</option>
                                  <option value="14">Vodafone</option>
                                  <option value="15">3rd Party</option>
                                  <option value="16">SUPERTECH</option>
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../assets/js/scripts.js"></script>
        <script>      
            var data;
            var map;
            var marker;
            var InfoContent;
            var markers = [];
            var vall;
            var val;
            var colnum;
            var fil = [];
            var circles = [];
        

        // FUNCTIONS FOR TOWER COMPANY BUTTONS
        // 
        //
        //
        //
            function filter1(checkbox){
                fil = [];
                data = <?= $atcdata ?>;
              if(checkbox.checked == true){
                  if(document.getElementById("customSwitch6").checked == true){
                    removeMarker("Greater Accra", "count6");
                    for (var i=0; i<data.length; i++) {
                        if(data[i].region == "Greater Accra"){
                            fil.push(data[i]);
                        }
                    }
                    console.log(fil);
                    setMarkers(fil, 1);
                    document.getElementById("count6").innerHTML = fil.length;
                  }
                  else if(document.getElementById("customSwitch7").checked == true){
                    removeMarker("Ashanti", "count7");
                    for (var i=0; i<data.length; i++) {
                        if(data[i].region == "Ashanti"){
                            fil.push(data[i]);
                        }
                    }
                    console.log(fil);
                    setMarkers(fil, 1);
                    document.getElementById("count7").innerHTML = fil.length;
                  }
                  else if(document.getElementById("customSwitch8").checked == true){
                    removeMarker("Western", "count8");
                    for (var i=0; i<data.length; i++) {
                        if(data[i].region == "Western"){
                            fil.push(data[i]);
                        }
                    }
                    console.log(fil);
                    setMarkers(fil, 1);
                    document.getElementById("count8").innerHTML = fil.length;
                  }
                  else if(document.getElementById("customSwitch9").checked == true){
                    removeMarker("Eastern", "count9");
                    for (var i=0; i<data.length; i++) {
                        if(data[i].region == "Eastern"){
                            fil.push(data[i]);
                        }
                    }
                    console.log(fil);
                    setMarkers(fil, 1);
                    document.getElementById("count9").innerHTML = fil.length;
                  }
                  else if(document.getElementById("customSwitch10").checked == true){
                    removeMarker("Volta", "count10");
                    for (var i=0; i<data.length; i++) {
                        if(data[i].region == "Volta"){
                            fil.push(data[i]);
                        }
                    }
                    console.log(fil);
                    setMarkers(fil, 1);
                    document.getElementById("count10").innerHTML = fil.length;
                  }
                  else if(document.getElementById("customSwitch11").checked == true){
                    removeMarker("Central", "count11");
                    for (var i=0; i<data.length; i++) {
                        if(data[i].region == "Central"){
                            fil.push(data[i]);
                        }
                    }
                    console.log(fil);
                    setMarkers(fil, 1);
                    document.getElementById("count11").innerHTML = fil.length;
                  }
                  else if(document.getElementById("customSwitch12").checked == true){
                    removeMarker("Brong Ahafo", "count12");
                    for (var i=0; i<data.length; i++) {
                        if(data[i].region == "Brong Ahafo"){
                            fil.push(data[i]);
                        }
                    }
                    console.log(fil);
                    setMarkers(fil, 1);
                    document.getElementById("count12").innerHTML = fil.length;
                  }
                  else if(document.getElementById("customSwitch13").checked == true){
                    removeMarker("Northern", "count13");
                    for (var i=0; i<data.length; i++) {
                        if(data[i].region == "Northern"){
                            fil.push(data[i]);
                        }
                    }
                    console.log(fil);
                    setMarkers(fil, 1);
                    document.getElementById("count13").innerHTML = fil.length;
                  }
                  else if(document.getElementById("customSwitch14").checked == true){
                    removeMarker("Upper West", "count14");
                    for (var i=0; i<data.length; i++) {
                        if(data[i].region == "Upper West"){
                            fil.push(data[i]);
                        }
                    }
                    console.log(fil);
                    setMarkers(fil, 1);
                    document.getElementById("count14").innerHTML = fil.length;
                  }
                  else if(document.getElementById("customSwitch15").checked == true){
                    removeMarker("Upper East", "count15");
                    for (var i=0; i<data.length; i++) {
                        if(data[i].region == "Upper East"){
                            fil.push(data[i]);
                        }
                    }
                    console.log(fil);
                    setMarkers(fil, 1);
                    document.getElementById("count15").innerHTML = fil.length;
                  }
                else{
                    setMarkers(data, 1);
                    document.getElementById("count1").innerHTML = data.length;
                }
              }else{
                removeMarkers("ATC", "count1");
              }
            }
            function filter2(checkbox){
                fil = [];
                data = <?= $eatondata ?>;
              if(checkbox.checked == true){
                  if(document.getElementById("customSwitch6").checked == true){
                    removeMarker("Greater Accra", "count6");
                    for (var i=0; i<data.length; i++) {
                        if(data[i].region == "Greater Accra"){
                            fil.push(data[i]);
                        }
                    }
                    console.log(fil);
                    setMarkers(fil, 2);
                    document.getElementById("count6").innerHTML = fil.length;
                  }
                  else if(document.getElementById("customSwitch7").checked == true){
                    removeMarker("Ashanti", "count7");
                    for (var i=0; i<data.length; i++) {
                        if(data[i].region == "Ashanti"){
                            fil.push(data[i]);
                        }
                    }
                    console.log(fil);
                    setMarkers(fil, 2);
                    document.getElementById("count7").innerHTML = fil.length;
                  }
                  else if(document.getElementById("customSwitch8").checked == true){
                    removeMarker("Western", "count8");
                    for (var i=0; i<data.length; i++) {
                        if(data[i].region == "Western"){
                            fil.push(data[i]);
                        }
                    }
                    console.log(fil);
                    setMarkers(fil, 2);
                    document.getElementById("count8").innerHTML = fil.length;
                  }
                  else if(document.getElementById("customSwitch9").checked == true){
                    removeMarker("Eastern", "count9");
                    for (var i=0; i<data.length; i++) {
                        if(data[i].region == "Eastern"){
                            fil.push(data[i]);
                        }
                    }
                    console.log(fil);
                    setMarkers(fil, 2);
                    document.getElementById("count9").innerHTML = fil.length;
                  }
                  else if(document.getElementById("customSwitch10").checked == true){
                    removeMarker("Volta", "count10");
                    for (var i=0; i<data.length; i++) {
                        if(data[i].region == "Volta"){
                            fil.push(data[i]);
                        }
                    }
                    console.log(fil);
                    setMarkers(fil, 2);
                    document.getElementById("count10").innerHTML = fil.length;
                  }
                  else if(document.getElementById("customSwitch11").checked == true){
                    removeMarker("Central", "count11");
                    for (var i=0; i<data.length; i++) {
                        if(data[i].region == "Central"){
                            fil.push(data[i]);
                        }
                    }
                    console.log(fil);
                    setMarkers(fil, 2);
                    document.getElementById("count11").innerHTML = fil.length;
                  }
                  else if(document.getElementById("customSwitch12").checked == true){
                    removeMarker("Brong Ahafo", "count12");
                    for (var i=0; i<data.length; i++) {
                        if(data[i].region == "Brong Ahafo"){
                            fil.push(data[i]);
                        }
                    }
                    console.log(fil);
                    setMarkers(fil, 2);
                    document.getElementById("count12").innerHTML = fil.length;
                  }
                  else if(document.getElementById("customSwitch13").checked == true){
                    removeMarker("Northern", "count13");
                    for (var i=0; i<data.length; i++) {
                        if(data[i].region == "Northern"){
                            fil.push(data[i]);
                        }
                    }
                    console.log(fil);
                    setMarkers(fil, 2);
                    document.getElementById("count13").innerHTML = fil.length;
                  }
                  else if(document.getElementById("customSwitch14").checked == true){
                    removeMarker("Upper West", "count14");
                    for (var i=0; i<data.length; i++) {
                        if(data[i].region == "Upper West"){
                            fil.push(data[i]);
                        }
                    }
                    console.log(fil);
                    setMarkers(fil, 2);
                    document.getElementById("count14").innerHTML = fil.length;
                  }
                  else if(document.getElementById("customSwitch15").checked == true){
                    removeMarker("Upper East", "count15");
                    for (var i=0; i<data.length; i++) {
                        if(data[i].region == "Upper East"){
                            fil.push(data[i]);
                        }
                    }
                    console.log(fil);
                    setMarkers(fil, 2);
                    document.getElementById("count15").innerHTML = fil.length;
                  }
                else{
                    setMarkers(data, 2);
                    document.getElementById("count2").innerHTML = data.length;
                }
              }else{
                removeMarkers("EATON", "count2");
              }
            
            }
            function filter3(checkbox){
                fil = [];
                data = <?= $helios ?>;
              if(checkbox.checked == true){
                  if(document.getElementById("customSwitch6").checked == true){
                    removeMarker("Greater Accra", "count6");
                    for (var i=0; i<data.length; i++) {
                        if(data[i].region == "Greater Accra"){
                            fil.push(data[i]);
                        }
                    }
                    console.log(fil);
                    setMarkers(fil, 3);
                    document.getElementById("count6").innerHTML = fil.length;
                  }
                  else if(document.getElementById("customSwitch7").checked == true){
                    removeMarker("Ashanti", "count7");
                    for (var i=0; i<data.length; i++) {
                        if(data[i].region == "Ashanti"){
                            fil.push(data[i]);
                        }
                    }
                    console.log(fil);
                    setMarkers(fil, 3);
                    document.getElementById("count7").innerHTML = fil.length;
                  }
                  else if(document.getElementById("customSwitch8").checked == true){
                    removeMarker("Western", "count8");
                    for (var i=0; i<data.length; i++) {
                        if(data[i].region == "Western"){
                            fil.push(data[i]);
                        }
                    }
                    console.log(fil);
                    setMarkers(fil, 3);
                    document.getElementById("count8").innerHTML = fil.length;
                  }
                  else if(document.getElementById("customSwitch9").checked == true){
                    removeMarker("Eastern", "count9");
                    for (var i=0; i<data.length; i++) {
                        if(data[i].region == "Eastern"){
                            fil.push(data[i]);
                        }
                    }
                    console.log(fil);
                    setMarkers(fil, 3);
                    document.getElementById("count9").innerHTML = fil.length;
                  }
                  else if(document.getElementById("customSwitch10").checked == true){
                    removeMarker("Volta", "count10");
                    for (var i=0; i<data.length; i++) {
                        if(data[i].region == "Volta"){
                            fil.push(data[i]);
                        }
                    }
                    console.log(fil);
                    setMarkers(fil, 3);
                    document.getElementById("count10").innerHTML = fil.length;
                  }
                  else if(document.getElementById("customSwitch11").checked == true){
                    removeMarker("Central", "count11");
                    for (var i=0; i<data.length; i++) {
                        if(data[i].region == "Central"){
                            fil.push(data[i]);
                        }
                    }
                    console.log(fil);
                    setMarkers(fil, 3);
                    document.getElementById("count11").innerHTML = fil.length;
                  }
                  else if(document.getElementById("customSwitch12").checked == true){
                    removeMarker("Brong Ahafo", "count12");
                    for (var i=0; i<data.length; i++) {
                        if(data[i].region == "Brong Ahafo"){
                            fil.push(data[i]);
                        }
                    }
                    console.log(fil);
                    setMarkers(fil, 3);
                    document.getElementById("count12").innerHTML = fil.length;
                  }
                  else if(document.getElementById("customSwitch13").checked == true){
                    removeMarker("Northern", "count13");
                    for (var i=0; i<data.length; i++) {
                        if(data[i].region == "Northern"){
                            fil.push(data[i]);
                        }
                    }
                    console.log(fil);
                    setMarkers(fil, 3);
                    document.getElementById("count13").innerHTML = fil.length;
                  }
                  else if(document.getElementById("customSwitch14").checked == true){
                    removeMarker("Upper West", "count14");
                    for (var i=0; i<data.length; i++) {
                        if(data[i].region == "Upper West"){
                            fil.push(data[i]);
                        }
                    }
                    console.log(fil);
                    setMarkers(fil, 3);
                    document.getElementById("count14").innerHTML = fil.length;
                  }
                  else if(document.getElementById("customSwitch15").checked == true){
                    removeMarker("Upper East", "count15");
                    for (var i=0; i<data.length; i++) {
                        if(data[i].region == "Upper East"){
                            fil.push(data[i]);
                        }
                    }
                    console.log(fil);
                    setMarkers(fil, 3);
                    document.getElementById("count15").innerHTML = fil.length;
                  }
                else{
                    setMarkers(data, 3);
                    document.getElementById("count3").innerHTML = data.length;
                }
              }else{
                removeMarkers("HELIOS", "count3");
              }
            }

            function filter4(checkbox){
              fil = [];
                data = <?= $glo ?>;
              if(checkbox.checked == true){
                  if(document.getElementById("customSwitch6").checked == true){
                    removeMarker("Greater Accra", "count6");
                    for (var i=0; i<data.length; i++) {
                        if(data[i].region == "Greater Accra"){
                            fil.push(data[i]);
                        }
                    }
                    console.log(fil);
                    setMarkers(fil, 4);
                    document.getElementById("count6").innerHTML = fil.length;
                  }
                  else if(document.getElementById("customSwitch7").checked == true){
                    removeMarker("Ashanti", "count7");
                    for (var i=0; i<data.length; i++) {
                        if(data[i].region == "Ashanti"){
                            fil.push(data[i]);
                        }
                    }
                    console.log(fil);
                    setMarkers(fil, 4);
                    document.getElementById("count7").innerHTML = fil.length;
                  }
                  else if(document.getElementById("customSwitch8").checked == true){
                    removeMarker("Western", "count8");
                    for (var i=0; i<data.length; i++) {
                        if(data[i].region == "Western"){
                            fil.push(data[i]);
                        }
                    }
                    console.log(fil);
                    setMarkers(fil, 4);
                    document.getElementById("count8").innerHTML = fil.length;
                  }
                  else if(document.getElementById("customSwitch9").checked == true){
                    removeMarker("Eastern", "count9");
                    for (var i=0; i<data.length; i++) {
                        if(data[i].region == "Eastern"){
                            fil.push(data[i]);
                        }
                    }
                    console.log(fil);
                    setMarkers(fil, 4);
                    document.getElementById("count9").innerHTML = fil.length;
                  }
                  else if(document.getElementById("customSwitch10").checked == true){
                    removeMarker("Volta", "count10");
                    for (var i=0; i<data.length; i++) {
                        if(data[i].region == "Volta"){
                            fil.push(data[i]);
                        }
                    }
                    console.log(fil);
                    setMarkers(fil, 4);
                    document.getElementById("count10").innerHTML = fil.length;
                  }
                  else if(document.getElementById("customSwitch11").checked == true){
                    removeMarker("Central", "count11");
                    for (var i=0; i<data.length; i++) {
                        if(data[i].region == "Central"){
                            fil.push(data[i]);
                        }
                    }
                    console.log(fil);
                    setMarkers(fil, 4);
                    document.getElementById("count11").innerHTML = fil.length;
                  }
                  else if(document.getElementById("customSwitch12").checked == true){
                    removeMarker("Brong Ahafo", "count12");
                    for (var i=0; i<data.length; i++) {
                        if(data[i].region == "Brong Ahafo"){
                            fil.push(data[i]);
                        }
                    }
                    console.log(fil);
                    setMarkers(fil, 4);
                    document.getElementById("count12").innerHTML = fil.length;
                  }
                  else if(document.getElementById("customSwitch13").checked == true){
                    removeMarker("Northern", "count13");
                    for (var i=0; i<data.length; i++) {
                        if(data[i].region == "Northern"){
                            fil.push(data[i]);
                        }
                    }
                    console.log(fil);
                    setMarkers(fil, 4);
                    document.getElementById("count13").innerHTML = fil.length;
                  }
                  else if(document.getElementById("customSwitch14").checked == true){
                    removeMarker("Upper West", "count14");
                    for (var i=0; i<data.length; i++) {
                        if(data[i].region == "Upper West"){
                            fil.push(data[i]);
                        }
                    }
                    console.log(fil);
                    setMarkers(fil, 4);
                    document.getElementById("count14").innerHTML = fil.length;
                  }
                  else if(document.getElementById("customSwitch15").checked == true){
                    removeMarker("Upper East", "count15");
                    for (var i=0; i<data.length; i++) {
                        if(data[i].region == "Upper East"){
                            fil.push(data[i]);
                        }
                    }
                    console.log(fil);
                    setMarkers(fil, 4);
                    document.getElementById("count15").innerHTML = fil.length;
                  }
                else{
                    setMarkers(data, 4);
                    document.getElementById("count4").innerHTML = data.length;
                }
              }else{
                removeMarkers("Glomobile", "count4");
              }
            }
            function filter5(checkbox){
              fil = [];
              if(checkbox.checked == true){
                if(vall == 1){
                  val = "Ecoband";
                  data = <?= $ecoband ?>;
                  console.log(val);
                  console.log(data);
                }
                else if(vall == 2){
                  val = "AFT";
                  data = <?= $aft ?>;
                  console.log(val);
                }
                else if(vall == 3){
                  val = "MTN";
                  data = <?= $mtn ?>;
                  console.log(val);
                }
                else if(vall == 4){
                  val = "Mainone";
                  data = <?= $mainone ?>;
                  console.log(val);
                }
                else if(vall == 5){
                  val = "NATIONAL SECURITY";
                  data = <?= $national ?>;
                  console.log(val);
                }
                else if(vall == 6){
                  val = "BBH";
                  data = <?= $bbh ?>;
                  console.log(val);
                }
                else if(vall == 7){
                  val = "VF";
                  data = <?= $vf ?>;
                  console.log(val);
                }
                else if(vall == 8){
                  val = "NITA";
                  data = <?= $nita ?>;
                  console.log(val);
                }
                else if(vall == 9){
                  val = "DiscoveryTel";
                  data = <?= $disc ?>;
                  console.log(val);
                }
                else if(vall == 10){
                  val = "GCB";
                  data = <?= $gcb ?>;
                  console.log(val);
                }
                else if(vall == 11){
                  val = "Iburst";
                  data = <?= $iburst ?>;
                  console.log(val);
                }
                else if(vall == 12){
                  val = "Internet Solutions";
                  data = <?= $iss ?>;
                  console.log(val);
                }
                else if(vall == 13){
                  val = "STL";
                  data = <?= $stl ?>;
                  console.log(val);
                }
                else if(vall == 14){
                  val = "Vodafone";
                  data = <?= $voda ?>;
                  console.log(val);
                }
                else if(vall == 15){
                  val = "3rd Party";
                  data = <?= $third ?>;
                  console.log(val);
                }
                else if(vall == 16){
                  val = "SUPERTECH";
                  data = <?= $super ?>;
                  console.log(val);
                }
                else{
                  data = null;
                }
                //
                //
                //
                if(document.getElementById("customSwitch6").checked == true){
                    removeMarker("Greater Accra", "count6");
                    for (var i=0; i<data.length; i++) {
                        if(data[i].region == "Greater Accra"){
                            fil.push(data[i]);
                        }
                    }
                    console.log(fil);
                    setMarkers(fil, 5);
                    document.getElementById("count6").innerHTML = fil.length;
                  }
                  else if(document.getElementById("customSwitch7").checked == true){
                    removeMarker("Ashanti", "count7");
                    for (var i=0; i<data.length; i++) {
                        if(data[i].region == "Ashanti"){
                            fil.push(data[i]);
                        }
                    }
                    console.log(fil);
                    setMarkers(fil, 5);
                    document.getElementById("count7").innerHTML = fil.length;
                  }
                  else if(document.getElementById("customSwitch8").checked == true){
                    removeMarker("Western", "count8");
                    for (var i=0; i<data.length; i++) {
                        if(data[i].region == "Western"){
                            fil.push(data[i]);
                        }
                    }
                    console.log(fil);
                    setMarkers(fil, 5);
                    document.getElementById("count8").innerHTML = fil.length;
                  }
                  else if(document.getElementById("customSwitch9").checked == true){
                    removeMarker("Eastern", "count9");
                    for (var i=0; i<data.length; i++) {
                        if(data[i].region == "Eastern"){
                            fil.push(data[i]);
                        }
                    }
                    console.log(fil);
                    setMarkers(fil, 5);
                    document.getElementById("count9").innerHTML = fil.length;
                  }
                  else if(document.getElementById("customSwitch10").checked == true){
                    removeMarker("Volta", "count10");
                    for (var i=0; i<data.length; i++) {
                        if(data[i].region == "Volta"){
                            fil.push(data[i]);
                        }
                    }
                    console.log(fil);
                    setMarkers(fil, 5);
                    document.getElementById("count10").innerHTML = fil.length;
                  }
                  else if(document.getElementById("customSwitch11").checked == true){
                    removeMarker("Central", "count11");
                    for (var i=0; i<data.length; i++) {
                        if(data[i].region == "Central"){
                            fil.push(data[i]);
                        }
                    }
                    console.log(fil);
                    setMarkers(fil, 5);
                    document.getElementById("count11").innerHTML = fil.length;
                  }
                  else if(document.getElementById("customSwitch12").checked == true){
                    removeMarker("Brong Ahafo", "count12");
                    for (var i=0; i<data.length; i++) {
                        if(data[i].region == "Brong Ahafo"){
                            fil.push(data[i]);
                        }
                    }
                    console.log(fil);
                    setMarkers(fil, 5);
                    document.getElementById("count12").innerHTML = fil.length;
                  }
                  else if(document.getElementById("customSwitch13").checked == true){
                    removeMarker("Northern", "count13");
                    for (var i=0; i<data.length; i++) {
                        if(data[i].region == "Northern"){
                            fil.push(data[i]);
                        }
                    }
                    console.log(fil);
                    setMarkers(fil, 5);
                    document.getElementById("count13").innerHTML = fil.length;
                  }
                  else if(document.getElementById("customSwitch14").checked == true){
                    removeMarker("Upper West", "count14");
                    for (var i=0; i<data.length; i++) {
                        if(data[i].region == "Upper West"){
                            fil.push(data[i]);
                        }
                    }
                    console.log(fil);
                    setMarkers(fil, 5);
                    document.getElementById("count14").innerHTML = fil.length;
                  }
                  else if(document.getElementById("customSwitch15").checked == true){
                    removeMarker("Upper East", "count15");
                    for (var i=0; i<data.length; i++) {
                        if(data[i].region == "Upper East"){
                            fil.push(data[i]);
                        }
                    }
                    console.log(fil);
                    setMarkers(fil, 5);
                    document.getElementById("count15").innerHTML = fil.length;
                  }
                else{
                    setMarkers(data, 4);
                    document.getElementById("count4").innerHTML = data.length;
                }
 
              
              }
              else{
                removeMarkers(val, "count5");
              }
            }


            // FUNCTIONS FOR REGIONAL BUTTONS
            //
            //
            //
            //
            //
            //

            function region1(checkbox){
                fil = [];
                data = <?= $accra ?>;
                if(checkbox.checked == true){
                    if(document.getElementById("customSwitch1").checked == true){
                        removeMarkers("ATC", "count1");
                        for (var i=0; i<data.length; i++) {
                            if(data[i].tower_owner == "ATC"){
                                fil.push(data[i]);
                            }
                        }
                        setMarkers(fil, 1);
                        document.getElementById("count1").innerHTML = fil.length;
                    }
                    else if(document.getElementById("customSwitch2").checked == true){
                            removeMarkers("EATON", "count2");
                            for (var i=0; i<data.length; i++) {
                                if(data[i].tower_owner == "EATON"){
                                    fil.push(data[i]);
                                }
                            }
                            setMarkers(fil, 2);
                            document.getElementById("count2").innerHTML = fil.length;
                        }
                    else if(document.getElementById("customSwitch3").checked == true){
                            removeMarkers("HELIOS", "count3");
                            for (var i=0; i<data.length; i++) {
                                if(data[i].tower_owner == "HELIOS"){
                                    fil.push(data[i]);
                                }
                            }
                            setMarkers(fil, 3);
                            document.getElementById("count3").innerHTML = fil.length;
                        }
                    else if(document.getElementById("customSwitch4").checked == true){
                            removeMarkers("Glomobile", "count4");
                            for (var i=0; i<data.length; i++) {
                                if(data[i].tower_owner == "Glomobile"){
                                    fil.push(data[i]);
                                }
                            }
                            setMarkers(fil, 4);
                            document.getElementById("count4").innerHTML = fil.length;
                        }
                    else if(document.getElementById("customSwitch5").checked == true){
                        var t = document.getElementById("inputGroupSelect04");
                        var selectedText = t.options[t.selectedIndex].text;
                        removeMarkers(selectedText, "count5")
                        for (var i=0; i<data.length; i++) {
                            if(data[i].tower_owner == selectedText){
                                fil.push(data[i]);
                            }
                        }
                        setMarkers(fil, 5);
                        document.getElementById("count5").innerHTML = fil.length;
                    }
                    else{ 
                        setMarkers(data, 1);
                        document.getElementById("count6").innerHTML = data.length;
                        // for (let i = 0; i < markers.length; i++) {
                        //     for (let j = 0; j < markers.length; j++) {
                        //         var distance = haversine_distance(markers[i], markers[j]);
                        //         console.log(distance);
                        //     }
                            
                        // }
                     }
                 
                } else{
                    removeMarker("Greater Accra", "count6");
                }
            }
            function region2(checkbox){
                fil = [];
                data = <?= $ashanti ?>;
                if(checkbox.checked == true){
                    if(document.getElementById("customSwitch1").checked == true){
                        removeMarkers("ATC", "count1");
                        for (var i=0; i<data.length; i++) {
                            if(data[i].tower_owner == "ATC"){
                                fil.push(data[i]);
                            }
                        }
                        setMarkers(fil, 1);
                        document.getElementById("count1").innerHTML = fil.length;
                    }
                    else if(document.getElementById("customSwitch2").checked == true){
                            removeMarkers("EATON", "count2");
                            for (var i=0; i<data.length; i++) {
                                if(data[i].tower_owner == "EATON"){
                                    fil.push(data[i]);
                                }
                            }
                            setMarkers(fil, 2);
                            document.getElementById("count2").innerHTML = fil.length;
                        }
                    else if(document.getElementById("customSwitch3").checked == true){
                            removeMarkers("HELIOS", "count3");
                            for (var i=0; i<data.length; i++) {
                                if(data[i].tower_owner == "HELIOS"){
                                    fil.push(data[i]);
                                }
                            }
                            setMarkers(fil, 3);
                            document.getElementById("count3").innerHTML = fil.length;
                        }
                    else if(document.getElementById("customSwitch4").checked == true){
                            removeMarkers("Glomobile", "count4");
                            for (var i=0; i<data.length; i++) {
                                if(data[i].tower_owner == "Glomobile"){
                                    fil.push(data[i]);
                                }
                            }
                            setMarkers(fil, 4);
                            document.getElementById("count4").innerHTML = fil.length;
                        }
                    else if(document.getElementById("customSwitch5").checked == true){
                        var t = document.getElementById("inputGroupSelect04");
                        var selectedText = t.options[t.selectedIndex].text;
                        removeMarkers(selectedText, "count5")
                        for (var i=0; i<data.length; i++) {
                            if(data[i].tower_owner == selectedText){
                                fil.push(data[i]);
                            }
                        }
                        setMarkers(fil, 5);
                        document.getElementById("count5").innerHTML = fil.length;
                    }
                    else{ 
                        setMarkers(data, 1);
                        document.getElementById("count7").innerHTML = data.length;
                     }
                 
                } else{
                    removeMarker("Ashanti", "count7");
                }
            }
            function region3(checkbox){
                fil = [];
                data = <?= $west ?>;
                if(checkbox.checked == true){
                    if(document.getElementById("customSwitch1").checked == true){
                        removeMarkers("ATC", "count1");
                        for (var i=0; i<data.length; i++) {
                            if(data[i].tower_owner == "ATC"){
                                fil.push(data[i]);
                            }
                        }
                        setMarkers(fil, 1);
                        document.getElementById("count1").innerHTML = fil.length;
                    }
                    else if(document.getElementById("customSwitch2").checked == true){
                            removeMarkers("EATON", "count2");
                            for (var i=0; i<data.length; i++) {
                                if(data[i].tower_owner == "EATON"){
                                    fil.push(data[i]);
                                }
                            }
                            setMarkers(fil, 2);
                            document.getElementById("count2").innerHTML = fil.length;
                        }
                    else if(document.getElementById("customSwitch3").checked == true){
                            removeMarkers("HELIOS", "count3");
                            for (var i=0; i<data.length; i++) {
                                if(data[i].tower_owner == "HELIOS"){
                                    fil.push(data[i]);
                                }
                            }
                            setMarkers(fil, 3);
                            document.getElementById("count3").innerHTML = fil.length;
                        }
                    else if(document.getElementById("customSwitch4").checked == true){
                            removeMarkers("Glomobile", "count4");
                            for (var i=0; i<data.length; i++) {
                                if(data[i].tower_owner == "Glomobile"){
                                    fil.push(data[i]);
                                }
                            }
                            setMarkers(fil, 4);
                            document.getElementById("count4").innerHTML = fil.length;
                        }
                    else if(document.getElementById("customSwitch5").checked == true){
                        var t = document.getElementById("inputGroupSelect04");
                        var selectedText = t.options[t.selectedIndex].text;
                        removeMarkers(selectedText, "count5")
                        for (var i=0; i<data.length; i++) {
                            if(data[i].tower_owner == selectedText){
                                fil.push(data[i]);
                            }
                        }
                        setMarkers(fil, 5);
                        document.getElementById("count5").innerHTML = fil.length;
                    }
                    else{ 
                        setMarkers(data, 1);
                        document.getElementById("count8").innerHTML = data.length;
                     }
                 
                } else{
                    removeMarker("Western", "count8");
                }
            }
            function region4(checkbox){
                fil = [];
                data = <?= $east ?>;
                if(checkbox.checked == true){
                    if(document.getElementById("customSwitch1").checked == true){
                        removeMarkers("ATC", "count1");
                        for (var i=0; i<data.length; i++) {
                            if(data[i].tower_owner == "ATC"){
                                fil.push(data[i]);
                            }
                        }
                        setMarkers(fil, 1);
                        document.getElementById("count1").innerHTML = fil.length;
                    }
                    else if(document.getElementById("customSwitch2").checked == true){
                            removeMarkers("EATON", "count2");
                            for (var i=0; i<data.length; i++) {
                                if(data[i].tower_owner == "EATON"){
                                    fil.push(data[i]);
                                }
                            }
                            setMarkers(fil, 2);
                            document.getElementById("count2").innerHTML = fil.length;
                        }
                    else if(document.getElementById("customSwitch3").checked == true){
                            removeMarkers("HELIOS", "count3");
                            for (var i=0; i<data.length; i++) {
                                if(data[i].tower_owner == "HELIOS"){
                                    fil.push(data[i]);
                                }
                            }
                            setMarkers(fil, 3);
                            document.getElementById("count3").innerHTML = fil.length;
                        }
                    else if(document.getElementById("customSwitch4").checked == true){
                            removeMarkers("Glomobile", "count4");
                            for (var i=0; i<data.length; i++) {
                                if(data[i].tower_owner == "Glomobile"){
                                    fil.push(data[i]);
                                }
                            }
                            setMarkers(fil, 4);
                            document.getElementById("count4").innerHTML = fil.length;
                        }
                    else if(document.getElementById("customSwitch5").checked == true){
                        var t = document.getElementById("inputGroupSelect04");
                        var selectedText = t.options[t.selectedIndex].text;
                        removeMarkers(selectedText, "count5")
                        for (var i=0; i<data.length; i++) {
                            if(data[i].tower_owner == selectedText){
                                fil.push(data[i]);
                            }
                        }
                        setMarkers(fil, 5);
                        document.getElementById("count5").innerHTML = fil.length;
                    }
                    else{ 
                        setMarkers(data, 1);
                        document.getElementById("count9").innerHTML = data.length;
                     }
                 
                } else{
                    removeMarker("Eastern", "count9");
                }
            }
            function region5(checkbox){
                fil = [];
                data = <?= $volta ?>;
                if(checkbox.checked == true){
                    if(document.getElementById("customSwitch1").checked == true){
                        removeMarkers("ATC", "count1");
                        for (var i=0; i<data.length; i++) {
                            if(data[i].tower_owner == "ATC"){
                                fil.push(data[i]);
                            }
                        }
                        setMarkers(fil, 1);
                        document.getElementById("count1").innerHTML = fil.length;
                    }
                    else if(document.getElementById("customSwitch2").checked == true){
                            removeMarkers("EATON", "count2");
                            for (var i=0; i<data.length; i++) {
                                if(data[i].tower_owner == "EATON"){
                                    fil.push(data[i]);
                                }
                            }
                            setMarkers(fil, 2);
                            document.getElementById("count2").innerHTML = fil.length;
                        }
                    else if(document.getElementById("customSwitch3").checked == true){
                            removeMarkers("HELIOS", "count3");
                            for (var i=0; i<data.length; i++) {
                                if(data[i].tower_owner == "HELIOS"){
                                    fil.push(data[i]);
                                }
                            }
                            setMarkers(fil, 3);
                            document.getElementById("count3").innerHTML = fil.length;
                        }
                    else if(document.getElementById("customSwitch4").checked == true){
                            removeMarkers("Glomobile", "count4");
                            for (var i=0; i<data.length; i++) {
                                if(data[i].tower_owner == "Glomobile"){
                                    fil.push(data[i]);
                                }
                            }
                            setMarkers(fil, 4);
                            document.getElementById("count4").innerHTML = fil.length;
                        }
                    else if(document.getElementById("customSwitch5").checked == true){
                        var t = document.getElementById("inputGroupSelect04");
                        var selectedText = t.options[t.selectedIndex].text;
                        removeMarkers(selectedText, "count5")
                        for (var i=0; i<data.length; i++) {
                            if(data[i].tower_owner == selectedText){
                                fil.push(data[i]);
                            }
                        }
                        setMarkers(fil, 5);
                        document.getElementById("count5").innerHTML = fil.length;
                    }
                    else{ 
                        setMarkers(data, 1);
                        document.getElementById("count10").innerHTML = data.length;
                     }
                 
                } else{
                    removeMarker("Volta", "count10");
                }
            }
            function region6(checkbox){
                fil = [];
                data = <?= $central ?>;
                if(checkbox.checked == true){
                    if(document.getElementById("customSwitch1").checked == true){
                        removeMarkers("ATC", "count1");
                        for (var i=0; i<data.length; i++) {
                            if(data[i].tower_owner == "ATC"){
                                fil.push(data[i]);
                            }
                        }
                        setMarkers(fil, 1);
                        document.getElementById("count1").innerHTML = fil.length;
                    }
                    else if(document.getElementById("customSwitch2").checked == true){
                            removeMarkers("EATON", "count2");
                            for (var i=0; i<data.length; i++) {
                                if(data[i].tower_owner == "EATON"){
                                    fil.push(data[i]);
                                }
                            }
                            setMarkers(fil, 2);
                            document.getElementById("count2").innerHTML = fil.length;
                        }
                    else if(document.getElementById("customSwitch3").checked == true){
                            removeMarkers("HELIOS", "count3");
                            for (var i=0; i<data.length; i++) {
                                if(data[i].tower_owner == "HELIOS"){
                                    fil.push(data[i]);
                                }
                            }
                            setMarkers(fil, 3);
                            document.getElementById("count3").innerHTML = fil.length;
                        }
                    else if(document.getElementById("customSwitch4").checked == true){
                            removeMarkers("Glomobile", "count4");
                            for (var i=0; i<data.length; i++) {
                                if(data[i].tower_owner == "Glomobile"){
                                    fil.push(data[i]);
                                }
                            }
                            setMarkers(fil, 4);
                            document.getElementById("count4").innerHTML = fil.length;
                        }
                    else if(document.getElementById("customSwitch5").checked == true){
                        var t = document.getElementById("inputGroupSelect04");
                        var selectedText = t.options[t.selectedIndex].text;
                        removeMarkers(selectedText, "count5")
                        for (var i=0; i<data.length; i++) {
                            if(data[i].tower_owner == selectedText){
                                fil.push(data[i]);
                            }
                        }
                        setMarkers(fil, 5);
                        document.getElementById("count5").innerHTML = fil.length;
                    }
                    else{ 
                        setMarkers(data, 1);
                        document.getElementById("count11").innerHTML = data.length;
                     }
                 
                } else{
                    removeMarker("Central", "count11");
                }
            }
            function region7(checkbox){
                fil = [];
              data = <?= $ba ?>;
                if(checkbox.checked == true){
                    if(document.getElementById("customSwitch1").checked == true){
                        removeMarkers("ATC", "count1");
                        for (var i=0; i<data.length; i++) {
                            if(data[i].tower_owner == "ATC"){
                                fil.push(data[i]);
                            }
                        }
                        setMarkers(fil, 1);
                        document.getElementById("count1").innerHTML = fil.length;
                    }
                    else if(document.getElementById("customSwitch2").checked == true){
                            removeMarkers("EATON", "count2");
                            for (var i=0; i<data.length; i++) {
                                if(data[i].tower_owner == "EATON"){
                                    fil.push(data[i]);
                                }
                            }
                            setMarkers(fil, 2);
                            document.getElementById("count2").innerHTML = fil.length;
                        }
                    else if(document.getElementById("customSwitch3").checked == true){
                            removeMarkers("HELIOS", "count3");
                            for (var i=0; i<data.length; i++) {
                                if(data[i].tower_owner == "HELIOS"){
                                    fil.push(data[i]);
                                }
                            }
                            setMarkers(fil, 3);
                            document.getElementById("count3").innerHTML = fil.length;
                        }
                    else if(document.getElementById("customSwitch4").checked == true){
                            removeMarkers("Glomobile", "count4");
                            for (var i=0; i<data.length; i++) {
                                if(data[i].tower_owner == selectedText){
                                    fil.push(data[i]);
                                }
                            }
                            setMarkers(fil, 4);
                            document.getElementById("count4").innerHTML = fil.length;
                        }
                    else if(document.getElementById("customSwitch5").checked == true){
                        var t = document.getElementById("inputGroupSelect04");
                        var selectedText = t.options[t.selectedIndex].text;
                        removeMarkers(selectedText, "count5")
                        for (var i=0; i<data.length; i++) {
                            if(data[i].tower_owner == "Glomobile"){
                                fil.push(data[i]);
                            }
                        }
                        setMarkers(fil, 5);
                        document.getElementById("count5").innerHTML = fil.length;
                    }
                    else{ 
                        setMarkers(data, 1);
                        document.getElementById("count12").innerHTML = data.length;
                     }
                 
                } else{
                    removeMarker("Brong Ahafo", "count12");
                }
            }
            function region8(checkbox){
                fil = [];
                data = <?= $north ?>;
                if(checkbox.checked == true){
                    if(document.getElementById("customSwitch1").checked == true){
                        removeMarkers("ATC", "count1");
                        for (var i=0; i<data.length; i++) {
                            if(data[i].tower_owner == "ATC"){
                                fil.push(data[i]);
                            }
                        }
                        setMarkers(fil, 1);
                        document.getElementById("count1").innerHTML = fil.length;
                    }
                    else if(document.getElementById("customSwitch2").checked == true){
                            removeMarkers("EATON", "count2");
                            for (var i=0; i<data.length; i++) {
                                if(data[i].tower_owner == "EATON"){
                                    fil.push(data[i]);
                                }
                            }
                            setMarkers(fil, 2);
                            document.getElementById("count2").innerHTML = fil.length;
                        }
                    else if(document.getElementById("customSwitch3").checked == true){
                            removeMarkers("HELIOS", "count3");
                            for (var i=0; i<data.length; i++) {
                                if(data[i].tower_owner == "HELIOS"){
                                    fil.push(data[i]);
                                }
                            }
                            setMarkers(fil, 3);
                            document.getElementById("count3").innerHTML = fil.length;
                        }
                    else if(document.getElementById("customSwitch4").checked == true){
                            removeMarkers("Glomobile", "count4");
                            for (var i=0; i<data.length; i++) {
                                if(data[i].tower_owner == "Glomobile"){
                                    fil.push(data[i]);
                                }
                            }
                            setMarkers(fil, 4);
                            document.getElementById("count4").innerHTML = fil.length;
                        }
                    else if(document.getElementById("customSwitch5").checked == true){
                        var t = document.getElementById("inputGroupSelect04");
                        var selectedText = t.options[t.selectedIndex].text;
                        removeMarkers(selectedText, "count5")
                        for (var i=0; i<data.length; i++) {
                            if(data[i].tower_owner == selectedText){
                                fil.push(data[i]);
                            }
                        }
                        setMarkers(fil, 5);
                        document.getElementById("count5").innerHTML = fil.length;
                    }
                    else{ 
                        setMarkers(data, 1);
                        document.getElementById("count13").innerHTML = data.length;
                     }
                 
                } else{
                    removeMarker("Northern", "count13");
                }
            }
            function region9(checkbox){
                fil = [];
                data = <?= $uw ?>;
                if(checkbox.checked == true){
                    if(document.getElementById("customSwitch1").checked == true){
                        removeMarkers("ATC", "count1");
                        for (var i=0; i<data.length; i++) {
                            if(data[i].tower_owner == "ATC"){
                                fil.push(data[i]);
                            }
                        }
                        setMarkers(fil, 1);
                        document.getElementById("count1").innerHTML = fil.length;
                    }
                    else if(document.getElementById("customSwitch2").checked == true){
                            removeMarkers("EATON", "count2");
                            for (var i=0; i<data.length; i++) {
                                if(data[i].tower_owner == "EATON"){
                                    fil.push(data[i]);
                                }
                            }
                            setMarkers(fil, 2);
                            document.getElementById("count2").innerHTML = fil.length;
                        }
                    else if(document.getElementById("customSwitch3").checked == true){
                            removeMarkers("HELIOS", "count3");
                            for (var i=0; i<data.length; i++) {
                                if(data[i].tower_owner == "HELIOS"){
                                    fil.push(data[i]);
                                }
                            }
                            setMarkers(fil, 3);
                            document.getElementById("count3").innerHTML = fil.length;
                        }
                    else if(document.getElementById("customSwitch4").checked == true){
                            removeMarkers("Glomobile", "count4");
                            for (var i=0; i<data.length; i++) {
                                if(data[i].tower_owner == "Glomobile"){
                                    fil.push(data[i]);
                                }
                            }
                            setMarkers(fil, 4);
                            document.getElementById("count4").innerHTML = fil.length;
                        }
                    else if(document.getElementById("customSwitch5").checked == true){
                        var t = document.getElementById("inputGroupSelect04");
                        var selectedText = t.options[t.selectedIndex].text;
                        removeMarkers(selectedText, "count5")
                        for (var i=0; i<data.length; i++) {
                            if(data[i].tower_owner == selectedText){
                                fil.push(data[i]);
                            }
                        }
                        setMarkers(fil, 5);
                        document.getElementById("count5").innerHTML = fil.length;
                    }
                    else{ 
                        setMarkers(data, 1);
                        document.getElementById("count14").innerHTML = data.length;
                     }
                 
                } else{
                    removeMarker("Upper West", "count14");
                }
            }
            function region10(checkbox){
                fil = [];
                data = <?= $ue ?>;
                if(checkbox.checked == true){
                    if(document.getElementById("customSwitch1").checked == true){
                        removeMarkers("ATC", "count1");
                        for (var i=0; i<data.length; i++) {
                            if(data[i].tower_owner == "ATC"){
                                fil.push(data[i]);
                            }
                        }
                        setMarkers(fil, 1);
                        document.getElementById("count1").innerHTML = fil.length;
                    }
                    else if(document.getElementById("customSwitch2").checked == true){
                            removeMarkers("EATON", "count2");
                            for (var i=0; i<data.length; i++) {
                                if(data[i].tower_owner == "EATON"){
                                    fil.push(data[i]);
                                }
                            }
                            setMarkers(fil, 2);
                            document.getElementById("count2").innerHTML = fil.length;
                        }
                    else if(document.getElementById("customSwitch3").checked == true){
                            removeMarkers("HELIOS", "count3");
                            for (var i=0; i<data.length; i++) {
                                if(data[i].tower_owner == "HELIOS"){
                                    fil.push(data[i]);
                                }
                            }
                            setMarkers(fil, 3);
                            document.getElementById("count3").innerHTML = fil.length;
                        }
                    else if(document.getElementById("customSwitch4").checked == true){
                            removeMarkers("Glomobile", "count4");
                            for (var i=0; i<data.length; i++) {
                                if(data[i].tower_owner == "Glomobile"){
                                    fil.push(data[i]);
                                }
                            }
                            setMarkers(fil, 4);
                            document.getElementById("count4").innerHTML = fil.length;
                        }
                    else if(document.getElementById("customSwitch5").checked == true){
                        var t = document.getElementById("inputGroupSelect04");
                        var selectedText = t.options[t.selectedIndex].text;
                        removeMarkers(selectedText, "count5")
                        for (var i=0; i<data.length; i++) {
                            if(data[i].tower_owner == selectedText){
                                fil.push(data[i]);
                            }
                        }
                        setMarkers(fil, 5);
                        document.getElementById("count5").innerHTML = fil.length;
                    }
                    else{ 
                        setMarkers(data, 1);
                        document.getElementById("count15").innerHTML = data.length;
                        // console.log(markers);
                        // for (let i = 0; i < markers.length; i++) {
                        //     for (let j = 0; j < markers.length; j++) {
                        //         var distance = haversine_distance(markers[i], markers[j]);
                        //         console.log(distance);
                        //     }
                            
                        // }
                     }
                 
                } else{
                    removeMarker("Upper East", "count15");
                }
            }
            function switchTelco(sel){
              vall = sel.selectedIndex;
              console.log(vall);
            }
        
        
            function setMarkers(data, num){
                var tower;
                var company;
                var siteId;
                var district;
                var region;
                var coverage;
                var point;
                var png;
                var lat;
                var lng;
              for(var x in data){
                tower = data[x];
                company = tower.tower_owner;
                siteId = tower.tower_id;
                district = tower.district;
                region = tower.region;
                coverage = tower.coverage;
                point = new google.maps.LatLng(tower.latitude, tower.longitude);
                lat = tower.latitude;
                lng = tower.longitude;
                if(num == 1){
                  png ="redtower.png";
                }else if(num == 2){
                  png ="yellowtower.png";
                }else if(num == 3){
                  png ="bluetower.png";
                }else if(num == 4){
                  png ="greentower.png";
                }else if(num == 5){
                  png ="whitetower.png";
                }
                
                marker = new google.maps.Marker({
                  position: point,
                  title: tower.tower_owner,
                  reg: region,
                  dist: district,
                  icon: '../assets/img/maps/'+png,
                  map: map
                });
                markers.push(marker);
                addInfoWindow(marker, InfoContent, company, siteId, district, region, coverage, point, lat, lng);             
              }
            }
            function removeMarkers(type, count){
              for (var i=0; i<markers.length; i++) {
                if(markers[i].title == type){
                  markers[i].setMap(null);
                }
              }
              document.getElementById(count).innerHTML = "";
            }
            function removeMarker(type, count){
              for (var i=0; i<markers.length; i++) {
                if(markers[i].reg == type){
                  markers[i].setMap(null);
                }
              }
              document.getElementById(count).innerHTML = "";
            }
            function addInfoWindow(marker, message, company, siteId, district, region, coverage, point, lat, lng) {
                InfoContent = '<div id="content">'+
                  '<div id="siteNotice">'+
                  '</div>'+
                  '<h5 id="firstHeading" class="firstHeading"><strong>'+company+'</strong></h5>'+
                  '<div id="bodyContent">'+
                  '<ul>'+
                  '<li><b>Tower ID</b>:   '+siteId+'</li>'+
                  '<li><b>District</b>:   '+district+'</li>'+
                  '<li><b>Region</b>:   '+region+'</li>'+
                  '<li><b>Coverage</b>:   '+coverage+'</li><br>'+
                  '<button onclick="createCircle('+lat+','+lng+')">Set Radius</button>'+
                  '</ul>'+
                  '</div>'+
                  '</div>';
        
                var infoWindow = new google.maps.InfoWindow({
                    content: InfoContent
                });
        
                google.maps.event.addListener(marker, 'click', function () {
                    infoWindow.open(map, marker);
                });
            }
            // function haversine_distance(mk1, mk2) {
            //     var R = 6371.0710; // Radius of the Earth in KM
            //     var rlat1 = mk1.position.lat() * (Math.PI/180); // Convert degrees to radians
            //     var rlat2 = mk2.position.lat() * (Math.PI/180); // Convert degrees to radians
            //     var difflat = rlat2-rlat1; // Radian difference (latitudes)
            //     var difflon = (mk2.position.lng()-mk1.position.lng()) * (Math.PI/180); // Radian difference (longitudes)

            //     var d = 2 * R * Math.asin(Math.sqrt(Math.sin(difflat/2)*Math.sin(difflat/2)+Math.cos(rlat1)*Math.cos(rlat2)*Math.sin(difflon/2)*Math.sin(difflon/2)));
            //     return d;
            // }
            // function removeCircle(){
            //     console.log(circles)
            // }

            function createCircle(lat, lng){
                console.log("lat:"+lat+"  long:"+lng);
                var circle = new google.maps.Circle({
                    strokeColor: '#FF0000',
                    strokeOpacity: 0.8,
                    strokeWeight: 2,
                    fillColor: '#FF0000',
                    fillOpacity: 0.35,
                    map: map,
                    center: new google.maps.LatLng(lat, lng),
                    radius: 400,
                    editable: true,
                    draggable: true
                });
                circles.push(circle);
                google.maps.event.addListener(circle, 'radius_changed', function() {
                    document.getElementById("radius").value = circle.getRadius().toFixed(2)+"m radius";
                });
                google.maps.event.addListener(circle, 'dblclick', function() {
                    circle.setMap(null);
                });
                google.maps.event.addListener(circle, 'center_changed', function() {
                    document.getElementById("center").value = "Center:"+circle.getCenter();
                });
                
            }
            
            function initMap() {
              map = new google.maps.Map(document.getElementById('map'), {
                center: new google.maps.LatLng(7.94653, -1.02319),
                zoom: 6.8,
                mapTypeId: 'hybrid'
              });
              var geocoder = new google.maps.Geocoder();
              document.getElementById('search').addEventListener('click', function(){
                geocodeAddress(geocoder, map);
              })
              document.getElementById('searchSite').addEventListener('click', function(){
                siteSearch(map);
              })
             
            }
            function geocodeAddress(geocoder, resultsMap){
              var address = document.getElementById('address').value;
              geocoder.geocode({'address': address}, function(results, status) {
                
                if (status === 'OK') {
                    console.log(results);
                //   resultsMap.setCenter(results[0].geometry.location);
                //   bounds.extend(results[0].geometry.location);
                  // var marker = new google.maps.Marker({
                  //   map: resultsMap,
                  //   position: results[0].geometry.location
                  // });
                //   resultsMap.setZoom(18);
                  resultsMap.fitBounds(results[0].geometry.bounds); 
                  resultsMap.panToBounds(results[0].geometry.bounds);
                } else {
                  alert('Geocode was not successful for the following reason: ' + status);
                }
              });
            }
            function siteSearch(resultsMap){
                var address = document.getElementById('site').value;
                var tow = <?= $towers ?>;
                var mark;
                var ins;

                for (var i=0; i<tow.length; i++) {
                    if(tow[i].tower_id == address){
                        console.log(tow[i]);
                        point = new google.maps.LatLng(tow[i].latitude, tow[i].longitude);
                        mark = new google.maps.Marker({
                            position: point,
                            title: tow[i].tower_owner,
                            reg: tow[i].region,
                            icon: '../assets/img/maps/redtower.png',
                            map: map
                        });
                        resultsMap.setCenter(new google.maps.LatLng(tow[i].latitude, tow[i].longitude));
                        resultsMap.setZoom(30);
                        ins = true;
                    }
                }
                if(!ins){
                    alert("Tower ID non existent")
                }
            }
        
            
          </script>
        
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCvGJHZHs-IUPfKMmwmNopbl9UsKr0rqMA&callback=initMap"></script>
    </body>
</html>
