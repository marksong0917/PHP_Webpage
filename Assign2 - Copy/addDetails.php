<?php ob_start();

// auth check
require_once('auth.php');

// header
$page_title = null;
$page_title = 'Saving your Details...';
require_once('header.php');

// save form inputs into variables
$userID = $_POST['userID'];
$userEmail = $_POST['userEmail']; 
$userLocation = $_POST['userLocation'];
$userSkills = $_POST['userSkills'];
$userProfile = $_POST['userProfile'];

// create a variable to indicate if the form data is ok to save or not
$ok = true;

if (empty($userEmail)) {
	// notify the user
	echo 'Email is required<br />';
	
	// change $ok to false so we know not to save
	$ok = false;
}
if (empty($userLocation)) {
	echo 'Location is required<br />';
	$ok = false;
}

if (empty($userSkills)) {
	// notify the user
	echo 'Skills is required<br />';
	
	// change $ok to false so we know not to save
	$ok = false;
}

if (empty($userProfile)) {
	// notify the user
	echo 'profile is required<br />';
	
	// change $ok to false so we know not to save
	$ok = false;
}

if ($ok == true) {
	// connect to the database
	require_once('db.php');
	
	if (empty($userID)) {
		// set up the SQL INSERT command
		$sql = "INSERT INTO database1 (userEmail, userLocation, userSkills, userProfile) VALUES (:userEmail, :userLocation, :userSkills, :userProfile)";
	}
	else {
		// set up the SQL UPDATE command to modify the existing movie
		$sql = "UPDATE database1 SET userEmail = :userEmail, userLocation = :userLocation, userSkills = :userSkills, userProfile = :userProfile WHERE userID = :userID";
	}
	
	// create a command object and fill the parameters with the form values
	$cmd = $conn->prepare($sql);
	$cmd->bindParam(':userEmail', $userEmail, PDO::PARAM_STR, 111);
	$cmd->bindParam(':userLocation', $userLocation, PDO::PARAM_STR, 111);
	$cmd->bindParam(':userSkills', $userSkills, PDO::PARAM_STR, 111);
	$cmd->bindParam(':userProfile', $userProfile, PDO::PARAM_STR, 111);
	
	// fill the movie_id if we have one
	if (!empty($userID)) {
		$cmd->bindParam(':userID', $userID, PDO::PARAM_INT);
	}
	
	// execute the command
	$cmd->execute();
	
	// disconnect from the database
	$conn = null;
	
	// show confirmation
	echo "Details Saved";
}

require_once('footer.php');
ob_flush();
?>
