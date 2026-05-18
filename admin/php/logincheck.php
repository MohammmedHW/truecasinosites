<?php
include(realpath(dirname(dirname(__FILE__))).'/function/config.inc.php'); 


extract($_POST);

if(((isset($username)) && ($username!='')) && ((isset($password)) && ($password!='')))
{

    $where  = array('email'=> $username,'password'=>md5($password),'status'=> 'Active');
    $users = select("staff", $where ,'', "", "","ASC" ,0, 1);
    $user  = $users[0];

    
    
    if($user['total_rows']=='0'){

        $_SESSION['msg_type'] = "error";
        $_SESSION['msg'] = 'UserName and Password have error.';
        $goto = '../login.php';
        echo '<script type="text/javascript">window.location.href="'.$goto.'"</script>';

    }else{


        if($user['forgot_pass'] != '')
        {

            $data = array(
            'sid'     =>     $user['id'],
            'forgot_pass'     =>     ''
            );
            $insert = insert("staff", $data,"1");           
        }

        $_SESSION['user_id'] = $user['id'];
        $_SESSION['ip']=$_SERVER['REMOTE_ADDR'];

        $_SESSION['msg_type'] = 'Success';
        $_SESSION['msg'] = "Welcome ".$user['name'];


        $goto = '../index.php'; 
       
         activity_employee($_SESSION['user_id'],'activity_login','activity_login_successfully'.'#'.$_SESSION['user_id'],'success');
        
        echo '<script type="text/javascript">window.location.href="'.$goto.'"</script>';
        exit;   

    }     
    

}
if((isset($forget_pass)) && ($forget_pass != ""))
{
    $where  = array('email'=> $_REQUEST['email']);
    $users = select("staff", $where ,'', "", "","ASC" ,0, 1);
    $user  = $users[0];
    $forgot_pass = array();
    if($user['total_rows']=='0'){

        $_SESSION['msg'] = 'Email Id Does Not Exist';
        $_SESSION['msg_type'] = 'warning';
        $forgot_pass[0] = 1;
        

    }else{

        $forgot_pass = random_number("7");
        $data = array(
        'email'     =>     $_POST["email"],
        'forgot_pass'     =>    md5($forgot_pass),
        'sid'     =>     $user['id'],
        );

        $currentURL = (@$_SERVER["HTTPS"] == "on") ? "https://" : "http://";
        $currentURL .= $_SERVER['SERVER_NAME'] . dirname($_SERVER['REQUEST_URI']);

        $insert = insert("user", $data,"1");

        $subject = "New Password ".$app_vars['company_name'];
        $content = '<p><span style="font-size: 14pt;"><strong>New Password Link Verify,&nbsp;</strong></span></p>
        <p>&nbsp;</p>

        <pre style="font-size: 9pt;"><span style="color: #ff0000;"><tt><span style="color: #ff0000;"><tt>*********</tt></span> Verify with following link, to generate new password *********</tt></span></pre>
        <p>&nbsp;</p>

        <p>Please open following link  <a href="'.$currentURL.'/newpassword.php?forgot=verify&id='.$user['id'].'&code='.$forgot_pass.'">Click Here</a> </p>
        <p>&nbsp;</p>
        <p>or Copy and paste this link to browser :- '.$currentURL.'/newpassword.php?forgot=verify&id='.$user['id'].'&code='.$forgot_pass.'</p>
        <p>&nbsp;</p>
        <p>Thanks,</p>';

        //Send Mail
        require("class.phpmailer.php");
        $mail = new PHPMailer();
        $mail->IsMail();
        $mail->From="no-reply@domainname.com";
        $mail->FromName=$app_vars['company_name'];
        $mail->Sender="no-reply@domainname.com";
        $mail->AddAddress($_POST["email"]);

        $mail->Subject = $subject;

        $mail->IsHTML(true);
        $mail->Body = $content;
        $mail->send();


        if($insert) {

            $_SESSION['msg'] = 'Check Your Email For New Password';
            $_SESSION['msg_type'] = 'success';
            activity_employee($user['id'],'activity_forgot_password','activity_pass_rec_mail_sent #'.$user['id'],'success');
            $forgot_pass[0] = 1;

        }
        else {


            $_SESSION['msg'] = "Sorry....!! Unable To Update Password. Please Try After Some Time";
            $_SESSION['msg_type'] = "error";
            activity_employee($user['id'],'activity_forgot_password','activity_unable_to_send_email #'.$user['id'],'error');
            $forgot_pass[0] = 1;

        }


    }

    echo json_encode($forgot_pass);
    exit;
}

if((isset($_REQUEST['forgot-submit'])) && ($_REQUEST['forgot-submit']=='Change Password')){


    $data = array(
        'id'     =>     $_REQUEST['user_id'],
        'forgot_pass'     =>     '',
        'updated_at '     =>     'NOW()',
        'password' => md5($_REQUEST['password']),
    );

    $insert = insert("staff", $data,"1");
    if($insert) {

        $_SESSION['msg_type'] = 'Success';
        $_SESSION['msg'] = "Password Changed, Please Login.";

        $goto = '../login.php'; 
       
        activity_employee($_REQUEST['user_id'],'activity_login','activity_login_successfully'.'#'.$_REQUEST['user_id'],'success');
        
        echo '<script type="text/javascript">window.location.href="'.$goto.'"</script>';
        exit;   

    }else{

         $_SESSION['msg_type'] = "error";
        $_SESSION['msg'] = 'Please Try Again.';
        $goto = '../login.php';
        echo '<script type="text/javascript">window.location.href="'.$goto.'"</script>';

    }
}

?>


