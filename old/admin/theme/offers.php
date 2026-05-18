withdraw_options<!-- BEGIN PAGE CONTAINER-->
  <div class="page-content">
    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    <div id="portlet-config" class="modal hide">
      <div class="modal-header">
        <button data-dismiss="modal" class="close" type="button"></button>
        <h3>Widget Settings</h3>
      </div>
      <div class="modal-body"> Widget settings form goes here </div>
    </div>
    <div class="clearfix"></div>
    <div class="content">
<ul class="breadcrumb">
        <li>
          <p>YOU ARE HERE</p>
        </li>
        <li><a href="#" class="active">Offer Details</a> </li>
      </ul>
      <div class="page-title"> <i class="icon-custom-left"></i>
        <h3>Form - <span class="semi-bold">Add/Update Offers</span></h3>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="grid simple">
            <div class="grid-title no-border">
              <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
            </div>
            <div class="grid-body no-border">
			<form class="form-no-horizontal-spacing validation" id="myform" action="php/offers.php" method="post" role="form">	
              <div class="row column-seperation">
                <div class="col-md-6">
                  <h4>Basic Information</h4>            
                    <div class="row form-row">
                      <div class="col-md-12">
                         <p>Title</p>
                        <input value="<?php echo $farmer['title']; ?>" name="title" id="title" type="text"  class="form-control required" placeholder="Title" > 
                      </div>
                      <!-- <div class="col-md-7">
                        <input value="" name="form3LastName" id="form3LastName" type="text"  class="form-control" placeholder="Last Name">
                      </div> -->
                    </div>
                    <div class="row form-row">
                      <div class="col-md-6">
                         <p>Network</p>
                        <select name="network" id="network" class="select2 form-control">
<?php  $sql_network = 'select id,network from `network` ';
$res_network = mysqli_query($con, $sql_network  ) ;
while ($network = mysqli_fetch_array($res_network)){
  $sel  = '';
  if($network['id']==$farmer['network'] )
    $sel  = ' selected="selected" ' ;
  echo '<option  value="'.$network['id'].'" '.$sel.'>'.$network['network'].'</option>';
} ?>
                          
                        </select>
                      </div>
                      <div class="col-md-6">
                         <p>Category</p>
                        <select name="category" id="category" class="select2 form-control">
<?php  $sql_pages_all = 'select id,name from `pages` WHERE `iscategory` =1 ';
$res_pages_all = mysqli_query($con, $sql_pages_all  ) ;
while ($page_menu = mysqli_fetch_array($res_pages_all)){
  $sel  = '';
  if($page_menu['id']==$farmer['category'] )
    $sel  = ' selected="selected" ' ;
    echo '<option value="'.$page_menu['id'].'" '.$sel.' >'.$page_menu['name'].'</option>';
} ?>
                        </select>
                      </div>
                    </div>
                    <div class="row form-row">
                      <div class="col-md-12">
                         <p>Site Name</p>
                        <input value="<?php echo $farmer['site_name']; ?>" name="site_name" id="site_name" type="text"  class="form-control" placeholder="Site Name">
                      </div>
                    </div>
                   
                    <div class="row form-row">
                      <div class="col-md-12">
                         <p>Affiliate  Url</p>
                        <input value="<?php echo $farmer['aff_url']; ?>" name="aff_url" id="aff_url" type="text"  class="form-control" placeholder="Affiliate  Url">
                      </div>
                    </div>

                    <div class="row form-row">
                      <div class="col-md-12">
                         <p>Affiliate Download Url</p>
                        <input value="<?php echo $farmer['aff_download_url']; ?>" name="aff_download_url" id="aff_download_url" type="text"  class="form-control" placeholder="Affiliate Download Url">
                      </div>
                    </div>

 

                </div>
                <div class="col-md-6">
				
                  <h4>Bonus Information</h4>
                  
                    <div class="row form-row">
                      <div class="col-md-6">
                         <p>Bonus Amount</p>
                        <input value="<?php echo $farmer['  bonus_amount']; ?>" name="  bonus_amount" id="  bonus_amount" type="text"  class="form-control" placeholder="Bonus Amount">
                      </div>
                                         <div class="col-md-6">
                        <p>Bonus Percent</p>
                        <input value="<?php echo $farmer['bonus_percent']; ?>" name="bonus_percent" id="bonus_percent" type="text"  class="form-control" placeholder="Bonus Percent">
                      </div>
                    </div>
                    <div class="row form-row">
                     <div class="col-md-6">
                        <p>Bonus Code</p>
                        <input value="<?php echo $farmer['bonus_code']; ?>" name="bonus_code" id="bonus_code" type="text"  class="form-control" placeholder="Bonus Code">
                      </div>   
                      <div class="col-md-6">
                        <p>No Deposite Bonus
                        <input value="1" name="no_dep_bonus" id="no_dep_bonus" type="checkbox"  class="form-control" <?php echo ($farmer['no_dep_bonus']?"checked='checked'":""); ?> ></p>
                      </div>
                    </div>

                    <h4>Ratings</h4>

                    <div class="row form-row">
                      <div class="col-md-12">
                         <p>Ranking (Position)</p>
                        <input value="<?php echo $farmer['ranking']; ?>" name="ranking" id="ranking" type="text"  class="form-control" placeholder="Ranking">
                      </div>

                    </div>
                    <div class="row form-row">
                      <div class="col-md-6">
                         <p>Rating</p>
                        <input value="<?php echo $farmer['rating']; ?>" name="rating" id="rating" type="text"  class="form-control" placeholder="Rating">
                      </div>
                      <div class="col-md-6">
                         <p>Total Ratings(users)</p>
                        <input value="<?php echo $farmer['rating_n']; ?>" name="rating_n" id="rating_n" type="text"  class="form-control" placeholder="Total Ratings(users)">
                      </div>

                    </div>


          					<div class="row form-row">
                      <div class="col-md-12">
                        <p> Status</p>
                        <select name="status" id="form3Gender" class="select2 form-control"  >
                          <option <?php if($farmer['status']=='1'){ echo 'selected="selected"';} ?> value="1">Active</option>
                          <option  <?php if($farmer['status']=='2'){ echo 'selected="selected"';} ?> value="2">In-Active</option>
                        </select>
                      </div>
                    </div>             
                </div>

             
                </div>
                <br><br>
 <div style="height: 2px; background-color: #E9ECEE; width: 100%;"></div>
 <br><br>
 <div class="row column-seperation">


                    <div class="row form-row">
                      <div class="col-md-12">
                         <p>Review</p>
                         <textarea class="richtext" name="review" style="width: 100%;"><?php echo $farmer['review']; ?></textarea>
                      </div>
                   </div>                    
                    <div class="row form-row">
                      <div class="col-md-12">
                         <p>Terms</p>
                         <textarea class="richtext" name="terms" style="width: 100%;"><?php echo $farmer['terms']; ?></textarea>
                      </div>
                   </div>    


                 </div>             </div>

				<div class="form-actions">
					<!-- <div class="pull-left">
					  <div class="checkbox checkbox check-success 	">
						<input type="checkbox" value="1" id="chkTerms">
						<label for="chkTerms">I Here by agree on the Term and condition. </label>
					  </div>
					</div> -->
					<?php
					if(isset($_GET['id']) && ($_GET['id']>0)){
						echo '<input type="hidden" name="id" value="'.$_GET['id'].'">';
					}
					?>
					<input type="hidden" name="submit" value="offer_add">
					<div class="pull-right">
					
					  <input type="submit" name="save" value="Submit" class="btn btn-danger btn-cons">
					  <button class="btn btn-white btn-cons" type="button">Cancel</button>
					</div>
				  </div>
			</form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
<!-- END PAGE -->
<!-- END CONTAINER -->
<!-- BEGIN CORE JS FRAMEWORK-->