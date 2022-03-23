<?php
include_once "IPrototype.php";
class Tijdschrift implements IPrototype
{
    public $genre;
    public $titel;
    public $auteur;
    public $prijs;

    public function __construct(string $titel, string $auteur, float $prijs, string $genre)
    {
        $this->titel = $titel;
        $this->auteur = $auteur;
        $this->prijs = $prijs;
        $this->genre = $genre;
    }

    public function __clone()
    {
        // TODO: Implement __clone() method.
    }

    public function getSpecs()
    {
        echo sprintf("%-10s %-10s %-15s %-10s %-6d\n",
        "Specs:", "  Genre: " . $this->genre, "  Titel: " . $this->titel, "  auteur: " . $this->auteur. "  prijs: ", $this->prijs);
    }
    public function setPrijs(float $prijs){
        $this->prijs = $prijs;
    }
}
