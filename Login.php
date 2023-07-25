<?php 
include("config.php");
session_start();
$error ="";
if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $User = mysqli_real_escape_string($conn,$_POST['User']);
      $password = mysqli_real_escape_string($conn,$_POST['password']); 
    
	  $sql = "SELECT ID FROM member WHERE User = '$User' and password = '$password'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         
         $_SESSION['login_user'] = $User;
         
         header("location: Dashboard.php");
      }else {
         $error = "Your Login Name or Password is invalid";
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
                    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                        <h1>Member Login</h1>
                        <p>
                        
                        </p>
                        <br />
                    </div>
    
                    <div class="col-lg-4 col-lg-offset-4 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                        <form method="post">
                  
                           <div class="form-group">
                                <input type="text" name="User" id= "User" class="form-control" required placeholder="Your UserName" />
                            </div>

                           <div class="form-group">
                                <input type="password" name="password" id= "password" class="form-control" required placeholder="Your Passsword" />
                            </div>
                                                        
                   <div class="form-group">
                            
                            
                            <input type="submit" class="btn custom-btn-one" value="Signin">
                                
                            </div>
<?php echo $error; ?>
                        </form>
                    </div>
   
   

            </div>
        </div>
    </div>
    <!-- PORTFOLIO SECTION END-->     
       <section id="hire-sec">
        <div class="overlay">
            
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


