<?php

    
    require_once $_SERVER['DOCUMENT_ROOT'].'/php-automation/version1.0/app/classes/server.php';

    class Controller{

        protected $result;

        public static function CreateView($viewName){
            require_once $_SERVER['DOCUMENT_ROOT'].'/php-automation/version1.0/app/view/components/'.$viewName.'.php';
        }
        public static function UserCreateView($viewName){
            require_once $_SERVER['DOCUMENT_ROOT'].'/php-automation/version1.0/app/view/user/'.$viewName.'.php';
        }
    }
?>