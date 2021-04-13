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
            <form action="kassa.php" method="POST">    
                <input style="margin-top: -50px;" type="text" name="search" class="typvak">
                <input type="submit" value="Zoeken">
            </form>    
            <?php
            include "config.php";
            $message = '';
            if (isset($_POST["search"])){
                $searchq = $_POST['search'];

                $query = "SELECT * FROM producten WHERE Artikelnummer LIKE '%$searchq%' OR Omschrijving LIKE '%$searchq%'";
                // echo $query;
                $result = mysqli_query($link, $query);
                if(mysqli_num_rows($result) == 0){
                    $message = 'Er zijn geen resultaten gevonden!';
                }
                
            }
                
            ?>

            <a href="login.php" style="font-size: 20px; text-decoration: none; color: black; border-style: solid; border-radius: 8px; border-color: #0a9714; background-color: #0a97136d; padding-left: 50px; padding-right: 50px; padding-top: 5px; padding-bottom: 5px;">home</a>
        </div>
        <div class="producten">
            <table border="1" cellspacing="0" cellpadding="5">
                <tr>
                    <td>Artikelnummer</td>
                    <td>Omschrijving</td>
                    <td>Leverancier</td>
                    <td>Eenheid</td>
                    <td>Prijs</td>
                    <td>Aantal</td>
                    <?php
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_array($result)){
                            echo "<tr>
                                <td>".$row['Artikelnummer']."</td>
                                <td>".$row['Omschrijving']."</td>
                                <td>".$row['Leverancier']."</td>
                                <td>".$row['Eenheid']."</td>
                                <td>".$row['Prijs']."</td>
                                <td>".$row['Aantal']."</td>
                            </tr>";
                            
                        }    
                    }else{
                        echo"er zijn geen resultaten gevonden";
                    }
                    ?>

            </table>
        </div>
    </div>

</body>

</html>