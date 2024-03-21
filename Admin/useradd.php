<?php
include 'db.php';

$username = $_POST['username'];
$password = $_POST['password'];
$type = $_POST['type'];
$name = $_POST['name'];


mysqli_query($conn, "INSERT INTO user (username, password, type, name) 
                    VALUES ('$username', '$password', '$type', '$name')");


if (mysqli_affected_rows($conn) > 0) {
    echo '<script>alert("Success")</script>';
} else {
    echo '<script>alert("Error: Failed to add user")</script>';
}


echo '<script>window.location="user.php"</script>';
?>
				
				