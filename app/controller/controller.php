<?php

    require_once $_SERVER['DOCUMENT_ROOT'].'/php-automation/app/classes/database.php';
    require_once $_SERVER['DOCUMENT_ROOT'].'/php-automation/app/classes/server.php';

    class Controller extends Database{

        protected $result;

        public static function CreateView($viewName){
            require_once $_SERVER['DOCUMENT_ROOT'].'/php-automation/app/view/'.$viewName.'.php';
        }

        public static function InitiateDB(){
            $result = self::query("SELECT * FROM users");
            return $result;
        }
    }
?>