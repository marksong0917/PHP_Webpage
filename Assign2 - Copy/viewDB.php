  <?php require('header.php'); ?>

  <a href="Account.php"> Add New Account </a>

  <?php

  ob_start();

  try {
    // connect to the db
    require('db.php');

    //set up our sql query
    $sql = "SELECT * FROM database1;";

    //prepare

    $cmd = $conn->prepare($sql);

    // execute

    $cmd->execute();

    //use fetchAll to store our results

    $database1 = $cmd->fetchAll();

    //

    echo '<table class="table">
                    <thread>
                    <th> Email </th>
                    <th> Location </th>
                    <th> Skills </th>
                    <th> Profile </th>
                    <th> Edit </th>
                    <th> Delete </th>
                    </thread>
                    <tbody>';

    //loop thorugh the data

    foreach($database1 as $datab) {
      echo '<tr><td>' . $datab['userEmail'] . '</td>';
      echo '<td>' . $datab['userLocation'] . '</td>';
      echo '<td>' . $datab['userSkills'] . '</td>';
      echo '<td>' . $datab['userProfile'] . '</td>';

      echo '<td><a href="account.php?userID=' . $datab['userID'] . '">Edit</a></td>';

      echo '<td><a href="deleteProduct.php?userID=' . $datab['userID'] . '" onclick = " return confirm (\'Are you sure? \');"> Delete </a></td></tr>';

    }

    echo '</tbody></table>';

    // close the db connection
    $cmd->closeCursor();

  }

  catch(PDOExcetion $e) {
    echo "<p> There was an error with your form submission </p>";

  }
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
</head>

<body>
  <form action="search.php" method="get">
    <label for="usersearch"> Account Search</label>
    <input name="usersearch" id="usersearch" type="text">
    <input type="submit" name="submit" value="Search">
  </form>
</body>
</html>