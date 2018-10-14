<?php
// session_start();
// session_destroy();
if(session_status() == 2) // Destroying All Sessions
{
    $_SESSION = "";
    session_destroy();
    header("Location: login"); // Redirecting To Home Page
}
?>