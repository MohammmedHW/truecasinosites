<?php
if (!function_exists('check_session_id')) {
    function check_session_id() {
        if (isset($_SESSION['user_id']) && $_SESSION['user_id'] != '') {
            return '1';
        }
        return '0';
    }
}

if (!function_exists('gotopage')) {
    function gotopage($msg = '', $msg_type = '', $url = '') {
        if (!isset($_SESSION)) {
            session_start();
        }
        if ($msg != '') {
            $_SESSION['msg'] = $msg;
            $_SESSION['msg_type'] = $msg_type;
        }
        echo '<script type="text/javascript">window.location.href="' . $url . '"</script>';
        exit;
    }
}

$var = check_session_id();

if($var == '0')
{
    gotopage('You Must Login First.','warning',"login.php");
    exit;
}
?>