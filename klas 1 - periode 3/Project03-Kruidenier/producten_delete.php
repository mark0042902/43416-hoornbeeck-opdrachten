<?php

$conn = mysqli_connect('localhost', 'root', '', 'dekruidenier');

if (isset($_GET['id'])){

    $sql = "DELETE FROM producten WHERE id = ".$_GET['id'];
    $result = mysqli_query($conn , $sql);
    header('location: magazijn.php');
}

echo "<p></p>";

?>
