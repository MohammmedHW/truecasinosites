<?php
ob_start();
error_reporting(0);
include(realpath(dirname(__FILE__)).'/config.php');
//include(realpath(dirname(__FILE__)).'/config.php');
ini_set('session.gc_maxlifetime', 1800);

if(!isset($_SESSION)) 
{  
  session_start();
}

static $display = array();
static $title = array();
include(realpath(dirname(__FILE__)).'/function.php');


?>