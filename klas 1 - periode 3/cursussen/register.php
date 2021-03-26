<?php
// Include config file
include "config.php";
if ($_POST) {
    $username = $_POST['username'];
    $password = $_POST['password'];


    $result   = mysqli_query($link, "INSERT INTO users(username,password) VALUES('$username','$password')");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body {
            font: 14px sans-serif;
        }

        .wrapper {
            width: 350px;
            padding: 20px;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <h2>Registeren</h2>
        <p> Vul dit formulier in om een account aan te maken.</p>
        <form method="post">
            <div class="form-group">
                <label>Gebruikersnaam</label>
                <input type="text" name="username" class="form-control">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <label>Wachtwoord</label>
                <input type="password" name="password" class="form-control">
                <span class="help-block"></span>
            </div>
            <!-- <div class="form-group">
                <label>Bevestig wachtwoord</label>
                <input type="password" name="confirm_password" class="form-control">
                <span class="help-block"></span>
            </div> -->
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
            <p>Heb je al een account? <a href="login.php">Klik hier voor inloggen</a>.</p>
        </form>
    </div>
</body>
<?php

if ($result) {
    echo "<br/><br/>&nbsp&nbsp&nbsp&nbspUser succesvol aangemaakt.";
} else {
    echo "Er is wat fout gegaan. Probeer het opnieuw." . mysqli_error($link);
}

?>

</html>