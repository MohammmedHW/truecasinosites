<?php
include(realpath(dirname(__FILE__)).'/function/config.inc.php');
if((isset($_SESSION['user_id'])) && ($_SESSION['user_id'] != ''))
{
    echo '<script type="text/javascript">window.location.href="index.php"</script>';
    exit;
}

$pg_title='login_title';
include(realpath(dirname(__FILE__)).'/theme/html/fronthead.php'); 
include(realpath(dirname(__FILE__)).'/theme/'.basename($_SERVER['PHP_SELF']));
include(realpath(dirname(__FILE__)).'/theme/html/foot.php');
?>
