<?php
include(realpath(dirname(dirname(__FILE__))).'/function/config.inc.php'); 
extract($_POST);
if((isset($_REQUEST['submit'])) && ($_REQUEST['submit']=='offer_add')){


    $data = array(

        'title' => addslashes($_POST['title']),
        'category' => addslashes($_POST['category']),
        'badge' => addslashes($_POST['badge']),
        'badge_image' => addslashes($_POST['badge_image']),
        'network' => addslashes($_POST['network']),
        'site_name' => addslashes($_POST['site_name']),
        'aff_url' => addslashes($_POST['aff_url']),
        'aff_download_url' => addslashes($_POST['aff_download_url']),
        'logo' => addslashes($_POST['logo']),
        'bonus_amount' => addslashes($_POST['bonus_amount']),
        'bonus_percent' => addslashes($_POST['bonus_percent']),
        'bonus_code' => addslashes($_POST['bonus_code']),
        'no_dep_bonus' => addslashes($_POST['no_dep_bonus']),
        'ranking' => addslashes($_POST['ranking']),
        'rating' => addslashes($_POST['rating']),
        'rating_n' => addslashes($_POST['rating_n']),
        'terms' => addslashes($_POST['terms']),
        'review' => addslashes($_POST['review']),

        'desci' => addslashes($_POST['desci']),
        'keywords' => addslashes($_POST['keywords']),
        'bg_color' => addslashes($_POST['bg_color']),
        'status' => addslashes($_POST['status']),
//        'created_at' => strtotime("now"),
 //       'created_by' => $_SESSION['user_id']

    );
    
    
    if(isset($_POST['id'])){
        $data['id'] = $_POST['id'];
//        $data['updated_at'] = strtotime("now");
 //       $data['updated_by'] = $_SESSION['user_id'];
        $insert = insert("offers", $data,"1");
    }else{
        $insert = insert("offers", $data,"0","1");
    }


    //$insert = insert("farmer", $data,"0","1");
    if($insert) {

        $_SESSION['msg_type'] = 'Success';
        $_SESSION['msg'] = "Offer Updated Successfully";

        $goto = '../view_offers.php'; 
       
        activity_employee($_SESSION['user_id'],'activity_offer','activity_offer_successfully'.'#','success');
        
        echo '<script type="text/javascript">window.location.href="'.$goto.'"</script>';
        exit;   

    }else{

        $_SESSION['msg_type'] = "error";
        $_SESSION['msg'] = 'Please Try Again.';
        $goto = '../view_offers.php';
        echo '<script type="text/javascript">window.location.href="'.$goto.'"</script>';

    }
}

if((isset($_REQUEST['action'])) && ($_REQUEST['action']=='del')){
    $where  = "id = '".$_GET['id']."'";
    $farmers = select("offer", $where ,'', "", "","ASC");

    $farmer = $farmers[0];

    if($farmer['total_rows'] == '0'){

        $_SESSION['msg_type'] = 'Error';
        $_SESSION['msg'] = "Offer Id not found";
        $goto = '../view_offers.php'; 
        echo '<script type="text/javascript">window.location.href="'.$goto.'"</script>';
        exit; 

    }else{

        $_SESSION['msg_type'] = 'Success';
        $_SESSION['msg'] = "Offer delete Successfully";

        $goto = '../view_offers.php';
        $where_condition  = array('sid'=>$_GET['id']); 
       // $where_condition  = "cbid = '".$_GET['id']."' ";
        
        delete_status('offers','id',$_GET['id']);
        activity_employee($_SESSION['user_id'],'activity_offer','delete_offer_successfully'.'#'.$_GET['id'],'success');
        
        echo '<script type="text/javascript">window.location.href="'.$goto.'"</script>';
        exit;  

    }
}


?>


