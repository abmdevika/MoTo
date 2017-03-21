   
 <div id="map" style="height:500px" class="col-auto" style="background-color:pink;">

<script>
function myMap() {
  var myCenter = new google.maps.LatLng(12.9141507,74.8559478);
  var mapCanvas = document.getElementById("map");
  var mapOptions = {center: myCenter, zoom: 18,mapTypeId:google.maps.MapTypeId.HYBRID};
  var map = new google.maps.Map(mapCanvas, mapOptions);
   map.setTilt(0);
  var marker = new google.maps.Marker({position:myCenter, animation:google.maps.Animation.DROP});
  marker.setMap(map);
  
  // Zoom to 9 when clicking on marker
google.maps.event.addListener(marker,'click',function() {
  map.setZoom(9);
  map.setCenter(marker.getPosition());
  });
  
  var infowindow = new google.maps.InfoWindow({
    content: "Hello Swathi...!"
  });
  google.maps.event.addListener(marker, 'click', function() {
  infowindow.open(map,marker);
  });
  
           
            var map = new google.maps.Map(document.getElementById("map"), mapOptions);
            google.maps.event.addListener(map, 'click', function (e) {
                alert("Latitude: " + e.latLng.lat() + "\r\nLongitude: " + e.latLng.lng());
            });
}
</script>


<script src="https://maps.googleapis.com/maps/api/js?key= AIzaSyB3pk1WAJZ61_zW4PBuyMkjO7Gy_MvEztI &callback=myMap"></script>
    </div>
