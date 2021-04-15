<!DOCTYPE html>
<html>

<head>

    <link rel="STYLESHEET" href="kassa.css" type="text/css">

    <title>Magazijn - De Kruidenier</title>
</head>

<body>
    <div class="login" style=" margin-left: 35%; height: 350px;">
        <div class="txt">Welkom in het magazijn,</div>
        <div class="txt2">Maak hieronder een keuze naar welke categorie u wilt gaan.</div>
            <form action="magazijn.php" method="POST">    
                <input style="margin-top: -50px;" type="text" name="search" class="typvak">
                <input type="submit" value="Zoeken" class="button"><br>
                <a style="font-size: 20px; text-decoration: none; color: black; border-style: solid; border-radius: 8px; border-color: #0a9714; background-color: #0a97136d; padding-left: 50px; padding-right: 50px; padding-top: 5px; padding-bottom: 5px;" href="add_product.php">Product toevoegen</a>
                <a style="font-size: 20px; text-decoration: none; color: black; border-style: solid; border-radius: 8px; border-color: #0a9714; background-color: #0a97136d; padding-left: 50px; padding-right: 50px; padding-top: 5px; padding-bottom: 5px;" href="Adminpage.php">Home</a>
            </form> 
            <?php
            include "config.php";
            $message = '';
            if (isset($_POST["search"])){
                $searchq = $_POST['search'];

                $query = "SELECT * FROM producten WHERE Artikelnummer LIKE '%$searchq%' OR Omschrijving LIKE '%$searchq%' OR Categorie LIKE '%$searchq%'";
                // echo $query;
                $result = mysqli_query($link, $query);
                if(mysqli_num_rows($result) == 0){
                    $message = 'Er zijn geen resultaten gevonden!';
                }
                
            }
                
            ?>
   
    </div>    
    <div class="producten" style="margin-left: 3%;">

            <table border="1" cellspacing="0" cellpadding="5">
                        <tr>
                            <td>Artikelnummer</td>
                            <td>Omschrijving</td>
                            <td>Leverancier</td>
                            <td>Categorie</td>
                            <td>Eenheid</td>
                            <td>Prijs</td>
                            <td>Aantal</td>
                            <td>Toevoegen</td>
                            <td>Bewerken</td>
                            <td>Verwijderen</td>
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
                                            <td><a style='text-decoration: none; color: black;'href=\"magazijn.php?kopen=". $row['Artikelnummer'] ."\"><button>Toevoegen</a></td>
                                            <td><a style='text-decoration: none; color: black;'href='edit_product.php?id=" . $row['id'] . "'><button>Bewerken</a></td>
                                            <td><a style='text-decoration: none; color: black;' href= 'producten_delete.php?id=" . $row['id'] . "'><button>Verwijderen</a><br>" . "</td>
                                        </tr>";
                                    }
                                    
                                } else {
                                    echo "er zijn geen resultaten gevonden";
                                }
                            }
                            if(isset($_GET["kopen"])){

                                $sql = "UPDATE producten SET Aantal = Aantal + 1 WHERE Artikelnummer = $_GET[kopen]";
                                $result = mysqli_query($link, $sql);
                                
                            }
                            ?>
            </table>                
    </div>
    

</body>

</html>
