<?php 

require("common.php"); 
      
if(empty($_SESSION['user'])) {  
	header("Location: login.php");        
	exit("Redirecting to login.php"); 
}

if(!$_SESSION['rehearsaldinner']) {
	header("Location: home.php");
	exit("Redirecting to home.php");
}

include 'head.php'; 
?>

<body>

<div id="container">

<?php include 'general.php'; ?>

<div id="content">

<div id="rehearsal">

	<h2>Rehearsal (and Dinner)</h2>
	
	<p>
	If you're seeing this page, it's because you're invited to the wedding 
	rehearsal AND its associated dinner.
	</p>	
	
	<div id="rehearsal_location">
		<h3>Location</h3>
		
		<p>The rehearsal and dinner will occur near the wedding venue:</p>
		
		<p><a href="http://en.wikipedia.org/wiki/The_Twilight_Zone_Tower_of_Terror">
		Hollywood Tower Hotel</a><br>
		1313 Disneyland Dr<br>
		Anaheim, CA 92802</p>
			
		<p><b>Date:</b> Friday, May 23, 2014 </p>
		<p><b>Time:</b> 6:00pm </p>
			
		<p>
		The dinner will be a Chinese Buffet (and there are vegetarian options). 
		If you're visiting from out of town, please feel free to bring your +1. 
		We won't make them wait in the car. :P
		</p>
			
		<p>Free parking available at Autopia.</p>

	</div>

</div> <!-- end div:details -->

</div> <!-- end div:content -->

</div> <!-- end div:container -->

</body>

