<?php
// session_start();
// session_destroy();
if(session_destroy()) // Destroying All Sessions
{
    header("Location: login"); // Redirecting To Home Page
}
?>