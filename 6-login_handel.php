<?php
session_start();

$errors = [];
$CUsername = "rami";
$CPassword = "123456789";

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $username = test_input($_POST['userName']);
    $password = test_input($_POST['password']);

    if (empty($username)) {
        $errors[] = "empty username";
    }

    if (empty($password)) {
        $errors[] = "empty password";
    }

    if (empty($errors)) {

        //check if username and password are Correct
        if ($username != $CUsername || $password != $CPassword) {
            $errors[] = "username or password incorrect";
            $_SESSION['errors'] = $errors;
            header('Location: 6-login.php');
        } else {
            //if correct password and username 
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;

            // Redirect to profile page

            header('Location: 6-profile.php');
        }
    } else {
        //if error array not empty
        $_SESSION['errors'] = $errors;
        header('Location: 6-login.php');
    }
} else {
    header('Location: 6-login.php');
}
