<?php
include('session.php');

if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $select = "SELECT * FROM `bookings` WHERE ID = '$id'";

    $result = $conn->query($select);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $id = $row["ID"];
            $name=$row['Name'];
            $date=$row['date'];
            $ass=$row['time'];
            $address=$row['address'];
            $select=$row['Package'];
        }
      }

$sql="insert into confirmbooking (Name,date,time,address,Package) values('$name','$date','$ass','$address','$select')";


    // $sql = "UPDATE `bookings` SET  status = 1 WHERE ID = $id";

    $result1 = mysqli_query($conn, $sql);
    if ($result1) {
        $sql1 = "DELETE FROM bookings WHERE id = $id";
        $result2 = mysqli_query($conn, $sql1);
        if ($result2) {
            $receiver = "mohamedmusharraff086@gamil.com";
            $subject = "Your Booking Canceled";
            $body = "Hi, there...This is to inform that your booking on Shai Studio Was canceled ";
            $sender = "mohamedmusharraff086@gamil.com";

            if(mail($receiver, $subject, $body, $sender)){
                header("location: http://localhost/Shai/Admin/onlinebooking.php?message=success");
        }else{
                header("location: http://localhost/Shai/Admin/onlinebooking.php?message=fail");
        }
        
        }else{
            header("location: http://localhost/Shai/Admin/onlinebooking.php?message=fail");
        }
        
    } else {
        header("location: http://localhost/Shai/Admin/onlinebooking.php?message=fail");
        
    }
    
}