<?php
include(realpath(dirname(dirname(__FILE__))).'/function/config.inc.php'); 
extract($_POST);

if((isset($_REQUEST['submit'])) && ($_REQUEST['submit']=='farmer_add')){


    $data = array(

        'name' => $_POST['farmername'],
        'tracenet_code' => $_POST['farmer_code'],
        'total_area' => $_POST['farmer_area'],
        'status' => $_POST['status'],
        'email' => $_POST['email'],
        'phone' => $_POST['farmer_phone1'],
        'mobile' => $_POST['farmer_phone2'],
        'add1' => $_POST['farmer_address1'],
        'add2' => $_POST['farmer_address2'],
        'taluka' => $_POST['taluka'],
        'village' => $_POST['village'],
        'pin' => $_POST['pincode'],
        'district' => $_POST['city'],
        'state' => $_POST['state'],
        'created_at' => strtotime("now"),
        'created_by' => $_SESSION['user_id']

    );
    
    
    if(isset($_POST['farmer_id'])){
        $data['fid'] = $_POST['farmer_id'];
        $data['updated_at'] = strtotime("now");
        $data['updated_by'] = $_SESSION['user_id'];
        $insert = insert("farmer", $data,"1");
    }else{
        $insert = insert("farmer", $data,"0","1");
    }


    //$insert = insert("farmer", $data,"0","1");
    if($insert) {

        $_SESSION['msg_type'] = 'Success';
        $_SESSION['msg'] = "Farmer Add Successfully";

        $goto = '../view_farmers.php'; 
       
        activity_employee($_SESSION['user_id'],'activity_farmer','activity_farmer_successfully'.'#','success');
        
        echo '<script type="text/javascript">window.location.href="'.$goto.'"</script>';
        exit;   

    }else{

        $_SESSION['msg_type'] = "error";
        $_SESSION['msg'] = 'Please Try Again.';
        $goto = '../view_farmers.php';
        echo '<script type="text/javascript">window.location.href="'.$goto.'"</script>';

    }
}

if((isset($_REQUEST['action'])) && ($_REQUEST['action']=='del')){
    $where  = "fid = '".$_GET['id']."' AND `status` IN ('2','1')";
    $farmers = select("farmer", $where ,'', "", "","ASC");

    $farmer = $farmers[0];

    if($farmer['total_rows'] == '0'){

        $_SESSION['msg_type'] = 'Error';
        $_SESSION['msg'] = "farmer Id not found";
        $goto = '../view_farmers.php'; 
        echo '<script type="text/javascript">window.location.href="'.$goto.'"</script>';
        exit; 

    }else{

        $_SESSION['msg_type'] = 'Success';
        $_SESSION['msg'] = "farmer delete Successfully";

        $goto = '../view_farmers.php';
        $where_condition  = array('fid'=>$_GET['id']); 
       // $where_condition  = "cbid = '".$_GET['id']."' ";
        
        delete_status('farmer','fid',$_GET['id']);
        activity_employee($_SESSION['user_id'],'activity_farmer','delete_farmer_successfully'.'#'.$_GET['id'],'success');
        
        echo '<script type="text/javascript">window.location.href="'.$goto.'"</script>';
        exit;  

    }
}


?>


