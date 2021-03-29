<?php
include "header.inc.php";
?>

<head>
    <meta http-equiv="Content Type" content="text/html; charset=utf-8" />
    <title>Cursussen</title>
</head>
<header id="header"> <link rel="STYLESHEET" href="style.css" type="text/css">
	<nav class="links" style="--items: 5;">
		<a href="#">Home</a>
		<a href="#">Login</a>
		<a href="#">Register</a>
		<?php
            if (isset($_SESSION['login'])) {
                echo '<a href="logout.php">Uitloggen</a>';
            } else {
                echo '<a href="login.php">Inloggen</a>';
            }?>
		<span class="line"></span>
	</nav>
</header>
<body>

    <h2>Cursussen</h2>
<br>
<br>
<br>
<br>




    <table border="1" cellspacing="0" cellpadding="5">
        <tr>
            <td>Cursus</td>
            <td>Omschrijving</td>
            <td>Prijs</td>
            <?php if (isset($_SESSION['login'])) {
                echo "
                <td>Inschrijven</td>
                <td>Bewerken</td>
                <td>Verwijderen</td>
            </tr>";
            }
            ?>
        </tr>

        <?php

        $conn = mysqli_connect('localhost', 'root', '', 'test');

        if ($_POST) {

            $sql = "INSERT INTO cursussen SET
                cursus = '" . $_POST['cursus'] . "',
                omschrijving = '" . $_POST['omschrijving'] . "'
                prijs = '" . $_POST['prijs'] . "'";
            mysqli_query($conn, $sql);
        }

        $sql = "SELECT * FROM cursussen";
        $result = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
            echo "
            <tr>
                <td>".$row['cursus']."</td>
                <td>".$row['omschrijving']."</td>
                <td>€ ".$row['prijs']."</td>
                ";           
            if (isset($_SESSION['login'])) {
                echo "
                <td><a href='?course=" . $row['cursus'] . "'><button>Inschrijven</button></a></td>
                <td><a href= 'cursus_edit.php?id=" . $row['id'] . "'>Bewerken</a></td>
                <td><a href= 'cursus_delete.php?id=" . $row['id'] . "'>Verwijderen</a><br>"."</td>
            </tr>";
            }
            echo "</tr>";
        }

    echo "</table>
        </form>";

        if (isset($_GET['course'])) {
            echo "Beste " . $_SESSION["username"] . " u heeft zich ingeschreven voor " . $_GET['course'] . "";
        }

    ?>
    </body>
</html>