<?php
include 'db.php';

$owners_id = $_POST['owners_id'];
$prev = $_POST['prev'];
$pres = $_POST['pres'];
$totalcun = max(0, $pres - $prev);
$unit = $_POST['unit'];
$date = $_POST['date'];

mysqli_query($conn, "INSERT INTO bill (owners_id, prev, pres, unit, date) 
                     VALUES ('$owners_id', '$prev', '$pres','$unit', '$date')");

mysqli_query($conn, "UPDATE tempo_bill SET Prev = '$pres' WHERE id = '$owners_id'");

echo '<script>alert("Success")</script>';
echo '<script>window.location="bill.php"</script>';
?>

