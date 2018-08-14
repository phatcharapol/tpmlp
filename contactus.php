<?php
include("header.php");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Tpmlp</title>
</head>
<body>
	 <nav class="navbar navbar-inverse">
    <div class="container-fluid">
     
        <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarNav">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="index.php">TPMLP</a>
    </div>
  

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="nav navbar-nav">
          <li><a href="homepage.php">Home</a></li>
          <li><a href="product.php">Product</a></li>
          <li><a href="customer.php">Customer</a></li>
          <li><a href="aboutus.php">About Us</a></li>
          <li class="active"><a href="contactus.php">Contact US</a></li>
        </ul>
      </div>
    </div>
  </nav>

<div class="container">
<div class="col-md-6">
    <div class="form-area">  
        <form role="form">
        <br style="clear:both">
                    <h3 style="margin-bottom: 25px; text-align: center;">Contact Form</h3>
    				<div class="form-group">
						<input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
					</div>
                    <div class="form-group">
                    <textarea class="form-control" type="textarea" id="message" placeholder="Message" maxlength="140" rows="7"></textarea>
                        <span class="help-block"><p id="characterLeft" class="help-block ">You have reached the limit</p></span>                    
                    </div>
            
        <center><button type="button" id="submit" name="submit" class="btn btn-primary">Submit Form</button></center>
        </form>
    </div>
</div>
<div class="col-md-6">
	  <br style="clear:both">
	 <h3 style="margin-bottom: 25px; text-align:center;">Location</h3>
	 <div id="map"></div>
</div>
</div>
	
	<script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 8
        });
      }
    </script>
    	 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDhxI30eP9Q-nBMjNrLG_kjwG-b4yjW1a0&callback=initMap"
    async defer></script>
   
</body>
</html>