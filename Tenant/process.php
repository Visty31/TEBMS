<?php
session_start();

include 'db.php'; 

$fname = $_POST['fname'];
$room = $_POST['room'];


$ownerLogin = mysqli_query($conn, "SELECT * FROM owners WHERE fname = '" . $_POST['fname'] . "' AND room = '" . $_POST['room'] . "'");
$ownerRow = mysqli_fetch_array($ownerLogin);


if ($ownerRow) {
    $_SESSION['id'] = $ownerRow['id'];
    echo '<script>window.location="bill.php";</script>';
    exit();
    } 
else {
    header("location: index.php?err");
    exit();
  }
?>
