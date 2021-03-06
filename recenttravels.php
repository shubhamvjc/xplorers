<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Recent Travels</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.0.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="recenttravels.css">
</head>
<body background="img/bg1.jpg">
<!-- Header -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
	
	<button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
		<span class="navbar-toggler-icon"></span>
	</button>
	
	<div class="collapse navbar-collapse" id="collapse_target">
    <a class="navbar-brand" href="#"><img src="img/logo.png" width="60" height="60"/>XPLORERS&nbsp;Welcome, 
    <?php
    echo $_SESSION["usrname"];
    ?>
	</a>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
  			<a class="nav-link" href="home.php" target="_self"><i class="fa fa-home"></i>Home</a>
  		</li>
  		<li class="nav-item">
  			<a class="nav-link" href="booktrip.php" target="_self"><i class="fa fa-globe"></i>Book Trip</a>
  		</li>
  		<li class="nav-item">
  			<a class="nav-link active" href="recenttravels.php" target="_self"><i class="fa fa-clock-o"></i>Recent Travels</a>
  		</li>
  		<li class="nav-item">
  			<a class="nav-link" href="about.php" target="_self"><i class="fa fa-info-circle"></i>About</a>
  		</li>
  		<li class="nav-item">
  			<a class="nav-link" href="feedback.php" target="_self"><i class="fa fa-envelope-o"></i>Feedback</a>
  		</li>
      <li class="nav-item">
        <a class="nav-link" href="index.html" target="_self"><i class="fa fa-sign-out"></i>Logout</a>
      </li>
    </ul>
	</div>
</nav>
<!-- Main Content -->
<div id="rec" class="container">
	<h2>MEMORIES</h2>
	<div class="row">
		<!--MODAL 1-->
		<div class="col-lg-3">
			<img id="imgrec" src="img/egypt-trip.jpg">
			<!-- Trigger the modal with a button -->
			<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal1">VIEW MORE</button>

			<!-- Modal -->
			<div class="modal fade" id="myModal1" role="dialog">
			<div class="modal-dialog">
    
			<!-- Modal content-->
			<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<img id="imgmod" src="img/egypt-trip.jpg">
			</div>
			<div class="modal-body">
			<p>29<sup>TH</sup> DEC 2016-7<sup>TH</sup> JAN 2017  
			<br>9 DAYS
			<br>EGYPT
			</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
			</div>
      
			</div>
			</div>
		</div>
		
		<!--MODAL 2-->
		<div class="col-lg-3">
			
			<img id="imgrec" src="img/goa-trip.jpg">
			<!-- Trigger the modal with a button -->
			<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2">VIEW MORE</button>

			<!-- Modal -->
			<div class="modal fade" id="myModal2" role="dialog">
			<div class="modal-dialog">
    
			<!-- Modal content-->
			<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<img id="imgmod" src="img/goa-trip.jpg">
			</div>
			<div class="modal-body">
			<p>7<sup>TH</sup> JAN 2017-15<sup>TH</sup> JAN 2017  
			<br>9 DAYS
			<br>GOA
			</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
			</div>
      
			</div>
			</div>
			
		</div>
		
		<!--MODAL 3-->
		<div class="col-lg-3">
			
			<img id="imgrec" src="img/hongkong-macau.jpg">
			<!-- Trigger the modal with a button -->
			<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal3">VIEW MORE</button>

			<!-- Modal -->
			<div class="modal fade" id="myModal3" role="dialog">
			<div class="modal-dialog">
    
			<!-- Modal content-->
			<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<img id="imgmod" src="img/hongkong-macau.jpg">
			</div>
			<div class="modal-body">
			<p>21<sup>ST</sup> JAN 2017-1<sup>ST</sup> FEB 2017  
			<br>12 DAYS
			<br>HONG KONG - MACAU	
			</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
			</div>
      
			</div>
			</div>
		</div>
		
		<!--MODAL 4-->
		<div class="col-lg-3">
			
			<img id="imgrec" src="img/usa-trip.jpg">
			<!-- Trigger the modal with a button -->
			<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal4">VIEW MORE</button>

			<!-- Modal -->
			<div class="modal fade" id="myModal4" role="dialog">
			<div class="modal-dialog">
    
			<!-- Modal content-->
			<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<img id="imgmod" src="img/usa-trip.jpg">
			</div>
			<div class="modal-body">
			<p>7<sup>TH</sup> MAR 2017-14<sup>TH</sup> MAR 2017
			<br>8 DAYS
			<br>USA
			</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
			</div>
      
			</div>
			</div>
		</div>
		
		<!--MODAL 5-->
		<div class="col-lg-3">
			
			<img id="imgrec" src="img/bali-trip.jpg">
			<!-- Trigger the modal with a button -->
			<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal5">VIEW MORE</button>

			<!-- Modal -->
			<div class="modal fade" id="myModal5" role="dialog">
			<div class="modal-dialog">
    
			<!-- Modal content-->
			<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<img id="imgmod" src="img/bali-trip.jpg">
			</div>
			<div class="modal-body">
			<p>13<sup>TH</sup> JUN 2017-22<sup>ND</sup> JUN 2017  
			<br>10 DAYS
			<br>BALI					
			</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
			</div>
      
			</div>
			</div>
		</div>
		
		<!--MODAL 6-->
		<div class="col-lg-3">
			
			<img id="imgrec" src="img/rajasthan-trip.jpg">
			<!-- Trigger the modal with a button -->
			<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal6">VIEW MORE</button>

			<!-- Modal -->
			<div class="modal fade" id="myModal6" role="dialog">
			<div class="modal-dialog">
    
			<!-- Modal content-->
			<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<img id="imgmod" src="img/rajasthan-trip.jpg">
			</div>
			<div class="modal-body">
			<p>25<sup>TH</sup> MAY 2017-5<sup>TH</sup> JUN 2016  
			<br>11 DAYS
			<br>RAJASTHAN					
			</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
			</div>
      
			</div>
			</div>
		</div>
		
		<!--MODAL 7-->
		<div class="col-lg-3">
			
			<img id="imgrec" src="img/singapore-trip.jpg">
			<!-- Trigger the modal with a button -->
			<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal7">VIEW MORE</button>

			<!-- Modal -->
			<div class="modal fade" id="myModal7" role="dialog">
			<div class="modal-dialog">
    
			<!-- Modal content-->
			<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<img id="imgmod" src="img/singapore-trip.jpg">
			</div>
			<div class="modal-body">
			<p>28<sup>TH</sup> DEC 2017-2<sup>ND</sup> JAN 2018  
			<br>6 DAYS
			<br>SINGAPORE				
			</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
			</div>
      
			</div>
			</div>
		</div>
	</div>
	</div>
<!-- Footer -->
<nav class="navbar navbar-expand-md navbar-light bg-light">
<!-- Collapsing Button -->  
  <button class="navbar-toggler" data-toggle="collapse" data-target="#collapseTarget">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse footer" id="collapseTarget">
    <a href="#" class="fa fa-facebook"></a>
    <a href="#" class="fa fa-twitter"></a>
    <a href="#" class="fa fa-instagram"></a>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="feedback.html"><h6 style="color: black;">SEND FEEDBACK FOR REVIEWS AND UPCOMING TRIPS.</h6></a>
      </li>
    </ul>
  </div>
</nav>
</body>
</html>
