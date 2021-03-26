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
        <ul style="list-style-type: none; display: inline-block;">
            <li><a href="Index.php"><button>Home</button></a></li>
            <?php
            if (isset($_SESSION['login'])){
                echo '<li><a href="logout.php"><button>Uitloggen</button></a></li>';
            } else {
                echo '<li><a href="login.php"><button>Inloggen</button></a></li>'; 
            }
            ?>
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
                    "cursus" => "Dreamweaver",
                    "omschrijving" => "Basis webdesign",
                    "prijs" => 120.00
                ),
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
                    "cursus" => "Dreamweaver-3",
                    "omschrijving" => "Webdesign thuis",
                    "prijs" => 280.00
                )

            );



 
    foreach ($items as $item) {
        echo "
        <tr>
            <td>".$item['cursus']."</td>
            <td>".$item['omschrijving']."</td>
            <td>".$item['prijs']."</td>
            ";
            if (isset($_SESSION['login'])) {
            echo "<td><a href='?course=".$item['cursus']."'><button>Inschrijven</button></a></td>";
            }
        echo "</tr>";
    }





echo "</table>
</form>";

if(isset($_GET['course'])) {
    echo "U heeft zich ingeschreven voor ".$_GET['course']."";
}

?>