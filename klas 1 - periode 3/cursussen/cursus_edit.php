<html>

<head>
    <title>Overzicht cursussen</title>
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

<body style="margin-left: 650px;">

    <h2 style="margin-top: 100px; margin-left: 10px;">Cursussen bewerken</h2>

    <?php

    $conn = mysqli_connect('localhost', 'root', '', 'test');

    if (isset($_GET['id'])) {

        $sql = "SELECT * FROM cursussen WHERE id = " . $_GET['id'];
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
    }

    if ($_POST) {

        $sql = "UPDATE cursussen SET
        cursus = '" . $_POST['cursus'] . "',
        omschrijving = '" . $_POST['omschrijving'] . "',
        prijs = '" . $_POST['prijs'] . "'
        WHERE id = '" . $_POST['id'] ."'";

        mysqli_query($conn, $sql);

       header('location: index.php');
    }



    echo "<p></p>";

    ?>

    <p></p>

    <form action="" method="post">

        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <div style="margin-left: 55px; font-size: 15px;">cursus</div><input type="text" name="cursus" value="<?php echo $row['cursus']; ?>"><br>
        <div style="margin-left: 35px; font-size: 15px;">omschrijving</div><input type="text" name="omschrijving" value="<?php echo $row['omschrijving']; ?>"><br>
        <div style="margin-left: 60px; font-size: 15px;">prijs</div><input type="text" name="prijs" value="<?php echo $row['prijs']; ?>"><br>
        <input style="margin-left: 45px; margin-top: 10px;" type="submit" name="submit" value="opslaan"><br>
    </form>

</body>

</html>