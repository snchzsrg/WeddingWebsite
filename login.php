<?php

require("common.php");

$last = $email = "";
$lastErr = $emailErr = "";
$feedback = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	$input_invalid = false;	
	
	if (empty($_POST["last"])) {
		$lastErr  = "Last Name is Required";
		$input_invalid = true;
	}
	else {
		$last = test_input($_POST["last"]);
		if (!preg_match("/^[a-zA-Z ]*$/",$last)) {
			$lastErr = "Only letters and white space allowed";
			$input_invalid = true;		
		}
	}
	
	if (empty($_POST["email"])) {
		$emailErr  = "Email is Required";
		$input_invalid = true; 
	}
	else {
		$email = test_input($_POST["email"]);
		if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
			$emailErr = "Invalid email format";
			$input_invalid = true;		
		}
	}

	$feedback = "Invalid credentials";
		
	if(!$input_invalid) {
		
		$sql = "
			SELECT *
			FROM guests
			WHERE lastname='$last' AND email='$email';
		";
		
		foreach ($db->query($sql) as $row) {
			$_SESSION['user']            = $row['id'];
			$_SESSION['firstname']       = $row['firstname'];
			$_SESSION['lastname']        = $row['lastname'];
			$_SESSION['email']           = $row['email'];
			$_SESSION['weddingparty']    = $row['weddingparty'];
			$_SESSION['rehearsaldinner'] = $row['rehearsaldinner'];

			$feedback = "Welcome " . $_SESSION['firstname'] . "<br>";

			// update the timestamp to track latest visit
			$sql = "
				UPDATE guests
				SET lastvisit=now()
				WHERE id=?;
			";			
			$q = $db->prepare($sql);
			$q->execute(array($row['id']));
			
			// redirect the MASTER account to the tracking site
			if($_SESSION['user'] == 31416) {
				header("Location: http://127.0.0.1/lt4/tracking.php");
				exit("Redirecting to tracking.php");
			}
			
			header("Location: http://127.0.0.1/lt4/home.php");
			exit("Redirecting to home.php");
		}
	}
	$feedback = $feedback . "<br><br>Need help? Send an email to the_guy_who_posted_this <br>";
}

function test_input($data)
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

include 'head.php';

?>

<div id='login'>
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
	Last Name: <input type='text' name='last'  maxlength='60' >
	<span class="error"> <?php echo $lastErr;?></span><br>
	Email: <input type='text' name='email' maxlength='60' >
	<span class="error"> <?php echo $emailErr;?></span><br>
	<input type="submit" name="submit" value="Submit">
	<?php echo $feedback;?><br>	
	</form>
</div>
