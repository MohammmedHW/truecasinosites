<style>
.is-sticky #sticky .navbar-nav .img-nav {
    display: none;
}
</style>
            <!-- description-block ========== START ========== -->
        <main class="main">
 <body class="page push-canvas">
                        
            <body class="page page-breadcrumb push-canvas">
            <div class="wrapper" id="scroll-top">
    <!-- header ========== START ========== -->
    <header class="header" id="sticky">
        <div class="container">
            <nav class="navbar">
                <a class="navbar-brand" href="/">
                    <img src="<?php echo $setting['logo'];?>" alt="<?php echo $setting['logo_alt'];?>">
                </a>
                <div id="overlay"></div>
                <button class="navbar-toggler hidden-md-up pull-right" type="button" data-toggle="push" data-target="#navbar">
                            <span class="push-icon">
                            <span class="icon-row"></span>
                            <span class="icon-row"></span>
                            <span class="icon-row"></span>
                            </span>
                </button>
                <div id="navbar" class="navbar-push navbar-push-left">
                    <button class="navbar-toggler hidden-md-up pull-right" type="button" data-toggle="push" data-target="#navbar">
                                <span class="push-icon">
                                <span class="icon-row"></span>
                                <span class="icon-row"></span>
                                <span class="icon-row"></span>
                                </span>
                    </button>
                    <div class="wrapper-overflow">
                        <ul class="navbar-nav">
<?php  $sql_pages_all = 'select * from `pages` WHERE `menutop` =1 ORDER BY `position` ASC ';
$res_pages_all = mysqli_query($con, $sql_pages_all  ) ;
while ($page_menu = mysqli_fetch_array($res_pages_all)){
	?>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?slug=<?php echo $page_menu['slug'];?>">
                                <div class="img-nav"><img src="<?php echo $page_menu['icon'];?>"></div><?php echo $page_menu['name'];?></a>
                            </li>
<?php }?>
                        </ul>
                        <div class="lists">
                            <ul class="footer-list">
<?php  $sql_pages_all = 'select * from `pages` WHERE `menutop` = 0 AND  `menufoot` = 1 ORDER BY `position` ASC ';
$res_pages_all = mysqli_query($con, $sql_pages_all  ) ;
while ($page_menu = mysqli_fetch_array($res_pages_all)){
	?>
                             <li class="footer-list-item">
                                    <a href="index.php?slug=<?php echo $page_menu['slug'];?>" class="footer-list-link"><?php echo $page_menu['name'];?></a>
                                </li>
<?php }?>
                            </ul>
                            <ul class="footer-list-social">

                                <li class="footer-list-social-item">
                                    <a target="_blank" href="https://www.twitter.com/" class="footer-list-social-link"><i class="ico ico-twitter"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </nav>
        </div>
    </header>
    <!-- header ========== END ========== -->