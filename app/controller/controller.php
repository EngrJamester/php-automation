<?php

    
    require_once $_SERVER['DOCUMENT_ROOT'].'/php-automation/app/classes/server.php';

    class Controller{

        protected $result;

        public static function CreateView($viewName){
            require_once $_SERVER['DOCUMENT_ROOT'].'/php-automation/app/view/'.$viewName.'.php';
        }
    }
?>