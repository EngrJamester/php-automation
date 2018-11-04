<?php

    $server = 'localhost';
    $user_name = 'root';
    $password = 'root';
    $database = 'db_permentation';

    $db = mysqli_connect( $server,$user_name,$password, $database);

    $query = "UPDATE controllers set threshold='$threshold_val' where name='$name'";

    //update trheshold
    $result = mysqli_query($db, $query);     

    if($result == 1)
    {
        echo"alert('Threshold Updated Success');";
    }else{
        echo"alert('Threshold Updated Failed');";
    }

    if (isset($_POST['box1_threshold'])) {

        // Finally, update user if there are no errors in the form
        
        if (count($errors) == 0) {
    
          $query = "UPDATE users SET password ='$password' WHERE username ='$login_username'";
          mysqli_query($db, $query);
          $_SESSION['username'] = $username;
          $_SESSION['success'] = "New Password Save!";
          $transaction_status = array_push($errors, $_SESSION['success']);
          // include($_SERVER['DOCUMENT_ROOT'].'/php-automation/version1.0/app/common/status-modal.php');
          echo
          '<script type="text/javascript">
    
            alert("New Password Save!");
    
          </script>';
          
        }else{
          $transaction_status = array_push($errors, "Wrong username/password combination");
          // include($_SERVER['DOCUMENT_ROOT'].'/php-automation/version1.0/app/common/status-modal.php');
          echo
          "<script type='text/javascript'>
            alert('Failed To Update Threshold');
          </script>";
        
        }
      }


?>