<html>

<head>
    <title>Bewerk Admins - De kruidenier</title>
    <link rel="STYLESHEET" href="logincss.css" type="text/css">
</head>

<body>

    <?php

    include "config.php";

    if (isset($_GET['id'])) {

        $sql = "SELECT * FROM admin WHERE id = " . $_GET['id'];
        $result = mysqli_query($link, $sql);
        $row = mysqli_fetch_assoc($result);
    }

    if ($_POST) {

        $sql = "UPDATE admin SET
        username = '" . $_POST['username'] . "',
        password = '" . $_POST['password'] . "'
        WHERE id = " . $_POST['id'];
        mysqli_query($link, $sql);

        header('location: users.php');
    }



    echo "<p></p>";

    ?>

    <p></p>

    <form action="" method="post" class="login" style="height: 400px;">
        <h2 class="txt">Admins bewerken:</h2>
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <div class="txt2">Gebruikersnaam</div>
        <input type="text" name="username" value="<?php echo $row['username']; ?>" class="typvak"><br>
        <div class="txt2">Wachtwoord</div>
        <input type="text" name="password" value="<?php echo $row['password']; ?>" class="typvak"><br>
        <input type="hidden" name="naam_voluit" value="<?php echo $row['naam_voluit']; ?>"><br>
        <input type="submit" name="submit" value="opslaan" class="button"><br>
    </form>

</body>

</html>