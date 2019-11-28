<?php

// authentication check
session_start();
if (empty($_SESSION['userID'])) {
	header('location:login.php');
	exit();
}


?>