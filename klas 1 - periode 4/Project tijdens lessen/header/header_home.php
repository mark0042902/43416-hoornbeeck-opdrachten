<html>

<head>

    <link rel="STYLESHEET" href="style/index.css" type="text/css">
    <link rel="STYLESHEET" href="style/header.css" type="text/css">
    <title>Homepage</title>
</head>

<body>

    <div class="sidebar">
        <img class="logo" src="logo_vakantie.com.png"><br>
        <a class="active" href="index.php">Home</a>
        <a href="login.php">login</a>
        <?php
        if (isset($_SESSION["loggedin"])) {
        }
        ?>

    </div>