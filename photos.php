<?php 

require("common.php"); 
      
if(empty($_SESSION['user'])) {  
	header("Location: login.php");        
	exit("Redirecting to login.php"); 
}

include 'head.php'; ?>

<body>

<div id="container">

<?php include 'general.php'; ?>

<div id = "content">

<div id="photos">

	<h2>Engagement Photos</h2>
	
	<a href="img/ring.jpg"> <img id="pic_ring" class="engagement_photo" src="img/ring_480.jpg"> </img> </a>
	<p style="text-align:center"> engagement ring sitting in a blooming tulip </p>
		
	<a href="img/water.jpg"> <img id="pic_water" class="engagement_photo" src="img/water_480.jpg"></img> </a>
	<p style="text-align:center"> touching a random pool of water </p>

	<!-- MANY MORE PHOTOS CAN BE ADDED BY FOLLOWING THE SAME SCHEME ABOVE -->
	
</div> <!-- end div:photos -->

</div> <!-- end div:content -->

</div> <!-- end div:container -->

</body>
