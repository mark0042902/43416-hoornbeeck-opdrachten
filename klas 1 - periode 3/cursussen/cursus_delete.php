<?php

$conn = mysqli_connect('localhost', 'root', '', 'test');

if (isset($_GET['id'])){

    $sql = "DELETE FROM cursussen WHERE id = ".$_GET['id'];
    $result = mysqli_query($conn , $sql);
    header('location: randomTable.php');
}

echo "<p></p>";

?>
