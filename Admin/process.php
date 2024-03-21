<?php
session_start();

include 'db.php'; 

$username = $_POST['username'];
$password = $_POST['password'];


$login = mysqli_query($conn, "SELECT * FROM user WHERE username = '" . $_POST['username'] . "' AND password = '" . $_POST['password'] . "'");
$row = mysqli_fetch_array($login);


if ($row) {
    $_SESSION['id'] = $row['id'];
    echo '<script>window.location="billing.php";</script>';
    exit();
    } 
else {
    header("location: index.php?err");
    exit();
  }
?>