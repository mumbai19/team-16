
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no"/>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
        <title>Lat long way points (LatLng)</title>
        <style type="text/css"> 
            html { height: 100% }
            body { height: 100%; margin: 0px; padding: 0px }
        </style>
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyA7e1HJLrMgthFpZisOfLmx74KZT1v6OxU&sensor=false"></script>
        <script type="text/javascript">
            var directionDisplay;
            var directionsService = new google.maps.DirectionsService();
            var map;

            function initialize() {
                directionsDisplay = new google.maps.DirectionsRenderer();
                var chicago = new google.maps.LatLng(41.850033, -87.6500523);
                var myOptions = {
                    zoom: 6,
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    center: chicago
                };
                map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
                directionsDisplay.setMap(map);
                calcRoute();
            }

            function calcRoute() {
                var first = new google.maps.LatLng(42.496403, -124.413128);
                var second = new google.maps.LatLng(42.496401, -124.413126);

                var request = {
                    origin: "1521 NW 54th St, Seattle, WA 98107 ",
                    destination: "San Diego, CA",
                    waypoints: [{location: first, stopover: false},
                        {location: second, stopover: false}],
                    optimizeWaypoints: true,
                    travelMode: google.maps.DirectionsTravelMode.WALKING
                };
                directionsService.route(request, function (response, status) {
                    if (status == google.maps.DirectionsStatus.OK) {
                        directionsDisplay.setDirections(response);
                        var route = response.routes[0];
                        var summaryPanel = document.getElementById("directions_panel");
                        summaryPanel.innerHTML = "";
                        // For each route, display summary information.
                        for (var i = 0; i < route.legs.length; i++) {
                            var routeSegment = i + 1;
                            summaryPanel.innerHTML += "<b>Route Segment: " + routeSegment + "</b><br />";
                            summaryPanel.innerHTML += route.legs[i].start_address + " to ";
                            summaryPanel.innerHTML += route.legs[i].end_address + "<br />";
                            summaryPanel.innerHTML += route.legs[i].distance.text + "<br /><br />";
                        }
                    } else {
                        alert("directions response " + status);
                    }
                });
            }
        </script>
    </head>
    <body onload="initialize()">
        <div id="map_canvas" style="float:left;width:70%;height:100%;"></div>
        <div id="control_panel" style="float:right;width:30%;text-align:left;padding-top:20px">
            <div id="directions_panel" style="margin:20px;background-color:#FFEE77;"></div>
        </div>
        <script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
        </script> 
        <script type="text/javascript">
        </script> 
    </body>
</html>