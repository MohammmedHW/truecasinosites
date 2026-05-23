<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title><?php echo $app_vars['company_name']; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta content="Jay prakash tracking system" name="description" />
<meta content="Mono Infotech" name="author" />

<!-- BEGIN PLUGIN CSS -->
<link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="assets/plugins/bootstrap-select2/select2.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="assets/plugins/jquery-datatable/css/jquery.dataTables.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/datatables-responsive/css/datatables.responsive.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="assets/plugins/bootstrap-datepicker/css/datepicker.css" rel="stylesheet" type="text/css" />
<link href="assets/plugins/bootstrap-timepicker/css/bootstrap-timepicker.css" rel="stylesheet" type="text/css" />
<link href="assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css" rel="stylesheet" type="text/css" />
<link href="assets/plugins/boostrap-checkbox/css/bootstrap-checkbox.css" rel="stylesheet" type="text/css" media="screen"/>
<link rel="stylesheet" href="assets/plugins/ios-switch/ios7-switch.css" type="text/css" media="screen">
<!-- END PLUGIN CSS -->

<!-- BEGIN CORE CSS FRAMEWORK -->
<link href="assets/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/boostrapv3/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css"/>
<!-- END CORE CSS FRAMEWORK -->

<!-- BEGIN CSS TEMPLATE -->
<link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/custom-icon-set.css" rel="stylesheet" type="text/css"/>
<!-- END CSS TEMPLATE -->

<style>
  :root {
    --nav-bg: #0f172a;
    --nav-border: #1e293b;
    --text-white: #ffffff;
    --text-dim: #94a3b8;
    --primary-indigo: #6366f1;
    --primary-indigo-hover: #4f46e5;
    --danger-red: #f43f5e;
    --danger-red-hover: #e11d48;
    --radius-sm: 8px;
    --font-stack: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
  }

  body.admin-panel-modern {
    font-family: var(--font-stack);
    margin: 0;
    padding-top: 75px; /* Offset to prevent content overlap beneath the sticky header */
  }

  /* Global Fixed Header Structure */
  .header.navbar-modern {
    background-color: var(--nav-bg) !important;
    border-bottom: 1px solid var(--nav-border);
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 1000;
    height: 75px;
    display: flex;
    align-items: center;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
  }

  .navbar-inner-modern {
    display: flex;
    width: 100%;
    height: 100%;
    align-items: center;
    justify-content: space-between;
    padding: 0 24px;
  }

  /* Brand Identification Section */
  .header-seperation-modern {
    display: flex;
    align-items: center;
    gap: 16px;
    min-width: 200px;
  }

  .header-seperation-modern .logo {
    object-fit: contain;
    transition: opacity 0.2s ease;
  }

  .header-seperation-modern .logo:hover {
    opacity: 0.9;
  }

  /* Core Meta Navigation Content Areas */
  .quick-nav-modern {
    display: flex;
    flex: 1;
    justify-content: space-between;
    align-items: center;
    margin-left: 32px;
  }

  .adm-top-meta {
    display: flex;
    flex-direction: column;
    justify-content: center;
  }

  .adm-top-kicker {
    font-size: 10px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.12em;
    color: var(--primary-indigo);
    margin-bottom: 2px;
    line-height: 1;
  }

  .adm-top-title {
    font-size: 20px;
    font-weight: 800;
    color: var(--text-white);
    letter-spacing: -0.02em;
    line-height: 1.2;
    margin-bottom: 1px;
  }

  .adm-top-subtitle {
    font-size: 12px;
    color: var(--text-dim);
    line-height: 1.4;
    max-width: 550px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
  }

  /* Navigation Controller Buttons */
  .adm-top-actions {
    display: flex;
    align-items: center;
    gap: 12px;
  }

  .adm-top-chip {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background-color: rgba(255, 255, 255, 0.06);
    color: var(--text-white);
    padding: 8px 14px;
    border-radius: var(--radius-sm);
    font-size: 13px;
    font-weight: 600;
    text-decoration: none !important;
    border: 1px solid rgba(255, 255, 255, 0.08);
    transition: all 0.2s cubic-bezier(0.4, 0, 0.2, 1);
  }

  .adm-top-chip:hover {
    background-color: var(--primary-indigo);
    border-color: var(--primary-indigo-hover);
    color: var(--text-white) !important;
    transform: translateY(-1px);
  }

  .adm-top-link {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    color: var(--text-dim);
    padding: 8px 12px;
    font-size: 13px;
    font-weight: 600;
    text-decoration: none !important;
    transition: color 0.2s ease;
  }

  .adm-top-link:hover {
    color: var(--danger-red) !important;
  }

  /* Responsive Screen Breakpoint Management */
  @media (max-width: 991px) {
    .adm-top-subtitle {
      display: none; /* Strip back layout density on medium displays */
    }
  }

  @media (max-width: 768px) {
    .quick-nav-modern {
      margin-left: 16px;
    }
    .adm-top-kicker, 
    .adm-top-title {
      font-size: 15px;
    }
    .adm-top-kicker {
      font-size: 9px;
    }
    .adm-top-chip span {
      display: none; /* Hide button text descriptions on mobile viewports */
    }
    .adm-top-chip {
      padding: 8px;
    }
  }
</style>
</head>

<?php
$currentPage = basename($_SERVER['PHP_SELF']);
$pageTitleMap = array(
  'index.php' => 'Dashboard',
  'offers.php' => 'Manage Offers',
  'view_offers.php' => 'Casino Offers',
  'network.php' => 'Manage Networks',
  'view_network.php' => 'Networks',
  'category.php' => 'Manage Categories',
  'view_category.php' => 'Categories',
  'pages.php' => 'Manage Pages',
  'view_pages.php' => 'Pages',
  'staff.php' => 'Manage Staff',
  'view_staff.php' => 'Staff',
  'profile.php' => 'Profile',
  'settings.php' => 'Settings',
);
$currentPageTitle = isset($pageTitleMap[$currentPage]) ? $pageTitleMap[$currentPage] : (!empty($menu_title) ? $menu_title : 'Admin Panel');
?>

<body class="admin-panel-modern">

<!-- BEGIN FIXED HEADER -->
<div class="header navbar-modern"> 
  <div class="navbar-inner-modern">
    
    <!-- BRAND AND CORPORATE IDENTITY DISPLAY AREA -->
    
    
    <!-- METADATA DATA STREAM & WORKSPACE MANIFEST SELECTION -->
    <div class="quick-nav-modern"> 
      <div class="adm-top-meta">
        <div class="adm-top-kicker">Admin Workspace</div>
        <div class="adm-top-title"><?php echo htmlspecialchars($currentPageTitle); ?></div>
      
      </div>
      
      <!-- INTERACTION CONTROLLER UTILITIES -->
      <div class="adm-top-actions">
        <a class="adm-top-chip" href="index.php">
          <i class="fa fa-home"></i> <span>Dashboard</span>
        </a>
        <a class="adm-top-link" href="logout.php">
          <i class="fa fa-power-off"></i> <span>Log Out</span>
        </a>
      </div>
    </div> 
    
  </div>
</div>
<!-- END FIXED HEADER -->