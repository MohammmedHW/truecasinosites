<?php
include(realpath(dirname(dirname(__FILE__))).'/function/config.inc.php'); 
extract($_POST);
if((isset($_REQUEST['submit'])) && ($_REQUEST['submit']=='offer_add')){
$menutop = 0;
$menufoot = 0;
if($_POST['menutop'])
    $menutop = $_POST['menutop'];
if($_POST['menufoot'])
    $menufoot = $_POST['menufoot'];

    $data = array(


        'name' => addslashes($_POST['name']),
        'slug' => addslashes($_POST['slug']),
        'icon' => '',
        'title' => addslashes($_POST['title']),
        'heading' => addslashes($_POST['heading']),
        'subheading' => addslashes($_POST['subheading']),
        'desci' => addslashes($_POST['desci']),
        'keywords' => addslashes($_POST['keywords']),
        'top_desc' => '',
        'foot_desc' => '',
        'menutop' => $menutop,
        'menufoot' => $menufoot,
        'position' => addslashes($_POST['position']),
        'iscategory' => '0',
        'content' => addslashes($_POST['content']),
        'status' =>  '1',
//        'created_at' => strtotime("now"),
 //       'created_by' => $_SESSION['user_id']

    );
    
    
    if(isset($_POST['id'])){
        $data['id'] = $_POST['id'];
//        $data['updated_at'] = strtotime("now");
 //       $data['updated_by'] = $_SESSION['user_id'];
        $insert = insert("pages", $data,"1");
    }else{
        $insert = insert("pages", $data,"0","1");
    }

    //$insert = insert("farmer", $data,"0","1");
    if($insert) {

        $_SESSION['msg_type'] = 'Success';
        $_SESSION['msg'] = "pages Updated Successfully";

        $goto = '../view_pages.php'; 
       
        activity_employee($_SESSION['user_id'],'activity_offer','activity_pages_successfully'.'#','success');
        
        echo '<script type="text/javascript">window.location.href="'.$goto.'"</script>';
        exit;   

    }else{

        $_SESSION['msg_type'] = "error";
        $_SESSION['msg'] = 'Please Try Again.';
        $goto = '../view_pages.php';
        echo '<script type="text/javascript">window.location.href="'.$goto.'"</script>';

    }
}

if((isset($_REQUEST['action'])) && ($_REQUEST['action']=='del')){
    $where  = "id = '".$_GET['id']."'";
    $farmers = select("pages", $where ,'', "", "","ASC");

    $farmer = $farmers[0];

    if($farmer['total_rows'] == '0'){

        $_SESSION['msg_type'] = 'Error';
        $_SESSION['msg'] = "pages Id not found";
        $goto = '../view_pages.php'; 
        echo '<script type="text/javascript">window.location.href="'.$goto.'"</script>';
        exit; 

    }else{

        $_SESSION['msg_type'] = 'Success';
        $_SESSION['msg'] = "pages delete Successfully";

        $goto = '../view_pages.php';
        $where_condition  = array('id'=>$_GET['id']); 
       // $where_condition  = "cbid = '".$_GET['id']."' ";
        
        delete_status('pages','id',$_GET['id']);
        activity_employee($_SESSION['user_id'],'activity_offer','delete_pages_successfully'.'#'.$_GET['id'],'success');
        
        echo '<script type="text/javascript">window.location.href="'.$goto.'"</script>';
        exit;  

    }
}
?>


