<?php session_start(); ?>
<?php
 include 'db.php';
$owner_id =$_REQUEST['id'];

$result = mysqli_query($conn,"SELECT * FROM owners WHERE id  = '$owner_id'");
$test = mysqli_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
				$id=$test['id'] ;
				$fname=$test['fname'] ;
				$lname= $test['lname'] ;					
				$first=$test['first'] ;
				$room=$test['room'] ;
				$meter=$test['meter'] ;
				$contact=$test['contact'] ;

?>
<form action="delecex.php" method="post">
<h4>Are you sure you want to delete <br /></h4><h5><?php echo $fname; ?></h5>
<input type="hidden" name="id" value="<?php echo $id; ?>" />
<input type="submit" nsme="ok" value="Delete">
</form>