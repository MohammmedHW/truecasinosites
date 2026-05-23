<!-- BEGIN CONTAINER -->
<div class="page-container row"> 
  <!-- BEGIN SIDEBAR -->
  <?php
    $currentPage = basename($_SERVER['PHP_SELF']);
    $navGroups = array(
      array(
        'label' => 'Overview',
        'items' => array(
          array('title' => 'Dashboard', 'icon' => 'fa fa-tachometer', 'href' => 'index.php'),
        ),
      ),
      array(
        'label' => 'Casino Content',
        'items' => array(
          array('title' => 'Offers', 'icon' => 'fa fa-diamond', 'children' => array(
            array('title' => 'Add Offer', 'href' => 'offers.php'),
            array('title' => 'View Offers', 'href' => 'view_offers.php'),
          )),
          array('title' => 'Networks', 'icon' => 'fa fa-sitemap', 'children' => array(
            array('title' => 'Add Network', 'href' => 'network.php'),
            array('title' => 'View Networks', 'href' => 'view_network.php'),
          )),
          array('title' => 'Categories', 'icon' => 'fa fa-th-large', 'children' => array(
            array('title' => 'Add Category', 'href' => 'category.php'),
            array('title' => 'View Categories', 'href' => 'view_category.php'),
          )),
          array('title' => 'Pages', 'icon' => 'fa fa-file-text-o', 'children' => array(
            array('title' => 'Add Page', 'href' => 'pages.php'),
            array('title' => 'View Pages', 'href' => 'view_pages.php'),
          )),
        ),
      ),
      array(
        'label' => 'Operations',
        'items' => array(
          array('title' => 'Home Page Edit', 'icon' => 'fa fa-pencil-square-o', 'href' => 'category.php?id=1'),
          array('title' => 'Staff', 'icon' => 'fa fa-users', 'children' => array(
            array('title' => 'Add Staff', 'href' => 'staff.php'),
            array('title' => 'View Staff', 'href' => 'view_staff.php'),
          )),
          array('title' => 'Settings', 'icon' => 'fa fa-cog', 'href' => 'settings.php'),
        ),
      ),
    );

    function adm_is_active($href, $currentPage) {
      $path = parse_url($href, PHP_URL_PATH);
      return basename((string) $path) === $currentPage;
    }
  ?>
 <style>
  .page-sidebar {
    width: 280px;
    height: 100vh;
    background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
    color: #f8fafc;
    position: fixed;
    left: 0;
    top: 0;
    overflow-y: auto;
    font-family: 'Segoe UI', sans-serif;
    box-shadow: 4px 0 20px rgba(0,0,0,0.25);
  }

  .page-sidebar-wrapper {
    padding: 20px 0;
  }

  /* SECTION LABELS */
  .adm-nav-label {
    padding: 40px 20px 10px;
    padding-bottom: 20px;
    font-size: 11px;
    font-weight: 700;
    color: #94a3b8;
    text-transform: uppercase;
    letter-spacing: 1.2px;
  }

  /* MENU */
  .page-sidebar ul {
    list-style: none;
    margin: 0;
    padding: 0;
  }

  .page-sidebar ul li {
    position: relative;
    margin: 6px 12px;
    border-radius: 12px;
    overflow: hidden;
  }

  .page-sidebar ul li a {
    display: flex;
    align-items: center;
    padding: 14px 18px;
    color: #cbd5e1;
    text-decoration: none;
    transition: all 0.3s ease;
    font-size: 15px;
    font-weight: 500;
    border-left: 3px solid transparent;
    border-radius: 12px;
  }

  .page-sidebar ul li a i {
    width: 22px;
    font-size: 16px;
    margin-right: 12px;
    color: #94a3b8;
    transition: 0.3s;
  }

  /* HOVER */
  .page-sidebar ul li a:hover {
    background: rgba(255,255,255,0.06);
    color: #ffffff;
    border-left-color: #38bdf8;
  }

  .page-sidebar ul li a:hover i {
    color: #38bdf8;
  }

  /* ACTIVE */
  .page-sidebar ul li.active > a {
    background: linear-gradient(
      90deg,
      rgba(56, 189, 248, 0.18),
      rgba(30, 41, 59, 0.4)
    );
    color: #ffffff;
    border-left-color: #38bdf8;
    box-shadow: inset 0 0 0 1px rgba(255,255,255,0.04);
  }

  .page-sidebar ul li.active > a i {
    color: #38bdf8;
  }

  /* ARROW */
  .page-sidebar ul li .arrow {
    margin-left: auto;
    transition: transform 0.3s ease;
    color: #94a3b8;
  }

  .page-sidebar ul li .arrow::before {
    content: "›";
    font-size: 18px;
  }

  .page-sidebar ul li.open > a .arrow {
    transform: rotate(90deg);
  }

  /* SUB MENU */
  .sub-menu {
    background: rgba(255,255,255,0.06);
    display: none;
    margin-top: 4px;
    border-radius: 10px;
    overflow: hidden;
  }

  .page-sidebar ul li.open .sub-menu {
    display: block;
  }

  .sub-menu li {
    margin: 0;
  }

  .sub-menu li a {
    padding: 12px 20px 12px 55px;
    font-size: 14px;
    color: #94a3b8;
    background: transparent;
  }

  .sub-menu li a:hover {
    background: rgba(255,255,255,0.04);
    color: #ffffff;
  }

  .sub-menu li.active a {
    color: #38bdf8;
    background: rgba(56, 189, 248, 0.08);
  }

  .clearfix {
    clear: both;
  }

  /* SCROLLBAR */
  .page-sidebar::-webkit-scrollbar {
    width: 6px;
  }

  .page-sidebar::-webkit-scrollbar-track {
    background: transparent;
  }

  .page-sidebar::-webkit-scrollbar-thumb {
    background: rgba(148,163,184,0.25);
    border-radius: 10px;
  }

  .page-sidebar::-webkit-scrollbar-thumb:hover {
    background: rgba(255,255,255,0.06);
  }
</style>
<div class="page-sidebar" id="main-menu">
  <div class="page-sidebar-wrapper scrollbar-dynamic" id="main-menu-wrapper">

   
    <!-- SIDEBAR MENU -->
    <?php foreach ($navGroups as $group): ?>
      
      <div class="adm-nav-label">
        <?php echo htmlspecialchars($group['label']); ?>
      </div>

      <ul>
        <?php foreach ($group['items'] as $item): ?>

          <?php
            $hasChildren = !empty($item['children']);
            $isActive = false;

            if ($hasChildren) {
              foreach ($item['children'] as $child) {
                if (adm_is_active($child['href'], $currentPage)) {
                  $isActive = true;
                  break;
                }
              }
            } else {
              $isActive = adm_is_active($item['href'], $currentPage);
            }
          ?>

          <li class="<?php echo $isActive ? 'active open' : ''; ?>">

            <?php if ($hasChildren): ?>

              <a href="javascript:;">
                <i class="<?php echo htmlspecialchars($item['icon']); ?>"></i>

                <span class="title">
                  <?php echo htmlspecialchars($item['title']); ?>
                </span>

                <span class="arrow"></span>
              </a>

              <ul class="sub-menu">

                <?php foreach ($item['children'] as $child): ?>

                  <li class="<?php echo adm_is_active($child['href'], $currentPage) ? 'active' : ''; ?>">

                    <a href="<?php echo htmlspecialchars($child['href']); ?>">
                      <?php echo htmlspecialchars($child['title']); ?>
                    </a>

                  </li>

                <?php endforeach; ?>

              </ul>

            <?php else: ?>

              <a href="<?php echo htmlspecialchars($item['href']); ?>">

                <i class="<?php echo htmlspecialchars($item['icon']); ?>"></i>

                <span class="title">
                  <?php echo htmlspecialchars($item['title']); ?>
                </span>

              </a>

            <?php endif; ?>

          </li>

        <?php endforeach; ?>
      </ul>

    <?php endforeach; ?>

    <div class="clearfix"></div>

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

   
