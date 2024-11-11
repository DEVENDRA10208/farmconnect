<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tracking App</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net"/>
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
           
           #map {
            height: 100%;
                 }
            html, body {
              height: 100%;
                margin: 0;
               padding: 0;
               }
        </style>
    </head>
    <body class="antialiased">
    <button  onclick="updatePosition()">Update Position</button>

    <div id="map"></div>
 <script src="{{ asset('resources/js/app.js') }}">

</script>
        <script>
            let map;
            let marker;
        

                async function initMap() {
                // The location of Uluru
                const position = { lat: 1.1069, lng: 36.6431  };
                // Request needed libraries.
                //@ts-ignore
                const { Map } = await google.maps.importLibrary("maps");
                const { AdvancedMarkerElement } = await google.maps.importLibrary("marker");

                // The map, centered at Uluru
                map = new Map(document.getElementById("map"), {
                    zoom: 10,
                    center: position,
                    mapId: "DEMO_MAP_ID",
                });

                // The marker, positioned at Uluru
                 marker = new google.maps.Marker({
                    map: map,
                    position: position,
                    title: "Vehicle",
                });
                }
                
              initMap();

              function updatePosition() {
                
              const newLatLng={lat: 0.5388 , lng: 37.4596};
              marker.setPosition(newLatLng);
              map.setCenter(newLatLng);
              
            }
             
             

        </script>

        <script async
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAH9DdrWSsFx2haTaEzlsn7O776xFBvtPI&callback=initMap">
        </script>

    </body>
</html>
