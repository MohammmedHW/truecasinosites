<?php
include(realpath(__DIR__) . '/function/config.inc.php');
include(realpath(__DIR__) . '/php/define.php');

$pg_title = 'dashboard';
$title['dashboard'] = 'Dashboard';
$menu_title = $title['dashboard'];
$submenu_title = $title['dashboard'];

include(realpath(__DIR__) . '/theme/html/header.php');
include(realpath(__DIR__) . '/theme/html/menu.php');

$dashboard_file = realpath(__DIR__ . '/theme/dashboard.php');
if ($dashboard_file && file_exists($dashboard_file)) {
    include($dashboard_file);
} else {
    include(realpath(__DIR__) . '/theme/index.php');
}

include(realpath(__DIR__) . '/theme/html/footer.php');
?>
