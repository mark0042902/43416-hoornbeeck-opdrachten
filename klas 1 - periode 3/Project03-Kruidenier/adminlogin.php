<?php
// Initialize the session
session_start();

// Check if the user is already logged in, if yes then redirect him to welcome page
// if (isset($_SESSION["login"])) {
//     header("location: Adminpage.php");
//     exit;
// }

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
        $sql = "SELECT * FROM admin WHERE username = '$username' and password = '$password'";
        $result = mysqli_query($link, $sql);

        if (mysqli_num_rows($result) == 1) {

            // Store data in session variables
            $_SESSION["login"] = true;
            $_SESSION["username"] = $username;

            header("location: Adminpage.php");
        } else {
            // Display an error message if password is not valid
            $error = "Het wachtwoord dat u heeft ingevuld in niet correct.";
        }
    }
}
?>

<!DOCTYPE html>
<html>

<head>

    <link rel="STYLESHEET" href="logincss.css" type="text/css">

    <title>Admin login - De Kruidenier</title>
</head>

<body>
    <div class="login">
        <div class="txt">Admin login</div>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="loginplekken">
                <label>
                    <p>Gebruikersnaam</p>
                </label>
                <input style="margin-top: -50px;" type="text" name="username" class="typvak">
            </div>
            <div class="loginplekken">
                <label>
                    <p>Wachtwoord</p>
                </label>
                <input style="margin-top: -50px;" type="password" name="password" class="typvak">
            </div>
            <div class="loginplekken">
                <input type="submit" class="Loginbutton" value="Login">
            </div>
            <p style="font-size: 15px;">Bent u een gebruiker? Log dan <a href="Login.php">hier</a> in.</p>
        </form>
    </div>
    </div>
</body>

</html>