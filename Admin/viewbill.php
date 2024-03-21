<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap/dist/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap/dist/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap/dist/css/bootstrap-theme.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap/dist/css/bootstrap-theme.min.css" />
</head>

<h4>Note: Bill Amount = Total Consumption * Price/unit<br />&copy; 2024</h4>
<?php
include 'db.php';
$id =$_REQUEST['id'];
$result = mysqli_query($conn,"SELECT * FROM bill where owners_id='$id'");

date_default_timezone_set('Africa/Nairobi');


echo "<table class=\"table table-striped table-hover table-bordered\">
<tr>
<th>Id</th>
<th>Previous Reading</th>
<th>Present Reading</th>
<th>Consumption</th>
<th>Unit Price</th>
<th>Date</th>
<th>Bill Amount</th>
<th>Status</th>
<th>Action</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
    $prev = $row['prev'];
    $pres = $row['pres'];
    $unit = $row['unit'];
    $totalcons = $pres - $prev;
    $bill = $totalcons * $unit;

    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $prev . "</td>";
    echo "<td>" . $pres . "</td>";
    echo "<td>" . $totalcons . "</td>";
    echo "<td>" . $unit . "</td>";
    echo "<td>" . $row['date'] . "</td>";
    echo "<td>" . $bill . "</td>";
    echo "<td> </td>";
    echo "<td><a rel='facebox' href='delbill.php?id=".$row['id']."'>Del</a></td>";
    echo "</tr>";
}
echo "</table>";

?>


</html>
