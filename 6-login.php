<?php session_start(); ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>login</title>

    <!--Main CSS-->
    <link rel="stylesheet" href="style.css">

    <!--Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!--Bootstrap JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</head>

<body>


    <center>

        <br><br><br><br><br><br>

        <?php
        // if there any Error will print it to user
        if (isset($_SESSION['errors'])) : ?>
        <?php foreach ($_SESSION['errors'] as $error) : ?>
        <div class="alert alert-danger text-center">
            <?php echo $error; ?>
        </div>
        <?php endforeach; ?>
        <?php unset($_SESSION['errors']); ?>
        <?php endif; ?>

        <div class="alert alert-dark text-center" role="alert">
            <span>Login</span>
        </div>

        <form method="post" action="<?php echo htmlspecialchars("6-login_handel.php"); ?>" autocomplete="off">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="userName" name="userName" placeholder="name@example.com">
                <label for="userName">username</label>
            </div>

            <div class="form-floating">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                <label for="password">Password</label>
            </div>

            <input class="btn btn-outline-primary" type="submit" value="Login">
        </form>
    </center>
</body>

</html>
