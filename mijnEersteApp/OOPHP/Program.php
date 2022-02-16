<?php
include 'Persoon.php';
$umut = new Persoon("Umut", 18, "M");
$demirel = new Persoon("Demirel", 23, "M");
$mark = new Persoon("Mark", 17, "M");
$thamara = new Persoon("Thamara", 18, "V");

/*Opdracht 3*/
$demirel->setLeeftijd(24);
echo "\n De leeftijd van Demirel is: " . $demirel->getLeeftijd();

/*Opdracht 5*/
echo "\n" . gettype((Object) $thamara->getLeeftijd());
echo "\n" . gettype((Object) $thamara->getGeslacht());

/*Opdracht 6*/
echo "\n" . $thamara->getGegevens();
echo "\n" . $demirel->getGegevens();

/*Opdracht 7*/
echo $demirel->toString();

echo "\n";
/*Opdracht 8*/
//$gegevensThamara = $thamara->gegevensOpslaan();
//print_r($gegevensThamara);

/*Opdracht 9*/
$Ton = new Persoon("Ton", 16, "M");
$Ton->setIsStudent(true);
$Ton->setGemiddeldCijfer(9);
$gegevensTon = $Ton->gegevensOpslaan();
print_r($gegevensTon);
