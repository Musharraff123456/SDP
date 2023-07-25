<?php 
include('session.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

$receiver = "mohamedmusharraff086@gamil.com";
$subject = "Your Booking Canceled";
$body = "Hi, there...This is to inform that your booking on Shai Studio Was canceled ";
$sender = "mohamedmusharraff086@gamil.com";

$sql1 = "DELETE FROM bookings WHERE id = $id";
$result2 = mysqli_query($conn, $sql1);
if ($result2) {
    if(mail($receiver, $subject, $body, $sender)){
        header("location: http://localhost/Shai/Admin/onlinebooking.php?message=success");
    }else{
        header("location: http://localhost/Shai/Admin/onlinebooking.php?message=fail");
    }
    
}else{
    header("location: http://localhost/Shai/Admin/onlinebooking.php?message=fail");
}



?>