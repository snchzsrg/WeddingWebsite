<?php 
 
require("common.php"); 
      
if(empty($_SESSION['user'])) {  
	header("Location: login.php");        
	exit("Redirecting to login.php"); 
}

header("Location: home.php");

?>
