<html>

<head>
    <?php
    include "include/config.php";
    include "include/header.inc.php";
    ?>
    <title>Homepage</title>
</head>

<body>

    <div class="sidebar">
        <img class="logo" src="logo_vakantie.com.png"><br>
        <a class="active" href="index.php">Home</a>

        <?php
        if (isset($_SESSION["loggedin"])) {
            echo '<a href="logout.php">Uitloggen</a>';
            echo '<a href="account.php">Account</a>';
        } else {
            echo '<a href="login.php">Login</a>';
        }
        ?>

    </div>