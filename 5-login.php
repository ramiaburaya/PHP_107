<?php include 'design/header.php'; ?>


<?php include 'design/navbar.php'; ?>


<br><br><br><br><br><br>

<center>
    <form method="post" action="<?php echo htmlspecialchars("5-handel_login.php"); ?>" autocomplete="off">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="userName" name="userName" placeholder="name@example.com">
            <label for="userName">username</label>
        </div>

        <div class="form-floating">
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            <label for="password">Password</label>
        </div>

        <input class="btn btn-outline-primary" type="submit">
    </form>
</center>


<?php include 'design/footer.php'; ?>
