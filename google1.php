<!DOCTYPE html>
<html>
  <head>
    <title>Place Searches</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
    <script>
      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      var map;
      var infowindow;

      function initMap() {
//        var pyrmont = {lat: -33.867, lng: 151.195};
if (navigator.geolocation) {
         navigator.geolocation.getCurrentPosition(function(position) {
           pos = {
             lat: position.coords.latitude,
             lng: position.coords.longitude
           };
           console.log(pos)


        console.log(pos);
        map = new google.maps.Map(document.getElementById('map'), {
          center: pos,
          zoom: 15
        });

        infowindow = new google.maps.InfoWindow();
        var service = new google.maps.places.PlacesService(map);
        service.nearbySearch({
          location: pos,
          radius: 500,
          type: ['gym']
        }, callback);


      var marker = new google.maps.Marker({
        map: map,
        position: pos,
        label: {
          text: 'C',
          color: 'white',
        }

      });


      google.maps.event.addListener(marker, 'click', function() {
        infowindow.setContent("Current Location");
        infowindow.open(map, this);
      });
      });}
    }

      function callback(results, status) {
        if (status === google.maps.places.PlacesServiceStatus.OK) {
          for (var i = 0; i < results.length; i++) {
            createMarker(results[i]);
          }
        }
      }

      function createMarker(place) {
        var placeLoc = place.geometry.location;
        var marker = new google.maps.Marker({
          map: map,
          position: place.geometry.location
        });

        google.maps.event.addListener(marker, 'click', function() {
          infowindow.setContent(place.name);
          infowindow.open(map, this);
        });
      }
    </script>
  </head>
  <body>
    <div id="map"></div>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAfFR4DlkAe9x1eBBbw6ssLDMcPxGDzrjw&libraries=places&callback=initMap" async defer></script>

  </body>
</html>
