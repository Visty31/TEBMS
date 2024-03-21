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

  $q = mysqli_query($conn, "SELECT Prev FROM tempo_bill WHERE Tenant = '$fname'");
    $results = mysqli_fetch_array($q);
    $previous = $results['Prev'];

  date_default_timezone_set('Africa/Nairobi');

?>

<p><h1>Tenant Bill</h1></p>
 <h1>Name: <?php echo $fname.'&nbsp;' .$lname.'&nbsp;'?></h1>
<p><?php $date=date('y/m/d H:i:s');
 echo $date;?></p>
 <form method="post" action="addbill.php">
 <table width="346" border="1">
  <tr>
  <input type="hidden" name="owners_id" value="<?php echo $id; ?>" />
  <input type="hidden" name="date" value="<?php echo $date; ?>" />
    <td width="118">Previous Reading:</td>
    <td width="66"><input type="text" name="prev"  value="<?php echo $previous; ?>" /></td>
    <td>mI</td>
  </tr>
  <tr>
    <td>Present Reading:</td>
    <td><input type="text" name="pres"  /></td>
    <td>ml</td>
  </tr>
  <tr>
    <td>Unit Price</td>
    <td><input type="text" name="unit" value=""  /></td>
    <td>Kshs</td>
  </tr>
   <tr>
    <td><input type="submit" name="total" value="Add"  /></td>
  </tr>
</table>
</form>