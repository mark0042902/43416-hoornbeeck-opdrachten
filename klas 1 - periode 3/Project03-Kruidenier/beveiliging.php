<html>

<head>

    <title>Overzicht users</title>

</head>
<header id="header">
    <link rel="STYLESHEET" href="logincss.css" type="text/css">
    </nav>
</header>

<body>
    <div class="login" style="height:max-content; width: max-content; margin-top: 150px;">
        <h1 class="txt">Beveiligingsmeldingen</h1>
        <h2 class="txt2">Hieronder ziet u alle beveiligingsmeldingen:</h2>
        <?php
            include 'config.php';
            $json_url = "https://martenbiesheuvel.nl/hoornbeeckhelden/security_log.json";
            $json = file_get_contents($json_url);
            $data = json_decode($json, TRUE);
        ?>

        <table border="1" cellspacing="0" cellpadding="5" style="border-color:#0a9714; font-size: 20px; margin-left: 25px;">

            <tr>
                <td>Camera</td>
                <td>Tijd</td>
                <td>Melding</td>
                <?php
                foreach ($data as $row) {
                    echo "<tr>
                        <td>" . $row['camera'] . "</td>
                        <td>" . $row['datetime'] . "</td>
                        <td>" . $row['message'] . "</td>
                        </tr>";
                }
                ?>
        </table><br>

        <a href="Adminpage.php" class="button">Terug</a><br><br>

    </div>
</body>

</html>