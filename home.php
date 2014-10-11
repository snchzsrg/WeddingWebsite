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

</div>

</body>
