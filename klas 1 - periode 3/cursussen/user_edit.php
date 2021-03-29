<html>
<head>
    <title>Overzicht gebruikers</title>
</head>
<body>

    <h2>Overzicht gebruikers</h2>

<?php

$conn = mysqli_connect('localhost', 'root', '', 'test');

if (isset($_GET['id'])){

    $sql = "SELECT * FROM users WHERE id = ".$_GET['id'];
    $result = mysqli_query($conn , $sql);
    $row =mysqli_fetch_assoc($result);

}

if ($_POST) {

    $sql = "UPDATE users SET
        username = '".$_POST['username']."',
        password = '".$_POST['password']."',
        naam_voluit = '".$_POST['naam_voluit']."',
        WHERE id = ".$_POST['id'];
    mysqli_query($conn,$sql);

    header('location: users.php');
}



echo "<p></p>";

?>

<p></p>

<form action="" method="post">

<input type="hidden" name="id" value="<?php echo $row['id'];?>">
<div>Gebruikersnaam</div><input type="text" name="username" value="<?php echo $row['username'];?>"><br>
<div>Wachtwoord</div><input type="text" name="password" value="<?php echo $row['password'];?>"><br>
<input type="hidden" name="naam_voluit" value="<?php echo $row['naam_voluit'];?>"><br>
<input type="submit" name="submit" value="opslaan"><br>
</form>

</body>
</html>