<style>
.social-links li{
padding:0px 20px;
}
.social-links .fa-linkedin:before {
  font-size:40px;
}
.social-links .fa-twitter:before {
  font-size:40px;
}
.social-links .fa-facebook:before {
  font-size:40px;
}
.social-links .fa-envelope:before {
  font-size:40px;
}
.social-links .fa-instagram:before {
  font-size:40px;
}
.social-links .fa-calendar-check-o:before {
  font-size:40px;
}
.social-links .fa-upload:before {
  font-size:40px;
}
.social-links .fa-spotify:before{
font-size:40px;
}
@media screen and (max-width: 768px) {
  .social-links li{
    padding:0px 3px;
    }
    .social-links .fa-linkedin:before {
      font-size:25px;
    }
    .social-links .fa-twitter:before {
      font-size:25px;
    }
    .social-links .fa-facebook:before {
      font-size:25px;
    }
    .social-links .fa-envelope:before {
      font-size:25px;
    }
    .social-links .fa-instagram:before {
      font-size:25px;
    }
    .social-links .fa-calendar-check-o:before {
      font-size:25px;
    }
    .social-links .fa-upload:before {
      font-size:25px;
    }
    .social-links .fa-spotify:before{
        font-size:25px;
    }
}
</style>

    <!-- footer -->
    <div class="container_wrap footer_color" id="contact" style="background-color:#ffffff;">
        <div class="container" style="background-color:#ffffff;">
            <div class="row">
                <div class="col-md-12">
                  
                    <section style="text-align:center;">
                        <div class="testimonial" style="margin:20px 0 ">
                        <ul class="social-links">
                            <li><a href="https://www.linkedin.com/in/ben-hogarth-23078b64/" class="fa fa-linkedin" target="_blank"></a></li>
                            <li><a href="https://www.facebook.com/ben.hogarth.audio" class="fa fa-facebook"  target="_blank"></a></li>
                            <li><a href="https://twitter.com/Ben_Hogarth" class="fa fa-twitter" target="_blank"></a></li>
                            <li><a href="https://www.instagram.com/ben_hogarth" class="fa fa-instagram" target="_blank"></a></li>
                            <li><a href="<?php echo base_url()?>homeweb/booking" class="fa fa-calendar-check-o" target="_blank" ></a></li>
                            <li><a href="https://wetransfer.com" class="fa fa-upload" target="_blank"></a></li>
                            <li><a href="mailto:info@benhogarth.com" class="fa fa-envelope"></a></li>
                            <li><a href="https://open.spotify.com/playlist/7bvCgNenWit1QhuaaCl07p?si=6aaUIftIR1W2Q4tGV8_tAg" class="fa fa-spotify" target="_blank"></a></li>
                        </ul>
                        </div>
                    </section>
                </div>
            

            </div>
        </div>

    </div>
<!-- <div class="copyright" style="background-color:-->
<!--#ffffff-->
<!--;">-->
<!--        <div class="row" style="margin:0px;">-->
<!--            <div class="col-md-6 copy_p">-->
<!--               <b> <p style="color:#000000;margin-top: 6px;">Copyright ©benhogarth 2019</p></b>-->
<!--            </div>-->
<!--            <div class="col-md-6">-->
<!--                <ul class="footer_menu" style="color:#000000; ">-->
<!--                    <li class="list_menu" >-->
<!--                      <a href="<?php echo base_url()?>" title="Home" style="color:#000000">Home</a>-->
<!--                    </li>-->
               
<!--                     <li class="list_menu"><a href="<?php echo base_url()?>homeweb/booking" title="Booking" style="color:#000000">Booking</a></li>-->
<!--                      <li class="list_menu"><a href="<?php echo base_url()?>homeweb/upload" title="Upload" style="color:#000000">Upload</a></li>-->
<!--                </ul>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
    <!-- footer -->

    
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>

    <!-- custom -->

    <script src="<?php echo base_url()?>assets/frontend/js/nav.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>assets/frontend/js/bootstrap.min.js" type="text/javascript"></script>
 	<script src="<?php echo base_url()?>assets/frontend/js/gallery/masonry.pkgd.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>assets/frontend/js/gallery/imagesloaded.pkgd.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>assets/frontend/js/gallery/jquery.infinitescroll.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>assets/frontend/js/gallery/main.js" type="text/javascript"></script>

     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js">
  </script>
  
  <!-- jQuery Easing -->
  <script src="<?php echo base_url()?>assets/frontend/js/jquery.easing.1.3.js"></script>
  <!-- Bootstrap -->
  <script src="<?php echo base_url()?>assets/frontend/js/bootstrap.min.js"></script>
  <!-- Carousel -->
  <!-- <script src="js/owl.carousel.min.js"></script> -->
  <!-- Stellar -->
  <script src="<?php echo base_url()?>assets/frontend/js/jquery.stellar.min.js"></script>
  <!-- Waypoints -->
  <script src="<?php echo base_url()?>assets/frontend/js/jquery.waypoints.min.js"></script>
  <!-- Counters -->
  <script src="<?php echo base_url()?>assets/frontend/js/jquery.countTo.js"></script>

  <script src="<?php echo base_url()?>assets/frontend/js/main.js"></script>
  <script src="<?php echo base_url()?>assets/frontend/js/easyResponsiveTabs.js" type="text/javascript"></script>
  <script src="<?php echo base_url()?>assets/frontend/js/upload.js" type="text/javascript"></script>
  <script type="text/javascript">
    var offset = 18;
    function viewmore(){
        $.ajax('<?php echo base_url() ?>homeweb/dataDiscoAjax', {
            type: 'POST',  // http method
            data: { startDate: offset },  // data to submit
            success: function (data, status, xhr) {
                console.log(JSON.parse(data));
                $('#discodata').append(JSON.parse(data).output);
                offset = offset + 12;
                if(JSON.parse(data).count == false){
                    $('#viewmore').hide();
                }
            },
            error: function (jqXhr, textStatus, errorMessage) {
                    alert(errorMessage);
            }
        });
    }

    $(document).ready(function () {
      $("#testimonial-slider").owlCarousel({
        items: 2,
        itemsDesktop: [1000, 2],
        itemsDesktopSmall: [979, 2],
        itemsTablet: [767, 1],
        pagination: true,
        autoPlay: true
      });
    });
  </script>
  <script type="application/x-javascript"> 
    addEventListener("load", function() { 
        setTimeout(hideURLbar, 0); }, false);

        function hideURLbar(){ window.scrollTo(0,1); }
         </script>

    <script type="text/javascript">
                        $(document).ready(function () {
                            $('#horizontalTab').easyResponsiveTabs({
                                type: 'default', //Types: default, vertical, accordion           
                                width: 'auto', //auto or any width like 600px
                                fit: true   // 100% fit in a container
                            });
                        });
                        
                    </script>
    <script>
        var map;
        var markers;
        function initMap() {

            map = new google.maps.Map(document.getElementById('map'), {
                zoom: 5,
                center: {
                    lat: 31.7860603,
                    lng:-132.0853276
                },
                clickableIcons: false
            });

            // Create an array of alphabetical characters used to label the markers.
            var labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

            // Add some markers to the map.
            // Note: The code uses the JavaScript Array.prototype.map() method to
            // create an array of markers based on a given "locations" array.
            // The map() method here has nothing to do with the Google Maps API.
            var contentString = '<div class="map_style"><a href="#"><img src="http://localhost/ben_codeigniter/assets/frontend/images/booking/12.png" width="100%"><div class="flex"><div class="half_first"><p class="p_margin"><b>Studio</b></p></div><div class="half_second"><h4>$12</h4></div></div><a></div>';

            var infowindow = new google.maps.InfoWindow();
            markers = locations.map(function (location, i) {
                var mark = new google.maps.Marker({
                    position: {
                    lat: location.lat,
                    lng: location.lng
                    },
                    info : location.marker,
                    // icon : icon
                });
                mark.addListener('click', function () {
                    infowindow.setContent(this.info);
                    infowindow.open(map, mark);
                });
                return mark;
            });

            // Add a marker clusterer to manage the markers.
            var markerCluster = new MarkerClusterer(map, markers, {
                imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'
            });
            var bounds = new google.maps.LatLngBounds();
            for(i=0;i<markers.length;i++) {
                if (i==10) {
                    break;
                }
               bounds.extend(markers[i].getPosition());
            }
            map.setCenter(bounds.getCenter());
            //remove one zoom level to ensure no marker is on the edge.
            map.setZoom(map.getZoom()-1); 
        }
        function myClick(id){
            google.maps.event.trigger(markers[id], 'click');
            map.setZoom(16);
            var posi = new google.maps.LatLng(locations[id].lat, locations[id].lng);
            map.panTo(posi);
        }
        var locations=<?php echo $mapdata ?>;
      
      
    </script>
    <script
        src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
    </script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDge58kDZRSDquz16IhEFQZMzHjMpFWwlw&callback=initMap">
    </script>
    <script>
        $('#datepicker').datepicker();
        $('#timepickerstart').timepicker();
        $('#timepickerend').timepicker();
    </script>


</body>

</html>
