<?php 

require("common.php"); 

// only visible to the MASTER user
if(empty($_SESSION['user']) or $_SESSION['user'] != $SESSION['MASTER_ID']) {  
	header("Location: logout.php");        
	exit("Redirecting to logout.php"); 
}

$sumNumAdults = $sumNumKids = $sumNumToddlers = 0;

// get total number of adults attending
$sql = sprintf("SELECT SUM(numAdults) 
					 AS sumNumAdults
					 FROM guests;");
	
$sum_select = $db->query($sql);
$sumNumAdults = $sum_select->fetchColumn();

// get total number of kids 5 to 11 attending
$sql = sprintf("SELECT SUM(numKids5to11) 
					 AS sumNumKids
					 FROM guests;");
	
$sum_select = $db->query($sql);
$sumNumKids = $sum_select->fetchColumn();

// get total number of kids 0 to 4 attending
$sql = sprintf("SELECT SUM(numKids0to4) 
					 AS sumNumToddlers
					 FROM guests;");
	
$sum_select = $db->query($sql);
$sumNumToddlers = $sum_select->fetchColumn();

$rspYes = $rspNo = $rspIdk = "";
$sumYes = $sumNo = $sumIdk = 0;

// create table headers for each person who accepted	
$rspYes = "<table style='width:400px'>";

$rspYes = $rspYes . "<tr>
						<td><b>First Name</b></td>
						<td><b>Last Name</b></td>
						<td><b>Adults</b></td>
						<td><b>Kids</b></td>
						<td><b>Toddlers</b></td>
					</tr>";
					
// create table headers for each person who declined
$rspNo = "<table style='width:400px'>";

$rspNo = $rspNo . "<tr>
						<td><b>First Name</b></td>
						<td><b>Last Name</b></td>
					</tr>";
					
// create table headers for each person who hasn't responded	
$rspIdk = "<table style='width:400px'>";

$rspIdk = $rspIdk . "<tr>
						<td><b>First Name</b></td>
						<td><b>Last Name</b></td>
					</tr>";

$sql = sprintf("SELECT * 
					 FROM guests;");

foreach ($db->query($sql) as $row) {
	
	// if this is the MASTER/Groom/Bride account, skip over for calculations
	if($row['id'] == $SESSION['MASTER_ID'] || 
		$row['email'] == 'INSERT_GROOM_EMAIL_HERE' || 
		$row['email'] == 'INSERT_BRIDE_EMAIL_HERE') {
		continue;	
	}
	
	// if response is YES
	else if($row['response'] == 1)	{
		$rspYes = $rspYes . 
					sprintf("<tr>
								<td>%s</td>
								<td>%s</td>
								<td>%s</td>
								<td>%s</td>
								<td>%s</td>
							</tr>",
							$row['firstname'],$row['lastname'],$row['numAdults'],$row['numKids5to11'],$row['numKids0to4']);
		++$sumYes;
	}

	// if response is NO
	else if($row['response'] == 0) {
		$rspNo = $rspNo . 
					sprintf("<tr>
								<td>%s</td>
								<td>%s</td>
							</tr>",
							$row['firstname'],$row['lastname']);
		++$sumNo;
	}

	// if no response has been given...
	else if($row['response'] == -1) {
		$rspIdk = $rspIdk . 
					sprintf("<tr>
								<td>%s</td>
								<td>%s</td>
							</tr>",
							$row['firstname'],$row['lastname']);
		++$sumIdk;
	}
}

$rspYes = $rspYes . "</table>";
$rspNo = $rspNo . "</table>";
$rspIdk = $rspIdk . "</table>";


include 'head.php'; 
?>

<body>

<div id="container">

<?php include 'general.php'; ?>

<div id="content">

<div id="rehearsal">

	<h2>R.S.V.P. Tracking</h2>
	
	<div id="tracking_summary">
	<p>
	Here's a quick summary:	
	</p>

	<?php
		echo "<b>Total Adults:</b>      " . $sumNumAdults . "<br>";
		echo "<b>Total Kids:</b>        " . $sumNumKids . "<br>";
		echo "<b>Total Toddlers:</b>    " . $sumNumToddlers . "<br>";
		echo "<b>Total People:</b>      " . ($sumNumToddlers+$sumNumKids+$sumNumAdults) . "<br>";
		echo "<br>";
		echo "<b> Total Accepted </b>  " . $sumYes . "<br>";
		echo "<b> Total Declined </b>   " . $sumNo . "<br>";
		echo "<b> Total Unanswered </b> " . $sumIdk . "<br>";
	?>	
	
	</div> <!-- end div:tracking_summary -->
	
	<div id="tracking_table">	
	
	<p>
	<br>Here's the list of guests who have said YES:<br>
	</p>	
	
	<?php	echo $rspYes; ?>		
	
	<p>
	<br>Here's the list of guests who have said NO:<br>
	</p>	
	
	<?php	echo $rspNo; ?>		
	
	<p>
	<br>Here's the list of guests who haven't responded:<br>
	</p>	
	
	<?php	echo $rspIdk; ?>
			
	</div> <!-- end div:tracking_table -->

</div> <!-- end div:rehearsal -->

</div> <!-- end div:content -->

</div> <!-- end div:container -->

</body>
