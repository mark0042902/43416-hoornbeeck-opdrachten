<?php
include "includes/header.php";
?>


<div>
    <form method="post">
        <input type="text" name="firstname" placeholder="firstname"><br>
        <input type="text" name="lastname" placeholder="lastname"><br>
        <input type="email" name="email" placeholder="email"><br>
        <input type="hidden" name="created_at" value="<?php getdate("Y-m-d h:i:s"); ?>">
        <input type="hidden" name="updated_at" value="<?php getdate("Y-m-d h:i:s"); ?>">
        <input type="submit" class="button" value="Submit"><br>
        <input type="reset" class="button" value="Reset">
    </form>
</div>

</body>

<?php
if ($_POST) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $create = $_POST['created_at'];
    $update = $_POST['updated_at'];

    // echo $_POST['created_at'];
    // echo $_POST['updated_at'];
    // die;
    $sql = "INSERT INTO studenten(firstname,lastname,email,created_at,updated_at) VALUES('$firstname','$lastname','$email','','')";
    $result = mysqli_query($link, $sql);

    if (isset($result)) {
        header("location: index.php");
    } else {
        echo "Er is wat fout gegaan. Probeer het opnieuw." . mysqli_error($link);
    }
}
?>


<?php

include "includes/footer.php";
