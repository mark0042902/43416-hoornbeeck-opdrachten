<html>

<head>

    <title>Homepage</title>
</head>

<body>

    <div class="sidebar">
        <img class="logo" src="logo_vakantie.com.png"><br>
        <a class="active" href="index.php">Home</a>
        <a href="login.php">Login</a>

        <?php
        if (isset($_SESSION["loggedin"])) {
            '<a href="account.php">Account</a>';
        }
        ?>

    </div>