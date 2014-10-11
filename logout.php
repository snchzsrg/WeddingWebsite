<?php  
	require("common.php");  
	unset($_SESSION['user']);
	unset($_SESSION['firstname']);
	unset($_SESSION['lastname']);
	unset($_SESSION['email']); 
	unset($_SESSION['weddingparty']);
	unset($_SESSION['rehearsaldinner']);
	header("Location: login.php"); 
	exit("Redirecting to: login.php");
