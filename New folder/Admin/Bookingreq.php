<?php include('session.php');

   
      $error1 ="";
   		
 
   
if(isset($_POST['Delete1'])=="Delete"){

$IDD=$_POST['idd'];


$sql = "DELETE FROM bookings WHERE ID=$IDD";

if ($conn->query($sql) === TRUE) {
   $error1 ="Record deleted successfully";
} else {
    $error1 = "Error deleting record: " . $conn->error;
}
	
   }
     



?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  


</head>




<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">   
  <header class="main-header">
    <!-- Logo -->
    <a href="Dashboard.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>SHAI </b>SHAI</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>SHAI STUDIO</b>Production</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
             
          
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $login_session; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                 <?php  $sql = "select * from admin where name='".$login_session."'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	  
	  
						
						?>
                        
	<?php echo $row['name']; 
	 
	 ?> - <?php echo $row['Designation']; 
	 
	 ?>
                  <small>Member since <?php echo $row['joined']; 
	 
	 ?></small>
                </p>
              </li>
              <!-- Menu Body -->

              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat" onclick="return confirm('Are you sure! you want to Signout?')">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
  
        </ul>
      </div>
    </nav>
  </header>

  
  
    
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
  
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
    
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $login_session; ?>
          </p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="Dashboard.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
           
          </a>
          

        </li>
        
        <li class="treeview">
          <a href="Customer.php">
            <i class="fa fa-files-o"></i>
            <span>New Customer Registration</span>
            
          </a>
        </li>
        
     
        <li class="treeview">
          <a href="onlinebooking.php">
            <i class="fa fa-th"></i> <span>Online Bookings</span>
           </a>
        </li>
        
        
     
       <li class="treeview">
          <a href="Messages.php">
            <i class="fa fa-th"></i> <span>Messages</span>
           </a>
        </li>
        
       <li class="treeview">
          <a href="Rentout.php">
            <i class="fa fa-th"></i> <span>Rent out Request</span>
           </a>
        </li>
        
        
     <li class="active treeview">
          <a href="Bookingreq.php">
            <i class="fa fa-th"></i> <span>Booking Request</span>
           </a>
        </li>
           
        
        <li class="treeview">
          <a href="UserAccont.php">
            <i class="fa fa-edit"></i> <span>Create User Accont</span>
            
          </a>
        </li>
        
        <li class="treeview">
          <a href="About.php">
            <i class="fa fa-table"></i> <span>About</span>
          </a>
        </li>
        
              
        <li class="treeview">
          <a href="Logout.php" onclick="return confirm('Are you sure! you want to Signout?')">
            <i class="fa fa-share"></i> <span>Logout</span>
   
          </a>
         </li>
</ul>         
      
    </section>
    <!-- /.sidebar -->
  </aside> 
  

  <!-- Content Wrapper. Contains page content -->
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Booking 
        <small>Request</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="Dashboard.php"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Available Bookings</li>
      </ol>
    </section>

    <!-- Main content -->
   
        <!-- right col -->
<section class="content-header">
<div class="row">
 <div class="col-md-12">
 
<div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">New Bookings Request</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
   </div>
            </div>

<!-- /.box-header -->
            <div class="box-body" style="display: block;">
              <div class="row">
                <div class="col-xs-12">            
       				         
                             <div class="box">
            <div class="box-header">
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
              <div class="row">
              
              <div class="col-sm-6"></div>
              <div class="col-sm-6"></div>
              </div>
                                      
    
    
 				 <div class="form-group">
            <form method="post" action="" name="form3">      
     <input type="text" class="form-control" id="idd" name="idd" placeholder="ID">
    
     <input type="submit" value="Delete" name="Delete1" id="Delete1" class="btn btn-info pull-right"/>
 
  </form>
                </div>
                
                <label class="alert-error"><?php echo $error1; ?></label>
 <div class="form-group">
 <div class="col-sm-6"></div>
</div>

              <div class="row"><div class="col-sm-12">
              
              <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                <thead>
              

                        
	
                
                <tr role="row">
                 <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column descending" aria-sort="ascending">ID</th>
                 
                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column descending" aria-sort="ascending">Name</th>
                 <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Date</th>
                 <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Time</th>
                 <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Address</th>
                 <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Package</th>
                
                </tr>
                </thead>
                <tbody>
     
                  <?php  
				  
				   $sql = "SELECT * FROM bookings";
      $result = mysqli_query($conn,$sql);
      while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
	 					{
        ?>
                <tr role="row" class="odd">
                  <td class="sorting_1"><?php echo $row['ID']; ?></td>
				  <td><?php echo $row['Name']; ?></td>
                  <td><?php echo $row['date']; ?></td>
                          <td><?php echo $row['time']; ?></td>
                                  <td><?php echo $row['address']; ?></td>
                                          <td><?php echo $row['Package']; ?></td>
                </tr>
                <?php
    }

?>
                </tbody>
                
              </table>
              
              </div>
              
              </div>
              
</div>
            </div>
            <!-- /.box-body -->
          </div>
                             
                                    
                </div>
               
                </div>
               
              </div>               

        

              
</div> 
</div>
</div>


      



        </section> 
        
        
        
      
 <section class="content-header">
<div class="row">
 <div class="col-md-12">
 
<div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">All Confirmed Bookings</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
   </div>
            </div>

<!-- /.box-header -->
            <div class="box-body" style="display: block;">
              <div class="row">
                <div class="col-xs-12">            
       				         
                             <div class="box">
            <div class="box-header">
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
              <div class="row">
              
              <div class="col-sm-6"></div>
              <div class="col-sm-6"></div>
              </div>
                                      
    
    
 				
 <div class="form-group">
 <div class="col-sm-6"></div>
</div>

              <div class="row"><div class="col-sm-12">
              
              <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                <thead>
              

                        
	
                
                <tr role="row">
                 <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column descending" aria-sort="ascending">ID</th>
                 
                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column descending" aria-sort="ascending">Name</th>
                 <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Date</th>
                 <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Time</th>
                 <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Address</th>
                 <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Package</th>
                
                </tr>
                </thead>
                <tbody>
     
                  <?php  
				  
				   $sql = "SELECT * FROM confirmbooking";
      $result = mysqli_query($conn,$sql);
      while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
	 					{
        ?>
                <tr role="row" class="odd">
                  <td class="sorting_1"><?php echo $row['ID']; ?></td>
				  <td><?php echo $row['Name']; ?></td>
                  <td><?php echo $row['date']; ?></td>
                          <td><?php echo $row['time']; ?></td>
                                  <td><?php echo $row['address']; ?></td>
                                          <td><?php echo $row['Package']; ?></td>
                </tr>
                <?php
    }

?>
                </tbody>
                
              </table>
              
              </div>
              
              </div>
              
</div>
            </div>
            <!-- /.box-body -->
          </div>
                             
                                    
                </div>
               
                </div>
               
              </div>               

        

              
</div> 
</div>
</div>


      



        </section> 

        <!-- right col -->
     

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 0.1.1
    </div>
    <strong>Copyright &copy; 2023 Shai Studio.</strong> Designed By M. Musha
  </footer>

 
   
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->

<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</div>
</body>
</html>
