<form method="post" action="">
    <label>Email</label>
    <input type="email" name="email">
    </div>
    <button type="submit" name="controleren" value="controleren">Controleren</button>
</form>

<?php
if($_POST){
    $email = $_POST['email'];

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo("$email is a valid email address");
    } else {
    echo("$email is not a valid email address");
    }
}
?>