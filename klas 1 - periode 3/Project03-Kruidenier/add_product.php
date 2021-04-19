<!DOCTYPE html>
<html >

<head>
    <title>Producten toevoegen - De kruidenier</title>
    <link rel="stylesheet" href="logincss.css" type="text/css">
</head>

<body>
    <div class="login" style="margin-top: -25px; height: max-content;">
        <h1 class="txt">Producten toevoegen</h1>
        <h2 class="txt2" style="margin-top: -25px;">Vul dit formulier in om een product toe te voegen.</h2>
            <form method="post">
                <div>
                    <div class="txt2">Artikelnummer</div>
                    <input type="text" name="Artikelnummer" class="typvak">
                </div>
                <div>
                    <div class="txt2">Omschrijving</div>
                    <input type="text" name="Omschrijving" class="typvak">
                </div>
                <div>
                    <div class="txt2">Leverancier</div>
                    <input type="text" name="Leverancier" class="typvak">
                </div>
                <div>
                    <div class="txt2">Categorie</div>
                    <input type="text" name="Categorie" class="typvak">
                </div>
                <div>
                    <div class="txt2">Eenheid</div>
                    <input type="text" name="Eenheid" class="typvak">
                </div>
                <div>
                    <div class="txt2">Prijs</div>
                    <input type="text" name="Prijs" class="typvak">
                </div>
                <div>
                    <div class="txt2">Aantal</div>
                    <input type="text" name="Aantal" class="typvak">
                </div>
                <div style="margin-top: 15px;">
                    <input type="submit" class="button" value="Submit">
                    <input type="reset" class="button" value="Reset">
                </div>
            </form>
    </div>

</body>

<?php
// Include config file
include "config.php";
if ($_POST) {
    $Anummer = $_POST['Artikelnummer'];
    $Oving = $_POST['Omschrijving'];
    $Lcier = $_POST['Leverancier'];
    $Crie = $_POST['Categorie'];
    $Eheid = $_POST['Eenheid'];
    $Prijs = $_POST['Prijs'];
    $Aantal = $_POST['Aantal'];

    $sql = "INSERT INTO producten(Artikelnummer,Omschrijving,Leverancier,Categorie,Eenheid,Prijs,Aantal) VALUES('$Anummer','$Oving','$Lcier','$Crie','$Eheid','$Prijs','$Aantal')";
    $result = mysqli_query($link, $sql);

    if (isset($result)) {
        header("location: magazijn.php");
    } else {
        echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp&nbsp&nbspEr is wat fout gegaan. Probeer het opnieuw." . mysqli_error($link);
    }
}
?>

</html>