// https://wrightshq.com/playground/placing-multiple-markers-on-a-google-map-using-api-3/


            // Display a map on the page
  function initMap() {
var bounds = new google.maps.LatLngBounds();
        var map = new google.maps.Map(document.getElementById("map"), {
          zoom: 7,
          center: markers
        });



            // Multiple Markers title[0] and coordinates lat&lng[1][2]
            var markers = [
              ["Nordjyske Motorvej 285, 9230 Aalborg",56.992715, 9.904865],
              ["Ringvej syd 104. 8260 Viby", 56.117239, 10.150283],
              ["Engelsholmvej 39, 8940 Randers", 56.415611, 10.072617],
              ["Møllegade 103, 8660 Skanderborg", 56.039304, 9.917008],
              ["Birkedam 14, Harte, 6000 Kolding", 55.518266, 9.444145],
              ["Fredericiavej 151, 7100 Vejle", 55.685547, 9.560671],
              ["Kærgårdsvej, 8700 Horsens", 55.884093, 9.792879],
              ["Egevej 6, 6200 Aabenraa", 55.066151, 9.365841],
];

            // Display multiple markers on a map
            // Loop through our array of markers & place each one on the map
            for( i = 0; i < markers.length; i++ ) {
                var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
                bounds.extend(position);
                marker = new google.maps.Marker({
                    position: position,
                    map: map,
                    title: markers[i][0]
                });
                map.fitBounds(bounds);
                // Allow each marker to have an info window
                google.maps.event.addListener(marker, 'click', (function(marker, i) {
                    return function() {
                        infoWindow.setContent(infoWindowContent[i][0]);
                        infoWindow.open(map, marker);
                    }
                })(marker, i));

                // Automatically center the map fitting all markers on the screen

            }

            // Override our map zoom level once our fitBounds function runs (Make sure it only runs once)
            var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
                this.setZoom(14);
                google.maps.event.removeListener(boundsListener);
            });

        }
