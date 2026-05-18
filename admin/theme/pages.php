
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
        <li><a href="#" class="active">Pages Details</a> </li>
      </ul>
      <div class="page-title"> <i class="icon-custom-left"></i>
        <h3>Form - <span class="semi-bold">Add/Update Pages</span></h3>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="grid simple">
            <div class="grid-title no-border">
              <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
            </div>
            <div class="grid-body no-border">
			<form class="form-no-horizontal-spacing validation" id="myform" action="php/pages.php" method="post" role="form">	
              <div class="row column-seperation">
                <div class="col-md-12">
                  <h4>Basic Information</h4>            
                    <div class="row form-row">
                      <div class="col-md-6">
                         <p>Name</p>
                        <input value="<?php echo $farmer['name']; ?>" name="name" id="name" type="text"  class="form-control required" placeholder="Name" > 
                      </div>
                      <!-- <div class="col-md-7">
                        <input value="" name="form3LastName" id="form3LastName" type="text"  class="form-control" placeholder="Last Name">
                      </div> -->
                      <div class="col-md-6">
                         <p>Slug</p>
                        <input type="text"  class="form-control" id="slug" name="slug" placeholder="Slug" value="<?php echo $farmer['slug']; ?>">
                      </div>
                    </div>
                   
                    <div class="row form-row">
                      <div class="col-md-6">
                         <p>Page Heading</p>
                        <input value="<?php echo $farmer['heading']; ?>" name="heading" id="heading" type="text"  class="form-control" placeholder="Heading">
                      </div>
                      <div class="col-md-6">
                         <p>Page Subheading</p>
                        <input value="<?php echo $farmer['subheading']; ?>" name="subheading" id="subheading" type="text"  class="form-control" placeholder="subheading">
                      </div>
                    </div>
                    <div class="row form-row">
                      <div class="col-md-6">
                         <p>SEO Title</p>
                        <input value="<?php echo $farmer['title']; ?>" name="title" id="title" type="text"  class="form-control" placeholder="title">
                      </div>
                      <div class="col-md-6">
                         <p>SEO Keywords</p>
                        <input value="<?php echo $farmer['keywords']; ?>" name="keywords" id="keywords" type="text"  class="form-control" placeholder="keywords">
                      </div>
                    </div>
                    <div class="row form-row">
                      <div class="col-md-6">
                         <p>SEO Description</p>
                          <input value="<?php echo $farmer['desci']; ?>" name="desci" id="desci" type="text"  class="form-control" placeholder="desc">
                      </div>
                      <div class="col-md-6">
                         <p>Ranking (Position)</p>
                        <input value="<?php echo $farmer['position']; ?>" name="position" id="position" type="text"  class="form-control" placeholder="position">

                      </div>

                    </div>

                <div class="col-md-6">
     <div class="row form-row">
          <div class="col-md-6">
            Top Menu <input type="checkbox" name="menutop" <?php echo ($farmer['menutop']?'checked="checked"':'');?> value="1"><br>
          </div>
          <div class="col-md-6">
             Foot Menu <input type="checkbox" name="menufoot" value="1" <?php echo ($farmer['menufoot']?'checked="checked"':'');?> >
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
                  <h4>Page Content</h4>
                   <div class="row form-row">
                      <div class="col-md-12">
                        <p>Content</p>
                        <textarea style="width: 100%; height: 200px;" name="content" placeholder="Content"><?php echo $farmer['content']; ?></textarea>
                      </div>   
                    </div>
                </div>

             
                </div>
                <br><br>
 <div style="height: 2px; background-color: #E9ECEE; width: 100%;"></div>
 <br><br>
 <div class="row column-seperation"></div>             </div>

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
<script type="text/javascript">
  function open_popup(url)
{
    var w = 880;
    var h = 570;
    var l = Math.floor((screen.width - w) / 2);
    var t = Math.floor((screen.height - h) / 2);
    var win = window.open(url, 'ResponsiveFilemanager', "scrollbars=1,width=" + w + ",height=" + h + ",top=" + t + ",left=" + l);
}
</script>