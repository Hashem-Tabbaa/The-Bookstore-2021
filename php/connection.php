<?php
    class db{
        private function __construct(){
        }
        private static $username = 'hashema2_bookstore';
        private static $password = 'admin';
        private static $connectionString = "mysql:host=localhost;dbname=hashema2_bookstore";
        
        private static $pdo = null;
        public static function getInstance(){
            if(!self::$pdo){
                try{
                    self::$pdo = new PDO(self::$connectionString, self::$username, self::$password);
                    self::$pdo-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                }catch(PDOException $e){
                    echo "Connection faild: ".$e-> getMessage();
                }
            }
            return self::$pdo;
        }
    }

?>