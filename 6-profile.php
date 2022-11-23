<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>profile</title>

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
    <section class="vh-100" style="background-color: #9de2ff;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-md-9 col-lg-7 col-xl-5">
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body p-4">
                            <div class="d-flex text-black">
                                <div class="flex-shrink-0">
                                    <img src="user.png" alt="Generic placeholder image" class="img-fluid"
                                        style="width: 180px; border-radius: 10px;">
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <br><br>

                                    <!--cheack if user login first : yes (print that data),
                                    else:(Redirect user to Login Page)-->
                                    <?php if (isset($_SESSION['username']) && isset($_SESSION['password'])) : ?>
                                    <h4 class="mb-1"> <?php echo "Username : " . $_SESSION['username']; ?></h4>
                                    <h6 class="mb-1"> <?php echo "Password : " .  $_SESSION['password']; ?></h6>
                                    <?php else : ?>
                                    <?php header('Location: 6-login.php'); ?>
                                    <?php endif ?>

                                    <form method="post" action="logout.php">
                                        <button type="submit" class="btn btn-outline-danger"
                                            name="logout">Logout</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

    </section>
</body>

</html>
