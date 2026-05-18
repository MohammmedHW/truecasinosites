<?php
include(realpath(dirname(__FILE__)).'/admin/function/config.php');
$pageslug = $_GET['slug'];
$where = " WHERE `ishome` =1";
$ishome = 1;
if($pageslug){
	$where = " WHERE `slug` LIKE '".$pageslug."'";
	$ishome = 0;
	}
$sql_pages = 'select * from `pages` '.$where.'  ';
$res_pages = mysqli_query($con, $sql_pages ) or die( 'MySQL Error: ' . mysqli_error() );
$page = mysqli_fetch_array($res_pages);
//	print_r($pages);
	
	
include(realpath(dirname(__FILE__)).'/inc/header.php'); 
include(realpath(dirname(__FILE__)).'/inc/menu.php');
?>

 

        <main class="main">
            <!-- description-block ========== START ========== -->
        <?php 
		echo $page['top_desc'];?>
        
        <div class="rated-block">
            <div class="container">
                <div class="paypal-title">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="heading heading-before heading-before-like ">
                                <i class="fa fa-thumbs-up"></i>
                                <h4 class="h4"><?php echo $page['heading'];?></h4>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <p class="paypal-title-icon text-lg-right"><span class="hidden-xs-down">ALL CASINOS ARE:&emsp;</span><i
                                        class="fa fa-lock text-secondary hidden-xs-down"></i>
                                UK LICENCED&ensp;<i
                                        class="fa fa-check text-success hidden-xs-down"></i>
                                EXPERTLY REVIEWED  &ensp;
                                <span
                                        class="hidden-xs-down"><i
                                            class="fa fa-mobile text-danger"></i>&ensp;</span>MOBILE FRIENDLY
                            </p>
                        </div>
                    </div>
                </div>

                <ul class="rated-heading hidden-lg-down rated-heading-view">
                    <li class="rank sort" data-sort-by="rank">RANK
                        <i class="fa fa-sort"></i></li>
                    <li class="name sort" data-sort-by="name">CASINO NAME
                        <i class="fa fa-sort"></i></li>
                    <li class="score sort"
                        data-sort-by="rating">USER RATING <i
                                class="fa fa-sort"></i></li>
                    <li class="bonus sort"
                        data-sort-by="bonus">SIGN-UP BONUS <i
                                class="fa fa-sort"></i></li>
                    <li class="paypal">BADGE</li>
                    <li class="key">KEY FEATURES</li>
                    <li class="play">PLAY NOW!</li>
                </ul>
                <ol class="rated sorting">

                    
                                            
                            
                                                            <li class="rated-item rated-item-relative rated-item-relative-pb paypal-item item-mobile rated-item-view">
    <div class="row">
        <div class="col-img">
            <div class="img-holder">
                <div class="img-box" style="background:#000000 ">
                                            
                        <a class="reviews-link" href="#" target="_blank"><picture>
                                <source media="(min-width: 1280px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 1280px) and (min-resolution: 120dpi)" sizes="188px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/376/slots-million-1509471457.png 376w">
                                <source media="(min-width: 1280px)" sizes="188px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/slots-million-1509471457.png 188w">

                                <source media="(min-width: 992px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 992px) and (min-resolution: 120dpi)" sizes="168px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/336/slots-million-1509471457.png 336w">
                                <source media="(min-width: 992px)" sizes="168px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/168/slots-million-1509471457.png 168w">

                                <source media="(min-width: 768px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 768px) and (min-resolution: 120dpi)" sizes="120px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/240/slots-million-1509471457.png 240w">
                                <source media="(min-width: 768px)" sizes="120px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/120/slots-million-1509471457.png 120w">

                                <source media="(min-width: 544px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 544px) and (min-resolution: 120dpi)" sizes="152px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/304/slots-million-1509471457.png 304w">
                                <source media="(min-width: 544px)" sizes="152px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/152/slots-million-1509471457.png 152w">

                                <source media="(min-width: 0px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 0px) and (min-resolution: 120dpi)" sizes="30vw" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/376/slots-million-1509471457.png 376w,
                                                                        https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/240/slots-million-1509471457.png 240w">
                                <source media="(min-width: 0px)" sizes="30vw" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/slots-million-1509471457.png 188w,
                                                                        https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/120/slots-million-1509471457.png 120w">

                                <img class="responsive-img" alt="" src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/slots-million-1509471457.png 188w">
                            </picture></a>
                                                                </div>

                <div class="top-number">
                    <p class="h4">1</p>
                </div>
            </div>
        </div>
        <div class="col-doubled col-doubled-top hidden-sm-down col-doubled-top-light">
            <div class="row">
                <div class="col-rating">
                    <div class="rating m-a-0">
                        <div class="rating-row">
                            <div class="result-text"></div>
                            <input type="hidden" class="rating-tooltip" data-filled="ico ico-star" data-empty="ico ico-star-empty" data-fractions="2"  data-votes="1099" value="5">
                            <p class="result text-default"><span class="result-value">1099</span> user ratings</p>
                        </div>

                                                <a class="reviews-link" href="#" target="_blank">Expert Review <i class="ico ico-caret-right vertical"></i></a>
                                            </div>
                </div>
                <div class="col-bonus hidden-sm-down">
                    <div class="bonus">
                        <p class="small" style="color:">100% Up To</p>
                        <p class="bonus-value">£100</p>
                        <p class="small">+100 Free Spins</p>
                        <div class="popover-block">
                            <a href="#" class="popover-link small dashed">Terms apply</a>
                            <div class="webui-popover-content">
                                <h6 class="title m-b-10">MATCH + FREE SPINS</h6>
                                <p class="text-dark m-b-10">For every £1 you bet, Slots Million will match it (up to a max of £100). You'll also get 100 free spins.</p>
                                <p class="m-b-10">Example: pay £50, play with £100</p>
                                <p class="m-b-10"><em class="text-dark">18+  Please Gamble Responsibly. Click &#039;Claim Bonus&#039; to view full terms and conditions</em>
                                </p>
                                <a href="https://www.topratedcasinos.co.uk/link/slots-million/1"
                                   onclick='ga("send", "event", "Link out", "More Info", "Slots Million - Vertical:Casino", "1"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","More Info-","Slots Million-","1-","Sign-up Bonus £ 100 100% Up To"],24);' target="_blank"                                   target="_blank" role="button" class="btn btn-secondary btn-xs btn-icon font-weight-normal">Claim  Bonus <span class="ico-right"><i class="ico ico-caret-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-doubled col-doubled-bottom col-doubled-bottom-light">
            <div class="row">
                <div class="col-variant hidden-sm-down">
                    <div class="variant m-b">
                        <div class="hidden-md-up">
                            <img src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Trending%20%3Cbr%3E%20This%20Week-badge-1480595534.png" width="50" height="50" alt="Trending <br> This Week">
                        </div>
                        <div class="hidden-sm-down">
                            <img src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Trending%20%3Cbr%3E%20This%20Week-badge-1480595534.png" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Trending%20%3Cbr%3E%20This%20Week-badge-1480595534.png 1x, https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/100/Trending%20%3Cbr%3E%20This%20Week-badge-1480595534.png 1.25x" width="50" height="50" alt="Trending <br> This Week">
                        </div>
                        <p class="small">Trending <br> This Week</p>
                    </div>
                </div>
                <div class="col-bonus hidden-md-up">
                    <div class="bonus m-t-0">
                        <p class="small" style="color:">100% Up To</p>
                        <p class="bonus-value">£100</p>
                        <p class="small">+100 Free Spins</p>
                        <div class="popover-block">
                            <a href="#" class="popover-link small dashed">Terms apply</a>
                            <div class="webui-popover-content">
                                <h6 class="title m-b-10">MATCH + FREE SPINS</h6>
                                <p class="text-dark m-b-10">For every £1 you bet, Slots Million will match it (up to a max of £100). You'll also get 100 free spins.</p>
                                <p class="m-b-10">Example: pay £50, play with £100</p>
                                <p class="m-b-10"><em class="text-dark">18+  Please Gamble Responsibly. Click &#039;Claim Bonus&#039; to view full terms and conditions</em>
                                </p>
                                <a href="https://www.topratedcasinos.co.uk/link/slots-million/1"
                                   onclick='ga("send", "event", "Link out", "More Info", "Slots Million - Vertical:Casino", "1"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","More Info-","Slots Million-","1-","Sign-up Bonus £ 100 100% Up To"],24);' target="_blank"                                   target="_blank" role="button" class="btn btn-secondary btn-xs btn-icon font-weight-normal">Claim  Bonus <span class="ico-right"><i class="ico ico-caret-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-time">
                                        <div class="review-checks">
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>Over 700 Slot Games</span>
                        </div>
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>Wednesday Special Offers</span>
                        </div>
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>Cool Design &amp; Graphics</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-button">
            <a href="https://www.topratedcasinos.co.uk/link/slots-million/1"
               onclick='ga("send", "event", "Link out", "Button", "Slots Million - Vertical:Casino", "1"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","Button-","Slots Million-","1-","Sign-up Bonus £ 100 100% Up To"],24);' target="_blank"               role="button" target="_blank" class="btn btn-secondary btn-icon">Claim Bonus
                <span class="txt-add">Go to Slots Million<span class="ico-right"><i class="ico ico-caret-right"></i></span></span>
            </a>
                            <a href="https://www.topratedcasinos.co.uk/link/slots-million/1"
                   onclick='ga("send", "event", "Link out", "Text link", "Slots Million - Vertical:Casino", "1"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","Text link-","Slots Million-","1-","Sign-up Bonus £ 100 100% Up To"],24);' target="_blank"                   class="hidden-lg-down link-url" target="_blank">www.slotsmillion.com/Spin</a>
                        <div class="col-rating hidden-md-up">
                <div class="rating m-a-0">
                    <div class="rating-row">
                        <input type="hidden" class="rating-tooltip" data-filled="ico ico-star" data-empty="ico ico-star-empty" data-fractions="2" data-votes="1099" value="5">
                        <p class="result text-default"><span class="result-value">1099</span> user ratings</p>
                    </div>
                                        <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/slots-million" target="_blank">Expert Review <i class="ico ico-caret-right vertical"></i></a>
                                    </div>
            </div>
        </div>
    </div>
</li>                                                    
                            
                                                            <li class="rated-item rated-item-relative rated-item-relative-pb paypal-item item-mobile rated-item-view">
    <div class="row">
        <div class="col-img">
            <div class="img-holder">
                <div class="img-box" style="background:#011927 ">
                                            
                        <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/fun-casino" target="_blank"><picture>
                                <source media="(min-width: 1280px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 1280px) and (min-resolution: 120dpi)" sizes="188px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/376/fun-casino-1518543215.png 376w">
                                <source media="(min-width: 1280px)" sizes="188px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/fun-casino-1518543215.png 188w">

                                <source media="(min-width: 992px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 992px) and (min-resolution: 120dpi)" sizes="168px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/336/fun-casino-1518543215.png 336w">
                                <source media="(min-width: 992px)" sizes="168px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/168/fun-casino-1518543215.png 168w">

                                <source media="(min-width: 768px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 768px) and (min-resolution: 120dpi)" sizes="120px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/240/fun-casino-1518543215.png 240w">
                                <source media="(min-width: 768px)" sizes="120px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/120/fun-casino-1518543215.png 120w">

                                <source media="(min-width: 544px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 544px) and (min-resolution: 120dpi)" sizes="152px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/304/fun-casino-1518543215.png 304w">
                                <source media="(min-width: 544px)" sizes="152px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/152/fun-casino-1518543215.png 152w">

                                <source media="(min-width: 0px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 0px) and (min-resolution: 120dpi)" sizes="30vw" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/376/fun-casino-1518543215.png 376w,
                                                                        https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/240/fun-casino-1518543215.png 240w">
                                <source media="(min-width: 0px)" sizes="30vw" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/fun-casino-1518543215.png 188w,
                                                                        https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/120/fun-casino-1518543215.png 120w">

                                <img class="responsive-img" alt="" src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/fun-casino-1518543215.png 188w">
                            </picture></a>
                                                                </div>

                <div class="top-number">
                    <p class="h4">2</p>
                </div>
            </div>
        </div>
        <div class="col-doubled col-doubled-top hidden-sm-down col-doubled-top-light">
            <div class="row">
                <div class="col-rating">
                    <div class="rating m-a-0">
                        <div class="rating-row">
                            <div class="result-text"></div>
                            <input type="hidden" class="rating-tooltip" data-filled="ico ico-star" data-empty="ico ico-star-empty" data-fractions="2"  data-votes="972" value="5">
                            <p class="result text-default"><span class="result-value">972</span> user ratings</p>
                        </div>

                                                <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/fun-casino" target="_blank">Expert Review <i class="ico ico-caret-right vertical"></i></a>
                                            </div>
                </div>
                <div class="col-bonus hidden-sm-down">
                    <div class="bonus">
                        <p class="small" style="color:">Enjoy Up To</p>
                        <p class="bonus-value">£998</p>
                        <p class="small">+ 111 Spins</p>
                        <div class="popover-block">
                            <a href="#" class="popover-link small dashed">Terms apply</a>
                            <div class="webui-popover-content">
                                <h6 class="title m-b-10">WELCOME BONUS</h6>
                                <p class="text-dark m-b-10">New players only, min deposit £10, wagering 50x bonus amount, max bet £5 with bonus funds. 11 Fun Spins for registration (max withdrawal is £100). 50% up to £499 bonus + 100 Fun Spins on 1st deposit. 50% up to £499 bonus on 2nd deposit. Welcome bonus excluded for players depositing with Skrill or Neteller. Live Casino play excluded with bonus. No max cashout for deposit bonus.</p>
                                <p class="m-b-10">pay £998, play with £499</p>
                                <p class="m-b-10"><em class="text-dark">18+  Please Gamble Responsibly. Click &#039;Claim Bonus&#039; to view full terms and conditions</em>
                                </p>
                                <a href="https://www.topratedcasinos.co.uk/link/fun-casino/1"
                                   onclick='ga("send", "event", "Link out", "More Info", "Fun Casino - Vertical:Casino", "2"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","More Info-","Fun Casino-","2-","+200 Free Spins £ 998 Enjoy Up To"],24);' target="_blank"                                   target="_blank" role="button" class="btn btn-secondary btn-xs btn-icon font-weight-normal">Claim  Bonus <span class="ico-right"><i class="ico ico-caret-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-doubled col-doubled-bottom col-doubled-bottom-light">
            <div class="row">
                <div class="col-variant hidden-sm-down">
                    <div class="variant m-b">
                        <div class="hidden-md-up">
                            <img src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Brand%20New%20%3Cbr%3E%20Casino-badge-1480595459.png" width="50" height="50" alt="Brand New <br> Casino">
                        </div>
                        <div class="hidden-sm-down">
                            <img src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Brand%20New%20%3Cbr%3E%20Casino-badge-1480595459.png" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Brand%20New%20%3Cbr%3E%20Casino-badge-1480595459.png 1x, https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/100/Brand%20New%20%3Cbr%3E%20Casino-badge-1480595459.png 1.25x" width="50" height="50" alt="Brand New <br> Casino">
                        </div>
                        <p class="small">Brand New <br> Casino</p>
                    </div>
                </div>
                <div class="col-bonus hidden-md-up">
                    <div class="bonus m-t-0">
                        <p class="small" style="color:">Enjoy Up To</p>
                        <p class="bonus-value">£998</p>
                        <p class="small">+ 111 Spins</p>
                        <div class="popover-block">
                            <a href="#" class="popover-link small dashed">Terms apply</a>
                            <div class="webui-popover-content">
                                <h6 class="title m-b-10">WELCOME BONUS</h6>
                                <p class="text-dark m-b-10">New players only, min deposit £10, wagering 50x bonus amount, max bet £5 with bonus funds. 11 Fun Spins for registration (max withdrawal is £100). 50% up to £499 bonus + 100 Fun Spins on 1st deposit. 50% up to £499 bonus on 2nd deposit. Welcome bonus excluded for players depositing with Skrill or Neteller. Live Casino play excluded with bonus. No max cashout for deposit bonus.</p>
                                <p class="m-b-10">pay £998, play with £499</p>
                                <p class="m-b-10"><em class="text-dark">18+  Please Gamble Responsibly. Click &#039;Claim Bonus&#039; to view full terms and conditions</em>
                                </p>
                                <a href="https://www.topratedcasinos.co.uk/link/fun-casino/1"
                                   onclick='ga("send", "event", "Link out", "More Info", "Fun Casino - Vertical:Casino", "2"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","More Info-","Fun Casino-","2-","+200 Free Spins £ 998 Enjoy Up To"],24);' target="_blank"                                   target="_blank" role="button" class="btn btn-secondary btn-xs btn-icon font-weight-normal">Claim  Bonus <span class="ico-right"><i class="ico ico-caret-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-time">
                                        <div class="review-checks">
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>Perfect For High Rollers</span>
                        </div>
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>Top Live Casino</span>
                        </div>
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>Weekly Tournaments</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-button">
            <a href="https://www.topratedcasinos.co.uk/link/fun-casino/1"
               onclick='ga("send", "event", "Link out", "Button", "Fun Casino - Vertical:Casino", "2"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","Button-","Fun Casino-","2-","+200 Free Spins £ 998 Enjoy Up To"],24);' target="_blank"               role="button" target="_blank" class="btn btn-secondary btn-icon">Claim Bonus
                <span class="txt-add">Go to Fun Casino<span class="ico-right"><i class="ico ico-caret-right"></i></span></span>
            </a>
                            <a href="https://www.topratedcasinos.co.uk/link/fun-casino/1"
                   onclick='ga("send", "event", "Link out", "Text link", "Fun Casino - Vertical:Casino", "2"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","Text link-","Fun Casino-","2-","+200 Free Spins £ 998 Enjoy Up To"],24);' target="_blank"                   class="hidden-lg-down link-url" target="_blank">www.funcasino.com/Register</a>
                        <div class="col-rating hidden-md-up">
                <div class="rating m-a-0">
                    <div class="rating-row">
                        <input type="hidden" class="rating-tooltip" data-filled="ico ico-star" data-empty="ico ico-star-empty" data-fractions="2" data-votes="972" value="5">
                        <p class="result text-default"><span class="result-value">972</span> user ratings</p>
                    </div>
                                        <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/fun-casino" target="_blank">Expert Review <i class="ico ico-caret-right vertical"></i></a>
                                    </div>
            </div>
        </div>
    </div>
</li>                                                    
                            
                                                            <li class="rated-item rated-item-relative rated-item-relative-pb paypal-item item-mobile rated-item-view">
    <div class="row">
        <div class="col-img">
            <div class="img-holder">
                <div class="img-box" style="background:#00257d ">
                                            
                        <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/all-british-casino" target="_blank"><picture>
                                <source media="(min-width: 1280px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 1280px) and (min-resolution: 120dpi)" sizes="188px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/376/all-british-casino-1523436324.png 376w">
                                <source media="(min-width: 1280px)" sizes="188px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/all-british-casino-1523436324.png 188w">

                                <source media="(min-width: 992px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 992px) and (min-resolution: 120dpi)" sizes="168px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/336/all-british-casino-1523436324.png 336w">
                                <source media="(min-width: 992px)" sizes="168px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/168/all-british-casino-1523436324.png 168w">

                                <source media="(min-width: 768px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 768px) and (min-resolution: 120dpi)" sizes="120px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/240/all-british-casino-1523436324.png 240w">
                                <source media="(min-width: 768px)" sizes="120px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/120/all-british-casino-1523436324.png 120w">

                                <source media="(min-width: 544px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 544px) and (min-resolution: 120dpi)" sizes="152px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/304/all-british-casino-1523436324.png 304w">
                                <source media="(min-width: 544px)" sizes="152px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/152/all-british-casino-1523436324.png 152w">

                                <source media="(min-width: 0px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 0px) and (min-resolution: 120dpi)" sizes="30vw" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/376/all-british-casino-1523436324.png 376w,
                                                                        https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/240/all-british-casino-1523436324.png 240w">
                                <source media="(min-width: 0px)" sizes="30vw" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/all-british-casino-1523436324.png 188w,
                                                                        https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/120/all-british-casino-1523436324.png 120w">

                                <img class="responsive-img" alt="" src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/all-british-casino-1523436324.png 188w">
                            </picture></a>
                                                                </div>

                <div class="top-number">
                    <p class="h4">3</p>
                </div>
            </div>
        </div>
        <div class="col-doubled col-doubled-top hidden-sm-down col-doubled-top-light">
            <div class="row">
                <div class="col-rating">
                    <div class="rating m-a-0">
                        <div class="rating-row">
                            <div class="result-text"></div>
                            <input type="hidden" class="rating-tooltip" data-filled="ico ico-star" data-empty="ico ico-star-empty" data-fractions="2"  data-votes="1,454" value="5">
                            <p class="result text-default"><span class="result-value">1,454</span> user ratings</p>
                        </div>

                                                <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/all-british-casino" target="_blank">Expert Review <i class="ico ico-caret-right vertical"></i></a>
                                            </div>
                </div>
                <div class="col-bonus hidden-sm-down">
                    <div class="bonus">
                        <p class="small" style="color:">100% Up To</p>
                        <p class="bonus-value">£300</p>
                        <p class="small">+ 100 Spins</p>
                        <div class="popover-block">
                            <a href="#" class="popover-link small dashed">Terms apply</a>
                            <div class="webui-popover-content">
                                <h6 class="title m-b-10">MATCH + SPINS</h6>
                                <p class="text-dark m-b-10">New customers only, min deposit £20, wagering 35x bonus amount, max bet £5 with bonus funds. 100% up to £300 bonus + 100 Bonus Spins on 1st deposit. Welcome bonus excluded for players depositing with Skrill or Neteller. Live Casino play excluded with bonus. No max cashout for deposit bonus. </p>
                                <p class="m-b-10">pay £150, play with £300</p>
                                <p class="m-b-10"><em class="text-dark">18+  Please Gamble Responsibly. Click &#039;Claim Bonus&#039; to view full terms and conditions</em>
                                </p>
                                <a href="https://www.topratedcasinos.co.uk/link/all-british-casino/3"
                                   onclick='ga("send", "event", "Link out", "More Info", "All British Casino - Vertical:Casino", "3"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","More Info-","All British Casino-","3-","Sign-up Bonus £ 300 100% Up To"],24);' target="_blank"                                   target="_blank" role="button" class="btn btn-secondary btn-xs btn-icon font-weight-normal">Claim  Bonus <span class="ico-right"><i class="ico ico-caret-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-doubled col-doubled-bottom col-doubled-bottom-light">
            <div class="row">
                <div class="col-variant hidden-sm-down">
                    <div class="variant m-b">
                        <div class="hidden-md-up">
                            <img src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Top%20Games%20%3Cbr%3E%20Selection-badge-1480595387.png" width="50" height="50" alt="Top Games <br> Selection">
                        </div>
                        <div class="hidden-sm-down">
                            <img src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Top%20Games%20%3Cbr%3E%20Selection-badge-1480595387.png" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Top%20Games%20%3Cbr%3E%20Selection-badge-1480595387.png 1x, https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/100/Top%20Games%20%3Cbr%3E%20Selection-badge-1480595387.png 1.25x" width="50" height="50" alt="Top Games <br> Selection">
                        </div>
                        <p class="small">Top Games <br> Selection</p>
                    </div>
                </div>
                <div class="col-bonus hidden-md-up">
                    <div class="bonus m-t-0">
                        <p class="small" style="color:">100% Up To</p>
                        <p class="bonus-value">£300</p>
                        <p class="small">+ 100 Spins</p>
                        <div class="popover-block">
                            <a href="#" class="popover-link small dashed">Terms apply</a>
                            <div class="webui-popover-content">
                                <h6 class="title m-b-10">MATCH + SPINS</h6>
                                <p class="text-dark m-b-10">New customers only, min deposit £20, wagering 35x bonus amount, max bet £5 with bonus funds. 100% up to £300 bonus + 100 Bonus Spins on 1st deposit. Welcome bonus excluded for players depositing with Skrill or Neteller. Live Casino play excluded with bonus. No max cashout for deposit bonus. </p>
                                <p class="m-b-10">pay £150, play with £300</p>
                                <p class="m-b-10"><em class="text-dark">18+  Please Gamble Responsibly. Click &#039;Claim Bonus&#039; to view full terms and conditions</em>
                                </p>
                                <a href="https://www.topratedcasinos.co.uk/link/all-british-casino/3"
                                   onclick='ga("send", "event", "Link out", "More Info", "All British Casino - Vertical:Casino", "3"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","More Info-","All British Casino-","3-","Sign-up Bonus £ 300 100% Up To"],24);' target="_blank"                                   target="_blank" role="button" class="btn btn-secondary btn-xs btn-icon font-weight-normal">Claim  Bonus <span class="ico-right"><i class="ico ico-caret-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-time">
                                        <div class="review-checks">
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>Excellent Live Casino</span>
                        </div>
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>Perfect For VIP Players</span>
                        </div>
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>Live Chat Support</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-button">
            <a href="https://www.topratedcasinos.co.uk/link/all-british-casino/3"
               onclick='ga("send", "event", "Link out", "Button", "All British Casino - Vertical:Casino", "3"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","Button-","All British Casino-","3-","Sign-up Bonus £ 300 100% Up To"],24);' target="_blank"               role="button" target="_blank" class="btn btn-secondary btn-icon">Claim Bonus
                <span class="txt-add">Go to All British Casino<span class="ico-right"><i class="ico ico-caret-right"></i></span></span>
            </a>
                            <a href="https://www.topratedcasinos.co.uk/link/all-british-casino/3"
                   onclick='ga("send", "event", "Link out", "Text link", "All British Casino - Vertical:Casino", "3"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","Text link-","All British Casino-","3-","Sign-up Bonus £ 300 100% Up To"],24);' target="_blank"                   class="hidden-lg-down link-url" target="_blank">www.allbritishcasino.com/Register</a>
                        <div class="col-rating hidden-md-up">
                <div class="rating m-a-0">
                    <div class="rating-row">
                        <input type="hidden" class="rating-tooltip" data-filled="ico ico-star" data-empty="ico ico-star-empty" data-fractions="2" data-votes="1,454" value="5">
                        <p class="result text-default"><span class="result-value">1,454</span> user ratings</p>
                    </div>
                                        <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/all-british-casino" target="_blank">Expert Review <i class="ico ico-caret-right vertical"></i></a>
                                    </div>
            </div>
        </div>
    </div>
</li>                                                    
                            
                                                            <li class="rated-item rated-item-relative rated-item-relative-pb paypal-item item-mobile rated-item-view">
    <div class="row">
        <div class="col-img">
            <div class="img-holder">
                <div class="img-box" style="background:#292929 ">
                                            
                        <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/aspers-casino" target="_blank"><picture>
                                <source media="(min-width: 1280px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 1280px) and (min-resolution: 120dpi)" sizes="188px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/376/aspers-casino-1509466175.png 376w">
                                <source media="(min-width: 1280px)" sizes="188px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/aspers-casino-1509466175.png 188w">

                                <source media="(min-width: 992px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 992px) and (min-resolution: 120dpi)" sizes="168px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/336/aspers-casino-1509466175.png 336w">
                                <source media="(min-width: 992px)" sizes="168px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/168/aspers-casino-1509466175.png 168w">

                                <source media="(min-width: 768px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 768px) and (min-resolution: 120dpi)" sizes="120px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/240/aspers-casino-1509466175.png 240w">
                                <source media="(min-width: 768px)" sizes="120px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/120/aspers-casino-1509466175.png 120w">

                                <source media="(min-width: 544px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 544px) and (min-resolution: 120dpi)" sizes="152px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/304/aspers-casino-1509466175.png 304w">
                                <source media="(min-width: 544px)" sizes="152px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/152/aspers-casino-1509466175.png 152w">

                                <source media="(min-width: 0px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 0px) and (min-resolution: 120dpi)" sizes="30vw" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/376/aspers-casino-1509466175.png 376w,
                                                                        https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/240/aspers-casino-1509466175.png 240w">
                                <source media="(min-width: 0px)" sizes="30vw" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/aspers-casino-1509466175.png 188w,
                                                                        https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/120/aspers-casino-1509466175.png 120w">

                                <img class="responsive-img" alt="" src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/aspers-casino-1509466175.png 188w">
                            </picture></a>
                                                                </div>

                <div class="top-number">
                    <p class="h4">4</p>
                </div>
            </div>
        </div>
        <div class="col-doubled col-doubled-top hidden-sm-down col-doubled-top-light">
            <div class="row">
                <div class="col-rating">
                    <div class="rating m-a-0">
                        <div class="rating-row">
                            <div class="result-text"></div>
                            <input type="hidden" class="rating-tooltip" data-filled="ico ico-star" data-empty="ico ico-star-empty" data-fractions="2"  data-votes="930" value="5">
                            <p class="result text-default"><span class="result-value">930</span> user ratings</p>
                        </div>

                                                <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/aspers-casino" target="_blank">Expert Review <i class="ico ico-caret-right vertical"></i></a>
                                            </div>
                </div>
                <div class="col-bonus hidden-sm-down">
                    <div class="bonus">
                        <p class="small" style="color:">100 Free Spins+</p>
                        <p class="bonus-value">£1,000</p>
                        <p class="small">Welcome Bonus</p>
                        <div class="popover-block">
                            <a href="#" class="popover-link small dashed">Terms apply</a>
                            <div class="webui-popover-content">
                                <h6 class="title m-b-10">MATCH BONUS</h6>
                                <p class="text-dark m-b-10">Bonus on first 3 deposits of min £20 each; spins on selected slots. 25x wagering and T&Cs apply</p>
                                <p class="m-b-10">Example: pay £100, play with £200</p>
                                <p class="m-b-10"><em class="text-dark">18+  Please Gamble Responsibly. Click &#039;Claim Bonus&#039; to view full terms and conditions</em>
                                </p>
                                <a href="https://www.topratedcasinos.co.uk/link/aspers-casino/1"
                                   onclick='ga("send", "event", "Link out", "More Info", "Aspers Casino - Vertical:Casino", "4"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","More Info-","Aspers Casino-","4-","Welcome Bonus £ 1,000 100 Free Spins+"],24);' target="_blank"                                   target="_blank" role="button" class="btn btn-secondary btn-xs btn-icon font-weight-normal">Claim  Bonus <span class="ico-right"><i class="ico ico-caret-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-doubled col-doubled-bottom col-doubled-bottom-light">
            <div class="row">
                <div class="col-variant hidden-sm-down">
                    <div class="variant m-b">
                        <div class="hidden-md-up">
                            <img src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Brand%20New%20%3Cbr%3E%20Casino-badge-1480595459.png" width="50" height="50" alt="Brand New <br> Casino">
                        </div>
                        <div class="hidden-sm-down">
                            <img src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Brand%20New%20%3Cbr%3E%20Casino-badge-1480595459.png" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Brand%20New%20%3Cbr%3E%20Casino-badge-1480595459.png 1x, https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/100/Brand%20New%20%3Cbr%3E%20Casino-badge-1480595459.png 1.25x" width="50" height="50" alt="Brand New <br> Casino">
                        </div>
                        <p class="small">Brand New <br> Casino</p>
                    </div>
                </div>
                <div class="col-bonus hidden-md-up">
                    <div class="bonus m-t-0">
                        <p class="small" style="color:">100 Free Spins+</p>
                        <p class="bonus-value">£1,000</p>
                        <p class="small">Welcome Bonus</p>
                        <div class="popover-block">
                            <a href="#" class="popover-link small dashed">Terms apply</a>
                            <div class="webui-popover-content">
                                <h6 class="title m-b-10">MATCH BONUS</h6>
                                <p class="text-dark m-b-10">Bonus on first 3 deposits of min £20 each; spins on selected slots. 25x wagering and T&Cs apply</p>
                                <p class="m-b-10">Example: pay £100, play with £200</p>
                                <p class="m-b-10"><em class="text-dark">18+  Please Gamble Responsibly. Click &#039;Claim Bonus&#039; to view full terms and conditions</em>
                                </p>
                                <a href="https://www.topratedcasinos.co.uk/link/aspers-casino/1"
                                   onclick='ga("send", "event", "Link out", "More Info", "Aspers Casino - Vertical:Casino", "4"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","More Info-","Aspers Casino-","4-","Welcome Bonus £ 1,000 100 Free Spins+"],24);' target="_blank"                                   target="_blank" role="button" class="btn btn-secondary btn-xs btn-icon font-weight-normal">Claim  Bonus <span class="ico-right"><i class="ico ico-caret-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-time">
                                        <div class="review-checks">
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>£10K Prize Draw</span>
                        </div>
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>400+ Casino Games</span>
                        </div>
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>Live Dealer Tables</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-button">
            <a href="https://www.topratedcasinos.co.uk/link/aspers-casino/1"
               onclick='ga("send", "event", "Link out", "Button", "Aspers Casino - Vertical:Casino", "4"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","Button-","Aspers Casino-","4-","Welcome Bonus £ 1,000 100 Free Spins+"],24);' target="_blank"               role="button" target="_blank" class="btn btn-secondary btn-icon">Claim Bonus
                <span class="txt-add">Go to Aspers Casino<span class="ico-right"><i class="ico ico-caret-right"></i></span></span>
            </a>
                            <a href="https://www.topratedcasinos.co.uk/link/aspers-casino/1"
                   onclick='ga("send", "event", "Link out", "Text link", "Aspers Casino - Vertical:Casino", "4"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","Text link-","Aspers Casino-","4-","Welcome Bonus £ 1,000 100 Free Spins+"],24);' target="_blank"                   class="hidden-lg-down link-url" target="_blank">www.aspers.com/Play</a>
                        <div class="col-rating hidden-md-up">
                <div class="rating m-a-0">
                    <div class="rating-row">
                        <input type="hidden" class="rating-tooltip" data-filled="ico ico-star" data-empty="ico ico-star-empty" data-fractions="2" data-votes="930" value="5">
                        <p class="result text-default"><span class="result-value">930</span> user ratings</p>
                    </div>
                                        <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/aspers-casino" target="_blank">Expert Review <i class="ico ico-caret-right vertical"></i></a>
                                    </div>
            </div>
        </div>
    </div>
</li>                                                    
                            
                                                            <li class="rated-item rated-item-relative rated-item-relative-pb paypal-item item-mobile rated-item-view">
    <div class="row">
        <div class="col-img">
            <div class="img-holder">
                <div class="img-box" style="background:#e75f3f ">
                                            
                        <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/leovegas" target="_blank"><picture>
                                <source media="(min-width: 1280px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 1280px) and (min-resolution: 120dpi)" sizes="188px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/376/leovegas-1486047263.png 376w">
                                <source media="(min-width: 1280px)" sizes="188px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/leovegas-1486047263.png 188w">

                                <source media="(min-width: 992px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 992px) and (min-resolution: 120dpi)" sizes="168px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/336/leovegas-1486047263.png 336w">
                                <source media="(min-width: 992px)" sizes="168px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/168/leovegas-1486047263.png 168w">

                                <source media="(min-width: 768px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 768px) and (min-resolution: 120dpi)" sizes="120px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/240/leovegas-1486047263.png 240w">
                                <source media="(min-width: 768px)" sizes="120px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/120/leovegas-1486047263.png 120w">

                                <source media="(min-width: 544px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 544px) and (min-resolution: 120dpi)" sizes="152px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/304/leovegas-1486047263.png 304w">
                                <source media="(min-width: 544px)" sizes="152px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/152/leovegas-1486047263.png 152w">

                                <source media="(min-width: 0px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 0px) and (min-resolution: 120dpi)" sizes="30vw" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/376/leovegas-1486047263.png 376w,
                                                                        https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/240/leovegas-1486047263.png 240w">
                                <source media="(min-width: 0px)" sizes="30vw" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/leovegas-1486047263.png 188w,
                                                                        https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/120/leovegas-1486047263.png 120w">

                                <img class="responsive-img" alt="" src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/leovegas-1486047263.png 188w">
                            </picture></a>
                                                                </div>

                <div class="top-number">
                    <p class="h4">5</p>
                </div>
            </div>
        </div>
        <div class="col-doubled col-doubled-top hidden-sm-down col-doubled-top-light">
            <div class="row">
                <div class="col-rating">
                    <div class="rating m-a-0">
                        <div class="rating-row">
                            <div class="result-text"></div>
                            <input type="hidden" class="rating-tooltip" data-filled="ico ico-star" data-empty="ico ico-star-empty" data-fractions="2"  data-votes="1,482" value="5">
                            <p class="result text-default"><span class="result-value">1,482</span> user ratings</p>
                        </div>

                                                <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/leovegas" target="_blank">Expert Review <i class="ico ico-caret-right vertical"></i></a>
                                            </div>
                </div>
                <div class="col-bonus hidden-sm-down">
                    <div class="bonus">
                        <p class="small" style="color:">120 Free Spins +</p>
                        <p class="bonus-value">£1,600</p>
                        <p class="small">Welcome Bonus</p>
                        <div class="popover-block">
                            <a href="#" class="popover-link small dashed">Terms apply</a>
                            <div class="webui-popover-content">
                                <h6 class="title m-b-10">MATCH + FREE SPINS</h6>
                                <p class="text-dark m-b-10">Opt-in required. Min. £10 deposit. Tiered bonus over first 4 deposits. 1st Deposit match: 100% up to £50 + 25 Free Spins on deposits up to £50 or 200% up to £200 + 25 Free Spins on deposits over £50 | 2nd & 3rd Deposit match: 50% up to £500 + 25 Free Spins each | 4th Deposit match: 50% up to £400 + 25 Free Spins. Max. bonus £1,600 + 120 Free Spins, of which 20 Free Spins awarded before 1st deposit. Free Spins on selected games, are subject to change & must be used within 3 days. 35x wagering before bonus and free spins winnings withdrawable. £5 min. turnover to receive free spins. Max. bet using bonus is £5. . See Full T&C's below. www.begambleaware.org</p>
                                <p class="m-b-10">Example: pay £50, play with £100</p>
                                <p class="m-b-10"><em class="text-dark">18+  Please Gamble Responsibly. Click &#039;Claim Bonus&#039; to view full terms and conditions</em>
                                </p>
                                <a href="https://www.topratedcasinos.co.uk/link/leovegas/1"
                                   onclick='ga("send", "event", "Link out", "More Info", "Leo Vegas - Vertical:Casino", "5"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","More Info-","Leo Vegas-","5-","CODE: HOPA100 £ 1,600 120 Free Spins +"],24);' target="_blank"                                   target="_blank" role="button" class="btn btn-secondary btn-xs btn-icon font-weight-normal">Claim  Bonus <span class="ico-right"><i class="ico ico-caret-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-doubled col-doubled-bottom col-doubled-bottom-light">
            <div class="row">
                <div class="col-variant hidden-sm-down">
                    <div class="variant m-b">
                        <div class="hidden-md-up">
                            <img src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Modern%20Design%20%3Cbr%3E%20%26%20Graphics-badge-1480595437.png" width="50" height="50" alt="Modern Design <br> & Graphics">
                        </div>
                        <div class="hidden-sm-down">
                            <img src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Modern%20Design%20%3Cbr%3E%20%26%20Graphics-badge-1480595437.png" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Modern%20Design%20%3Cbr%3E%20%26%20Graphics-badge-1480595437.png 1x, https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/100/Modern%20Design%20%3Cbr%3E%20%26%20Graphics-badge-1480595437.png 1.25x" width="50" height="50" alt="Modern Design <br> & Graphics">
                        </div>
                        <p class="small">Modern Design <br> & Graphics</p>
                    </div>
                </div>
                <div class="col-bonus hidden-md-up">
                    <div class="bonus m-t-0">
                        <p class="small" style="color:">120 Free Spins +</p>
                        <p class="bonus-value">£1,600</p>
                        <p class="small">Welcome Bonus</p>
                        <div class="popover-block">
                            <a href="#" class="popover-link small dashed">Terms apply</a>
                            <div class="webui-popover-content">
                                <h6 class="title m-b-10">MATCH + FREE SPINS</h6>
                                <p class="text-dark m-b-10">Opt-in required. Min. £10 deposit. Tiered bonus over first 4 deposits. 1st Deposit match: 100% up to £50 + 25 Free Spins on deposits up to £50 or 200% up to £200 + 25 Free Spins on deposits over £50 | 2nd & 3rd Deposit match: 50% up to £500 + 25 Free Spins each | 4th Deposit match: 50% up to £400 + 25 Free Spins. Max. bonus £1,600 + 120 Free Spins, of which 20 Free Spins awarded before 1st deposit. Free Spins on selected games, are subject to change & must be used within 3 days. 35x wagering before bonus and free spins winnings withdrawable. £5 min. turnover to receive free spins. Max. bet using bonus is £5. . See Full T&C's below. www.begambleaware.org</p>
                                <p class="m-b-10">Example: pay £50, play with £100</p>
                                <p class="m-b-10"><em class="text-dark">18+  Please Gamble Responsibly. Click &#039;Claim Bonus&#039; to view full terms and conditions</em>
                                </p>
                                <a href="https://www.topratedcasinos.co.uk/link/leovegas/1"
                                   onclick='ga("send", "event", "Link out", "More Info", "Leo Vegas - Vertical:Casino", "5"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","More Info-","Leo Vegas-","5-","CODE: HOPA100 £ 1,600 120 Free Spins +"],24);' target="_blank"                                   target="_blank" role="button" class="btn btn-secondary btn-xs btn-icon font-weight-normal">Claim  Bonus <span class="ico-right"><i class="ico ico-caret-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-time">
                                        <div class="review-checks">
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>Mobile Casino Of The Year</span>
                        </div>
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>Over 500 Slots</span>
                        </div>
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>Mega Jackpots!</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-button">
            <a href="https://www.topratedcasinos.co.uk/link/leovegas/1"
               onclick='ga("send", "event", "Link out", "Button", "Leo Vegas - Vertical:Casino", "5"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","Button-","Leo Vegas-","5-","CODE: HOPA100 £ 1,600 120 Free Spins +"],24);' target="_blank"               role="button" target="_blank" class="btn btn-secondary btn-icon">Claim Bonus
                <span class="txt-add">Go to Leo Vegas<span class="ico-right"><i class="ico ico-caret-right"></i></span></span>
            </a>
                            <a href="https://www.topratedcasinos.co.uk/link/leovegas/1"
                   onclick='ga("send", "event", "Link out", "Text link", "Leo Vegas - Vertical:Casino", "5"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","Text link-","Leo Vegas-","5-","CODE: HOPA100 £ 1,600 120 Free Spins +"],24);' target="_blank"                   class="hidden-lg-down link-url" target="_blank">www.leovegas.com/Play</a>
                        <div class="col-rating hidden-md-up">
                <div class="rating m-a-0">
                    <div class="rating-row">
                        <input type="hidden" class="rating-tooltip" data-filled="ico ico-star" data-empty="ico ico-star-empty" data-fractions="2" data-votes="1,482" value="5">
                        <p class="result text-default"><span class="result-value">1,482</span> user ratings</p>
                    </div>
                                        <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/leovegas" target="_blank">Expert Review <i class="ico ico-caret-right vertical"></i></a>
                                    </div>
            </div>
        </div>
    </div>
</li>                                                    
                            
                                                            <li class="rated-item rated-item-relative rated-item-relative-pb paypal-item item-mobile rated-item-view">
    <div class="row">
        <div class="col-img">
            <div class="img-holder">
                <div class="img-box" style="background:#08a1db ">
                                            
                        <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/betbright" target="_blank"><picture>
                                <source media="(min-width: 1280px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 1280px) and (min-resolution: 120dpi)" sizes="188px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/376/betbright-1480079160.png 376w">
                                <source media="(min-width: 1280px)" sizes="188px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/betbright-1480079160.png 188w">

                                <source media="(min-width: 992px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 992px) and (min-resolution: 120dpi)" sizes="168px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/336/betbright-1480079160.png 336w">
                                <source media="(min-width: 992px)" sizes="168px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/168/betbright-1480079160.png 168w">

                                <source media="(min-width: 768px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 768px) and (min-resolution: 120dpi)" sizes="120px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/240/betbright-1480079160.png 240w">
                                <source media="(min-width: 768px)" sizes="120px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/120/betbright-1480079160.png 120w">

                                <source media="(min-width: 544px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 544px) and (min-resolution: 120dpi)" sizes="152px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/304/betbright-1480079160.png 304w">
                                <source media="(min-width: 544px)" sizes="152px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/152/betbright-1480079160.png 152w">

                                <source media="(min-width: 0px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 0px) and (min-resolution: 120dpi)" sizes="30vw" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/376/betbright-1480079160.png 376w,
                                                                        https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/240/betbright-1480079160.png 240w">
                                <source media="(min-width: 0px)" sizes="30vw" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/betbright-1480079160.png 188w,
                                                                        https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/120/betbright-1480079160.png 120w">

                                <img class="responsive-img" alt="" src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/betbright-1480079160.png 188w">
                            </picture></a>
                                                                </div>

                <div class="top-number">
                    <p class="h4">6</p>
                </div>
            </div>
        </div>
        <div class="col-doubled col-doubled-top hidden-sm-down col-doubled-top-light">
            <div class="row">
                <div class="col-rating">
                    <div class="rating m-a-0">
                        <div class="rating-row">
                            <div class="result-text"></div>
                            <input type="hidden" class="rating-tooltip" data-filled="ico ico-star" data-empty="ico ico-star-empty" data-fractions="2"  data-votes="1,526" value="5">
                            <p class="result text-default"><span class="result-value">1,526</span> user ratings</p>
                        </div>

                                                <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/betbright" target="_blank">Expert Review <i class="ico ico-caret-right vertical"></i></a>
                                            </div>
                </div>
                <div class="col-bonus hidden-sm-down">
                    <div class="bonus">
                        <p class="small" style="color:">100 Free Spins+</p>
                        <p class="bonus-value">£600</p>
                        <p class="small">Welcome Bonus</p>
                        <div class="popover-block">
                            <a href="#" class="popover-link small dashed">Terms apply</a>
                            <div class="webui-popover-content">
                                <h6 class="title m-b-10">MATCH</h6>
                                <p class="text-dark m-b-10">BetBright offers 3 deposit bonuses ranging from 50% to 100% (the biggest of which has a max of £250). The grand total on offer is £600.</p>
                                <p class="m-b-10">Example: pay £100, play with £200</p>
                                <p class="m-b-10"><em class="text-dark">18+  Please Gamble Responsibly. Click &#039;Claim Bonus&#039; to view full terms and conditions</em>
                                </p>
                                <a href="https://www.topratedcasinos.co.uk/link/betbright/1"
                                   onclick='ga("send", "event", "Link out", "More Info", "BetBright - Vertical:Casino", "6"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","More Info-","BetBright-","6-","Welcome Bonus £ 600 100 Free Spins+"],24);' target="_blank"                                   target="_blank" role="button" class="btn btn-secondary btn-xs btn-icon font-weight-normal">Claim  Bonus <span class="ico-right"><i class="ico ico-caret-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-doubled col-doubled-bottom col-doubled-bottom-light">
            <div class="row">
                <div class="col-variant hidden-sm-down">
                    <div class="variant m-b">
                        <div class="hidden-md-up">
                            <img src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Brand%20New%20%3Cbr%3E%20Casino-badge-1480595459.png" width="50" height="50" alt="Brand New <br> Casino">
                        </div>
                        <div class="hidden-sm-down">
                            <img src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Brand%20New%20%3Cbr%3E%20Casino-badge-1480595459.png" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Brand%20New%20%3Cbr%3E%20Casino-badge-1480595459.png 1x, https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/100/Brand%20New%20%3Cbr%3E%20Casino-badge-1480595459.png 1.25x" width="50" height="50" alt="Brand New <br> Casino">
                        </div>
                        <p class="small">Brand New <br> Casino</p>
                    </div>
                </div>
                <div class="col-bonus hidden-md-up">
                    <div class="bonus m-t-0">
                        <p class="small" style="color:">100 Free Spins+</p>
                        <p class="bonus-value">£600</p>
                        <p class="small">Welcome Bonus</p>
                        <div class="popover-block">
                            <a href="#" class="popover-link small dashed">Terms apply</a>
                            <div class="webui-popover-content">
                                <h6 class="title m-b-10">MATCH</h6>
                                <p class="text-dark m-b-10">BetBright offers 3 deposit bonuses ranging from 50% to 100% (the biggest of which has a max of £250). The grand total on offer is £600.</p>
                                <p class="m-b-10">Example: pay £100, play with £200</p>
                                <p class="m-b-10"><em class="text-dark">18+  Please Gamble Responsibly. Click &#039;Claim Bonus&#039; to view full terms and conditions</em>
                                </p>
                                <a href="https://www.topratedcasinos.co.uk/link/betbright/1"
                                   onclick='ga("send", "event", "Link out", "More Info", "BetBright - Vertical:Casino", "6"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","More Info-","BetBright-","6-","Welcome Bonus £ 600 100 Free Spins+"],24);' target="_blank"                                   target="_blank" role="button" class="btn btn-secondary btn-xs btn-icon font-weight-normal">Claim  Bonus <span class="ico-right"><i class="ico ico-caret-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-time">
                                        <div class="review-checks">
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>Full PayPal Support</span>
                        </div>
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>New &amp; Classic Games</span>
                        </div>
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>Great Slots Offering</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-button">
            <a href="https://www.topratedcasinos.co.uk/link/betbright/1"
               onclick='ga("send", "event", "Link out", "Button", "BetBright - Vertical:Casino", "6"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","Button-","BetBright-","6-","Welcome Bonus £ 600 100 Free Spins+"],24);' target="_blank"               role="button" target="_blank" class="btn btn-secondary btn-icon">Claim Bonus
                <span class="txt-add">Go to BetBright<span class="ico-right"><i class="ico ico-caret-right"></i></span></span>
            </a>
                            <a href="https://www.topratedcasinos.co.uk/link/betbright/1"
                   onclick='ga("send", "event", "Link out", "Text link", "BetBright - Vertical:Casino", "6"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","Text link-","BetBright-","6-","Welcome Bonus £ 600 100 Free Spins+"],24);' target="_blank"                   class="hidden-lg-down link-url" target="_blank">www.betbrightcasino.co.uk</a>
                        <div class="col-rating hidden-md-up">
                <div class="rating m-a-0">
                    <div class="rating-row">
                        <input type="hidden" class="rating-tooltip" data-filled="ico ico-star" data-empty="ico ico-star-empty" data-fractions="2" data-votes="1,526" value="5">
                        <p class="result text-default"><span class="result-value">1,526</span> user ratings</p>
                    </div>
                                        <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/betbright" target="_blank">Expert Review <i class="ico ico-caret-right vertical"></i></a>
                                    </div>
            </div>
        </div>
    </div>
</li>                                                    
                            
                                                            <li class="rated-item rated-item-relative rated-item-relative-pb paypal-item item-mobile rated-item-view">
    <div class="row">
        <div class="col-img">
            <div class="img-holder">
                <div class="img-box" style="background:#000000 ">
                                            
                        <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/slots-heaven" target="_blank"><picture>
                                <source media="(min-width: 1280px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 1280px) and (min-resolution: 120dpi)" sizes="188px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/376/slots-heaven-1475248664.png 376w">
                                <source media="(min-width: 1280px)" sizes="188px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/slots-heaven-1475248664.png 188w">

                                <source media="(min-width: 992px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 992px) and (min-resolution: 120dpi)" sizes="168px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/336/slots-heaven-1475248664.png 336w">
                                <source media="(min-width: 992px)" sizes="168px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/168/slots-heaven-1475248664.png 168w">

                                <source media="(min-width: 768px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 768px) and (min-resolution: 120dpi)" sizes="120px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/240/slots-heaven-1475248664.png 240w">
                                <source media="(min-width: 768px)" sizes="120px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/120/slots-heaven-1475248664.png 120w">

                                <source media="(min-width: 544px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 544px) and (min-resolution: 120dpi)" sizes="152px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/304/slots-heaven-1475248664.png 304w">
                                <source media="(min-width: 544px)" sizes="152px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/152/slots-heaven-1475248664.png 152w">

                                <source media="(min-width: 0px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 0px) and (min-resolution: 120dpi)" sizes="30vw" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/376/slots-heaven-1475248664.png 376w,
                                                                        https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/240/slots-heaven-1475248664.png 240w">
                                <source media="(min-width: 0px)" sizes="30vw" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/slots-heaven-1475248664.png 188w,
                                                                        https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/120/slots-heaven-1475248664.png 120w">

                                <img class="responsive-img" alt="" src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/slots-heaven-1475248664.png 188w">
                            </picture></a>
                                                                </div>

                <div class="top-number">
                    <p class="h4">7</p>
                </div>
            </div>
        </div>
        <div class="col-doubled col-doubled-top hidden-sm-down col-doubled-top-light">
            <div class="row">
                <div class="col-rating">
                    <div class="rating m-a-0">
                        <div class="rating-row">
                            <div class="result-text"></div>
                            <input type="hidden" class="rating-tooltip" data-filled="ico ico-star" data-empty="ico ico-star-empty" data-fractions="2"  data-votes="1,363" value="4.5">
                            <p class="result text-default"><span class="result-value">1,363</span> user ratings</p>
                        </div>

                                                <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/slots-heaven" target="_blank">Expert Review <i class="ico ico-caret-right vertical"></i></a>
                                            </div>
                </div>
                <div class="col-bonus hidden-sm-down">
                    <div class="bonus">
                        <p class="small" style="color:">100% Up To</p>
                        <p class="bonus-value">£100</p>
                        <p class="small">+200 Spins</p>
                        <div class="popover-block">
                            <a href="#" class="popover-link small dashed">Terms apply</a>
                            <div class="webui-popover-content">
                                <h6 class="title m-b-10">MATCH</h6>
                                <p class="text-dark m-b-10">For every £1 you bet, Slots Heaven will match it (up to a max of £100). You'll also get 200 spins.</p>
                                <p class="m-b-10">Example: pay £100, play with £200</p>
                                <p class="m-b-10"><em class="text-dark">18+  Please Gamble Responsibly. Click &#039;Claim Bonus&#039; to view full terms and conditions</em>
                                </p>
                                <a href="https://www.topratedcasinos.co.uk/link/slots-heaven/1"
                                   onclick='ga("send", "event", "Link out", "More Info", "Slots Heaven - Vertical:Casino", "7"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","More Info-","Slots Heaven-","7-","Sign-up Bonus £ 100 100% Up To"],24);' target="_blank"                                   target="_blank" role="button" class="btn btn-secondary btn-xs btn-icon font-weight-normal">Claim  Bonus <span class="ico-right"><i class="ico ico-caret-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-doubled col-doubled-bottom col-doubled-bottom-light">
            <div class="row">
                <div class="col-variant hidden-sm-down">
                    <div class="variant m-b">
                        <div class="hidden-md-up">
                            <img src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Modern%20Design%20%3Cbr%3E%20%26%20Graphics-badge-1480595437.png" width="50" height="50" alt="Modern Design <br> & Graphics">
                        </div>
                        <div class="hidden-sm-down">
                            <img src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Modern%20Design%20%3Cbr%3E%20%26%20Graphics-badge-1480595437.png" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Modern%20Design%20%3Cbr%3E%20%26%20Graphics-badge-1480595437.png 1x, https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/100/Modern%20Design%20%3Cbr%3E%20%26%20Graphics-badge-1480595437.png 1.25x" width="50" height="50" alt="Modern Design <br> & Graphics">
                        </div>
                        <p class="small">Modern Design <br> & Graphics</p>
                    </div>
                </div>
                <div class="col-bonus hidden-md-up">
                    <div class="bonus m-t-0">
                        <p class="small" style="color:">100% Up To</p>
                        <p class="bonus-value">£100</p>
                        <p class="small">+200 Spins</p>
                        <div class="popover-block">
                            <a href="#" class="popover-link small dashed">Terms apply</a>
                            <div class="webui-popover-content">
                                <h6 class="title m-b-10">MATCH</h6>
                                <p class="text-dark m-b-10">For every £1 you bet, Slots Heaven will match it (up to a max of £100). You'll also get 200 spins.</p>
                                <p class="m-b-10">Example: pay £100, play with £200</p>
                                <p class="m-b-10"><em class="text-dark">18+  Please Gamble Responsibly. Click &#039;Claim Bonus&#039; to view full terms and conditions</em>
                                </p>
                                <a href="https://www.topratedcasinos.co.uk/link/slots-heaven/1"
                                   onclick='ga("send", "event", "Link out", "More Info", "Slots Heaven - Vertical:Casino", "7"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","More Info-","Slots Heaven-","7-","Sign-up Bonus £ 100 100% Up To"],24);' target="_blank"                                   target="_blank" role="button" class="btn btn-secondary btn-xs btn-icon font-weight-normal">Claim  Bonus <span class="ico-right"><i class="ico ico-caret-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-time">
                                        <div class="review-checks">
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>Blackjack + Slots</span>
                        </div>
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>Cool Neon Design</span>
                        </div>
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>Earn Loyalty Points</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-button">
            <a href="https://www.topratedcasinos.co.uk/link/slots-heaven/1"
               onclick='ga("send", "event", "Link out", "Button", "Slots Heaven - Vertical:Casino", "7"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","Button-","Slots Heaven-","7-","Sign-up Bonus £ 100 100% Up To"],24);' target="_blank"               role="button" target="_blank" class="btn btn-secondary btn-icon">Claim Bonus
                <span class="txt-add">Go to Slots Heaven<span class="ico-right"><i class="ico ico-caret-right"></i></span></span>
            </a>
                            <a href="https://www.topratedcasinos.co.uk/link/slots-heaven/1"
                   onclick='ga("send", "event", "Link out", "Text link", "Slots Heaven - Vertical:Casino", "7"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","Text link-","Slots Heaven-","7-","Sign-up Bonus £ 100 100% Up To"],24);' target="_blank"                   class="hidden-lg-down link-url" target="_blank">www.slotsheaven.com/SignUp</a>
                        <div class="col-rating hidden-md-up">
                <div class="rating m-a-0">
                    <div class="rating-row">
                        <input type="hidden" class="rating-tooltip" data-filled="ico ico-star" data-empty="ico ico-star-empty" data-fractions="2" data-votes="1,363" value="4.5">
                        <p class="result text-default"><span class="result-value">1,363</span> user ratings</p>
                    </div>
                                        <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/slots-heaven" target="_blank">Expert Review <i class="ico ico-caret-right vertical"></i></a>
                                    </div>
            </div>
        </div>
    </div>
</li>                                                    
                            
                                                            <li class="rated-item rated-item-relative rated-item-relative-pb paypal-item item-mobile rated-item-view">
    <div class="row">
        <div class="col-img">
            <div class="img-holder">
                <div class="img-box" style="background:#ffd700 ">
                                            
                        <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/spin-and-win" target="_blank"><picture>
                                <source media="(min-width: 1280px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 1280px) and (min-resolution: 120dpi)" sizes="188px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/376/spin-and-win-1475249000.png 376w">
                                <source media="(min-width: 1280px)" sizes="188px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/spin-and-win-1475249000.png 188w">

                                <source media="(min-width: 992px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 992px) and (min-resolution: 120dpi)" sizes="168px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/336/spin-and-win-1475249000.png 336w">
                                <source media="(min-width: 992px)" sizes="168px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/168/spin-and-win-1475249000.png 168w">

                                <source media="(min-width: 768px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 768px) and (min-resolution: 120dpi)" sizes="120px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/240/spin-and-win-1475249000.png 240w">
                                <source media="(min-width: 768px)" sizes="120px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/120/spin-and-win-1475249000.png 120w">

                                <source media="(min-width: 544px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 544px) and (min-resolution: 120dpi)" sizes="152px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/304/spin-and-win-1475249000.png 304w">
                                <source media="(min-width: 544px)" sizes="152px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/152/spin-and-win-1475249000.png 152w">

                                <source media="(min-width: 0px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 0px) and (min-resolution: 120dpi)" sizes="30vw" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/376/spin-and-win-1475249000.png 376w,
                                                                        https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/240/spin-and-win-1475249000.png 240w">
                                <source media="(min-width: 0px)" sizes="30vw" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/spin-and-win-1475249000.png 188w,
                                                                        https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/120/spin-and-win-1475249000.png 120w">

                                <img class="responsive-img" alt="" src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/spin-and-win-1475249000.png 188w">
                            </picture></a>
                                                                </div>

                <div class="top-number">
                    <p class="h4">8</p>
                </div>
            </div>
        </div>
        <div class="col-doubled col-doubled-top hidden-sm-down col-doubled-top-light">
            <div class="row">
                <div class="col-rating">
                    <div class="rating m-a-0">
                        <div class="rating-row">
                            <div class="result-text"></div>
                            <input type="hidden" class="rating-tooltip" data-filled="ico ico-star" data-empty="ico ico-star-empty" data-fractions="2"  data-votes="1,817" value="5">
                            <p class="result text-default"><span class="result-value">1,817</span> user ratings</p>
                        </div>

                                                <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/spin-and-win" target="_blank">Expert Review <i class="ico ico-caret-right vertical"></i></a>
                                            </div>
                </div>
                <div class="col-bonus hidden-sm-down">
                    <div class="bonus">
                        <p class="small" style="color:">100% Up To</p>
                        <p class="bonus-value">£500</p>
                        <p class="small">+100 Free Spins</p>
                        <div class="popover-block">
                            <a href="#" class="popover-link small dashed">Terms apply</a>
                            <div class="webui-popover-content">
                                <h6 class="title m-b-10">MATCH + FREE SPINS</h6>
                                <p class="text-dark m-b-10">Min 1st dep £20, Max bonus £500. Spins on selected games, credited over 5 days. Wagering applies on bonus and spins. T&Cs apply</p>
                                <p class="m-b-10">Example: pay £50, play with £100</p>
                                <p class="m-b-10"><em class="text-dark">18+  Please Gamble Responsibly. Click &#039;Claim Bonus&#039; to view full terms and conditions</em>
                                </p>
                                <a href="https://www.topratedcasinos.co.uk/link/spin-and-win/1"
                                   onclick='ga("send", "event", "Link out", "More Info", "Spin and Win - Vertical:Casino", "8"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","More Info-","Spin and Win-","8-","Sign-up Bonus £ 500 100% Up To"],24);' target="_blank"                                   target="_blank" role="button" class="btn btn-secondary btn-xs btn-icon font-weight-normal">Claim  Bonus <span class="ico-right"><i class="ico ico-caret-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-doubled col-doubled-bottom col-doubled-bottom-light">
            <div class="row">
                <div class="col-variant hidden-sm-down">
                    <div class="variant m-b">
                        <div class="hidden-md-up">
                            <img src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Editor%27s%20%3Cbr%3E%20Choice-badge-1488370499.png" width="50" height="50" alt="Editor's <br> Choice">
                        </div>
                        <div class="hidden-sm-down">
                            <img src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Editor%27s%20%3Cbr%3E%20Choice-badge-1488370499.png" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Editor%27s%20%3Cbr%3E%20Choice-badge-1488370499.png 1x, https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/100/Editor%27s%20%3Cbr%3E%20Choice-badge-1488370499.png 1.25x" width="50" height="50" alt="Editor's <br> Choice">
                        </div>
                        <p class="small">Editor's <br> Choice</p>
                    </div>
                </div>
                <div class="col-bonus hidden-md-up">
                    <div class="bonus m-t-0">
                        <p class="small" style="color:">100% Up To</p>
                        <p class="bonus-value">£500</p>
                        <p class="small">+100 Free Spins</p>
                        <div class="popover-block">
                            <a href="#" class="popover-link small dashed">Terms apply</a>
                            <div class="webui-popover-content">
                                <h6 class="title m-b-10">MATCH + FREE SPINS</h6>
                                <p class="text-dark m-b-10">Min 1st dep £20, Max bonus £500. Spins on selected games, credited over 5 days. Wagering applies on bonus and spins. T&Cs apply</p>
                                <p class="m-b-10">Example: pay £50, play with £100</p>
                                <p class="m-b-10"><em class="text-dark">18+  Please Gamble Responsibly. Click &#039;Claim Bonus&#039; to view full terms and conditions</em>
                                </p>
                                <a href="https://www.topratedcasinos.co.uk/link/spin-and-win/1"
                                   onclick='ga("send", "event", "Link out", "More Info", "Spin and Win - Vertical:Casino", "8"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","More Info-","Spin and Win-","8-","Sign-up Bonus £ 500 100% Up To"],24);' target="_blank"                                   target="_blank" role="button" class="btn btn-secondary btn-xs btn-icon font-weight-normal">Claim  Bonus <span class="ico-right"><i class="ico ico-caret-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-time">
                                        <div class="review-checks">
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>Accepts PayPal</span>
                        </div>
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>Massive Jackpot Slots</span>
                        </div>
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>Great VIP Club Perks</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-button">
            <a href="https://www.topratedcasinos.co.uk/link/spin-and-win/1"
               onclick='ga("send", "event", "Link out", "Button", "Spin and Win - Vertical:Casino", "8"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","Button-","Spin and Win-","8-","Sign-up Bonus £ 500 100% Up To"],24);' target="_blank"               role="button" target="_blank" class="btn btn-secondary btn-icon">Claim Bonus
                <span class="txt-add">Go to Spin and Win<span class="ico-right"><i class="ico ico-caret-right"></i></span></span>
            </a>
                            <a href="https://www.topratedcasinos.co.uk/link/spin-and-win/1"
                   onclick='ga("send", "event", "Link out", "Text link", "Spin and Win - Vertical:Casino", "8"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","Text link-","Spin and Win-","8-","Sign-up Bonus £ 500 100% Up To"],24);' target="_blank"                   class="hidden-lg-down link-url" target="_blank">spinandwin.com/Join-Now</a>
                        <div class="col-rating hidden-md-up">
                <div class="rating m-a-0">
                    <div class="rating-row">
                        <input type="hidden" class="rating-tooltip" data-filled="ico ico-star" data-empty="ico ico-star-empty" data-fractions="2" data-votes="1,817" value="5">
                        <p class="result text-default"><span class="result-value">1,817</span> user ratings</p>
                    </div>
                                        <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/spin-and-win" target="_blank">Expert Review <i class="ico ico-caret-right vertical"></i></a>
                                    </div>
            </div>
        </div>
    </div>
</li>                                                    
                            
                                                            <li class="rated-item rated-item-relative rated-item-relative-pb paypal-item item-mobile rated-item-view">
                    <div class="row">
                        <div class="col-img">
                            <div class="img-holder">
                                <div class="img-box" style="background:#000000 ">


                                                                            
                                            <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/bgo" target="_blank"><picture>
                                                    <source media="(min-width: 1280px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 1280px) and (min-resolution: 120dpi)" sizes="188px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/376/bgo-1502710316.png 376w">
                                                    <source media="(min-width: 1280px)" sizes="188px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/bgo-1502710316.png 188w">

                                                    <source media="(min-width: 992px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 992px) and (min-resolution: 120dpi)" sizes="168px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/336/bgo-1502710316.png 336w">
                                                    <source media="(min-width: 992px)" sizes="168px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/168/bgo-1502710316.png 168w">

                                                    <source media="(min-width: 768px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 768px) and (min-resolution: 120dpi)" sizes="120px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/240/bgo-1502710316.png 240w">
                                                    <source media="(min-width: 768px)" sizes="120px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/120/bgo-1502710316.png 120w">

                                                    <source media="(min-width: 544px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 544px) and (min-resolution: 120dpi)" sizes="152px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/304/bgo-1502710316.png 304w">
                                                    <source media="(min-width: 544px)" sizes="152px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/152/bgo-1502710316.png 152w">

                                                    <source media="(min-width: 0px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 0px) and (min-resolution: 120dpi)" sizes="30vw" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/376/bgo-1502710316.png 376w,
                                                                        https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/240/bgo-1502710316.png 240w">
                                                    <source media="(min-width: 0px)" sizes="30vw" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/bgo-1502710316.png 188w,
                                                                        https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/120/bgo-1502710316.png 120w">

                                                    <img class="responsive-img" alt="bgo" src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/bgo-1502710316.png 188w">
                                                </picture></a></a>
                                                                                                                   
                                </div>
                                <div class="top-number">
                                    <p class="h4">9</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-doubled col-doubled-top hidden-sm-down col-doubled-top-light">
                            <div class="row">
                                <div class="col-rating">
                                    <div class="rating m-a-0">
                                        <div class="rating-row">
                                            <div class="result-text"></div>
                                            <input type="hidden" class="rating-tooltip" data-filled="ico ico-star" data-empty="ico ico-star-empty" data-fractions="2"  data-votes="1,840" value="5">
                                            <p class="result text-default"><span class="result-value">1,840</span> user ratings</p>
                                        </div>
                                       
                                                                                <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/bgo" target="_blank">Expert Review <i class="ico ico-caret-right vertical"></i></a>
                                                                            </div>
                                </div>
                                <div class="col-bonus hidden-sm-down">
                                    <div class="bonus">
                                      
                                                                                    <p class="small text-danger">No Wagering Required</p>
                                                                                <p class="bonus-text"><strong>Get Up To 50 Free Spins</strong><br>On Your First Deposit</p>
                                        <div class="popover-block">
                                            <a href="#" class="popover-link small dashed">Terms apply</a>
                                            <div class="webui-popover-content">
                                                <h6 class="title m-b-10">FREE SPINS BONUS</h6>
                                                <p class="text-dark m-b-10">Make your first deposit and bgo will give you 1 Free Spin for every £1 you deposit – up to 50 Free Spins!</p>
                                                <p class="m-b-10"></p>
                                                <p class="m-b-10"><em class="text-dark">18+  Please Gamble Responsibly. Click &#039;Claim Bonus&#039; to view full terms and conditions</em>
                                                </p>
                                               
                                                <a href="https://www.topratedcasinos.co.uk/link/bgo/1"
                                                   onclick='ga("send", "event", "Link out", "More info", "bgo - Vertical:Casino", "9"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","More info-","bgo-","9-","&lt;strong&gt;Get Up To 50 Free Spins&lt;/strong&gt;&lt;br&gt;On Your First Deposit"],24);' target="_blank"                                                   target="_blank" role="button" class="btn btn-secondary btn-xs btn-icon font-weight-normal">Claim  Bonus <span class="ico-right"><i class="ico ico-caret-right"></i></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-doubled col-doubled-bottom col-doubled-bottom-light">
                            <div class="row">
                                <div class="col-variant hidden-sm-down">
                                    <div class="variant m-b">
                                        <div class="hidden-md-up">
                                            <img src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Trending%20%3Cbr%3E%20This%20Week-badge-1480595534.png" width="50" height="50" alt="Trending <br> This Week">
                                        </div>
                                        <div class="hidden-sm-down">
                                            <img src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Trending%20%3Cbr%3E%20This%20Week-badge-1480595534.png" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Trending%20%3Cbr%3E%20This%20Week-badge-1480595534.png 1x, https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/100/Trending%20%3Cbr%3E%20This%20Week-badge-1480595534.png 1.25x" width="50" height="50" alt="Trending <br> This Week">
                                        </div>
                                        <p class="small">Trending <br> This Week</p>
                                    </div>
                                </div>
                                <div class="col-bonus hidden-md-up">
                                    <div class="bonus m-t-0">

                                                                                    <p class="small text-danger">No Wagering Required</p>
                                                                                <p class="bonus-text m-t"><strong>Get Up To 50 Free Spins</strong><br>On Your First Deposit</p>

                                        <p class="small hidden-sm-down">Sign up bonus</p>
                                        <div class="popover-block hidden-sm-down">
                                            <a href="#" class="popover-link small dashed">Terms apply</a>
                                            <div class="webui-popover-content">
                                                <h6 class="title m-b-10">FREE SPINS BONUS</h6>
                                                <p class="text-dark m-b-10">Make your first deposit and bgo will give you 1 Free Spin for every £1 you deposit – up to 50 Free Spins!</p>
                                                <p class="m-b-10"></p>
                                                <p class="m-b-10"><em class="text-dark">18+  Please Gamble Responsibly. Click &#039;Claim Bonus&#039; to view full terms and conditions</em>
                                                </p>
                                                <a href="https://www.topratedcasinos.co.uk/link/bgo/1"
                                                   onclick='ga("send", "event", "Link out", "More info", "bgo - Vertical:Casino", "9"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","More info-","bgo-","9-","&lt;strong&gt;Get Up To 50 Free Spins&lt;/strong&gt;&lt;br&gt;On Your First Deposit"],24);' target="_blank"                                                   target="_blank" role="button" class="btn btn-secondary btn-xs btn-icon font-weight-normal">Claim  Bonus <span class="ico-right"><i class="ico ico-caret-right"></i></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-time">
                                                                            <div class="review-checks">
                                            <div class="review-check">
                                                <i class="ico ico-check text-primary"></i><span>Beautiful Design</span>
                                            </div>
                                            <div class="review-check">
                                                <i class="ico ico-check text-primary"></i><span>Huge Choice of Games</span>
                                            </div>
                                            <div class="review-check">
                                                <i class="ico ico-check text-primary"></i><span>As Seen On TV!</span>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-button">
                            <a href="https://www.topratedcasinos.co.uk/link/bgo/1"
                               onclick='ga("send", "event", "Link out", "Button", "bgo - Vertical:Casino", "9"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","Button-","bgo-","9-","&lt;strong&gt;Get Up To 50 Free Spins&lt;/strong&gt;&lt;br&gt;On Your First Deposit"],24);' target="_blank"                               role="button" target="_blank" class="btn btn-secondary btn-icon">Claim Bonus
                                <span class="txt-add">Go to bgo<span class="ico-right"><i class="ico ico-caret-right"></i></span></span>
                            </a>
                                                            <a href="https://www.topratedcasinos.co.uk/link/bgo/1"
                                   onclick='ga("send", "event", "Link out", "Text link", "bgo - Vertical:Casino", "9"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","Text link-","bgo-","9-","&lt;strong&gt;Get Up To 50 Free Spins&lt;/strong&gt;&lt;br&gt;On Your First Deposit"],24);' target="_blank"                                   class="hidden-lg-down link-url" target="_blank">exclusive.bgo.com/Offer</a>
                                                        <div class="col-rating hidden-md-up">
                                <div class="rating m-a-0">
                                    <div class="rating-row">
                                        <input type="hidden" class="rating-tooltip" data-filled="ico ico-star" data-empty="ico ico-star-empty" data-fractions="2" data-votes="1,840" value="5">
                                        <p class="result text-default"><span class="result-value">1,840</span> user ratings</p>
                                    </div>
                                                                        <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/bgo" target="_blank">Expert Review <i class="ico ico-caret-right vertical"></i></a>
                                                                    </div>
                            </div>
                        </div>
                    </div>
                </li>



                                                    
                            
                                                            <li class="rated-item rated-item-relative rated-item-relative-pb paypal-item item-mobile rated-item-view">
    <div class="row">
        <div class="col-img">
            <div class="img-holder">
                <div class="img-box" style="background:#000000 ">
                                            
                        <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/codeta" target="_blank"><picture>
                                <source media="(min-width: 1280px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 1280px) and (min-resolution: 120dpi)" sizes="188px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/376/codeta-1491237935.png 376w">
                                <source media="(min-width: 1280px)" sizes="188px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/codeta-1491237935.png 188w">

                                <source media="(min-width: 992px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 992px) and (min-resolution: 120dpi)" sizes="168px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/336/codeta-1491237935.png 336w">
                                <source media="(min-width: 992px)" sizes="168px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/168/codeta-1491237935.png 168w">

                                <source media="(min-width: 768px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 768px) and (min-resolution: 120dpi)" sizes="120px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/240/codeta-1491237935.png 240w">
                                <source media="(min-width: 768px)" sizes="120px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/120/codeta-1491237935.png 120w">

                                <source media="(min-width: 544px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 544px) and (min-resolution: 120dpi)" sizes="152px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/304/codeta-1491237935.png 304w">
                                <source media="(min-width: 544px)" sizes="152px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/152/codeta-1491237935.png 152w">

                                <source media="(min-width: 0px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 0px) and (min-resolution: 120dpi)" sizes="30vw" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/376/codeta-1491237935.png 376w,
                                                                        https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/240/codeta-1491237935.png 240w">
                                <source media="(min-width: 0px)" sizes="30vw" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/codeta-1491237935.png 188w,
                                                                        https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/120/codeta-1491237935.png 120w">

                                <img class="responsive-img" alt="" src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/codeta-1491237935.png 188w">
                            </picture></a>
                                                                </div>

                <div class="top-number">
                    <p class="h4">10</p>
                </div>
            </div>
        </div>
        <div class="col-doubled col-doubled-top hidden-sm-down col-doubled-top-light">
            <div class="row">
                <div class="col-rating">
                    <div class="rating m-a-0">
                        <div class="rating-row">
                            <div class="result-text"></div>
                            <input type="hidden" class="rating-tooltip" data-filled="ico ico-star" data-empty="ico ico-star-empty" data-fractions="2"  data-votes="1,566" value="5">
                            <p class="result text-default"><span class="result-value">1,566</span> user ratings</p>
                        </div>

                                                <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/codeta" target="_blank">Expert Review <i class="ico ico-caret-right vertical"></i></a>
                                            </div>
                </div>
                <div class="col-bonus hidden-sm-down">
                    <div class="bonus">
                        <p class="small" style="color:">100% Up To</p>
                        <p class="bonus-value">£300</p>
                        <p class="small">Welcome Bonus</p>
                        <div class="popover-block">
                            <a href="#" class="popover-link small dashed">Terms apply</a>
                            <div class="webui-popover-content">
                                <h6 class="title m-b-10">MATCH</h6>
                                <p class="text-dark m-b-10">For every £1 you deposit, Codeta will match it (up to a max of £300)</p>
                                <p class="m-b-10">pay £150, play with £300</p>
                                <p class="m-b-10"><em class="text-dark">18+  Please Gamble Responsibly. Click &#039;Claim Bonus&#039; to view full terms and conditions</em>
                                </p>
                                <a href="https://www.topratedcasinos.co.uk/link/codeta/1"
                                   onclick='ga("send", "event", "Link out", "More Info", "Codeta - Vertical:Casino", "10"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","More Info-","Codeta-","10-","Sign-up Bonus £ 300 100% Up To"],24);' target="_blank"                                   target="_blank" role="button" class="btn btn-secondary btn-xs btn-icon font-weight-normal">Claim  Bonus <span class="ico-right"><i class="ico ico-caret-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-doubled col-doubled-bottom col-doubled-bottom-light">
            <div class="row">
                <div class="col-variant hidden-sm-down">
                    <div class="variant m-b">
                        <div class="hidden-md-up">
                            <img src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Editor%27s%20%3Cbr%3E%20Choice-badge-1488370499.png" width="50" height="50" alt="Editor's <br> Choice">
                        </div>
                        <div class="hidden-sm-down">
                            <img src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Editor%27s%20%3Cbr%3E%20Choice-badge-1488370499.png" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Editor%27s%20%3Cbr%3E%20Choice-badge-1488370499.png 1x, https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/100/Editor%27s%20%3Cbr%3E%20Choice-badge-1488370499.png 1.25x" width="50" height="50" alt="Editor's <br> Choice">
                        </div>
                        <p class="small">Editor's <br> Choice</p>
                    </div>
                </div>
                <div class="col-bonus hidden-md-up">
                    <div class="bonus m-t-0">
                        <p class="small" style="color:">100% Up To</p>
                        <p class="bonus-value">£300</p>
                        <p class="small">Welcome Bonus</p>
                        <div class="popover-block">
                            <a href="#" class="popover-link small dashed">Terms apply</a>
                            <div class="webui-popover-content">
                                <h6 class="title m-b-10">MATCH</h6>
                                <p class="text-dark m-b-10">For every £1 you deposit, Codeta will match it (up to a max of £300)</p>
                                <p class="m-b-10">pay £150, play with £300</p>
                                <p class="m-b-10"><em class="text-dark">18+  Please Gamble Responsibly. Click &#039;Claim Bonus&#039; to view full terms and conditions</em>
                                </p>
                                <a href="https://www.topratedcasinos.co.uk/link/codeta/1"
                                   onclick='ga("send", "event", "Link out", "More Info", "Codeta - Vertical:Casino", "10"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","More Info-","Codeta-","10-","Sign-up Bonus £ 300 100% Up To"],24);' target="_blank"                                   target="_blank" role="button" class="btn btn-secondary btn-xs btn-icon font-weight-normal">Claim  Bonus <span class="ico-right"><i class="ico ico-caret-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-time">
                                        <div class="review-checks">
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>Great for High Rollers</span>
                        </div>
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>Live Casino Specialist</span>
                        </div>
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>New &#039;Skill Score&#039; Feature</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-button">
            <a href="https://www.topratedcasinos.co.uk/link/codeta/1"
               onclick='ga("send", "event", "Link out", "Button", "Codeta - Vertical:Casino", "10"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","Button-","Codeta-","10-","Sign-up Bonus £ 300 100% Up To"],24);' target="_blank"               role="button" target="_blank" class="btn btn-secondary btn-icon">Claim Bonus
                <span class="txt-add">Go to Codeta<span class="ico-right"><i class="ico ico-caret-right"></i></span></span>
            </a>
                            <a href="https://www.topratedcasinos.co.uk/link/codeta/1"
                   onclick='ga("send", "event", "Link out", "Text link", "Codeta - Vertical:Casino", "10"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","Text link-","Codeta-","10-","Sign-up Bonus £ 300 100% Up To"],24);' target="_blank"                   class="hidden-lg-down link-url" target="_blank">www.codeta.com/Sign-Up</a>
                        <div class="col-rating hidden-md-up">
                <div class="rating m-a-0">
                    <div class="rating-row">
                        <input type="hidden" class="rating-tooltip" data-filled="ico ico-star" data-empty="ico ico-star-empty" data-fractions="2" data-votes="1,566" value="5">
                        <p class="result text-default"><span class="result-value">1,566</span> user ratings</p>
                    </div>
                                        <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/codeta" target="_blank">Expert Review <i class="ico ico-caret-right vertical"></i></a>
                                    </div>
            </div>
        </div>
    </div>
</li>                                                    
                            
                                                            <li class="rated-item rated-item-relative rated-item-relative-pb paypal-item item-mobile rated-item-view">
    <div class="row">
        <div class="col-img">
            <div class="img-holder">
                <div class="img-box" style="background:#119cd1 ">
                                            
                        <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/spinland" target="_blank"><picture>
                                <source media="(min-width: 1280px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 1280px) and (min-resolution: 120dpi)" sizes="188px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/376/spinland-1497263884.png 376w">
                                <source media="(min-width: 1280px)" sizes="188px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/spinland-1497263884.png 188w">

                                <source media="(min-width: 992px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 992px) and (min-resolution: 120dpi)" sizes="168px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/336/spinland-1497263884.png 336w">
                                <source media="(min-width: 992px)" sizes="168px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/168/spinland-1497263884.png 168w">

                                <source media="(min-width: 768px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 768px) and (min-resolution: 120dpi)" sizes="120px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/240/spinland-1497263884.png 240w">
                                <source media="(min-width: 768px)" sizes="120px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/120/spinland-1497263884.png 120w">

                                <source media="(min-width: 544px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 544px) and (min-resolution: 120dpi)" sizes="152px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/304/spinland-1497263884.png 304w">
                                <source media="(min-width: 544px)" sizes="152px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/152/spinland-1497263884.png 152w">

                                <source media="(min-width: 0px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 0px) and (min-resolution: 120dpi)" sizes="30vw" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/376/spinland-1497263884.png 376w,
                                                                        https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/240/spinland-1497263884.png 240w">
                                <source media="(min-width: 0px)" sizes="30vw" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/spinland-1497263884.png 188w,
                                                                        https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/120/spinland-1497263884.png 120w">

                                <img class="responsive-img" alt="" src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/spinland-1497263884.png 188w">
                            </picture></a>
                                                                </div>

                <div class="top-number">
                    <p class="h4">11</p>
                </div>
            </div>
        </div>
        <div class="col-doubled col-doubled-top hidden-sm-down col-doubled-top-light">
            <div class="row">
                <div class="col-rating">
                    <div class="rating m-a-0">
                        <div class="rating-row">
                            <div class="result-text"></div>
                            <input type="hidden" class="rating-tooltip" data-filled="ico ico-star" data-empty="ico ico-star-empty" data-fractions="2"  data-votes="1,072" value="4.5">
                            <p class="result text-default"><span class="result-value">1,072</span> user ratings</p>
                        </div>

                                                <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/spinland" target="_blank">Expert Review <i class="ico ico-caret-right vertical"></i></a>
                                            </div>
                </div>
                <div class="col-bonus hidden-sm-down">
                    <div class="bonus">
                        <p class="small" style="color:">200% Up To</p>
                        <p class="bonus-value">£3,000</p>
                        <p class="small">+ 50 Free Spins</p>
                        <div class="popover-block">
                            <a href="#" class="popover-link small dashed">Terms apply</a>
                            <div class="webui-popover-content">
                                <h6 class="title m-b-10">Match + Free Spins</h6>
                                <p class="text-dark m-b-10">For every £1 you deposit, Spinland will TRIPLE it (up to a max of £3,000). You'll also get 50 free spins on Warlords: Crystals of Power.</p>
                                <p class="m-b-10">Example: Deposit £100, play with £300</p>
                                <p class="m-b-10"><em class="text-dark">18+  Please Gamble Responsibly. Click &#039;Claim Bonus&#039; to view full terms and conditions</em>
                                </p>
                                <a href="https://www.topratedcasinos.co.uk/link/spinland/1"
                                   onclick='ga("send", "event", "Link out", "More Info", "Spinland - Vertical:Casino", "11"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","More Info-","Spinland-","11-","Bonus + Free Spins £ 3,000 200% Up To"],24);' target="_blank"                                   target="_blank" role="button" class="btn btn-secondary btn-xs btn-icon font-weight-normal">Claim  Bonus <span class="ico-right"><i class="ico ico-caret-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-doubled col-doubled-bottom col-doubled-bottom-light">
            <div class="row">
                <div class="col-variant hidden-sm-down">
                    <div class="variant m-b">
                        <div class="hidden-md-up">
                            <img src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Top%20Games%20%3Cbr%3E%20Selection-badge-1480595387.png" width="50" height="50" alt="Top Games <br> Selection">
                        </div>
                        <div class="hidden-sm-down">
                            <img src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Top%20Games%20%3Cbr%3E%20Selection-badge-1480595387.png" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Top%20Games%20%3Cbr%3E%20Selection-badge-1480595387.png 1x, https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/100/Top%20Games%20%3Cbr%3E%20Selection-badge-1480595387.png 1.25x" width="50" height="50" alt="Top Games <br> Selection">
                        </div>
                        <p class="small">Top Games <br> Selection</p>
                    </div>
                </div>
                <div class="col-bonus hidden-md-up">
                    <div class="bonus m-t-0">
                        <p class="small" style="color:">200% Up To</p>
                        <p class="bonus-value">£3,000</p>
                        <p class="small">+ 50 Free Spins</p>
                        <div class="popover-block">
                            <a href="#" class="popover-link small dashed">Terms apply</a>
                            <div class="webui-popover-content">
                                <h6 class="title m-b-10">Match + Free Spins</h6>
                                <p class="text-dark m-b-10">For every £1 you deposit, Spinland will TRIPLE it (up to a max of £3,000). You'll also get 50 free spins on Warlords: Crystals of Power.</p>
                                <p class="m-b-10">Example: Deposit £100, play with £300</p>
                                <p class="m-b-10"><em class="text-dark">18+  Please Gamble Responsibly. Click &#039;Claim Bonus&#039; to view full terms and conditions</em>
                                </p>
                                <a href="https://www.topratedcasinos.co.uk/link/spinland/1"
                                   onclick='ga("send", "event", "Link out", "More Info", "Spinland - Vertical:Casino", "11"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","More Info-","Spinland-","11-","Bonus + Free Spins £ 3,000 200% Up To"],24);' target="_blank"                                   target="_blank" role="button" class="btn btn-secondary btn-xs btn-icon font-weight-normal">Claim  Bonus <span class="ico-right"><i class="ico ico-caret-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-time">
                                        <div class="review-checks">
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>Latest &amp; Greatest Slots</span>
                        </div>
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>Fast &amp; Easy Withdrawals</span>
                        </div>
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>Popular Live Casino</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-button">
            <a href="https://www.topratedcasinos.co.uk/link/spinland/1"
               onclick='ga("send", "event", "Link out", "Button", "Spinland - Vertical:Casino", "11"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","Button-","Spinland-","11-","Bonus + Free Spins £ 3,000 200% Up To"],24);' target="_blank"               role="button" target="_blank" class="btn btn-secondary btn-icon">Claim Bonus
                <span class="txt-add">Go to Spinland<span class="ico-right"><i class="ico ico-caret-right"></i></span></span>
            </a>
                            <a href="https://www.topratedcasinos.co.uk/link/spinland/1"
                   onclick='ga("send", "event", "Link out", "Text link", "Spinland - Vertical:Casino", "11"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","Text link-","Spinland-","11-","Bonus + Free Spins £ 3,000 200% Up To"],24);' target="_blank"                   class="hidden-lg-down link-url" target="_blank">Spinland.com/Play-Now</a>
                        <div class="col-rating hidden-md-up">
                <div class="rating m-a-0">
                    <div class="rating-row">
                        <input type="hidden" class="rating-tooltip" data-filled="ico ico-star" data-empty="ico ico-star-empty" data-fractions="2" data-votes="1,072" value="4.5">
                        <p class="result text-default"><span class="result-value">1,072</span> user ratings</p>
                    </div>
                                        <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/spinland" target="_blank">Expert Review <i class="ico ico-caret-right vertical"></i></a>
                                    </div>
            </div>
        </div>
    </div>
</li>                                                    
                            
                                                            <li class="rated-item rated-item-relative rated-item-relative-pb paypal-item item-mobile rated-item-view">
    <div class="row">
        <div class="col-img">
            <div class="img-holder">
                <div class="img-box" style="background:#1b1f25 ">
                                            
                        <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/viks" target="_blank"><picture>
                                <source media="(min-width: 1280px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 1280px) and (min-resolution: 120dpi)" sizes="188px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/376/viks-1509529200.png 376w">
                                <source media="(min-width: 1280px)" sizes="188px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/viks-1509529200.png 188w">

                                <source media="(min-width: 992px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 992px) and (min-resolution: 120dpi)" sizes="168px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/336/viks-1509529200.png 336w">
                                <source media="(min-width: 992px)" sizes="168px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/168/viks-1509529200.png 168w">

                                <source media="(min-width: 768px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 768px) and (min-resolution: 120dpi)" sizes="120px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/240/viks-1509529200.png 240w">
                                <source media="(min-width: 768px)" sizes="120px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/120/viks-1509529200.png 120w">

                                <source media="(min-width: 544px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 544px) and (min-resolution: 120dpi)" sizes="152px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/304/viks-1509529200.png 304w">
                                <source media="(min-width: 544px)" sizes="152px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/152/viks-1509529200.png 152w">

                                <source media="(min-width: 0px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 0px) and (min-resolution: 120dpi)" sizes="30vw" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/376/viks-1509529200.png 376w,
                                                                        https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/240/viks-1509529200.png 240w">
                                <source media="(min-width: 0px)" sizes="30vw" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/viks-1509529200.png 188w,
                                                                        https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/120/viks-1509529200.png 120w">

                                <img class="responsive-img" alt="" src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/viks-1509529200.png 188w">
                            </picture></a>
                                                                </div>

                <div class="top-number">
                    <p class="h4">12</p>
                </div>
            </div>
        </div>
        <div class="col-doubled col-doubled-top hidden-sm-down col-doubled-top-light">
            <div class="row">
                <div class="col-rating">
                    <div class="rating m-a-0">
                        <div class="rating-row">
                            <div class="result-text"></div>
                            <input type="hidden" class="rating-tooltip" data-filled="ico ico-star" data-empty="ico ico-star-empty" data-fractions="2"  data-votes="1,077" value="4.5">
                            <p class="result text-default"><span class="result-value">1,077</span> user ratings</p>
                        </div>

                                                <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/viks" target="_blank">Expert Review <i class="ico ico-caret-right vertical"></i></a>
                                            </div>
                </div>
                <div class="col-bonus hidden-sm-down">
                    <div class="bonus">
                        <p class="small" style="color:">100% Up To</p>
                        <p class="bonus-value">£1,000</p>
                        <p class="small">+ 50 Free Spins</p>
                        <div class="popover-block">
                            <a href="#" class="popover-link small dashed">Terms apply</a>
                            <div class="webui-popover-content">
                                <h6 class="title m-b-10">MATCH + SPINS</h6>
                                <p class="text-dark m-b-10">Deposit £25 or more and Viks will match your deposit up to a maximum of £1,000. You will also receive 50 free spins on Book of Dead. Use code W1000UK.</p>
                                <p class="m-b-10">Deposit £500, play with £1,000</p>
                                <p class="m-b-10"><em class="text-dark">18+  Please Gamble Responsibly. Click &#039;Claim Bonus&#039; to view full terms and conditions</em>
                                </p>
                                <a href="https://www.topratedcasinos.co.uk/link/viks/1"
                                   onclick='ga("send", "event", "Link out", "More Info", "Viks - Vertical:Casino", "12"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","More Info-","Viks-","12-","Sign-up Bonus £ 1,000 100% Up To"],24);' target="_blank"                                   target="_blank" role="button" class="btn btn-secondary btn-xs btn-icon font-weight-normal">Claim  Bonus <span class="ico-right"><i class="ico ico-caret-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-doubled col-doubled-bottom col-doubled-bottom-light">
            <div class="row">
                <div class="col-variant hidden-sm-down">
                    <div class="variant m-b">
                        <div class="hidden-md-up">
                            <img src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Trending%20%3Cbr%3E%20This%20Week-badge-1480595534.png" width="50" height="50" alt="Trending <br> This Week">
                        </div>
                        <div class="hidden-sm-down">
                            <img src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Trending%20%3Cbr%3E%20This%20Week-badge-1480595534.png" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Trending%20%3Cbr%3E%20This%20Week-badge-1480595534.png 1x, https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/100/Trending%20%3Cbr%3E%20This%20Week-badge-1480595534.png 1.25x" width="50" height="50" alt="Trending <br> This Week">
                        </div>
                        <p class="small">Trending <br> This Week</p>
                    </div>
                </div>
                <div class="col-bonus hidden-md-up">
                    <div class="bonus m-t-0">
                        <p class="small" style="color:">100% Up To</p>
                        <p class="bonus-value">£1,000</p>
                        <p class="small">+ 50 Free Spins</p>
                        <div class="popover-block">
                            <a href="#" class="popover-link small dashed">Terms apply</a>
                            <div class="webui-popover-content">
                                <h6 class="title m-b-10">MATCH + SPINS</h6>
                                <p class="text-dark m-b-10">Deposit £25 or more and Viks will match your deposit up to a maximum of £1,000. You will also receive 50 free spins on Book of Dead. Use code W1000UK.</p>
                                <p class="m-b-10">Deposit £500, play with £1,000</p>
                                <p class="m-b-10"><em class="text-dark">18+  Please Gamble Responsibly. Click &#039;Claim Bonus&#039; to view full terms and conditions</em>
                                </p>
                                <a href="https://www.topratedcasinos.co.uk/link/viks/1"
                                   onclick='ga("send", "event", "Link out", "More Info", "Viks - Vertical:Casino", "12"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","More Info-","Viks-","12-","Sign-up Bonus £ 1,000 100% Up To"],24);' target="_blank"                                   target="_blank" role="button" class="btn btn-secondary btn-xs btn-icon font-weight-normal">Claim  Bonus <span class="ico-right"><i class="ico ico-caret-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-time">
                                        <div class="review-checks">
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>NetEnt + Microgaming</span>
                        </div>
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>Viking-Themed Casino</span>
                        </div>
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>Enticing Rewards</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-button">
            <a href="https://www.topratedcasinos.co.uk/link/viks/1"
               onclick='ga("send", "event", "Link out", "Button", "Viks - Vertical:Casino", "12"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","Button-","Viks-","12-","Sign-up Bonus £ 1,000 100% Up To"],24);' target="_blank"               role="button" target="_blank" class="btn btn-secondary btn-icon">Claim Bonus
                <span class="txt-add">Go to Viks<span class="ico-right"><i class="ico ico-caret-right"></i></span></span>
            </a>
                            <a href="https://www.topratedcasinos.co.uk/link/viks/1"
                   onclick='ga("send", "event", "Link out", "Text link", "Viks - Vertical:Casino", "12"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","Text link-","Viks-","12-","Sign-up Bonus £ 1,000 100% Up To"],24);' target="_blank"                   class="hidden-lg-down link-url" target="_blank">viks.com/Deposit-Now</a>
                        <div class="col-rating hidden-md-up">
                <div class="rating m-a-0">
                    <div class="rating-row">
                        <input type="hidden" class="rating-tooltip" data-filled="ico ico-star" data-empty="ico ico-star-empty" data-fractions="2" data-votes="1,077" value="4.5">
                        <p class="result text-default"><span class="result-value">1,077</span> user ratings</p>
                    </div>
                                        <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/viks" target="_blank">Expert Review <i class="ico ico-caret-right vertical"></i></a>
                                    </div>
            </div>
        </div>
    </div>
</li>                                                    
                            
                                                            <li class="rated-item rated-item-relative rated-item-relative-pb paypal-item item-mobile rated-item-view">
    <div class="row">
        <div class="col-img">
            <div class="img-holder">
                <div class="img-box" style="background:#183363 ">
                                            
                        <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/casino-heroes" target="_blank"><picture>
                                <source media="(min-width: 1280px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 1280px) and (min-resolution: 120dpi)" sizes="188px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/376/casino-heroes-1516380646.png 376w">
                                <source media="(min-width: 1280px)" sizes="188px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/casino-heroes-1516380646.png 188w">

                                <source media="(min-width: 992px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 992px) and (min-resolution: 120dpi)" sizes="168px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/336/casino-heroes-1516380646.png 336w">
                                <source media="(min-width: 992px)" sizes="168px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/168/casino-heroes-1516380646.png 168w">

                                <source media="(min-width: 768px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 768px) and (min-resolution: 120dpi)" sizes="120px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/240/casino-heroes-1516380646.png 240w">
                                <source media="(min-width: 768px)" sizes="120px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/120/casino-heroes-1516380646.png 120w">

                                <source media="(min-width: 544px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 544px) and (min-resolution: 120dpi)" sizes="152px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/304/casino-heroes-1516380646.png 304w">
                                <source media="(min-width: 544px)" sizes="152px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/152/casino-heroes-1516380646.png 152w">

                                <source media="(min-width: 0px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 0px) and (min-resolution: 120dpi)" sizes="30vw" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/376/casino-heroes-1516380646.png 376w,
                                                                        https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/240/casino-heroes-1516380646.png 240w">
                                <source media="(min-width: 0px)" sizes="30vw" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/casino-heroes-1516380646.png 188w,
                                                                        https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/120/casino-heroes-1516380646.png 120w">

                                <img class="responsive-img" alt="" src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/casino-heroes-1516380646.png 188w">
                            </picture></a>
                                                                </div>

                <div class="top-number">
                    <p class="h4">13</p>
                </div>
            </div>
        </div>
        <div class="col-doubled col-doubled-top hidden-sm-down col-doubled-top-light">
            <div class="row">
                <div class="col-rating">
                    <div class="rating m-a-0">
                        <div class="rating-row">
                            <div class="result-text"></div>
                            <input type="hidden" class="rating-tooltip" data-filled="ico ico-star" data-empty="ico ico-star-empty" data-fractions="2"  data-votes="943" value="5">
                            <p class="result text-default"><span class="result-value">943</span> user ratings</p>
                        </div>

                                                <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/casino-heroes" target="_blank">Expert Review <i class="ico ico-caret-right vertical"></i></a>
                                            </div>
                </div>
                <div class="col-bonus hidden-sm-down">
                    <div class="bonus">
                        <p class="small" style="color:">Enjoy Up To</p>
                        <p class="bonus-value">£400</p>
                        <p class="small">+200 Spins</p>
                        <div class="popover-block">
                            <a href="#" class="popover-link small dashed">Terms apply</a>
                            <div class="webui-popover-content">
                                <h6 class="title m-b-10">MATCH BONUS</h6>
                                <p class="text-dark m-b-10">Choose between Spins and Bonuses with your Welcome Offer. Get a total of up to £400 in bonuses and 200 Spins or up to 600 Spins. The rewards are given over the span of 4 deposits.</p>
                                <p class="m-b-10">£400 Bonus or 600 Spins</p>
                                <p class="m-b-10"><em class="text-dark">18+  Please Gamble Responsibly. Click &#039;Claim Bonus&#039; to view full terms and conditions</em>
                                </p>
                                <a href="https://www.topratedcasinos.co.uk/link/casino-heroes/1"
                                   onclick='ga("send", "event", "Link out", "More Info", "Casino Heroes - Vertical:Casino", "13"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","More Info-","Casino Heroes-","13-","+200 Free Spins £ 400 Enjoy Up To"],24);' target="_blank"                                   target="_blank" role="button" class="btn btn-secondary btn-xs btn-icon font-weight-normal">Claim  Bonus <span class="ico-right"><i class="ico ico-caret-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-doubled col-doubled-bottom col-doubled-bottom-light">
            <div class="row">
                <div class="col-variant hidden-sm-down">
                    <div class="variant m-b">
                        <div class="hidden-md-up">
                            <img src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Brand%20New%20%3Cbr%3E%20Casino-badge-1480595459.png" width="50" height="50" alt="Brand New <br> Casino">
                        </div>
                        <div class="hidden-sm-down">
                            <img src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Brand%20New%20%3Cbr%3E%20Casino-badge-1480595459.png" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Brand%20New%20%3Cbr%3E%20Casino-badge-1480595459.png 1x, https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/100/Brand%20New%20%3Cbr%3E%20Casino-badge-1480595459.png 1.25x" width="50" height="50" alt="Brand New <br> Casino">
                        </div>
                        <p class="small">Brand New <br> Casino</p>
                    </div>
                </div>
                <div class="col-bonus hidden-md-up">
                    <div class="bonus m-t-0">
                        <p class="small" style="color:">Enjoy Up To</p>
                        <p class="bonus-value">£400</p>
                        <p class="small">+200 Spins</p>
                        <div class="popover-block">
                            <a href="#" class="popover-link small dashed">Terms apply</a>
                            <div class="webui-popover-content">
                                <h6 class="title m-b-10">MATCH BONUS</h6>
                                <p class="text-dark m-b-10">Choose between Spins and Bonuses with your Welcome Offer. Get a total of up to £400 in bonuses and 200 Spins or up to 600 Spins. The rewards are given over the span of 4 deposits.</p>
                                <p class="m-b-10">£400 Bonus or 600 Spins</p>
                                <p class="m-b-10"><em class="text-dark">18+  Please Gamble Responsibly. Click &#039;Claim Bonus&#039; to view full terms and conditions</em>
                                </p>
                                <a href="https://www.topratedcasinos.co.uk/link/casino-heroes/1"
                                   onclick='ga("send", "event", "Link out", "More Info", "Casino Heroes - Vertical:Casino", "13"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","More Info-","Casino Heroes-","13-","+200 Free Spins £ 400 Enjoy Up To"],24);' target="_blank"                                   target="_blank" role="button" class="btn btn-secondary btn-xs btn-icon font-weight-normal">Claim  Bonus <span class="ico-right"><i class="ico ico-caret-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-time">
                                        <div class="review-checks">
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>Super Fast Withdrawals</span>
                        </div>
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>Impressive Game Selection</span>
                        </div>
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>Unique Gamification</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-button">
            <a href="https://www.topratedcasinos.co.uk/link/casino-heroes/1"
               onclick='ga("send", "event", "Link out", "Button", "Casino Heroes - Vertical:Casino", "13"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","Button-","Casino Heroes-","13-","+200 Free Spins £ 400 Enjoy Up To"],24);' target="_blank"               role="button" target="_blank" class="btn btn-secondary btn-icon">Claim Bonus
                <span class="txt-add">Go to Casino Heroes<span class="ico-right"><i class="ico ico-caret-right"></i></span></span>
            </a>
                            <a href="https://www.topratedcasinos.co.uk/link/casino-heroes/1"
                   onclick='ga("send", "event", "Link out", "Text link", "Casino Heroes - Vertical:Casino", "13"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","Text link-","Casino Heroes-","13-","+200 Free Spins £ 400 Enjoy Up To"],24);' target="_blank"                   class="hidden-lg-down link-url" target="_blank">www.casinoheroes.com/Join-Now</a>
                        <div class="col-rating hidden-md-up">
                <div class="rating m-a-0">
                    <div class="rating-row">
                        <input type="hidden" class="rating-tooltip" data-filled="ico ico-star" data-empty="ico ico-star-empty" data-fractions="2" data-votes="943" value="5">
                        <p class="result text-default"><span class="result-value">943</span> user ratings</p>
                    </div>
                                        <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/casino-heroes" target="_blank">Expert Review <i class="ico ico-caret-right vertical"></i></a>
                                    </div>
            </div>
        </div>
    </div>
</li>                                                    
                            
                                                            <li class="rated-item rated-item-relative rated-item-relative-pb paypal-item item-mobile rated-item-view">
    <div class="row">
        <div class="col-img">
            <div class="img-holder">
                <div class="img-box" style="background:#000000 ">
                                            
                        <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/genting-casino" target="_blank"><picture>
                                <source media="(min-width: 1280px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 1280px) and (min-resolution: 120dpi)" sizes="188px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/376/genting-casino-1516724140.png 376w">
                                <source media="(min-width: 1280px)" sizes="188px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/genting-casino-1516724140.png 188w">

                                <source media="(min-width: 992px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 992px) and (min-resolution: 120dpi)" sizes="168px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/336/genting-casino-1516724140.png 336w">
                                <source media="(min-width: 992px)" sizes="168px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/168/genting-casino-1516724140.png 168w">

                                <source media="(min-width: 768px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 768px) and (min-resolution: 120dpi)" sizes="120px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/240/genting-casino-1516724140.png 240w">
                                <source media="(min-width: 768px)" sizes="120px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/120/genting-casino-1516724140.png 120w">

                                <source media="(min-width: 544px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 544px) and (min-resolution: 120dpi)" sizes="152px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/304/genting-casino-1516724140.png 304w">
                                <source media="(min-width: 544px)" sizes="152px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/152/genting-casino-1516724140.png 152w">

                                <source media="(min-width: 0px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 0px) and (min-resolution: 120dpi)" sizes="30vw" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/376/genting-casino-1516724140.png 376w,
                                                                        https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/240/genting-casino-1516724140.png 240w">
                                <source media="(min-width: 0px)" sizes="30vw" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/genting-casino-1516724140.png 188w,
                                                                        https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/120/genting-casino-1516724140.png 120w">

                                <img class="responsive-img" alt="" src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/genting-casino-1516724140.png 188w">
                            </picture></a>
                                                                </div>

                <div class="top-number">
                    <p class="h4">14</p>
                </div>
            </div>
        </div>
        <div class="col-doubled col-doubled-top hidden-sm-down col-doubled-top-light">
            <div class="row">
                <div class="col-rating">
                    <div class="rating m-a-0">
                        <div class="rating-row">
                            <div class="result-text"></div>
                            <input type="hidden" class="rating-tooltip" data-filled="ico ico-star" data-empty="ico ico-star-empty" data-fractions="2"  data-votes="1,529" value="5">
                            <p class="result text-default"><span class="result-value">1,529</span> user ratings</p>
                        </div>

                                                <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/genting-casino" target="_blank">Expert Review <i class="ico ico-caret-right vertical"></i></a>
                                            </div>
                </div>
                <div class="col-bonus hidden-sm-down">
                    <div class="bonus">
                        <p class="small" style="color:">200% Up To</p>
                        <p class="bonus-value">£400</p>
                        <p class="small">Welcome Bonus</p>
                        <div class="popover-block">
                            <a href="#" class="popover-link small dashed">Terms apply</a>
                            <div class="webui-popover-content">
                                <h6 class="title m-b-10">MATCH</h6>
                                <p class="text-dark m-b-10">For every £1 you deposit, Genting will treble it up to the value of £400. New players only. Casino games only, bonus subject to min 50x wagering requirements and wagering contributions apply (see here) before withdrawal of bonus funds permitted. Max bonus bet £10, multiple positions/numbers allowed.  Significant wagering restrictions apply, for full details, examples and explanation see “significant terms” within the full terms. Your own deposit funds can be withdrawn at any time.</p>
                                <p class="m-b-10">pay £200, play with £600</p>
                                <p class="m-b-10"><em class="text-dark">18+  Please Gamble Responsibly. Click &#039;Claim Bonus&#039; to view full terms and conditions</em>
                                </p>
                                <a href="https://www.topratedcasinos.co.uk/link/genting-casino/2"
                                   onclick='ga("send", "event", "Link out", "More Info", "Genting Casino - Vertical:Casino", "14"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","More Info-","Genting Casino-","14-","Bonus + Free Spins £ 400 200% Up To"],24);' target="_blank"                                   target="_blank" role="button" class="btn btn-secondary btn-xs btn-icon font-weight-normal">Claim  Bonus <span class="ico-right"><i class="ico ico-caret-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-doubled col-doubled-bottom col-doubled-bottom-light">
            <div class="row">
                <div class="col-variant hidden-sm-down">
                    <div class="variant m-b">
                        <div class="hidden-md-up">
                            <img src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Editor%27s%20%3Cbr%3E%20Choice-badge-1488370499.png" width="50" height="50" alt="Editor's <br> Choice">
                        </div>
                        <div class="hidden-sm-down">
                            <img src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Editor%27s%20%3Cbr%3E%20Choice-badge-1488370499.png" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Editor%27s%20%3Cbr%3E%20Choice-badge-1488370499.png 1x, https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/100/Editor%27s%20%3Cbr%3E%20Choice-badge-1488370499.png 1.25x" width="50" height="50" alt="Editor's <br> Choice">
                        </div>
                        <p class="small">Editor's <br> Choice</p>
                    </div>
                </div>
                <div class="col-bonus hidden-md-up">
                    <div class="bonus m-t-0">
                        <p class="small" style="color:">200% Up To</p>
                        <p class="bonus-value">£400</p>
                        <p class="small">Welcome Bonus</p>
                        <div class="popover-block">
                            <a href="#" class="popover-link small dashed">Terms apply</a>
                            <div class="webui-popover-content">
                                <h6 class="title m-b-10">MATCH</h6>
                                <p class="text-dark m-b-10">For every £1 you deposit, Genting will treble it up to the value of £400. New players only. Casino games only, bonus subject to min 50x wagering requirements and wagering contributions apply (see here) before withdrawal of bonus funds permitted. Max bonus bet £10, multiple positions/numbers allowed.  Significant wagering restrictions apply, for full details, examples and explanation see “significant terms” within the full terms. Your own deposit funds can be withdrawn at any time.</p>
                                <p class="m-b-10">pay £200, play with £600</p>
                                <p class="m-b-10"><em class="text-dark">18+  Please Gamble Responsibly. Click &#039;Claim Bonus&#039; to view full terms and conditions</em>
                                </p>
                                <a href="https://www.topratedcasinos.co.uk/link/genting-casino/2"
                                   onclick='ga("send", "event", "Link out", "More Info", "Genting Casino - Vertical:Casino", "14"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","More Info-","Genting Casino-","14-","Bonus + Free Spins £ 400 200% Up To"],24);' target="_blank"                                   target="_blank" role="button" class="btn btn-secondary btn-xs btn-icon font-weight-normal">Claim  Bonus <span class="ico-right"><i class="ico ico-caret-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-time">
                                        <div class="review-checks">
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span> Renowned Brand</span>
                        </div>
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>Big Welcome Package</span>
                        </div>
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>Live Dealers</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-button">
            <a href="https://www.topratedcasinos.co.uk/link/genting-casino/2"
               onclick='ga("send", "event", "Link out", "Button", "Genting Casino - Vertical:Casino", "14"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","Button-","Genting Casino-","14-","Bonus + Free Spins £ 400 200% Up To"],24);' target="_blank"               role="button" target="_blank" class="btn btn-secondary btn-icon">Claim Bonus
                <span class="txt-add">Go to Genting Casino<span class="ico-right"><i class="ico ico-caret-right"></i></span></span>
            </a>
                            <a href="https://www.topratedcasinos.co.uk/link/genting-casino/2"
                   onclick='ga("send", "event", "Link out", "Text link", "Genting Casino - Vertical:Casino", "14"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","Text link-","Genting Casino-","14-","Bonus + Free Spins £ 400 200% Up To"],24);' target="_blank"                   class="hidden-lg-down link-url" target="_blank">www.gentingcasino.com/Join</a>
                        <div class="col-rating hidden-md-up">
                <div class="rating m-a-0">
                    <div class="rating-row">
                        <input type="hidden" class="rating-tooltip" data-filled="ico ico-star" data-empty="ico ico-star-empty" data-fractions="2" data-votes="1,529" value="5">
                        <p class="result text-default"><span class="result-value">1,529</span> user ratings</p>
                    </div>
                                        <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/genting-casino" target="_blank">Expert Review <i class="ico ico-caret-right vertical"></i></a>
                                    </div>
            </div>
        </div>
    </div>
</li>                                                    
                            
                                                            <li class="rated-item rated-item-relative rated-item-relative-pb paypal-item item-mobile rated-item-view">
    <div class="row">
        <div class="col-img">
            <div class="img-holder">
                <div class="img-box" style="background:#ffffff ">
                                            
                        <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/mansion" target="_blank"><picture>
                                <source media="(min-width: 1280px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 1280px) and (min-resolution: 120dpi)" sizes="188px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/376/mansion-1520352618.png 376w">
                                <source media="(min-width: 1280px)" sizes="188px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/mansion-1520352618.png 188w">

                                <source media="(min-width: 992px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 992px) and (min-resolution: 120dpi)" sizes="168px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/336/mansion-1520352618.png 336w">
                                <source media="(min-width: 992px)" sizes="168px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/168/mansion-1520352618.png 168w">

                                <source media="(min-width: 768px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 768px) and (min-resolution: 120dpi)" sizes="120px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/240/mansion-1520352618.png 240w">
                                <source media="(min-width: 768px)" sizes="120px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/120/mansion-1520352618.png 120w">

                                <source media="(min-width: 544px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 544px) and (min-resolution: 120dpi)" sizes="152px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/304/mansion-1520352618.png 304w">
                                <source media="(min-width: 544px)" sizes="152px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/152/mansion-1520352618.png 152w">

                                <source media="(min-width: 0px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 0px) and (min-resolution: 120dpi)" sizes="30vw" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/376/mansion-1520352618.png 376w,
                                                                        https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/240/mansion-1520352618.png 240w">
                                <source media="(min-width: 0px)" sizes="30vw" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/mansion-1520352618.png 188w,
                                                                        https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/120/mansion-1520352618.png 120w">

                                <img class="responsive-img" alt="" src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/mansion-1520352618.png 188w">
                            </picture></a>
                                                                </div>

                <div class="top-number">
                    <p class="h4">15</p>
                </div>
            </div>
        </div>
        <div class="col-doubled col-doubled-top hidden-sm-down col-doubled-top-light">
            <div class="row">
                <div class="col-rating">
                    <div class="rating m-a-0">
                        <div class="rating-row">
                            <div class="result-text"></div>
                            <input type="hidden" class="rating-tooltip" data-filled="ico ico-star" data-empty="ico ico-star-empty" data-fractions="2"  data-votes="1,749" value="4.5">
                            <p class="result text-default"><span class="result-value">1,749</span> user ratings</p>
                        </div>

                                                <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/mansion" target="_blank">Expert Review <i class="ico ico-caret-right vertical"></i></a>
                                            </div>
                </div>
                <div class="col-bonus hidden-sm-down">
                    <div class="bonus">
                        <p class="small" style="color:">10% Cashback +</p>
                        <p class="bonus-value">£500</p>
                        <p class="small">Welcome Bonus</p>
                        <div class="popover-block">
                            <a href="#" class="popover-link small dashed">Terms apply</a>
                            <div class="webui-popover-content">
                                <h6 class="title m-b-10">MATCH + CASHBACK</h6>
                                <p class="text-dark m-b-10">Bonus is split into 2 deposits. Deposit 1: 100% bonus up to a maximum of £200. Deposit 2: 50% bonus up to a maximum of £300. Plus receive 10% cashback</p>
                                <p class="m-b-10">pay £100, play with £200</p>
                                <p class="m-b-10"><em class="text-dark">18+  Please Gamble Responsibly. Click &#039;Claim Bonus&#039; to view full terms and conditions</em>
                                </p>
                                <a href="https://www.topratedcasinos.co.uk/link/mansion/2"
                                   onclick='ga("send", "event", "Link out", "More Info", "Mansion - Vertical:Casino", "15"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","More Info-","Mansion-","15-","CODE: Welcome2017 £ 500 10% Cashback +"],24);' target="_blank"                                   target="_blank" role="button" class="btn btn-secondary btn-xs btn-icon font-weight-normal">Claim  Bonus <span class="ico-right"><i class="ico ico-caret-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-doubled col-doubled-bottom col-doubled-bottom-light">
            <div class="row">
                <div class="col-variant hidden-sm-down">
                    <div class="variant m-b">
                        <div class="hidden-md-up">
                            <img src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Highly%20%3Cbr%3E%20Trusted-badge-1480595499.png" width="50" height="50" alt="Highly <br> Trusted">
                        </div>
                        <div class="hidden-sm-down">
                            <img src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Highly%20%3Cbr%3E%20Trusted-badge-1480595499.png" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Highly%20%3Cbr%3E%20Trusted-badge-1480595499.png 1x, https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/100/Highly%20%3Cbr%3E%20Trusted-badge-1480595499.png 1.25x" width="50" height="50" alt="Highly <br> Trusted">
                        </div>
                        <p class="small">Highly <br> Trusted</p>
                    </div>
                </div>
                <div class="col-bonus hidden-md-up">
                    <div class="bonus m-t-0">
                        <p class="small" style="color:">10% Cashback +</p>
                        <p class="bonus-value">£500</p>
                        <p class="small">Welcome Bonus</p>
                        <div class="popover-block">
                            <a href="#" class="popover-link small dashed">Terms apply</a>
                            <div class="webui-popover-content">
                                <h6 class="title m-b-10">MATCH + CASHBACK</h6>
                                <p class="text-dark m-b-10">Bonus is split into 2 deposits. Deposit 1: 100% bonus up to a maximum of £200. Deposit 2: 50% bonus up to a maximum of £300. Plus receive 10% cashback</p>
                                <p class="m-b-10">pay £100, play with £200</p>
                                <p class="m-b-10"><em class="text-dark">18+  Please Gamble Responsibly. Click &#039;Claim Bonus&#039; to view full terms and conditions</em>
                                </p>
                                <a href="https://www.topratedcasinos.co.uk/link/mansion/2"
                                   onclick='ga("send", "event", "Link out", "More Info", "Mansion - Vertical:Casino", "15"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","More Info-","Mansion-","15-","CODE: Welcome2017 £ 500 10% Cashback +"],24);' target="_blank"                                   target="_blank" role="button" class="btn btn-secondary btn-xs btn-icon font-weight-normal">Claim  Bonus <span class="ico-right"><i class="ico ico-caret-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-time">
                                        <div class="review-checks">
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>Huge Slot Jackpots</span>
                        </div>
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>Live Dealers</span>
                        </div>
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>Full PayPal Support</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-button">
            <a href="https://www.topratedcasinos.co.uk/link/mansion/2"
               onclick='ga("send", "event", "Link out", "Button", "Mansion - Vertical:Casino", "15"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","Button-","Mansion-","15-","CODE: Welcome2017 £ 500 10% Cashback +"],24);' target="_blank"               role="button" target="_blank" class="btn btn-secondary btn-icon">Claim Bonus
                <span class="txt-add">Go to Mansion<span class="ico-right"><i class="ico ico-caret-right"></i></span></span>
            </a>
                            <a href="https://www.topratedcasinos.co.uk/link/mansion/2"
                   onclick='ga("send", "event", "Link out", "Text link", "Mansion - Vertical:Casino", "15"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","Text link-","Mansion-","15-","CODE: Welcome2017 £ 500 10% Cashback +"],24);' target="_blank"                   class="hidden-lg-down link-url" target="_blank">www.mansioncasino.com/Play-Now</a>
                        <div class="col-rating hidden-md-up">
                <div class="rating m-a-0">
                    <div class="rating-row">
                        <input type="hidden" class="rating-tooltip" data-filled="ico ico-star" data-empty="ico ico-star-empty" data-fractions="2" data-votes="1,749" value="4.5">
                        <p class="result text-default"><span class="result-value">1,749</span> user ratings</p>
                    </div>
                                        <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/mansion" target="_blank">Expert Review <i class="ico ico-caret-right vertical"></i></a>
                                    </div>
            </div>
        </div>
    </div>
</li>                                                    
                            
                                                            <li class="rated-item rated-item-relative rated-item-relative-pb paypal-item item-mobile rated-item-view">
    <div class="row">
        <div class="col-img">
            <div class="img-holder">
                <div class="img-box" style="background:#000000 ">
                                            
                        <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/888-casino" target="_blank"><picture>
                                <source media="(min-width: 1280px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 1280px) and (min-resolution: 120dpi)" sizes="188px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/376/888-casino-1475249325.png 376w">
                                <source media="(min-width: 1280px)" sizes="188px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/888-casino-1475249325.png 188w">

                                <source media="(min-width: 992px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 992px) and (min-resolution: 120dpi)" sizes="168px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/336/888-casino-1475249325.png 336w">
                                <source media="(min-width: 992px)" sizes="168px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/168/888-casino-1475249325.png 168w">

                                <source media="(min-width: 768px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 768px) and (min-resolution: 120dpi)" sizes="120px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/240/888-casino-1475249325.png 240w">
                                <source media="(min-width: 768px)" sizes="120px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/120/888-casino-1475249325.png 120w">

                                <source media="(min-width: 544px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 544px) and (min-resolution: 120dpi)" sizes="152px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/304/888-casino-1475249325.png 304w">
                                <source media="(min-width: 544px)" sizes="152px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/152/888-casino-1475249325.png 152w">

                                <source media="(min-width: 0px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 0px) and (min-resolution: 120dpi)" sizes="30vw" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/376/888-casino-1475249325.png 376w,
                                                                        https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/240/888-casino-1475249325.png 240w">
                                <source media="(min-width: 0px)" sizes="30vw" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/888-casino-1475249325.png 188w,
                                                                        https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/120/888-casino-1475249325.png 120w">

                                <img class="responsive-img" alt="" src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/888-casino-1475249325.png 188w">
                            </picture></a>
                                                                </div>

                <div class="top-number">
                    <p class="h4">16</p>
                </div>
            </div>
        </div>
        <div class="col-doubled col-doubled-top hidden-sm-down col-doubled-top-light">
            <div class="row">
                <div class="col-rating">
                    <div class="rating m-a-0">
                        <div class="rating-row">
                            <div class="result-text"></div>
                            <input type="hidden" class="rating-tooltip" data-filled="ico ico-star" data-empty="ico ico-star-empty" data-fractions="2"  data-votes="1908" value="5">
                            <p class="result text-default"><span class="result-value">1908</span> user ratings</p>
                        </div>

                                                <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/888-casino" target="_blank">Expert Review <i class="ico ico-caret-right vertical"></i></a>
                                            </div>
                </div>
                <div class="col-bonus hidden-sm-down">
                    <div class="bonus">
                        <p class="small" style="color:">100% Up To</p>
                        <p class="bonus-value">£500</p>
                        <p class="small">Welcome Bonus</p>
                        <div class="popover-block">
                            <a href="#" class="popover-link small dashed">Terms apply</a>
                            <div class="webui-popover-content">
                                <h6 class="title m-b-10">MATCH</h6>
                                <p class="text-dark m-b-10">New players only • £20 min deposit, excluding deposits by Skrill or NETELLER • 100% up to £500 Bonus • Bonus wins are capped at £500 • To withdraw bonus & related wins, wager 30 x (bonus amount) within 90 days • Restrictions apply to deposit until wagering requirement fulfilled • Wagering req. vary by game • This offer may not be combined with any other offer </p>
                                <p class="m-b-10">pay £100, play with £200</p>
                                <p class="m-b-10"><em class="text-dark">18+  Please Gamble Responsibly. Click &#039;Claim Bonus&#039; to view full terms and conditions</em>
                                </p>
                                <a href="https://www.topratedcasinos.co.uk/link/888-casino/3"
                                   onclick='ga("send", "event", "Link out", "More Info", "888 Casino - Vertical:Casino", "16"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","More Info-","888 Casino-","16-","Sign-up Bonus £ 500 100% Up To"],24);' target="_blank"                                   target="_blank" role="button" class="btn btn-secondary btn-xs btn-icon font-weight-normal">Claim  Bonus <span class="ico-right"><i class="ico ico-caret-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-doubled col-doubled-bottom col-doubled-bottom-light">
            <div class="row">
                <div class="col-variant hidden-sm-down">
                    <div class="variant m-b">
                        <div class="hidden-md-up">
                            <img src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Highly%20%3Cbr%3E%20Trusted-badge-1480595499.png" width="50" height="50" alt="Highly <br> Trusted">
                        </div>
                        <div class="hidden-sm-down">
                            <img src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Highly%20%3Cbr%3E%20Trusted-badge-1480595499.png" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Highly%20%3Cbr%3E%20Trusted-badge-1480595499.png 1x, https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/100/Highly%20%3Cbr%3E%20Trusted-badge-1480595499.png 1.25x" width="50" height="50" alt="Highly <br> Trusted">
                        </div>
                        <p class="small">Highly <br> Trusted</p>
                    </div>
                </div>
                <div class="col-bonus hidden-md-up">
                    <div class="bonus m-t-0">
                        <p class="small" style="color:">100% Up To</p>
                        <p class="bonus-value">£500</p>
                        <p class="small">Welcome Bonus</p>
                        <div class="popover-block">
                            <a href="#" class="popover-link small dashed">Terms apply</a>
                            <div class="webui-popover-content">
                                <h6 class="title m-b-10">MATCH</h6>
                                <p class="text-dark m-b-10">New players only • £20 min deposit, excluding deposits by Skrill or NETELLER • 100% up to £500 Bonus • Bonus wins are capped at £500 • To withdraw bonus & related wins, wager 30 x (bonus amount) within 90 days • Restrictions apply to deposit until wagering requirement fulfilled • Wagering req. vary by game • This offer may not be combined with any other offer </p>
                                <p class="m-b-10">pay £100, play with £200</p>
                                <p class="m-b-10"><em class="text-dark">18+  Please Gamble Responsibly. Click &#039;Claim Bonus&#039; to view full terms and conditions</em>
                                </p>
                                <a href="https://www.topratedcasinos.co.uk/link/888-casino/3"
                                   onclick='ga("send", "event", "Link out", "More Info", "888 Casino - Vertical:Casino", "16"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","More Info-","888 Casino-","16-","Sign-up Bonus £ 500 100% Up To"],24);' target="_blank"                                   target="_blank" role="button" class="btn btn-secondary btn-xs btn-icon font-weight-normal">Claim  Bonus <span class="ico-right"><i class="ico ico-caret-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-time">
                                        <div class="review-checks">
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>Full PayPal Support</span>
                        </div>
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>Exclusive Bonuses</span>
                        </div>
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>7-Figure Jackpots</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-button">
            <a href="https://www.topratedcasinos.co.uk/link/888-casino/3"
               onclick='ga("send", "event", "Link out", "Button", "888 Casino - Vertical:Casino", "16"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","Button-","888 Casino-","16-","Sign-up Bonus £ 500 100% Up To"],24);' target="_blank"               role="button" target="_blank" class="btn btn-secondary btn-icon">Claim Bonus
                <span class="txt-add">Go to 888 Casino<span class="ico-right"><i class="ico ico-caret-right"></i></span></span>
            </a>
                            <a href="https://www.topratedcasinos.co.uk/link/888-casino/3"
                   onclick='ga("send", "event", "Link out", "Text link", "888 Casino - Vertical:Casino", "16"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","Text link-","888 Casino-","16-","Sign-up Bonus £ 500 100% Up To"],24);' target="_blank"                   class="hidden-lg-down link-url" target="_blank">www.888casino.com/Join</a>
                        <div class="col-rating hidden-md-up">
                <div class="rating m-a-0">
                    <div class="rating-row">
                        <input type="hidden" class="rating-tooltip" data-filled="ico ico-star" data-empty="ico ico-star-empty" data-fractions="2" data-votes="1908" value="5">
                        <p class="result text-default"><span class="result-value">1908</span> user ratings</p>
                    </div>
                                        <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/888-casino" target="_blank">Expert Review <i class="ico ico-caret-right vertical"></i></a>
                                    </div>
            </div>
        </div>
    </div>
</li>                                                    
                            
                                                            <li class="rated-item rated-item-relative rated-item-relative-pb paypal-item item-mobile rated-item-view">
    <div class="row">
        <div class="col-img">
            <div class="img-holder">
                <div class="img-box" style="background:#1e1034 ">
                                                                        <a class="reviews-link" href="https://www.topratedcasinos.co.uk/link/genesis-casino/1" target="_blank"><picture>
                                    <source media="(min-width: 1280px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 1280px) and (min-resolution: 120dpi)" sizes="188px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/376/genesis-casino-1524846098.png 376w">
                                    <source media="(min-width: 1280px)" sizes="188px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/genesis-casino-1524846098.png 188w">

                                    <source media="(min-width: 992px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 992px) and (min-resolution: 120dpi)" sizes="168px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/336/genesis-casino-1524846098.png 336w">
                                    <source media="(min-width: 992px)" sizes="168px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/168/genesis-casino-1524846098.png 168w">

                                    <source media="(min-width: 768px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 768px) and (min-resolution: 120dpi)" sizes="120px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/240/genesis-casino-1524846098.png 240w">
                                    <source media="(min-width: 768px)" sizes="120px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/120/genesis-casino-1524846098.png 120w">

                                    <source media="(min-width: 544px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 544px) and (min-resolution: 120dpi)" sizes="152px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/304/genesis-casino-1524846098.png 304w">
                                    <source media="(min-width: 544px)" sizes="152px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/152/genesis-casino-1524846098.png 152w">

                                    <source media="(min-width: 0px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 0px) and (min-resolution: 120dpi)" sizes="30vw" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/376/genesis-casino-1524846098.png 376w,
                                                                        https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/240/genesis-casino-1524846098.png 240w">
                                    <source media="(min-width: 0px)" sizes="30vw" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/genesis-casino-1524846098.png 188w,
                                                                        https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/120/genesis-casino-1524846098.png 120w">

                                    <img class="responsive-img" alt="" src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/genesis-casino-1524846098.png 188w">
                                </picture></a>
                                                                 </div>

                <div class="top-number">
                    <p class="h4">17</p>
                </div>
            </div>
        </div>
        <div class="col-doubled col-doubled-top hidden-sm-down col-doubled-top-light">
            <div class="row">
                <div class="col-rating">
                    <div class="rating m-a-0">
                        <div class="rating-row">
                            <div class="result-text"></div>
                            <input type="hidden" class="rating-tooltip" data-filled="ico ico-star" data-empty="ico ico-star-empty" data-fractions="2"  data-votes="97" value="5">
                            <p class="result text-default"><span class="result-value">97</span> user ratings</p>
                        </div>

                                            </div>
                </div>
                <div class="col-bonus hidden-sm-down">
                    <div class="bonus">
                        <p class="small" style="color:">100% Up To</p>
                        <p class="bonus-value">£100</p>
                        <p class="small">+300 Free Spins on Starburst</p>
                        <div class="popover-block">
                            <a href="#" class="popover-link small dashed">Terms apply</a>
                            <div class="webui-popover-content">
                                <h6 class="title m-b-10">MATCH + FREE SPINS</h6>
                                <p class="text-dark m-b-10">New players Only. £10 minimum deposit. 40 x wagering applies. Bonus valid for 14 days. Minimum £5 wager required to activate 300 Free Spins. 30 Free Spins will be credited per day for 10 days after qualifying deposit/wager is met. Free Spins valid for 72 hours from credit. <a href="http://media.tracking-gc.com/redirect.aspx?pid=109455&bid=4290&var={{tracking_code}}" target="_blank">Click here to view full terms and conditions.</a></p>
                                <p class="m-b-10">pay £100, play with £200</p>
                                <p class="m-b-10"><em class="text-dark">18+  Please Gamble Responsibly. Click &#039;Claim Bonus&#039; to view full terms and conditions</em>
                                </p>
                                <a href="https://www.topratedcasinos.co.uk/link/genesis-casino/1"
                                   onclick='ga("send", "event", "Link out", "More Info", "Genesis Casino - Vertical:Casino", "17"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","More Info-","Genesis Casino-","17-","Sign-up Bonus £ 100 100% Up To"],24);' target="_blank"                                   target="_blank" role="button" class="btn btn-secondary btn-xs btn-icon font-weight-normal">Claim  Bonus <span class="ico-right"><i class="ico ico-caret-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-doubled col-doubled-bottom col-doubled-bottom-light">
            <div class="row">
                <div class="col-variant hidden-sm-down">
                    <div class="variant m-b">
                        <div class="hidden-md-up">
                            <img src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Brand%20New%20%3Cbr%3E%20Casino-badge-1480595459.png" width="50" height="50" alt="Brand New <br> Casino">
                        </div>
                        <div class="hidden-sm-down">
                            <img src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Brand%20New%20%3Cbr%3E%20Casino-badge-1480595459.png" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Brand%20New%20%3Cbr%3E%20Casino-badge-1480595459.png 1x, https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/100/Brand%20New%20%3Cbr%3E%20Casino-badge-1480595459.png 1.25x" width="50" height="50" alt="Brand New <br> Casino">
                        </div>
                        <p class="small">Brand New <br> Casino</p>
                    </div>
                </div>
                <div class="col-bonus hidden-md-up">
                    <div class="bonus m-t-0">
                        <p class="small" style="color:">100% Up To</p>
                        <p class="bonus-value">£100</p>
                        <p class="small">+300 Free Spins on Starburst</p>
                        <div class="popover-block">
                            <a href="#" class="popover-link small dashed">Terms apply</a>
                            <div class="webui-popover-content">
                                <h6 class="title m-b-10">MATCH + FREE SPINS</h6>
                                <p class="text-dark m-b-10">New players Only. £10 minimum deposit. 40 x wagering applies. Bonus valid for 14 days. Minimum £5 wager required to activate 300 Free Spins. 30 Free Spins will be credited per day for 10 days after qualifying deposit/wager is met. Free Spins valid for 72 hours from credit. <a href="http://media.tracking-gc.com/redirect.aspx?pid=109455&bid=4290&var={{tracking_code}}" target="_blank">Click here to view full terms and conditions.</a></p>
                                <p class="m-b-10">pay £100, play with £200</p>
                                <p class="m-b-10"><em class="text-dark">18+  Please Gamble Responsibly. Click &#039;Claim Bonus&#039; to view full terms and conditions</em>
                                </p>
                                <a href="https://www.topratedcasinos.co.uk/link/genesis-casino/1"
                                   onclick='ga("send", "event", "Link out", "More Info", "Genesis Casino - Vertical:Casino", "17"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","More Info-","Genesis Casino-","17-","Sign-up Bonus £ 100 100% Up To"],24);' target="_blank"                                   target="_blank" role="button" class="btn btn-secondary btn-xs btn-icon font-weight-normal">Claim  Bonus <span class="ico-right"><i class="ico ico-caret-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-time">
                                        <div class="review-checks">
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>Brand New Casino</span>
                        </div>
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>Great for High Rollers</span>
                        </div>
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>Excellent Live Casino</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-button">
            <a href="https://www.topratedcasinos.co.uk/link/genesis-casino/1"
               onclick='ga("send", "event", "Link out", "Button", "Genesis Casino - Vertical:Casino", "17"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","Button-","Genesis Casino-","17-","Sign-up Bonus £ 100 100% Up To"],24);' target="_blank"               role="button" target="_blank" class="btn btn-secondary btn-icon">Claim Bonus
                <span class="txt-add">Go to Genesis Casino<span class="ico-right"><i class="ico ico-caret-right"></i></span></span>
            </a>
                            <a href="https://www.topratedcasinos.co.uk/link/genesis-casino/1"
                   onclick='ga("send", "event", "Link out", "Text link", "Genesis Casino - Vertical:Casino", "17"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","Text link-","Genesis Casino-","17-","Sign-up Bonus £ 100 100% Up To"],24);' target="_blank"                   class="hidden-lg-down link-url" target="_blank">www.genesiscasino.com/SignUp</a>
                        <div class="col-rating hidden-md-up">
                <div class="rating m-a-0">
                    <div class="rating-row">
                        <input type="hidden" class="rating-tooltip" data-filled="ico ico-star" data-empty="ico ico-star-empty" data-fractions="2" data-votes="97" value="5">
                        <p class="result text-default"><span class="result-value">97</span> user ratings</p>
                    </div>
                                    </div>
            </div>
        </div>
    </div>
</li>                                                    
                            
                                                            <li class="rated-item rated-item-relative rated-item-relative-pb paypal-item item-mobile rated-item-view">
    <div class="row">
        <div class="col-img">
            <div class="img-holder">
                <div class="img-box" style="background:#ee1b24 ">
                                            
                        <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/bcasino" target="_blank"><picture>
                                <source media="(min-width: 1280px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 1280px) and (min-resolution: 120dpi)" sizes="188px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/376/bcasino-1519229043.png 376w">
                                <source media="(min-width: 1280px)" sizes="188px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/bcasino-1519229043.png 188w">

                                <source media="(min-width: 992px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 992px) and (min-resolution: 120dpi)" sizes="168px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/336/bcasino-1519229043.png 336w">
                                <source media="(min-width: 992px)" sizes="168px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/168/bcasino-1519229043.png 168w">

                                <source media="(min-width: 768px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 768px) and (min-resolution: 120dpi)" sizes="120px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/240/bcasino-1519229043.png 240w">
                                <source media="(min-width: 768px)" sizes="120px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/120/bcasino-1519229043.png 120w">

                                <source media="(min-width: 544px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 544px) and (min-resolution: 120dpi)" sizes="152px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/304/bcasino-1519229043.png 304w">
                                <source media="(min-width: 544px)" sizes="152px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/152/bcasino-1519229043.png 152w">

                                <source media="(min-width: 0px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 0px) and (min-resolution: 120dpi)" sizes="30vw" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/376/bcasino-1519229043.png 376w,
                                                                        https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/240/bcasino-1519229043.png 240w">
                                <source media="(min-width: 0px)" sizes="30vw" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/bcasino-1519229043.png 188w,
                                                                        https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/120/bcasino-1519229043.png 120w">

                                <img class="responsive-img" alt="" src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/bcasino-1519229043.png 188w">
                            </picture></a>
                                                                </div>

                <div class="top-number">
                    <p class="h4">18</p>
                </div>
            </div>
        </div>
        <div class="col-doubled col-doubled-top hidden-sm-down col-doubled-top-light">
            <div class="row">
                <div class="col-rating">
                    <div class="rating m-a-0">
                        <div class="rating-row">
                            <div class="result-text"></div>
                            <input type="hidden" class="rating-tooltip" data-filled="ico ico-star" data-empty="ico ico-star-empty" data-fractions="2"  data-votes="1,316" value="5">
                            <p class="result text-default"><span class="result-value">1,316</span> user ratings</p>
                        </div>

                                                <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/bcasino" target="_blank">Expert Review <i class="ico ico-caret-right vertical"></i></a>
                                            </div>
                </div>
                <div class="col-bonus hidden-sm-down">
                    <div class="bonus">
                        <p class="small" style="color:">Enjoy Up To</p>
                        <p class="bonus-value">£1200</p>
                        <p class="small">Welcome Bonus</p>
                        <div class="popover-block">
                            <a href="#" class="popover-link small dashed">Terms apply</a>
                            <div class="webui-popover-content">
                                <h6 class="title m-b-10">New Customer Offer</h6>
                                <p class="text-dark m-b-10">The welcome offer is split into 3 deposit bonuses. Deposit 1, 100% up to £500 + 50 spins. Deposit 2, 50% up to £200. Deposit 3, 125% up to £500 + 50 spins.</p>
                                <p class="m-b-10">Enjoy up to £1200 welcome package plus 100 spins</p>
                                <p class="m-b-10"><em class="text-dark">18+  Please Gamble Responsibly. Click &#039;Claim Bonus&#039; to view full terms and conditions</em>
                                </p>
                                <a href="https://www.topratedcasinos.co.uk/link/bcasino/1"
                                   onclick='ga("send", "event", "Link out", "More Info", "bCasino - Vertical:Casino", "18"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","More Info-","bCasino-","18-","+200 Free Spins £ 1200 Enjoy Up To"],24);' target="_blank"                                   target="_blank" role="button" class="btn btn-secondary btn-xs btn-icon font-weight-normal">Claim  Bonus <span class="ico-right"><i class="ico ico-caret-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-doubled col-doubled-bottom col-doubled-bottom-light">
            <div class="row">
                <div class="col-variant hidden-sm-down">
                    <div class="variant m-b">
                        <div class="hidden-md-up">
                            <img src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Brand%20New%20%3Cbr%3E%20Casino-badge-1480595459.png" width="50" height="50" alt="Brand New <br> Casino">
                        </div>
                        <div class="hidden-sm-down">
                            <img src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Brand%20New%20%3Cbr%3E%20Casino-badge-1480595459.png" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Brand%20New%20%3Cbr%3E%20Casino-badge-1480595459.png 1x, https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/100/Brand%20New%20%3Cbr%3E%20Casino-badge-1480595459.png 1.25x" width="50" height="50" alt="Brand New <br> Casino">
                        </div>
                        <p class="small">Brand New <br> Casino</p>
                    </div>
                </div>
                <div class="col-bonus hidden-md-up">
                    <div class="bonus m-t-0">
                        <p class="small" style="color:">Enjoy Up To</p>
                        <p class="bonus-value">£1200</p>
                        <p class="small">Welcome Bonus</p>
                        <div class="popover-block">
                            <a href="#" class="popover-link small dashed">Terms apply</a>
                            <div class="webui-popover-content">
                                <h6 class="title m-b-10">New Customer Offer</h6>
                                <p class="text-dark m-b-10">The welcome offer is split into 3 deposit bonuses. Deposit 1, 100% up to £500 + 50 spins. Deposit 2, 50% up to £200. Deposit 3, 125% up to £500 + 50 spins.</p>
                                <p class="m-b-10">Enjoy up to £1200 welcome package plus 100 spins</p>
                                <p class="m-b-10"><em class="text-dark">18+  Please Gamble Responsibly. Click &#039;Claim Bonus&#039; to view full terms and conditions</em>
                                </p>
                                <a href="https://www.topratedcasinos.co.uk/link/bcasino/1"
                                   onclick='ga("send", "event", "Link out", "More Info", "bCasino - Vertical:Casino", "18"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","More Info-","bCasino-","18-","+200 Free Spins £ 1200 Enjoy Up To"],24);' target="_blank"                                   target="_blank" role="button" class="btn btn-secondary btn-xs btn-icon font-weight-normal">Claim  Bonus <span class="ico-right"><i class="ico ico-caret-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-time">
                                        <div class="review-checks">
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>Enhanced High Roller Bonus</span>
                        </div>
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>Live Dealer Tables</span>
                        </div>
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>New &amp; Classic Games</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-button">
            <a href="https://www.topratedcasinos.co.uk/link/bcasino/1"
               onclick='ga("send", "event", "Link out", "Button", "bCasino - Vertical:Casino", "18"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","Button-","bCasino-","18-","+200 Free Spins £ 1200 Enjoy Up To"],24);' target="_blank"               role="button" target="_blank" class="btn btn-secondary btn-icon">Claim Bonus
                <span class="txt-add">Go to bCasino<span class="ico-right"><i class="ico ico-caret-right"></i></span></span>
            </a>
                            <a href="https://www.topratedcasinos.co.uk/link/bcasino/1"
                   onclick='ga("send", "event", "Link out", "Text link", "bCasino - Vertical:Casino", "18"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","Text link-","bCasino-","18-","+200 Free Spins £ 1200 Enjoy Up To"],24);' target="_blank"                   class="hidden-lg-down link-url" target="_blank">www.bcasino.co.uk/SignUp</a>
                        <div class="col-rating hidden-md-up">
                <div class="rating m-a-0">
                    <div class="rating-row">
                        <input type="hidden" class="rating-tooltip" data-filled="ico ico-star" data-empty="ico ico-star-empty" data-fractions="2" data-votes="1,316" value="5">
                        <p class="result text-default"><span class="result-value">1,316</span> user ratings</p>
                    </div>
                                        <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/bcasino" target="_blank">Expert Review <i class="ico ico-caret-right vertical"></i></a>
                                    </div>
            </div>
        </div>
    </div>
</li>                                                    
                            
                                                            <li class="rated-item rated-item-relative rated-item-relative-pb paypal-item item-mobile rated-item-view">
    <div class="row">
        <div class="col-img">
            <div class="img-holder">
                <div class="img-box" style="background:#000000 ">
                                            
                        <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/midaur" target="_blank"><picture>
                                <source media="(min-width: 1280px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 1280px) and (min-resolution: 120dpi)" sizes="188px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/376/midaur-1497029752.png 376w">
                                <source media="(min-width: 1280px)" sizes="188px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/midaur-1497029752.png 188w">

                                <source media="(min-width: 992px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 992px) and (min-resolution: 120dpi)" sizes="168px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/336/midaur-1497029752.png 336w">
                                <source media="(min-width: 992px)" sizes="168px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/168/midaur-1497029752.png 168w">

                                <source media="(min-width: 768px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 768px) and (min-resolution: 120dpi)" sizes="120px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/240/midaur-1497029752.png 240w">
                                <source media="(min-width: 768px)" sizes="120px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/120/midaur-1497029752.png 120w">

                                <source media="(min-width: 544px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 544px) and (min-resolution: 120dpi)" sizes="152px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/304/midaur-1497029752.png 304w">
                                <source media="(min-width: 544px)" sizes="152px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/152/midaur-1497029752.png 152w">

                                <source media="(min-width: 0px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 0px) and (min-resolution: 120dpi)" sizes="30vw" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/376/midaur-1497029752.png 376w,
                                                                        https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/240/midaur-1497029752.png 240w">
                                <source media="(min-width: 0px)" sizes="30vw" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/midaur-1497029752.png 188w,
                                                                        https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/120/midaur-1497029752.png 120w">

                                <img class="responsive-img" alt="" src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/midaur-1497029752.png 188w">
                            </picture></a>
                                                                </div>

                <div class="top-number">
                    <p class="h4">19</p>
                </div>
            </div>
        </div>
        <div class="col-doubled col-doubled-top hidden-sm-down col-doubled-top-light">
            <div class="row">
                <div class="col-rating">
                    <div class="rating m-a-0">
                        <div class="rating-row">
                            <div class="result-text"></div>
                            <input type="hidden" class="rating-tooltip" data-filled="ico ico-star" data-empty="ico ico-star-empty" data-fractions="2"  data-votes="1,012" value="5">
                            <p class="result text-default"><span class="result-value">1,012</span> user ratings</p>
                        </div>

                                                <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/midaur" target="_blank">Expert Review <i class="ico ico-caret-right vertical"></i></a>
                                            </div>
                </div>
                <div class="col-bonus hidden-sm-down">
                    <div class="bonus">
                        <p class="small" style="color:">300% Up To</p>
                        <p class="bonus-value">£600</p>
                        <p class="small">Sign-up Bonus</p>
                        <div class="popover-block">
                            <a href="#" class="popover-link small dashed">Terms apply</a>
                            <div class="webui-popover-content">
                                <h6 class="title m-b-10">SIGN-UP BONUS</h6>
                                <p class="text-dark m-b-10">For every £1 you deposit, Midaur will quadruple it (up to a max of £600).</p>
                                <p class="m-b-10">example: pay £100, play with £300</p>
                                <p class="m-b-10"><em class="text-dark">18+  Please Gamble Responsibly. Click &#039;Claim Bonus&#039; to view full terms and conditions</em>
                                </p>
                                <a href="https://www.topratedcasinos.co.uk/link/midaur/1"
                                   onclick='ga("send", "event", "Link out", "More Info", "Midaur - Vertical:Casino", "19"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","More Info-","Midaur-","19-","+300 Free Spins on Starburst £ 600 300% Up To"],24);' target="_blank"                                   target="_blank" role="button" class="btn btn-secondary btn-xs btn-icon font-weight-normal">Claim  Bonus <span class="ico-right"><i class="ico ico-caret-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-doubled col-doubled-bottom col-doubled-bottom-light">
            <div class="row">
                <div class="col-variant hidden-sm-down">
                    <div class="variant m-b">
                        <div class="hidden-md-up">
                            <img src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Highly%20%3Cbr%3E%20Trusted-badge-1480595499.png" width="50" height="50" alt="Highly <br> Trusted">
                        </div>
                        <div class="hidden-sm-down">
                            <img src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Highly%20%3Cbr%3E%20Trusted-badge-1480595499.png" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Highly%20%3Cbr%3E%20Trusted-badge-1480595499.png 1x, https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/100/Highly%20%3Cbr%3E%20Trusted-badge-1480595499.png 1.25x" width="50" height="50" alt="Highly <br> Trusted">
                        </div>
                        <p class="small">Highly <br> Trusted</p>
                    </div>
                </div>
                <div class="col-bonus hidden-md-up">
                    <div class="bonus m-t-0">
                        <p class="small" style="color:">300% Up To</p>
                        <p class="bonus-value">£600</p>
                        <p class="small">Sign-up Bonus</p>
                        <div class="popover-block">
                            <a href="#" class="popover-link small dashed">Terms apply</a>
                            <div class="webui-popover-content">
                                <h6 class="title m-b-10">SIGN-UP BONUS</h6>
                                <p class="text-dark m-b-10">For every £1 you deposit, Midaur will quadruple it (up to a max of £600).</p>
                                <p class="m-b-10">example: pay £100, play with £300</p>
                                <p class="m-b-10"><em class="text-dark">18+  Please Gamble Responsibly. Click &#039;Claim Bonus&#039; to view full terms and conditions</em>
                                </p>
                                <a href="https://www.topratedcasinos.co.uk/link/midaur/1"
                                   onclick='ga("send", "event", "Link out", "More Info", "Midaur - Vertical:Casino", "19"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","More Info-","Midaur-","19-","+300 Free Spins on Starburst £ 600 300% Up To"],24);' target="_blank"                                   target="_blank" role="button" class="btn btn-secondary btn-xs btn-icon font-weight-normal">Claim  Bonus <span class="ico-right"><i class="ico ico-caret-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-time">
                                        <div class="review-checks">
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>Earn Loyalty Points</span>
                        </div>
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>Great Bonus Offer</span>
                        </div>
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>Slots Specialist</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-button">
            <a href="https://www.topratedcasinos.co.uk/link/midaur/1"
               onclick='ga("send", "event", "Link out", "Button", "Midaur - Vertical:Casino", "19"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","Button-","Midaur-","19-","+300 Free Spins on Starburst £ 600 300% Up To"],24);' target="_blank"               role="button" target="_blank" class="btn btn-secondary btn-icon">Claim Bonus
                <span class="txt-add">Go to Midaur<span class="ico-right"><i class="ico ico-caret-right"></i></span></span>
            </a>
                            <a href="https://www.topratedcasinos.co.uk/link/midaur/1"
                   onclick='ga("send", "event", "Link out", "Text link", "Midaur - Vertical:Casino", "19"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","Text link-","Midaur-","19-","+300 Free Spins on Starburst £ 600 300% Up To"],24);' target="_blank"                   class="hidden-lg-down link-url" target="_blank">www.midaur.com/Play-Now</a>
                        <div class="col-rating hidden-md-up">
                <div class="rating m-a-0">
                    <div class="rating-row">
                        <input type="hidden" class="rating-tooltip" data-filled="ico ico-star" data-empty="ico ico-star-empty" data-fractions="2" data-votes="1,012" value="5">
                        <p class="result text-default"><span class="result-value">1,012</span> user ratings</p>
                    </div>
                                        <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/midaur" target="_blank">Expert Review <i class="ico ico-caret-right vertical"></i></a>
                                    </div>
            </div>
        </div>
    </div>
</li>                                                    
                            
                                                            <li class="rated-item rated-item-relative rated-item-relative-pb paypal-item item-mobile rated-item-view">
    <div class="row">
        <div class="col-img">
            <div class="img-holder">
                <div class="img-box" style="background:#000000 ">
                                            
                        <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/go-wild" target="_blank"><picture>
                                <source media="(min-width: 1280px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 1280px) and (min-resolution: 120dpi)" sizes="188px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/376/go-wild-1513616298.png 376w">
                                <source media="(min-width: 1280px)" sizes="188px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/go-wild-1513616298.png 188w">

                                <source media="(min-width: 992px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 992px) and (min-resolution: 120dpi)" sizes="168px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/336/go-wild-1513616298.png 336w">
                                <source media="(min-width: 992px)" sizes="168px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/168/go-wild-1513616298.png 168w">

                                <source media="(min-width: 768px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 768px) and (min-resolution: 120dpi)" sizes="120px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/240/go-wild-1513616298.png 240w">
                                <source media="(min-width: 768px)" sizes="120px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/120/go-wild-1513616298.png 120w">

                                <source media="(min-width: 544px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 544px) and (min-resolution: 120dpi)" sizes="152px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/304/go-wild-1513616298.png 304w">
                                <source media="(min-width: 544px)" sizes="152px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/152/go-wild-1513616298.png 152w">

                                <source media="(min-width: 0px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 0px) and (min-resolution: 120dpi)" sizes="30vw" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/376/go-wild-1513616298.png 376w,
                                                                        https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/240/go-wild-1513616298.png 240w">
                                <source media="(min-width: 0px)" sizes="30vw" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/go-wild-1513616298.png 188w,
                                                                        https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/120/go-wild-1513616298.png 120w">

                                <img class="responsive-img" alt="" src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/go-wild-1513616298.png 188w">
                            </picture></a>
                                                                </div>

                <div class="top-number">
                    <p class="h4">20</p>
                </div>
            </div>
        </div>
        <div class="col-doubled col-doubled-top hidden-sm-down col-doubled-top-light">
            <div class="row">
                <div class="col-rating">
                    <div class="rating m-a-0">
                        <div class="rating-row">
                            <div class="result-text"></div>
                            <input type="hidden" class="rating-tooltip" data-filled="ico ico-star" data-empty="ico ico-star-empty" data-fractions="2"  data-votes="1,291" value="4.5">
                            <p class="result text-default"><span class="result-value">1,291</span> user ratings</p>
                        </div>

                                                <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/go-wild" target="_blank">Expert Review <i class="ico ico-caret-right vertical"></i></a>
                                            </div>
                </div>
                <div class="col-bonus hidden-sm-down">
                    <div class="bonus">
                        <p class="small" style="color:">100% Up To</p>
                        <p class="bonus-value">£333</p>
                        <p class="small">Welcome Bonus</p>
                        <div class="popover-block">
                            <a href="#" class="popover-link small dashed">Terms apply</a>
                            <div class="webui-popover-content">
                                <h6 class="title m-b-10">MATCH</h6>
                                <p class="text-dark m-b-10">For every £1 you deposit, GoWild will match it (up to a max of £333)</p>
                                <p class="m-b-10">pay £100, play with £200</p>
                                <p class="m-b-10"><em class="text-dark">18+  Please Gamble Responsibly. Click &#039;Claim Bonus&#039; to view full terms and conditions</em>
                                </p>
                                <a href="https://www.topratedcasinos.co.uk/link/go-wild/2"
                                   onclick='ga("send", "event", "Link out", "More Info", "GoWild - Vertical:Casino", "20"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","More Info-","GoWild-","20-","Sign-up Bonus £ 333 100% Up To"],24);' target="_blank"                                   target="_blank" role="button" class="btn btn-secondary btn-xs btn-icon font-weight-normal">Claim  Bonus <span class="ico-right"><i class="ico ico-caret-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-doubled col-doubled-bottom col-doubled-bottom-light">
            <div class="row">
                <div class="col-variant hidden-sm-down">
                    <div class="variant m-b">
                        <div class="hidden-md-up">
                            <img src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Editor%27s%20%3Cbr%3E%20Choice-badge-1488370499.png" width="50" height="50" alt="Editor's <br> Choice">
                        </div>
                        <div class="hidden-sm-down">
                            <img src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Editor%27s%20%3Cbr%3E%20Choice-badge-1488370499.png" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Editor%27s%20%3Cbr%3E%20Choice-badge-1488370499.png 1x, https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/100/Editor%27s%20%3Cbr%3E%20Choice-badge-1488370499.png 1.25x" width="50" height="50" alt="Editor's <br> Choice">
                        </div>
                        <p class="small">Editor's <br> Choice</p>
                    </div>
                </div>
                <div class="col-bonus hidden-md-up">
                    <div class="bonus m-t-0">
                        <p class="small" style="color:">100% Up To</p>
                        <p class="bonus-value">£333</p>
                        <p class="small">Welcome Bonus</p>
                        <div class="popover-block">
                            <a href="#" class="popover-link small dashed">Terms apply</a>
                            <div class="webui-popover-content">
                                <h6 class="title m-b-10">MATCH</h6>
                                <p class="text-dark m-b-10">For every £1 you deposit, GoWild will match it (up to a max of £333)</p>
                                <p class="m-b-10">pay £100, play with £200</p>
                                <p class="m-b-10"><em class="text-dark">18+  Please Gamble Responsibly. Click &#039;Claim Bonus&#039; to view full terms and conditions</em>
                                </p>
                                <a href="https://www.topratedcasinos.co.uk/link/go-wild/2"
                                   onclick='ga("send", "event", "Link out", "More Info", "GoWild - Vertical:Casino", "20"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","More Info-","GoWild-","20-","Sign-up Bonus £ 333 100% Up To"],24);' target="_blank"                                   target="_blank" role="button" class="btn btn-secondary btn-xs btn-icon font-weight-normal">Claim  Bonus <span class="ico-right"><i class="ico ico-caret-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-time">
                                        <div class="review-checks">
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>High Stakes Live Casino</span>
                        </div>
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>Great VIP Club Perks</span>
                        </div>
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>Huge Slot Jackpots</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-button">
            <a href="https://www.topratedcasinos.co.uk/link/go-wild/2"
               onclick='ga("send", "event", "Link out", "Button", "GoWild - Vertical:Casino", "20"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","Button-","GoWild-","20-","Sign-up Bonus £ 333 100% Up To"],24);' target="_blank"               role="button" target="_blank" class="btn btn-secondary btn-icon">Claim Bonus
                <span class="txt-add">Go to GoWild<span class="ico-right"><i class="ico ico-caret-right"></i></span></span>
            </a>
                            <a href="https://www.topratedcasinos.co.uk/link/go-wild/2"
                   onclick='ga("send", "event", "Link out", "Text link", "GoWild - Vertical:Casino", "20"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","Text link-","GoWild-","20-","Sign-up Bonus £ 333 100% Up To"],24);' target="_blank"                   class="hidden-lg-down link-url" target="_blank">www.gowild.co.uk/Claim-Now</a>
                        <div class="col-rating hidden-md-up">
                <div class="rating m-a-0">
                    <div class="rating-row">
                        <input type="hidden" class="rating-tooltip" data-filled="ico ico-star" data-empty="ico ico-star-empty" data-fractions="2" data-votes="1,291" value="4.5">
                        <p class="result text-default"><span class="result-value">1,291</span> user ratings</p>
                    </div>
                                        <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/go-wild" target="_blank">Expert Review <i class="ico ico-caret-right vertical"></i></a>
                                    </div>
            </div>
        </div>
    </div>
</li>                                                    
                            
                                                            <li class="rated-item rated-item-relative rated-item-relative-pb paypal-item item-mobile rated-item-view">
    <div class="row">
        <div class="col-img">
            <div class="img-holder">
                <div class="img-box" style="background:#000000 ">
                                            
                        <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/regal-wins" target="_blank"><picture>
                                <source media="(min-width: 1280px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 1280px) and (min-resolution: 120dpi)" sizes="188px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/376/regal-wins-1510048478.png 376w">
                                <source media="(min-width: 1280px)" sizes="188px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/regal-wins-1510048478.png 188w">

                                <source media="(min-width: 992px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 992px) and (min-resolution: 120dpi)" sizes="168px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/336/regal-wins-1510048478.png 336w">
                                <source media="(min-width: 992px)" sizes="168px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/168/regal-wins-1510048478.png 168w">

                                <source media="(min-width: 768px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 768px) and (min-resolution: 120dpi)" sizes="120px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/240/regal-wins-1510048478.png 240w">
                                <source media="(min-width: 768px)" sizes="120px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/120/regal-wins-1510048478.png 120w">

                                <source media="(min-width: 544px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 544px) and (min-resolution: 120dpi)" sizes="152px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/304/regal-wins-1510048478.png 304w">
                                <source media="(min-width: 544px)" sizes="152px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/152/regal-wins-1510048478.png 152w">

                                <source media="(min-width: 0px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 0px) and (min-resolution: 120dpi)" sizes="30vw" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/376/regal-wins-1510048478.png 376w,
                                                                        https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/240/regal-wins-1510048478.png 240w">
                                <source media="(min-width: 0px)" sizes="30vw" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/regal-wins-1510048478.png 188w,
                                                                        https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/120/regal-wins-1510048478.png 120w">

                                <img class="responsive-img" alt="" src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/regal-wins-1510048478.png 188w">
                            </picture></a>
                                                                </div>

                <div class="top-number">
                    <p class="h4">21</p>
                </div>
            </div>
        </div>
        <div class="col-doubled col-doubled-top hidden-sm-down col-doubled-top-light">
            <div class="row">
                <div class="col-rating">
                    <div class="rating m-a-0">
                        <div class="rating-row">
                            <div class="result-text"></div>
                            <input type="hidden" class="rating-tooltip" data-filled="ico ico-star" data-empty="ico ico-star-empty" data-fractions="2"  data-votes="1,456" value="4.5">
                            <p class="result text-default"><span class="result-value">1,456</span> user ratings</p>
                        </div>

                                                <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/regal-wins" target="_blank">Expert Review <i class="ico ico-caret-right vertical"></i></a>
                                            </div>
                </div>
                <div class="col-bonus hidden-sm-down">
                    <div class="bonus">
                        <p class="small" style="color:">Enjoy Up To</p>
                        <p class="bonus-value">£500</p>
                        <p class="small"> Welcome Package</p>
                        <div class="popover-block">
                            <a href="#" class="popover-link small dashed">Terms apply</a>
                            <div class="webui-popover-content">
                                <h6 class="title m-b-10">MATCH BONUS</h6>
                                <p class="text-dark m-b-10">Regal WIns offers 3 deposit bonuses ranging from 40% to 100% (the biggest of which has a max of £200). The grand total on offer is £500.</p>
                                <p class="m-b-10">Example: pay £100, play with £200</p>
                                <p class="m-b-10"><em class="text-dark">18+  Please Gamble Responsibly. Click &#039;Claim Bonus&#039; to view full terms and conditions</em>
                                </p>
                                <a href="https://www.topratedcasinos.co.uk/link/regal-wins/1"
                                   onclick='ga("send", "event", "Link out", "More Info", "Regal Wins - Vertical:Casino", "21"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","More Info-","Regal Wins-","21-","+200 Free Spins £ 500 Enjoy Up To"],24);' target="_blank"                                   target="_blank" role="button" class="btn btn-secondary btn-xs btn-icon font-weight-normal">Claim  Bonus <span class="ico-right"><i class="ico ico-caret-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-doubled col-doubled-bottom col-doubled-bottom-light">
            <div class="row">
                <div class="col-variant hidden-sm-down">
                    <div class="variant m-b">
                        <div class="hidden-md-up">
                            <img src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Modern%20Design%20%3Cbr%3E%20%26%20Graphics-badge-1480595437.png" width="50" height="50" alt="Modern Design <br> & Graphics">
                        </div>
                        <div class="hidden-sm-down">
                            <img src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Modern%20Design%20%3Cbr%3E%20%26%20Graphics-badge-1480595437.png" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Modern%20Design%20%3Cbr%3E%20%26%20Graphics-badge-1480595437.png 1x, https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/100/Modern%20Design%20%3Cbr%3E%20%26%20Graphics-badge-1480595437.png 1.25x" width="50" height="50" alt="Modern Design <br> & Graphics">
                        </div>
                        <p class="small">Modern Design <br> & Graphics</p>
                    </div>
                </div>
                <div class="col-bonus hidden-md-up">
                    <div class="bonus m-t-0">
                        <p class="small" style="color:">Enjoy Up To</p>
                        <p class="bonus-value">£500</p>
                        <p class="small"> Welcome Package</p>
                        <div class="popover-block">
                            <a href="#" class="popover-link small dashed">Terms apply</a>
                            <div class="webui-popover-content">
                                <h6 class="title m-b-10">MATCH BONUS</h6>
                                <p class="text-dark m-b-10">Regal WIns offers 3 deposit bonuses ranging from 40% to 100% (the biggest of which has a max of £200). The grand total on offer is £500.</p>
                                <p class="m-b-10">Example: pay £100, play with £200</p>
                                <p class="m-b-10"><em class="text-dark">18+  Please Gamble Responsibly. Click &#039;Claim Bonus&#039; to view full terms and conditions</em>
                                </p>
                                <a href="https://www.topratedcasinos.co.uk/link/regal-wins/1"
                                   onclick='ga("send", "event", "Link out", "More Info", "Regal Wins - Vertical:Casino", "21"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","More Info-","Regal Wins-","21-","+200 Free Spins £ 500 Enjoy Up To"],24);' target="_blank"                                   target="_blank" role="button" class="btn btn-secondary btn-xs btn-icon font-weight-normal">Claim  Bonus <span class="ico-right"><i class="ico ico-caret-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-time">
                                        <div class="review-checks">
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>Weekly Promotions</span>
                        </div>
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>Table Games + Slots</span>
                        </div>
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>Accepts PayPal</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-button">
            <a href="https://www.topratedcasinos.co.uk/link/regal-wins/1"
               onclick='ga("send", "event", "Link out", "Button", "Regal Wins - Vertical:Casino", "21"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","Button-","Regal Wins-","21-","+200 Free Spins £ 500 Enjoy Up To"],24);' target="_blank"               role="button" target="_blank" class="btn btn-secondary btn-icon">Claim Bonus
                <span class="txt-add">Go to Regal Wins<span class="ico-right"><i class="ico ico-caret-right"></i></span></span>
            </a>
                            <a href="https://www.topratedcasinos.co.uk/link/regal-wins/1"
                   onclick='ga("send", "event", "Link out", "Text link", "Regal Wins - Vertical:Casino", "21"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","Text link-","Regal Wins-","21-","+200 Free Spins £ 500 Enjoy Up To"],24);' target="_blank"                   class="hidden-lg-down link-url" target="_blank">www.regalwins.com/Bonus</a>
                        <div class="col-rating hidden-md-up">
                <div class="rating m-a-0">
                    <div class="rating-row">
                        <input type="hidden" class="rating-tooltip" data-filled="ico ico-star" data-empty="ico ico-star-empty" data-fractions="2" data-votes="1,456" value="4.5">
                        <p class="result text-default"><span class="result-value">1,456</span> user ratings</p>
                    </div>
                                        <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/regal-wins" target="_blank">Expert Review <i class="ico ico-caret-right vertical"></i></a>
                                    </div>
            </div>
        </div>
    </div>
</li>                                                    
                            
                                                            <li class="rated-item rated-item-relative rated-item-relative-pb paypal-item item-mobile rated-item-view">
    <div class="row">
        <div class="col-img">
            <div class="img-holder">
                <div class="img-box" style="background:#242424 ">
                                            
                        <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/goliath-casino" target="_blank"><picture>
                                <source media="(min-width: 1280px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 1280px) and (min-resolution: 120dpi)" sizes="188px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/376/goliath-casino-1524846790.png 376w">
                                <source media="(min-width: 1280px)" sizes="188px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/goliath-casino-1524846790.png 188w">

                                <source media="(min-width: 992px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 992px) and (min-resolution: 120dpi)" sizes="168px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/336/goliath-casino-1524846790.png 336w">
                                <source media="(min-width: 992px)" sizes="168px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/168/goliath-casino-1524846790.png 168w">

                                <source media="(min-width: 768px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 768px) and (min-resolution: 120dpi)" sizes="120px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/240/goliath-casino-1524846790.png 240w">
                                <source media="(min-width: 768px)" sizes="120px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/120/goliath-casino-1524846790.png 120w">

                                <source media="(min-width: 544px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 544px) and (min-resolution: 120dpi)" sizes="152px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/304/goliath-casino-1524846790.png 304w">
                                <source media="(min-width: 544px)" sizes="152px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/152/goliath-casino-1524846790.png 152w">

                                <source media="(min-width: 0px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 0px) and (min-resolution: 120dpi)" sizes="30vw" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/376/goliath-casino-1524846790.png 376w,
                                                                        https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/240/goliath-casino-1524846790.png 240w">
                                <source media="(min-width: 0px)" sizes="30vw" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/goliath-casino-1524846790.png 188w,
                                                                        https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/120/goliath-casino-1524846790.png 120w">

                                <img class="responsive-img" alt="" src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/goliath-casino-1524846790.png 188w">
                            </picture></a>
                                                                </div>

                <div class="top-number">
                    <p class="h4">22</p>
                </div>
            </div>
        </div>
        <div class="col-doubled col-doubled-top hidden-sm-down col-doubled-top-light">
            <div class="row">
                <div class="col-rating">
                    <div class="rating m-a-0">
                        <div class="rating-row">
                            <div class="result-text"></div>
                            <input type="hidden" class="rating-tooltip" data-filled="ico ico-star" data-empty="ico ico-star-empty" data-fractions="2"  data-votes="452" value="5">
                            <p class="result text-default"><span class="result-value">452</span> user ratings</p>
                        </div>

                                                <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/goliath-casino" target="_blank">Expert Review <i class="ico ico-caret-right vertical"></i></a>
                                            </div>
                </div>
                <div class="col-bonus hidden-sm-down">
                    <div class="bonus">
                        <p class="small" style="color:">Enjoy Up To</p>
                        <p class="bonus-value">£1,200</p>
                        <p class="small">Welcome Bonus</p>
                        <div class="popover-block">
                            <a href="#" class="popover-link small dashed">Terms apply</a>
                            <div class="webui-popover-content">
                                <h6 class="title m-b-10">New Customer Offer</h6>
                                <p class="text-dark m-b-10">Deposit 1: Claim 100% Match Up up to £50 when you deposit up to £50 or 200% up to £200 when you deposit over £50 and 20 bonus Spins. Deposit 2: Claim 150% Match Up Bonus up to £400 and 10 Spins. Deposit 3: Claim 100% Match Up Bonus up to £300 and 10 Spins</p>
                                <p class="m-b-10">Enjoy up to £1,200 over 4 deposits.</p>
                                <p class="m-b-10"><em class="text-dark">18+  Please Gamble Responsibly. Click &#039;Claim Bonus&#039; to view full terms and conditions</em>
                                </p>
                                <a href="https://www.topratedcasinos.co.uk/link/goliath-casino/1"
                                   onclick='ga("send", "event", "Link out", "More Info", "Goliath Casino - Vertical:Casino", "22"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","More Info-","Goliath Casino-","22-","+200 Free Spins £ 1,200 Enjoy Up To"],24);' target="_blank"                                   target="_blank" role="button" class="btn btn-secondary btn-xs btn-icon font-weight-normal">Claim  Bonus <span class="ico-right"><i class="ico ico-caret-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-doubled col-doubled-bottom col-doubled-bottom-light">
            <div class="row">
                <div class="col-variant hidden-sm-down">
                    <div class="variant m-b">
                        <div class="hidden-md-up">
                            <img src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Brand%20New%20%3Cbr%3E%20Casino-badge-1480595459.png" width="50" height="50" alt="Brand New <br> Casino">
                        </div>
                        <div class="hidden-sm-down">
                            <img src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Brand%20New%20%3Cbr%3E%20Casino-badge-1480595459.png" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Brand%20New%20%3Cbr%3E%20Casino-badge-1480595459.png 1x, https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/100/Brand%20New%20%3Cbr%3E%20Casino-badge-1480595459.png 1.25x" width="50" height="50" alt="Brand New <br> Casino">
                        </div>
                        <p class="small">Brand New <br> Casino</p>
                    </div>
                </div>
                <div class="col-bonus hidden-md-up">
                    <div class="bonus m-t-0">
                        <p class="small" style="color:">Enjoy Up To</p>
                        <p class="bonus-value">£1,200</p>
                        <p class="small">Welcome Bonus</p>
                        <div class="popover-block">
                            <a href="#" class="popover-link small dashed">Terms apply</a>
                            <div class="webui-popover-content">
                                <h6 class="title m-b-10">New Customer Offer</h6>
                                <p class="text-dark m-b-10">Deposit 1: Claim 100% Match Up up to £50 when you deposit up to £50 or 200% up to £200 when you deposit over £50 and 20 bonus Spins. Deposit 2: Claim 150% Match Up Bonus up to £400 and 10 Spins. Deposit 3: Claim 100% Match Up Bonus up to £300 and 10 Spins</p>
                                <p class="m-b-10">Enjoy up to £1,200 over 4 deposits.</p>
                                <p class="m-b-10"><em class="text-dark">18+  Please Gamble Responsibly. Click &#039;Claim Bonus&#039; to view full terms and conditions</em>
                                </p>
                                <a href="https://www.topratedcasinos.co.uk/link/goliath-casino/1"
                                   onclick='ga("send", "event", "Link out", "More Info", "Goliath Casino - Vertical:Casino", "22"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","More Info-","Goliath Casino-","22-","+200 Free Spins £ 1,200 Enjoy Up To"],24);' target="_blank"                                   target="_blank" role="button" class="btn btn-secondary btn-xs btn-icon font-weight-normal">Claim  Bonus <span class="ico-right"><i class="ico ico-caret-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-time">
                                        <div class="review-checks">
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>Brand New Casino</span>
                        </div>
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>High Roller Welcome Bonus</span>
                        </div>
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>New Slots Included</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-button">
            <a href="https://www.topratedcasinos.co.uk/link/goliath-casino/1"
               onclick='ga("send", "event", "Link out", "Button", "Goliath Casino - Vertical:Casino", "22"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","Button-","Goliath Casino-","22-","+200 Free Spins £ 1,200 Enjoy Up To"],24);' target="_blank"               role="button" target="_blank" class="btn btn-secondary btn-icon">Claim Bonus
                <span class="txt-add">Go to Goliath Casino<span class="ico-right"><i class="ico ico-caret-right"></i></span></span>
            </a>
                            <a href="https://www.topratedcasinos.co.uk/link/goliath-casino/1"
                   onclick='ga("send", "event", "Link out", "Text link", "Goliath Casino - Vertical:Casino", "22"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","Text link-","Goliath Casino-","22-","+200 Free Spins £ 1,200 Enjoy Up To"],24);' target="_blank"                   class="hidden-lg-down link-url" target="_blank">www.goliathcasino.com/PlayNow</a>
                        <div class="col-rating hidden-md-up">
                <div class="rating m-a-0">
                    <div class="rating-row">
                        <input type="hidden" class="rating-tooltip" data-filled="ico ico-star" data-empty="ico ico-star-empty" data-fractions="2" data-votes="452" value="5">
                        <p class="result text-default"><span class="result-value">452</span> user ratings</p>
                    </div>
                                        <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/goliath-casino" target="_blank">Expert Review <i class="ico ico-caret-right vertical"></i></a>
                                    </div>
            </div>
        </div>
    </div>
</li>                                                    
                            
                                                            <li class="rated-item rated-item-relative rated-item-relative-pb paypal-item item-mobile rated-item-view">
    <div class="row">
        <div class="col-img">
            <div class="img-holder">
                <div class="img-box" style="background:#3f3f3f ">
                                            
                        <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/casilando" target="_blank"><picture>
                                <source media="(min-width: 1280px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 1280px) and (min-resolution: 120dpi)" sizes="188px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/376/casilando-1512663567.png 376w">
                                <source media="(min-width: 1280px)" sizes="188px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/casilando-1512663567.png 188w">

                                <source media="(min-width: 992px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 992px) and (min-resolution: 120dpi)" sizes="168px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/336/casilando-1512663567.png 336w">
                                <source media="(min-width: 992px)" sizes="168px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/168/casilando-1512663567.png 168w">

                                <source media="(min-width: 768px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 768px) and (min-resolution: 120dpi)" sizes="120px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/240/casilando-1512663567.png 240w">
                                <source media="(min-width: 768px)" sizes="120px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/120/casilando-1512663567.png 120w">

                                <source media="(min-width: 544px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 544px) and (min-resolution: 120dpi)" sizes="152px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/304/casilando-1512663567.png 304w">
                                <source media="(min-width: 544px)" sizes="152px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/152/casilando-1512663567.png 152w">

                                <source media="(min-width: 0px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 0px) and (min-resolution: 120dpi)" sizes="30vw" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/376/casilando-1512663567.png 376w,
                                                                        https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/240/casilando-1512663567.png 240w">
                                <source media="(min-width: 0px)" sizes="30vw" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/casilando-1512663567.png 188w,
                                                                        https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/120/casilando-1512663567.png 120w">

                                <img class="responsive-img" alt="" src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/casilando-1512663567.png 188w">
                            </picture></a>
                                                                </div>

                <div class="top-number">
                    <p class="h4">23</p>
                </div>
            </div>
        </div>
        <div class="col-doubled col-doubled-top hidden-sm-down col-doubled-top-light">
            <div class="row">
                <div class="col-rating">
                    <div class="rating m-a-0">
                        <div class="rating-row">
                            <div class="result-text"></div>
                            <input type="hidden" class="rating-tooltip" data-filled="ico ico-star" data-empty="ico ico-star-empty" data-fractions="2"  data-votes="1023" value="5">
                            <p class="result text-default"><span class="result-value">1023</span> user ratings</p>
                        </div>

                                                <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/casilando" target="_blank">Expert Review <i class="ico ico-caret-right vertical"></i></a>
                                            </div>
                </div>
                <div class="col-bonus hidden-sm-down">
                    <div class="bonus">
                        <p class="small" style="color:">100% Up To</p>
                        <p class="bonus-value">£300</p>
                        <p class="small">+90 Spins</p>
                        <div class="popover-block">
                            <a href="#" class="popover-link small dashed">Terms apply</a>
                            <div class="webui-popover-content">
                                <h6 class="title m-b-10">MATCH + FREE SPINS</h6>
                                <p class="text-dark m-b-10">New players only. Minimum deposit of £20. Bonus spins are valid on selected games only, and subject to 35x wagering, and must be used within 10 days, otherwise any unused bonus spins shall be removed. Bonus funds are 100% up to £300 and separate to Cash funds. 35x (bonus + deposit) wagering requirements. £5 max bet with bonus. Bonus must be used within 30 days otherwise any unused bonus shall be removed. </p>
                                <p class="m-b-10">pay £100, play with £200</p>
                                <p class="m-b-10"><em class="text-dark">18+  Please Gamble Responsibly. Click &#039;Claim Bonus&#039; to view full terms and conditions</em>
                                </p>
                                <a href="https://www.topratedcasinos.co.uk/link/casilando/1"
                                   onclick='ga("send", "event", "Link out", "More Info", "Casilando - Vertical:Casino", "23"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","More Info-","Casilando-","23-","Sign-up Bonus £ 300 100% Up To"],24);' target="_blank"                                   target="_blank" role="button" class="btn btn-secondary btn-xs btn-icon font-weight-normal">Claim  Bonus <span class="ico-right"><i class="ico ico-caret-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-doubled col-doubled-bottom col-doubled-bottom-light">
            <div class="row">
                <div class="col-variant hidden-sm-down">
                    <div class="variant m-b">
                        <div class="hidden-md-up">
                            <img src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Top%20Games%20%3Cbr%3E%20Selection-badge-1480595387.png" width="50" height="50" alt="Top Games <br> Selection">
                        </div>
                        <div class="hidden-sm-down">
                            <img src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Top%20Games%20%3Cbr%3E%20Selection-badge-1480595387.png" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Top%20Games%20%3Cbr%3E%20Selection-badge-1480595387.png 1x, https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/100/Top%20Games%20%3Cbr%3E%20Selection-badge-1480595387.png 1.25x" width="50" height="50" alt="Top Games <br> Selection">
                        </div>
                        <p class="small">Top Games <br> Selection</p>
                    </div>
                </div>
                <div class="col-bonus hidden-md-up">
                    <div class="bonus m-t-0">
                        <p class="small" style="color:">100% Up To</p>
                        <p class="bonus-value">£300</p>
                        <p class="small">+90 Spins</p>
                        <div class="popover-block">
                            <a href="#" class="popover-link small dashed">Terms apply</a>
                            <div class="webui-popover-content">
                                <h6 class="title m-b-10">MATCH + FREE SPINS</h6>
                                <p class="text-dark m-b-10">New players only. Minimum deposit of £20. Bonus spins are valid on selected games only, and subject to 35x wagering, and must be used within 10 days, otherwise any unused bonus spins shall be removed. Bonus funds are 100% up to £300 and separate to Cash funds. 35x (bonus + deposit) wagering requirements. £5 max bet with bonus. Bonus must be used within 30 days otherwise any unused bonus shall be removed. </p>
                                <p class="m-b-10">pay £100, play with £200</p>
                                <p class="m-b-10"><em class="text-dark">18+  Please Gamble Responsibly. Click &#039;Claim Bonus&#039; to view full terms and conditions</em>
                                </p>
                                <a href="https://www.topratedcasinos.co.uk/link/casilando/1"
                                   onclick='ga("send", "event", "Link out", "More Info", "Casilando - Vertical:Casino", "23"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","More Info-","Casilando-","23-","Sign-up Bonus £ 300 100% Up To"],24);' target="_blank"                                   target="_blank" role="button" class="btn btn-secondary btn-xs btn-icon font-weight-normal">Claim  Bonus <span class="ico-right"><i class="ico ico-caret-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-time">
                                        <div class="review-checks">
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>Exclusive VIP Club</span>
                        </div>
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>Beautiful Design</span>
                        </div>
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>Live Dealers</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-button">
            <a href="https://www.topratedcasinos.co.uk/link/casilando/1"
               onclick='ga("send", "event", "Link out", "Button", "Casilando - Vertical:Casino", "23"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","Button-","Casilando-","23-","Sign-up Bonus £ 300 100% Up To"],24);' target="_blank"               role="button" target="_blank" class="btn btn-secondary btn-icon">Claim Bonus
                <span class="txt-add">Go to Casilando<span class="ico-right"><i class="ico ico-caret-right"></i></span></span>
            </a>
                            <a href="https://www.topratedcasinos.co.uk/link/casilando/1"
                   onclick='ga("send", "event", "Link out", "Text link", "Casilando - Vertical:Casino", "23"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","Text link-","Casilando-","23-","Sign-up Bonus £ 300 100% Up To"],24);' target="_blank"                   class="hidden-lg-down link-url" target="_blank">www.casilando.com/DepositNow</a>
                        <div class="col-rating hidden-md-up">
                <div class="rating m-a-0">
                    <div class="rating-row">
                        <input type="hidden" class="rating-tooltip" data-filled="ico ico-star" data-empty="ico ico-star-empty" data-fractions="2" data-votes="1023" value="5">
                        <p class="result text-default"><span class="result-value">1023</span> user ratings</p>
                    </div>
                                        <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/casilando" target="_blank">Expert Review <i class="ico ico-caret-right vertical"></i></a>
                                    </div>
            </div>
        </div>
    </div>
</li>                                                    
                            
                                                            <li class="rated-item rated-item-relative rated-item-relative-pb paypal-item item-mobile rated-item-view">
    <div class="row">
        <div class="col-img">
            <div class="img-holder">
                <div class="img-box" style="background:#e20613 ">
                                            
                        <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/sun-play" target="_blank"><picture>
                                <source media="(min-width: 1280px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 1280px) and (min-resolution: 120dpi)" sizes="188px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/376/sun-play-1516639581.png 376w">
                                <source media="(min-width: 1280px)" sizes="188px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/sun-play-1516639581.png 188w">

                                <source media="(min-width: 992px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 992px) and (min-resolution: 120dpi)" sizes="168px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/336/sun-play-1516639581.png 336w">
                                <source media="(min-width: 992px)" sizes="168px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/168/sun-play-1516639581.png 168w">

                                <source media="(min-width: 768px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 768px) and (min-resolution: 120dpi)" sizes="120px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/240/sun-play-1516639581.png 240w">
                                <source media="(min-width: 768px)" sizes="120px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/120/sun-play-1516639581.png 120w">

                                <source media="(min-width: 544px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 544px) and (min-resolution: 120dpi)" sizes="152px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/304/sun-play-1516639581.png 304w">
                                <source media="(min-width: 544px)" sizes="152px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/152/sun-play-1516639581.png 152w">

                                <source media="(min-width: 0px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 0px) and (min-resolution: 120dpi)" sizes="30vw" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/376/sun-play-1516639581.png 376w,
                                                                        https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/240/sun-play-1516639581.png 240w">
                                <source media="(min-width: 0px)" sizes="30vw" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/sun-play-1516639581.png 188w,
                                                                        https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/120/sun-play-1516639581.png 120w">

                                <img class="responsive-img" alt="" src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/sun-play-1516639581.png 188w">
                            </picture></a>
                                                                </div>

                <div class="top-number">
                    <p class="h4">24</p>
                </div>
            </div>
        </div>
        <div class="col-doubled col-doubled-top hidden-sm-down col-doubled-top-light">
            <div class="row">
                <div class="col-rating">
                    <div class="rating m-a-0">
                        <div class="rating-row">
                            <div class="result-text"></div>
                            <input type="hidden" class="rating-tooltip" data-filled="ico ico-star" data-empty="ico ico-star-empty" data-fractions="2"  data-votes="832" value="4.5">
                            <p class="result text-default"><span class="result-value">832</span> user ratings</p>
                        </div>

                                                <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/sun-play" target="_blank">Expert Review <i class="ico ico-caret-right vertical"></i></a>
                                            </div>
                </div>
                <div class="col-bonus hidden-sm-down">
                    <div class="bonus">
                        <p class="small" style="color:">200% Up To</p>
                        <p class="bonus-value">£100</p>
                        <p class="small">+ 50 Free Spins</p>
                        <div class="popover-block">
                            <a href="#" class="popover-link small dashed">Terms apply</a>
                            <div class="webui-popover-content">
                                <h6 class="title m-b-10">MATCH + FREE SPINS</h6>
                                <p class="text-dark m-b-10">Min Dep £10, Max Bonus £100 + 50 Spins, 200% match, Code: 200FIRST, 30X wagering (Deposit+Bonus), 4X conversion, T&Cs apply</p>
                                <p class="m-b-10">pay £50, play with £150</p>
                                <p class="m-b-10"><em class="text-dark">18+  Please Gamble Responsibly. Click &#039;Claim Bonus&#039; to view full terms and conditions</em>
                                </p>
                                <a href="https://www.topratedcasinos.co.uk/link/sun-play/2"
                                   onclick='ga("send", "event", "Link out", "More Info", "The Sun Play - Vertical:Casino", "24"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","More Info-","The Sun Play-","24-","Bonus + Free Spins £ 100 200% Up To"],24);' target="_blank"                                   target="_blank" role="button" class="btn btn-secondary btn-xs btn-icon font-weight-normal">Claim  Bonus <span class="ico-right"><i class="ico ico-caret-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-doubled col-doubled-bottom col-doubled-bottom-light">
            <div class="row">
                <div class="col-variant hidden-sm-down">
                    <div class="variant m-b">
                        <div class="hidden-md-up">
                            <img src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Award%20Winning%20%3Cbr%3E%20Casino-badge-1480593949.png" width="50" height="50" alt="Award Winning <br> Casino">
                        </div>
                        <div class="hidden-sm-down">
                            <img src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Award%20Winning%20%3Cbr%3E%20Casino-badge-1480593949.png" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Award%20Winning%20%3Cbr%3E%20Casino-badge-1480593949.png 1x, https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/100/Award%20Winning%20%3Cbr%3E%20Casino-badge-1480593949.png 1.25x" width="50" height="50" alt="Award Winning <br> Casino">
                        </div>
                        <p class="small">Award Winning <br> Casino</p>
                    </div>
                </div>
                <div class="col-bonus hidden-md-up">
                    <div class="bonus m-t-0">
                        <p class="small" style="color:">200% Up To</p>
                        <p class="bonus-value">£100</p>
                        <p class="small">+ 50 Free Spins</p>
                        <div class="popover-block">
                            <a href="#" class="popover-link small dashed">Terms apply</a>
                            <div class="webui-popover-content">
                                <h6 class="title m-b-10">MATCH + FREE SPINS</h6>
                                <p class="text-dark m-b-10">Min Dep £10, Max Bonus £100 + 50 Spins, 200% match, Code: 200FIRST, 30X wagering (Deposit+Bonus), 4X conversion, T&Cs apply</p>
                                <p class="m-b-10">pay £50, play with £150</p>
                                <p class="m-b-10"><em class="text-dark">18+  Please Gamble Responsibly. Click &#039;Claim Bonus&#039; to view full terms and conditions</em>
                                </p>
                                <a href="https://www.topratedcasinos.co.uk/link/sun-play/2"
                                   onclick='ga("send", "event", "Link out", "More Info", "The Sun Play - Vertical:Casino", "24"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","More Info-","The Sun Play-","24-","Bonus + Free Spins £ 100 200% Up To"],24);' target="_blank"                                   target="_blank" role="button" class="btn btn-secondary btn-xs btn-icon font-weight-normal">Claim  Bonus <span class="ico-right"><i class="ico ico-caret-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-time">
                                        <div class="review-checks">
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>Big UK Brand Name</span>
                        </div>
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>Massive Jackpot Slots</span>
                        </div>
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>Cashback For VIPs</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-button">
            <a href="https://www.topratedcasinos.co.uk/link/sun-play/2"
               onclick='ga("send", "event", "Link out", "Button", "The Sun Play - Vertical:Casino", "24"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","Button-","The Sun Play-","24-","Bonus + Free Spins £ 100 200% Up To"],24);' target="_blank"               role="button" target="_blank" class="btn btn-secondary btn-icon">Claim Bonus
                <span class="txt-add">Go to The Sun Play<span class="ico-right"><i class="ico ico-caret-right"></i></span></span>
            </a>
                            <a href="https://www.topratedcasinos.co.uk/link/sun-play/2"
                   onclick='ga("send", "event", "Link out", "Text link", "The Sun Play - Vertical:Casino", "24"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","Text link-","The Sun Play-","24-","Bonus + Free Spins £ 100 200% Up To"],24);' target="_blank"                   class="hidden-lg-down link-url" target="_blank">www.thesunplay.co.uk/promo</a>
                        <div class="col-rating hidden-md-up">
                <div class="rating m-a-0">
                    <div class="rating-row">
                        <input type="hidden" class="rating-tooltip" data-filled="ico ico-star" data-empty="ico ico-star-empty" data-fractions="2" data-votes="832" value="4.5">
                        <p class="result text-default"><span class="result-value">832</span> user ratings</p>
                    </div>
                                        <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/sun-play" target="_blank">Expert Review <i class="ico ico-caret-right vertical"></i></a>
                                    </div>
            </div>
        </div>
    </div>
</li>                                                    
                            
                                                            <li class="rated-item rated-item-relative rated-item-relative-pb paypal-item item-mobile rated-item-view">
    <div class="row">
        <div class="col-img">
            <div class="img-holder">
                <div class="img-box" style="background:#000000 ">
                                            
                        <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/diamond-7-casino" target="_blank"><picture>
                                <source media="(min-width: 1280px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 1280px) and (min-resolution: 120dpi)" sizes="188px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/376/diamond-7-casino-1508842873.png 376w">
                                <source media="(min-width: 1280px)" sizes="188px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/diamond-7-casino-1508842873.png 188w">

                                <source media="(min-width: 992px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 992px) and (min-resolution: 120dpi)" sizes="168px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/336/diamond-7-casino-1508842873.png 336w">
                                <source media="(min-width: 992px)" sizes="168px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/168/diamond-7-casino-1508842873.png 168w">

                                <source media="(min-width: 768px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 768px) and (min-resolution: 120dpi)" sizes="120px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/240/diamond-7-casino-1508842873.png 240w">
                                <source media="(min-width: 768px)" sizes="120px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/120/diamond-7-casino-1508842873.png 120w">

                                <source media="(min-width: 544px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 544px) and (min-resolution: 120dpi)" sizes="152px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/304/diamond-7-casino-1508842873.png 304w">
                                <source media="(min-width: 544px)" sizes="152px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/152/diamond-7-casino-1508842873.png 152w">

                                <source media="(min-width: 0px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 0px) and (min-resolution: 120dpi)" sizes="30vw" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/376/diamond-7-casino-1508842873.png 376w,
                                                                        https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/240/diamond-7-casino-1508842873.png 240w">
                                <source media="(min-width: 0px)" sizes="30vw" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/diamond-7-casino-1508842873.png 188w,
                                                                        https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/120/diamond-7-casino-1508842873.png 120w">

                                <img class="responsive-img" alt="" src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/diamond-7-casino-1508842873.png 188w">
                            </picture></a>
                                                                </div>

                <div class="top-number">
                    <p class="h4">25</p>
                </div>
            </div>
        </div>
        <div class="col-doubled col-doubled-top hidden-sm-down col-doubled-top-light">
            <div class="row">
                <div class="col-rating">
                    <div class="rating m-a-0">
                        <div class="rating-row">
                            <div class="result-text"></div>
                            <input type="hidden" class="rating-tooltip" data-filled="ico ico-star" data-empty="ico ico-star-empty" data-fractions="2"  data-votes="1090" value="5">
                            <p class="result text-default"><span class="result-value">1090</span> user ratings</p>
                        </div>

                                                <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/diamond-7-casino" target="_blank">Expert Review <i class="ico ico-caret-right vertical"></i></a>
                                            </div>
                </div>
                <div class="col-bonus hidden-sm-down">
                    <div class="bonus">
                        <p class="small" style="color:">150 Free Spins+</p>
                        <p class="bonus-value">£1,200</p>
                        <p class="small"> Welcome Package</p>
                        <div class="popover-block">
                            <a href="#" class="popover-link small dashed">Terms apply</a>
                            <div class="webui-popover-content">
                                <h6 class="title m-b-10">MATCH + FREE SPINS</h6>
                                <p class="text-dark m-b-10">Diamond 7 Casino offers 3 deposit bonuses ranging from 50% to 200% (the biggest of which has a max of £500). The grand total on offer is £1,200, and you'll also get 150 free spins.</p>
                                <p class="m-b-10">Example: pay £50, play with £100</p>
                                <p class="m-b-10"><em class="text-dark">18+  Please Gamble Responsibly. Click &#039;Claim Bonus&#039; to view full terms and conditions</em>
                                </p>
                                <a href="https://www.topratedcasinos.co.uk/link/diamond-7-casino/1"
                                   onclick='ga("send", "event", "Link out", "More Info", "Diamond 7 Casino - Vertical:Casino", "25"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","More Info-","Diamond 7 Casino-","25-","+25 Free Spins £ 1,200 150 Free Spins+"],24);' target="_blank"                                   target="_blank" role="button" class="btn btn-secondary btn-xs btn-icon font-weight-normal">Claim  Bonus <span class="ico-right"><i class="ico ico-caret-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-doubled col-doubled-bottom col-doubled-bottom-light">
            <div class="row">
                <div class="col-variant hidden-sm-down">
                    <div class="variant m-b">
                        <div class="hidden-md-up">
                            <img src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Modern%20Design%20%3Cbr%3E%20%26%20Graphics-badge-1480595437.png" width="50" height="50" alt="Modern Design <br> & Graphics">
                        </div>
                        <div class="hidden-sm-down">
                            <img src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Modern%20Design%20%3Cbr%3E%20%26%20Graphics-badge-1480595437.png" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Modern%20Design%20%3Cbr%3E%20%26%20Graphics-badge-1480595437.png 1x, https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/100/Modern%20Design%20%3Cbr%3E%20%26%20Graphics-badge-1480595437.png 1.25x" width="50" height="50" alt="Modern Design <br> & Graphics">
                        </div>
                        <p class="small">Modern Design <br> & Graphics</p>
                    </div>
                </div>
                <div class="col-bonus hidden-md-up">
                    <div class="bonus m-t-0">
                        <p class="small" style="color:">150 Free Spins+</p>
                        <p class="bonus-value">£1,200</p>
                        <p class="small"> Welcome Package</p>
                        <div class="popover-block">
                            <a href="#" class="popover-link small dashed">Terms apply</a>
                            <div class="webui-popover-content">
                                <h6 class="title m-b-10">MATCH + FREE SPINS</h6>
                                <p class="text-dark m-b-10">Diamond 7 Casino offers 3 deposit bonuses ranging from 50% to 200% (the biggest of which has a max of £500). The grand total on offer is £1,200, and you'll also get 150 free spins.</p>
                                <p class="m-b-10">Example: pay £50, play with £100</p>
                                <p class="m-b-10"><em class="text-dark">18+  Please Gamble Responsibly. Click &#039;Claim Bonus&#039; to view full terms and conditions</em>
                                </p>
                                <a href="https://www.topratedcasinos.co.uk/link/diamond-7-casino/1"
                                   onclick='ga("send", "event", "Link out", "More Info", "Diamond 7 Casino - Vertical:Casino", "25"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","More Info-","Diamond 7 Casino-","25-","+25 Free Spins £ 1,200 150 Free Spins+"],24);' target="_blank"                                   target="_blank" role="button" class="btn btn-secondary btn-xs btn-icon font-weight-normal">Claim  Bonus <span class="ico-right"><i class="ico ico-caret-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-time">
                                        <div class="review-checks">
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>Loyalty Rewards</span>
                        </div>
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>Slots, Roulette, Blackjack + More</span>
                        </div>
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>Tuesday Bonuses</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-button">
            <a href="https://www.topratedcasinos.co.uk/link/diamond-7-casino/1"
               onclick='ga("send", "event", "Link out", "Button", "Diamond 7 Casino - Vertical:Casino", "25"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","Button-","Diamond 7 Casino-","25-","+25 Free Spins £ 1,200 150 Free Spins+"],24);' target="_blank"               role="button" target="_blank" class="btn btn-secondary btn-icon">Claim Bonus
                <span class="txt-add">Go to Diamond 7 Casino<span class="ico-right"><i class="ico ico-caret-right"></i></span></span>
            </a>
                            <a href="https://www.topratedcasinos.co.uk/link/diamond-7-casino/1"
                   onclick='ga("send", "event", "Link out", "Text link", "Diamond 7 Casino - Vertical:Casino", "25"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","Text link-","Diamond 7 Casino-","25-","+25 Free Spins £ 1,200 150 Free Spins+"],24);' target="_blank"                   class="hidden-lg-down link-url" target="_blank">www.diamond7casino.com/Win</a>
                        <div class="col-rating hidden-md-up">
                <div class="rating m-a-0">
                    <div class="rating-row">
                        <input type="hidden" class="rating-tooltip" data-filled="ico ico-star" data-empty="ico ico-star-empty" data-fractions="2" data-votes="1090" value="5">
                        <p class="result text-default"><span class="result-value">1090</span> user ratings</p>
                    </div>
                                        <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/diamond-7-casino" target="_blank">Expert Review <i class="ico ico-caret-right vertical"></i></a>
                                    </div>
            </div>
        </div>
    </div>
</li>                                                    
                            
                                                            <li class="rated-item rated-item-relative rated-item-relative-pb paypal-item item-mobile rated-item-view">
    <div class="row">
        <div class="col-img">
            <div class="img-holder">
                <div class="img-box" style="background:#f11e22 ">
                                            
                        <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/vegas-hero" target="_blank"><picture>
                                <source media="(min-width: 1280px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 1280px) and (min-resolution: 120dpi)" sizes="188px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/376/vegas-hero-1516726871.png 376w">
                                <source media="(min-width: 1280px)" sizes="188px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/vegas-hero-1516726871.png 188w">

                                <source media="(min-width: 992px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 992px) and (min-resolution: 120dpi)" sizes="168px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/336/vegas-hero-1516726871.png 336w">
                                <source media="(min-width: 992px)" sizes="168px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/168/vegas-hero-1516726871.png 168w">

                                <source media="(min-width: 768px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 768px) and (min-resolution: 120dpi)" sizes="120px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/240/vegas-hero-1516726871.png 240w">
                                <source media="(min-width: 768px)" sizes="120px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/120/vegas-hero-1516726871.png 120w">

                                <source media="(min-width: 544px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 544px) and (min-resolution: 120dpi)" sizes="152px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/304/vegas-hero-1516726871.png 304w">
                                <source media="(min-width: 544px)" sizes="152px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/152/vegas-hero-1516726871.png 152w">

                                <source media="(min-width: 0px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 0px) and (min-resolution: 120dpi)" sizes="30vw" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/376/vegas-hero-1516726871.png 376w,
                                                                        https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/240/vegas-hero-1516726871.png 240w">
                                <source media="(min-width: 0px)" sizes="30vw" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/vegas-hero-1516726871.png 188w,
                                                                        https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/120/vegas-hero-1516726871.png 120w">

                                <img class="responsive-img" alt="" src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/vegas-hero-1516726871.png 188w">
                            </picture></a>
                                                                </div>

                <div class="top-number">
                    <p class="h4">26</p>
                </div>
            </div>
        </div>
        <div class="col-doubled col-doubled-top hidden-sm-down col-doubled-top-light">
            <div class="row">
                <div class="col-rating">
                    <div class="rating m-a-0">
                        <div class="rating-row">
                            <div class="result-text"></div>
                            <input type="hidden" class="rating-tooltip" data-filled="ico ico-star" data-empty="ico ico-star-empty" data-fractions="2"  data-votes="1,095" value="5">
                            <p class="result text-default"><span class="result-value">1,095</span> user ratings</p>
                        </div>

                                                <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/vegas-hero" target="_blank">Expert Review <i class="ico ico-caret-right vertical"></i></a>
                                            </div>
                </div>
                <div class="col-bonus hidden-sm-down">
                    <div class="bonus">
                        <p class="small" style="color:">100% Up To</p>
                        <p class="bonus-value">£200</p>
                        <p class="small">+ 50 Free Spins</p>
                        <div class="popover-block">
                            <a href="#" class="popover-link small dashed">Terms apply</a>
                            <div class="webui-popover-content">
                                <h6 class="title m-b-10">MATCH + FREE SPINS</h6>
                                <p class="text-dark m-b-10">For every £1 you deposit, Vegas Hero will match it (up to a max of £200). You will also get 50 free spins. <a href="http://media.affiliates-vegashero.com/redirect.aspx?pid=43552&bid=4092&var={{tracking_code}}" target="_blank">Click here to view full terms and conditions.</a></p>
                                <p class="m-b-10">pay £100, play with £200</p>
                                <p class="m-b-10"><em class="text-dark">18+  Please Gamble Responsibly. Click &#039;Claim Bonus&#039; to view full terms and conditions</em>
                                </p>
                                <a href="https://www.topratedcasinos.co.uk/link/vegas-hero/1"
                                   onclick='ga("send", "event", "Link out", "More Info", "Vegas Hero - Vertical:Casino", "26"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","More Info-","Vegas Hero-","26-","Sign-up Bonus £ 200 100% Up To"],24);' target="_blank"                                   target="_blank" role="button" class="btn btn-secondary btn-xs btn-icon font-weight-normal">Claim  Bonus <span class="ico-right"><i class="ico ico-caret-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-doubled col-doubled-bottom col-doubled-bottom-light">
            <div class="row">
                <div class="col-variant hidden-sm-down">
                    <div class="variant m-b">
                        <div class="hidden-md-up">
                            <img src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Brand%20New%20%3Cbr%3E%20Casino-badge-1480595459.png" width="50" height="50" alt="Brand New <br> Casino">
                        </div>
                        <div class="hidden-sm-down">
                            <img src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Brand%20New%20%3Cbr%3E%20Casino-badge-1480595459.png" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Brand%20New%20%3Cbr%3E%20Casino-badge-1480595459.png 1x, https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/100/Brand%20New%20%3Cbr%3E%20Casino-badge-1480595459.png 1.25x" width="50" height="50" alt="Brand New <br> Casino">
                        </div>
                        <p class="small">Brand New <br> Casino</p>
                    </div>
                </div>
                <div class="col-bonus hidden-md-up">
                    <div class="bonus m-t-0">
                        <p class="small" style="color:">100% Up To</p>
                        <p class="bonus-value">£200</p>
                        <p class="small">+ 50 Free Spins</p>
                        <div class="popover-block">
                            <a href="#" class="popover-link small dashed">Terms apply</a>
                            <div class="webui-popover-content">
                                <h6 class="title m-b-10">MATCH + FREE SPINS</h6>
                                <p class="text-dark m-b-10">For every £1 you deposit, Vegas Hero will match it (up to a max of £200). You will also get 50 free spins. <a href="http://media.affiliates-vegashero.com/redirect.aspx?pid=43552&bid=4092&var={{tracking_code}}" target="_blank">Click here to view full terms and conditions.</a></p>
                                <p class="m-b-10">pay £100, play with £200</p>
                                <p class="m-b-10"><em class="text-dark">18+  Please Gamble Responsibly. Click &#039;Claim Bonus&#039; to view full terms and conditions</em>
                                </p>
                                <a href="https://www.topratedcasinos.co.uk/link/vegas-hero/1"
                                   onclick='ga("send", "event", "Link out", "More Info", "Vegas Hero - Vertical:Casino", "26"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","More Info-","Vegas Hero-","26-","Sign-up Bonus £ 200 100% Up To"],24);' target="_blank"                                   target="_blank" role="button" class="btn btn-secondary btn-xs btn-icon font-weight-normal">Claim  Bonus <span class="ico-right"><i class="ico ico-caret-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-time">
                                        <div class="review-checks">
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>Massive Bonuses Every Tuesday</span>
                        </div>
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>Great Slots + Roulette</span>
                        </div>
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>Live Dealers</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-button">
            <a href="https://www.topratedcasinos.co.uk/link/vegas-hero/1"
               onclick='ga("send", "event", "Link out", "Button", "Vegas Hero - Vertical:Casino", "26"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","Button-","Vegas Hero-","26-","Sign-up Bonus £ 200 100% Up To"],24);' target="_blank"               role="button" target="_blank" class="btn btn-secondary btn-icon">Claim Bonus
                <span class="txt-add">Go to Vegas Hero<span class="ico-right"><i class="ico ico-caret-right"></i></span></span>
            </a>
                            <a href="https://www.topratedcasinos.co.uk/link/vegas-hero/1"
                   onclick='ga("send", "event", "Link out", "Text link", "Vegas Hero - Vertical:Casino", "26"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","Text link-","Vegas Hero-","26-","Sign-up Bonus £ 200 100% Up To"],24);' target="_blank"                   class="hidden-lg-down link-url" target="_blank">www.vegashero.com/Play</a>
                        <div class="col-rating hidden-md-up">
                <div class="rating m-a-0">
                    <div class="rating-row">
                        <input type="hidden" class="rating-tooltip" data-filled="ico ico-star" data-empty="ico ico-star-empty" data-fractions="2" data-votes="1,095" value="5">
                        <p class="result text-default"><span class="result-value">1,095</span> user ratings</p>
                    </div>
                                        <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/vegas-hero" target="_blank">Expert Review <i class="ico ico-caret-right vertical"></i></a>
                                    </div>
            </div>
        </div>
    </div>
</li>                                                    
                            
                                                            <li class="rated-item rated-item-relative rated-item-relative-pb paypal-item item-mobile rated-item-view">
                    <div class="row">
                        <div class="col-img">
                            <div class="img-holder">
                                <div class="img-box" style="background:#bf0000 ">


                                                                            
                                            <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/virgin" target="_blank"><picture>
                                                    <source media="(min-width: 1280px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 1280px) and (min-resolution: 120dpi)" sizes="188px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/376/virgin-1485797603.png 376w">
                                                    <source media="(min-width: 1280px)" sizes="188px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/virgin-1485797603.png 188w">

                                                    <source media="(min-width: 992px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 992px) and (min-resolution: 120dpi)" sizes="168px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/336/virgin-1485797603.png 336w">
                                                    <source media="(min-width: 992px)" sizes="168px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/168/virgin-1485797603.png 168w">

                                                    <source media="(min-width: 768px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 768px) and (min-resolution: 120dpi)" sizes="120px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/240/virgin-1485797603.png 240w">
                                                    <source media="(min-width: 768px)" sizes="120px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/120/virgin-1485797603.png 120w">

                                                    <source media="(min-width: 544px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 544px) and (min-resolution: 120dpi)" sizes="152px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/304/virgin-1485797603.png 304w">
                                                    <source media="(min-width: 544px)" sizes="152px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/152/virgin-1485797603.png 152w">

                                                    <source media="(min-width: 0px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 0px) and (min-resolution: 120dpi)" sizes="30vw" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/376/virgin-1485797603.png 376w,
                                                                        https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/240/virgin-1485797603.png 240w">
                                                    <source media="(min-width: 0px)" sizes="30vw" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/virgin-1485797603.png 188w,
                                                                        https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/120/virgin-1485797603.png 120w">

                                                    <img class="responsive-img" alt="Virgin" src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/virgin-1485797603.png 188w">
                                                </picture></a></a>
                                                                                                                   
                                </div>
                                <div class="top-number">
                                    <p class="h4">27</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-doubled col-doubled-top hidden-sm-down col-doubled-top-light">
                            <div class="row">
                                <div class="col-rating">
                                    <div class="rating m-a-0">
                                        <div class="rating-row">
                                            <div class="result-text"></div>
                                            <input type="hidden" class="rating-tooltip" data-filled="ico ico-star" data-empty="ico ico-star-empty" data-fractions="2"  data-votes="1,149" value="5">
                                            <p class="result text-default"><span class="result-value">1,149</span> user ratings</p>
                                        </div>
                                       
                                                                                <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/virgin" target="_blank">Expert Review <i class="ico ico-caret-right vertical"></i></a>
                                                                            </div>
                                </div>
                                <div class="col-bonus hidden-sm-down">
                                    <div class="bonus">
                                      
                                                                                <p class="bonus-text"><strong>Spend £10, <br>Get 30 Free Spins</strong></p>
                                        <div class="popover-block">
                                            <a href="#" class="popover-link small dashed">Terms apply</a>
                                            <div class="webui-popover-content">
                                                <h6 class="title m-b-10">FREE SPINS BONUS</h6>
                                                <p class="text-dark m-b-10">Spend £10 and get 30 spins to play with on Double Bubble</p>
                                                <p class="m-b-10">pay £10, play with 30 spins</p>
                                                <p class="m-b-10"><em class="text-dark">18+  Please Gamble Responsibly. Click &#039;Claim Bonus&#039; to view full terms and conditions</em>
                                                </p>
                                               
                                                <a href="https://www.topratedcasinos.co.uk/link/virgin/1"
                                                   onclick='ga("send", "event", "Link out", "More info", "Virgin - Vertical:Casino", "27"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","More info-","Virgin-","27-","&lt;strong&gt;Spend £10, &lt;br&gt;Get 30 Free Spins&lt;/strong&gt;"],24);' target="_blank"                                                   target="_blank" role="button" class="btn btn-secondary btn-xs btn-icon font-weight-normal">Claim  Bonus <span class="ico-right"><i class="ico ico-caret-right"></i></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-doubled col-doubled-bottom col-doubled-bottom-light">
                            <div class="row">
                                <div class="col-variant hidden-sm-down">
                                    <div class="variant m-b">
                                        <div class="hidden-md-up">
                                            <img src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Great%20on%20%3Cbr%3E%20Mobile-badge-1480595477.png" width="50" height="50" alt="Great on <br> Mobile">
                                        </div>
                                        <div class="hidden-sm-down">
                                            <img src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Great%20on%20%3Cbr%3E%20Mobile-badge-1480595477.png" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Great%20on%20%3Cbr%3E%20Mobile-badge-1480595477.png 1x, https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/100/Great%20on%20%3Cbr%3E%20Mobile-badge-1480595477.png 1.25x" width="50" height="50" alt="Great on <br> Mobile">
                                        </div>
                                        <p class="small">Great on <br> Mobile</p>
                                    </div>
                                </div>
                                <div class="col-bonus hidden-md-up">
                                    <div class="bonus m-t-0">

                                                                                <p class="bonus-text m-t"><strong>Spend £10, <br>Get 30 Free Spins</strong></p>

                                        <p class="small hidden-sm-down">Sign up bonus</p>
                                        <div class="popover-block hidden-sm-down">
                                            <a href="#" class="popover-link small dashed">Terms apply</a>
                                            <div class="webui-popover-content">
                                                <h6 class="title m-b-10">FREE SPINS BONUS</h6>
                                                <p class="text-dark m-b-10">Spend £10 and get 30 spins to play with on Double Bubble</p>
                                                <p class="m-b-10">pay £10, play with 30 spins</p>
                                                <p class="m-b-10"><em class="text-dark">18+  Please Gamble Responsibly. Click &#039;Claim Bonus&#039; to view full terms and conditions</em>
                                                </p>
                                                <a href="https://www.topratedcasinos.co.uk/link/virgin/1"
                                                   onclick='ga("send", "event", "Link out", "More info", "Virgin - Vertical:Casino", "27"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","More info-","Virgin-","27-","&lt;strong&gt;Spend £10, &lt;br&gt;Get 30 Free Spins&lt;/strong&gt;"],24);' target="_blank"                                                   target="_blank" role="button" class="btn btn-secondary btn-xs btn-icon font-weight-normal">Claim  Bonus <span class="ico-right"><i class="ico ico-caret-right"></i></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-time">
                                                                            <div class="review-checks">
                                            <div class="review-check">
                                                <i class="ico ico-check text-primary"></i><span>Huge UK Brand!</span>
                                            </div>
                                            <div class="review-check">
                                                <i class="ico ico-check text-primary"></i><span>Excellent Live Casino</span>
                                            </div>
                                            <div class="review-check">
                                                <i class="ico ico-check text-primary"></i><span>Full PayPal Support</span>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-button">
                            <a href="https://www.topratedcasinos.co.uk/link/virgin/1"
                               onclick='ga("send", "event", "Link out", "Button", "Virgin - Vertical:Casino", "27"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","Button-","Virgin-","27-","&lt;strong&gt;Spend £10, &lt;br&gt;Get 30 Free Spins&lt;/strong&gt;"],24);' target="_blank"                               role="button" target="_blank" class="btn btn-secondary btn-icon">Claim Bonus
                                <span class="txt-add">Go to Virgin<span class="ico-right"><i class="ico ico-caret-right"></i></span></span>
                            </a>
                                                            <a href="https://www.topratedcasinos.co.uk/link/virgin/1"
                                   onclick='ga("send", "event", "Link out", "Text link", "Virgin - Vertical:Casino", "27"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","Text link-","Virgin-","27-","&lt;strong&gt;Spend £10, &lt;br&gt;Get 30 Free Spins&lt;/strong&gt;"],24);' target="_blank"                                   class="hidden-lg-down link-url" target="_blank">www.virgingames.com/Join-Now</a>
                                                        <div class="col-rating hidden-md-up">
                                <div class="rating m-a-0">
                                    <div class="rating-row">
                                        <input type="hidden" class="rating-tooltip" data-filled="ico ico-star" data-empty="ico ico-star-empty" data-fractions="2" data-votes="1,149" value="5">
                                        <p class="result text-default"><span class="result-value">1,149</span> user ratings</p>
                                    </div>
                                                                        <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/virgin" target="_blank">Expert Review <i class="ico ico-caret-right vertical"></i></a>
                                                                    </div>
                            </div>
                        </div>
                    </div>
                </li>



                                                    
                            
                                                            <li class="rated-item rated-item-relative rated-item-relative-pb paypal-item item-mobile rated-item-view">
    <div class="row">
        <div class="col-img">
            <div class="img-holder">
                <div class="img-box" style="background:#000000 ">
                                            
                        <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/black-type-casino" target="_blank"><picture>
                                <source media="(min-width: 1280px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 1280px) and (min-resolution: 120dpi)" sizes="188px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/376/black-type-casino-1519897237.png 376w">
                                <source media="(min-width: 1280px)" sizes="188px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/black-type-casino-1519897237.png 188w">

                                <source media="(min-width: 992px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 992px) and (min-resolution: 120dpi)" sizes="168px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/336/black-type-casino-1519897237.png 336w">
                                <source media="(min-width: 992px)" sizes="168px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/168/black-type-casino-1519897237.png 168w">

                                <source media="(min-width: 768px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 768px) and (min-resolution: 120dpi)" sizes="120px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/240/black-type-casino-1519897237.png 240w">
                                <source media="(min-width: 768px)" sizes="120px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/120/black-type-casino-1519897237.png 120w">

                                <source media="(min-width: 544px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 544px) and (min-resolution: 120dpi)" sizes="152px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/304/black-type-casino-1519897237.png 304w">
                                <source media="(min-width: 544px)" sizes="152px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/152/black-type-casino-1519897237.png 152w">

                                <source media="(min-width: 0px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 0px) and (min-resolution: 120dpi)" sizes="30vw" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/376/black-type-casino-1519897237.png 376w,
                                                                        https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/240/black-type-casino-1519897237.png 240w">
                                <source media="(min-width: 0px)" sizes="30vw" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/black-type-casino-1519897237.png 188w,
                                                                        https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/120/black-type-casino-1519897237.png 120w">

                                <img class="responsive-img" alt="" src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/black-type-casino-1519897237.png 188w">
                            </picture></a>
                                                                </div>

                <div class="top-number">
                    <p class="h4">28</p>
                </div>
            </div>
        </div>
        <div class="col-doubled col-doubled-top hidden-sm-down col-doubled-top-light">
            <div class="row">
                <div class="col-rating">
                    <div class="rating m-a-0">
                        <div class="rating-row">
                            <div class="result-text"></div>
                            <input type="hidden" class="rating-tooltip" data-filled="ico ico-star" data-empty="ico ico-star-empty" data-fractions="2"  data-votes="873" value="5">
                            <p class="result text-default"><span class="result-value">873</span> user ratings</p>
                        </div>

                                                <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/black-type-casino" target="_blank">Expert Review <i class="ico ico-caret-right vertical"></i></a>
                                            </div>
                </div>
                <div class="col-bonus hidden-sm-down">
                    <div class="bonus">
                        <p class="small" style="color:">100% Up To</p>
                        <p class="bonus-value">£250</p>
                        <p class="small">Welcome Bonus</p>
                        <div class="popover-block">
                            <a href="#" class="popover-link small dashed">Terms apply</a>
                            <div class="webui-popover-content">
                                <h6 class="title m-b-10">MATCH</h6>
                                <p class="text-dark m-b-10">For every £1 you deposit, Black Type will match it (up to a max of £250).</p>
                                <p class="m-b-10">pay £100, play with £200</p>
                                <p class="m-b-10"><em class="text-dark">18+  Please Gamble Responsibly. Click &#039;Claim Bonus&#039; to view full terms and conditions</em>
                                </p>
                                <a href="https://www.topratedcasinos.co.uk/link/black-type-casino/1"
                                   onclick='ga("send", "event", "Link out", "More Info", "Black Type Casino - Vertical:Casino", "28"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","More Info-","Black Type Casino-","28-","Sign-up Bonus £ 250 100% Up To"],24);' target="_blank"                                   target="_blank" role="button" class="btn btn-secondary btn-xs btn-icon font-weight-normal">Claim  Bonus <span class="ico-right"><i class="ico ico-caret-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-doubled col-doubled-bottom col-doubled-bottom-light">
            <div class="row">
                <div class="col-variant hidden-sm-down">
                    <div class="variant m-b">
                        <div class="hidden-md-up">
                            <img src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Brand%20New%20%3Cbr%3E%20Casino-badge-1480595459.png" width="50" height="50" alt="Brand New <br> Casino">
                        </div>
                        <div class="hidden-sm-down">
                            <img src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Brand%20New%20%3Cbr%3E%20Casino-badge-1480595459.png" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Brand%20New%20%3Cbr%3E%20Casino-badge-1480595459.png 1x, https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/100/Brand%20New%20%3Cbr%3E%20Casino-badge-1480595459.png 1.25x" width="50" height="50" alt="Brand New <br> Casino">
                        </div>
                        <p class="small">Brand New <br> Casino</p>
                    </div>
                </div>
                <div class="col-bonus hidden-md-up">
                    <div class="bonus m-t-0">
                        <p class="small" style="color:">100% Up To</p>
                        <p class="bonus-value">£250</p>
                        <p class="small">Welcome Bonus</p>
                        <div class="popover-block">
                            <a href="#" class="popover-link small dashed">Terms apply</a>
                            <div class="webui-popover-content">
                                <h6 class="title m-b-10">MATCH</h6>
                                <p class="text-dark m-b-10">For every £1 you deposit, Black Type will match it (up to a max of £250).</p>
                                <p class="m-b-10">pay £100, play with £200</p>
                                <p class="m-b-10"><em class="text-dark">18+  Please Gamble Responsibly. Click &#039;Claim Bonus&#039; to view full terms and conditions</em>
                                </p>
                                <a href="https://www.topratedcasinos.co.uk/link/black-type-casino/1"
                                   onclick='ga("send", "event", "Link out", "More Info", "Black Type Casino - Vertical:Casino", "28"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","More Info-","Black Type Casino-","28-","Sign-up Bonus £ 250 100% Up To"],24);' target="_blank"                                   target="_blank" role="button" class="btn btn-secondary btn-xs btn-icon font-weight-normal">Claim  Bonus <span class="ico-right"><i class="ico ico-caret-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-time">
                                        <div class="review-checks">
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>Great Selection of Slots</span>
                        </div>
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>Brand New Casino</span>
                        </div>
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>Multiple Blackjack Tables</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-button">
            <a href="https://www.topratedcasinos.co.uk/link/black-type-casino/1"
               onclick='ga("send", "event", "Link out", "Button", "Black Type Casino - Vertical:Casino", "28"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","Button-","Black Type Casino-","28-","Sign-up Bonus £ 250 100% Up To"],24);' target="_blank"               role="button" target="_blank" class="btn btn-secondary btn-icon">Claim Bonus
                <span class="txt-add">Go to Black Type Casino<span class="ico-right"><i class="ico ico-caret-right"></i></span></span>
            </a>
                            <a href="https://www.topratedcasinos.co.uk/link/black-type-casino/1"
                   onclick='ga("send", "event", "Link out", "Text link", "Black Type Casino - Vertical:Casino", "28"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","Text link-","Black Type Casino-","28-","Sign-up Bonus £ 250 100% Up To"],24);' target="_blank"                   class="hidden-lg-down link-url" target="_blank">blacktype.bet/casino</a>
                        <div class="col-rating hidden-md-up">
                <div class="rating m-a-0">
                    <div class="rating-row">
                        <input type="hidden" class="rating-tooltip" data-filled="ico ico-star" data-empty="ico ico-star-empty" data-fractions="2" data-votes="873" value="5">
                        <p class="result text-default"><span class="result-value">873</span> user ratings</p>
                    </div>
                                        <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/black-type-casino" target="_blank">Expert Review <i class="ico ico-caret-right vertical"></i></a>
                                    </div>
            </div>
        </div>
    </div>
</li>                                                    
                            
                                                            <li class="rated-item rated-item-relative rated-item-relative-pb paypal-item item-mobile rated-item-view">
    <div class="row">
        <div class="col-img">
            <div class="img-holder">
                <div class="img-box" style="background:#2f1d55 ">
                                            
                        <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/slot-planet" target="_blank"><picture>
                                <source media="(min-width: 1280px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 1280px) and (min-resolution: 120dpi)" sizes="188px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/376/slot-planet-1518523479.png 376w">
                                <source media="(min-width: 1280px)" sizes="188px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/slot-planet-1518523479.png 188w">

                                <source media="(min-width: 992px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 992px) and (min-resolution: 120dpi)" sizes="168px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/336/slot-planet-1518523479.png 336w">
                                <source media="(min-width: 992px)" sizes="168px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/168/slot-planet-1518523479.png 168w">

                                <source media="(min-width: 768px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 768px) and (min-resolution: 120dpi)" sizes="120px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/240/slot-planet-1518523479.png 240w">
                                <source media="(min-width: 768px)" sizes="120px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/120/slot-planet-1518523479.png 120w">

                                <source media="(min-width: 544px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 544px) and (min-resolution: 120dpi)" sizes="152px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/304/slot-planet-1518523479.png 304w">
                                <source media="(min-width: 544px)" sizes="152px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/152/slot-planet-1518523479.png 152w">

                                <source media="(min-width: 0px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 0px) and (min-resolution: 120dpi)" sizes="30vw" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/376/slot-planet-1518523479.png 376w,
                                                                        https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/240/slot-planet-1518523479.png 240w">
                                <source media="(min-width: 0px)" sizes="30vw" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/slot-planet-1518523479.png 188w,
                                                                        https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/120/slot-planet-1518523479.png 120w">

                                <img class="responsive-img" alt="" src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/slot-planet-1518523479.png 188w">
                            </picture></a>
                                                                </div>

                <div class="top-number">
                    <p class="h4">29</p>
                </div>
            </div>
        </div>
        <div class="col-doubled col-doubled-top hidden-sm-down col-doubled-top-light">
            <div class="row">
                <div class="col-rating">
                    <div class="rating m-a-0">
                        <div class="rating-row">
                            <div class="result-text"></div>
                            <input type="hidden" class="rating-tooltip" data-filled="ico ico-star" data-empty="ico ico-star-empty" data-fractions="2"  data-votes="981" value="5">
                            <p class="result text-default"><span class="result-value">981</span> user ratings</p>
                        </div>

                                                <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/slot-planet" target="_blank">Expert Review <i class="ico ico-caret-right vertical"></i></a>
                                            </div>
                </div>
                <div class="col-bonus hidden-sm-down">
                    <div class="bonus">
                        <p class="small" style="color:">100% Up To</p>
                        <p class="bonus-value">£555</p>
                        <p class="small">Welcome Bonus</p>
                        <div class="popover-block">
                            <a href="#" class="popover-link small dashed">Terms apply</a>
                            <div class="webui-popover-content">
                                <h6 class="title m-b-10">MATCH</h6>
                                <p class="text-dark m-b-10">New players only. Minimum deposit of £20. Bonus funds are 100% up to £555 and separate to Cash funds. 35x (bonus + deposit) wagering requirements. £5 max bet with bonus. Bonus must be used within 30 days otherwise any unused bonus shall be removed</p>
                                <p class="m-b-10">pay £250, play with £500</p>
                                <p class="m-b-10"><em class="text-dark">18+  Please Gamble Responsibly. Click &#039;Claim Bonus&#039; to view full terms and conditions</em>
                                </p>
                                <a href="https://www.topratedcasinos.co.uk/link/slot-planet/1"
                                   onclick='ga("send", "event", "Link out", "More Info", "Slot Planet - Vertical:Casino", "29"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","More Info-","Slot Planet-","29-","Sign-up Bonus £ 555 100% Up To"],24);' target="_blank"                                   target="_blank" role="button" class="btn btn-secondary btn-xs btn-icon font-weight-normal">Claim  Bonus <span class="ico-right"><i class="ico ico-caret-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-doubled col-doubled-bottom col-doubled-bottom-light">
            <div class="row">
                <div class="col-variant hidden-sm-down">
                    <div class="variant m-b">
                        <div class="hidden-md-up">
                            <img src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Brand%20New%20%3Cbr%3E%20Casino-badge-1480595459.png" width="50" height="50" alt="Brand New <br> Casino">
                        </div>
                        <div class="hidden-sm-down">
                            <img src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Brand%20New%20%3Cbr%3E%20Casino-badge-1480595459.png" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Brand%20New%20%3Cbr%3E%20Casino-badge-1480595459.png 1x, https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/100/Brand%20New%20%3Cbr%3E%20Casino-badge-1480595459.png 1.25x" width="50" height="50" alt="Brand New <br> Casino">
                        </div>
                        <p class="small">Brand New <br> Casino</p>
                    </div>
                </div>
                <div class="col-bonus hidden-md-up">
                    <div class="bonus m-t-0">
                        <p class="small" style="color:">100% Up To</p>
                        <p class="bonus-value">£555</p>
                        <p class="small">Welcome Bonus</p>
                        <div class="popover-block">
                            <a href="#" class="popover-link small dashed">Terms apply</a>
                            <div class="webui-popover-content">
                                <h6 class="title m-b-10">MATCH</h6>
                                <p class="text-dark m-b-10">New players only. Minimum deposit of £20. Bonus funds are 100% up to £555 and separate to Cash funds. 35x (bonus + deposit) wagering requirements. £5 max bet with bonus. Bonus must be used within 30 days otherwise any unused bonus shall be removed</p>
                                <p class="m-b-10">pay £250, play with £500</p>
                                <p class="m-b-10"><em class="text-dark">18+  Please Gamble Responsibly. Click &#039;Claim Bonus&#039; to view full terms and conditions</em>
                                </p>
                                <a href="https://www.topratedcasinos.co.uk/link/slot-planet/1"
                                   onclick='ga("send", "event", "Link out", "More Info", "Slot Planet - Vertical:Casino", "29"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","More Info-","Slot Planet-","29-","Sign-up Bonus £ 555 100% Up To"],24);' target="_blank"                                   target="_blank" role="button" class="btn btn-secondary btn-xs btn-icon font-weight-normal">Claim  Bonus <span class="ico-right"><i class="ico ico-caret-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-time">
                                        <div class="review-checks">
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>New Slots Included</span>
                        </div>
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>Monthly Promotions</span>
                        </div>
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>Earn Loyalty Points</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-button">
            <a href="https://www.topratedcasinos.co.uk/link/slot-planet/1"
               onclick='ga("send", "event", "Link out", "Button", "Slot Planet - Vertical:Casino", "29"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","Button-","Slot Planet-","29-","Sign-up Bonus £ 555 100% Up To"],24);' target="_blank"               role="button" target="_blank" class="btn btn-secondary btn-icon">Claim Bonus
                <span class="txt-add">Go to Slot Planet<span class="ico-right"><i class="ico ico-caret-right"></i></span></span>
            </a>
                            <a href="https://www.topratedcasinos.co.uk/link/slot-planet/1"
                   onclick='ga("send", "event", "Link out", "Text link", "Slot Planet - Vertical:Casino", "29"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","Text link-","Slot Planet-","29-","Sign-up Bonus £ 555 100% Up To"],24);' target="_blank"                   class="hidden-lg-down link-url" target="_blank">www.slotplanet.com/Deposit</a>
                        <div class="col-rating hidden-md-up">
                <div class="rating m-a-0">
                    <div class="rating-row">
                        <input type="hidden" class="rating-tooltip" data-filled="ico ico-star" data-empty="ico ico-star-empty" data-fractions="2" data-votes="981" value="5">
                        <p class="result text-default"><span class="result-value">981</span> user ratings</p>
                    </div>
                                        <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/slot-planet" target="_blank">Expert Review <i class="ico ico-caret-right vertical"></i></a>
                                    </div>
            </div>
        </div>
    </div>
</li>                                                    
                            
                                                            <li class="rated-item rated-item-relative rated-item-relative-pb paypal-item item-mobile rated-item-view">
    <div class="row">
        <div class="col-img">
            <div class="img-holder">
                <div class="img-box" style="background:#1D743F ">
                                            
                        <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/mr-green" target="_blank"><picture>
                                <source media="(min-width: 1280px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 1280px) and (min-resolution: 120dpi)" sizes="188px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/376/mr-green-1497275838.jpeg 376w">
                                <source media="(min-width: 1280px)" sizes="188px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/mr-green-1497275838.jpeg 188w">

                                <source media="(min-width: 992px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 992px) and (min-resolution: 120dpi)" sizes="168px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/336/mr-green-1497275838.jpeg 336w">
                                <source media="(min-width: 992px)" sizes="168px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/168/mr-green-1497275838.jpeg 168w">

                                <source media="(min-width: 768px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 768px) and (min-resolution: 120dpi)" sizes="120px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/240/mr-green-1497275838.jpeg 240w">
                                <source media="(min-width: 768px)" sizes="120px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/120/mr-green-1497275838.jpeg 120w">

                                <source media="(min-width: 544px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 544px) and (min-resolution: 120dpi)" sizes="152px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/304/mr-green-1497275838.jpeg 304w">
                                <source media="(min-width: 544px)" sizes="152px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/152/mr-green-1497275838.jpeg 152w">

                                <source media="(min-width: 0px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 0px) and (min-resolution: 120dpi)" sizes="30vw" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/376/mr-green-1497275838.jpeg 376w,
                                                                        https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/240/mr-green-1497275838.jpeg 240w">
                                <source media="(min-width: 0px)" sizes="30vw" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/mr-green-1497275838.jpeg 188w,
                                                                        https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/120/mr-green-1497275838.jpeg 120w">

                                <img class="responsive-img" alt="" src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/mr-green-1497275838.jpeg 188w">
                            </picture></a>
                                                                </div>

                <div class="top-number">
                    <p class="h4">30</p>
                </div>
            </div>
        </div>
        <div class="col-doubled col-doubled-top hidden-sm-down col-doubled-top-light">
            <div class="row">
                <div class="col-rating">
                    <div class="rating m-a-0">
                        <div class="rating-row">
                            <div class="result-text"></div>
                            <input type="hidden" class="rating-tooltip" data-filled="ico ico-star" data-empty="ico ico-star-empty" data-fractions="2"  data-votes="1,962" value="5">
                            <p class="result text-default"><span class="result-value">1,962</span> user ratings</p>
                        </div>

                                                <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/mr-green" target="_blank">Expert Review <i class="ico ico-caret-right vertical"></i></a>
                                            </div>
                </div>
                <div class="col-bonus hidden-sm-down">
                    <div class="bonus">
                        <p class="small" style="color:">100% Up To</p>
                        <p class="bonus-value">£100</p>
                        <p class="small">+200 Free Spins</p>
                        <div class="popover-block">
                            <a href="#" class="popover-link small dashed">Terms apply</a>
                            <div class="webui-popover-content">
                                <h6 class="title m-b-10">Match + Free Spins</h6>
                                <p class="text-dark m-b-10">For every £1 you deposit, Mr Green will match it (up to a max of £100). You'll also get 100 free spins on your first deposit of £20 or more and 5 free spins every day for 20 days.</p>
                                <p class="m-b-10">Example: Pay £50, play with £100</p>
                                <p class="m-b-10"><em class="text-dark">18+  Please Gamble Responsibly. Click &#039;Claim Bonus&#039; to view full terms and conditions</em>
                                </p>
                                <a href="https://www.topratedcasinos.co.uk/link/mr-green/1"
                                   onclick='ga("send", "event", "Link out", "More Info", "Mr Green - Vertical:Casino", "30"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","More Info-","Mr Green-","30-","Sign-up Bonus £ 100 100% Up To"],24);' target="_blank"                                   target="_blank" role="button" class="btn btn-secondary btn-xs btn-icon font-weight-normal">Claim  Bonus <span class="ico-right"><i class="ico ico-caret-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-doubled col-doubled-bottom col-doubled-bottom-light">
            <div class="row">
                <div class="col-variant hidden-sm-down">
                    <div class="variant m-b">
                        <div class="hidden-md-up">
                            <img src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Award%20Winning%20%3Cbr%3E%20Casino-badge-1480593949.png" width="50" height="50" alt="Award Winning <br> Casino">
                        </div>
                        <div class="hidden-sm-down">
                            <img src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Award%20Winning%20%3Cbr%3E%20Casino-badge-1480593949.png" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Award%20Winning%20%3Cbr%3E%20Casino-badge-1480593949.png 1x, https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/100/Award%20Winning%20%3Cbr%3E%20Casino-badge-1480593949.png 1.25x" width="50" height="50" alt="Award Winning <br> Casino">
                        </div>
                        <p class="small">Award Winning <br> Casino</p>
                    </div>
                </div>
                <div class="col-bonus hidden-md-up">
                    <div class="bonus m-t-0">
                        <p class="small" style="color:">100% Up To</p>
                        <p class="bonus-value">£100</p>
                        <p class="small">+200 Free Spins</p>
                        <div class="popover-block">
                            <a href="#" class="popover-link small dashed">Terms apply</a>
                            <div class="webui-popover-content">
                                <h6 class="title m-b-10">Match + Free Spins</h6>
                                <p class="text-dark m-b-10">For every £1 you deposit, Mr Green will match it (up to a max of £100). You'll also get 100 free spins on your first deposit of £20 or more and 5 free spins every day for 20 days.</p>
                                <p class="m-b-10">Example: Pay £50, play with £100</p>
                                <p class="m-b-10"><em class="text-dark">18+  Please Gamble Responsibly. Click &#039;Claim Bonus&#039; to view full terms and conditions</em>
                                </p>
                                <a href="https://www.topratedcasinos.co.uk/link/mr-green/1"
                                   onclick='ga("send", "event", "Link out", "More Info", "Mr Green - Vertical:Casino", "30"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","More Info-","Mr Green-","30-","Sign-up Bonus £ 100 100% Up To"],24);' target="_blank"                                   target="_blank" role="button" class="btn btn-secondary btn-xs btn-icon font-weight-normal">Claim  Bonus <span class="ico-right"><i class="ico ico-caret-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-time">
                                        <div class="review-checks">
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>Tailor Made Experience</span>
                        </div>
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>Exclusive VIP Club</span>
                        </div>
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>Excellent Live Casino</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-button">
            <a href="https://www.topratedcasinos.co.uk/link/mr-green/1"
               onclick='ga("send", "event", "Link out", "Button", "Mr Green - Vertical:Casino", "30"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","Button-","Mr Green-","30-","Sign-up Bonus £ 100 100% Up To"],24);' target="_blank"               role="button" target="_blank" class="btn btn-secondary btn-icon">Claim Bonus
                <span class="txt-add">Go to Mr Green<span class="ico-right"><i class="ico ico-caret-right"></i></span></span>
            </a>
                            <a href="https://www.topratedcasinos.co.uk/link/mr-green/1"
                   onclick='ga("send", "event", "Link out", "Text link", "Mr Green - Vertical:Casino", "30"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","Text link-","Mr Green-","30-","Sign-up Bonus £ 100 100% Up To"],24);' target="_blank"                   class="hidden-lg-down link-url" target="_blank">mrgreen.com/create-account</a>
                        <div class="col-rating hidden-md-up">
                <div class="rating m-a-0">
                    <div class="rating-row">
                        <input type="hidden" class="rating-tooltip" data-filled="ico ico-star" data-empty="ico ico-star-empty" data-fractions="2" data-votes="1,962" value="5">
                        <p class="result text-default"><span class="result-value">1,962</span> user ratings</p>
                    </div>
                                        <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/mr-green" target="_blank">Expert Review <i class="ico ico-caret-right vertical"></i></a>
                                    </div>
            </div>
        </div>
    </div>
</li>                                                    
                            
                                                            <li class="rated-item rated-item-relative rated-item-relative-pb paypal-item item-mobile rated-item-view">
    <div class="row">
        <div class="col-img">
            <div class="img-holder">
                <div class="img-box" style="background:#000 ">
                                                                        <a class="reviews-link" href="https://www.topratedcasinos.co.uk/link/mr-vegas-casino/1" target="_blank"><picture>
                                    <source media="(min-width: 1280px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 1280px) and (min-resolution: 120dpi)" sizes="188px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/376/mr-vegas-casino-1525254350.png 376w">
                                    <source media="(min-width: 1280px)" sizes="188px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/mr-vegas-casino-1525254350.png 188w">

                                    <source media="(min-width: 992px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 992px) and (min-resolution: 120dpi)" sizes="168px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/336/mr-vegas-casino-1525254350.png 336w">
                                    <source media="(min-width: 992px)" sizes="168px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/168/mr-vegas-casino-1525254350.png 168w">

                                    <source media="(min-width: 768px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 768px) and (min-resolution: 120dpi)" sizes="120px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/240/mr-vegas-casino-1525254350.png 240w">
                                    <source media="(min-width: 768px)" sizes="120px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/120/mr-vegas-casino-1525254350.png 120w">

                                    <source media="(min-width: 544px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 544px) and (min-resolution: 120dpi)" sizes="152px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/304/mr-vegas-casino-1525254350.png 304w">
                                    <source media="(min-width: 544px)" sizes="152px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/152/mr-vegas-casino-1525254350.png 152w">

                                    <source media="(min-width: 0px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 0px) and (min-resolution: 120dpi)" sizes="30vw" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/376/mr-vegas-casino-1525254350.png 376w,
                                                                        https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/240/mr-vegas-casino-1525254350.png 240w">
                                    <source media="(min-width: 0px)" sizes="30vw" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/mr-vegas-casino-1525254350.png 188w,
                                                                        https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/120/mr-vegas-casino-1525254350.png 120w">

                                    <img class="responsive-img" alt="" src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/mr-vegas-casino-1525254350.png 188w">
                                </picture></a>
                                                                 </div>

                <div class="top-number">
                    <p class="h4">31</p>
                </div>
            </div>
        </div>
        <div class="col-doubled col-doubled-top hidden-sm-down col-doubled-top-light">
            <div class="row">
                <div class="col-rating">
                    <div class="rating m-a-0">
                        <div class="rating-row">
                            <div class="result-text"></div>
                            <input type="hidden" class="rating-tooltip" data-filled="ico ico-star" data-empty="ico ico-star-empty" data-fractions="2"  data-votes="421" value="4.5">
                            <p class="result text-default"><span class="result-value">421</span> user ratings</p>
                        </div>

                                            </div>
                </div>
                <div class="col-bonus hidden-sm-down">
                    <div class="bonus">
                        <p class="small" style="color:">100% Up To</p>
                        <p class="bonus-value">£200</p>
                        <p class="small">Welcome Bonus</p>
                        <div class="popover-block">
                            <a href="#" class="popover-link small dashed">Terms apply</a>
                            <div class="webui-popover-content">
                                <h6 class="title m-b-10">MATCH</h6>
                                <p class="text-dark m-b-10">100% matching bonus of up to £200 bonus on your first deposit. 25% matching bonus of up to £200 bonus on your second deposit. 200% matching bonus of up to £200 bonus on your third deposit.</p>
                                <p class="m-b-10">pay £100, play with £200</p>
                                <p class="m-b-10"><em class="text-dark">18+  Please Gamble Responsibly. Click &#039;Claim Bonus&#039; to view full terms and conditions</em>
                                </p>
                                <a href="https://www.topratedcasinos.co.uk/link/mr-vegas-casino/1"
                                   onclick='ga("send", "event", "Link out", "More Info", "Mr Vegas Casino - Vertical:Casino", "31"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","More Info-","Mr Vegas Casino-","31-","Sign-up Bonus £ 200 100% Up To"],24);' target="_blank"                                   target="_blank" role="button" class="btn btn-secondary btn-xs btn-icon font-weight-normal">Claim  Bonus <span class="ico-right"><i class="ico ico-caret-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-doubled col-doubled-bottom col-doubled-bottom-light">
            <div class="row">
                <div class="col-variant hidden-sm-down">
                    <div class="variant m-b">
                        <div class="hidden-md-up">
                            <img src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Top%20Games%20%3Cbr%3E%20Selection-badge-1480595387.png" width="50" height="50" alt="Top Games <br> Selection">
                        </div>
                        <div class="hidden-sm-down">
                            <img src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Top%20Games%20%3Cbr%3E%20Selection-badge-1480595387.png" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Top%20Games%20%3Cbr%3E%20Selection-badge-1480595387.png 1x, https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/100/Top%20Games%20%3Cbr%3E%20Selection-badge-1480595387.png 1.25x" width="50" height="50" alt="Top Games <br> Selection">
                        </div>
                        <p class="small">Top Games <br> Selection</p>
                    </div>
                </div>
                <div class="col-bonus hidden-md-up">
                    <div class="bonus m-t-0">
                        <p class="small" style="color:">100% Up To</p>
                        <p class="bonus-value">£200</p>
                        <p class="small">Welcome Bonus</p>
                        <div class="popover-block">
                            <a href="#" class="popover-link small dashed">Terms apply</a>
                            <div class="webui-popover-content">
                                <h6 class="title m-b-10">MATCH</h6>
                                <p class="text-dark m-b-10">100% matching bonus of up to £200 bonus on your first deposit. 25% matching bonus of up to £200 bonus on your second deposit. 200% matching bonus of up to £200 bonus on your third deposit.</p>
                                <p class="m-b-10">pay £100, play with £200</p>
                                <p class="m-b-10"><em class="text-dark">18+  Please Gamble Responsibly. Click &#039;Claim Bonus&#039; to view full terms and conditions</em>
                                </p>
                                <a href="https://www.topratedcasinos.co.uk/link/mr-vegas-casino/1"
                                   onclick='ga("send", "event", "Link out", "More Info", "Mr Vegas Casino - Vertical:Casino", "31"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","More Info-","Mr Vegas Casino-","31-","Sign-up Bonus £ 200 100% Up To"],24);' target="_blank"                                   target="_blank" role="button" class="btn btn-secondary btn-xs btn-icon font-weight-normal">Claim  Bonus <span class="ico-right"><i class="ico ico-caret-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-time">
                                        <div class="review-checks">
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>Great VIP Club Perks</span>
                        </div>
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>High Stakes Live Casino</span>
                        </div>
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>New Slots Included</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-button">
            <a href="https://www.topratedcasinos.co.uk/link/mr-vegas-casino/1"
               onclick='ga("send", "event", "Link out", "Button", "Mr Vegas Casino - Vertical:Casino", "31"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","Button-","Mr Vegas Casino-","31-","Sign-up Bonus £ 200 100% Up To"],24);' target="_blank"               role="button" target="_blank" class="btn btn-secondary btn-icon">Claim Bonus
                <span class="txt-add">Go to Mr Vegas Casino<span class="ico-right"><i class="ico ico-caret-right"></i></span></span>
            </a>
                            <a href="https://www.topratedcasinos.co.uk/link/mr-vegas-casino/1"
                   onclick='ga("send", "event", "Link out", "Text link", "Mr Vegas Casino - Vertical:Casino", "31"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","Text link-","Mr Vegas Casino-","31-","Sign-up Bonus £ 200 100% Up To"],24);' target="_blank"                   class="hidden-lg-down link-url" target="_blank">www.mrvegascasino.com/JoinNow</a>
                        <div class="col-rating hidden-md-up">
                <div class="rating m-a-0">
                    <div class="rating-row">
                        <input type="hidden" class="rating-tooltip" data-filled="ico ico-star" data-empty="ico ico-star-empty" data-fractions="2" data-votes="421" value="4.5">
                        <p class="result text-default"><span class="result-value">421</span> user ratings</p>
                    </div>
                                    </div>
            </div>
        </div>
    </div>
</li>                                                    
                            
                                                            <li class="rated-item rated-item-relative rated-item-relative-pb paypal-item item-mobile rated-item-view">
    <div class="row">
        <div class="col-img">
            <div class="img-holder">
                <div class="img-box" style="background:#fff ">
                                                                        <a class="reviews-link" href="https://www.topratedcasinos.co.uk/link/slotsino/1" target="_blank"><picture>
                                    <source media="(min-width: 1280px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 1280px) and (min-resolution: 120dpi)" sizes="188px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/376/slotsino-1521193134.png 376w">
                                    <source media="(min-width: 1280px)" sizes="188px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/slotsino-1521193134.png 188w">

                                    <source media="(min-width: 992px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 992px) and (min-resolution: 120dpi)" sizes="168px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/336/slotsino-1521193134.png 336w">
                                    <source media="(min-width: 992px)" sizes="168px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/168/slotsino-1521193134.png 168w">

                                    <source media="(min-width: 768px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 768px) and (min-resolution: 120dpi)" sizes="120px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/240/slotsino-1521193134.png 240w">
                                    <source media="(min-width: 768px)" sizes="120px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/120/slotsino-1521193134.png 120w">

                                    <source media="(min-width: 544px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 544px) and (min-resolution: 120dpi)" sizes="152px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/304/slotsino-1521193134.png 304w">
                                    <source media="(min-width: 544px)" sizes="152px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/152/slotsino-1521193134.png 152w">

                                    <source media="(min-width: 0px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 0px) and (min-resolution: 120dpi)" sizes="30vw" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/376/slotsino-1521193134.png 376w,
                                                                        https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/240/slotsino-1521193134.png 240w">
                                    <source media="(min-width: 0px)" sizes="30vw" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/slotsino-1521193134.png 188w,
                                                                        https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/120/slotsino-1521193134.png 120w">

                                    <img class="responsive-img" alt="" src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/slotsino-1521193134.png 188w">
                                </picture></a>
                                                                 </div>

                <div class="top-number">
                    <p class="h4">32</p>
                </div>
            </div>
        </div>
        <div class="col-doubled col-doubled-top hidden-sm-down col-doubled-top-light">
            <div class="row">
                <div class="col-rating">
                    <div class="rating m-a-0">
                        <div class="rating-row">
                            <div class="result-text"></div>
                            <input type="hidden" class="rating-tooltip" data-filled="ico ico-star" data-empty="ico ico-star-empty" data-fractions="2"  data-votes="413" value="4.5">
                            <p class="result text-default"><span class="result-value">413</span> user ratings</p>
                        </div>

                                            </div>
                </div>
                <div class="col-bonus hidden-sm-down">
                    <div class="bonus">
                        <p class="small" style="color:">50 Free Spins+</p>
                        <p class="bonus-value">£500</p>
                        <p class="small">Welcome Bonus</p>
                        <div class="popover-block">
                            <a href="#" class="popover-link small dashed">Terms apply</a>
                            <div class="webui-popover-content">
                                <h6 class="title m-b-10">New Customer Offer</h6>
                                <p class="text-dark m-b-10">The Welcome Deposit offer is only available over customers first 3 deposits. First Deposit – 200% match up to £50 in bonus + 50 spins on Starburst. Second Deposit – 100% match up to £200 in bonus. Third Deposit – 50% match up to £250 in bonus</p>
                                <p class="m-b-10">pay £25, play with £75</p>
                                <p class="m-b-10"><em class="text-dark">18+  Please Gamble Responsibly. Click &#039;Claim Bonus&#039; to view full terms and conditions</em>
                                </p>
                                <a href="https://www.topratedcasinos.co.uk/link/slotsino/1"
                                   onclick='ga("send", "event", "Link out", "More Info", "Slotsino - Vertical:Casino", "32"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","More Info-","Slotsino-","32-","7 Reload Bonuses £ 500 50 Free Spins+"],24);' target="_blank"                                   target="_blank" role="button" class="btn btn-secondary btn-xs btn-icon font-weight-normal">Claim  Bonus <span class="ico-right"><i class="ico ico-caret-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-doubled col-doubled-bottom col-doubled-bottom-light">
            <div class="row">
                <div class="col-variant hidden-sm-down">
                    <div class="variant m-b">
                        <div class="hidden-md-up">
                            <img src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Brand%20New%20%3Cbr%3E%20Casino-badge-1480595459.png" width="50" height="50" alt="Brand New <br> Casino">
                        </div>
                        <div class="hidden-sm-down">
                            <img src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Brand%20New%20%3Cbr%3E%20Casino-badge-1480595459.png" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Brand%20New%20%3Cbr%3E%20Casino-badge-1480595459.png 1x, https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/100/Brand%20New%20%3Cbr%3E%20Casino-badge-1480595459.png 1.25x" width="50" height="50" alt="Brand New <br> Casino">
                        </div>
                        <p class="small">Brand New <br> Casino</p>
                    </div>
                </div>
                <div class="col-bonus hidden-md-up">
                    <div class="bonus m-t-0">
                        <p class="small" style="color:">50 Free Spins+</p>
                        <p class="bonus-value">£500</p>
                        <p class="small">Welcome Bonus</p>
                        <div class="popover-block">
                            <a href="#" class="popover-link small dashed">Terms apply</a>
                            <div class="webui-popover-content">
                                <h6 class="title m-b-10">New Customer Offer</h6>
                                <p class="text-dark m-b-10">The Welcome Deposit offer is only available over customers first 3 deposits. First Deposit – 200% match up to £50 in bonus + 50 spins on Starburst. Second Deposit – 100% match up to £200 in bonus. Third Deposit – 50% match up to £250 in bonus</p>
                                <p class="m-b-10">pay £25, play with £75</p>
                                <p class="m-b-10"><em class="text-dark">18+  Please Gamble Responsibly. Click &#039;Claim Bonus&#039; to view full terms and conditions</em>
                                </p>
                                <a href="https://www.topratedcasinos.co.uk/link/slotsino/1"
                                   onclick='ga("send", "event", "Link out", "More Info", "Slotsino - Vertical:Casino", "32"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","More Info-","Slotsino-","32-","7 Reload Bonuses £ 500 50 Free Spins+"],24);' target="_blank"                                   target="_blank" role="button" class="btn btn-secondary btn-xs btn-icon font-weight-normal">Claim  Bonus <span class="ico-right"><i class="ico ico-caret-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-time">
                                        <div class="review-checks">
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>Receive Exclusive Bonuses</span>
                        </div>
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>Great Mobile Gaming</span>
                        </div>
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>Live Dealers</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-button">
            <a href="https://www.topratedcasinos.co.uk/link/slotsino/1"
               onclick='ga("send", "event", "Link out", "Button", "Slotsino - Vertical:Casino", "32"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","Button-","Slotsino-","32-","7 Reload Bonuses £ 500 50 Free Spins+"],24);' target="_blank"               role="button" target="_blank" class="btn btn-secondary btn-icon">Claim Bonus
                <span class="txt-add">Go to Slotsino<span class="ico-right"><i class="ico ico-caret-right"></i></span></span>
            </a>
                            <a href="https://www.topratedcasinos.co.uk/link/slotsino/1"
                   onclick='ga("send", "event", "Link out", "Text link", "Slotsino - Vertical:Casino", "32"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","Text link-","Slotsino-","32-","7 Reload Bonuses £ 500 50 Free Spins+"],24);' target="_blank"                   class="hidden-lg-down link-url" target="_blank">games.slotsino.co.uk/Play</a>
                        <div class="col-rating hidden-md-up">
                <div class="rating m-a-0">
                    <div class="rating-row">
                        <input type="hidden" class="rating-tooltip" data-filled="ico ico-star" data-empty="ico ico-star-empty" data-fractions="2" data-votes="413" value="4.5">
                        <p class="result text-default"><span class="result-value">413</span> user ratings</p>
                    </div>
                                    </div>
            </div>
        </div>
    </div>
</li>                                                    
                            
                                                            <li class="rated-item rated-item-relative rated-item-relative-pb paypal-item item-mobile rated-item-view">
                    <div class="row">
                        <div class="col-img">
                            <div class="img-holder">
                                <div class="img-box" style="background:#1b1b1b ">


                                                                            
                                            <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/mr-win" target="_blank"><picture>
                                                    <source media="(min-width: 1280px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 1280px) and (min-resolution: 120dpi)" sizes="188px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/376/mr-win-1516899488.png 376w">
                                                    <source media="(min-width: 1280px)" sizes="188px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/mr-win-1516899488.png 188w">

                                                    <source media="(min-width: 992px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 992px) and (min-resolution: 120dpi)" sizes="168px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/336/mr-win-1516899488.png 336w">
                                                    <source media="(min-width: 992px)" sizes="168px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/168/mr-win-1516899488.png 168w">

                                                    <source media="(min-width: 768px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 768px) and (min-resolution: 120dpi)" sizes="120px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/240/mr-win-1516899488.png 240w">
                                                    <source media="(min-width: 768px)" sizes="120px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/120/mr-win-1516899488.png 120w">

                                                    <source media="(min-width: 544px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 544px) and (min-resolution: 120dpi)" sizes="152px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/304/mr-win-1516899488.png 304w">
                                                    <source media="(min-width: 544px)" sizes="152px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/152/mr-win-1516899488.png 152w">

                                                    <source media="(min-width: 0px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 0px) and (min-resolution: 120dpi)" sizes="30vw" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/376/mr-win-1516899488.png 376w,
                                                                        https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/240/mr-win-1516899488.png 240w">
                                                    <source media="(min-width: 0px)" sizes="30vw" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/mr-win-1516899488.png 188w,
                                                                        https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/120/mr-win-1516899488.png 120w">

                                                    <img class="responsive-img" alt="Mr Win" src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/mr-win-1516899488.png 188w">
                                                </picture></a></a>
                                                                                                                   
                                </div>
                                <div class="top-number">
                                    <p class="h4">33</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-doubled col-doubled-top hidden-sm-down col-doubled-top-light">
                            <div class="row">
                                <div class="col-rating">
                                    <div class="rating m-a-0">
                                        <div class="rating-row">
                                            <div class="result-text"></div>
                                            <input type="hidden" class="rating-tooltip" data-filled="ico ico-star" data-empty="ico ico-star-empty" data-fractions="2"  data-votes="1,212" value="5">
                                            <p class="result text-default"><span class="result-value">1,212</span> user ratings</p>
                                        </div>
                                       
                                                                                <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/mr-win" target="_blank">Expert Review <i class="ico ico-caret-right vertical"></i></a>
                                                                            </div>
                                </div>
                                <div class="col-bonus hidden-sm-down">
                                    <div class="bonus">
                                      
                                                                                <p class="bonus-text"><strong>Enjoy Up To 999 Free Spins</strong></p>
                                        <div class="popover-block">
                                            <a href="#" class="popover-link small dashed">Terms apply</a>
                                            <div class="webui-popover-content">
                                                <h6 class="title m-b-10">New Customer Offer</h6>
                                                <p class="text-dark m-b-10">Deposit less than £30 and get 30 free spins. Deposit £30 or more and get 50 free spins. Deposit £100 or more and get 300 free spins. Deposit £200 or more and get 600 free spins. Deposit £300 or more and get 999 free spins. Play on popular slots Aloha, Starburst, Finn and the Swirly Spin or Gonzo's Quest.</p>
                                                <p class="m-b-10">pay £300, spin 999</p>
                                                <p class="m-b-10"><em class="text-dark">18+  Please Gamble Responsibly. Click &#039;Claim Bonus&#039; to view full terms and conditions</em>
                                                </p>
                                               
                                                <a href="https://www.topratedcasinos.co.uk/link/mr-win/1"
                                                   onclick='ga("send", "event", "Link out", "More info", "Mr Win - Vertical:Casino", "33"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","More info-","Mr Win-","33-","&lt;strong&gt;Enjoy Up To 999 Free Spins&lt;/strong&gt;"],24);' target="_blank"                                                   target="_blank" role="button" class="btn btn-secondary btn-xs btn-icon font-weight-normal">Claim  Bonus <span class="ico-right"><i class="ico ico-caret-right"></i></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-doubled col-doubled-bottom col-doubled-bottom-light">
                            <div class="row">
                                <div class="col-variant hidden-sm-down">
                                    <div class="variant m-b">
                                        <div class="hidden-md-up">
                                            <img src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Top%20Games%20%3Cbr%3E%20Selection-badge-1480595387.png" width="50" height="50" alt="Top Games <br> Selection">
                                        </div>
                                        <div class="hidden-sm-down">
                                            <img src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Top%20Games%20%3Cbr%3E%20Selection-badge-1480595387.png" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Top%20Games%20%3Cbr%3E%20Selection-badge-1480595387.png 1x, https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/100/Top%20Games%20%3Cbr%3E%20Selection-badge-1480595387.png 1.25x" width="50" height="50" alt="Top Games <br> Selection">
                                        </div>
                                        <p class="small">Top Games <br> Selection</p>
                                    </div>
                                </div>
                                <div class="col-bonus hidden-md-up">
                                    <div class="bonus m-t-0">

                                                                                <p class="bonus-text m-t"><strong>Enjoy Up To 999 Free Spins</strong></p>

                                        <p class="small hidden-sm-down">Sign up bonus</p>
                                        <div class="popover-block hidden-sm-down">
                                            <a href="#" class="popover-link small dashed">Terms apply</a>
                                            <div class="webui-popover-content">
                                                <h6 class="title m-b-10">New Customer Offer</h6>
                                                <p class="text-dark m-b-10">Deposit less than £30 and get 30 free spins. Deposit £30 or more and get 50 free spins. Deposit £100 or more and get 300 free spins. Deposit £200 or more and get 600 free spins. Deposit £300 or more and get 999 free spins. Play on popular slots Aloha, Starburst, Finn and the Swirly Spin or Gonzo's Quest.</p>
                                                <p class="m-b-10">pay £300, spin 999</p>
                                                <p class="m-b-10"><em class="text-dark">18+  Please Gamble Responsibly. Click &#039;Claim Bonus&#039; to view full terms and conditions</em>
                                                </p>
                                                <a href="https://www.topratedcasinos.co.uk/link/mr-win/1"
                                                   onclick='ga("send", "event", "Link out", "More info", "Mr Win - Vertical:Casino", "33"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","More info-","Mr Win-","33-","&lt;strong&gt;Enjoy Up To 999 Free Spins&lt;/strong&gt;"],24);' target="_blank"                                                   target="_blank" role="button" class="btn btn-secondary btn-xs btn-icon font-weight-normal">Claim  Bonus <span class="ico-right"><i class="ico ico-caret-right"></i></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-time">
                                                                            <div class="review-checks">
                                            <div class="review-check">
                                                <i class="ico ico-check text-primary"></i><span>Slots Specialist</span>
                                            </div>
                                            <div class="review-check">
                                                <i class="ico ico-check text-primary"></i><span>Excellent Live Casino</span>
                                            </div>
                                            <div class="review-check">
                                                <i class="ico ico-check text-primary"></i><span>Also Offers Sportsbook</span>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-button">
                            <a href="https://www.topratedcasinos.co.uk/link/mr-win/1"
                               onclick='ga("send", "event", "Link out", "Button", "Mr Win - Vertical:Casino", "33"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","Button-","Mr Win-","33-","&lt;strong&gt;Enjoy Up To 999 Free Spins&lt;/strong&gt;"],24);' target="_blank"                               role="button" target="_blank" class="btn btn-secondary btn-icon">Claim Bonus
                                <span class="txt-add">Go to Mr Win<span class="ico-right"><i class="ico ico-caret-right"></i></span></span>
                            </a>
                                                            <a href="https://www.topratedcasinos.co.uk/link/mr-win/1"
                                   onclick='ga("send", "event", "Link out", "Text link", "Mr Win - Vertical:Casino", "33"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","Text link-","Mr Win-","33-","&lt;strong&gt;Enjoy Up To 999 Free Spins&lt;/strong&gt;"],24);' target="_blank"                                   class="hidden-lg-down link-url" target="_blank">www.mrwin.com/Promo</a>
                                                        <div class="col-rating hidden-md-up">
                                <div class="rating m-a-0">
                                    <div class="rating-row">
                                        <input type="hidden" class="rating-tooltip" data-filled="ico ico-star" data-empty="ico ico-star-empty" data-fractions="2" data-votes="1,212" value="5">
                                        <p class="result text-default"><span class="result-value">1,212</span> user ratings</p>
                                    </div>
                                                                        <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/mr-win" target="_blank">Expert Review <i class="ico ico-caret-right vertical"></i></a>
                                                                    </div>
                            </div>
                        </div>
                    </div>
                </li>



                                                    
                            
                                                            <li class="rated-item rated-item-relative rated-item-relative-pb paypal-item item-mobile rated-item-view">
                    <div class="row">
                        <div class="col-img">
                            <div class="img-holder">
                                <div class="img-box" style="background:#8545ff ">


                                                                            
                                            <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/play-ojo" target="_blank"><picture>
                                                    <source media="(min-width: 1280px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 1280px) and (min-resolution: 120dpi)" sizes="188px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/376/play-ojo-1488449797.png 376w">
                                                    <source media="(min-width: 1280px)" sizes="188px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/play-ojo-1488449797.png 188w">

                                                    <source media="(min-width: 992px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 992px) and (min-resolution: 120dpi)" sizes="168px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/336/play-ojo-1488449797.png 336w">
                                                    <source media="(min-width: 992px)" sizes="168px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/168/play-ojo-1488449797.png 168w">

                                                    <source media="(min-width: 768px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 768px) and (min-resolution: 120dpi)" sizes="120px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/240/play-ojo-1488449797.png 240w">
                                                    <source media="(min-width: 768px)" sizes="120px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/120/play-ojo-1488449797.png 120w">

                                                    <source media="(min-width: 544px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 544px) and (min-resolution: 120dpi)" sizes="152px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/304/play-ojo-1488449797.png 304w">
                                                    <source media="(min-width: 544px)" sizes="152px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/152/play-ojo-1488449797.png 152w">

                                                    <source media="(min-width: 0px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 0px) and (min-resolution: 120dpi)" sizes="30vw" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/376/play-ojo-1488449797.png 376w,
                                                                        https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/240/play-ojo-1488449797.png 240w">
                                                    <source media="(min-width: 0px)" sizes="30vw" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/play-ojo-1488449797.png 188w,
                                                                        https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/120/play-ojo-1488449797.png 120w">

                                                    <img class="responsive-img" alt="Play Ojo" src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/play-ojo-1488449797.png 188w">
                                                </picture></a></a>
                                                                                                                   
                                </div>
                                <div class="top-number">
                                    <p class="h4">34</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-doubled col-doubled-top hidden-sm-down col-doubled-top-light">
                            <div class="row">
                                <div class="col-rating">
                                    <div class="rating m-a-0">
                                        <div class="rating-row">
                                            <div class="result-text"></div>
                                            <input type="hidden" class="rating-tooltip" data-filled="ico ico-star" data-empty="ico ico-star-empty" data-fractions="2"  data-votes="790" value="4.5">
                                            <p class="result text-default"><span class="result-value">790</span> user ratings</p>
                                        </div>
                                       
                                                                                <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/play-ojo" target="_blank">Expert Review <i class="ico ico-caret-right vertical"></i></a>
                                                                            </div>
                                </div>
                                <div class="col-bonus hidden-sm-down">
                                    <div class="bonus">
                                      
                                                                                    <p class="small text-danger">50 Free Spins +</p>
                                                                                <p class="bonus-text"><strong>Money Back <br> on Every Bet</strong></p>
                                        <div class="popover-block">
                                            <a href="#" class="popover-link small dashed">Terms apply</a>
                                            <div class="webui-popover-content">
                                                <h6 class="title m-b-10">CashBack Bonus</h6>
                                                <p class="text-dark m-b-10">Play Ojo offer money on every bet, with no wagering requirements.</p>
                                                <p class="m-b-10">For every £1 deposited, 1 Free Spin will be credited.</p>
                                                <p class="m-b-10"><em class="text-dark">18+  Please Gamble Responsibly. Click &#039;Claim Bonus&#039; to view full terms and conditions</em>
                                                </p>
                                               
                                                <a href="https://www.topratedcasinos.co.uk/link/play-ojo/1"
                                                   onclick='ga("send", "event", "Link out", "More info", "Play Ojo - Vertical:Casino", "34"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","More info-","Play Ojo-","34-","&lt;strong&gt;Money Back &lt;br&gt; on Every Bet&lt;/strong&gt;"],24);' target="_blank"                                                   target="_blank" role="button" class="btn btn-secondary btn-xs btn-icon font-weight-normal">Claim  Bonus <span class="ico-right"><i class="ico ico-caret-right"></i></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-doubled col-doubled-bottom col-doubled-bottom-light">
                            <div class="row">
                                <div class="col-variant hidden-sm-down">
                                    <div class="variant m-b">
                                        <div class="hidden-md-up">
                                            <img src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Brand%20New%20%3Cbr%3E%20Casino-badge-1480595459.png" width="50" height="50" alt="Brand New <br> Casino">
                                        </div>
                                        <div class="hidden-sm-down">
                                            <img src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Brand%20New%20%3Cbr%3E%20Casino-badge-1480595459.png" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Brand%20New%20%3Cbr%3E%20Casino-badge-1480595459.png 1x, https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/100/Brand%20New%20%3Cbr%3E%20Casino-badge-1480595459.png 1.25x" width="50" height="50" alt="Brand New <br> Casino">
                                        </div>
                                        <p class="small">Brand New <br> Casino</p>
                                    </div>
                                </div>
                                <div class="col-bonus hidden-md-up">
                                    <div class="bonus m-t-0">

                                                                                    <p class="small text-danger">50 Free Spins +</p>
                                                                                <p class="bonus-text m-t"><strong>Money Back <br> on Every Bet</strong></p>

                                        <p class="small hidden-sm-down">Sign up bonus</p>
                                        <div class="popover-block hidden-sm-down">
                                            <a href="#" class="popover-link small dashed">Terms apply</a>
                                            <div class="webui-popover-content">
                                                <h6 class="title m-b-10">CashBack Bonus</h6>
                                                <p class="text-dark m-b-10">Play Ojo offer money on every bet, with no wagering requirements.</p>
                                                <p class="m-b-10">For every £1 deposited, 1 Free Spin will be credited.</p>
                                                <p class="m-b-10"><em class="text-dark">18+  Please Gamble Responsibly. Click &#039;Claim Bonus&#039; to view full terms and conditions</em>
                                                </p>
                                                <a href="https://www.topratedcasinos.co.uk/link/play-ojo/1"
                                                   onclick='ga("send", "event", "Link out", "More info", "Play Ojo - Vertical:Casino", "34"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","More info-","Play Ojo-","34-","&lt;strong&gt;Money Back &lt;br&gt; on Every Bet&lt;/strong&gt;"],24);' target="_blank"                                                   target="_blank" role="button" class="btn btn-secondary btn-xs btn-icon font-weight-normal">Claim  Bonus <span class="ico-right"><i class="ico ico-caret-right"></i></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-time">
                                                                            <div class="review-checks">
                                            <div class="review-check">
                                                <i class="ico ico-check text-primary"></i><span>Super Fast Payouts</span>
                                            </div>
                                            <div class="review-check">
                                                <i class="ico ico-check text-primary"></i><span>No Wagering Required</span>
                                            </div>
                                            <div class="review-check">
                                                <i class="ico ico-check text-primary"></i><span>Big Juicy Jackpots!</span>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-button">
                            <a href="https://www.topratedcasinos.co.uk/link/play-ojo/1"
                               onclick='ga("send", "event", "Link out", "Button", "Play Ojo - Vertical:Casino", "34"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","Button-","Play Ojo-","34-","&lt;strong&gt;Money Back &lt;br&gt; on Every Bet&lt;/strong&gt;"],24);' target="_blank"                               role="button" target="_blank" class="btn btn-secondary btn-icon">Claim Bonus
                                <span class="txt-add">Go to Play Ojo<span class="ico-right"><i class="ico ico-caret-right"></i></span></span>
                            </a>
                                                            <a href="https://www.topratedcasinos.co.uk/link/play-ojo/1"
                                   onclick='ga("send", "event", "Link out", "Text link", "Play Ojo - Vertical:Casino", "34"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","Text link-","Play Ojo-","34-","&lt;strong&gt;Money Back &lt;br&gt; on Every Bet&lt;/strong&gt;"],24);' target="_blank"                                   class="hidden-lg-down link-url" target="_blank">www.playojo.com/Play-Now</a>
                                                        <div class="col-rating hidden-md-up">
                                <div class="rating m-a-0">
                                    <div class="rating-row">
                                        <input type="hidden" class="rating-tooltip" data-filled="ico ico-star" data-empty="ico ico-star-empty" data-fractions="2" data-votes="790" value="4.5">
                                        <p class="result text-default"><span class="result-value">790</span> user ratings</p>
                                    </div>
                                                                        <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/play-ojo" target="_blank">Expert Review <i class="ico ico-caret-right vertical"></i></a>
                                                                    </div>
                            </div>
                        </div>
                    </div>
                </li>



                                                    
                            
                                                            <li class="rated-item rated-item-relative rated-item-relative-pb paypal-item item-mobile rated-item-view">
    <div class="row">
        <div class="col-img">
            <div class="img-holder">
                <div class="img-box" style="background:#b0b4b9 ">
                                                                        <a class="reviews-link" href="https://www.topratedcasinos.co.uk/link/magicred-casino/1" target="_blank"><picture>
                                    <source media="(min-width: 1280px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 1280px) and (min-resolution: 120dpi)" sizes="188px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/376/magicred-casino-1524585379.png 376w">
                                    <source media="(min-width: 1280px)" sizes="188px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/magicred-casino-1524585379.png 188w">

                                    <source media="(min-width: 992px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 992px) and (min-resolution: 120dpi)" sizes="168px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/336/magicred-casino-1524585379.png 336w">
                                    <source media="(min-width: 992px)" sizes="168px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/168/magicred-casino-1524585379.png 168w">

                                    <source media="(min-width: 768px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 768px) and (min-resolution: 120dpi)" sizes="120px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/240/magicred-casino-1524585379.png 240w">
                                    <source media="(min-width: 768px)" sizes="120px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/120/magicred-casino-1524585379.png 120w">

                                    <source media="(min-width: 544px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 544px) and (min-resolution: 120dpi)" sizes="152px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/304/magicred-casino-1524585379.png 304w">
                                    <source media="(min-width: 544px)" sizes="152px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/152/magicred-casino-1524585379.png 152w">

                                    <source media="(min-width: 0px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 0px) and (min-resolution: 120dpi)" sizes="30vw" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/376/magicred-casino-1524585379.png 376w,
                                                                        https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/240/magicred-casino-1524585379.png 240w">
                                    <source media="(min-width: 0px)" sizes="30vw" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/magicred-casino-1524585379.png 188w,
                                                                        https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/120/magicred-casino-1524585379.png 120w">

                                    <img class="responsive-img" alt="" src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/magicred-casino-1524585379.png 188w">
                                </picture></a>
                                                                 </div>

                <div class="top-number">
                    <p class="h4">35</p>
                </div>
            </div>
        </div>
        <div class="col-doubled col-doubled-top hidden-sm-down col-doubled-top-light">
            <div class="row">
                <div class="col-rating">
                    <div class="rating m-a-0">
                        <div class="rating-row">
                            <div class="result-text"></div>
                            <input type="hidden" class="rating-tooltip" data-filled="ico ico-star" data-empty="ico ico-star-empty" data-fractions="2"  data-votes="691" value="4.5">
                            <p class="result text-default"><span class="result-value">691</span> user ratings</p>
                        </div>

                                            </div>
                </div>
                <div class="col-bonus hidden-sm-down">
                    <div class="bonus">
                        <p class="small" style="color:">100 Free Spins+</p>
                        <p class="bonus-value">£300</p>
                        <p class="small">Welcome Bonus</p>
                        <div class="popover-block">
                            <a href="#" class="popover-link small dashed">Terms apply</a>
                            <div class="webui-popover-content">
                                <h6 class="title m-b-10">MATCH + FREE SPINS</h6>
                                <p class="text-dark m-b-10">Deposit 1) 100% up to £50 + 20 Spins on Starburst. Deposit 2) 50% up to £100. Deposit 3) 25% up to £150. After first deposit made, customers will get + 20 Spins for the next 4 days. All free games credited to a player’s account must be used within 1 day from when the offer was granted. Unused free games will be removed from the account thereafter.</p>
                                <p class="m-b-10">pay £100, play with £200</p>
                                <p class="m-b-10"><em class="text-dark">18+  Please Gamble Responsibly. Click &#039;Claim Bonus&#039; to view full terms and conditions</em>
                                </p>
                                <a href="https://www.topratedcasinos.co.uk/link/magicred-casino/1"
                                   onclick='ga("send", "event", "Link out", "More Info", "MagicRed Casino - Vertical:Casino", "35"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","More Info-","MagicRed Casino-","35-","Welcome Bonus £ 300 100 Free Spins+"],24);' target="_blank"                                   target="_blank" role="button" class="btn btn-secondary btn-xs btn-icon font-weight-normal">Claim  Bonus <span class="ico-right"><i class="ico ico-caret-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-doubled col-doubled-bottom col-doubled-bottom-light">
            <div class="row">
                <div class="col-variant hidden-sm-down">
                    <div class="variant m-b">
                        <div class="hidden-md-up">
                            <img src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Top%20Games%20%3Cbr%3E%20Selection-badge-1480595387.png" width="50" height="50" alt="Top Games <br> Selection">
                        </div>
                        <div class="hidden-sm-down">
                            <img src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Top%20Games%20%3Cbr%3E%20Selection-badge-1480595387.png" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Top%20Games%20%3Cbr%3E%20Selection-badge-1480595387.png 1x, https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/100/Top%20Games%20%3Cbr%3E%20Selection-badge-1480595387.png 1.25x" width="50" height="50" alt="Top Games <br> Selection">
                        </div>
                        <p class="small">Top Games <br> Selection</p>
                    </div>
                </div>
                <div class="col-bonus hidden-md-up">
                    <div class="bonus m-t-0">
                        <p class="small" style="color:">100 Free Spins+</p>
                        <p class="bonus-value">£300</p>
                        <p class="small">Welcome Bonus</p>
                        <div class="popover-block">
                            <a href="#" class="popover-link small dashed">Terms apply</a>
                            <div class="webui-popover-content">
                                <h6 class="title m-b-10">MATCH + FREE SPINS</h6>
                                <p class="text-dark m-b-10">Deposit 1) 100% up to £50 + 20 Spins on Starburst. Deposit 2) 50% up to £100. Deposit 3) 25% up to £150. After first deposit made, customers will get + 20 Spins for the next 4 days. All free games credited to a player’s account must be used within 1 day from when the offer was granted. Unused free games will be removed from the account thereafter.</p>
                                <p class="m-b-10">pay £100, play with £200</p>
                                <p class="m-b-10"><em class="text-dark">18+  Please Gamble Responsibly. Click &#039;Claim Bonus&#039; to view full terms and conditions</em>
                                </p>
                                <a href="https://www.topratedcasinos.co.uk/link/magicred-casino/1"
                                   onclick='ga("send", "event", "Link out", "More Info", "MagicRed Casino - Vertical:Casino", "35"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","More Info-","MagicRed Casino-","35-","Welcome Bonus £ 300 100 Free Spins+"],24);' target="_blank"                                   target="_blank" role="button" class="btn btn-secondary btn-xs btn-icon font-weight-normal">Claim  Bonus <span class="ico-right"><i class="ico ico-caret-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-time">
                                        <div class="review-checks">
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>Huge Choice of Games</span>
                        </div>
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>Live Dealer Tables</span>
                        </div>
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>Great VIP Club Perks</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-button">
            <a href="https://www.topratedcasinos.co.uk/link/magicred-casino/1"
               onclick='ga("send", "event", "Link out", "Button", "MagicRed Casino - Vertical:Casino", "35"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","Button-","MagicRed Casino-","35-","Welcome Bonus £ 300 100 Free Spins+"],24);' target="_blank"               role="button" target="_blank" class="btn btn-secondary btn-icon">Claim Bonus
                <span class="txt-add">Go to MagicRed Casino<span class="ico-right"><i class="ico ico-caret-right"></i></span></span>
            </a>
                            <a href="https://www.topratedcasinos.co.uk/link/magicred-casino/1"
                   onclick='ga("send", "event", "Link out", "Text link", "MagicRed Casino - Vertical:Casino", "35"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","Text link-","MagicRed Casino-","35-","Welcome Bonus £ 300 100 Free Spins+"],24);' target="_blank"                   class="hidden-lg-down link-url" target="_blank">www.magicred.com/Join</a>
                        <div class="col-rating hidden-md-up">
                <div class="rating m-a-0">
                    <div class="rating-row">
                        <input type="hidden" class="rating-tooltip" data-filled="ico ico-star" data-empty="ico ico-star-empty" data-fractions="2" data-votes="691" value="4.5">
                        <p class="result text-default"><span class="result-value">691</span> user ratings</p>
                    </div>
                                    </div>
            </div>
        </div>
    </div>
</li>                                                    
                            
                                                            <li class="rated-item rated-item-relative rated-item-relative-pb paypal-item item-mobile rated-item-view">
    <div class="row">
        <div class="col-img">
            <div class="img-holder">
                <div class="img-box" style="background:#de1681 ">
                                            
                        <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/vera-john" target="_blank"><picture>
                                <source media="(min-width: 1280px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 1280px) and (min-resolution: 120dpi)" sizes="188px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/376/vera-john-1502298249.png 376w">
                                <source media="(min-width: 1280px)" sizes="188px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/vera-john-1502298249.png 188w">

                                <source media="(min-width: 992px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 992px) and (min-resolution: 120dpi)" sizes="168px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/336/vera-john-1502298249.png 336w">
                                <source media="(min-width: 992px)" sizes="168px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/168/vera-john-1502298249.png 168w">

                                <source media="(min-width: 768px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 768px) and (min-resolution: 120dpi)" sizes="120px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/240/vera-john-1502298249.png 240w">
                                <source media="(min-width: 768px)" sizes="120px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/120/vera-john-1502298249.png 120w">

                                <source media="(min-width: 544px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 544px) and (min-resolution: 120dpi)" sizes="152px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/304/vera-john-1502298249.png 304w">
                                <source media="(min-width: 544px)" sizes="152px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/152/vera-john-1502298249.png 152w">

                                <source media="(min-width: 0px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 0px) and (min-resolution: 120dpi)" sizes="30vw" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/376/vera-john-1502298249.png 376w,
                                                                        https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/240/vera-john-1502298249.png 240w">
                                <source media="(min-width: 0px)" sizes="30vw" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/vera-john-1502298249.png 188w,
                                                                        https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/120/vera-john-1502298249.png 120w">

                                <img class="responsive-img" alt="" src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/vera-john-1502298249.png 188w">
                            </picture></a>
                                                                </div>

                <div class="top-number">
                    <p class="h4">36</p>
                </div>
            </div>
        </div>
        <div class="col-doubled col-doubled-top hidden-sm-down col-doubled-top-light">
            <div class="row">
                <div class="col-rating">
                    <div class="rating m-a-0">
                        <div class="rating-row">
                            <div class="result-text"></div>
                            <input type="hidden" class="rating-tooltip" data-filled="ico ico-star" data-empty="ico ico-star-empty" data-fractions="2"  data-votes="1,030" value="5">
                            <p class="result text-default"><span class="result-value">1,030</span> user ratings</p>
                        </div>

                                                <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/vera-john" target="_blank">Expert Review <i class="ico ico-caret-right vertical"></i></a>
                                            </div>
                </div>
                <div class="col-bonus hidden-sm-down">
                    <div class="bonus">
                        <p class="small" style="color:">100 Free Spins+</p>
                        <p class="bonus-value">£600</p>
                        <p class="small">Welcome Bonus</p>
                        <div class="popover-block">
                            <a href="#" class="popover-link small dashed">Terms apply</a>
                            <div class="webui-popover-content">
                                <h6 class="title m-b-10">WELCOME BONUS</h6>
                                <p class="text-dark m-b-10">Vera and John split their bonus into 4 separate bonuses. Deposit 1: Deposit £50, get a bonus of £150 plus 100 spins. Deposit 2: Deposit £400, get a bonus of £200. Deposit 3: Deposit £400, get a bonus of £200. Deposit 4: Deposit £100, get a bonus of £100</p>
                                <p class="m-b-10">pay £50, play with £150</p>
                                <p class="m-b-10"><em class="text-dark">18+  Please Gamble Responsibly. Click &#039;Claim Bonus&#039; to view full terms and conditions</em>
                                </p>
                                <a href="https://www.topratedcasinos.co.uk/link/vera-john/2"
                                   onclick='ga("send", "event", "Link out", "More Info", "Vera John - Vertical:Casino", "36"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","More Info-","Vera John-","36-","Welcome Bonus £ 600 100 Free Spins+"],24);' target="_blank"                                   target="_blank" role="button" class="btn btn-secondary btn-xs btn-icon font-weight-normal">Claim  Bonus <span class="ico-right"><i class="ico ico-caret-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-doubled col-doubled-bottom col-doubled-bottom-light">
            <div class="row">
                <div class="col-variant hidden-sm-down">
                    <div class="variant m-b">
                        <div class="hidden-md-up">
                            <img src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Modern%20Design%20%3Cbr%3E%20%26%20Graphics-badge-1480595437.png" width="50" height="50" alt="Modern Design <br> & Graphics">
                        </div>
                        <div class="hidden-sm-down">
                            <img src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Modern%20Design%20%3Cbr%3E%20%26%20Graphics-badge-1480595437.png" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Modern%20Design%20%3Cbr%3E%20%26%20Graphics-badge-1480595437.png 1x, https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/100/Modern%20Design%20%3Cbr%3E%20%26%20Graphics-badge-1480595437.png 1.25x" width="50" height="50" alt="Modern Design <br> & Graphics">
                        </div>
                        <p class="small">Modern Design <br> & Graphics</p>
                    </div>
                </div>
                <div class="col-bonus hidden-md-up">
                    <div class="bonus m-t-0">
                        <p class="small" style="color:">100 Free Spins+</p>
                        <p class="bonus-value">£600</p>
                        <p class="small">Welcome Bonus</p>
                        <div class="popover-block">
                            <a href="#" class="popover-link small dashed">Terms apply</a>
                            <div class="webui-popover-content">
                                <h6 class="title m-b-10">WELCOME BONUS</h6>
                                <p class="text-dark m-b-10">Vera and John split their bonus into 4 separate bonuses. Deposit 1: Deposit £50, get a bonus of £150 plus 100 spins. Deposit 2: Deposit £400, get a bonus of £200. Deposit 3: Deposit £400, get a bonus of £200. Deposit 4: Deposit £100, get a bonus of £100</p>
                                <p class="m-b-10">pay £50, play with £150</p>
                                <p class="m-b-10"><em class="text-dark">18+  Please Gamble Responsibly. Click &#039;Claim Bonus&#039; to view full terms and conditions</em>
                                </p>
                                <a href="https://www.topratedcasinos.co.uk/link/vera-john/2"
                                   onclick='ga("send", "event", "Link out", "More Info", "Vera John - Vertical:Casino", "36"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","More Info-","Vera John-","36-","Welcome Bonus £ 600 100 Free Spins+"],24);' target="_blank"                                   target="_blank" role="button" class="btn btn-secondary btn-xs btn-icon font-weight-normal">Claim  Bonus <span class="ico-right"><i class="ico ico-caret-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-time">
                                        <div class="review-checks">
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>Skrill Accepted</span>
                        </div>
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>Weekly Tournaments</span>
                        </div>
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>7-Figure Jackpots</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-button">
            <a href="https://www.topratedcasinos.co.uk/link/vera-john/2"
               onclick='ga("send", "event", "Link out", "Button", "Vera John - Vertical:Casino", "36"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","Button-","Vera John-","36-","Welcome Bonus £ 600 100 Free Spins+"],24);' target="_blank"               role="button" target="_blank" class="btn btn-secondary btn-icon">Claim Bonus
                <span class="txt-add">Go to Vera John<span class="ico-right"><i class="ico ico-caret-right"></i></span></span>
            </a>
                            <a href="https://www.topratedcasinos.co.uk/link/vera-john/2"
                   onclick='ga("send", "event", "Link out", "Text link", "Vera John - Vertical:Casino", "36"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","Text link-","Vera John-","36-","Welcome Bonus £ 600 100 Free Spins+"],24);' target="_blank"                   class="hidden-lg-down link-url" target="_blank">www.verajohn.co.uk/Bonus</a>
                        <div class="col-rating hidden-md-up">
                <div class="rating m-a-0">
                    <div class="rating-row">
                        <input type="hidden" class="rating-tooltip" data-filled="ico ico-star" data-empty="ico ico-star-empty" data-fractions="2" data-votes="1,030" value="5">
                        <p class="result text-default"><span class="result-value">1,030</span> user ratings</p>
                    </div>
                                        <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/vera-john" target="_blank">Expert Review <i class="ico ico-caret-right vertical"></i></a>
                                    </div>
            </div>
        </div>
    </div>
</li>                                                    
                            
                                                            <li class="rated-item rated-item-relative rated-item-relative-pb paypal-item item-mobile rated-item-view">
                    <div class="row">
                        <div class="col-img">
                            <div class="img-holder">
                                <div class="img-box" style="background:#ffffff ">


                                                                            
                                            <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/rise-casino" target="_blank"><picture>
                                                    <source media="(min-width: 1280px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 1280px) and (min-resolution: 120dpi)" sizes="188px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/376/rise-casino-1521810583.png 376w">
                                                    <source media="(min-width: 1280px)" sizes="188px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/rise-casino-1521810583.png 188w">

                                                    <source media="(min-width: 992px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 992px) and (min-resolution: 120dpi)" sizes="168px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/336/rise-casino-1521810583.png 336w">
                                                    <source media="(min-width: 992px)" sizes="168px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/168/rise-casino-1521810583.png 168w">

                                                    <source media="(min-width: 768px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 768px) and (min-resolution: 120dpi)" sizes="120px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/240/rise-casino-1521810583.png 240w">
                                                    <source media="(min-width: 768px)" sizes="120px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/120/rise-casino-1521810583.png 120w">

                                                    <source media="(min-width: 544px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 544px) and (min-resolution: 120dpi)" sizes="152px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/304/rise-casino-1521810583.png 304w">
                                                    <source media="(min-width: 544px)" sizes="152px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/152/rise-casino-1521810583.png 152w">

                                                    <source media="(min-width: 0px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 0px) and (min-resolution: 120dpi)" sizes="30vw" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/376/rise-casino-1521810583.png 376w,
                                                                        https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/240/rise-casino-1521810583.png 240w">
                                                    <source media="(min-width: 0px)" sizes="30vw" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/rise-casino-1521810583.png 188w,
                                                                        https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/120/rise-casino-1521810583.png 120w">

                                                    <img class="responsive-img" alt="Rise Casino" src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/rise-casino-1521810583.png 188w">
                                                </picture></a></a>
                                                                                                                   
                                </div>
                                <div class="top-number">
                                    <p class="h4">37</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-doubled col-doubled-top hidden-sm-down col-doubled-top-light">
                            <div class="row">
                                <div class="col-rating">
                                    <div class="rating m-a-0">
                                        <div class="rating-row">
                                            <div class="result-text"></div>
                                            <input type="hidden" class="rating-tooltip" data-filled="ico ico-star" data-empty="ico ico-star-empty" data-fractions="2"  data-votes="248" value="4.5">
                                            <p class="result text-default"><span class="result-value">248</span> user ratings</p>
                                        </div>
                                       
                                                                                <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/rise-casino" target="_blank">Expert Review <i class="ico ico-caret-right vertical"></i></a>
                                                                            </div>
                                </div>
                                <div class="col-bonus hidden-sm-down">
                                    <div class="bonus">
                                      
                                                                                <p class="bonus-text"><strong>Deposit £10 Get 25 Free Spins</strong></p>
                                        <div class="popover-block">
                                            <a href="#" class="popover-link small dashed">Terms apply</a>
                                            <div class="webui-popover-content">
                                                <h6 class="title m-b-10">New Customer Offer</h6>
                                                <p class="text-dark m-b-10">Deposit £10 and receive 25 free spins. First depositors only, minimum deposit is £10. Use promo code RISE.</p>
                                                <p class="m-b-10">pay £10, get 25 spins</p>
                                                <p class="m-b-10"><em class="text-dark">18+  Please Gamble Responsibly. Click &#039;Claim Bonus&#039; to view full terms and conditions</em>
                                                </p>
                                               
                                                <a href="https://www.topratedcasinos.co.uk/link/rise-casino/1"
                                                   onclick='ga("send", "event", "Link out", "More info", "Rise Casino - Vertical:Casino", "37"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","More info-","Rise Casino-","37-","&lt;strong&gt;Deposit £10 Get 25 Free Spins&lt;/strong&gt;"],24);' target="_blank"                                                   target="_blank" role="button" class="btn btn-secondary btn-xs btn-icon font-weight-normal">Claim  Bonus <span class="ico-right"><i class="ico ico-caret-right"></i></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-doubled col-doubled-bottom col-doubled-bottom-light">
                            <div class="row">
                                <div class="col-variant hidden-sm-down">
                                    <div class="variant m-b">
                                        <div class="hidden-md-up">
                                            <img src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Brand%20New%20%3Cbr%3E%20Casino-badge-1480595459.png" width="50" height="50" alt="Brand New <br> Casino">
                                        </div>
                                        <div class="hidden-sm-down">
                                            <img src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Brand%20New%20%3Cbr%3E%20Casino-badge-1480595459.png" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Brand%20New%20%3Cbr%3E%20Casino-badge-1480595459.png 1x, https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/100/Brand%20New%20%3Cbr%3E%20Casino-badge-1480595459.png 1.25x" width="50" height="50" alt="Brand New <br> Casino">
                                        </div>
                                        <p class="small">Brand New <br> Casino</p>
                                    </div>
                                </div>
                                <div class="col-bonus hidden-md-up">
                                    <div class="bonus m-t-0">

                                                                                <p class="bonus-text m-t"><strong>Deposit £10 Get 25 Free Spins</strong></p>

                                        <p class="small hidden-sm-down">Sign up bonus</p>
                                        <div class="popover-block hidden-sm-down">
                                            <a href="#" class="popover-link small dashed">Terms apply</a>
                                            <div class="webui-popover-content">
                                                <h6 class="title m-b-10">New Customer Offer</h6>
                                                <p class="text-dark m-b-10">Deposit £10 and receive 25 free spins. First depositors only, minimum deposit is £10. Use promo code RISE.</p>
                                                <p class="m-b-10">pay £10, get 25 spins</p>
                                                <p class="m-b-10"><em class="text-dark">18+  Please Gamble Responsibly. Click &#039;Claim Bonus&#039; to view full terms and conditions</em>
                                                </p>
                                                <a href="https://www.topratedcasinos.co.uk/link/rise-casino/1"
                                                   onclick='ga("send", "event", "Link out", "More info", "Rise Casino - Vertical:Casino", "37"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","More info-","Rise Casino-","37-","&lt;strong&gt;Deposit £10 Get 25 Free Spins&lt;/strong&gt;"],24);' target="_blank"                                                   target="_blank" role="button" class="btn btn-secondary btn-xs btn-icon font-weight-normal">Claim  Bonus <span class="ico-right"><i class="ico ico-caret-right"></i></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-time">
                                                                            <div class="review-checks">
                                            <div class="review-check">
                                                <i class="ico ico-check text-primary"></i><span>Full PayPal Support</span>
                                            </div>
                                            <div class="review-check">
                                                <i class="ico ico-check text-primary"></i><span>Over 300 Slots</span>
                                            </div>
                                            <div class="review-check">
                                                <i class="ico ico-check text-primary"></i><span>Slick Mobile Design</span>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-button">
                            <a href="https://www.topratedcasinos.co.uk/link/rise-casino/1"
                               onclick='ga("send", "event", "Link out", "Button", "Rise Casino - Vertical:Casino", "37"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","Button-","Rise Casino-","37-","&lt;strong&gt;Deposit £10 Get 25 Free Spins&lt;/strong&gt;"],24);' target="_blank"                               role="button" target="_blank" class="btn btn-secondary btn-icon">Claim Bonus
                                <span class="txt-add">Go to Rise Casino<span class="ico-right"><i class="ico ico-caret-right"></i></span></span>
                            </a>
                                                            <a href="https://www.topratedcasinos.co.uk/link/rise-casino/1"
                                   onclick='ga("send", "event", "Link out", "Text link", "Rise Casino - Vertical:Casino", "37"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","Text link-","Rise Casino-","37-","&lt;strong&gt;Deposit £10 Get 25 Free Spins&lt;/strong&gt;"],24);' target="_blank"                                   class="hidden-lg-down link-url" target="_blank">www.risecasino.com/Join</a>
                                                        <div class="col-rating hidden-md-up">
                                <div class="rating m-a-0">
                                    <div class="rating-row">
                                        <input type="hidden" class="rating-tooltip" data-filled="ico ico-star" data-empty="ico ico-star-empty" data-fractions="2" data-votes="248" value="4.5">
                                        <p class="result text-default"><span class="result-value">248</span> user ratings</p>
                                    </div>
                                                                        <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/rise-casino" target="_blank">Expert Review <i class="ico ico-caret-right vertical"></i></a>
                                                                    </div>
                            </div>
                        </div>
                    </div>
                </li>



                                                    
                            
                                                            <li class="rated-item rated-item-relative rated-item-relative-pb paypal-item item-mobile rated-item-view">
                    <div class="row">
                        <div class="col-img">
                            <div class="img-holder">
                                <div class="img-box" style="background:#ffffff ">


                                                                            
                                            <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/kozmo-casino" target="_blank"><picture>
                                                    <source media="(min-width: 1280px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 1280px) and (min-resolution: 120dpi)" sizes="188px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/376/kozmo-casino-1521550921.png 376w">
                                                    <source media="(min-width: 1280px)" sizes="188px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/kozmo-casino-1521550921.png 188w">

                                                    <source media="(min-width: 992px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 992px) and (min-resolution: 120dpi)" sizes="168px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/336/kozmo-casino-1521550921.png 336w">
                                                    <source media="(min-width: 992px)" sizes="168px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/168/kozmo-casino-1521550921.png 168w">

                                                    <source media="(min-width: 768px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 768px) and (min-resolution: 120dpi)" sizes="120px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/240/kozmo-casino-1521550921.png 240w">
                                                    <source media="(min-width: 768px)" sizes="120px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/120/kozmo-casino-1521550921.png 120w">

                                                    <source media="(min-width: 544px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 544px) and (min-resolution: 120dpi)" sizes="152px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/304/kozmo-casino-1521550921.png 304w">
                                                    <source media="(min-width: 544px)" sizes="152px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/152/kozmo-casino-1521550921.png 152w">

                                                    <source media="(min-width: 0px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 0px) and (min-resolution: 120dpi)" sizes="30vw" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/376/kozmo-casino-1521550921.png 376w,
                                                                        https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/240/kozmo-casino-1521550921.png 240w">
                                                    <source media="(min-width: 0px)" sizes="30vw" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/kozmo-casino-1521550921.png 188w,
                                                                        https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/120/kozmo-casino-1521550921.png 120w">

                                                    <img class="responsive-img" alt="Kozmo Casino" src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/kozmo-casino-1521550921.png 188w">
                                                </picture></a></a>
                                                                                                                   
                                </div>
                                <div class="top-number">
                                    <p class="h4">38</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-doubled col-doubled-top hidden-sm-down col-doubled-top-light">
                            <div class="row">
                                <div class="col-rating">
                                    <div class="rating m-a-0">
                                        <div class="rating-row">
                                            <div class="result-text"></div>
                                            <input type="hidden" class="rating-tooltip" data-filled="ico ico-star" data-empty="ico ico-star-empty" data-fractions="2"  data-votes="457" value="4">
                                            <p class="result text-default"><span class="result-value">457</span> user ratings</p>
                                        </div>
                                       
                                                                                <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/kozmo-casino" target="_blank">Expert Review <i class="ico ico-caret-right vertical"></i></a>
                                                                            </div>
                                </div>
                                <div class="col-bonus hidden-sm-down">
                                    <div class="bonus">
                                      
                                                                                <p class="bonus-text"><strong>Deposit £10 Get 25 Free Spins</strong></p>
                                        <div class="popover-block">
                                            <a href="#" class="popover-link small dashed">Terms apply</a>
                                            <div class="webui-popover-content">
                                                <h6 class="title m-b-10">New Customer Offer</h6>
                                                <p class="text-dark m-b-10">Deposit £10 and receive 25 free spins. First depositors only, minimum deposit is £10. Use promo code SPINS</p>
                                                <p class="m-b-10">pay £10, play with 25 spins</p>
                                                <p class="m-b-10"><em class="text-dark">18+  Please Gamble Responsibly. Click &#039;Claim Bonus&#039; to view full terms and conditions</em>
                                                </p>
                                               
                                                <a href="https://www.topratedcasinos.co.uk/link/kozmo-casino/1"
                                                   onclick='ga("send", "event", "Link out", "More info", "Kozmo Casino - Vertical:Casino", "38"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","More info-","Kozmo Casino-","38-","&lt;strong&gt;Deposit £10 Get 25 Free Spins&lt;/strong&gt;"],24);' target="_blank"                                                   target="_blank" role="button" class="btn btn-secondary btn-xs btn-icon font-weight-normal">Claim  Bonus <span class="ico-right"><i class="ico ico-caret-right"></i></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-doubled col-doubled-bottom col-doubled-bottom-light">
                            <div class="row">
                                <div class="col-variant hidden-sm-down">
                                    <div class="variant m-b">
                                        <div class="hidden-md-up">
                                            <img src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Modern%20Design%20%3Cbr%3E%20%26%20Graphics-badge-1480595437.png" width="50" height="50" alt="Modern Design <br> & Graphics">
                                        </div>
                                        <div class="hidden-sm-down">
                                            <img src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Modern%20Design%20%3Cbr%3E%20%26%20Graphics-badge-1480595437.png" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Modern%20Design%20%3Cbr%3E%20%26%20Graphics-badge-1480595437.png 1x, https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/100/Modern%20Design%20%3Cbr%3E%20%26%20Graphics-badge-1480595437.png 1.25x" width="50" height="50" alt="Modern Design <br> & Graphics">
                                        </div>
                                        <p class="small">Modern Design <br> & Graphics</p>
                                    </div>
                                </div>
                                <div class="col-bonus hidden-md-up">
                                    <div class="bonus m-t-0">

                                                                                <p class="bonus-text m-t"><strong>Deposit £10 Get 25 Free Spins</strong></p>

                                        <p class="small hidden-sm-down">Sign up bonus</p>
                                        <div class="popover-block hidden-sm-down">
                                            <a href="#" class="popover-link small dashed">Terms apply</a>
                                            <div class="webui-popover-content">
                                                <h6 class="title m-b-10">New Customer Offer</h6>
                                                <p class="text-dark m-b-10">Deposit £10 and receive 25 free spins. First depositors only, minimum deposit is £10. Use promo code SPINS</p>
                                                <p class="m-b-10">pay £10, play with 25 spins</p>
                                                <p class="m-b-10"><em class="text-dark">18+  Please Gamble Responsibly. Click &#039;Claim Bonus&#039; to view full terms and conditions</em>
                                                </p>
                                                <a href="https://www.topratedcasinos.co.uk/link/kozmo-casino/1"
                                                   onclick='ga("send", "event", "Link out", "More info", "Kozmo Casino - Vertical:Casino", "38"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","More info-","Kozmo Casino-","38-","&lt;strong&gt;Deposit £10 Get 25 Free Spins&lt;/strong&gt;"],24);' target="_blank"                                                   target="_blank" role="button" class="btn btn-secondary btn-xs btn-icon font-weight-normal">Claim  Bonus <span class="ico-right"><i class="ico ico-caret-right"></i></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-time">
                                                                            <div class="review-checks">
                                            <div class="review-check">
                                                <i class="ico ico-check text-primary"></i><span>High Roller Tournaments</span>
                                            </div>
                                            <div class="review-check">
                                                <i class="ico ico-check text-primary"></i><span>Full PayPal Support</span>
                                            </div>
                                            <div class="review-check">
                                                <i class="ico ico-check text-primary"></i><span>Up to 10% Cashback</span>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-button">
                            <a href="https://www.topratedcasinos.co.uk/link/kozmo-casino/1"
                               onclick='ga("send", "event", "Link out", "Button", "Kozmo Casino - Vertical:Casino", "38"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","Button-","Kozmo Casino-","38-","&lt;strong&gt;Deposit £10 Get 25 Free Spins&lt;/strong&gt;"],24);' target="_blank"                               role="button" target="_blank" class="btn btn-secondary btn-icon">Claim Bonus
                                <span class="txt-add">Go to Kozmo Casino<span class="ico-right"><i class="ico ico-caret-right"></i></span></span>
                            </a>
                                                            <a href="https://www.topratedcasinos.co.uk/link/kozmo-casino/1"
                                   onclick='ga("send", "event", "Link out", "Text link", "Kozmo Casino - Vertical:Casino", "38"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","Text link-","Kozmo Casino-","38-","&lt;strong&gt;Deposit £10 Get 25 Free Spins&lt;/strong&gt;"],24);' target="_blank"                                   class="hidden-lg-down link-url" target="_blank">www.kozmocasino.com/Join</a>
                                                        <div class="col-rating hidden-md-up">
                                <div class="rating m-a-0">
                                    <div class="rating-row">
                                        <input type="hidden" class="rating-tooltip" data-filled="ico ico-star" data-empty="ico ico-star-empty" data-fractions="2" data-votes="457" value="4">
                                        <p class="result text-default"><span class="result-value">457</span> user ratings</p>
                                    </div>
                                                                        <a class="reviews-link" href="https://www.topratedcasinos.co.uk/online-casinos/kozmo-casino" target="_blank">Expert Review <i class="ico ico-caret-right vertical"></i></a>
                                                                    </div>
                            </div>
                        </div>
                    </div>
                </li>



                                                    
                            
                                                            <li class="rated-item rated-item-relative rated-item-relative-pb paypal-item item-mobile rated-item-view">
    <div class="row">
        <div class="col-img">
            <div class="img-holder">
                <div class="img-box" style="background:#212121 ">
                                                                        <a class="reviews-link" href="https://www.topratedcasinos.co.uk/link/intercasino/1" target="_blank"><picture>
                                    <source media="(min-width: 1280px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 1280px) and (min-resolution: 120dpi)" sizes="188px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/376/intercasino-1519907044.png 376w">
                                    <source media="(min-width: 1280px)" sizes="188px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/intercasino-1519907044.png 188w">

                                    <source media="(min-width: 992px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 992px) and (min-resolution: 120dpi)" sizes="168px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/336/intercasino-1519907044.png 336w">
                                    <source media="(min-width: 992px)" sizes="168px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/168/intercasino-1519907044.png 168w">

                                    <source media="(min-width: 768px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 768px) and (min-resolution: 120dpi)" sizes="120px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/240/intercasino-1519907044.png 240w">
                                    <source media="(min-width: 768px)" sizes="120px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/120/intercasino-1519907044.png 120w">

                                    <source media="(min-width: 544px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 544px) and (min-resolution: 120dpi)" sizes="152px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/304/intercasino-1519907044.png 304w">
                                    <source media="(min-width: 544px)" sizes="152px" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/152/intercasino-1519907044.png 152w">

                                    <source media="(min-width: 0px) and (-webkit-min-device-pixel-ratio: 1.25),
                                                                        (min-width: 0px) and (min-resolution: 120dpi)" sizes="30vw" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/376/intercasino-1519907044.png 376w,
                                                                        https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/240/intercasino-1519907044.png 240w">
                                    <source media="(min-width: 0px)" sizes="30vw" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/intercasino-1519907044.png 188w,
                                                                        https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/120/intercasino-1519907044.png 120w">

                                    <img class="responsive-img" alt="" src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/logos/188/intercasino-1519907044.png 188w">
                                </picture></a>
                                                                 </div>

                <div class="top-number">
                    <p class="h4">39</p>
                </div>
            </div>
        </div>
        <div class="col-doubled col-doubled-top hidden-sm-down col-doubled-top-light">
            <div class="row">
                <div class="col-rating">
                    <div class="rating m-a-0">
                        <div class="rating-row">
                            <div class="result-text"></div>
                            <input type="hidden" class="rating-tooltip" data-filled="ico ico-star" data-empty="ico ico-star-empty" data-fractions="2"  data-votes="1764" value="5">
                            <p class="result text-default"><span class="result-value">1764</span> user ratings</p>
                        </div>

                                            </div>
                </div>
                <div class="col-bonus hidden-sm-down">
                    <div class="bonus">
                        <p class="small" style="color:">100% Up To</p>
                        <p class="bonus-value">£900</p>
                        <p class="small">Bonus + Free Spins</p>
                        <div class="popover-block">
                            <a href="#" class="popover-link small dashed">Terms apply</a>
                            <div class="webui-popover-content">
                                <h6 class="title m-b-10">MATCH + FREE SPINS</h6>
                                <p class="text-dark m-b-10">1) Register for 20 no deposit spins. 2) Deposit £20 and get 100 spins. 3) 3 bonuses of 100% up to £300.</p>
                                <p class="m-b-10">pay £500, play with £1000</p>
                                <p class="m-b-10"><em class="text-dark">18+  Please Gamble Responsibly. Click &#039;Claim Bonus&#039; to view full terms and conditions</em>
                                </p>
                                <a href="https://www.topratedcasinos.co.uk/link/intercasino/1"
                                   onclick='ga("send", "event", "Link out", "More Info", "InterCasino - Vertical:Casino", "39"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","More Info-","InterCasino-","39-","Sign-up Bonus £ 900 100% Up To"],24);' target="_blank"                                   target="_blank" role="button" class="btn btn-secondary btn-xs btn-icon font-weight-normal">Claim  Bonus <span class="ico-right"><i class="ico ico-caret-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-doubled col-doubled-bottom col-doubled-bottom-light">
            <div class="row">
                <div class="col-variant hidden-sm-down">
                    <div class="variant m-b">
                        <div class="hidden-md-up">
                            <img src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Editor%27s%20%3Cbr%3E%20Choice-badge-1488370499.png" width="50" height="50" alt="Editor's <br> Choice">
                        </div>
                        <div class="hidden-sm-down">
                            <img src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Editor%27s%20%3Cbr%3E%20Choice-badge-1488370499.png" srcset="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/50/Editor%27s%20%3Cbr%3E%20Choice-badge-1488370499.png 1x, https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/badges/100/Editor%27s%20%3Cbr%3E%20Choice-badge-1488370499.png 1.25x" width="50" height="50" alt="Editor's <br> Choice">
                        </div>
                        <p class="small">Editor's <br> Choice</p>
                    </div>
                </div>
                <div class="col-bonus hidden-md-up">
                    <div class="bonus m-t-0">
                        <p class="small" style="color:">100% Up To</p>
                        <p class="bonus-value">£900</p>
                        <p class="small">Bonus + Free Spins</p>
                        <div class="popover-block">
                            <a href="#" class="popover-link small dashed">Terms apply</a>
                            <div class="webui-popover-content">
                                <h6 class="title m-b-10">MATCH + FREE SPINS</h6>
                                <p class="text-dark m-b-10">1) Register for 20 no deposit spins. 2) Deposit £20 and get 100 spins. 3) 3 bonuses of 100% up to £300.</p>
                                <p class="m-b-10">pay £500, play with £1000</p>
                                <p class="m-b-10"><em class="text-dark">18+  Please Gamble Responsibly. Click &#039;Claim Bonus&#039; to view full terms and conditions</em>
                                </p>
                                <a href="https://www.topratedcasinos.co.uk/link/intercasino/1"
                                   onclick='ga("send", "event", "Link out", "More Info", "InterCasino - Vertical:Casino", "39"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","More Info-","InterCasino-","39-","Sign-up Bonus £ 900 100% Up To"],24);' target="_blank"                                   target="_blank" role="button" class="btn btn-secondary btn-xs btn-icon font-weight-normal">Claim  Bonus <span class="ico-right"><i class="ico ico-caret-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-time">
                                        <div class="review-checks">
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>High Roller Welcome Bonus</span>
                        </div>
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>7-Figure Jackpots</span>
                        </div>
                        <div class="review-check">
                            <i class="ico ico-check text-primary"></i><span>Great Slots + Roulette</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-button">
            <a href="https://www.topratedcasinos.co.uk/link/intercasino/1"
               onclick='ga("send", "event", "Link out", "Button", "InterCasino - Vertical:Casino", "39"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","Button-","InterCasino-","39-","Sign-up Bonus £ 900 100% Up To"],24);' target="_blank"               role="button" target="_blank" class="btn btn-secondary btn-icon">Claim Bonus
                <span class="txt-add">Go to InterCasino<span class="ico-right"><i class="ico ico-caret-right"></i></span></span>
            </a>
                            <a href="https://www.topratedcasinos.co.uk/link/intercasino/1"
                   onclick='ga("send", "event", "Link out", "Text link", "InterCasino - Vertical:Casino", "39"); reportCustomEvent(); fbq("track", "Conversion");  gaga("radio",["Table-","Text link-","InterCasino-","39-","Sign-up Bonus £ 900 100% Up To"],24);' target="_blank"                   class="hidden-lg-down link-url" target="_blank">www.intercasino.co.uk/Join-Now</a>
                        <div class="col-rating hidden-md-up">
                <div class="rating m-a-0">
                    <div class="rating-row">
                        <input type="hidden" class="rating-tooltip" data-filled="ico ico-star" data-empty="ico ico-star-empty" data-fractions="2" data-votes="1764" value="5">
                        <p class="result text-default"><span class="result-value">1764</span> user ratings</p>
                    </div>
                                    </div>
            </div>
        </div>
    </div>
</li>                                                                        

                </ol>

                <div class="rated-footer">
                    <div class="rated-item item-collapse">
                        <div class="row">
                            <div class="col-lg-half">

                                                                    <a href="https://www.topratedcasinos.co.uk/compare" class="link"><span
                                                class="txt-new">NEW </span> Try our side-by-side feature comparison tool
                                        <i class="ico ico-angle-right"></i></a>
                                                            </div>
                            <div class="col-lg-half">
                                <p class="collapse-toggle m-b-0"><span
                                            class="collapse-toggle-txt">Show our review and rating criteria </span><span
                                            class="collapse-toggle-txt"
                                            style="display: none;">Hide our review and rating criteria</span>&ensp;<i
                                            class="ico ico-angle-right"></i>
                                </p>
                            </div>
                        </div>
                        <div class="collapse-content">
                            <div class="collapse-inner">
                                <div class="collapse-close"><i class="ico ico-cross"></i>
                                </div>
                                <h4 class="text-center m-b-md">Our approach to online casino reviews</h4>
                                <p class="m-b">At TopRatedCasinos.co.uk we take a lot of pride in presenting our users with the best online casinos the UK has to offer. We&#039;re continually reviewing the market to bring you the lowdown on newly launched casinos, as well as updates on long standing brands. Our expert review team research every casino we present to you, making sure you&#039;re in-the- know and join a casino that meets all your needs. The key areas focused on by the TopRatedCasinos.co.uk review team are:</p>
                                <div class="media-block m-t-md m-b">
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <div class="media-wrap m-b-md">
                                                <div class="media-icon">
                                                    <img src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/static/ico-bonus.png"
                                                         width="90" height="90" alt="">
                                                </div>
                                                <div class="media-content">
                                                    <b>Bonus offers</b>
                                                    <p>We assess the size, quality and wagering requirements of any welcome bonuses, free spins, offers and VIP programmes.</p>
                                                </div>
                                            </div>
                                            <div class="media-wrap m-b-md">
                                                <div class="media-icon">
                                                    <img src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/static/ico-games.png"
                                                         width="90" height="90" alt="">
                                                </div>
                                                <div class="media-content">
                                                    <b>Games</b>
                                                    <p>Game selection is very important – we look for table games, live gaming, and a range of slots from top software providers.</p>
                                                </div>
                                            </div>
                                            <div class="media-wrap m-b-md">
                                                <div class="media-icon">
                                                    <img src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/static/ico-design.png"
                                                         width="90" height="90" alt="">
                                                </div>
                                                <div class="media-content">
                                                    <b>Design</b>
                                                    <p>We think online casinos should have a distinct brand and design, with modern, easy to use interfaces and navigation.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-offset-1 col-lg-7">
                                            <div class="media-wrap m-b-md">
                                                <div class="media-icon">
                                                    <img src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/static/ico-device.png"
                                                         width="90" height="90" alt="">
                                                </div>
                                                <div class="media-content">
                                                    <b>Device support</b>
                                                    <p>We look for the highest quality betting experience across a range of mobiles and tablets, as well as desktop computers.</p>
                                                </div>
                                            </div>
                                            <div class="media-wrap m-b-md">
                                                <div class="media-icon">
                                                    <img src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/static/ico-cashier.png"
                                                         width="90" height="90" alt="">
                                                </div>
                                                <div class="media-content">
                                                    <b>Cashier</b>
                                                    <p>We review the available deposit and withdrawal methods, times, restrictions, currencies and more.</p>
                                                </div>
                                            </div>
                                            <div class="media-wrap m-b-md">
                                                <div class="media-icon">
                                                    <img src="https://usermediafiles.s3.eu-west-1.amazonaws.com/topratedcasinos/static/ico-reputation.png"
                                                         width="90" height="90" alt="">
                                                </div>
                                                <div class="media-content">
                                                    <b>Reputation</b>
                                                    <p>We study each bookie&#039;s popularity, trustworthiness and customer feedback to determine the strength of their reputation.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p class="small">TopRatedCasinos.co.uk is an independently owned casino comparison site. In some cases we receive commission from casinos for introducing customers to them, in order to support the free comparison service we provide to UK gamers. While this may occasionally affect the position in which a casino appears, we guarantee it does not affect either the review or the ratings shown, which are produced by our unbiased casino experts.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <!-- rated-paypal-update block ========== END ========== -->
        <!-- description-block ========== START ========== -->
        <?php echo $page['foot_desc'];?>
        </div>

    
    </main>
<?php include('inc/foot.php');?>