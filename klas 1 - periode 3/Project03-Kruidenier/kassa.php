<!DOCTYPE html>
<html>

<head>

    <link rel="STYLESHEET" href="kassa.css" type="text/css">

    <title>Kassa - De Kruidenier</title>
</head>

<body>
    <div class="login" style="height: 300px;">
        <div class="txt">Welkom,</div>
        <div class="txt2">Typ hieronder de barcode van het product in:</div><br>
        <div class="barcode">
            
            <input style="margin-top: -50px;" type="text" name="barcode" class="typvak">
            <a href="login.php" style="font-size: 20px; text-decoration: none; color: black; border-style: solid; border-radius: 8px; border-color: #0a9714; background-color: #0a97136d; padding-left: 50px; padding-right: 50px; padding-top: 5px; padding-bottom: 5px;">home</a>
        </div>
        <div class="producten">
            <table border="1" cellspacing="0" cellpadding="5" style="margin-left: 10px;">
                <tr>
                    <td>Artikelnummer</td>
                    <td>Omschrijving</td>
                    <td>Leverancier</td>
                    <td>Eenheid</td>
                    <td>Prijs</td>
                    <td>Aantal</td>
                    <?php
                    $conn = mysqli_connect('localhost', 'root', '', 'dekruidenier');

                    if ($_POST) {

                        $sql = "INSERT INTO producten SET
                Artikelnummer = '" . $_POST['Artikelnummer'] . "',
                Omschrijving = '" . $_POST['Omschrijving'] . "',
                Leverancier = '" . $_POST['Leverancier'] . "',
                Eenheid = '" . $_POST['Eenheid'] . "',
                Prijs = '" . $_POST['Prijs'] . "',
                Aantal = '" . $_POST['Aantal'] . "'";
                        mysqli_query($conn, $sql);
                    }
                    echo "<p></p>";

                    $sql = "SELECT * FROM producten";
                    $result = mysqli_query($conn, $sql);

                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "
            <tr>
                <td>" . $row['Artikelnummer'] . "</td>
                <td>" . $row['Omschrijving'] . "</td>
                <td>" . $row['Leverancier'] . "</td>
                <td>" . $row['Eenheid'] . "</td>
                <td>" . $row['Prijs'] . "</td>
                <td>" . $row['Aantal'] . "</td><br>" . "</td>
            </tr>";
                    }
                    ?>

            </table>
        </div>
    </div>

</body>

</html>
<!-- <td><a href= 'user_edit.php?id=" . $row['id'] . "'>Bewerken</a></td>
                <td><a href= 'user_delete.php?id=" . $row['id'] . "'>Verwijderen</a><br>" . "</td> -->