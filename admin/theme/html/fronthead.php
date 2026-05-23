<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title><?php echo !empty($app_vars['company_name']) ? $app_vars['company_name'] . ' Admin' : 'Admin Login'; ?></title>
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
<style>
  :root {
    --admin-navy: #081a33;
    --admin-navy-soft: #0f2a4d;
    --admin-cyan: #3ecfbe;
    --admin-sand: #f7f4ee;
    --admin-text: #17324d;
    --admin-muted: #6a7f95;
    --admin-card: rgba(255, 255, 255, 0.96);
    --admin-shadow: 0 30px 80px rgba(5, 18, 36, 0.22);
    --admin-radius: 28px;
  }

  body.admin-auth {
    min-height: 100vh;
    background:
      radial-gradient(circle at top left, rgba(62, 207, 190, 0.22), transparent 35%),
      radial-gradient(circle at bottom right, rgba(255, 184, 77, 0.18), transparent 30%),
      linear-gradient(135deg, #061323 0%, #102b4c 55%, #0b1d36 100%);
    color: var(--admin-text);
    font-family: "Segoe UI", sans-serif;
  }

  .auth-shell {
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 32px 16px;
  }

  .auth-card {
    width: min(1120px, 100%);
    background: var(--admin-card);
    border-radius: var(--admin-radius);
    box-shadow: var(--admin-shadow);
    overflow: hidden;
  }

  .auth-panel {
    padding: 56px 48px;
  }

  .auth-hero {
    background:
      linear-gradient(180deg, rgba(8, 26, 51, 0.7), rgba(8, 26, 51, 0.92)),
      url('bg.jpeg') center/cover no-repeat;
    color: #fff;
    min-height: 100%;
    position: relative;
  }

  .auth-kicker {
    display: inline-block;
    font-size: 12px;
    letter-spacing: 0.16em;
    text-transform: uppercase;
    color: var(--admin-cyan);
    margin-bottom: 18px;
  }

  .auth-hero h1,
  .auth-form-wrap h2 {
    margin: 0 0 14px;
    font-weight: 700;
    line-height: 1.08;
  }

  .auth-hero h1 {
    font-size: 42px;
  }

  .auth-hero p,
  .auth-form-wrap .auth-copy,
  .auth-feature {
    color: rgba(255, 255, 255, 0.82);
    font-size: 16px;
    line-height: 1.7;
  }

  .auth-feature-list {
    margin: 36px 0 0;
    padding: 0;
    list-style: none;
  }

  .auth-feature-list li {
    margin-bottom: 16px;
    padding-left: 18px;
    position: relative;
  }

  .auth-feature-list li:before {
    content: "";
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: var(--admin-cyan);
    position: absolute;
    left: 0;
    top: 10px;
  }

  .auth-form-wrap h2 {
    font-size: 34px;
    color: var(--admin-navy);
  }

  .auth-copy {
    color: var(--admin-muted);
    margin-bottom: 28px;
  }

  .auth-logo {
    max-width: 170px;
    margin-bottom: 24px;
  }

  .auth-form .form-group {
    margin-bottom: 18px;
  }

  .auth-form .form-label {
    font-size: 13px;
    font-weight: 700;
    color: var(--admin-navy);
    text-transform: uppercase;
    letter-spacing: 0.08em;
    margin-bottom: 8px;
  }

  .auth-form .form-control {
    height: 52px;
    border-radius: 14px;
    border: 1px solid #d8e0ea;
    box-shadow: none;
    font-size: 15px;
    padding: 14px 16px;
  }

  .auth-form .form-control:focus {
    border-color: #2b8cff;
    box-shadow: 0 0 0 4px rgba(43, 140, 255, 0.12);
  }

  .auth-actions {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 12px;
    margin-top: 10px;
  }

  .auth-check {
    color: var(--admin-muted);
    font-size: 14px;
  }

  .auth-btn {
    border: 0;
    border-radius: 14px;
    background: linear-gradient(135deg, #1d7dfa 0%, #0d5bd7 100%);
    color: #fff;
    padding: 14px 24px;
    font-weight: 700;
    min-width: 170px;
  }

  .auth-links {
    display: flex;
    gap: 18px;
    flex-wrap: wrap;
    margin-top: 18px;
  }

  .auth-links a {
    color: #1d7dfa;
    font-weight: 600;
  }

  .auth-alert .alert {
    border-radius: 14px;
    border: 0;
    margin-bottom: 20px;
  }

  @media (max-width: 991px) {
    .auth-panel {
      padding: 36px 28px;
    }

    .auth-hero h1,
    .auth-form-wrap h2 {
      font-size: 30px;
    }
  }
</style>
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
<body class="admin-auth">
<div class="auth-shell">
  <div class="auth-card">
    <div class="row no-margin">
