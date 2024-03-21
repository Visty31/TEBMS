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
        $meter= $test['meter'] ;  
				$contact=$test['contact'] ;

?>

<p><h1>Tenants Update</h1></p>
  <form method="post" action="editecex.php">
<table width="342" border="0">
  <tr>
    <td width="107">Owners Id:</td>
    <td width="315"><input type="text" name="id" value="<?php echo $id; ?>" /></td>
    
  </tr>
  <tr>
    <td>First Name:</td>
    <td><input type="text" name="fname"value="<?php echo $fname; ?>" /></td>
   </tr>
  <tr>
    <td>Last Name:</td>
    <td><input type="text" name="lname" value="<?php echo $lname; ?>"/></td>
    </tr>
    
    <tr>
    <td>First Reading:</td>
    <td><input type="text" name="first" value="<?php echo $first; ?>"/></td>
 
  </tr>
  <tr>
    <td>House Number:</td>
    <td><input type="text" name="room" value="<?php echo $room; ?>" /></td>
  
  </tr>
  <tr>
    <td>Meter Number:</td>
    <td><input type="text" name="meter"value="<?php echo $meter; ?>" /></td>
    </tr>
  <tr>
  <td>Contact:</td>
    <td><input type="text" name="contact" value="<?php echo $contact; ?>"/></td></tr>
 <tr>
		<td>&nbsp;</td>
		<td><input type="submit" name="save" value="Edit"  /></td>
	</tr>
</table>