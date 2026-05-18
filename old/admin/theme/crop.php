<!-- BEGIN PAGE CONTAINER-->
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
        <li><a href="#" class="active">Network</a> </li>
      </ul>
      <div class="page-title"> <i class="icon-custom-left"></i>
        <h3><span class="semi-bold">Add/Update Network</span></h3>
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
                <div class="col-md-12">
                           
                    <div class="row form-row">
                      <div class="col-md-8">
                        <p>Name</p>
                        <input value="<?php echo $farmers['network']; ?>" name="network" id="network" type="text"  class="form-control required" placeholder="Network Name" > 
                      </div>
                      <!-- <div class="col-md-7">
                        <input value="" name="form3LastName" id="form3LastName" type="text"  class="form-control" placeholder="Last Name">
                      </div> -->
                    </div>

                     <div class="row form-row">
                      <div class="col-md-6">
                        <p>Crop Type</p>
                        <select name="type" id="form3Gender" class="select2 form-control"  >
                          <option <?php if($crop['type']=='rabi'){ echo 'selected="selected"';} ?> value="rabi">Rabi</option>
                          <option  <?php if($crop['type']=='kharif'){ echo 'selected="selected"';} ?> value="kharif">Kharif</option>
                        </select>
                      </div>
                      <div class="col-md-6">
                        <p>Crop Status</p>
                        <select name="status" id="form3Gender" class="select2 form-control"  >
                          <option <?php if($crop['status']=='1'){ echo 'selected="selected"';} ?> value="1">Active</option>
                          <option  <?php if($crop['status']=='2'){ echo 'selected="selected"';} ?> value="2">In-Active</option>
                        </select>
                      </div>
                      
                    </div>
                    <div class="clearfix"></div>
                    <br/>
                    <div class="row form-row">
                      
                      <div class="col-md-12">
                        
                      <p>Crop Details</p>
                      <textarea name="details" class="form-control"><?php echo $crop['details']; ?></textarea>
                      </div>

                     
                    </div>


                     <div class="row small-text">
                  <p class="col-md-12">
                  NOTE - Facts to be considered, Simply remove or edit this as for what you desire. Disabled font Color and size
                  </p>
                  </div>


                </div>
                
              </div>
				<div class="form-actions">
					<!-- <div class="pull-left">
					  <div class="checkbox checkbox check-success 	">
						<input type="checkbox" value="1" id="chkTerms">
						<label for="chkTerms">I Here by agree on the Term and condition. </label>
					  </div>
					</div> -->
					<?php
					if(isset($_GET['id']) && ($_GET['id']>0)){
						echo '<input type="hidden" name="crop_id" value="'.$_GET['id'].'">';
					}
					?>
					<input type="hidden" name="submit" value="crop_add">
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