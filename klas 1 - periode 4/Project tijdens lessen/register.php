<?php
include "header/header_login.php";
include "include/config.php";
include "include/header.inc.php";
?>


<div id="start">
    <h1 class="titler">Goedendag, <br> Maak in het formulier hieronder een account aan.</h1>
</div>
<hr>
<div id="login">
    <form action="" method="post" class="form">
        <input type="text" placeholder="username" name="username" class="loginp"><br>
        <input type="password" placeholder="password" name="password" class="loginp"><br>
        <input type="email" placeholder="emailadres" name="email" class="loginp"><br>
        <input type="text" placeholder="personal name" name="name" class="loginp"><br>
        <label>birthday</label><input type="date" placeholder="birthday" name="birthday" class="loginp"><br>
        <input type="number" placeholder="phone number" name="phone" class="loginp"><br>
        <input type="text" placeholder="city" name="city" class="loginp"><br>
        <input type="text" placeholder="street" name="street" class="loginp"><br>
        <input type="text" placeholder="postal_code" name="postal_code" class="loginp"><br>
        <input type="text" placeholder="country" name="country" class="loginp"><br>
        <input type="submit" class="button" value="Submit"><br>
        <input type="reset" class="button" value="Reset">

    </form>
</div>

<?php
if ($_POST) {
    $username = $_POST['username'];
    $password = hash("sha256", $_POST['password']);
    $email = $_POST['email'];
    $name = $_POST['name'];
    $birthday = $_POST['birthday'];
    $phone = $_POST['phone'];
    $city = $_POST['city'];
    $street = $_POST['street'];
    $postal_code = $_POST['postal_code'];
    $country = $_POST['country'];


    $result   = mysqli_query($link, "INSERT INTO users(username,password) VALUES('$username','$password')");
    $result   = mysqli_query($link, "INSERT INTO user_info(email,name,birthday,phone,city,street,postal_code,country) VALUES('$email','$name','$birthday','$phone','$city','$street','$postal_code','$country')");

    if (isset($result)) {
        echo "User succesvol aangemaakt.";
        sleep(3);
        header("location: login.php");
    } else {
        echo "Er is wat fout gegaan. Probeer het opnieuw." . mysqli_error($link);
    }
}

include "end/footer.php";
?>