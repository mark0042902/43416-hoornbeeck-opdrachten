<?php
include "Bestand.php";
$bestand = new Bestand();

try {
    $bestand->schrijven();
    $bestand->lezen();
} catch (Exception $e){
    echo "Exception: " . $e->getMessage();
}
