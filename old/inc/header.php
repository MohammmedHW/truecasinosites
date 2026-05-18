<?php
$setting = array();
$sql_setting = 'select * from `setting`   ';
$res_setting = mysqli_query($con, $sql_setting ) or die( 'MySQL Error: ' . mysqli_error() );
while($settings = mysqli_fetch_array($res_setting)){
	$setting[$settings['name']] = $settings['value'];
	}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $page['title'];?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo $page['desc'];?>">
    <meta name="keywords" content="<?php echo $page['keywords'];?>">
    <meta name="HandheldFriendly" content="true">
    <link rel="stylesheet" type="text/css" href="assets/style.css">
    <link href='https://fonts.googleapis.com/css?family=Gloria+Hallelujah|Montserrat|Courgette' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <link rel="canonical" href="https://www.topratedcasinos.co.uk">
    <!-- <link rel="mask-icon" href="safari-pinned-tab.svg" color="#5bbad5"> -->
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="mstile-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <script>
        (function (H) {
            H.className = H.className.replace(/\bno-js\b/, 'js')
        })(document.documentElement)
    </script>
    <style>
        img.galery-list{
            width:109px; /* you can use % */
            height: auto;
        }

    </style>

</head>
