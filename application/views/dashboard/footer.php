	<!-- Jquery JS-->
	<script src="<?php echo base_url()?>assets/vendor/jquery-3.2.1.min.js"></script>
  <script>
        jQuery(document).ready(function(){
            $(".deletee").hide();
            //when the Add Field button is clicked
            $(document).on('click', '#addd', function(e) {
            $(".deletee").fadeIn("1500");
            //Append a new row of code to the "#items" div
            $("#items").append(
            '<div class="next-referral col-12"><input id="textinput" name="songs[]" type="text" placeholder="Enter name" class="form-control input-md" style="margin-bottom:10px;"></div>'
            );
            });
            $("body").on("click", ".deletee", function (e) {
              e.preventDefault();
            $(".next-referral").last().remove();
            });
    });
</script>
	<!-- Bootstrap JS-->
	<script src="<?php echo base_url()?>assets/vendor/bootstrap-4.1/popper.min.js"></script>
	<script src="<?php echo base_url()?>assets/vendor/bootstrap-4.1/bootstrap.min.js"></script>
	<!-- Vendor JS       -->
	<script src="<?php echo base_url()?>assets/vendor/slick/slick.min.js">
	</script>
	<script src="<?php echo base_url()?>assets/vendor/wow/wow.min.js"></script>
	<script src="<?php echo base_url()?>assets/vendor/animsition/animsition.min.js"></script>
	<script src="<?php echo base_url()?>assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
	</script>
	<script src="<?php echo base_url()?>assets/vendor/counter-up/jquery.waypoints.min.js"></script>
	<script src="<?php echo base_url()?>assets/vendor/counter-up/jquery.counterup.min.js">
	</script>
	<script src="<?php echo base_url()?>assets/vendor/circle-progress/circle-progress.min.js"></script>
	<script src="<?php echo base_url()?>assets/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
	<script src="<?php echo base_url()?>assets/vendor/chartjs/Chart.bundle.min.js"></script>
	<script src="<?php echo base_url()?>assets/vendor/select2/select2.min.js">
	</script>
  

	<!-- Main JS-->
	<script src="<?php echo base_url()?>assets/js/main.js"></script>
	<script>
        function initAutocomplete() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -33.8688, lng: 151.2195},
          zoom: 13,
          mapTypeId: 'roadmap'
        });
        // Create the search box and link it to the UI element.
        var input = document.getElementById('pac-input');
        var searchBox = new google.maps.places.SearchBox(input);
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

        // Bias the SearchBox results towards current map's viewport.
        map.addListener('bounds_changed', function() {
          searchBox.setBounds(map.getBounds());
        });

        var markers = [];
        // Listen for the event fired when the user selects a prediction and retrieve
        // more details for that place.
            google.maps.event.addListener(map,'click',function(event) {     
                document.getElementById('lat').value = event.latLng.lat();
                document.getElementById('lng').value =  event.latLng.lng();
            });
        searchBox.addListener('places_changed', function() {
          var places = searchBox.getPlaces();

          if (places.length == 0) {
            return;
          }

          // Clear out the old markers.
          markers.forEach(function(marker) {
            marker.setMap(null);
          });
          markers = [];

          // For each place, get the icon, name and location.
          var bounds = new google.maps.LatLngBounds();
          places.forEach(function(place) {
            if (!place.geometry) {
              console.log("Returned place contains no geometry");
              return;
            }
            var icon = {
              url: place.icon,
              size: new google.maps.Size(71, 71),
              origin: new google.maps.Point(0, 0),
              anchor: new google.maps.Point(17, 34),
              scaledSize: new google.maps.Size(25, 25)
            };

            // Create a marker for each place.
            markers.push(new google.maps.Marker({
              map: map,
              icon: icon,
              title: place.name,
              position: place.geometry.location
            }));
             document.getElementById('lat').value=place.geometry.location.lat();
             document.getElementById('lng').value=place.geometry.location.lng();

            if (place.geometry.viewport) {
              // Only geocodes have viewport.
              bounds.union(place.geometry.viewport);
            } else {
              bounds.extend(place.geometry.location);
            }
          });
          map.fitBounds(bounds);
        });
      }
    </script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDge58kDZRSDquz16IhEFQZMzHjMpFWwlw&libraries=places&callback=initAutocomplete" async defer></script>

</body>

</html>
<!-- end document-->
