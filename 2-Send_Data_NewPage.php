<!DOCTYPE html>
<html lang="en">

<head>
    <title>PHP Superglobal - $_REQUEST - Part2</title>

    <style>
    body {
        background-color: #BCBCBC;
    }

    label {
        display: block;
    }

    form {
        background-color: #e4e4e4;
        border-left: 3px solid #000;
        border-right: 3px solid #000;
        padding: 10px;
        border-radius: 35px;
        width: 250px;
        top: 50%;
        display: block;
    }

    td,
    th,
    table {
        border-collapse: collapse;

        border: 2px solid #000;
        padding: 10px;
    }

    </style>
</head>

<body>
    <br><br><br><br><br><br><br><br><br><br>

    <center>
        <form method="post" action="2-RequestPage.php" autocomplete="off">

            <label for="Fname">First Name</label>
            <input type="text" name="Fname">

            <br>

            <label for="Lname">Last Name</label>
            <input type="text" name="Lname">

            <br>

            <label for="email">Email</label>
            <input type="email" name="email">

            <br>

            <label for="phone">Phone</label>
            <input type="phone" name="phone">

            <br>
            <br>
            <input type="submit">
        </form>
    </center>

</body>

</html>
