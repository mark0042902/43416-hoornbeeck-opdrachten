<html>

<head>

    <title>Overzicht users</title>

    <link rel="STYLESHEET" href="logincss.css" type="text/css">

</head>

<body>
<div class="login" style="height:max-content; margin-top: 100px;">
    <h1 class="txt">Overzicht gebruikers</h1>
    <h2 class="txt2">Gebruikers:</h2>
    <table border="1" cellspacing="0" cellpadding="5"style="margin-left: 75px; border-color:#0a9714; font-size: 20px;">
        <?php
        $conn = mysqli_connect('localhost', 'root', '', 'dekruidenier');

        if ($_POST) {

            $sql = "INSERT INTO gebruikers SET
            username = '" . $_POST['username'] . "',
            password = '" . $_POST['password'] . "'";
            mysqli_query($conn, $sql);
        }
        echo "<p></p>";

        $sql = "SELECT * FROM gebruikers";
        $result = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
            echo "
        <tr>
            <td>" . $row['id'] . "</td>
            <td>" . $row['username'] . "</td>
            <td>" . $row['password'] . "</td>
            <td><a style='text-decoration: none; color: black;' href= 'users_edit.php?id=" . $row['id'] . "'><button>Bewerken</a></td>
            <td><a style='text-decoration: none; color: black;' href= 'user_delete.php?id=" . $row['id'] . "'><button>Verwijderen</a><br>" . "</td>
        </tr>";
        }
        ?>
    </table><br>
    <a href="add_users.php" class="button">Gebruikers toevoegen</a>
    <h2 class="txt2">Admins:</h2>
    <table border="1" cellspacing="0" cellpadding="5"style="margin-left: 75px; border-color:#0a9714; font-size: 20px;">
        <?php
        $conn = mysqli_connect('localhost', 'root', '', 'dekruidenier');

        if ($_POST) {

            $sql = "INSERT INTO admin SET
            username = '" . $_POST['username'] . "',
            password = '" . $_POST['password'] . "'";
            mysqli_query($conn, $sql);
        }
        echo "<p></p>";

        $sql = "SELECT * FROM admin";
        $result = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
            echo "
        <tr>
            <td>" . $row['id'] . "</td>
            <td>" . $row['username'] . "</td>
            <td>" . $row['password'] . "</td>
            <td><a style='text-decoration: none; color: black;' href= 'admin_edit.php?id=" . $row['id'] . "'><button>Bewerken</a></td>
            <td><a style='text-decoration: none; color: black;' href= 'admin_delete.php?id=" . $row['id'] . "'><button>Verwijderen</a><br>" . "</td>
        </tr>";
        }
        ?>
    </table>
    <br>
    <a href="add_admins.php" class="button">Admins toevoegen</a><br><br>
    <a href="Adminpage.php" class="button">Terug</a><br><br>

</div>
</body>

</html>