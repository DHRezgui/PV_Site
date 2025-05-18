<?php
   class Direction
   {
     private $code_chrono;
     private $nom_direction;

     public function __construct($code_chrono,$nom_direction)
     {
        $this->code_chrono=$code_chrono;
        $this->nom_direction=$nom_direction;
     }
     public function getCode_chrono(){return $this->code_chrono;}
     public function setCode_chrono($code_chrono){$this->code_chrono = $code_chrono;}

     public function getNom_direction(){return $this->nom_direction;}
     public function setNom_direction($nom_direction){$this->nom_direction = $nom_direction;}
   }
?>