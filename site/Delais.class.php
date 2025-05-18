<?php
   class Delais
   {
      private $id_suivi;
      private $matricule;
      private $delai;

      public function __construct($id_suivi,$matricule,$delai)
      {
        $this->id_suivi=$id_suivi;
        $this->matricule=$matricule;
        $this->delai=$delai;
      }
      public function getId_Suivi(){return $this->id_suivi;}
      public function setId_Suivi($id_suivi){ $this->id_suivi = $id_suivi;}

      public function getMatricule(){return $this->matricule;}
      public function setMatricule($matricule){ $this->matricule = $matricule;}

      public function getDelai(){return $this->delai;}
      public function setDelai($delai){ $this->delai = $delai;}
   }
?>