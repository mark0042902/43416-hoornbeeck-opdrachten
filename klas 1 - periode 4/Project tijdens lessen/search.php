<?php
include "header/header_home.php";
?>


<div id="start">
    <h1 class="title">Goedendag, <br> Hieronder ziet u alle huisjes die wij in de aanbieding hebben</h1>
</div>

<hr class="head">

<!-- <form class="zoek" action="index.php" method="POST">
    <input type="search" placeholder="Land van bestemming" class="filter">

    <input type="submit" value="Zoeken" class="buttonsearch">
</form>

<hr class="head"> -->

<div class="container-fluit" style="margin-left: 300px;">
    <?php

    $result = mysqli_query($link, "SELECT *, (SELECT path FROM `files` where house_id = houses.id LIMIT 1) path FROM `houses`");
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) : ?>
            <div class="card mb-3" style="max-width: 540px; margin-left: 400px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="<?= $row["path"] ?>" style="width: 100%;">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $row["title"] ?></h5>
                            <p class="card-text"><?= $row["description"] ?></p>
                            <p class="card-text"><small class="text-muted">€<?= $row["price"] ?>,-</small></p>
                            <a class='btn btn-primary' href='detail.php?id=<?= $row["id"] ?>'>Bekijk</a>
                        </div>
                    </div>
                </div>
            </div>
    <?php endwhile;
    } else {
        echo "er zijn geen resultaten gevonden";
    }
    ?>
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