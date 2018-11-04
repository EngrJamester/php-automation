<?php

    $server = 'localhost';
    $user_name = 'root';
    $password = 'root';
    $database = 'db_permentation';

    $db = mysqli_connect( $server,$user_name,$password, $database);

    $query = "Select threshold from controllers";

    $cont = array(); 

    $result = mysqli_query($db, $query);   
       
    if (mysqli_num_rows($result) <> null) {
        $row = mysqli_fetch_array($result);
        $row_count = 7;
        while($row_count !== 0){
            array_push($cont ,$row);
            $row_count--;
            
        }
      }else {
        array_push($errors, "Wrong username/password combination");
        //alert("Incorrect Username/password");
    }

    $varay = array_column($cont,'threshold');

    $c1_threshold = $varay[0];
    $c2_threshold = $varay[1];
    $c3_threshold = $varay[2];
    $c4_threshold = $varay[3];
    $c5_threshold = $varay[4];
    $c6_threshold = $varay[5];
    $c7_threshold = $varay[6];

?>