<html>

<head>

    <title>Homepage</title>
</head>

<body>

    <div class="sidebar">
        <img class="logo" src="logo_vakantie.com.png"><br>
        <a href="index.php">Home</a>
        <a href="login.php">Login</a>

        <?php
        if (isset($_SESSION["loggedin"])) {
            '<a class="active" href="account.php">Account</a>';
        }
        ?>

    </div>