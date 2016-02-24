function initMap() {
   var myLatLng = {lat: 22.620447, lng: 120.302290};

      var map = new google.maps.Map(document.getElementById("SymbangMap"), {
        zoom: 16,
        center: myLatLng
      });

      var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
      });

      marker.setMap(map);
      google.maps.event.addListener(map, "zoom_changed", function() {
         map.setCenter(myLatLng);
  });
}

