<html>

<head>
    <title>Overzicht gebruikers</title>
</head>
<header id="header">
    <link rel="STYLESHEET" href="style.css" type="text/css">
    <nav class="links" style="--items: 3;">
        <a href="index.php">Home</a>
        <?php
        if (isset($_SESSION['login'])) {
            echo '<a href="logout.php">Uitloggen</a>';
        } else {
            echo '<a href="login.php">Inloggen</a>';
        } ?>
        <a href="register.php">Register</a>
        <span class="line"></span>
    </nav>
</header>

<body>

    <h2 style="margin-left: 660px; margin-top: 75px;">Gebruikers bewerken:</h2>

    <?php

    include "config.php";

    if (isset($_GET['id'])) {

        $sql = "SELECT * FROM users WHERE id = " . $_GET['id'];
        $result = mysqli_query($link, $sql);
        $row = mysqli_fetch_assoc($result);
    }

    if ($_POST) {

        $sql = "UPDATE users SET
        username = '" . $_POST['username'] . "',
        password = '" . $_POST['password'] . "'
        WHERE id = " . $_POST['id'];
        mysqli_query($link, $sql);

        header('location: users.php');
    }



    echo "<p></p>";

    ?>

    <p></p>

    <form action="" method="post">

        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <div style="margin-left: 690px;">Gebruikersnaam</div><input style="margin-left: 650px;" type="text" name="username" value="<?php echo $row['username']; ?>"><br>
        <div style="margin-left: 700px;">Wachtwoord</div><input style="margin-left: 650px;" type="text" name="password" value="<?php echo $row['password']; ?>"><br>
        <input type="hidden" name="naam_voluit" value="<?php echo $row['naam_voluit']; ?>"><br>
        <input style="margin-left: 690px;" type="submit" name="submit" value="opslaan"><br>
    </form>

</body>

</html>