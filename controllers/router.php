<?php

ob_start();
session_start();

if(isset($_GET['view'])){
    $page = $_GET['view'];

    switch($page){
        
        default : 
            
            include_once "./views/components/modalMessage.php";
            include_once "./views/home_view.php";
            $title = "Welcome to myChat";
            break; 
        
        case 'register':
            include_once "./views/re.php";
            $title = "register";            
            break; 
        
    }
    $render = ob_get_clean();
    include_once "./templates/base_template.php";
}else{
    header('Location: ./?view');
}