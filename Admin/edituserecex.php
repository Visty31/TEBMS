<?php
include 'db.php';
$user_id =$_REQUEST['id'];
	$id = $_POST['id'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$type = $_POST['type'];
	$name = $_POST['name'];
	

	mysqli_query($conn,"UPDATE user SET id ='$id', username ='$username',
		 password ='$password',type ='$type' ,name ='$name' WHERE id = '$user_id'");
			

		 echo "<script>windows: location='user.php'</script>";				
			