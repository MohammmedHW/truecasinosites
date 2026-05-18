<?php
include(realpath(dirname(__FILE__)).'/function/config.inc.php');
$pg_title="dashboard";
$title['dashboard'] = "dashboard";
$menu_title=$title['dashboard'];
$submenu_title=$title['dashboard'];
//print_r($_SESSION);
include(realpath(dirname(__FILE__)).'/php/define.php'); 
include(realpath(dirname(__FILE__)).'/theme/html/header.php'); 
include(realpath(dirname(__FILE__)).'/theme/html/menu.php');
include(realpath(dirname(__FILE__)).'/theme/'.basename($_SERVER['PHP_SELF']));


include(realpath(dirname(__FILE__)).'/theme/html/footer.php');


?>