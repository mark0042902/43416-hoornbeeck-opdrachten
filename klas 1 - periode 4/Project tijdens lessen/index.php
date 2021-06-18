<?php
include "header/header_home.php";
?>


<div id="start">
    <h1 class="title">Goedendag, <br> Vul hieronder de velden in om uw zoekresultaten te specificeren</h1>
</div>

<hr class="head">

<form class="zoek" action="index.php" method="POST">
    <!-- <input type="search" placeholder="Land van bestemming" class="filter"> -->

    <!-- <input type="search" placeholder="Aantal personen" class="filter"><br> -->

    <input type="submit" value="Zoeken" class="buttonsearch">
</form>

<hr class="head">

<div class="houses">
    <table class="table" cellspacing="0" cellpadding="5">
        <?php
        if (isset($_POST['search'])) {
            // $query = "SELECT * FROM houses WHERE country LIKE '%$searchq%'";
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr>
                                <td>
                                <ul class='photo'>" .  $row[""] . "</ul>
                                <ul class='title_p'>" . $row["title"] . "</ul>
                                <ul class='desc'>" . $row["description"] . "</ul>
                                <ul class='price'> € " . $row["price"] . "</ul>
                                </td>
                            </tr>";
                }
            } else {
                echo "er zijn geen resultaten gevonden";
            }
        }
        ?>
        <!-- <tr>
            <td>
                <ul class="photo"><? echo ' . $row[""] . ' ?></ul>
                <ul class="title_p"><? echo ' . $row["title"] . ' ?></ul>
                <ul class="desc"><? echo ' . $row["description"] . ' ?></ul>
                <ul class="price"><? echo ' . $row["price"] . ' ?></ul>
            </td>
        </tr> -->
    </table>
</div>


<?php

$message = '';
if (isset($_POST["search"])) {
    $searchq = $_POST['search'];

    $query = "SELECT * FROM houses WHERE country LIKE '%$searchq%'";
    $result = mysqli_query($link, $query);
    if (mysqli_num_rows($result) == 0) {
        $message = 'Er zijn geen resultaten gevonden!';
    }
} else {
    echo "";
}


include "end/footer.php";
?>