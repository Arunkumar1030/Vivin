<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Dashtreme Admin - Free Dashboard for Bootstrap 4 by Codervent</title>
  <!-- loader-->
  <link href="assets/css/pace.min.css" rel="stylesheet"/>
  <script src="assets/js/pace.min.js"></script>
  <!--favicon-->
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
  <!-- simplebar CSS-->
  <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="assets/css/sidebar-menu.css" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet"/>
  
  
</head>

<body class="bg-theme bg-theme1">


 
<!-- Start wrapper-->
 <div id="wrapper">
 
  <!--Start sidebar-wrapper-->
   <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
     <div class="brand-logo">
      <a href="index.html">
       <img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
       <h5 class="logo-text">AK Admin</h5>
     </a>
   </div>
   <ul class="sidebar-menu do-nicescrol">
      <li class="sidebar-header">MAIN NAVIGATION</li>
      <li>
        <a href="home.php">
          <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>

      
        <li>
        <a href="addoption">
          <i class="zmdi zmdi-format-list-bulleted"></i> <span>Add Option</span>
        </a>
      </li>
<li>
        <a href="calendar.html">
          <i class="zmdi zmdi-calendar-check"></i> <span>Stocks</span>
          <small class="badge float-right badge-light">New</small>
        </a>
      </li>

      <li>
        <a href="tables.html">
          <i class="zmdi zmdi-grid"></i> <span>Billing</span>
        </a>
      </li>

      

      
      <li class="sidebar-header">LABELS</li>
      <li><a href="javaScript:void();"><i class="zmdi zmdi-coffee text-danger"></i> <span>Important</span></a></li>
      <li><a href="javaScript:void();"><i class="zmdi zmdi-chart-donut text-success"></i> <span>Warning</span></a></li>
      <li><a href="javaScript:void();"><i class="zmdi zmdi-share text-info"></i> <span>Information</span></a></li>

    </ul>
   
   </div>
   <!--End sidebar-wrapper-->

<!--Start topbar header-->
<header class="topbar-nav">
 <nav class="navbar navbar-expand fixed-top">
  <ul class="navbar-nav mr-auto align-items-center">
    <li class="nav-item">
      <a class="nav-link toggle-menu" href="javascript:void();">
       <i class="icon-menu menu-icon"></i>
     </a>
    </li>
    <li class="nav-item">
      <form class="search-bar">
        <input type="text" class="form-control" placeholder="Enter keywords">
         <a href="javascript:void();"><i class="icon-magnifier"></i></a>
      </form>
    </li>
  </ul>
     
  <ul class="navbar-nav align-items-center right-nav-link">
     
    <li class="nav-item dropdown-lg">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect"  href="logout.php">
     <i class="icon-power mr-2"></i> Logout</a>
    </li>
    
    
    
  </ul>
</nav>
</header>
<!--End topbar header-->

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">

    <div class="row mt-3">
     
       
   </div>
<!--End Row-->
<?php
// Include the database connection file
require_once("connection.php");

// Get id from URL parameter
$batchid = $_GET['batchid'];

// Select data associated with this particular id
$result = mysqli_query($conn, "SELECT * FROM weaving WHERE batchid = $batchid");

// Fetch the next row of a result set as an associative array
$resultData = mysqli_fetch_assoc($result);

$batchid = $resultData['batchid'];
$qty = $resultData['qty'];
$scale = $resultData['scale'];
$startdate = $resultData['startdate'];
$enddate = $resultData['enddate'];
$status = $resultData['status'];
?>

  <div class="row mt-3">

  <div class="col-lg-7">
         <div class="card">
           <div class="card-body">
           <div class="card-title">Weaving Update Form</div>
           <hr>
            <form method="post" action="">
           <div class="form-group">
            <label for="input-1">Batch ID</label>
            <input type="Number" min="1" class="form-control" id="input-1" placeholder="Enter Batch ID" name="batchid" value="<?php echo $batchid; ?>">
           </div>
           <div class="form-group">
            <label for="input-2">Quantity</label>
            <input type="Number" min="1" class="form-control" id="input-2" placeholder="Enter Quantity" name="qty" value="<?php echo $qty; ?>">
           </div>
           
           <div class="form-group">
            <label for="input-4">Start Date</label>
            <input type="date" class="form-control" id="input-4" name="startdate" value="<?php echo $startdate; ?>">
           </div>
            <div class="form-group">
            <label for="input-4">End Date</label>
            <input type="date" class="form-control" id="input-4" name="enddate" value="<?php echo $enddate; ?>">
           </div>
            <div class="form-group">
            <label for="input-4">Status</label>
            <select class="form-control" id="input-4" name="status" value="<?php echo $status; ?>" required>
    <option value="<?php echo $status; ?>" hidden><?php echo $status; ?></option>
    <option value="On Process">On Process</option>
     <option value="Process Complete">Process Complete</option>
  </select>
           </div>
           <div class="form-group">
            <button type="submit" value="Submit" name="submit" class="btn btn-light px-5"><i class="icon-plus"></i>submit</button>
          </div>
          </form>
         </div>
         </div>
      </div>

      <!--End Row-->
         
 <div class="col-lg-5">
         <div class="card">
           <div class="card-body">
           <div class="card-title">Your Action Information Board</div>
           <hr>

           <?php
// Include the database connection file
require_once("connection.php");

if (isset($_POST['submit'])) {
   // Escape special characters in a string for use in an SQL statement
   $batchid = mysqli_real_escape_string($conn, $_POST['batchid']);
   
   
   $qty = mysqli_real_escape_string($conn, $_POST['qty']);
   
     $startdate = mysqli_real_escape_string($conn, $_POST['startdate']);
      $enddate = mysqli_real_escape_string($conn, $_POST['enddate']);
       $status = mysqli_real_escape_string($conn, $_POST['status']);  
   
   // Check for empty fields
   if (empty($batchid)   || empty($qty)  || empty($startdate) || empty($enddate) || empty($status)) {
      if (empty($batchid)) {
         echo "<font >batch field is empty.</font><br/>";
      }
      
       if (empty($qty)) {
         echo "<font  >quantity field is empty.</font><br/>";
      }
      if (empty($scale)) {
         echo "<font >scale field is empty.</font><br/>";
      }
      if (empty($startdate)) {
         echo "<font  >startdate field is empty.</font><br/>";
      }
      if (empty($enddate)) {
         echo "<font  >enddate field is empty.</font><br/>";
      }
      if (empty($status)) {
         echo "<font  >status field is empty.</font><br/>";
      }
   } else {
      // Update the database table
     if($status == "Process Complete"){
      echo "As";
      mysqli_query($conn,"INSERT INTO dyeing (batchid,process,material,color,qty,scale,startdate,enddate,status)
     VALUES ('$batchid','dyeing', 'dress','', '$qty', 'meter', '$enddate','','On Process')");
    }
      $result = mysqli_query($conn, "UPDATE weaving SET `batchid` = '$batchid', `process` = 'weaving', `material` = 'dress', `qty` = '$qty', `scale` = 'meter', `startdate` = '$startdate', `enddate` = '$enddate', `status` = '$status' WHERE `batchid` = $batchid");
      
      // Display success message
      echo "<p><font >Data updated successfully!</p>";
       
   }
}
?>
             
         <button type="submit" value="Back" name="back" class="btn btn-light px-5" onclick="window.location.href = 'weavingreport.php';"><i class="icon-menu"></i>Back</button> 
         </div>
         </div>
      </div>

      <!--End Row-->
         

	<!--start overlay-->
		  <div class="overlay toggle-menu"></div>
		<!--end overlay-->

    </div>
    <!-- End container-fluid-->
    
   </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--Start footer-->
	<footer class="footer">
      <div class="container">
        <div class="text-center">
          Copyright © AK
        </div>
      </div>
    </footer>
	<!--End footer-->

	
	<!--start color switcher-->
   <div class="right-sidebar">
    <div class="switcher-icon">
      <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
    </div>
    <div class="right-sidebar-content">

      <p class="mb-0">Gaussion Texture</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme1"></li>
        <li id="theme2"></li>
        <li id="theme3"></li>
        <li id="theme4"></li>
        <li id="theme5"></li>
        <li id="theme6"></li>
      </ul>

      <p class="mb-0">Gradient Background</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme7"></li>
        <li id="theme8"></li>
        <li id="theme9"></li>
        <li id="theme10"></li>
        <li id="theme11"></li>
        <li id="theme12"></li>
		<li id="theme13"></li>
        <li id="theme14"></li>
        <li id="theme15"></li>
      </ul>
      
     </div>
   </div>
  <!--end color switcher-->
   
  </div><!--End wrapper-->


  <!-- Bootstrap core JavaScript-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
	
 <!-- simplebar js -->
  <script src="assets/plugins/simplebar/js/simplebar.js"></script>
  <!-- sidebar-menu js -->
  <script src="assets/js/sidebar-menu.js"></script>
  
  <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>
	
</body>
</html>
