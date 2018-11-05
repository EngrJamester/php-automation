<?php

    $server = 'localhost';
    $user_name = 'root';
    $password = 'root';
    $database = 'db_permentation';

    $db = mysqli_connect( $server,$user_name,$password, $database);

    if (isset($_POST['box1_threshold'])) {

        // Finally, update user if there are no errors in the form
        
        if (count($errors) == 0) {
    
          $query = "UPDATE controllers set threshold='$threshold_val' where name='$name'";
          //update trheshold
          $result = mysqli_query($db, $query);     

          if($result == 1)
          {
              echo"alert('Threshold Updated Success');";
          }else{
              echo"alert('Threshold Updated Failed');";
          }
          
        }else{
         
          echo
          "<script type='text/javascript'>
            alert('Failed To Update Threshold');
          </script>";
        
        }
      }


?>