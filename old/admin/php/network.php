<?php
include(realpath(dirname(dirname(__FILE__))).'/function/config.inc.php'); 
extract($_POST);
if((isset($_REQUEST['submit'])) && ($_REQUEST['submit']=='offer_add')){


    $data = array(

        'description' => addslashes($_POST['description']),
        'network' => addslashes($_POST['network']),
        'currency' => addslashes($_POST['currency']),
        'features' => addslashes($_POST['features']),
        'pros' => addslashes($_POST['pros']),
        'cons' => addslashes($_POST['cons']),
        'rakeback_percent' => addslashes($_POST['rakeback_percent']),
        'payout_percent' => addslashes($_POST['payout_percent']),
        'minimum_deposit' => addslashes($_POST['minimum_deposit']),
        'deposit_options' => addslashes($_POST['deposit_options']),
        'withdraw_options' => addslashes($_POST['withdraw_options']),
        'support_types' => addslashes($_POST['support_types']),
        'founded' => addslashes($_POST['founded']),
        'countries' => addslashes($_POST['countries']),
        'languages' => addslashes($_POST['languages']),
        'review' => addslashes($_POST['review']),
        'licensed' => addslashes($_POST['licensed']),
        'software' => addslashes($_POST['software']),
        'games' => addslashes($_POST['games']),
        'slots' => addslashes($_POST['slots']),
        'live_casino' => addslashes($_POST['live_casino']),
        'table_games' => addslashes($_POST['table_games']),
        'games_available' => addslashes($_POST['games_available']),
        'cashier' => addslashes($_POST['cashier']),
        'wagering' => addslashes($_POST['wagering']),
        'rollers' => addslashes($_POST['rollers']),
        'device' => addslashes($_POST['device']),
        'app_review' => addslashes($_POST['app_review']),
        'contact' => addslashes($_POST['contact']),
        'status' => addslashes($_POST['status']),
        'bingo' => addslashes($_POST['bingo']),
//        'created_at' => strtotime("now"),
 //       'created_by' => $_SESSION['user_id']










    );
    
    
    if(isset($_POST['id'])){
        $data['id'] = $_POST['id'];
//        $data['updated_at'] = strtotime("now");
 //       $data['updated_by'] = $_SESSION['user_id'];
        $insert = insert("network", $data,"1");
    }else{
        $insert = insert("network", $data,"0","1");
    }

//exit;
    //$insert = insert("farmer", $data,"0","1");
    if($insert) {

        $_SESSION['msg_type'] = 'Success';
        $_SESSION['msg'] = "Network Updated Successfully";

        $goto = '../view_network.php'; 
       
        activity_employee($_SESSION['user_id'],'activity_offer','activity_network_successfully'.'#','success');
        
        echo '<script type="text/javascript">window.location.href="'.$goto.'"</script>';
        exit;   

    }else{

        $_SESSION['msg_type'] = "error";
        $_SESSION['msg'] = 'Please Try Again.';
        $goto = '../view_network.php';
        echo '<script type="text/javascript">window.location.href="'.$goto.'"</script>';

    }
}

if((isset($_REQUEST['action'])) && ($_REQUEST['action']=='del')){
    $where  = "id = '".$_GET['id']."'";
    $farmers = select("network", $where ,'', "", "","ASC");

    $farmer = $farmers[0];

    if($farmer['total_rows'] == '0'){

        $_SESSION['msg_type'] = 'Error';
        $_SESSION['msg'] = "Network Id not found";
        $goto = '../view_network.php'; 
        echo '<script type="text/javascript">window.location.href="'.$goto.'"</script>';
        exit; 

    }else{

        $_SESSION['msg_type'] = 'Success';
        $_SESSION['msg'] = "Network delete Successfully";

        $goto = '../view_network.php';
        $where_condition  = array('sid'=>$_GET['id']); 
       // $where_condition  = "cbid = '".$_GET['id']."' ";
        
        delete_status('network','id',$_GET['id']);
        activity_employee($_SESSION['user_id'],'activity_network','delete_network_successfully'.'#'.$_GET['id'],'success');
        
        echo '<script type="text/javascript">window.location.href="'.$goto.'"</script>';
        exit;  

    }
}


?>


