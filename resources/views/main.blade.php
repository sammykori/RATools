<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/ncal.png">
  <link rel="icon" type="image/png" href="../assets/img/ncal.png">
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
            <a class="navbar-brand" href="javascript:void(0)"><img src="../assets/img/towerlogo.png" style="height:60px;margin-top:-15px"></a>
          </div>
          <div class="justify-content-right">
            <form class="navbar-form">
              <div class="input-group no-border">
                <input type="text" value="" id= "address" class="form-control" placeholder="Location Search ..." style="color:darkslategray;">
                <input type="button" id="search" value="search">
                  {{-- <i class="material-icons">search</i> --}}
                  {{-- <div class="ripple-container"></div> --}}
                </button>
              </div>
            </form>
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
              <label class="custom-control-label" for="customSwitch4"><img src="../assets/img/maps/greentower.png"> <strong style="color:#314f57">Glo</strong></label><br><p id="count4"></p>
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
                <option value="1">MainOne</option>
                <option value="2">National Security</option>
                <option value="3">BBH</option>
                <option value="2">VF</option>
                <option value="3">NITA</option>
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
    var colnum;

    function filter1(checkbox){
      if(checkbox.checked == true){
        data = <?= $atcdata ?>;
        console.log(data);
        setMarkers(data, 1);
        document.getElementById("count1").innerHTML = data.length;
      }else{
        removeMarkers("ATC");
      }
    }
    function filter2(checkbox){
      if(checkbox.checked == true){
        data = <?= $eatondata ?>;
        console.log(data);
        setMarkers(data, 2);
        document.getElementById("count2").innerHTML = data.length;
      }else{
        removeMarkers("EATON");
      }
    }
    function filter3(checkbox){
      if(checkbox.checked == true){
        data = <?= $helios ?>;
        console.log(data);
        setMarkers(data, 3);
        document.getElementById("count3").innerHTML = data.length;
      }else{
        removeMarkers("HELIOS");
      }
    }
    function filter4(checkbox){
      if(checkbox.checked == true){
        data = <?= $glo ?>;
        console.log(data);
        setMarkers(data, 4);
        document.getElementById("count4").innerHTML = data.length;
      }else{
        removeMarkers("Glomobile");
      }
    }
    function filter5(checkbox){
      
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
        else{
          data = null;
        }
        console.log(data);
        setMarkers(data, 5);
        document.getElementById("count5").innerHTML = data.length;
      
      }
      else{
        removeMarkers(val);
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
      for(var x in data){
        tower = data[x];
        company = tower.tower_owner;
        siteId = tower.tower_id;
        district = tower.district;
        region = tower.region;
        coverage = tower.coverage;
        point = new google.maps.LatLng(tower.latitude, tower.longitude);
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
          icon: '../assets/img/maps/'+png,
          map: map
        });
        markers.push(marker);
        addInfoWindow(marker, InfoContent, company, siteId, district, region, coverage);
        
      }
    }
    function removeMarkers(type){
      for (var i=0; i<markers.length; i++) {
        if(markers[i].title == type){
          markers[i].setMap(null);
        }
      }
    }
      function addInfoWindow(marker, message, company, siteId, district, region, coverage) {
        InfoContent = '<div id="content">'+
          '<div id="siteNotice">'+
          '</div>'+
          '<h5 id="firstHeading" class="firstHeading"><strong>'+company+'</strong></h5>'+
          '<div id="bodyContent">'+
          '<ul>'+
          '<li><b>Site ID</b>:   '+siteId+'</li>'+
          '<li><b>District</b>:   '+district+'</li>'+
          '<li><b>Location</b>:   '+region+'</li>'+
          '<li><b>Status</b>:   '+coverage+'</li>'+
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
        zoom: 6.8
      });
      var geocoder = new google.maps.Geocoder();
      document.getElementById('search').addEventListener('click', function(){
        geocodeAddress(geocoder, map);
      })
     
    }
    function geocodeAddress(geocoder, resultsMap){
      var address = document.getElementById('address').value;
      geocoder.geocode({'address': address}, function(results, status) {
        
        if (status === 'OK') {
          resultsMap.setCenter(results[0].geometry.location);
          // var marker = new google.maps.Marker({
          //   map: resultsMap,
          //   position: results[0].geometry.location
          // });
          resultsMap.setZoom(10);
        } else {
          alert('Geocode was not successful for the following reason: ' + status);
        }
      });
    }

    
  </script>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCvGJHZHs-IUPfKMmwmNopbl9UsKr0rqMA&callback=initMap"></script>
</body>

</html>