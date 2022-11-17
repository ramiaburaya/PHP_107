<!DOCTYPE html>
<html lang="en">

<head>
    <title>PHP Superglobal - $_REQUEST - Part2</title>

    <style>
    body {
        background-color: #BCBCBC;
    }

    form {
        background-color: #e4e4e4;
        border-left: 3px solid #000;
        border-right: 3px solid #000;
        padding: 10px;
        border-radius: 35px;
        width: 250px;
        top: 50%;
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
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?> " autocomplete="off">
            <label for="Fname">First Name</label>
            <input type="text" name="Fname">

            <br>
            <br>
            <label for="Lname">Last Name</label>
            <input type="text" name="Lname">

            <br>
            <br>
            <input type="submit">
        </form>
    </center>


    <?php
        echo "<br><br>";
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
        
            $fname = $_REQUEST['Fname'];
            $lname = $_REQUEST['Lname'];

            if(!empty($fname) && !empty($lname) ){
                echo "<center><table>";
                echo "<tr><th>First Name</th>";
                echo "<th>Last Name</th></tr>";

                echo "<tr><td>". $fname ."</td>";
                echo "<td>". $lname ."</td></tr>";
                echo "</table></center>";
            }else{
                echo "<center><mark><b>Empty { First name and Last Name }</b></mark></center>";
            }
        }


    ?>
</body>

</html>
