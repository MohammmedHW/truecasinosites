<?php
include(realpath(dirname(__FILE__)).'/function/config.inc.php');
$pg_title="Farmers";
/*$title['dashboard'] = "Farmers";
$menu_title=$title['Farmers'];
$submenu_title=$title['Farmers'];*/
include(realpath(dirname(__FILE__)).'/php/define.php'); 
include(realpath(dirname(__FILE__)).'/theme/html/header.php'); 
include(realpath(dirname(__FILE__)).'/theme/html/menu.php');

include(realpath(dirname(__FILE__)).'/theme/'.basename($_SERVER['PHP_SELF']));


include(realpath(dirname(__FILE__)).'/theme/html/footer.php');



?>