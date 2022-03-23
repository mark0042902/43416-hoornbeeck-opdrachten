<?php
include_once "IPrototype.php";
class Batavus implements IPrototype
{
    protected $merk;
    protected $frame;
    protected $zadel;
    public $prijs;

    public function __construct(string $merk, string $frame, string $zadel, float $prijs)
    {
        $this->merk = $merk;
        $this->frame = $frame;
        $this->zadel = $zadel;
        $this->prijs = $prijs;
    }

    public function getSpecs()
    {
        echo sprintf("%-10s %-15s %-10s %-6d\n",
            $this->merk, $this->frame, $this->zadel, $this->prijs);
    }

    public function setPrijs(float $prijs){
        $this->prijs = $prijs;
    }

    public function __clone()
    {
        // TODO: Implement __clone() method.
    }

}
