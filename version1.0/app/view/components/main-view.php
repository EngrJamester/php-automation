<?php
    if(isset($_SESSION['username']))
    {
        header("Location:home");
     
            include_once($_SERVER['DOCUMENT_ROOT'].'/php-automation/app/view/nav/nav-view.php');

    }else{
        header("Location:login");
    }
?>