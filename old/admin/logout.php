<?php
include(realpath(dirname(__FILE__)).'/function/config.inc.php');


    activity_employee($_SESSION['user_id'],'activity_employee_logout','activity_logout_successfully'.' #'.$_SESSION['user_id'],'success');

    unset($_SESSION['user_id']);
 
	$goto = "login.php"; 

	$_SESSION['msg'] = "success";
	$_SESSION['msg_type'] = 'Logout successfully, ';
	echo '<script type="text/javascript">window.location = "'.$goto.'"</script>';
	exit;

?>
