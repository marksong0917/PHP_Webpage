<?php
ob_start();

$userID = $_GET['userID'];

require('db.php');

//set up query

$sql = "DELETE FROM database1 WHERE userID = :userID;";

//prep

$cmd = $conn->prepare($sql);

//bind param
$cmd->bindParam(':userID' , $userID);

// execute
$cmd->execute();
$cmd->closeCursor();
//header('location:database.php');

ob_flush();
?>
