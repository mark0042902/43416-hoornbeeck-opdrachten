<html>

<head>

    <title>Overzicht users</title>

</head>

<body>

    <h1>Overzicht gebruikers</h1>
    <h2>Gebruiker</h2>
    <nav>
        <ul style="list-style-type: none; display: inline-block;">
            <li><a href="Index.php"><button>Home</button></a></li>
        </ul>
    </nav>
    <table border="1" cellspacing="0" cellpadding="5">
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
            <td>".$row['id']."</td>
            <td>".$row['username']."</td>
            <td>".$row['password']."</td>
            <td><a href= 'user_edit.php?id=" . $row['id'] . "'>Bewerken</a></td>
            <td><a href= 'user_delete.php?id=" . $row['id'] . "'>Verwijderen</a><br>"."</td>
        </tr>";
    }
    ?>

    </table>

</body>
</html>