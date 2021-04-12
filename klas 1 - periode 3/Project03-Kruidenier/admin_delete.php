<?php

$conn = mysqli_connect('localhost', 'root', '', 'dekruidenier');

if (isset($_GET['id'])){

    $sql = "DELETE FROM admin WHERE id = ".$_GET['id'];
    $result = mysqli_query($conn , $sql);
    header('location: users.php');
}

echo "<p></p>";

?>