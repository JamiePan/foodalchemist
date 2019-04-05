<style>
       /* Set the size of the div element that contains the map */
      #wn3 {
        height: 400px;  /* The height is 400 pixels */
        width: 100%;  /* The width is the width of the web page */
       }
    </style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

            <script type="text/javascript" src="<?php echo base_url("includes/assets/js/jquery.cslider.js") ?> "></script>
           
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>        
  <!--  <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&language=en&libraries=places&key=AIzaSyAagQEfKTfr-TJTX-adxKcIk3hWZ6jDRy4"></script> -->
    
        <script src="<?php echo base_url("includes/assets/js/es5-shim.min.js") ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("includes/assets/js/es5-sham.min.js") ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("includes/assets/js/WhatsNearby.js") ?>" type="text/javascript"></script>  
<!--                  <script type="text/javascript">
                $(function() {
                
                    $('#da-slider').cslider({
                        autoplay    : true,
                        bgincrement : 450
                    });
                
                });
            </script> -->
                <!---//End-da-slider----->
            </div>
            <!--//End-header---->
        </div>
        <!---strat-content---->
        <div class="content">
            <div class="wrap">
          
            <!---start-top-grids--->
             <div class="clear"> </div>
 <div class="feature-grid">
<div class="row">
    <div class="col-sm-12">


<br>




            <h2>Showing restaurants and cafes around the center</h2>
            <div class="well">
                <div id="wn3"></div>
            </div>
       

  </body>



</div>
</div>
</div>
            <!---//End-top-grids--->


            <div class="clear"> </div>

              
                </body>
                <script src="<?php echo base_url("includes/assets/js/jquery-ui.min.js") ?> "></script>
                <script src="<?php echo base_url("includes/assets/js/hammer.min.js") ?> "></script>
                <script src="<?php echo base_url("includes/assets/js/responsiveCarousel.js") ?>"></script>
   
            </div>
        </div>
<script>

function initMap() {

var center = {lat: -28.4400743, lng: 132.9820586};
var locations = <?php echo $data['locations']; ?>;
var map = new google.maps.Map(document.getElementById('wn3'), {
    zoom: 3,
    center: center
  });
var infowindow =  new google.maps.InfoWindow({});
var marker, count;
for (count = 0; count < locations.length; count++) {
    marker = new google.maps.Marker({
      position: new google.maps.LatLng(locations[count][1], locations[count][2]),
      map: map,
      title: locations[count][0]
    });
google.maps.event.addListener(marker, 'click', (function (marker, count) {
      return function () {
        infowindow.setContent(locations[count][0]);
        infowindow.open(map, marker);
      }
    })(marker, count));
  }
}    
</script>        
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAagQEfKTfr-TJTX-adxKcIk3hWZ6jDRy4&callback=initMap">
</script>
<!--         <script type="text/javascript">
            $(document).ready(function(){

                navigator.geolocation.getCurrentPosition(showPosition);
                function showPosition(position) { 

                    $("#wn3").whatsnearby({ 
                        zoom:15,
                        width:"100%",
                        placesRadius: 1000,
                        lat: position.coords.latitude,
                        lng: position.coords.longitude,

                        placesTypes: [ 'restaurant', 'cafe' ]
                    });                    
                   
                    
                }



            });
        </script>  -->       
        <!---End-content---->

