<?php
include "header/header_login.php";
?>


<div id="start">
    <h1 class="titler">Goedendag, <br> Maak in het formulier hieronder een account aan.</h1>
</div>
<hr>
<div id="login">
    <form action="" method="post" class="form">
        <input type="text" placeholder="username" name="username" class="loginp"><br>
        <input type="password" placeholder="password" name="password" class="loginp"><br>
        <input type="hidden" value="user" name="role">
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
    $role = $_POST['role'];
    $email = $_POST['email'];
    $name = $_POST['name'];
    $birthday = $_POST['birthday'];
    $phone = $_POST['phone'];
    $city = $_POST['city'];
    $street = $_POST['street'];
    $postal_code = $_POST['postal_code'];
    $country = $_POST['country'];

    if (mysqli_query($link, "INSERT INTO users(username,password,role) VALUES('$username','$password','$role')")) {

        $last_id = mysqli_insert_id($link);
        // die("New record created successfully. Last inserted ID is: " . $last_id);

        // echo mysqli_error($link);
        $result   = mysqli_query($link, "INSERT INTO user_info(email,name,birthday,phone,city,street,postal_code,country,user_id) VALUES('$email','$name','$birthday','$phone','$city','$street','$postal_code','$country','$last_id')");

        if (isset($result)) {
            echo "User succesvol aangemaakt.";
            header("location: login.php");
        } else {
            echo "Er is wat fout gegaan. Probeer het opnieuw." . mysqli_error($link);
        }
    } else {
        echo mysqli_error($link);
    }
}

include "end/footer.php";
?>