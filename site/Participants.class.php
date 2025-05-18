<?php
   class Participant
   {
     private $matricule;
     private $id_PV;
     private $signe;
     private $dateSignature;

     public function __construct($matricule,$id_PV,$signe,$dateSignature)
     {
        $this->matricule=$matricule;
        $this->id_PV=$id_PV;
        $this->signe=$signe;
        $this->dateSignature=$dateSignature;
     }
     public function getMatricule(){return $this->matricule;}
     public function setMatricule($matricule){$this->matricule = $matricule;}

     public function getId_PV(){return $this->id_PV;}
     public function setId_PV($id_PV){$this->id_PV = $id_PV;}

     public function getSigne(){return $this->signe;}
     public function setSigne($signe){$this->signe = $signe;}

     public function getDateSignature(){return $this->dateSignature;}
     public function setDateSignature($dateSignature){$this->dateSignature = $dateSignature;}
   }
?>