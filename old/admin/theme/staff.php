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
        <li><a href="#" class="active">Staff Details</a> </li>
      </ul>
      <div class="page-title"> <i class="icon-custom-left"></i>
        <h3>Form - <span class="semi-bold">Add/Update Staff</span></h3>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="grid simple">
            <div class="grid-title no-border">
              <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
            </div>
            <div class="grid-body no-border">
			<form class="form-no-horizontal-spacing validation" id="myform" action="php/staff.php" method="post" role="form">	
              <div class="row column-seperation">
                <div class="col-md-6">
                  <h4>Basic Information</h4>            
                    <div class="row form-row">
                      <div class="col-md-12">
                         <p>Name</p>
                        <input value="<?php echo $farmer['name']; ?>" name="name" id="name" type="text"  class="form-control required" placeholder="Name" > 
                      </div>
                      <!-- <div class="col-md-7">
                        <input value="" name="form3LastName" id="form3LastName" type="text"  class="form-control" placeholder="Last Name">
                      </div> -->
                    </div>
                    <div class="row form-row">
                      
                      <div class="col-md-12">
                         <p>Phone</p>
                        <input type="text"  class="form-control" id="phone" name="phone" placeholder="Phone" value="<?php echo $farmer['phone']; ?>">
                      </div>
                    </div>
                    <div class="row form-row">
                      <div class="col-md-12">
                         <p>Mobile</p>
                        <input value="<?php echo $farmer['mobile']; ?>" name="mobile" id="mobile" type="text"  class="form-control" placeholder="Mobile">
                      </div>
                    </div>
                   
                    <div class="row form-row">
                      <div class="col-md-12">
                         <p>E-mail</p>
                        <input value="<?php echo $farmer['email']; ?>" name="email" id="email" type="text"  class="form-control" placeholder="E-mail">
                      </div>
                    </div>
                    <div class="row form-row">
                      <div class="col-md-12">
                        <p> Status</p>
                        <select name="status" id="form3Gender" class="select2 form-control"  >
                          <option <?php if($farmer['status']=='Active'){ echo 'selected="selected"';} ?> value="Active">Active</option>
                          <option  <?php if($farmer['status']=='In-Active'){ echo 'selected="selected"';} ?> value="In-Active">In-Active</option>
                        </select>
                      </div>
                    </div>


                </div>
                <div class="col-md-6">
				
                  <h4>Address</h4>
                  
                    <div class="row form-row">
                      <div class="col-md-12">
                         <p>Address 1</p>
                        <input value="<?php echo $farmer['add1']; ?>" name="add1" id="add1" type="text"  class="form-control" placeholder="Address 1">
                      </div>
                                         <div class="col-md-12">
                        <p>Address 2</p>
                        <input value="<?php echo $farmer['add2']; ?>" name="add2" id="add2" type="text"  class="form-control" placeholder="Address 2">
                      </div>
                    </div>
                    <div class="row form-row">
                     <div class="col-md-6">
                        <p>City</p>
                        <input value="<?php echo $farmer['city']; ?>" name="city" id="city" type="text"  class="form-control" placeholder="City">
                      </div>   
                      <div class="col-md-6">
                        <p>Pincode</p>
                        <input value="<?php echo $farmer['pin']; ?>" name="pin" id="pin" type="text"  class="form-control" placeholder="Pincode">
                      </div>
                    </div>
                    <div class="row form-row">
                      <div class="col-md-6">
                        <p>State</p>
                        <input value="<?php echo $farmer['state']; ?>" name="state" id="state" type="text"  class="form-control" placeholder="State">
                      </div>

                      <div class="col-md-6"P
                        <p>Country</p>
                        <input value="<?php echo $farmer['country']; ?>" name="country" id="country" type="text"  class="form-control" placeholder="Country">
                      </div>
                      
                      
                    </div>
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
						echo '<input type="hidden" name="id" value="'.$_GET['id'].'">';
					}
					?>
					<input type="hidden" name="submit" value="staff_add">
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