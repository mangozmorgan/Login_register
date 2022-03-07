<?php

class Utils{

    public function cleanInput($string){

        $string = stripslashes($string);
        $string = trim($string);
        $string = htmlspecialchars(($string));
        return $string;
    }

    public function validateAge($birthday, $age = 18)
    {
        // $birthday can be UNIX_TIMESTAMP or just a string-date.
        if(is_string($birthday)) {
            $birthday = strtotime($birthday);
        }
    
        // check
        // 31536000 is the number of seconds in a 365 days year.
        if(time() - $birthday < $age * 31536000)  {
            return false;
        }
    
        return true;
    }
   
}