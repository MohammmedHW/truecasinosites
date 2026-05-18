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
        <li><a href="#" class="active">Training Details come here</a> </li>
      </ul>
      <div class="page-title"> <i class="icon-custom-left"></i>
        <h3>Form - <span class="semi-bold">Add training ()</span></h3>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="grid simple">
            <div class="grid-title no-border">
              <h4>training की <span class="semi-bold">जानकारी यहां भरे !! </span></h4>
              <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
            </div>
            <div class="grid-body no-border">
			<form class="form-no-horizontal-spacing validation" id="myform" action="php/training.php" method="post" role="form">	
              <div class="row column-seperation">
                <div class="col-md-6">
                  <h4>Basic Information</h4>            
                    <div class="row form-row">
                      <div class="col-md-6">
                         <p>Training Title</p>
                        <input value="<?php echo $training['title']; ?>" name="title" id="form3FirstName" type="text"  class="form-control required" placeholder=" " > 
                      </div>
                      <div class="col-md-6">
                        <p>Select Organized Staff</p>
                       

                         <select  name="contact_staff_id"  style="width:100%"  class="select2 form-control">
                           
                            <?php
                           foreach ($staffs as $key => $staff) {
                              $checked = '';
                              if ($staff['sid'] == $training['contact_staff_id']){
                                $checked = 'selected="selected"';
                              }

                              echo ' <option '.$checked.' value="'.$staff['sid'].'">'.$staff['name'].'</option>';
                           }
                           ?>
                          </select>
                     
                      </div>
                    </div>
                    <div class="row form-row">
                      
                      <div class="col-md-12">
                         <p>Start date</p>
                        <input type="text" placeholder=" " class="form-control" id="form3DateOfBirth" name="startdate" value="<?php echo $training['startdate']; ?>">
                      </div>
                    </div>
                    <div class="row form-row">
                      <div class="col-md-12">
                         <p>End Date</p>
                        <input value="<?php echo $training['enddate']; ?>" name="enddate" id="form3Occupation" type="text"  class="form-control" placeholder=" ">
                      </div>
                    </div>
                   
                    <div class="row form-row">
                      <div class="col-md-12">
                         <p>Email</p>
                        <input value="<?php echo $training['email']; ?>" name="email" id="form3Email" type="text"  class="form-control" placeholder="email@address.com">
                      </div>
                    </div>

                    <div class="row form-row">
                      <div class="col-md-6">
                         <p>Contact Person Phone</p>
                        <input value="<?php echo $training['phone']; ?>" name="phone" id="form3TeleCode" type="text"  class="form-control" placeholder="Phone Number">
                      </div>
                      <div class="col-md-6">
                        <p>Contact Person Mobile</p>
                        <input value="<?php echo $training['mobile']; ?>" name="mobile" id="form3TeleNo" type="text"  class="form-control" placeholder="Phone Number">
                      </div>
                    </div>

                    <div class="row form-row">
                      <div class="col-md-12">
                        <p> Status</p>
                        <select name="status" id="form3Gender" class="select2 form-control"  >
                          <option <?php if($training['status']=='1'){ echo 'selected="selected"';} ?> value="1">Active</option>
                          <option  <?php if($training['status']=='2'){ echo 'selected="selected"';} ?> value="2">In-Active</option>
                        </select>
                      </div>

                      
                      
                    </div>


                </div>

                <div class="col-md-6">
				
                  <h4>Postal Information</h4>
                  
                    <div class="row form-row">
                      <div class="col-md-12">
                         <p>Address Line 1</p>
                        <input value="<?php echo $training['add1']; ?>" name="add1" id="form3Address" type="text"  class="form-control" placeholder="Address 1">
                      </div>
                    </div>
                    <div class="row form-row">
                      <div class="col-md-6">
                        <p>Address Line 2</p>
                        <input value="<?php echo $training['add2']; ?>" name="add2" id="form3Address" type="text"  class="form-control" placeholder="Address 2">
                      </div>

                      

                      <div class="col-md-6">
                        <p>Taluka</p>
                        <input value="<?php echo $training['taluka']; ?>" name="taluka" id="form3Country" type="text"  class="form-control" placeholder="taluka">
                      </div>
                    </div>
                    <div class="row form-row">
                      <div class="col-md-6">
                        <p>Village</p>
                        <input value="<?php echo $training['village']; ?>" name="village" id="form3City" type="text"  class="form-control" placeholder="village">
                      </div>

                      <div class="col-md-6">
                         <p>Pin Code</p>
                        <input value="<?php echo $training['pin']; ?>" name="pin" id="form3Address" type="text"  class="form-control" placeholder="Pin Code">
                      </div>
                      
                      
                    </div>
                    <div class="row form-row">
                      
                      <div class="col-md-6">
                        <p>District</p>
                        <input value="<?php echo $training['district']; ?>" name="district" id="form3City" type="text"  class="form-control" placeholder="City">
                      </div>

                      <div class="col-md-6">
                        <p>State</p>
                        <input value="<?php echo $training['state']; ?>" name="state" id="form3State" type="text"  class="form-control" placeholder="State">
                      </div>
                     
                    </div>
                    
                   <!--  <div class="row small-text">
					<p class="col-md-12">
					NOTE - Facts to be considered, Simply remove or edit this as for what you desire. Disabled font Color and size
					</p>
					</div> -->
             
                </div>

                <div class="clearfix"></div>

                <div class="col-md-12">
        
                  <h4>More Information</h4>

                    <div class="row form-row">
                      
                      <div class="col-md-6">
                        <p>Details</p>
                      
                      <textarea name="details" class="form-control"><?php echo $training['details']; ?></textarea>
                      </div>

                      <div class="col-md-6">
                        <p>Training Type</p>
                        <select name="type" id="form3Gender" class="select2 form-control"  >
                          <option <?php if($training['type']=='staff'){ echo 'selected="selected"';} ?> value="staff">Staff</option>
                          <option  <?php if($training['type']=='farmer'){ echo 'selected="selected"';} ?> value="farmer">Farmer</option>
                        </select>
                      </div>

                     
                    </div>

                    <div class="row form-row">
                      
                      <div class="col-md-12">
                        <p>Points_covered</p>
                      
                      <textarea name="points_covered" class="form-control"><?php echo $training['points_covered']; ?></textarea>
                      </div>

                   

                     
                    </div>

                    <div class="row form-row">
                      
                      <div class="col-md-6">
                        <p>trainers</p>
                      
                      <textarea name="trainers" class="form-control"><?php echo $training['trainers']; ?></textarea>
                      </div>

                        <div class="col-md-6">
                        <p>attandies</p>
                      
                      <textarea name="attandies" class="form-control"><?php echo $training['attandies']; ?></textarea>
                      </div>

                   

                     
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
						echo '<input type="hidden" name="training_id" value="'.$_GET['id'].'">';
					}
					?>
					<input type="hidden" name="submit" value="training_add">
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
<!-- BEGIN CORE JS FRAMEWORK