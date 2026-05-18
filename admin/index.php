<?php
session_start(); // start session for login tracking

// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Include config and function files
$config_file = realpath(__DIR__ . '/function/config.inc.php');
$define_file = realpath(__DIR__ . '/php/define.php');

if (file_exists($config_file)) {
    include($config_file);
} else {
    die('Error: config.inc.php not found');
}

if (file_exists($define_file)) {
    include($define_file);
} else {
    die('Error: define.php not found');
}

// Check if user is logged in
if (!isset($_SESSION['user_id']) || $_SESSION['user_id'] == '') {
    header('Location: login.php'); // redirect to login page
    exit();
}

// Set page titles
$pg_title = "dashboard";
$title['dashboard'] = "dashboard";
$menu_title = $title['dashboard'];
$submenu_title = $title['dashboard'];

// Include header and menu
$header_file = realpath(__DIR__ . '/theme/html/header.php');
$menu_file = realpath(__DIR__ . '/theme/html/menu.php');

if (file_exists($header_file)) include($header_file);
if (file_exists($menu_file)) include($menu_file);

// Include the main dashboard content
$dashboard_file = realpath(__DIR__ . '/theme/dashboard.php'); // Create dashboard.php if it doesn't exist
if (file_exists($dashboard_file)) {
    include($dashboard_file);
} else {
    echo '<p>Dashboard content not found. Please create theme/dashboard.php</p>';
}

// Include footer
$footer_file = realpath(__DIR__ . '/theme/html/footer.php');
if (file_exists($footer_file)) include($footer_file);
?>