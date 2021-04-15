<html>

<head>
    <title>Bewerk Producten - De kruidenier</title>
    <link rel="STYLESHEET" href="logincss.css" type="text/css">
</head>

<body>

    

    <?php

    include "config.php";

    if (isset($_GET['id'])) {

        $sql = "SELECT * FROM producten WHERE id = " . $_GET['id'];
        $result = mysqli_query($link, $sql);
        $row = mysqli_fetch_assoc($result);
    }

    if ($_POST) {

        $sql = "UPDATE producten SET
        Artikelnummer = '" . $_POST['Artikelnummer'] . "',
        Omschrijvingving = '" . $_POST['Omschrijving'] . "',
        Leverancier = '" . $_POST['Leverancier'] . "',
        Categorie = '" . $_POST['Categorie'] . "',
        Eenheid = '" . $_POST['Eenheid'] . "',
        Prijs = '" . $_POST['Prijs'] . "',
        Aantal = '" . $_POST['Aantal'] . "'
        WHERE id = " . $_POST['id'];
        mysqli_query($link, $sql);

        header('location: magazijn.php');
    }



    echo "<p></p>";

    ?>

    <p></p>
    <div class="login" style="margin-top: 25px; margin-left: 37%; height: max-content;">
        <h1 class="txt">product bewerken</h1>
        <h2 class="txt2" style="margin-top: -25px;">Bewerk hier de gegevens van de producten.</h2>
            <form action="" method="post">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        <div class="txt2">Artikelnummer</div>
                        <input type="text" name="Artikelnummer" value="<?php echo $row['Artikelnummer']; ?>" class="typvak">
                        <div class="txt2">Omschrijving</div>
                        <input type="text" name="Omschrijving" value="<?php echo $row['Omschrijving']; ?>" class="typvak">
                        <div class="txt2">Leverancier</div>
                        <input type="text" name="Leverancier" value="<?php echo $row['Leverancier']; ?>" class="typvak">
                        <div class="txt2">Categorie</div>
                        <input type="text" name="Categorie" value="<?php echo $row['Categorie']; ?>" class="typvak">
                        <div class="txt2">Eenheid</div>
                        <input type="text" name="Eenheid" value="<?php echo $row['Eenheid']; ?>" class="typvak">
                        <div class="txt2">Prijs</div>
                        <input type="text" name="Prijs" value="<?php echo $row['Prijs']; ?>" class="typvak">
                        <div class="txt2">Aantal</div>
                        <input type="text" name="Aantal" value="<?php echo $row['Aantal']; ?>" class="typvak">
                        <div style="margin-top: 15px;">
                            <input type="submit" class="button" value="Opslaan">
                            <input type="reset" class="button" value="Reset">
                        </div><br>
            </form>
    </div>
</body>

</html>