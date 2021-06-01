<?php
include "header/header_login.php";
include "include/config.php";
?>

<div id="start">
    <h1 class="title">Goedendag, <br> Log hier in om huisjes te kunnen bekijken en boeken</h1>
</div>
<?php
if (isset($_SESSION["loggedin"])) {
    header("location: index.php");
}
?>
<div id="login">
    <form action="" method="post">
        <input type="text" placeholder="username" name="username" class="loginp">
        <input type="password" placeholder="password" name="password" class="loginp">
        <input type="submit" placeholder="Login" class="button" value="Login">
        <p>Heeft u geen account? <a href="register.php">Maak er hier een</a>.</p>
        <p>Wilt u accounts bewerken? <a href="users.php">Bewerk ze hier</a>.</p>
    </form>
</div>
<?php
include "end/footer.php";
?>