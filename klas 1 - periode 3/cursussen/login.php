<?php
// Initialize the session
session_start();

// Check if the user is already logged in, if yes then redirect him to welcome page
if (isset($_SESSION["login"])) {
    header("location: index.php");
    exit;
}

// Include config file
include("config.php");

// Processing form data when form is submitted
if ($_POST) {

    // Check if username is empty
    if (empty($_POST["username"]) || empty($_POST["password"])) {
        $error = "De gebruikersnaam of het wachtwoord is leeg.";
    } else {
        $username = $_POST["username"];
        $password = $_POST["password"];
    

        // Prepare a select statement
        $sql = "SELECT * FROM users WHERE username = '$username' and password = '$password'";
        $result = mysqli_query($link, $sql);

        if(mysqli_num_rows($result) == 1) {

             // Store data in session variables
             $_SESSION["login"] = true;
             $_SESSION["username"] = $username;

             // Redirect user to welcome page
             header("location: index.php");
         } else {
             // Display an error message if password is not valid
             $error = "Het wachtwoord dat u heeft ingevuld in niet correct.";
         }
        }   
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
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
        <h2>Login</h2>
        <p>Vul hier uw gegevens in om in te loggen.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Gebruikersnaam</label>
                <input type="text" name="username" class="form-control">
            </div>
            <div class="form-group">
                <label>Wachtwoord</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
            <?= isset($error) ? $error : '' ?>
            <p>Heeft u geen account? <a href="register.php">Maak er hier een</a>.</p>
            <p>Wilt u accounts bewerken? <a href="users.php">Bewerk ze hier</a>.</p>
        </form>
    </div>
</body>

</html>