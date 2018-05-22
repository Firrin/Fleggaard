
  function initMap() {

    var aarhus = {lat: 56.117239, lng: 10.150283};
    var skanderborg = {lat: 56.039304, lng: 9.917008};
    var kolding = {lat: 55.518266, lng:9.444145 };
    var vejle = { lat:55.685547, lng:9.560671 };


    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 7,
      center: aarhus
    });

    var markers = new google.maps.Marker({
      position: skanderborg,
      map: map,
      title: 'Møllegade 103, 8660 Skanderborg'});

    var marker = new google.maps.Marker({
      position: aarhus,
      map: map,
      title: 'Ringvej syd 104. 8260 Viby'
    });
    var mark = new google.maps.Marker ({
      position: kolding,
      map:map,
      title: 'Birkedam 14, Harte, 6000'
    })
    var marks = new google.maps.Marker ({
      position: vejle,
      map: map,
      title: 'Fredericiavej 151, 7100',
    })
  }
