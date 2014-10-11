<?php 

require("common.php"); 
      
if(empty($_SESSION['user'])) {  
	header("Location: login.php");        
	exit("Redirecting to login.php"); 
}

include 'head.php'; 
?>

<body>

<div id="container">

<?php include 'general.php'; ?>

<div id = "content">

<div id="details">

	<h2>Ceremony & Reception</h2>

	<div id="details_location">
		<h3>Location</h3>
		
		<p>The wedding ceremony and reception will be held at:</p>
		
		<p><a href="http://en.wikipedia.org/wiki/Disneyland">
			Disneyland</a><br>
			1313 Disneyland Dr<br>
			Anaheim, CA 92802</p>
			
		<p>
			The ceremony will begin at 5:00pm. The reception will follow and end at 11:00pm.		
		</p>
			
		<p>Free parking available at Autopia.</p>

	</div>

	<div id="details_attire">
		<h3>Attire</h3>
		
		<p> Venue rules state: </p>
		
		<p><b>Ladies</b>: No polkadots. That's what Minnie is wearing.</p>

		<p><b>Gentlemen</b>: Wear either an explorer's jacket like Chip or a Hawaiian shirt like Dale.</p>
			
		<p>The ceremony will be held outdoors. The reception will be held indoors. Late May weather 
		at Disneyland has a typical high of gorgeous and a low of about awesome.</p>
		 
	</div>

	<div id="details_accomdations">
		<h3>Accommodations</h3>
		
		<p> Because there are so many lodging options for our out-of-town guests, we did not reserve 
		any blocks in any hotels. However, we do recommend the Hollywood Tower Hotel.</p>
		
		
		<p><a href="http://en.wikipedia.org/wiki/The_Twilight_Zone_Tower_of_Terror">
		Hollywood Tower Hotel</a><br>
		1313 Disneyland Dr<br>
		Anaheim, CA 92802</p>
		
		<p> Ask for Rod Serling at checkin. He gives an amazing introduction into the story of the hotel. </p>
		
	</div>

</div> <!-- end div:details -->

</div> <!-- end div:content -->

</div> <!-- end div:container -->

</body>

