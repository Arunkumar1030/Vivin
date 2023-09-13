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
  <!-- Vector CSS -->
  <link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
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
        <a href="addoption.php">
          <i class="zmdi zmdi-format-list-bulleted"></i> <span>Add Option</span>
        </a>
      </li>
<li>
        <a href="logout.phpl">
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

  <!--Start Dashboard Content-->
 	<div class="card mt-3">
    <div class="card-content">
        <div class="row row-group m-0">
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0">Yarning<span class="float-right"><i class="fa fa-eye"></i></span></h5>
                    <div class="progress my-3" style="height:3px;">
                       <div class="progress-bar" style="width:100%"></div>
                    </div>
                 <p class="mb-0 text-white small-font">On Process<span class="float-right"><?php include_once 'connection.php';
                 $sql = "select count(batchid) from yarning where status='On Process'";
                 $a = mysqli_query($conn, $sql);
                 $row = mysqli_fetch_assoc($a);
    
    // Access the count value
               $count = $row['count(batchid)'];
                 echo $count;?> <i class="zmdi zmdi-long-arrow-down"></i></span></p>
                 <div class="progress my-3" style="height:1px;">
                       <div class="progress-bar" style="width:100%"></div>
                    </div>
                     <p class="mb-0 text-white small-font">Process Complete<span class="float-right"><?php include_once 'connection.php';
                 $sql = "select count(batchid) from yarning where status='Process Complete'";
                 $a = mysqli_query($conn, $sql);
                 $row = mysqli_fetch_assoc($a);
    
    // Access the count value
               $count = $row['count(batchid)'];
                 echo $count?> <i class="zmdi zmdi-long-arrow-up"></i></span></p>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0">Weaving<span class="float-right"><i class="fa fa-eye"></i></span></h5>
                    <div class="progress my-3" style="height:3px;">
                       <div class="progress-bar" style="width:100%"></div>
                    </div>
                  <p class="mb-0 text-white small-font">On Process<span class="float-right"><?php include_once 'connection.php';
                 $sql = "select count(batchid) from weaving where status='On Process'";
                 $a = mysqli_query($conn, $sql);
                 $row = mysqli_fetch_assoc($a);
    
    // Access the count value
               $count = $row['count(batchid)'];
                 echo $count;?> <i class="zmdi zmdi-long-arrow-down"></i></span></p>
                  <div class="progress my-3" style="height:1px;">
                       <div class="progress-bar" style="width:100%"></div>
                    </div>
                     <p class="mb-0 text-white small-font">Process Complete<span class="float-right"><?php include_once 'connection.php';
                 $sql = "select count(batchid) from weaving where status='Process Complete'";
                 $a = mysqli_query($conn, $sql);
                 $row = mysqli_fetch_assoc($a);
    
    // Access the count value
               $count = $row['count(batchid)'];
                 echo $count?> <i class="zmdi zmdi-long-arrow-up"></i></span></p>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0">Dyeing<span class="float-right"><i class="fa fa-eye"></i></span></h5>
                    <div class="progress my-3" style="height:3px;">
                       <div class="progress-bar" style="width:100%"></div>
                    </div>
                  <p class="mb-0 text-white small-font">On Process<span class="float-right"><?php include_once 'connection.php';
                 $sql = "select count(DISTINCT  batchid) from dyeing where status='On Process'";
                 $a = mysqli_query($conn, $sql);
                 $row = mysqli_fetch_assoc($a);
    
    // Access the count value
               $count = $row['count(DISTINCT  batchid)'];
                 echo $count;?> <i class="zmdi zmdi-long-arrow-down"></i></span></p>
                  <div class="progress my-3" style="height:1px;">
                       <div class="progress-bar" style="width:100%"></div>
                    </div>
                     <p class="mb-0 text-white small-font">Process Complete<span class="float-right"><?php include_once 'connection.php';
                 $sql = "select count(DISTINCT  batchid) from dyeing where status='Process Complete'";
                 $a = mysqli_query($conn, $sql);
                 $row = mysqli_fetch_assoc($a);
    
    // Access the count value
               $count = $row['count(DISTINCT  batchid)'];
                 echo $count?> <i class="zmdi zmdi-long-arrow-up"></i></span></p>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0">Striching <span class="float-right"><i class="fa fa-eye"></i></span></h5>
                    <div class="progress my-3" style="height:3px;">
                       <div class="progress-bar" style="width:100%"></div>
                    </div>
                  <p class="mb-0 text-white small-font">On Process<span class="float-right"><?php include_once 'connection.php';
                 $sql = "select count(DISTINCT  batchid) from striching where status='On Process'";
                 $a = mysqli_query($conn, $sql);
                 $row = mysqli_fetch_assoc($a);
    
    // Access the count value
               $count = $row['count(DISTINCT  batchid)'];
                 echo $count;?> <i class="zmdi zmdi-long-arrow-down"></i></span></p>
                  <div class="progress my-3" style="height:1px;">
                       <div class="progress-bar" style="width:100%"></div>
                    </div>
                     <p class="mb-0 text-white small-font">Process Complete<span class="float-right"><?php include_once 'connection.php';
                 $sql = "select count(DISTINCT  batchid) from striching where status='Process Complete'";
                 $a = mysqli_query($conn, $sql);
                 $row = mysqli_fetch_assoc($a);
    
    // Access the count value
               $count = $row['count(DISTINCT  batchid)'];
                 echo $count?> <i class="zmdi zmdi-long-arrow-up"></i></span></p>
                </div>
            </div>
        </div>
    </div>
 </div>  
	  
 

     <!--End Row-->
	
	<div class="row">
	 <div class="col-12 col-lg-12">
	   <div class="card">
	     <div class="card-header">Process Menu
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
	       <div class="table-responsive">
                 <table class="table align-items-center table-flush table-borderless">
                  <thead>
                   <tr>
                     <th>Process Name</th>
                     <th>Add New Process</th>
                     <th>View Report</th>
                   </tr>
                   </thead>
                   <tbody><tr>
                    <td>Yarning</td>
                    <td><a href="Yarningaddform.php"><i class="fa fa-plus"></i>Add</a></td>
                    <td><a href="Yarningreport.php"><i class="fa fa-eye"></i>View</a></td>
                   </tr>

                  <tr>
                    <td>Weaving</td>
                    <td><a href="weavingaddform.php"><i class="fa fa-plus"></i>Add</a></td>
                     <td><a href="weavingreport.php"><i class="fa fa-eye"></i>View</a></td>
                   </tr>
                  <tr>
                    <td>Dyeing</td>
                    <td><a href="dyingaddform.php"><i class="fa fa-plus"></i>Add</a></td>
                     <td><a href="dyeingreport.php"><i class="fa fa-eye"></i>View</a></td>
                   </tr>

                  <tr>
                    <td>Striching</td>
                    <td><a href="strichingaddform.php"><i class="fa fa-plus"></i>Add</a></td>
                     <td><a href="strichingreport.php"><i class="fa fa-eye"></i>View</a></td>
                   </tr>
                   </tr>
 
                 </tbody></table>
               </div>
	   </div>
	 </div>
	</div><!--End Row-->

      <!--End Dashboard Content-->
	  
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
          Copyright © Ak
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
  <!-- loader scripts -->
  <script src="assets/js/jquery.loading-indicator.js"></script>
  <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>
  <!-- Chart js -->
  
  <script src="assets/plugins/Chart.js/Chart.min.js"></script>
 
  <!-- Index js -->
  <script src="assets/js/index.js"></script>

  
</body>
</html>
