<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Fonts -->
<link rel="dns-prefetch" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="style.css">

<title>COURSE PROJECT - PHASE TWO</title>

 <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
	<a href="menu.php" title="Social Media App" class="navbar-brand">Social Media App</a>
	
	<ul class="navbar-nav ml-auto">
		<?php 
		if (!empty($_SESSION['userID'])) { ?>
			<li><a class="nav-link" href="viewDB.php" title="Movies">Accounts</a></li>
			<li><a class="nav-link" href="logout.php" title="Logout">Logout</a></li>
		<?php 
		}
		else { ?>			
			<li><a class="nav-link" href="register.php" title="Register">Register</a></li>
			<li><a class="nav-link" href="login.php" title="Login">Login</a></li>
		<?php } ?>
	</ul>
</nav>