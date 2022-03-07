<?php

class ConnectBdd{
    private static $dns = "mysql:host=localhost:3306;dbname=myChat";
    private static $user= "root";
    private static $pass="" ;
    private static $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ];
    public static function connect (){
        try{
            $bdd = new PDO(

                self::$dns,
                self::$user,
                self::$pass
            );
            return $bdd;
           
        }catch(\PDOexeption $e){
            echo "erreur de connection ".$e;
        }
    }
}