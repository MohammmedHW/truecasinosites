<?php
include(realpath(dirname(__FILE__)).'/admin/function/config.php');
$pageslug = $_GET['slug'];
$where = " WHERE `ishome` =1";
$ishome = 1;
$category = 1;
if($pageslug){
	$where = " WHERE `slug` LIKE '".$pageslug."'";
	$ishome = 0;
	$category = 0;
	}
$sql_pages = 'select * from `pages` '.$where.'  ';
$res_pages = mysqli_query($con, $sql_pages ) or die( 'MySQL Error: ' . mysqli_error() );
$page = mysqli_fetch_array($res_pages);
//	print_r($pages);

if($page['iscategory']){
$category = $page['id'];
}
	
include(realpath(dirname(__FILE__)).'/inc/header.php'); 
include(realpath(dirname(__FILE__)).'/inc/menu.php');
?>
  <main class="main">
<?php 
if($page['content']){?>
<div class="container">
           <br>
            <div class="heading heading-title">
                <h1 class="display-4"><?php echo $page['name'];?></h1>
            </div>
            <div class="row">
                <div class="col-md-14">
			<?php echo $page['content'];?>
                    <br>
                </div>
            </div>
        </div>


<?php
}else {

?>

      
            <!-- description-block ========== START ========== -->
        <?php 
		if($category){
		echo $page['top_desc'];?>
        
        <div class="rated-block">
            <div class="container">
                <div class="paypal-title">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="heading">
                                <h4 class="h4"><i class="fa fa-thumbs-up" style="font-size: 32px;color: red;"></i> <?php echo $page['heading'];?></h4>
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
<?php
$where = '';
if(!$ishome){
	$where = ' WHERE `category` ="'.$category.'" ';
	}
$sql_offers = 'select * from `offers` '.$where.'  ORDER BY `ranking` DESC  ';
$res_offers = mysqli_query($con, $sql_offers ) or die( 'MySQL Error: ' . mysqli_error() );
$i=0;

while($offer = mysqli_fetch_array($res_offers)){
$sql_network = 'select * from `network` WHERE `id`  = "'.$offer['network'].'"';
$res_network = mysqli_query($con, $sql_network ) or die( 'MySQL Error: ' . mysqli_error() );
$network = mysqli_fetch_array($res_network);
		$i++;
?>                                            
                            
<li class="rated-item rated-item-relative rated-item-relative-pb paypal-item item-mobile rated-item-view">
    <div class="row">
        <div class="col-img">
            <div class="img-holder">
                <div class="img-box" style="background:#<?php echo $offer['bg_color'];?>">
                        <a class="reviews-link" href="game.php?id=<?php echo $offer['id'];?>" target="_blank">
                                <img class="responsive-img" alt="" src="<?php echo $offer['logo'];?>">
                            </a>
                                                                </div>

                <div class="top-number">
                    <p class="h4"><?php echo $i;?></p>
                </div>
            </div>
        </div>
        <div class="col-doubled col-doubled-top hidden-sm-down col-doubled-top-light">
            <div class="row">
                <div class="col-rating">
                    <div class="rating m-a-0">
                        <div class="rating-row" style="color:#ffce1b !important; font-size:20px;">
                            <div class="result-text"></div>
                            <input type="hidden" class="rating-tooltip" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="2"  data-votes="<?php echo $offer['rating_n'];?>" value="<?php echo $offer['rating'];?>">
                            <p class="result text-default"><span class="result-value"><?php echo $offer['rating_n'];?></span> user ratings</p>
                        </div>

                                                <a class="reviews-link" href="game.php?id=<?php echo $offer['id'];?>" target="_blank">Expert Review <i class="fa fa-caret-right vertical"></i></a>
                                            </div>
                </div>
                <div class="col-bonus hidden-sm-down">
                    <div class="bonus">
                        <p class="small" style="color:"><?php echo $offer['bonus_percent'];?>% Up To</p>
                        <p class="bonus-value"><?php echo $offer['bonus_amount'];?></p>
                        <p class="small"><?php echo $offer['bonus_code'];?></p>
                        <div class="popover-block">
                            <a href="#" class="popover-link small dashed">Terms apply</a>
                            <div class="webui-popover-content">
                                <?php echo $offer['terms'];?>
                                <a href="<?php echo $offer['aff_url'];?>"
                                    target="_blank" role="button" class="btn btn-secondary btn-xs btn-icon font-weight-normal">Claim  Bonus <span class="ico-right"><i class="fa fa-caret-right"></i></span></a>
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
                            <img src="<?php echo $offer['badge_image'];?>" width="50" height="50" alt="<?php echo $offer['badge'];?>">
                        </div>
                        <div class="hidden-sm-down">
                            <img src="<?php echo $offer['badge_image'];?>" width="50" height="50" alt="<?php echo $offer['badge'];?>">
                        </div>
                        <p class="small"><?php echo $offer['badge'];?></p>
                    </div>
                </div>
                <div class="col-bonus hidden-md-up">
                    <div class="bonus m-t-0">
                        <p class="small" style="color:"><?php echo $offer['bonus_percent'];?>% Up To</p>
                        <p class="bonus-value"><?php echo $offer['bonus_amount'];?></p>
                        <p class="small"><?php echo $offer['bonus_code'];?></p>
                        <div class="popover-block">
                            <a href="#" class="popover-link small dashed">Terms apply</a>
                            <div class="webui-popover-content">
                                <?php echo $offer['terms'];?>
                                <a href="<?php echo $offer['aff_url'];?>"
                                   target="_blank" role="button" class="btn btn-secondary btn-xs btn-icon font-weight-normal">Claim  Bonus <span class="ico-right"><i class="fa fa-caret-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-time">
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
        </div>
        <div class="col-button">
            <a href="<?php echo $offer['aff_url'];?>"
                role="button" target="_blank" class="btn btn-secondary btn-icon">Claim Bonus
                <span class="txt-add">Go to <?php echo $offer['title'];?><span class="ico-right"><i class="fa fa-caret-right"></i></span></span>
            </a>
<!--                            <a href="#" class="hidden-lg-down link-url" target="_blank">www.slotsmillion.com/Spin</a> -->
                        <div class="col-rating hidden-md-up">
                <div class="rating m-a-0">
                    <div class="rating-row">
                        <input type="hidden" class="rating-tooltip" data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="2" data-votes="<?php echo $offer['ratings_n'];?>" value="<?php echo $offer['ratings'];?>">
                        <p class="result text-default"><span class="result-value"><?php echo $offer['ratings_n'];?></span> user ratings</p>
                    </div>
                                        <a class="reviews-link" href="game.php?id=<?php echo $offer['id'];?>" target="_blank">Expert Review <i class="fa fa-caret-right vertical"></i></a>
                                    </div>
            </div>
        </div>
    </div>
</li>                                                    
<?php  } ?>

                </ol>

                <div class="rated-footer">
                    <div class="rated-item item-collapse">
                        <div class="row">
                            <div class="col-lg-half">

                                                                    <a href="compare.php" class="link"><span
                                                class="txt-new">NEW </span> Try our side-by-side feature comparison tool
                                        <i class="fa fa-angle-right"></i></a>
                                                            </div>
                            <div class="col-lg-half">
                                <p class="collapse-toggle m-b-0"><span
                                            class="collapse-toggle-txt">Show our review and rating criteria </span><span
                                            class="collapse-toggle-txt"
                                            style="display: none;">Hide our review and rating criteria</span>&ensp;<i
                                            class="fa fa-angle-right"></i>
                                </p>
                            </div>
                        </div>
                        <div class="collapse-content">
                            <div class="collapse-inner"><?php echo $setting['about'];?></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <!-- rated-paypal-update block ========== END ========== -->
        <!-- description-block ========== START ========== -->
        <?php echo $page['foot_desc'];
		}
}
		?>
        </div>

    
    </main>
<?php include('inc/foot.php');?>