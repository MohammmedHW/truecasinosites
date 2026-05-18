<?php
include(realpath(dirname(__FILE__)).'/function/config.inc.php');
$pg_title="Farmers";
/*$title['dashboard'] = "Farmers";
$menu_title=$title['Farmers'];
$submenu_title=$title['Farmers'];*/
include(realpath(dirname(__FILE__)).'/php/define.php'); 
include(realpath(dirname(__FILE__)).'/theme/html/header.php'); 
include(realpath(dirname(__FILE__)).'/theme/html/menu.php');



if((isset($_GET['id'])) && ($_GET['id'] > 0)){
	

	$where  = "id = '".$_GET['id']."'";
	$farmers = select("offers", $where ,'', "", "","ASC");

	$farmer = $farmers[0];
	if($farmer['total_rows'] == '0'){
		$_SESSION['msg_type'] = 'Error';
        $_SESSION['msg'] = "Offer ID not found";
		$goto = 'view_offers.php'; 
 		echo '<script type="text/javascript">window.location.href="'.$goto.'"</script>';
        exit; 
	}

}

include(realpath(dirname(__FILE__)).'/theme/'.basename($_SERVER['PHP_SELF']));


include(realpath(dirname(__FILE__)).'/theme/html/footer.php');



?>
<script type="text/javascript" src="plugins/tinymce/tinymce.min.js"></script>
<script type="text/javascript" src="assets/plugins/fancybox/source/jquery.fancybox.pack.js"></script>
<script type="text/javascript">
  tinymce.init({
  selector: '.richtext',
  height: 500,
  theme: 'modern',
//  toolbar: false,
  plugins: 'autoresize bbcode charmap code contextmenu image   searchreplace autolink directionality visualblocks visualchars fullscreen image link media table charmap hr nonbreaking anchor insertdatetime advlist lists textcolor wordcount contextmenu ',
  toolbar1: 'bold italic strikethrough | link | alignleft aligncenter alignright alignjustify  | numlist bullist ',

  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
  ],
  removed_menuitems: 'newdocument',
   relative_urls:false,
    filemanager_title:"Responsive Filemanager",
    filemanager_crossdomain: true,
    external_filemanager_path:"<?php echo $app_vars['website_url'];?>admin/plugins/filemanager/",
    external_plugins: { "filemanager" : "<?php echo $app_vars['website_url'];?>admin/plugins/filemanager/plugin.min.js"},
     image_advtab: true,
  



 });


        function responsive_filemanager_callback(field_id){ 
            console.log(field_id);
            var url=jQuery('#'+field_id).val();
            //alert('update '+field_id+" with "+url); 
            //your code
            $('#image_preview').attr('src',document.getElementById(field_id).value).show();
           // parent.$.fancybox.close();
        } 
        </script>