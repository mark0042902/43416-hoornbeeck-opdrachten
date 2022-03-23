<?php
include "Boek.php";
include "Tijdschrift.php";
$boek = new Boek("Inleiding UML", "Ali Smit", 30, "Boek");
$boekKloon = clone $boek;
echo $boekKloon->getSpecs();
$tijdschrift = new Tijdschrift("Mac Magazine", "Verschillende", 3, "Tijdschrift");
$tijdschriftKloon = clone $tijdschrift;
echo $tijdschriftKloon->getSpecs();


