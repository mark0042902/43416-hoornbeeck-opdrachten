<?php
include "header/header_home.php";
include "include/config.php";
?>


<div id="start">
    <h1 class="title">Goedendag, <br> klik op filteren om uw zoekresultaten te filteren</h1>
    <h3 class="kopje">Vul hieronder de velden in om uw zoekresultaten te specificeren</h3>
</div>

< <form action="index.php" method="POST">
    <input type="search" placeholder="Land van bestemming" class="filter">

    <input type="search" placeholder="Aantal personen" class="filter">
    </form>
    <hr class="head">

    <div class="houses">
        <table class="table" cellspacing="0" cellpadding="5">
            <tr>
                <td>
                    <ul class="photo"><?   ?></ul>
                    <ul class="title_p">title</ul>
                    <ul class="desc">description</ul>
                    <ul class="price">price</ul>
                </td>
            </tr>
        </table>
    </div>


    <?php
    include "end/footer.php";
    ?>