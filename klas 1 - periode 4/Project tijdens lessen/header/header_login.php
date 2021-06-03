<html>

<head>

    <link rel="STYLESHEET" href="style/index.css" type="text/css">
    <link rel="STYLESHEET" href="style/header.css" type="text/css">
    <title>Homepage</title>
</head>

<body>

    <div class="sidebar">
        <img class="logo" src="logo_vakantie.com.png"><br>
        <a href="index.php">Home</a>
        <a class="active" href="login.php">Login</a>

        <?php
        if (isset($_SESSION["loggedin"])) {
            '<a href="account.php">Account</a>';
        }
        ?>

    </div>