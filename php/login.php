<?php
include '../models/Utils.php';
include '../models/Users.php';
session_start();
$error_arr = array();
$error_message ='';
$user = new Users;
$utils = new Utils;

if(isset($_POST)){
    if(!empty($_POST)){
        foreach($_POST as $inpName => $input){

            $_POST[$inpName]= $utils->cleanInput($input);

            //check if empty 
            switch ($inpName) {
                case 'nickname_mail_login':
                   
                    if(empty($_POST[$inpName])){
                        $error_message = 'Please fill in the email/nickname field';
                    }
                    break;

                case 'pass_login':
                   
                    if(empty($_POST[$inpName])){
                        $error_message = 'Please fill in the password field';
                    }
                    break;

                    
            }
        }
    }
}else{
    echo 'no post datas';
}

if(!empty($error_message)){
    $error_arr['error'] = $error_message;
    echo json_encode($error_arr);
}else{
    $res = $user->login($_POST['nickname_mail_login'],$_POST['pass_login']);
    if(isset($res['error'])){
        $error_arr['error'] = $res['error'];
    }else{
        $error_arr['valid'] = $res['valid'];
    }
    echo json_encode($error_arr);
}