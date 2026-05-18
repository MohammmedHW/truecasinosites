<style type="text/css">
  textarea {
    width: 100%;
}
</style>
Networkwithdraw_options<!-- BEGIN PAGE CONTAINER-->
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
        <li><a href="#" class="active">Network Details</a> </li>
      </ul>
      <div class="page-title"> <i class="icon-custom-left"></i>
        <h3>Form - <span class="semi-bold">Add/Update Network</span></h3>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="grid simple">
            <div class="grid-title no-border">
              <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
            </div>
            <div class="grid-body no-border">
			<form class="form-no-horizontal-spacing validation" id="myform" action="php/network.php" method="post" role="form">	
              <div class="row column-seperation">
                <div class="col-md-6">
                  <h4>Basic Information</h4>            
                    <div class="row form-row">
                      <div class="col-md-12">
                         <p>Network Name</p>
                        <input value="<?php echo $farmer['network']; ?>" name="network" id="network" type="text"  class="form-control required" placeholder="Network Name" > 
                      </div>
                      <!-- <div class="col-md-7">
                        <input value="" name="form3LastName" id="form3LastName" type="text"  class="form-control" placeholder="Last Name">
                      </div> -->
                    </div>
                    <div class="row form-row">
                      
                      <div class="col-md-6">
                         <p>Payout Percent</p>
                        <input type="text"  class="form-control" id="payout_percent" name="payout_percent" placeholder="Payout Percent" value="<?php echo $farmer['payout_percent']; ?>">
                      </div>
                      <div class="col-md-6">
                         <p>Rakeback Percent</p>
                        <input type="text"  class="form-control" id="rakeback_percent" name="rakeback_percent" placeholder="Rakeback Percent" value="<?php echo $farmer['rakeback_percent']; ?>">
                      </div>

                    </div>
                    <div class="row form-row">
                      <div class="col-md-6">
                         <p>Minimum Deposit</p>
                        <input value="<?php echo $farmer['minimum_deposit']; ?>" name="minimum_deposit" id="minimum_deposit" type="text"  class="form-control" placeholder="Minimum Deposit">
                      </div>
                      <div class="col-md-6">
                         <p>Founded</p>
                        <input value="<?php echo $farmer['founded']; ?>" name="founded" id="founded" type="text"  class="form-control" placeholder="Founded">
                      </div>
                    </div>

                    <div class="row form-row">
                      <div class="col-md-12">
                         <p>Licensed from</p>
                        <input value="<?php echo $farmer['licensed']; ?>" name="licensed" id="licensed" type="text"  class="form-control" placeholder="Licensed from">
                      </div>
                    </div>
                    <div class="row form-row">
                      <div class="col-md-12">
                         <p>Description</p>
                         <textarea name="description" style="width: 100%;"><?php echo $farmer['description']; ?></textarea>
                      </div>
                   </div>                    
                    <div class="row form-row">
                      <div class="col-md-12">
                         <p>Review</p>
                         <textarea name="review" style="width: 100%;"><?php echo $farmer['review']; ?></textarea>
                      </div>
                   </div>                    
                </div>

                <div class="col-md-6">
        
                  <h4>Network Information</h4>
                  
                    <div class="row form-row">
                      <div class="col-md-6">
                        <p>Currency</p>
                        <textarea name="currency" placeholder="Currency"><?php echo $farmer['currency']; ?></textarea>
                      </div>
                      <div class="col-md-6">
                        <p>Features</p>
                        <textarea name="features" placeholder="Features"><?php echo $farmer['features']; ?></textarea>
                      </div>
                    </div>
                    <div class="row form-row">
                      <div class="col-md-6">
                        <p>Pros</p>
                        <textarea name="pros" placeholder="Pros"><?php echo $farmer['pros']; ?></textarea>
                      </div>
                      <div class="col-md-6">
                        <p>Cons</p>
                        <textarea name="cons" placeholder="Cons"><?php echo $farmer['cons']; ?></textarea>
                      </div>
                    </div>
                    <div class="row form-row">
                     <div class="col-md-6">
                        <p>Deposit Options</p>
                        <textarea name="deposit_options" placeholder="Deposit Options"><?php echo $farmer['deposit_options']; ?></textarea>
                        </div>
                      <div class="col-md-6">
                        <p>Withdraw Options</p>
                        <textarea name="withdraw_options" placeholder="Withdraw Options"><?php echo $farmer['withdraw_options']; ?></textarea>
                      </div>   
                    </div>
                    <div class="row form-row">
                    <div class="col-md-6">
                        <p>Withdrawal Times/Limits</p>
                        <textarea name="support_types" placeholder="Withdrawal Times/Limits"><?php echo $farmer['support_types']; ?></textarea>
                      </div>   
                     <div class="col-md-6">
                        <p>Countries Note Allow</p>
                        <textarea name="countries" placeholder="Countries"><?php echo $farmer['countries']; ?></textarea>
                      </div>   
                     <div class="col-md-6">
                        <p>Languages</p>
                        <textarea name="languages" placeholder="Languages"><?php echo $farmer['languages']; ?></textarea>
                      </div>   
                     <div class="col-md-6">
                        <p>Contact</p>
                        <textarea name="contact" placeholder="Contact"><?php echo $farmer['contact']; ?></textarea>
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
                 <div class="col-md-12">
        
                  <h4>Games Information</h4>
                    <div class="row form-row">
                    <div class="col-md-6">
                        <p>Software</p>
                        <textarea class="richtext" name="software" placeholder="Software"><?php echo $farmer['software']; ?></textarea>
                      </div>   
                     <div class="col-md-6">
                        <p>Games</p>
                        <textarea class="richtext" name="games" placeholder="Games"><?php echo $farmer['games']; ?></textarea>
                      </div>
                    </div>
                    <div class="row form-row">
                    <div class="col-md-6">
                        <p>Slots</p>
                        <textarea class="richtext" name="slots" placeholder="Slots"><?php echo $farmer['slots']; ?></textarea>
                      </div>   
                     <div class="col-md-6">
                        <p>Live Casino</p>
                        <textarea class="richtext" name="live_casino" placeholder="Live Casino"><?php echo $farmer['live_casino']; ?></textarea>
                      </div>
                    </div>                    <div class="row form-row">
                    <div class="col-md-6">
                        <p>Table Games</p>
                        <textarea class="richtext" name="table_games" placeholder="Table Games"><?php echo $farmer['table_games']; ?></textarea>
                      </div>   
                     <div class="col-md-6">
                        <p>Games Available</p>
                        <textarea class="richtext" name="games_available" placeholder="Games Available"><?php echo $farmer['games_available']; ?></textarea>
                      </div>
                    </div>                    <div class="row form-row">
                    <div class="col-md-6">
                        <p>Bingo</p>
                        <textarea class="richtext" name="bingo" placeholder="Bingo"><?php echo $farmer['bingo']; ?></textarea>
                      </div>   
                     <div class="col-md-6">
                        <p>wagering</p>
                        <textarea class="richtext" name="wagering" placeholder="wagering"><?php echo $farmer['wagering']; ?></textarea>
                      </div>
                    </div>
                    <div class="row form-row">  
                    <div class="col-md-6">
                        <p>High Rollers</p>
                        <textarea class="richtext" name="rollers" placeholder="High Rollers"><?php echo $farmer['rollers']; ?></textarea>
                      </div>   
                     <div class="col-md-6">
                        <p>Device Compatiblity</p>
                        <textarea class="richtext" name="device" placeholder="Device Compatiblity"><?php echo $farmer['device']; ?></textarea>
                      </div>
                    </div>
                    <div class="row form-row">
                    <div class="col-md-6">
                        <p>Cashier</p>
                        <textarea class="richtext" name="cashier" placeholder="Cashier"><?php echo $farmer['cashier']; ?></textarea>
                      </div>   
                <div class="col-md-6">
                        <p>App Review</p>
                        <textarea class="richtext" name="app_review" placeholder="App Review"><?php echo $farmer['app_review']; ?></textarea>
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