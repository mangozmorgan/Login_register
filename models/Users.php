<?php

include '../models/Connect.php';

class Users extends ConnectBdd{

    public $bdd;
    public $error_message=array();
    public function __construct(){
        $this->bdd = ConnectBdd::connect();
    }

    public function register($nickname,$pass,$birth,$email,$majority,$gender){
        
        // check mail for double
        $sqlCheckEmail = "SELECT email_user FROM users_account WHERE email_user = ?";
        $checkEmail = $this->bdd->prepare($sqlCheckEmail);
        $checkEmail->execute([$email]);
        $data = $checkEmail->fetchAll(PDO::FETCH_ASSOC);
        

        if(isset($data[0]['email_user'])){
            $this->error_message['error'] = 'Email already used';
             return $this->error_message;

        }else{
            // check pseudo for double
            $sqlCheckPseudo = 'SELECT pseudo_user FROM users_account WHERE pseudo_user = ?';
            $checkPseudo = $this->bdd->prepare($sqlCheckPseudo);
            $checkPseudo->execute([$nickname]);
            $data = $checkPseudo->fetchAll(PDO::FETCH_ASSOC);
            
            if(isset($data[0]['pseudo_user'])){
                $this->error_message['error'] = 'Nickname already used please try another';
                 return $this->error_message;
            }else{

                $sqlInsert = "INSERT INTO users_account(pseudo_user, email_user, pass_user, birth_user,majority_user,gender_user) VALUES (?,?,?,?,?,?)";
                $addUser= $this->bdd->prepare($sqlInsert);
                $res = $addUser->execute([$nickname,$email,$pass,$birth,$majority,$gender]);
                $_SESSION['userName']= $nickname; 
                $this->error_message['valid'] = 'Thanks for the inscription , have fun !';
                return $this->error_message;
            }
        }
    }

    public function login($pseudo,$pass){
        $sqlCheck = "SELECT * FROM users_account WHERE pseudo_user = ? AND pass_user = ?";
        $check = $this->bdd->prepare($sqlCheck);
        $res = $check->execute([$pseudo,sha1($pass)]);
        $data = $check->fetchAll(PDO::FETCH_ASSOC);

        if(isset($data[0]['pseudo_user'])) {
            $name = $data[0]['pseudo_user'];
            $this->error_message['valid'] = "Hey $name nice to see you again !";
            return $this->error_message;

        }else{
            $this->error_message['error']= "No account for this email/nickname and password combinaison";
            return $this->error_message;
        }
    }
    
}