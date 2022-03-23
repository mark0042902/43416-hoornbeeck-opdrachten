<?php
include "Gazelle.php";
include "Batavus.php";
$gazelle = new Gazelle("Gazelle", "20,5 inch", "Dames", 1000);
$gazelleKloon = clone $gazelle;
echo $gazelleKloon->getSpecs();
$batavus = new Batavus("Batavus", "20,5 inch", "Heren", 900);
$batavusKloon = clone $batavus;
echo $batavusKloon->getSpecs();


