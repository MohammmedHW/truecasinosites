<?php
include(realpath(dirname(__FILE__)).'/admin/function/config.php');
$offerid = $_GET['id'];
$where = " WHERE `id` = '".$offerid."'";
$sql_offers = 'select * from `offers` '.$where.'  ';
$res_offers = mysqli_query($con, $sql_offers ) or die( 'MySQL Error: ' . mysqli_error() );
$offer = mysqli_fetch_array($res_offers);
$sql_network = 'select * from `network` WHERE `id`  = "'.$offer['network'].'"';
$res_network = mysqli_query($con, $sql_network ) or die( 'MySQL Error: ' . mysqli_error() );
$network = mysqli_fetch_array($res_network);

//	print_r($network );
include(realpath(dirname(__FILE__)).'/inc/header.php'); 
include(realpath(dirname(__FILE__)).'/inc/menu.php');
?>
    <main class="main">
                                    
                <div class="container">
                    <!-- breadcrumb -->
                    <ol class="breadcrumb">
                        <li><a href="/">Home</a></li><li><a href="#">Online Casinos</a></li><li class="active"><?php echo $offer['title'];?></li>
                    </ol>
                </div>
                                    <div class="container">
            
            <div class="row">
                <!-- Online Review SIDEBAR ========= START -->
                <div class="col-md-4 sidebar hidden-sm-down p-t-0">
                    <div class="sidebar-top">
                        <div class="row block">
                            <div class="col-md-15">
                                <div class="item-sidebar m-b-md">
                                    <div class="img-holder">
                                        <div class="img-box"
                                             style="background: #000000">
                                            <a href="<?php echo $offer['aff_url'];?>" target="_blank">
                                                <picture>
                                                    <img class="responsive-img" alt=""
                                                         src="<?php echo $offer['logo'];?>">
                                                </picture>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-15">
                                <div class="bonus m-b-md">
                                                                            <p class="small" style="color:"><?php echo $offer['bonus_percent'];?>% Up To</p>
<p class="bonus-value"><?php echo $offer['bonus_amount'];?></p>
<p class="small"><?php echo $offer['bonus_code'];?></p>
<div class="popover-block">
    <a href="#" class="popover-link small dashed">Terms apply</a>
    <div class="webui-popover-content">
        <?php echo $offer['terms'];?>
        <a href="<?php echo $offer['aff_url'];?>" target="_blank" role="button" class="btn btn-secondary btn-xs btn-icon font-weight-normal">Claim  Bonus <span class="ico-right"><i class="fa fa-caret-right"></i></span></a>
    </div>
</div>
                                                                    </div>
                            </div>
                            <div class="col-md-15 hidden-sm-down">
                                <div class="item-sidebar m-b-32">
                                    <a href="<?php echo $offer['aff_url'];?>"  target="_blank" role="button" class="btn btn-secondary btn-block btn-icon">Claim Bonus <span class="ico-right"><i class="fa fa-caret-right"></i></span></a>
                                </div>
                            </div>
                            
                            <div class="col-md-15">
                                <div class="review-checks-sidebar m-b-32">
                                    <div class="review-checks">
                                         <?php $features = explode("\n", $network['features']);
                        
                        foreach ($features as $feature) {?>
                        <div class="review-check">
                            <i class="fa fa-check text-primary"></i><span><?php echo $feature;?></span>
                        </div>
<?php } ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-15">
                                <div class="variant m-b-32">
                                    <img src="uploads/device.png"  />
                                    <p class="small">Device Compatibility</p>
                                </div>
                            </div>
                            <div class="col-md-15">
                                <div class="bg-faded row-out">
                                    <div class="text-center p-a-md">
                                        <div class="m-b-10">
                                            <span class="text-default">Launched
                                                :</span>
                                            <p><?php echo $network['founded'];?> </p>
                                        </div>
                                        <div class="m-b-10">
                                            <span class="text-default">Licensed
                                                :</span>
                                            <p><?php echo $network['licensed'];?></p>
                                        </div>
                                        <div class="m-b-10">
                                            <span class="text-default">Owned by
                                                :</span>
                                            <p><?php echo $network['network'];?></p>
                                        </div>
                                        <div class="m-b-10">
                                            <span class="text-default">Payout %
                                                :</span>
                                            <p><?php echo $network['payout_percent'];?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="sidebar-sticky">
                        <div class="row-out block">
                            <div class="item-sidebar m-b-md">
                                <div class="img-holder">
                                    <div class="img-box" style="background: #000000">
                                        <a href="<?php echo $offer['aff_url'];?>" target="_blank"><picture>
                                                <img class="responsive-img" alt=""
                                                     src="<?php echo $offer['logo'];?>">
                                            </picture>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="bonus m-b-md">
                                <p class="small" style="color:"><?php echo $offer['bonus_percent'];?>% Up To</p>
<p class="bonus-value"><?php echo $offer['bonus_amount'];?></p>
<p class="small"><?php echo $offer['bonus_code'];?></p>
<div class="popover-block">
    <a href="#" class="popover-link small dashed">Terms apply</a>
    <div class="webui-popover-content">
        <?php echo $offer['terms'];?>
        <a href="<?php echo $offer['aff_url'];?>" target="_blank" role="button" class="btn btn-secondary btn-xs btn-icon font-weight-normal">Claim  Bonus <span class="ico-right"><i class="fa fa-caret-right"></i></span></a>
    </div>
</div>
                                                            </div>
                            <div class="item-sidebar">
                                <a href="<?php echo $offer['aff_url'];?>" target="_blank" role="button" class="btn btn-secondary btn-block btn-icon">Claim Bonus
                                    <span class="ico-right"><i class="fa fa-caret-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Online Review SIDEBAR ========= END -->
                <!-- Online Review CONTENT ========= START -->
                <div class="col-md-11 content p-t-0">
                    <!-- logo-full-width-block ========= START -->
                    <div class="logo-full-width-block m-b hidden-md-up">
                        <div class="img-holder">
                            <div class="img-box img-box-compact"
                                 style="background: #<?php echo $offer['bg_color'];?>">
                                <a href="<?php echo $offer['aff_url'];?>" target="_blank"><img src="<?php echo $offer['logo'];?>" alt="<?php echo $offer['title'];?>"></a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- logo-full-width-block ========= END -->
                    <!-- description-block ========= START -->
                    <div class="m-b-md">
                        <div class="heading heading-title">
                            <h1 class="display-4"><?php echo $offer['title'];?> - online casino review</h1>
                        </div>
                        <div class="description-txt expand">
                            <p><?php echo $network['description'];?></p>

                        </div>
                    </div>
                    
                    <!-- description-block ========= END -->
                    <!-- pros-cons-block ========= START -->
                    <div class="pros-cons-block block bg-faded row-out">
                        <div class="paddings">
                            <div class="heading">
                                <h2 class="h2">Pros and cons</h2>
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <ul class="list-icon m-b-md">
 <?php $pross = explode("\n", $network['pros']);
                        
                        foreach ($pross as $pros) {?>
                            <li class="list-icon-item"><span class="list-icon-ico text-danger"><i class="fa fa-thumbs-up"></i></span><?php echo $pros;?></span>
                        </li>
<?php } ?>
                                  </ul>
                                </div>
                                <div class="col-md-7">
                                    <ul class="list-icon m-b-md">
 <?php $conss = explode("\n", $network['cons']);
                        
                        foreach ($conss as $cons) {?>
                            <li class="list-icon-item"><span class="list-icon-ico text-default"><i class="fa fa-question"></i></span><?php echo $cons;?></span>
                        </li>
<?php } ?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- pros-cons-block ========= END -->
<!-- software-block ========= START -->
<div class="software-block">
    <div class="heading">
        <h2 class="h2">Software</h2>
    </div>
    <div class="expand m-b">
        <p>
           <?php echo $network['software'];?>
        </p>
    </div>
</div>
<!-- software-block ========= END -->
<!-- games-block ========= START -->
<div class="block">
    <div class="heading">
        <h2 class="h2">Games</h2>
    </div>
    <div class="description-txt expand m-b">
         <?php echo $network['games'];?>
    </div>
</div>
<!-- games-block ========= END -->

<!-- Slots-block ========= START -->
<div class="block">
    <div class="heading">
        <h3 class="h3">Slots</h3>
    </div>
    <div class="description-txt expand m-b">
       <?php echo $network['slots'];?>

    </div>
</div>
<!-- Slots-block ========= END -->
<!-- Live-casino-block ========= START -->
<div class="block">
    <div class="heading">
        <h3 class="h3">Live Casino</h3>
    </div>
    <div class="description-txt expand m-b">
      <?php echo $network['live_casino'];?>

    </div>
</div>
<!--  Live-casino-block  ========= END -->
<!-- Table-games-block ========= START -->
<div class="block">
    <div class="heading">
        <h3 class="h3">Table Games</h3>
    </div>
    <div class="description-txt expand m-b">
        <?php echo $network['table_games'];?>

    </div>
</div>
<!-- Table-games-block ========= END -->
<!-- games-block ========= START -->

<div class="block">
    <h3 class="h3">Games Available</h3>
    <!-- list "games" -->

    <ul class="list-icon list-icon-sm m-b-0">
    <?php $games = explode("\n", $network['games_available']);
                  foreach ($games as $game) {?>
                  
                          <li class="list-icon-item"><span class="list-icon-ico text-primary"><i
                                                        class="fa fa-check"></i></span><?php echo $game;?>
        </li>
        <?php } ?>
    </ul>
</div>
<!-- /thumbslot-logo-->

<!-- SLOT INDEX LOGO -->
<!-- thumbslot-logo -->

<!-- /thumbslot-logo-->
<!-- games-block ========= END -->
<!-- cashier-block ========= START -->
<div class="cashier-block">
    <div class="heading">
        <h2 class="h2">Cashier</h2>
    </div>
    <div class="description-txt expand m-b">
       <?php echo $network['cashier'];?>
    </div>
    <div class="m-b-md">
        <h3 class="h3 m-b">Deposit/Withdrawal Methods</h3>
        <div class="row">
            <div class="col-md-9">
                <p class="m-b-10">You can pay by:</p>
                <!-- list "pay by" -->
                <div class="list-icon list-icon-sm">
                   <div class="col-xs-12 m-b-10 decrease">
                   <div class="row">
				 <?php $deposit_options = explode("\n", $network['deposit_options']);
                  foreach ($deposit_options as $deposit) {?>
	                   <span class="list-icon-item"><span class="list-icon-ico text-primary"><i class="fa fa-check"></i></span><?php echo $deposit ;?> </span>
<?php } ?>
					</div></div>
                       
                </div>
            </div>
            <div class="col-md-6">
                <p class="m-b-10">You can withdraw by:</p>
                <!-- list "withdraw by" -->
                <div class="list-icon list-icon-sm">
                    <div class="col-xs-12 m-b-10 decrease">
                    <div class="row">
                    <?php $withdraw_options = explode("\n", $network['withdraw_options']);
                  foreach ($withdraw_options as $withdraw) {?>
                        <span class="list-icon-item"><span class="list-icon-ico text-primary"><i class="fa fa-check"></i></span> <?php echo $withdraw;?></span>
                        <?php } ?>
                        </div>
                     </div>
                </div>
            </div>
        </div>
    </div>
    <div class="m-b-0">
        <div class="row">
            <div class="col-md-9 m-b-md">
                <h3 class="h3 m-b">Withdrawal Times/Limits</h3>
                <!-- list "times/limits" -->
                <ul class="list-icon list-icon-sm m-b-0">
                <?php $support_types = explode("\n", $network['support_types']);
                  foreach ($support_types as $support) {?>
                    <li class="list-icon-item decrease"><span class="list-icon-ico text-primary"><i class="fa fa-clock-o"></i></span><?php echo $support;?></li>
                    <?php } ?>
                </ul>
            </div>
            <div class="col-md-6">
                <h3 class="h3 m-b">Currencies</h3>
                <p class="m-b-10">Several major currencies are accepted</p>
                <!-- list "currencies" -->
                <div class="list-icon list-icon-sm">
                  	  <div class="col-xs-12 m-b-10 decrease">
                    <div class="row">
                <?php $currency = explode("\n", $network['currency']);
                  foreach ($currency as $cur) {?>
                            <span class="list-icon-item"><span class="list-icon-ico text-primary"><i class="fa fa-check"></i></span> <?php echo $cur;?></span>

                <?php } ?>
                        </div>
	                </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- cashier-block ========= END -->
<!-- languages-block ========= START -->
<div class="block">
    <h2 class="h2">Languages</h2>
    <!-- list "languages" -->
    <div class="list-icon list-icon-sm">
        <div class="row">
    <?php $languages = explode("\n", $network['languages']);
                  foreach ($languages as $language) {?>
            <div class="col-md-3 col-xs-8 m-b-10 decrease">
                <span class="list-icon-item"><span class="list-icon-ico text-primary"><i
                                                        class="fa fa-check"></i></span> <?php echo $language;?> </span>
            </div>
<?php } ?>        
    </div>
</div>
<br /><br />
<!-- languages-block ========= END -->
<!-- restricted-countries-block ========= START -->
<div class="block">
    <h2 class="h2">Restricted Countries</h2>
    <p class="m-b-10">Players from the following countries won&#039;t be able to play at <?php $offer['title'];?></p>
    <!-- list "restricted-countries" -->
    <div class="list-icon list-icon-sm">
         <div class="row">
           <div class="col-md-7 col-xs-8 m-b-10 decrease">
     <?php $countries = explode("\n", $network['countries']);
                  foreach ($countries as $country) {?>         
                <span class="list-icon-item"><span class="list-icon-ico text-primary"><i
                                                        class="fa fa-close"></i></span> <?php echo $country;?></span>
            
 <?php } ?>   
			 </div>
        </div>
    </div>
</div>
<!-- restricted-countries-block ========= END -->
<!-- promos/bonuses-block ========= START -->
<div class="block">
    <h2 class="h2">Welcome Bonus</h2>
    <!-- list "promos/bonuses" -->
    <ul class="list-icon list-icon-sm m-b-0">
        <li class="list-icon-item decrease"><span class="list-icon-ico text-primary"><i class="fa fa-check"></i></span> <?php echo $offer['bonus_percent'];?>% match bonus of up to <?php echo $offer['bonus_percent'];?> for the first deposit of at least <?php echo $offer['minimum_deposit'];?>, as well as 100 free spins </li>
    </ul>
</div>
<!-- promos/bonuses-block ========= END -->


<!-- wagering_requirements-block ========= START -->
<div class="block">
    <div class="heading">
        <h2 class="h2">Wagering Requirements</h2>
    </div>
    <div class="description-txt expand m-b">
       <?php echo $network['wagering'];?>
    </div>
</div>
<!-- wagering_requirements-block ========= END -->
<!-- High Rollers-block ========= START -->
<div class="block">
    <div class="heading">
        <h3 class="h3">High Rollers</h3>
    </div>
    <div class="description-txt expand m-b">
         <?php echo $network['rollers'];?>

    </div>
</div>
<!-- High Rollers-block ========= END -->
<!-- High Rollers-block ========= START -->
<div class="block">
    <div class="heading">
        <h2 class="h2">Device Compatibility</h2>
    </div>
    <div class="heading">
        <h3 class="h3">Desktop, Tablet and Mobile Experience</h3>
    </div>
    <div class="description-txt expand m-b">
        <?php echo $network['device'];?>

    </div>
</div>
<!-- High Rollers-block ========= END -->
<!-- App Review-block ========= START -->
<div class="block">
    <div class="heading">
        <h3 class="h3">App Review</h3>
    </div>
    <div class="description-txt expand m-b">
         <?php echo $network['app_review'];?>

    </div>
</div>
<!-- App Review-block ========= END -->
<!-- App Review-block ========= START -->
<div class="block">
    <div class="heading">
        <h2 class="h2">Contact Details:</h2>
    </div>
    <div class="description-txt expand m-b">
        <?php echo $network['contact'];?>
    </div>
</div>
<!-- App Review-block ========= END -->
<!-- review-summary-block ========= START -->
<div class="review-summary-block block bg-faded row-out">
    <div class="paddings">
        <div class="heading heading-title">
            <h2 class="h2"><?php echo $offer['title'];?> review summary</h2>
        </div>
        <div class="description-txt expand">
			  <?php echo $offer['review'];?>
        </div>
    </div>
</div>
<!-- review-summary-block ========= END -->
<!-- sidebar-block ========= START -->
<div class="block hidden-md-up">
    <div class="col-md-15">
        <div class="review-checks-sidebar m-b-32">
            <div class="review-checks">
                    <?php $features = explode("\n", $offer['features']);
                        
                        foreach ($features as $feature) {?>
                        <div class="review-check">
                		    <i class="fa fa-check text-primary"></i><span><?php echo $feature;?></span>
			                </div>
				<?php } ?>
            </div>
        </div>
    </div>
    <div class="col-md-15">
        <div class="variant m-b-32">
            <i class="fa fa-size"></i>
            <p class="small">Device Compatibility</p>
        </div>
    </div>
    <div class="col-md-15">
        <div class="bg-faded row-out">
            <div class="text-center p-a-md">
                <div class="m-b-10 decrease">
                    <span class="text-default">Launched
                                            :</span>
                    <p><?php echo $offer['founded'];?></p>
                </div>
                <div class="m-b-10 decrease">
                    <span class="text-default">Licensed
                                            :</span>
                    <p>
                        <?php echo $offer['licensed'];?>
                    </p>
                </div>
                <div class="m-b-10 decrease">
                    <span class="text-default">Owned by
                                            :</span>
                    <p><?php echo $offer['network'];?></p>
                </div>
                <div class="m-b-10 decrease">
                    <span class="text-default">Payout %
                                            :</span>
                    <p><?php echo $offer['payout_percent'];?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- sidebar-block ========= END -->
</div>
<!-- Online Review CONTENT ========= END -->
</div>
</div>

<div class="height-sticky-extra">
    <hr class="m-t-0 m-b-lg hidden-sm-down">
    <!-- SLOT INDEX LOGO -->
    <div class="container">
        <div class="thumbslot-heading">
            <div class="heading text-center">
                <h4 class="h4">If you like <?php echo $offer['title'];?>, you might also like these online casinos:</h4>
            </div>
        </div>
           <div class="thumbslot-wrapper thumbslot-wrapper-logo">
        <?php 
		$sql_alloffers = 'select * from `offers` WHERE  `category` =  '.$offer['category'].'  Limit 0,4 ';
$res_alloffers = mysqli_query($con, $sql_alloffers ) or die( 'MySQL Error: ' . mysqli_error() );
while($alloffer = mysqli_fetch_array($res_alloffers)) {
?>
        <!-- thumbslot-logo -->
     

            <div class="thumbslot thumbslot-logo">
                <a href="game.php?id=<?php echo $alloffer['id'];?>" class="thumbslot-box">
                    <div class="thumbslot-img" style="background-color: #<?php echo $alloffer['bg_color'];?>">
                        <picture>
                        <img alt="" src="<?php echo $alloffer['logo'];?>">
                        </picture>
                    </div>

                    <div class="thumbslot-logo-title"><?php echo $alloffer['title'];?></div>
                </a>
            </div>
        <?php } ?>
        </div>
    </div>
</div>

<!-- /SLOT INDEX LOGO -->
</div>
<!-- Exit modal Rizk ========= START -->
<div id="ouibounce-modal">
    <div class="underlay"></div>
    <div class="modal modal-light" style="background-color: #222; background-image: url('uploads/bg.jpeg'); box-shadow: inset 0 0 0 1000px rgba(0, 0, 0, .2); padding: 2.5rem 5.5rem 3.5rem; ">
        <p class="lead text-inverse" style="text-shadow: 2px 2px 2px #000000;"><?php echo $offer['badge'];?></p>
        <div class="modal-img" style="margin-bottom: 0px;">
            <img src="<?php echo $offer['logo'];?>">
        </div>
        <h1 class="text-inverse" style="text-shadow: 2px 2px 2px #000000;">Tried <?php echo $offer['title'];?> Yet?</h1>
        <p class="lead text-inverse" style="text-shadow: 2px 2px 2px #000000;">Get <?php echo $offer['bonus_percent'];?>% up to <?php echo $offer['bonus_amount'];?></p>
        <p class="lead text-inverse" style="text-shadow: 2px 2px 2px #000000;"><?php echo $offer['bonus_code'];?>. Claim Today!</p>
        <br>
        <a href="<?php echo $offer['aff_url'];?>" target="_blank" type="button"
            class="btn btn-secondary btn-icon" style="background-color: #f6d100; border-color: #f6d100; color: #000000;"><span
                            class="ico-left" style="color: #d2df05;"></span>Claim Bonus Now at <?php echo $offer['title'];?><span
                            class="ico-right"><i class="fa fa-caret-right" style="color: #000;"></i></span>
                </a>
        <div class="modal-close">
        </div>
    </div>
</div>
<!-- Exit modal Rizk ========= END -->
</main>
</main>
<!--added button scroll-top-->
<div class="scroll-top fixed">
    <a href="#scroll-top" role="button" class="btn btn-primary btn-xs btn-scroll">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" enable-background="new 0 0 16 16" xml:space="preserve">
                        <polygon fill="#FFFFFF" points="8,2.8 16,10.7 13.6,13.1 8.1,7.6 2.5,13.2 0,10.7 " />
                    </svg>
    </a>
</div>
<?php include('inc/foot.php');?>