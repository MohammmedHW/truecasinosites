<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title>Webarch - Responsive Admin Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta content="" name="description" />
<meta content="" name="author" />
<!-- BEGIN CORE CSS FRAMEWORK -->
<link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="assets/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/boostrapv3/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
<!-- END CORE CSS FRAMEWORK -->
<!-- BEGIN CSS TEMPLATE -->
<link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/custom-icon-set.css" rel="stylesheet" type="text/css"/>
<!-- END CSS TEMPLATE -->
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->

<?php
//echo $_SESSION['net_id']."====="; die;
$msg = '';
	if((isset($_SESSION['msg'])) && ($_SESSION['msg'] != ''))
	{
		if($_SESSION['msg_type'] == 'success')
		{
			//$msg = 'SUCCESS :'.$_SESSION['msg'];			
			$msg = '<div class="alert alert-success" data-dismiss="alert">
						<strong>Success :</strong>'.$_SESSION['msg'].'
					</div>';				
		}
		if($_SESSION['msg_type'] == 'error')
		{
			//$msg = 'FAILURE :'.$_SESSION['msg'];
			 $msg = '<div class="alert alert-error" data-dismiss="alert">
						<strong>Error :</strong>'.$_SESSION['msg'].'
					</div>';
		}
		if($_SESSION['msg_type'] == 'warning')
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
?>
<body class="error-body no-top">
<div class="container">
  <div class="row login-container column-seperation">  
      <div class="col-md-12" align="center">
      <img src="Images/logo.png"   data-src="Jay Prakash" data-src-retina="Images/logo.png"  class="img-responsive" width="200px"/>
      </div>