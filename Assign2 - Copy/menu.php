<?php ob_start();

// authentication check
require_once('auth.php');

// set the page title
$page_title = null;
$page_title = 'Main Menu';

// embed the header
require_once('header.php');
?>

<main class="container">

   <h1>Social Media Application</h1>

   <ul class="list-group">
      <li class="list-group-item"><a href="viewDB.php" title="Movies">Accounts</a></li>
   </ul>
</main>

<?php 
// embed footer
require_once('footer.php');
ob_flush();
?>