<?php

        // require_once $_SERVER['DOCUMENT_ROOT'].'/php-automation/version1.0/app/classes/server.php';
        $server = 'localhost';
        $user_name = 'root';
        $password = 'root';
        $database = 'db_permentation';
    
        $db = mysqli_connect( $server,$user_name,$password, $database);
        $query = "UPDATE controllers set time_left='2000-01-01' where name='$name'";
        $result = mysqli_query($db, $query); 

                
            

?>