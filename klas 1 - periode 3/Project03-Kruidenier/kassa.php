<!DOCTYPE html>
<html>

<head>

    <link rel="STYLESHEET" href="kassa.css" type="text/css">

    <title>Kassa - De Kruidenier</title>
</head>

<body>
    <div class="login" style="margin-left: 35%;height: 300px; ">
        <div class="txt">Welkom in de kassa,</div>
        <div class="txt2">Typ hieronder de barcode van het product in:</div><br>
        <div class="barcode">
            <form action="kassa.php" method="POST">
                <input style="margin-top: -50px;" type="text" name="search" class="typvak">
                <input type="submit" value="Zoeken" class="button">
                <a class="button" href="uitloggen.php">Uitloggen</a>
            </form>
            <?php
            include "config.php";
            $message = '';
            if (isset($_POST["search"])) {
                $searchq = $_POST['search'];

                $query = "SELECT * FROM producten WHERE Artikelnummer LIKE '%$searchq%' OR Omschrijving LIKE '%$searchq%' OR Categorie LIKE '%$searchq%'";
                // echo $query;
                $result = mysqli_query($link, $query);
                if (mysqli_num_rows($result) == 0) {
                    $message = 'Er zijn geen resultaten gevonden!';
                }
            } else {
                echo "";
            }

            ?>
        </div>
    </div>
    <div class="producten" style="margin-left: 15%;">
        <table border="1" cellspacing="0" cellpadding="5">
            <tr>
                <td>Artikelnummer</td>
                <td>Omschrijving</td>
                <td>Leverancier</td>
                <td>Categorie</td>
                <td>Eenheid</td>
                <td>Prijs</td>
                <td>Aantal</td>
                <td>Kopen</td>
                <?php
                if (isset($_POST['search'])) {
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_array($result)) {
                            echo "<tr>
                                <td>" . $row['Artikelnummer'] . "</td>
                                <td>" . $row['Omschrijving'] . "</td>
                                <td>" . $row['Leverancier'] . "</td>
                                <td>" . $row['Categorie'] . "</td>
                                <td>" . $row['Eenheid'] . "</td>
                                <td>" . $row['Prijs'] . "</td>
                                <td>" . $row['Aantal'] . "</td>
                                <td><a href=\"kassa.php?kopen=" . $row['Artikelnummer'] . "\"><button>Kopen</a></td>
                            </tr>";
                        }
                    } else {
                        echo "er zijn geen resultaten gevonden";
                    }
                }
                if (isset($_GET["kopen"])) {

                    $sql = "UPDATE producten SET Aantal = Aantal - 1 WHERE Artikelnummer = $_GET[kopen]";
                    $result = mysqli_query($link, $sql);
                }
                ?>

        </table>
    </div>


</body>

</html>