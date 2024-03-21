<?php  
if (isset($_POST['add'])) {      
    include 'db.php';
    
    // Retrieve form data
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $first = $_POST['first'];
    $room = $_POST['room'];
    $meter = $_POST['meter'];
    $contact = $_POST['contact'];
    

    mysqli_query($conn, "INSERT INTO owners (fname, lname, first, room, meter, contact) 
                         VALUES ('$fname', '$lname', '$first', '$room', '$meter', '$contact')"); 
    
    
    $owner_id = mysqli_insert_id($conn);
    

    mysqli_query($conn, "INSERT INTO tempo_bill (id, Tenant, Prev) 
                         VALUES ('$owner_id', '$fname', '$first')"); 
    
    
    header("Location: tenants.php");
    exit;
}
?>
