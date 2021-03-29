<html>
<head>
    <title>Overzicht cursussen</title>
</head>
<body>

    <h2>Overzicht cursussen</h2>

<?php

$conn = mysqli_connect('localhost', 'root', '', 'test');

if (isset($_GET['id'])){

    $sql = "SELECT * FROM cursussen WHERE id = ".$_GET['id'];
    $result = mysqli_query($conn , $sql);
    $row =mysqli_fetch_assoc($result);

}

if ($_POST) {

    $sql = "UPDATE cursussen SET
        cursus = '".$_POST['cursus']."',
        omschrijving = '".$_POST['omschrijving']."',
        prijs = '".$_POST['prijs']."',
        WHERE id = ".$_POST['id'];
    mysqli_query($conn,$sql);

    header('location: index.php');
}



echo "<p></p>";

?>

<p></p>

<form action="" method="post">

<input type="hidden" name="id" value="<?php echo $row['id'];?>">
<div>cursus</div><input type="text" name="cursus" value="<?php echo $row['cursus'];?>"><br>
<div>omschrijving</div><input type="text" name="omschrijving" value="<?php echo $row['omschrijving'];?>"><br>
<div>prijs</div><input type="text" name="prijs" value="<?php echo $row['prijs'];?>"><br>
<input type="submit" name="submit" value="opslaan"><br>
</form>

</body>
</html>