<?php
include(realpath(dirname(dirname(__FILE__))).'/function/config.inc.php'); 
extract($_POST);

if((isset($_REQUEST['submit'])) && ($_REQUEST['submit']=='training_add')){


    $data = array(

        'title' => $_POST['title'],
        'contact_staff_id' => $_POST['contact_staff_id'],
        'startdate' => $_POST['startdate'],
        'enddate' => $_POST['enddate'],
        'status' => $_POST['status'],
        'email' => $_POST['email'],
        'phone' => $_POST['phone'],
        'mobile' => $_POST['mobile'],
        'add1' => $_POST['add1'],
        'add2' => $_POST['add2'],
        'taluka' => $_POST['taluka'],
        'village' => $_POST['village'],
        'pin' => $_POST['pin'],
        'district' => $_POST['district'],
        'state' => $_POST['state'],
        'created_at' => strtotime("now"),
        'created_by' => $_SESSION['user_id'],
        'attandies' => $_POST['attandies'],
        'trainers' => $_POST['trainers'],
        'points_covered' => $_POST['points_covered'],
        'type' => $_POST['type'],

    );
    
    
    if(isset($_POST['training_id'])){
        $data['tid'] = $_POST['training_id'];
        $data['updated_at'] = strtotime("now");
        $data['updated_by'] = $_SESSION['user_id'];
        $insert = insert("training", $data,"1");
    }else{
        $insert = insert("training", $data,"0","1");
    }


    //$insert = insert("training", $data,"0","1");
    if($insert) {

        $_SESSION['msg_type'] = 'Success';
        $_SESSION['msg'] = "Traning Add Successfully";

        $goto = '../view_training.php'; 
       
        activity_employee($_SESSION['user_id'],'activity_training','activity_training_successfully'.'#','success');
        
        echo '<script type="text/javascript">window.location.href="'.$goto.'"</script>';
        exit;   

    }else{

        $_SESSION['msg_type'] = "error";
        $_SESSION['msg'] = 'Please Try Again.';
        $goto = '../view_training.php';
        echo '<script type="text/javascript">window.location.href="'.$goto.'"</script>';

    }
}

if((isset($_REQUEST['action'])) && ($_REQUEST['action']=='del')){
    $where  = "tid = '".$_GET['id']."' AND `status` IN ('2','1')";
    $trainings = select("training", $where ,'', "", "","ASC");

    $training = $trainings[0];

    if($training['total_rows'] == '0'){

        $_SESSION['msg_type'] = 'Error';
        $_SESSION['msg'] = "training Id not found";
        $goto = '../view_training.php'; 
        echo '<script type="text/javascript">window.location.href="'.$goto.'"</script>';
        exit; 

    }else{

        $_SESSION['msg_type'] = 'Success';
        $_SESSION['msg'] = "training delete Successfully";

        $goto = '../view_training.php';
        $where_condition  = array('tid'=>$_GET['id']); 
       // $where_condition  = "cbid = '".$_GET['id']."' ";
        
        delete_status('training','tid',$_GET['id']);
        activity_employee($_SESSION['user_id'],'activity_training','delete_training_successfully'.'#'.$_GET['id'],'success');
        
        echo '<script type="text/javascript">window.location.href="'.$goto.'"</script>';
        exit;  

    }
}


?>


