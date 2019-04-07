<?php $this->load->model('SharingModel');
$data['res'] = $this->SharingModel->getRestaurants();
	$arr = array();
	foreach($data['res'] as $r){
		$arr[] = $r['title'];
	}
 ?>
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
		<style>
		.form-bg{ background: #ddd; }
.form-horizontal{
    background: #fff;
    padding: 80px 50px;
}
.form-horizontal .form-group{
    margin: 0 0 30px 0;
    position: relative;
}
.form-horizontal .form-group:last-child{ margin: 40px 0 0 0; }
.form-horizontal .form-group i{
    width: 50px;
    height: 50px;
    line-height: 50px;
    font-size: 18px;
    color: #c4c4c4;
    text-align: center;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 1;
}
.form-horizontal .form-control{
    height: 50px;
    background: #fff;
    border: 2px solid #d9d9d9;
    box-shadow: none;
    padding: 0 20px 0 50px;
    font-size: 16px;
    color: #7f8291;
    position: relative;
    transition: all 0.3s ease 0s;
}
.form-horizontal .form-control[type=password]{ padding: 0 105px 0 50px; }
.form-horizontal .form-control:focus{
    box-shadow: none;
    outline: 0 none;
    border-color: #4b92e3;
}
.form-horizontal .form-control::-webkit-input-placeholder,
.form-horizontal .form-control::-moz-placeholder,
.form-horizontal .form-control::placeholder{ color: #c4c4c4; }
.form-horizontal .form-group label{
    padding: 0 7px;
    background: #4b92e3;
    font-size: 14px;
    color: #fff;
    letter-spacing: 0.5px;
    margin-bottom: 10px;
    border-radius: 3px;
    opacity: 0;
    z-index: 1;
    position: absolute;
    top: 9px;
    left: 15px;
    transition: all 0.3s ease 0s;
}
.form-horizontal .form-group:hover label{
    opacity: 1;
    top: -9px;
}
.form-horizontal .forgot-pass{
    padding: 5px 10px;
    font-size: 16px;
    font-weight: bold;
    color: #4b92e3;
    text-transform: capitalize;
    position: absolute;
    top: 50%;
    right: 10px;
    border-left: 1px solid #d8d8d8;
    transform: translateY(-50%);
}
.form-horizontal .signup{
    display: inline-block;
    font-size: 16px;
    color: #8f8f8f;
    text-transform: capitalize;
    margin-top: 8px;
}
.form-horizontal .signup a{ color: #4b92e3; }
.form-horizontal .btn{
    padding: 8px 30px;
    background: #4b92e3;
    float: right;
    border: none;
    font-size: 16px;
    font-weight: bold;
    color: #fff;
    border-radius: 6px;
    text-transform: uppercase;
}
.form-horizontal .btn:focus{
    background: #4b92e3;
    color: #fff;
}
@media only screen and (max-width: 479px){
    .form-horizontal{ padding: 40px 20px; }
    .form-horizontal .form-group:last-child{
        text-align: center;
        margin-top: 0;
    }
    .form-horizontal .signup{
        display: block;
        margin-bottom: 10px;
    }
    .form-horizontal .btn{ float: none; }
}
License Terms
		</style>
        <!---strat-content---->
        <div class="content">
            <div class="wrap">
          
            <!---start-top-grids--->
             <div class="clear"> </div>
 <div class="feature-grid">
<div class="row">
    <div class="col-sm-12">
        <!--<form class="form-inline" method="post" action="<?php echo site_url('Cafe_Owner/save'); ?>">



  <div class="col-sm-12">

    <div class="col-sm-3">
        <label class="control-label" >Object Name:</label>
    </div>
    <div class="col-sm-9">
        <input style="width: 60%;" type="text" name="object_name" class="form-control"  placeholder="Object Name">
    </div>

</div>
<br><br>
<div class="col-sm-12">
        <input name="lat" type="hidden" class="form-control" id="lat" value="35.137879">
        <input name="lng" type="hidden" class="form-control" id="lng" value="-82.836914">

    <div class="col-sm-3">
        <label class="control-label" >Name Of Food:</label>
    </div>
    <div class="col-sm-9"> 
        <input style="width: 60%;" type="text" name="name_of_food" class="form-control" placeholder="Name Of Food">
    </div>

</div>
<br><br>
<div class="col-sm-12">

    <div class="col-sm-3">
        <label class="control-label" >Quantity Of Food:</label>
    </div>
    <div class="col-sm-9"> 
        <input style="width: 60%;" type="text" name="quantity_of_food" class="form-control" placeholder="Quantity Of Food">
    </div>

</div>
<br><br>
<div class="col-sm-12">


    <div class="col-sm-3">
        <label class="control-label" >Date:</label>
    </div>
    <div class="col-sm-9"> 
        <input style="width: 60%;" name="date" type="date" class="form-control">
    </div>

</div>
<br><br>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>-->
<form class="form-horizontal" method="post" action="<?php echo site_url('Cafe_Owner/save'); ?>">
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
<script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyAagQEfKTfr-TJTX-adxKcIk3hWZ6jDRy4&sensor=false&.js"></script>
<script type="text/javascript">
    var map = new google.maps.Map(document.getElementById('map_canvas'), {
    zoom: 15,
    center: new google.maps.LatLng(-37.815,144.961),
    mapTypeId: google.maps.MapTypeId.ROADMAP
});

var myMarker = new google.maps.Marker({
    position: new google.maps.LatLng(-37.815,144.961),
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
  <div class="form-group">
    <label for="">Restaurant/Cafe Name</label>
    <input type="text" name = "object_name" id="res_name" class="form-control typeahead_1" placeholder="Restaurant/Cafe Name" required>
	<input name="lat" type="hidden" class="form-control" id="lat" value="35.137879">
    <input name="lng" type="hidden" class="form-control" id="lng" value="-82.836914">
  </div>
  <div class="form-group">
    <label for="">Name Of Food:</label>
    <input type="text" class="form-control" name = "name_of_food" placeholder="Name Of Food" required>
  </div>
  <div class="form-group">
    <label for="">Quantity Of Food:</label>
    <input type="text" class="form-control" name = "quantity_of_food" placeholder="Quantity Of Food" required> 
  </div>
  <div class="form-group">
    <label for="">Date:</label>
    <input type="date" class="form-control" name = "date" required> 
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
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
				<script src="<?php echo base_url("includes/assets/js/typehead/bootstrap3-typeahead.min.js") ?>"></script>
				 <script>
                    var source_arr = <?php echo json_encode($arr);?>;
					$(document).ready(function() {

					  $('.typeahead_1').typeahead({
						  source: <?php echo json_encode($arr); ?>
					  }).blur(validateSelection);
                    });
                    function validateSelection() {
                        if(source_arr.indexOf($(this).val()) === -1) {
                            alert('Error : Please enter a valid Restaurant/Cafe name!');
                            $('.typeahead_1').val(''); 
                            $('#res_name').focus(); 
                        }
                    };
				 </script>
            </div>
        </div>
        <!---End-content---->

