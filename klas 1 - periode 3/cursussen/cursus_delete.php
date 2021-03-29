<?php

$conn = mysqli_connect('localhost', 'root', '', 'test');

if (isset($_GET['id'])){

    $sql = "DELETE FROM cursus WHERE id = ".$_GET['id'];
    $result = mysqli_query($conn , $sql);
    header('location: index.php');
}

echo "<p></p>";

?>
