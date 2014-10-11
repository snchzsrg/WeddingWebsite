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

<div id="registry">

	<h2>Our Registry</h2>

  	<a href="http://www.wanderable.com/"><img alt="My Wanderable Honeymoon Registry" id="pic_wanderable" 
  			class="registry_logo" src="img/wanderable_logo.png"></img></a>
	<p> As most of you probably know, the Bride and Groom are pretty much set up with most of life's necessary 
	gizmos and gadgets. Our real passion is travel, so we set up this registry is for our guests to be a part of creating 
	wonderful memories on our honeymoon. </p>	
	<br><br>
	
	<a href="http://www.amazon.com/"> <img alt="My Amazon.com Wedding Registry" id="pic_amazon" 
			class="registry_logo" src="img/amazon_logo.png"> </img> </a>
	<p> Since the happy couple will be living 20,000 leagues under the sea, we kindly request that all gifts be shipped to the address 
	provided on the registry. </p>
	<br><br>
	
</div> <!-- end div:registry -->

</div> <!-- end div:content -->

</div> <!-- end div:container -->

</body>
