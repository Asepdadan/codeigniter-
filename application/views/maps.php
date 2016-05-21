<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Simple markers</title>
    <style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 100%;
      }
    </style>
  </head>
  <body>
    <div id="map" style="width: 700px;height: 5 00px;"></div>

    <div id="map1" style="width: 700px;height: 5 00px;"></div>
    <script>

      function initMap() {
        var myLatLng = {lat: -6.20876, lng: 106.84560};
        var myLatLng1 = {lat: -6.91746, lng: 107.61912};

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 10,
          center: myLatLng
        });

        var map1 = new google.maps.Map(document.getElementById('map1'), {
          zoom: 3,
          center: myLatLng1
        });

        var marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          title: 'Jakarta'
        });

        var marker1 = new google.maps.Marker({
          position: myLatLng1,
          map: map1,
          title: 'Bandung'
        });
      }
    </script>

  <!--   <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -6.20876, lng: 106.84560},
          zoom: 8
        });
      }
    </script> -->


    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key= AIzaSyAiYPL4z2Y3z1KHdzF1cm5lzUODSVfMa84 &callback=initMap">
    </script>
  </body>
</html>