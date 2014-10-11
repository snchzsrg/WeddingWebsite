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

<div id="content">

<div id="aboutus">
	<h2> About the Happy Couple </h2>

	<h3 class="story_header"> Bride  </h3>
	<a href="img/bride.jpg"> <img id="pic_bride" class="engagement_photo"  src="img/bride_480.jpg"> </img> </a>
	<p class="story_response"> 
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt 
		ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco 
		laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in 
		voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat 
		non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	</p>

	<h3 class="story_header"> Groom  </h3>
	<a href="img/groom.jpg"> <img id="pic_groom" class="engagement_photo" src="img/groom_480.jpg"> </img> </a>
	<p class="story_response"> 
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt 
		ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco 
		laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in 
		voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat 
		non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	</p>
	
	<p id="editor_note"> 
		Many photos on this example of what the site was are obviously not the ones that came with the 
		original site, otherwise I'm sure my wife would have said "I don't" instead of "I do".
	</p>
		
</div> <!-- end div:aboutus -->

</div> <!-- end div:content -->

</div> <!-- end div:container -->

</body>
