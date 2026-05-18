<!-- BEGIN CONTAINER -->
<div class="page-container row"> 
  <!-- BEGIN SIDEBAR -->
  <div class="page-sidebar" id="main-menu">
    <!-- BEGIN MINI-PROFILE -->
    <div class="page-sidebar-wrapper scrollbar-dynamic" id="main-menu-wrapper">
      <div class="user-info-wrapper">
        <div class="profile-wrapper"> <img src="assets/img/profiles/avatar.jpg"  alt="" data-src="assets/img/profiles/avatar.jpg" data-src-retina="assets/img/profiles/avatar2x.jpg" width="69" height="69" /> </div>
        <div class="user-info">
          <div class="greeting">Welcome</div>
          <div class="username">To <span class="semi-bold"><?php echo $app_vars['company_name']; ?></span></div>
          <!-- <div class="status">Status<a href="#">
            <div class="status-icon green"></div>
            Online</a></div> -->
        </div>
      </div>
      <!-- END MINI-PROFILE -->
      <!-- BEGIN SIDEBAR MENU -->
      <!-- <p class="menu-title">BROWSE <span class="pull-right"><a href="javascript:;"><i class="fa fa-refresh"></i></a></span></p> -->
      <ul>
        <li class="start"> <a href="index.php"> <i class="icon-custom-home"></i> <span class="title">Dashboard</span> <span class="selected"></span> <span class="arrow"></span> </a> 
          <!-- <ul class="sub-menu">
            <li > <a href="dashboard_v1.html"> Dashboard v1 </a> </li>
            <li class="active"> <a href="index.html "> Dashboard v2 <span class=" label label-info pull-right m-r-30">NEW</span></a></li>
          </ul> -->
        </li>
        <li class=""> <a href="javascript:;"> <i class="fa fa-th"></i> <span class="title">Offers</span>  <span class="arrow "></span> </a>

          <ul class="sub-menu">
              <li > <a href="offers.php">Add Offer </a> </li>
              <li > <a href="view_offers.php">View Offers </a> </li>
              <!-- <li > <a href="theme_elegant.html">Elegant</a> </li> -->
          </ul>

         </li>
        <li class=""> <a href="javascript:;"> <i class="fa fa fa-user"></i> <span class="title">Network</span> <span class="arrow "></span> </a>
            <ul class="sub-menu">
              <li > <a href="network.php">Add Network </a> </li>
              <li > <a href="view_network.php">View Network</a> </li>
              <!-- <li > <a href="theme_elegant.html">Elegant</a> </li> -->
            </ul>
        </li> 
        <li class=""> <a href="javascript:;"> <i class="fa fa fa-adjust"></i> <span class="title">Category</span> <span class="arrow "></span> </a>
            <ul class="sub-menu">
              <li > <a href="category.php">Add Category </a> </li>
              <li > <a href="view_category.php">View Category</a> </li>
              <!-- <li > <a href="theme_elegant.html">Elegant</a> </li> -->
            </ul>
        </li>        
        <li class=""> <a href="javascript:;"> <i class="fa fa fa-user"></i> <span class="title">Pages</span> <span class="arrow "></span> </a>
            <ul class="sub-menu">
              <li > <a href="pages.php">Add Pages </a> </li>
              <li > <a href="view_pages.php">View Pages</a> </li>
              <!-- <li > <a href="theme_elegant.html">Elegant</a> </li> -->
            </ul>
        </li> 
        <li class=""> <a href="javascript:;"> <i class="fa fa fa-user"></i> <span class="title">Staff</span> <span class="arrow "></span> </a>
            <ul class="sub-menu">
              <li > <a href="staff.php">Add Staff </a> </li>
              <li > <a href="view_staff.php">View Staff</a> </li>
              <!-- <li > <a href="theme_elegant.html">Elegant</a> </li> -->
            </ul>
        </li> 
        <li > <a href="settings.php"> <i class="fa fa-gear"></i><span class="title">Settings</span> </a> </li>
      </ul>
      <div class="clearfix"></div>
      <!-- END SIDEBAR MENU -->
    </div>
  </div>
  <a href="#" class="scrollup">Scroll</a>
   <div class="footer-widget">    
<!--
  <div class="progress transparent progress-success progress-small no-radius no-margin">
    <div data-percentage="79%" class="progress-bar  progress-bar-success animate-progress-bar" ></div>    
  </div>
  <div class="pull-right">
    <div class="details-status">
    <span data-animation-duration="560" data-value="86" class="animate-number"></span>%
  </div>  
  <a href="lockscreen.html"><i class="fa fa-power-off"></i></a></div>
-->  </div>
  <!-- END SIDEBAR --> 

  <?php 
  $msg = '';
 // print_r($_SESSION);
  if((isset($_SESSION['msg'])) && ($_SESSION['msg'] != ''))
  {
   if($_SESSION['msg_type'] == 'Success')
    {
      //$msg = 'SUCCESS :'.$_SESSION['msg'];      
      $msg = '<div class="alert alert-success" data-dismiss="alert">
                  <strong>Success :</strong>'.$_SESSION['msg'].'</div>';        
    }
    if($_SESSION['msg_type'] == 'error')
    {
      //$msg = 'FAILURE :'.$_SESSION['msg'];
       $msg = '<div class="alert alert-error" data-dismiss="alert">
            <strong>Error :</strong>'.$_SESSION['msg'].'
          </div>';
    }
    
    if($_SESSION['msg_type'] == 'warning')// Warning
    {
      //$msg = 'WARNING :'.$_SESSION['msg'];
      $msg = '<div class="alert" data-dismiss="alert">
            <strong>Warning :</strong>'.$_SESSION['msg'].'
          </div>';
    }
    if($_SESSION['msg_type'] == 'info')
    {
      //$msg = 'FAILURE :'.$_SESSION['msg'];
      $msg = '<div class="alert alert-info" data-dismiss="alert">
            <strong>Info :</strong>'.$_SESSION['msg'].'
          </div>';
    }   
  }
  echo $msg ;
?>

   
