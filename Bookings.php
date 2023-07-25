<?php
include('session.php');
include("config.php");

$error ="";

if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 


$date=$_POST['date'];
$ass=$_POST['time'];
$message=$_POST['message'];
$select=$_POST['select'];


	
 $sql="insert into Bookings(Name,date,time,address,Package) values('$login_session','$date','$ass','$message','$select')";


if (mysqli_query($conn, $sql)) {
    $error= "You Request was successfully sent, We will get back to You as soon as possible. Thank you";
	
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
		
      
   }
?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Shai Production</title>
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <!-- ANIMATE  CSS -->
    <link href="assets/css/animate.css" rel="stylesheet" />
    <!-- PRETTY PHOTO  CSS -->
    <link href="assets/css/prettyPhoto.css" rel="stylesheet" />
    <!--  STYLE SWITCHER CSS -->
    <link href="assets/css/styleSwitcher.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!--PINK STYLE VERSION IS BY DEFAULT, USE ANY ONE STYLESHEET FROM FOUR STYLESHEETS (pink,green,blue and brown) HERE-->
    <link href="assets/css/themes/pink.css" id="mainCSS" rel="stylesheet" />
    <!-- GOOGLE FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css' />

</head>
<body>
       
       
        <div id="hire-sec">
        <div class="overlay">
            <div class="container">
           
                <div class="row text-center pad-top-bottom wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".2s">
                    <div class="col-lg-8 col-lg-offset-4 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                       <h4>Logged in as: <?php echo $login_session; ?></h4> 
      <h4> <a href = "logout.php">Sign Out</a></h4>
           
                    </div> <h1>Bookings</h1></div>
                    
                    <div class="row  move-me wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".4s">
                    <div class="col-lg-4  col-md-6  col-sm-6">
                     <form method="post">
                    <div class="form-group">
                    Select Date: <input type="date" name="date" class="form-control"></div>
                    
              <div class="form-group">
                    Select Time: <input type="time" name="time" class="form-control"></div>
                        
                        
                            <div class="form-group">
                    Venue: <textarea name="message" id="message" required class="form-control" style="min-height: 50px;" placeholder="Address"></textarea>
</div>
                    
                    
                        <div class="form-group">
                    Select Package: <select name="select" class="form-control">
  <option value="Weddings" id="1">Weddings</option>
  <option value="Birthdays " id="2">Birthdays </option>
  <option value="Parties" id="3">Parties</option>
  <option value="Other Events" id="4">Other Events</option>
</select>
</div>
                    
                    
                    
                    
                     <div class="form-group">

  
  <input type="submit" class="btn btn-primary " value="Submit"> <?php echo $error; ?>
     
               
            </div>
                    
                     </div></div>
                    </div></div></div>
  
 
                                      

    
    <!-- PORTFOLIO SECTION END-->     
        <section id="hire-sec">
        <div class="overlay">
            <div class="container">
                
                <div class="row  move-me wow bounceIn animated" data-wow-duration="1s">

                    <div class="col-lg-4 col-lg-offset-1  col-md-4  col-md-offset-1 col-sm-4 col-sm-offset-1" id="footer-sec">
                                           <p>&copy; 2023 All Rights Reserved 
                            <br />
                              Design by : Musha </p>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- HIRE SECTION END-->
   
    <!-- SCROLL TO TOP SECTION END-->
    <!--  JQUERY CORE SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!--  BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.js"></script>
    <!--  SCROLL SCRIPTS -->
    <script src="assets/js/jquery.easing.min.js"></script>
    <!--  WOW ANIMATION SCRIPTS -->
    <script src="assets/js/wow.min.js"></script>
    <!-- EASY PIE CHART SCRIPTS -->
    <script src="assets/js/jquery.easypiechart.min.js"></script>
    <!-- PRETTY PHOTO SCRIPTS -->
    <script src="assets/js/jquery.prettyPhoto.js"></script>
    <!--  STYLE SWITCHER SCRIPTS -->
    <script src="assets/js/styleSwitcher.js"></script>
    <!--  CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
</body>
</html>


