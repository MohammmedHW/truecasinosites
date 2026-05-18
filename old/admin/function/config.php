<?php
$hostname="localhost";
$user_name="arbswnad_casino";
$password="1klRVmUI[aH6";
$dbname="arbswnad_casino";
$con =mysqli_connect($hostname,$user_name,$password,$dbname);
 
mysqli_set_charset($con, "utf8");
$sett = "SELECT * FROM `setting`";
$sett_res = mysqli_query($con,$sett) or die(mysql_error());
static $app_vars = array(); 
while($setting_row=mysqli_fetch_assoc($sett_res)){
$app_vars[$setting_row["name"]] = $setting_row["value"];
}

$pg_title ="";
$menu_title = "";
$submenu_title = "";
?>