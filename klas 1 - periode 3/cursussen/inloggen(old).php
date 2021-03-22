<?php
include "header.inc.php";
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="Index.php">Home</a></li>
            <?php
            if (isset($_SESSION['login'])){
                echo '<li><a href="uitloggen.php">Uitloggen</a></li>';
            } else {
                echo '<li><a href="Inloggen.php">Inloggen</a></li>';
            }
            ?>
        </ul>
    </nav>

    <form action="" method="POST">
        <input type="text" placeholder="gebruikersnaam" name="username"><br><br>
        <input type="password" placeholder="wachtwoord" name="password"><br><br>
        <input type="submit" name="submit" value="inloggen">
    </form>


    <?php


    $naam = (isset($_POST["username"])) ? $_POST["username"] : "" ;
    $wachtwoord = (isset($_POST["password"])) ? $_POST["password"] : "" ;

    $gebruikers = array(
        'admin' => 'gert',
        'gebruikersnaam2' => 'wachtwoord2', 
    );

    if($_POST && !isset($gebruikers[$naam]))
        {
            if($wachtwoord == $gebruikers[$naam])
                {
                    $_SESSION['login'] = "1";
                    $_SESSION['login-naam'] = $naam;
                    header('Location: index.php');
                }
            else
                {
                    echo 'Wachtwoord klopt niet, probeer opnieuw';
                } 
        }           
    else
        {
            echo 'De gebruikersnaam is niet bekend, probeer opnieuw';
        }
        
    


    ?>
</body>
</html>