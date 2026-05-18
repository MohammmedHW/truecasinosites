<?php
include(realpath(dirname(dirname(__FILE__))).'/function/config.inc.php'); 
extract($_POST);

if((isset($_REQUEST['submit'])) && ($_REQUEST['submit']=='cb_add')){


    $data = array(

        'name' => $_POST['name'],
        'contact_person' => $_POST['contact_person'],
        'status' => $_POST['status'],
        'email' => $_POST['email'],
        'phone' => $_POST['phone'],
        'mobile' => $_POST['mobile'],
        'add1' => $_POST['add1'],
        'add2' => $_POST['add2'],
        'taluka' => $_POST['taluka'],
        'village' => $_POST['village'],
        'pin' => $_POST['pin'],
        'details' => $_POST['details'],
        'district' => $_POST['district'],
        'state' => $_POST['state'],
        'created_at' => strtotime("now"),
        'created_by' => $_SESSION['user_id']

    );
    
    
    if(isset($_POST['cb_id'])){
        $data['cbid'] = $_POST['cb_id'];
        $data['updated_at'] = strtotime("now");
        $data['updated_by'] = $_SESSION['user_id'];
        $insert = insert("cb", $data,"1");
    }else{
        $insert = insert("cb", $data,"0","1");
    }

    
    //$insert = insert("farmer", $data,"0","1");
    if($insert) {

        $_SESSION['msg_type'] = 'Success';
        $_SESSION['msg'] = "CB Add Successfully";

        $goto = '../view_cb.php'; 
       
        activity_employee($_SESSION['user_id'],'activity_cb','activity_cb_successfully'.'#','success');
        
        echo '<script type="text/javascript">window.location.href="'.$goto.'"</script>';
        exit;   

    }else{

        $_SESSION['msg_type'] = "error";
        $_SESSION['msg'] = 'Please Try Again.';
        $goto = '../view_cb.php';
        echo '<script type="text/javascript">window.location.href="'.$goto.'"</script>';

    }
}

if((isset($_REQUEST['action'])) && ($_REQUEST['action']=='del')){
    $where  = "cbid = '".$_GET['id']."' AND `status` IN ('2','1')";
    $cbs = select("cb", $where ,'', "", "","ASC");

    $cb = $cbs[0];

    if($cb['total_rows'] == '0'){

        $_SESSION['msg_type'] = 'Error';
        $_SESSION['msg'] = "cb Id not found";
        $goto = '../view_cb.php'; 
        echo '<script type="text/javascript">window.location.href="'.$goto.'"</script>';
        exit; 

    }else{

        $_SESSION['msg_type'] = 'Success';
        $_SESSION['msg'] = "cb delete Successfully";

        $goto = '../view_cb.php';
        $where_condition  = array('cbid'=>$_GET['id']); 
       // $where_condition  = "cbid = '".$_GET['id']."' ";
        
        delete_status('cb','cbid',$_GET['id']);
        activity_employee($_SESSION['user_id'],'activity_cb','delete_cb_successfully'.'#'.$_GET['id'],'success');
        
        echo '<script type="text/javascript">window.location.href="'.$goto.'"</script>';
        exit;  

    }
}

?>


