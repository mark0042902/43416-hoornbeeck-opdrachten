<?php

class User extends Persoon
{
    public string $e_mail;
    private string $wachtwoord;
    private string $rol;

    function __construct($naam, $leeftijd, $geslacht, $e_mail, $wachtwoord, $rol)
    {
        parent::__construct($naam, $leeftijd, $geslacht);
        $this->e_mail = $e_mail;
        $this->wachtwoord = $wachtwoord;
        $this->rol = $rol;
        echo "\nNieuwe User $naam extends Persoon";
    }

    function setMail(string $e_mail){
        $this->e_mail = $e_mail;
    }
    function getMail(){
        return $this->e_mail;
    }
    public function getGegevens()
    {
        $gegevens = parent::getGegevens();
        $gegevens .= "\nE_mail: $this->e_mail";
        $gegevens .= "\nWachtwoord: $this->wachtwoord";
        $gegevens .= "\nRol: $this->rol";
        return $gegevens;
    }
    public function getNaam()
    {
        $naam = parent::getNaam();
        $geslacht = parent::getGeslacht();
        if ($geslacht == "M"){
            return "\nGeachte heer " . $naam;
        }elseif ($geslacht == "V"){
            return "Geachte mevrouw" . $naam;
        }
    }
}
