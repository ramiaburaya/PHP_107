<?php
// function to filiter the input data (always use it in handel_input page)
function testInput($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $email = testInput($_POST['email']);
    $password = testInput($_POST['password']);



    echo "Email is <mark>" . $email . "</mark><br>";
    echo "Password is <mark>" . $password . "</mark><br>";
}
