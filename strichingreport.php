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

    
        

     
       
   <div class="col-lg-12">
     <div class="card">
       <div class="card-header">Striching Process Report
      <div class="card-action">
             <div class="dropdown">
             <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
              <i class="icon-options"></i>
             </a>
              <div class="dropdown-menu dropdown-menu-right">
              <a class="dropdown-item" href="javascript:void();">Action</a>
              <a class="dropdown-item" href="javascript:void();">Another action</a>
              <a class="dropdown-item" href="javascript:void();">Something else here</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript:void();">Separated link</a>
               </div>
              </div>
             </div>
     </div>
 <?php
include('connection.php');
$query = "SELECT * FROM striching";
$result = mysqli_query($conn, $query);
?>
         <div class="table-responsive" >
                 <table class="table align-items-center table-flush table-borderless">
                  <thead>
                   <tr>
                     <th>Batch ID</th>
                     <th>Process</th>
                     <th>Material</th>
                      <th>Size</th>
                      <th>Color</th>
                      <th>Quantity</th>

                     <th>Scale</th>
                     <th>Start Date</th>
                      <th>End Date</th>
                     <th>Status</th>
                     <th>Action</th>
                     
                     </tr>
                   </thead>
                   <?php
if (mysqli_num_rows($result) > 0) {
  $sn = 1;
  $prev = -1;
  while ($data = mysqli_fetch_assoc($result)) {

    if ($prev != $data['batchid']) {
?>
      <tbody><tr>
        <td><?php echo $data['batchid']; ?></td>
<?php
      $prev = $data['batchid'];
    } elseif ($prev == $data['batchid']) {
?>
        <td></td>
<?php
    }
    $prev = $data['batchid'];
?>
        <td><?php echo $data['process']; ?></td>
        <td><?php echo $data['material']; ?></td>
        <td><?php echo $data['size']; ?></td>
        <td><?php echo $data['color']; ?></td>
        <td><?php echo $data['qty']; ?></td>
        <td><?php echo $data['scale']; ?></td>
        <td><?php echo $data['startdate']; ?></td>
        <td><?php echo $data['enddate']; ?></td>
        <td><?php echo $data['status']; ?></td>
        <td><a href="strichingupdate.php?productid=<?php echo $data['product id']; ?>"><i class="fa fa-edit"></i>Edit</a><br>
           <a href="strichingaddcolor.php?batchid=<?php echo $data['batchid']; ?>"><i class="fa fa-edit"></i>Add Material</a><br>
           <a href="strichingdelete.php?productid=<?php echo $data['product id']; ?>"><i class="fa fa-trash"></i>Delete</a></td>
      </tr>
<?php
    $sn++;
  }
} else {
?>
  <tr>
    <td colspan="8">No data found</td>
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
