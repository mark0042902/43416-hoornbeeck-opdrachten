<?php
include "header/header_login.php";
include "include/config.php";
include "include/header.inc.php";
?>

<div id="start">
    <h1 class="titlel">Goedendag, <br> Log hier in om huisjes te kunnen boeken</h1>
</div>
<hr>
<div id="login">
    <form action="" method="post" class="formlogin">
        <input type="text" placeholder="gebruikersnaam" name="username" class="loginp"><br>
        <input type="password" placeholder="wachtwoord" name="password" class="loginp"><br>
        <input type="submit" placeholder="Login" class="button" value="Login">
        <p class="txt">Heeft u geen account? <a href="register.php">Maak er hier een</a>.</p>
    </form>
</div>

<?php
if (isset($_SESSION["loggedin"])) {
    header("location: account.php");
    exit;
}

if ($_POST) {

    // Check if username is empty
    if (empty($_POST["username"]) || empty($_POST["password"])) {
        $error = "De gebruikersnaam of het wachtwoord is leeg.";
    } else {
        $username = $_POST["username"];
        $password = hash("sha256", $_POST["password"]);


        // Prepare a select statement
        $sql = "SELECT * FROM users WHERE username = '$username' and password = $password'";
        $result = mysqli_query($link, $sql);

        if (mysqli_num_rows($result) == 1) {

            // Store data in session variables
            $_SESSION["loggedin"] = true;
            $_SESSION["username"] = $username;

            // Redirect user to welcome page
            header("location: index.php");
        } else {
            // Display an error message if password is not valid
            $error = "Het wachtwoord dat u heeft ingevuld in niet correct.";
        }
    }
}

include "end/footer.php";
?>