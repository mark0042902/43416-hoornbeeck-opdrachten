<?php
include "header.inc.php";
?>

<head>
    <meta http-equiv="Content Type" content="text/html; charset=utf-8" />
    <title>Cursussen</title>
</head>

<body>

    <h2>Cursussen</h2>

    <nav>
        <ul>
            <li><a href="Index.php">Home</a></li>
            <li><a href="Inloggen.php">Inloggen</a></li>
        </ul>
    </nav>

        <table border="1" cellspacing="0" cellpadding="5">
            <tr>
                <td>Cursus</td>
                <td>Omschrijving</td>
                <td>Prijs</td>
                <td>&nbsp;</td>
            </tr>

            <?php

            $items = array(
                array(
                    "cursus" => "Javascript",
                    "omschrijving" => "Programmeren in de browser",
                    "prijs" => 90.00
                ),
                array(
                    "cursus" => "PHP",
                    "omschrijving" => "Programmeren op de server",
                    "prijs" => 150.00
                ),
                array(
                    "cursus" => "Dreamweaver Eindwerk",
                    "omschrijving" => "Webdesign in de praktijk",
                    "prijs" => 180.00
                ),
                array(
                    "cursus" => "Dreamweaver",
                    "omschrijving" => "Webdesign thuis",
                    "prijs" => 280.00
                )

            );



if (isset($_SESSION['login'])) { 
    foreach ($items as $item) {
        echo "
        <tr>
            <td>".$item['cursus']."</td>
            <td>".$item['omschrijving']."</td>
            <td>".$item['prijs']."</td>
            <td><a href='?course=".$item['cursus']."'>inschrijven</a></td>
        </tr>";
    }

}



echo "</table>
</form>";

if ($_POST) {
    if($_POST['username']) {
        echo "heeft zich ingeschreven voor een hele vreemde cursus";
    }
}


?>