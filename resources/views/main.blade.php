<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    RA Data Tools | Map View
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="dark-edition">
  <div>
    <div>
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:void(0)">Map</a>
          </div>
          <div class="justify-content-center">
            <form class="navbar-form">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-default btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>
          </div>
          <div class="justify-content-right">
            <div class="picker">
            </div>  
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div id="map"></div>
    </div>
  </div>
  <footer class="footer">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-2"> 
          <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="customSwitch1" onchange="filter1(this);">
            <label class="custom-control-label" for="customSwitch1"><img src="../assets/img/maps/redtower.png">ATC</label>
          </div>
        </div>
        <div class="col-sm-2"> 
            <div class="custom-control custom-switch">
              <input type="checkbox" class="custom-control-input" id="customSwitch2" onchange="filter2(this);">
              <label class="custom-control-label" for="customSwitch2"><img src="../assets/img/maps/yellowtower.png">Eaton</label>
            </div>
          </div>
          <div class="col-sm-2"> 
            <div class="custom-control custom-switch">
              <input type="checkbox" class="custom-control-input" id="customSwitch3" onchange="filter3(this);">
              <label class="custom-control-label" for="customSwitch3"><img src="../assets/img/maps/bluetower.png">Millicom</label>
            </div>
          </div>
          <div class="col-sm-2"> 
            <div class="custom-control custom-switch">
              <input type="checkbox" class="custom-control-input" id="customSwitch4" onchange="filter4(this);">
              <label class="custom-control-label" for="customSwitch4"><img src="../assets/img/maps/greentower.png">HTG</label>
            </div>
          </div>
          <div class="col-sm-2"> 
            <div class="custom-control custom-switch">
              <input type="checkbox" class="custom-control-input" id="customSwitch5" onchange="filter5(this);">
              <label class="custom-control-label" for="customSwitch5">
                <img src="../assets/img/maps/whitetower.png">
              </label>
            </div>
          </div>
          <div class="col-sm-2"> 
            <div class="input-group">
              <select class="custom-select" id="inputGroupSelect04" onchange="switchTelco(this);">
                <option selected>All Others</option>
                <option value="1">Airtel</option>
                <option value="2">GO tv</option>
                <option value="3">Scancom</option>
              </select>
            </div>
          </div>
        </div>
      </div>
    </footer>
  
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="https://unpkg.com/default-passive-events"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Chartist JS -->
  <script src="../assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.js?v=2.1.0"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
 
  <script>      
    var data;
    var map;
    var marker;
    var InfoContent;
    var markers = [];
    var vall;
    var val;

    function filter1(checkbox){
      if(checkbox.checked == true){
        data = <?= $atcdata ?>;
        setMarkers(data);
        console.log(markers[1].title);
      }else{
        removeMarkers("ATC TOWER");
      }
    }
    function filter2(checkbox){
      if(checkbox.checked == true){
        data = <?= $eatondata ?>;
        setMarkers(data);
        console.log(markers);
      }else{
        removeMarkers("EATON TOWERS GHANA LIMITED");
      }
    }
    function filter3(checkbox){
      if(checkbox.checked == true){
        data = <?= $millidata ?>;
        setMarkers(data);
      }else{
        removeMarkers("MILLICOM GHANA LIMITED");
      }
    }
    function filter4(checkbox){
      if(checkbox.checked == true){
        data = <?= $htgdata ?>;
        setMarkers(data);
      }else{
        removeMarkers("HTG MANAGED SERVICES LIMITED");
      }
    }
    function filter5(checkbox){
      
      if(checkbox.checked == true){
        if(vall == 1){
          val = "AIRTEL GHANA LIMITED";
          data = <?= $airdata ?>;
          console.log(val);
          console.log(data);
        }
        else if(vall == 2){
          val = "GO TELEVISION";
          data = <?= $godata ?>;
          console.log(val);
        }
        else if(vall == 3){
          val = "SCANCOM/MTN GHANA LIMITED";
          data = <?= $mtndata ?>;
          console.log(val);
        }
        
        setMarkers(data);
        console.log(markers);
      }
      else{
        removeMarkers(val);
      }
    }
    function switchTelco(sel){
      vall = sel.selectedIndex;
      console.log(vall);
    }


    function setMarkers(data){
        var tower;
        var company;
        var siteId;
        var district;
        var location;
        var status;
        var point;
      for(var x in data){
        tower = data[x];
        company = tower.company;
        siteId = tower.site_id;
        district = tower.district;
        location = tower.location;
        status = tower.status;
        point = new google.maps.LatLng(tower.lat, tower.lng);

        marker = new google.maps.Marker({
          position: point,
          title: tower.company,
          icon: '../assets/img/maps/redtower.png',
          map: map
        });
        markers.push(marker);
        addInfoWindow(marker, InfoContent, company, siteId, district, location, status);
        
      }
    }
    function removeMarkers(type){
      for (var i=0; i<markers.length; i++) {
        if(markers[i].title == type){
          markers[i].setMap(null);
        }
      }
    }
      function addInfoWindow(marker, message, company, siteId, district, location, status) {
        InfoContent = '<div id="content">'+
          '<div id="siteNotice">'+
          '</div>'+
          '<h5 id="firstHeading" class="firstHeading"><strong>'+company+'</strong></h5>'+
          '<div id="bodyContent">'+
          '<ul>'+
          '<li><b>Site ID</b>:   '+siteId+'</li>'+
          '<li><b>District</b>:   '+district+'</li>'+
          '<li><b>Location</b>:   '+location+'</li>'+
          '<li><b>Status</b>:   '+status+'</li>'+
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

    function initMap() {
      map = new google.maps.Map(document.getElementById('map'), {
        center: new google.maps.LatLng(7.94653, -1.02319),
        zoom: 7
      });
     
    }
    
  </script>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDr1w9upWQUvEuNCBEgFH_N25noI_JBG9E&callback=initMap"></script>
</body>

</html>