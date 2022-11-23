<?php
session_start();
// remove the username and password from user $_SESSION
unset($_SESSION['username']);
unset($_SESSION['password']);
// Destroy the $_SESSION of User
session_destroy();
//redirect to login page when y=the user click the logout button
header('Location: 6-login.php');
