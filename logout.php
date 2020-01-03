<?php
session_start();// starts the session
unset($_SESSION['SESS_LOGGEDIN']);//logs user out
header("Location: ../index.php"); // Redirecting To Home Page

?>
 