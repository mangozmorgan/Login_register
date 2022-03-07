<?php

include '../models/Utils.php';
include '../models/Users.php';
session_start();
$error_message ='';
$user = new Users;
$utils = new Utils;
$majority = false;
$date_today = new DateTime();

if(isset($_POST)){
    if(!empty($_POST)){
        
        foreach($_POST as $inpName => $input){ 
            //cleaning inputs           
            $_POST[$inpName]= $utils->cleanInput($input);

            //check if empty 
            switch ($inpName) {
                case 'email_register':
                   
                    if(empty($_POST[$inpName])){
                        $error_message = 'Please fill in the email field';
                    }else{
                        if(!filter_var($_POST[$inpName],FILTER_VALIDATE_EMAIL)){
                       
                            $error_message = 'Your email format is incorrect';
                        }
                    }
                    break;
                
                case 'nickname_register':
                    if(empty($_POST[$inpName])){
                        $error_message = 'Please fill in the nickname field';
                    }
                    break; 

                case 'birth_register':                    
                    if(empty($_POST[$inpName])){
                        $error_message = 'Please fill in the birth field';
                    }
                    if($utils->validateAge($_POST[$inpName])===true){
                        $majority= true;
                    }                  
                    break; 
                
                case 'pass_register':
                    if(empty($_POST[$inpName])){
                        $error_message = 'Please fill in the password field';
                    }else{
                        if(!preg_match("/^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/",$_POST[$inpName])){
                            $error_message = 'The password must contain a minimum of 8 characters ,1 number ,one uppercase character ,one lowercase character';
                        }
                    }
                    break; 

                case 'confirmation_pass_register':
                    if(empty($_POST[$inpName])){
                        $error_message = 'Please fill in the confimation password field';
                    }else{
                        if($_POST['pass_register'] != $_POST['confirmation_pass_register']){
                            $error_message = 'password need to be equal to confirm password';
                        }else{

                            $_POST['pass_hash'] = sha1($_POST['pass_register']);
                        }
                    }
                    break;

                    case 'checkbox':
                        if(empty($_POST[$inpName])){
                            $error_message = 'Please select a gender';
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
    $res = $user->register($_POST['nickname_register'],$_POST['pass_hash'],$_POST['birth_register'],$_POST['email_register'],$majority,$_POST['checkbox']);
    if(isset($res['error'])){
        $error_arr['error'] = $res['error'];
    }else{
        $error_arr['valid'] = $res['valid'];
    }
    echo json_encode($error_arr);
}