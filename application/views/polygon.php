<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Polygon with Hole</title>
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
    <div id="map"></div>
    <script>

      // This example creates a triangular polygon with a hole in it.

      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 5,
          center: {lat: 24.886, lng: -70.268},
        });

        // Define the LatLng coordinates for the polygon's  outer path.
        var outerCoords = [
          {lat: -6.20876, lng: 106.84560},
          {lat: -6.91746, lng: 107.61912},
          {lat: 32.321, lng: -64.757}
        ];

        // Define the LatLng coordinates for the polygon's inner path.
        // Note that the points forming the inner path are wound in the
        // opposite direction to those in the outer path, to form the hole.
        var innerCoords = [
          {lat: 28.745, lng: -70.579},
          {lat: 29.570, lng: -67.514},
          {lat: 27.339, lng: -66.668}
        ];

        // Construct the polygon, including both paths.
        var bermudaTriangle = new google.maps.Polygon({
          paths: [outerCoords, innerCoords],
          strokeColor: '#FFC107',
          strokeOpacity: 0.8,
          strokeWeight: 2,
          fillColor: '#FFC107',
          fillOpacity: 0.35
        });
        bermudaTriangle.setMap(map);
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key= AIzaSyAiYPL4z2Y3z1KHdzF1cm5lzUODSVfMa84 &callback=initMap">
    </script>
  </body>
</html>