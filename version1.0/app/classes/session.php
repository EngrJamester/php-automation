<?php
    

    // Establishing Connection with Server by passing server_name, user_id and password as a parameter
    // $connection = mysqli_connect($server, $user_name, $password, $database);
    // Selecting Database
    // $db = mysql_select_db("dbtest", $connection);
    // session_start();// Starting Session

    // Storing Session
    if(session_status() == 2){
        if (isset($_POST['login_user'])){
            $user_check=$_SESSION['login_user'];
             // SQL Query To Fetch Complete Information Of User
            $user_check_query = "select username from users where username='$user_check'";
            $ses_sql = mysqli_query( $db,$user_check_query);
            $row = mysqli_fetch_assoc($ses_sql);
            $login_session =$row['username'];
            // if(!isset($login_session)){
            //     mysql_close($connection); // Closing Connection
            //     header('Location: index.php'); // Redirecting To Home Page
            // }
        }
        
    }
        
    
   
?>