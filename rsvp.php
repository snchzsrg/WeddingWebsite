<?php 

require("common.php"); 
      
if(empty($_SESSION['user'])) {  
	header("Location: login.php");        
	exit("Redirecting to login.php"); 
}

$sql = sprintf("SELECT * 
					 FROM guests 
					 WHERE lastname='%s' AND email='%s';", 
					 $_SESSION['lastname'], $_SESSION['email']);
	
foreach ($db->query($sql) as $row) {
	$response     = $row['response'];
	$numAdults    = $row['numAdults'];
	$numKids0to4  = $row['numKids0to4'];
	$numKids5to11 = $row['numKids5to11'];
	$dietary      = $row['dietary'];
	$message      = $row['message'];
}

$errResponse = "";
$isRsvpOpen = false;

if ($_SESSION['user'] >= 80) 
{
	$isRsvpOpen = true;
}

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	$input_invalid = false;
	$db_result = false;
	
	// check that one of the two options was selected
	if (empty($_POST["rsvp_response"])) {
		$errResponse  = $errResponse . "- must pick one of these options";
		$input_invalid = true;
	}
	
	// if attending, check that only numbers were input
	elseif($_POST["rsvp_response"] == "of course, can't wait!") {	
		$numbers = array($_POST["rsvp_numadults"],$_POST["rsvp_numkids0to4"],$_POST["rsvp_numkids5to11"]);		
		foreach ($numbers as $num)
		{
			if(!isValidNumber($num))
			{
				$input_invalid = true;
				$errResponse = $errResponse . "- must input a valid number for attendees ";
			}
		}
	
		if (empty($_POST["rsvp_numadults"])) {
			$input_invalid = true;
			$errResponse = $errResponse . "- you must have at least ONE adult attending ";
		}

		$response     = 1;
		$numAdults    = $_POST["rsvp_numadults"];
		$numKids0to4  = $_POST["rsvp_numkids0to4"];
		$numKids5to11 = $_POST["rsvp_numkids5to11"];
		$dietary      = $_POST["rsvp_dietary"];
		$message      = $_POST["rsvp_message"];
	}

	// if not attending	
	else {
		$response     = 0;
		$numAdults    = 0;
		$numKids0to4  = 0;
		$numKids5to11 = 0;
		$dietary      = "";
		$message      = $_POST["rsvp_message"];
	}

	if(!$input_invalid) 
	{
		$sql = sprintf("UPDATE guests
							 SET response=%s, numadults=%s, numkids0to4=%s, numkids5to11=%s, dietary='%s', message='%s'
							 WHERE id=%s;",
							$response, $numAdults, $numKids0to4, $numKids5to11, 
							test_input($dietary), test_input($message), $_SESSION['user']);
		
		$q = $db->prepare($sql);
		$db_result = $q->execute(array($row['id']));
		
		if(!$db_result) {
			$errResponse = "Error updating the database...<br>" . $errResponse;
		} 
	}
}

function test_input($data)
{
	$data = trim($data);
	$data = addslashes($data);
	return $data;
}

function isValidNumber($num) {
	return ctype_digit($num) && (int) $num > -1;	
}

include 'head.php'; ?>

<script type="text/javascript" >
function pageload() {
	yesnoCheck();
}

function yesnoCheck() {
    if (document.getElementById('rsvp_isntAttending').checked) {
        document.getElementById('rsvp_displayifyes').style.display = 'none';
    } 
    else if(document.getElementById('rsvp_isAttending').checked) {
        document.getElementById('rsvp_displayifyes').style.display = 'inline';
   }
}
</script>

<body onload="javascript:pageload()">

<div id="container">

<?php include 'general.php'; ?>

<div id = "content">

<div id="rsvp">

	<h2>R.S.V.P.</h2>
	
	<?php
	
	if($isRsvpOpen) {
		echo "<p> Will you be attending our big day, " . $_SESSION['firstname'] . "? </p>";
	}
	else {
		echo "<p id='rsvp_closed' > <b>The RSVP window has closed. To make any modifications to your response, please email the site admin at INSERT_SITE_ADMIN_EMAIL_HERE. Your RSVP reads as follows:</b> </p>";
	}
	
	?>
	
	<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" >	
	
	<input type="radio" name="rsvp_response" id="rsvp_isAttending" onclick="javascript:yesnoCheck();"
		<?php if ($response) echo "checked";?> 
		value="of course, can't wait!"> of course, can't wait! <br>

	<input type="radio" name="rsvp_response" id="rsvp_isntAttending" onclick="javascript:yesnoCheck();" 
		<?php if (!$response) echo "checked";?>
		value="so sorry, unable to attend"> so sorry, unable to attend <br>
		
	<br>	
	<span id="rsvp_displayifyes"> 
	<input class="rsvp_number" type="text" name="rsvp_numadults" value="<?php echo $numAdults;?>"> # of adults (including yourself and children 12+) <br> 
	<input class="rsvp_number" type="text" name="rsvp_numkids5to11" value="<?php echo $numKids5to11;?>"> # of children aged 5-11 <br>
	<input class="rsvp_number" type="text" name="rsvp_numkids0to4" value="<?php echo $numKids0to4;?>"> # of children aged 0-4 <br>
	<br>
	<p> Dinner will be a Mexican buffet. Please indicate any dietary restrictions: </p>
	<input class="rsvp_text" type="text" name="rsvp_dietary" value="<?php echo htmlentities(stripslashes($dietary));?>"><br>
	</span>	
	
	<br>
	<p> Message to Bride & Groom: </p>
	<textarea name="rsvp_message" rows="5" cols="40"><?php echo stripslashes($message);?></textarea> <br>
	
	<?php
	if($isRsvpOpen) {
		echo '<input type="submit" name="submit" id="submit" class="button-primary" value="Submit"/>';
	}
	?> 
	
	<?php 
		if(!empty($errResponse)) {
			echo "<p id='rsvp_error' style='color: red;'> <b>ERROR</b> " . $errResponse . "</p>";
		}
	
		if ($db_result) {
			echo "<p style='color:green;text-align:center;'> <b>Your response has been successfully 
			recorded.</b> </p>";
		}
	?>
	
	<p id="editor_note"> * if problems occur, please email the_guy_who_posted_this * </p> 
	
	</form>

</div> <!-- end div:rsvp -->

</div> <!-- end div:content -->

</div> <!-- end div:container -->

</body>
