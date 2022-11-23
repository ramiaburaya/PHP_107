<?php include 'design/header.php'; ?>

<?php

function test_input($data)
{
    $data = trim($data);
    $data = stripcslashes($data);
    return htmlspecialchars($data);
}

$userName = test_input($_POST['userName']);

$password = test_input($_POST['password']);

$CFlag = "0";

if (empty($userName)) {
    $CFlag = "User name missing";
} else {
    if (empty($password)) {
        $CFlag = "Password missing";
    }
}



if ($CFlag == "0") {

    echo "<h1 style=\"text-align: center; padding:10px;
    margin:10px;\"> Welcome <mark>" . $userName . "</mark></h1>";

    echo "<h3 style=\"text-align: center; padding:10px;
    margin:10px;\">your password is <mark>" . $password . " </mark></h3>";
} else {
    header('Location: 5-login.php?result=' . $CFlag);
    exit;
}
?>

<?php include 'design/footer.php';
