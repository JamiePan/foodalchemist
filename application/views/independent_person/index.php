
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script type="text/javascript" src="<?php echo base_url("includes/assets/js/jquery.cslider.js") ?> "></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>            
                <!---//End-da-slider----->
                            <script type="text/javascript">
                $(function() {
                
                    $('#da-slider').cslider({
                        autoplay    : true,
                        bgincrement : 450
                    });
                
                });
            </script>
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
        <form class="form-inline" method="post" action="<?php echo site_url('Independent_Person/save'); ?>">


<br>
<h4> Select Location On Map: </h4>
<div id='map_canvas'></div>

<style type="text/css">
    #map_canvas{
    width: 100%;
    height: 400px;
}

#current{
     padding-top: 25px;
}


</style>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyAagQEfKTfr-TJTX-adxKcIk3hWZ6jDRy4&sensor=false&.js"></script>
<script type="text/javascript">
    var map = new google.maps.Map(document.getElementById('map_canvas'), {
    zoom: 1,
    center: new google.maps.LatLng(35.137879, -82.836914),
    mapTypeId: google.maps.MapTypeId.ROADMAP
});

var myMarker = new google.maps.Marker({
    position: new google.maps.LatLng(47.651968, 9.478485),
    draggable: true
});
google.maps.event.addListener(myMarker, 'dragend', function(evt){
    $('#lat').val(evt.latLng.lat().toFixed(3));
    $('#lng').val(evt.latLng.lng().toFixed(3));

});

map.setCenter(myMarker.position);
myMarker.setMap(map);

</script>
<br><br>
  <div class="col-sm-12">

    <div class="col-sm-3">
        <label class="control-label" >No Of People:</label>
    </div>
    <div class="col-sm-9">
        <input style="width: 60%;" name="no_of_people" class="form-control"  placeholder="No Of People">
    </div>

</div>
<br><br>
<div class="col-sm-12">
        <input name="lat" type="hidden" class="form-control" id="lat" value="35.137879">
        <input name="lng" type="hidden" class="form-control" id="lng" value="-82.836914">

    <div class="col-sm-3">
        <label class="control-label" >Time:</label>
    </div>
    <div class="col-sm-9"> 
        <input style="width: 60%;" type="time" name="time" class="form-control" >
    </div>

</div>
<br><br>
<div class="col-sm-12">

    <div class="col-sm-3">
        <label class="control-label" >Date:</label>
    </div>
    <div class="col-sm-9"> 
        <input style="width: 60%;" type="date" name="date" class="form-control" >
    </div>

</div>

<br><br>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
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
        <!---End-content---->
