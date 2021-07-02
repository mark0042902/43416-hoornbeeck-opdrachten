<?php
include "header/header_home.php";
?>


<div id="start">
    <h1 class="title" style="margin-left: 50px;">Goedendag, <br> Hieronder ziet u het huisje wat u wilde bekijken</h1>
</div>

<hr class="head">

<div class="container-fluit" style="margin-left: 400px;">
    <?php
    $resultHouses = mysqli_query($link, "SELECT *, (SELECT path FROM `files` where house_id = houses.id LIMIT 1) path FROM `houses` where id = '$_GET[id]'");
    $resultPhotos = mysqli_query($link, "SELECT * FROM `files` where house_id = '$_GET[id]'");
    $row = mysqli_fetch_array($resultHouses); ?>
    <div class="card mb-3" style="width: fit-content; margin-left: 450;">
        <img src="<?= $row["path"]; ?>" class="" style="width: 200px; height: 200px;">
        <?php
        $photos = mysqli_fetch_all($resultPhotos, MYSQLI_ASSOC);
        array_shift($photos);


        ?>
        <?php foreach ($photos as $photo) : ?>
            <img src="<?= $photo["path"] ?>" class="card-img-top" style="width: 200px; height: 200px;">
        <?php endforeach; ?>

        <div class="card-body">
            <h5 class="card-title">Naam huisje: <?= $row["title"] ?></h5>
            <p class="card-text">Beschrijving: <?= $row["description"] ?></p>
            <p class="card-text"><small class="text-muted">€<?= $row["price"] ?>,-</small></p>
        </div>
    </div>

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