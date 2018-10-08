<?php
  // if(!isset($_SESSION)) 
  // { 
  //     session_start();
  // } 
  if(session_status() == PHP_SESSION_NONE)
  {
    session_start();
  }


// initializing variables

$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', 'root', 'dbtest');



// CHANGE PASSWORD FOR USER
if (isset($_POST['change_pass'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);


  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same password
  $user_check_query = "SELECT * FROM users WHERE username='$username' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  // if ($user) { // if user exists
  //   if ($user['username'] === $username) {
  //     array_push($errors, "Username already exists");
  //   }

  //   if ($user['email'] === $email) {
  //     array_push($errors, "email already exists");
  //   }
  // }

  // Finally, update user if there are no errors in the form
  if (count($errors) == 0) {
    $password = password_hash($password_1,PASSWORD_BCRYPT);

    $query = "UPDATE USERS SET password ='.$password.' WHERE username=.'.$username.'";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: home');
  }
}

// ... 

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
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        header('location: home');
      }
    
    }else {
      // array_push($errors, "Wrong username/password combination");
      alert("Incorrect Username/password");
    }
  }
}
?>