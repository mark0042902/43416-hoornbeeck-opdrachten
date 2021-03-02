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

    <form action="" method="POST">
        <input type="text" placeholder="gebruikersnaam" name="username">
        <input type="password" placeholder="wachtwoord" name="password">
        <input type="submit" name="submit" value="inloggen">
    </form>


    <?php


    $naam = strtolower($_POST['username']);
    $wachtwoord = $_POST['password'];

    $gebruikers = array(
        'admin' => 'gert',
        'gebruikersnaam2' => 'wachtwoord2', 
    );

    if(isset($gebruikers[$naam]))
        {
            if($wachtwoord == $gebruikers[$naam])
                {
                    $_SESSION['login'] = "1";
                    $_SESSION['login-naam'] = $naam;
                    header('Location: index.php?ingelogd');
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