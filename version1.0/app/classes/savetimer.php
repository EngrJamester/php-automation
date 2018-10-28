<?php

        require_once $_SERVER['DOCUMENT_ROOT'].'/php-automation/version1.0/app/classes/server.php';
         $currDate = date("Y-m-d");
                $query = "UPDATE controllers set time_left='$currDate' where name='$name'";

                $result = mysqli_query($db, $query);
                // $time_left = mysqli_fetch_assoc($result);

                    echo $result;        

?>