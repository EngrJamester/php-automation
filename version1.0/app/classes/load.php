<?php

        $server = 'localhost';
        $user_name = 'root';
        $password = 'root';
        $database = 'db_permentation';

        $db = mysqli_connect( $server,$user_name,$password, $database);

        // SQL Query To Fetch Complete Information Of User
        $query = "Select * from controllers";

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
        $varay = array_column($cont,'time_left');

        //Start date of each controller
        $c1_datetime = new DateTime($varay[0]);
        $c2_datetime = new DateTime($varay[1]);
        $c3_datetime = new DateTime($varay[2]);
        $c4_datetime = new DateTime($varay[3]);
        $c5_datetime = new DateTime($varay[4]);
        $c6_datetime = new DateTime($varay[5]);
        $c7_datetime = new DateTime($varay[6]);

        $dateNow = new DateTime(date("Y-m-d"));
     
        //controller1
        $c1_interval = $dateNow->diff($c1_datetime);
        // $datediff = $c1_interval->format('%d days');
        $c1_daydiff = $c1_interval->format('%d');

        $c1_daydiff_total = 7 - $c1_daydiff;
 
        $c1_timerVal_sec = $c1_daydiff_total * 86400;//1 day = 86400 sec(s)
        $hr_var = date('h');
        $min_var = date('i');

        $hr_var_to_sec = $hr_var * 3600;
        $min_var_to_sec = $min_var *60;

        $total_hr_min_to_sec = $hr_var_to_sec + $min_var_to_sec;

        $c1_timerVal =  $c1_timerVal_sec;

        //controller2
        $c2_interval = $dateNow->diff($c2_datetime);
        $datediff=$c2_interval->format('%d days');
        $c2_daydiff=$c2_interval->format('%d');
        $c2_timerVal = $c2_daydiff * 86400;

         //controller3
         $c3_interval = $dateNow->diff($c3_datetime);
         $datediff=$c3_interval->format('%d days');
         $c3_daydiff=$c3_interval->format('%d');
         $c3_timerVal = $c3_daydiff * 86400;

        // //controller4
        //  $c4_interval = $dateNow->diff($c3_datetime);
        //  $datediff=$c4_interval->format('%d days');
        //  $daydiff=$c4_interval->format('%d');
        //  $timerVal = $daydiff * 86400;

        // //controller5
        //  $c5_interval = $dateNow->diff($c3_datetime);
        //  $datediff=$c5_interval->format('%d days');
        //  $daydiff=$c5_interval->format('%d');
        //  $timerVal = $daydiff * 86400;

        // //controller6
        //  $c6_interval = $dateNow->diff($c3_datetime);
        //  $datediff=$c6_interval->format('%d days');
        //  $daydiff=$c6_interval->format('%d');
        //  $timerVal = $daydiff * 86400;

        // //controller7
        //  $c7_interval = $dateNow->diff($c3_datetime);
        //  $datediff=$c7_interval->format('%d days');
        //  $daydiff=$c7_interval->format('%d');
        //  $timerVal = $daydiff * 86400;
        

?>