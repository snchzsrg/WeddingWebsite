<?php 

require("common.php"); 
      
if(empty($_SESSION['user'])) {  
	header("Location: login.php");        
	exit("Redirecting to login.php"); 
}

?>

<div id="general">
	
	<div id="about">
		<h1 id="about_name">Bride & Groom</h1>
		<h2 id="about_date"><i>Sunday, May 25, 2014</i></h2>
		<h3 id="about_location"><i>Disneyland</i></h3>	
	</div> <!-- end div:about -->

	<h3 id="countdown">
		<script type="text/javascript" >
			var target = new Date("May 25, 2014");
			var today  = new Date();
			
			var days = (target - today) / 86400000;
			
			if      (days >= 1) { countdown.innerHTML	= Math.ceil(days) + " Days To Wedding";}
			else if (days >= 0) { countdown.innerHTML	= Math.ceil(days) + " Day to Wedding";}
			else if (days >= -1){ countdown.innerHTML = Math.ceil(days)  + " Today's the Big Day";}
			else if (days >= -2){ countdown.innerHTML = Math.abs(Math.ceil(days))  + " Day Since Wedding";}
			else					  { countdown.innerHTML = Math.abs(Math.ceil(days))   + " Days Since Wedding";}			
			
		</script>
	</h3>

	<div id="navigation">
		<ul id="navigation_links">
			<li> 
				<a id="navigation_links_home" href="home.php">
					Home
				</a>
			</li>
<?php
	if($_SESSION['rehearsaldinner']) {
	echo '<li> 
				<a id="navigation_links_rehearsal" href="rehearsal.php">
					Rehearsal (and Dinner) 
				</a>
			</li>';			
	}
?>
			<li> 
				<a id="navigation_links_details" href="details.php">
					Ceremony & Reception
				</a>
			</li>
			<li> 
				<a id="navigation_links_aboutus" href="aboutus.php">
					About the Happy Couple
				</a>
			</li>
			<li> 
				<a id="navigation_links_ourstory" href="ourstory.php">
					Their Story (Abridged)
				</a>
			</li>
			<li> 
				<a id="navigation_links_photos" href="photos.php">
					Engagement Photos
				</a>
			</li>
			<li> 
				<a id="navigation_links_weddingparty" href="weddingparty.php">
					Wedding Party
				</a>
			</li>
			<li> 
				<a id="navigation_links_registry" href="registry.php">
					Registry
				</a>
			</li>
			<li> 
				<a id="navigation_links_hashtag" href="hashtag.php">
					#WEDDINGHASHTAG
				</a>
			</li>
			<li> 
				<a id="navigation_links_rsvp" href="rsvp.php">
					R.S.V.P.
				</a>
			</li>
			<li> 
				<a id="navigation_links_logout" href="logout.php">
					Logout
				</a>
			</li>
		</ul>
	</div>  <!-- end div:navigation -->
		
</div>  <!-- end div:general -->
