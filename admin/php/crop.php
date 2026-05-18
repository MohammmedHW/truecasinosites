<?php
include(realpath(dirname(dirname(__FILE__))).'/function/config.inc.php'); 
extract($_POST);

if((isset($_REQUEST['submit'])) && ($_REQUEST['submit']=='crop_add')){


    $data = array(

        'name' => $_POST['name'],
        'type' => $_POST['type'],
        'details' => $_POST['details'],
        'status' => $_POST['status'],
        'created_at' => strtotime("now"),
        'created_by' => $_SESSION['user_id']

    );
    
    
    if(isset($_POST['crop_id'])){
        $data['cropid'] = $_POST['crop_id'];
        $data['updated_at'] = strtotime("now");
        $data['updated_by'] = $_SESSION['user_id'];
        $insert = insert("crops", $data,"1");
    }else{
        $insert = insert("crops", $data,"0","1");
    }

    
    //$insert = insert("crop", $data,"0","1");
    if($insert) {

        $_SESSION['msg_type'] = 'Success';
        $_SESSION['msg'] = "Crop Add Successfully";

        $goto = '../view_crops.php'; 
       
        activity_employee($_SESSION['user_id'],'activity_crop','activity_crop_successfully'.'#','success');
        
        echo '<script type="text/javascript">window.location.href="'.$goto.'"</script>';
        exit;   

    }else{

        $_SESSION['msg_type'] = "error";
        $_SESSION['msg'] = 'Please Try Again.';
        $goto = '../view_crops.php';
        echo '<script type="text/javascript">window.location.href="'.$goto.'"</script>';

    }
}

if((isset($_REQUEST['action'])) && ($_REQUEST['action']=='del')){
    $where  = "cropid = '".$_GET['id']."' AND `status` IN ('2','1')";
    $crops = select("crops", $where ,'', "", "","ASC");

    $crop = $crops[0];

    if($crop['total_rows'] == '0'){

        $_SESSION['msg_type'] = 'Error';
        $_SESSION['msg'] = "Crop ID not found";
        $goto = '../view_crops.php'; 
        echo '<script type="text/javascript">window.location.href="'.$goto.'"</script>';
        exit; 

    }else{

        $_SESSION['msg_type'] = 'Success';
        $_SESSION['msg'] = "crop delete Successfully";

        $goto = '../view_crops.php';
        $where_condition  = array('cropid'=>$_GET['id']); 
       // $where_condition  = "cropid = '".$_GET['id']."' ";
        
        delete_status('crops','cropid',$_GET['id']);
        activity_employee($_SESSION['user_id'],'activity_crop','delete_crop_successfully'.'#'.$_GET['id'],'success');
        
        echo '<script type="text/javascript">window.location.href="'.$goto.'"</script>';
        exit;  

    }
}

?>


