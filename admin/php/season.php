<?php
include(realpath(dirname(dirname(__FILE__))).'/function/config.inc.php'); 
extract($_POST);

if((isset($_REQUEST['submit'])) && ($_REQUEST['submit']=='season_add')){
  $crops_approved = json_encode($_POST['approved_crop']);

    $data = array(

        'sdate' => $_POST['sdate'],
        'enddate' => $_POST['enddate'],
        'type' => $_POST['type'],
        'status' => $_POST['status'],
        'crops_approved' => $crops_approved,
        'created_at' => strtotime("now"),
        'created_by' => $_SESSION['user_id']

    );
    
    
    if(isset($_POST['season_id'])){
        $data['seasonid'] = $_POST['season_id'];
        $data['updated_at'] = strtotime("now");
        $data['updated_by'] = $_SESSION['user_id'];
        $insert = insert("season", $data,"1");
    }else{
        $insert = insert("season", $data,"0","1");
    }

    
    //$insert = insert("season", $data,"0","1");
    if($insert) {

        $_SESSION['msg_type'] = 'Success';
        $_SESSION['msg'] = "season Add Successfully";

        $goto = '../view_season.php'; 
       
        activity_employee($_SESSION['user_id'],'activity_season','activity_season_successfully'.'#','success');
        
        echo '<script type="text/javascript">window.location.href="'.$goto.'"</script>';
        exit;   

    }else{

        $_SESSION['msg_type'] = "error";
        $_SESSION['msg'] = 'Please Try Again.';
        $goto = '../view_season.php';
        echo '<script type="text/javascript">window.location.href="'.$goto.'"</script>';

    }
}

if((isset($_REQUEST['action'])) && ($_REQUEST['action']=='del')){
    $where  = "seasonid = '".$_GET['id']."' AND `status` IN ('2','1')";
    $seasons = select("season", $where ,'', "", "","ASC");

    $season = $seasons[0];

    if($season['total_rows'] == '0'){

        $_SESSION['msg_type'] = 'Error';
        $_SESSION['msg'] = "season Id not found";
        $goto = '../view_season.php'; 
        echo '<script type="text/javascript">window.location.href="'.$goto.'"</script>';
        exit; 

    }else{

        $_SESSION['msg_type'] = 'Success';
        $_SESSION['msg'] = "season delete Successfully";

        $goto = '../view_season.php';
        $where_condition  = array('seasonid'=>$_GET['id']); 
       // $where_condition  = "seasonid = '".$_GET['id']."' ";
        
        delete_status('season','seasonid',$_GET['id']);
        activity_employee($_SESSION['user_id'],'activity_season','delete_season_successfully'.'#'.$_GET['id'],'success');
        
        echo '<script type="text/javascript">window.location.href="'.$goto.'"</script>';
        exit;  

    }
}


?>


