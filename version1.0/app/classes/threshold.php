<?php

    $server = 'localhost';
    $user_name = 'root';
    $password = 'root';
    $database = 'db_permentation';
    $errors = array(); 
    $db = mysqli_connect( $server,$user_name,$password, $database);

    if (isset($_POST['box1_threshold'])) {

        // Finally, update user if there are no errors in the form
        
        if (count($errors) == 0) {
          $threshold_val = mysqli_real_escape_string($db, $_POST['ThresField_val']);
          
          $query = "UPDATE controllers set threshold='$threshold_val'";
          //update trheshold
          $result = mysqli_query($db, $query);     

          if($result == 1)
          {
			  $c1_threshold = $threshold_val;
              echo"<script>alert('Threshold Updated Success');</script>";
				 //echo"<script>$('#AlertModal').modal('show');</script>";
          }else{
              echo"<script>alert('Threshold Updated Failed');</script>";
          }
          
        }else{
         
          echo
          "<script type='text/javascript'>
            alert('Failed To Update Threshold');
          </script>";
        
        }
      }


?>
