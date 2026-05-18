<?php
$setting = array();
$sql_setting = 'SELECT * FROM `setting`';
$res_setting = mysqli_query($con, $sql_setting) or die('MySQL Error: ' . mysqli_error($con));
while ($settings = mysqli_fetch_array($res_setting)) {
    $setting[$settings['name']] = $settings['value'];
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo htmlspecialchars($page['title'] ?? 'Popular Casino Sites'); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page['desci'] ?? ''); ?>">
    <meta name="keywords" content="<?php echo htmlspecialchars($page['keywords'] ?? ''); ?>">
    <meta name="HandheldFriendly" content="true">
    <meta name="theme-color" content="#0b0c14">

    <!-- Canonical -->
    <link rel="canonical" href="http://popularcasinosites.com/">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Outfit:wght@400;600;700;800&display=swap" rel="stylesheet">

    <!-- Font Awesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- Modern CSS -->
    <link rel="stylesheet" href="assets/modern.css">
</head>