<?php
$var = check_session_id();

if($var == '0')
{
    gotopage('You Must Login First.','warning',"login.php",'','',"");
    exit;
    
}

?>