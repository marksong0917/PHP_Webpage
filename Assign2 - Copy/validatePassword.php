<?php ob_start(); ?>
<html>
<body>

<?php
$username = $_POST['username'];
$password = $_POST['password'];

require('db.php');

$sql = "SELECT userID FROM user WHERE username = :username AND password = :password";

$cmd = $conn->prepare($sql);
$cmd->bindParam(':username', $username);
$cmd->bindParam(':password', $password);
$cmd->execute();
$users = $cmd->fetchAll();

$count = $cmd->rowCount();

if ($count == 0) {
    echo 'Invalid Login';
    exit();
}
else {
    session_start(); // access the existing session

    foreach  ($users as $user) {
        $_SESSION['userID'] = $user['userID'];
    }
}

$conn = null;

header('location: viewDB.php');
?>

</body>
</html>
<?php ob_flush(); ?>

