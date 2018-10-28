<?php
 
  if(session_status() == PHP_SESSION_NONE)
  {
    session_start();
  }


    // initializing variables

    $username = "";

    $errors = array(); 

    // connect to the database
    $server = 'localhost';
    $user_name = 'root';
    $password = 'root';
    $database = 'db_permentation';

    $db = mysqli_connect( $server,$user_name,$password, $database);

    // SQL Query To Fetch Complete Information Of User
    $user_query = "select username from users";
    $sqlQuery = mysqli_query( $db,$user_query);
    $rowValue = mysqli_fetch_assoc($sqlQuery);
    $login_username = $rowValue['username'];



  // CHANGE PASSWORD FOR USER
  if (isset($_POST['change_pass'])) {
    // receive all input values from the form
    
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);


    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    
    if (empty($password_1)) { array_push($errors, "Password is required"); }
    if ($password_1 != $password_2) {
    array_push($errors, "The two passwords do not match");
    }

    // first check the database to make sure 
    // a user does not already exist with the same password
    $user_check_query = "SELECT * FROM users WHERE username='$login_username' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    
    
    

    // Finally, update user if there are no errors in the form
    
    if (count($errors) == 0) {
      $password = password_hash($password_1,PASSWORD_BCRYPT);

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
        alert('Failed To Save');
      </script>";
    
    }
  }


  // LOGIN USER
  if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if (empty($username)) {
      array_push($errors, "Username is required");
    }
    if (empty($password)) {
      array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {
      // $password = md5($password);
      $query = "SELECT * FROM users WHERE username='$username' ";
      $results = mysqli_query($db, $query);
      if (mysqli_num_rows($results) == 1) {
        $row = mysqli_fetch_array($results);
        $password_hash = $row['password'];
        if(password_verify($password,$password_hash))
        {
          $_SESSION['login_user'] = $username;
          $_SESSION['success'] = "You are now logged in";
          header('location: home');
        }
      
      }else {
        array_push($errors, "Wrong username/password combination");
        header('location: home');
        //alert("Incorrect Username/password");
      }
    }
  }

  //Check Session
  if(session_status() == PHP_SESSION_ACTIVE){
    require_once("session.php");
  }

 
  
?>