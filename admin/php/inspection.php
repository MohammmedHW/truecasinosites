<?php
include(realpath(dirname(dirname(__FILE__))).'/function/config.inc.php'); 
extract($_POST);

if((isset($_REQUEST['submit'])) && ($_REQUEST['submit']=='inspection_add')){


    $data = array(

        'name_ins' => $_POST['name_ins'],
        'date' => $_POST['date'],
        'points' => $_POST['points'],
        'staff_id' => $_POST['staff_id'],
        'farmer_id' => $_POST['farmer_id'],
        'season_id' => $_POST['season_id'],
        'remarks' => $_POST['remarks'],
        'type' => $_POST['type'],
        'status' => $_POST['status'],
        'created_at' => strtotime("now"),
        'created_by' => $_SESSION['user_id'],

    );
    
    
    if(isset($_POST['inspection_id'])){
        $data['iid'] = $_POST['inspection_id'];
        $data['updated_at'] = strtotime("now");
        $data['updated_by'] = $_SESSION['user_id'];
        $insert = insert("inspection", $data,"1");
    }else{
        $insert = insert("inspection", $data,"0","1");
    }


    //$insert = insert("inspection", $data,"0","1");
    if($insert) {

        $_SESSION['msg_type'] = 'Success';
        $_SESSION['msg'] = "Traning Add Successfully";

        $goto = '../view_inspection.php'; 
       
        activity_employee($_SESSION['user_id'],'activity_inspection','activity_inspection_successfully'.'#','success');
        
        echo '<script type="text/javascript">window.location.href="'.$goto.'"</script>';
        exit;   

    }else{

        $_SESSION['msg_type'] = "error";
        $_SESSION['msg'] = 'Please Try Again.';
        $goto = '../view_inspection.php';
        echo '<script type="text/javascript">window.location.href="'.$goto.'"</script>';

    }
}

if((isset($_REQUEST['action'])) && ($_REQUEST['action']=='del')){
    $where  = "iid = '".$_GET['id']."' AND `status` IN ('2','1')";
    $inspections = select("inspection", $where ,'', "", "","ASC");

    $inspection = $inspections[0];

    if($inspection['total_rows'] == '0'){

        $_SESSION['msg_type'] = 'Error';
        $_SESSION['msg'] = "inspection Id not found";
        $goto = '../view_inspection.php'; 
        echo '<script type="text/javascript">window.location.href="'.$goto.'"</script>';
        exit; 

    }else{

        $_SESSION['msg_type'] = 'Success';
        $_SESSION['msg'] = "inspection delete Successfully";

        $goto = '../view_inspection.php';
        $where_condition  = array('iid'=>$_GET['id']); 
       // $where_condition  = "cbid = '".$_GET['id']."' ";
        
        delete_status('inspection','iid',$_GET['id']);
        activity_employee($_SESSION['user_id'],'activity_inspection','delete_inspection_successfully'.'#'.$_GET['id'],'success');
        
        echo '<script type="text/javascript">window.location.href="'.$goto.'"</script>';
        exit;  

    }
}


?>


