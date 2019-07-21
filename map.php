
<?php
// $distances = array();

// foreach ($locations as $key => $location)
// {
//   $a = $base_location['lat'] - $location['lat'];
//   $b = $base_location['lng'] - $location['lng'];
//   $distance = sqrt(($a**2) + ($b**2));
//   $distances[$key] = $distance;
// }

// asort($distances);

// $closest = $locations[key($distances)];

$address = 'Thane station';
$encode = urlencode($address);
$key = "AIzaSyA7e1HJLrMgthFpZisOfLmx74KZT1v6OxU";
$url = "https://maps.googleapis.com/maps/api/geocode/json?address={$encode}&key={$key}";

$json = file_get_contents($url);
$data = json_decode($json);

$lat = $data->results[0]->geometry->location->lat;  
$lng = $data->results[0]->geometry->location->lng;  

?>
<!DOCTYPE html >
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <title>Using MySQL and PHP with Google Maps</title>
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
  </head>

<html>
  <body>
    <div id="map"></div>

    <script>
      var customLabel = {
        restaurant: {
          label: 'R'
        },
        bar: {
          label: 'B'
        }
      };

        function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
            <?php $lat ?><?php $lat ?>
          center: new google.maps.LatLng(<?php echo $lat ?>,<?php echo $lng ?>),
          zoom: 12
        });
        var infoWindow = new google.maps.InfoWindow;
        

          
          downloadUrl(' ', function(data) {
            
            
            
            //   var id = markerElem.getAttribute('id');
            //   var name = markerElem.getAttribute('name');
              var address = "Mulund"
            //   var type = markerElem.getAttribute('type');
              var point = new google.maps.LatLng(
                  parseFloat(<?php echo $lat ?>),
                  parseFloat(<?php echo $lng ?>));

              var infowincontent = document.createElement('div');
              var strong = document.createElement('strong');
              strong.textContent = name
              infowincontent.appendChild(strong);
              infowincontent.appendChild(document.createElement('br'));

              var text = document.createElement('text');
              text.textContent = address
              infowincontent.appendChild(text);
              var icon = "restaurant";
              var marker = new google.maps.Marker({
                map: map,
                position: point,
                label: icon.label
              });
              marker.addListener('click', function() {
                infoWindow.setContent(infowincontent);
                infoWindow.open(map, marker);
              });
          });
        }



      function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;

        request.onreadystatechange = function() {
          if (request.readyState == 4) {
            request.onreadystatechange = doNothing;
            callback(request, request.status);
          }
        };

        request.open('GET', url, true);
        request.send(null);
      }

      function doNothing() {}
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVT70SL8ytLHzV6-Z7wVwaZyQJf2Axywg&callback=initMap">
    </script>
  </body>
</html>



