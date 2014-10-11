<?php
	session_start();

	/** ** ** ** for development on the laptop ** ** ** ** ** ** ** ** **
	$username = "username"; 
	$password = "password"; 
	$host = "host"; 
	$dbname = "dbname";
	$options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
	** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** ** **/

	$username = "leonardo"; 
	$password = "donatello";
	$host     = "raphael"; 
	$dbname   = "michaelangelo";
	$options  = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
	
	$SESSION['MASTER_ID'] = 31416;  // used this "MASTER_ID" for local testing

	try { 
		$db = new PDO("mysql:host={$host};dbname={$dbname};charset=utf8", $username, $password, $options); 
	} 
	catch(PDOException $ex) { 
		die("Failed to connect to the database: " . $ex->getMessage()); 
	} 
     
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
     
	$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); 
     
	if(function_exists('get_magic_quotes_gpc') && get_magic_quotes_gpc()) { 
		function undo_magic_quotes_gpc(&$array) {
			foreach($array as &$value) { 
				if(is_array($value)) {
					undo_magic_quotes_gpc($value); 
				} 
				else { 
					$value = stripslashes($value); 
				} 
			} 
		} 
     
		undo_magic_quotes_gpc($_POST); 
		undo_magic_quotes_gpc($_GET); 
		undo_magic_quotes_gpc($_COOKIE); 
    }
