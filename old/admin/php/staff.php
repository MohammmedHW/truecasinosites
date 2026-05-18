<?php
include(realpath(dirname(dirname(__FILE__))).'/function/config.inc.php'); 
extract($_POST);

if((isset($_REQUEST['submit'])) && ($_REQUEST['submit']=='staff_add')){


    $data = array(

        'name' => $_POST['name'],
        'status' => $_POST['status'],
        'email' => $_POST['email'],
        'phone' => $_POST['phone'],
        'mobile' => $_POST['mobile'],
        'add1' => $_POST['add1'],
        'add2' => $_POST['add2'],
        'city' => $_POST['city'],
        'country' => $_POST['country'],
        'pin' => $_POST['pincode'],
        'state' => $_POST['state'],
        'created_at' => strtotime("now"),
        'created_by' => $_SESSION['user_id']

    );
    
    
    if(isset($_POST['id'])){
        $data['id'] = $_POST['id'];
        $data['updated_at'] = strtotime("now");
        $data['updated_by'] = $_SESSION['user_id'];
        $insert = insert("staff", $data,"1");
    }else{
        $insert = insert("staff", $data,"0","1");
    }


    //$insert = insert("farmer", $data,"0","1");
    if($insert) {

        $_SESSION['msg_type'] = 'Success';
        $_SESSION['msg'] = "Staff Updated Successfully";

        $goto = '../view_staff.php'; 
       
        activity_employee($_SESSION['user_id'],'activity_staff','activity_staff_successfully'.'#','success');
        
        echo '<script type="text/javascript">window.location.href="'.$goto.'"</script>';
        exit;   

    }else{

        $_SESSION['msg_type'] = "error";
        $_SESSION['msg'] = 'Please Try Again.';
        $goto = '../view_staff.php';
        echo '<script type="text/javascript">window.location.href="'.$goto.'"</script>';

    }
}

if((isset($_REQUEST['action'])) && ($_REQUEST['action']=='del')){
    $where  = "sid = '".$_GET['id']."'";
    $farmers = select("staff", $where ,'', "", "","ASC");

    $farmer = $farmers[0];

    if($farmer['total_rows'] == '0'){

        $_SESSION['msg_type'] = 'Error';
        $_SESSION['msg'] = "Staff Id not found";
        $goto = '../view_staff.php'; 
        echo '<script type="text/javascript">window.location.href="'.$goto.'"</script>';
        exit; 

    }else{

        $_SESSION['msg_type'] = 'Success';
        $_SESSION['msg'] = "Staff delete Successfully";

        $goto = '../view_staff.php';
        $where_condition  = array('sid'=>$_GET['id']); 
       // $where_condition  = "cbid = '".$_GET['id']."' ";
        
        delete_status('staff','fid',$_GET['id']);
        activity_employee($_SESSION['user_id'],'activity_staff','delete_staff_successfully'.'#'.$_GET['id'],'success');
        
        echo '<script type="text/javascript">window.location.href="'.$goto.'"</script>';
        exit;  

    }
}


?>


