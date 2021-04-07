<html>

<head>

    <title>Overzicht users</title>

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


<body style="margin-top: 100px; margin-left: 550px;">

    <h1 style="margin-left: 75px;">Overzicht gebruikers</h1>
    <h2 style="margin-left: 125px;">Gebruikers:</h2>
    <table border="1" cellspacing="0" cellpadding="5" style="margin-left: 10px;">
        <?php
        $conn = mysqli_connect('localhost', 'root', '', 'test');

        if ($_POST) {

            $sql = "INSERT INTO users SET
            username = '" . $_POST['username'] . "',
            password = '" . $_POST['password'] . "'";
            mysqli_query($conn, $sql);
        }
        echo "<p></p>";

        $sql = "SELECT * FROM users";
        $result = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
            echo "
        <tr>
            <td>" . $row['id'] . "</td>
            <td>" . $row['username'] . "</td>
            <td>" . $row['password'] . "</td>
            <td><a href= 'user_edit.php?id=" . $row['id'] . "'>Bewerken</a></td>
            <td><a href= 'user_delete.php?id=" . $row['id'] . "'>Verwijderen</a><br>" . "</td>
        </tr>";
        }
        ?>

    </table>

</body>

</html>