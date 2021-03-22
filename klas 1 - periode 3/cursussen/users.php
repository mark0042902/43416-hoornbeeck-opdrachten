<html>
<head>

    <title>Overzicht users</title>

</head>

<body>

    <h1>Overzicht gebruikers</h1>   
    <h2>Gebruiker</h2>
    <?php
    $conn = mysqli_connect('localhost','root','','test');

    if ($_POST) {

        $sql = "INSERT INTO users SET
            username = '".$_POST['username']."',
            password = '".$_POST['password']."'";
        mysqli_query($conn,$sql);
    }
    echo "<p></p>";

    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);

    while ($row = mysqli_fetch_assoc($result)) {
        echo $row['id']." | ";
        echo $row['username']." | ";
        echo $row['password']." | ";
        echo $row['naam_voluit']." | <a href= 'user_edit.php?id=".$row['id']."'>Bewerken</a><br>";

    }
    ?>

</body>
</html>