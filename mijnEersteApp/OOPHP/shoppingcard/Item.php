<?php

class Item
{
    private $id;
    private $merk;
    private $model;
    private $prijs;
    private $aantal;

    function __construct($id, $merk, $model, $prijs, $aantal)
    {
        $this->id = $id;
        $this->merk = $merk;
        $this->model = $model;
        $this->prijs = $prijs;
        $this->aantal = $aantal;
    }

    function __destruct(){
        echo ("\nitem $this->id wordt verwijderd");
    }

    function setId(int $id){
        $this->id = $id;
    }function getId(){
        return $this->id;
    }

    function setMerk(int $merk){
        $this->merk = $merk;
    }function getMerk(){
        return $this->merk;
    }

    function setModel(int $model){
        $this->model = $model;
    }function getModel(){
        return $this->model;
    }

    function setPrijs(int $prijs){
        try {
            if ($prijs <= 0) {
                throw new InvalidArgumentException();
            } else {
                return $prijs;
            }
        }catch (InvalidArgumentException $e){
            return "De prijs moet niet 0 zijn!";
        }
    }function getPrijs(){
        return $this->prijs;
    }

    function setAantal(int $aantal){
        $this->aantal = $aantal;
    }function getAantal(){
        return $this->aantal;
    }
}
