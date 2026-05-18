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
        <li><a href="#" class="active">Season Details come here</a> </li>
      </ul>
      <div class="page-title"> <i class="icon-custom-left"></i>
        <h3>Form - <span class="semi-bold">Add season (season)</span></h3>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="grid simple">
            <div class="grid-title no-border">
              <h4>season की <span class="semi-bold">जानकारी यहां भरे !! </span></h4>
              <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
            </div>
            <div class="grid-body no-border">
			<form class="form-no-horizontal-spacing validation" id="myform" action="php/season.php" method="post" role="form">	
              <div class="row column-seperation">
                <div class="col-md-12">        
                    <div class="row form-row">
                      <div class="col-md-6">
                        <p>Season Start Date</p>
                        <input type="text" class="form-control" id="sandbox-advance" name="sdate" value="<?php echo $season['sdate']; ?>">
                      </div>

                      <div class="col-md-6">
                         <p>Season End Date</p>
                        <input type="text" class="form-control" id="sandbox-advance1" name="enddate" value="<?php echo $season['enddate']; ?>">
                      </div>
                     
                    </div>


                     <div class="row form-row">
                      <div class="col-md-6">
                        <p>Season Crop Type</p>
                        <select name="type" id="form3Gender" class="select2 form-control"  >
                          <option <?php if($season['type']=='rabi'){ echo 'selected="selected"';} ?> value="rabi">Rabi</option>
                          <option  <?php if($season['type']=='kharif'){ echo 'selected="selected"';} ?> value="kharif">Kharif</option>
                        </select>
                      </div>

                      <div class="col-md-6">
                        <p>Select this season Crops</p>
                       

                         <select id="multi" name="approved_crop[]"  style="width:100%" multiple class="select2 form-control">
                           
                            <?php
                           foreach ($crops as $key => $crop) {
                              $checked = '';
                              if (in_array($crop['cropid'], $approved_sea_crop)){
                                $checked = 'selected="selected"';
                              }

                              echo ' <option '.$checked.' value="'.$crop['cropid'].'">'.$crop['name'].'</option>';
                           }
                           ?>
                          </select>
                     
                      </div>
                      
                    </div>
<div class="clearfix"></div>
                    <br />
                    <div class="row form-row">
                      <div class="col-md-6">
                        <p>Season Crop Status</p>
                        <select name="status" id="form3Gender" class="select2 form-control"  >
                          <option <?php if($season['status']=='1'){ echo 'selected="selected"';} ?> value="1">Active</option>
                          <option  <?php if($season['status']=='2'){ echo 'selected="selected"';} ?> value="2">In-Active</option>
                        </select>
                      </div>

                      
                      
                    </div>

                    <div class="clearfix"></div>
                    <br />

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
						echo '<input type="hidden" name="season_id" value="'.$_GET['id'].'">';
					}
					?>
					<input type="hidden" name="submit" value="season_add">
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