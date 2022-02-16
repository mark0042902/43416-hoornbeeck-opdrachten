<?php
    class Persoon{
        public string $naam;
        private int $leeftijd;
        protected string $geslacht;
        public bool $isStudent;
        public float $gemiddeldCijfer;

        //constructor methode
        function __construct(string $naam, int $leeftijd, string $geslacht){
            $this->naam = $naam;
            $this->leeftijd = $leeftijd;
            $this->geslacht = $geslacht;
            echo "\n Nieuw Persoon-object aangemaakt";
            echo "\n de property naam is " . $this->naam;
        }

        function setNaam(string $naam){
            $this->naam = $naam;
        }
        function getNaam(){
            return $this->naam;
        }
        function setLeeftijd(int $leeftijd){
            $this->leeftijd = $leeftijd;
        }
        function getLeeftijd()
        {
            return $this->leeftijd;
        }
        function setGeslacht(string $geslacht){
            $this->geslacht = $geslacht;
        }
        function getGeslacht(){
            return $this->geslacht;
        }
        function setIsStudent(bool $isStudent){
            $this->isStudent = $isStudent;
        }
        function getIsStudent()
        {
            return $this->isStudent;
        }
        function setGemiddeldCijfer(float $gemiddeldCijfer){
            $this->gemiddeldCijfer = $gemiddeldCijfer;
        }
        function getGemiddeldCijfer(){
            return $this->gemiddeldCijfer;
        }
        function getGegevens(){
            $gegevens =
                "\nDe gegevens van " .$this->naam . " zijn" .
                "\nLeeftijd: " .$this->leeftijd .
                "\nGeslacht: " .$this->geslacht;
            return $gegevens;
        }
        function toString(){
            return ("\nDe gegevens van " . $this->naam . " zijn" .
            "\nLeeftijd: " . $this->leeftijd .
            "\nGeslacht: " . $this->geslacht);
        }
        function gegevensOpslaan(){
            echo "\n";
            $array = [];
            $array[0] = $this->getNaam();
            $array[1] = $this->getLeeftijd();
            $array[2] = $this->getGeslacht();
            $array[3] = $this->getIsStudent();
            $array[4] = $this->getGemiddeldCijfer();

            return $array;
        }
//        function __destruct()
//        {
//            echo "\n Persoon object $this->naam wordt verwijderd";
//        }

    }
