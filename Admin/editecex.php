<?php
include 'db.php';
$owner_id =$_REQUEST['id'];
	$id = $_POST['id'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$first = $_POST['first'];
	$room=$_POST['room'] ;
	$meter=$_POST['meter'] ;
	$contact=$_POST['contact'] ;

	mysqli_query($conn,"UPDATE owners SET id ='$id', fname ='$fname',
		 fname ='$fname',first ='$first', room='$room', meter='$meter',contact='$contact' WHERE id = '$owner_id'");
			

		 echo "<script>windows: location='billing.php'</script>";				
			