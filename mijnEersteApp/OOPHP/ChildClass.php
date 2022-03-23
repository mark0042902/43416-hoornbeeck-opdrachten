<?php

class ChildClass extends ParentClass
{
    //constructor
    public function __construct(string $voornaam)
    {
        parent::__construct($voornaam);
        $this->voornaam = $voornaam;
    }
}