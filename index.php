<!DOCTYPE html>
<html>

<head>
    <link rel="icon" type="image/x-icon" href="/img/logo.png">
    <title>LOGIN</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body>
    <form action="templates/login.php" method="post">
        <div class="login-form">
            <h2>LOGIN</h2>
            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
            <label>User Name</label>
            <input type="text" name="uname" placeholder="User Name"><br>

            <label>Password</label>
            <input type="password" name="password" placeholder="Password"><br>

            <button type="submit">Login</button>
            <!-- <a href="inc/signup.php" class="ca">Create an account</a> -->
        </div>

    </form>
</body>

</html>