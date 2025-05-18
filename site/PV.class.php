<?php
   class PV{
     private $id_PV;
     private $administration;
     private $datePV;
     private $lieu;
     private $sujet;
     private $cadre_general;


     public function __construct($id_PV,$administration,$datePV,$lieu,$sujet,$cadre_general)
     {
        $this->id_PV=$id_PV;
        $this->administration=$administration;
        $this->datePV=$datePV;
        $this->lieu=$lieu;
        $this->sujet=$sujet;
        $this->cadre_general=$cadre_general;
     }
     public function getId_PV(){return $this->id_PV;}

     public function getAdministration(){return $this->administration;}
     public function setAdministration($administration){$this->administration = $administration;}
     
     public function getDatePV(){return $this->datePV;}
     public function setDatePV($datePV){ $this->datePV = $datePV;}

     public function getLieu(){return $this->lieu;}
     public function setLieu($lieu){$this->lieu = $lieu;}
     
     public function getSujet(){return $this->sujet;}
     public function setSujet($sujet){$this->sujet = $sujet;}

     public function getCadre_general(){return $this->cadre_general;}
     public function setCadre_general($cadre_general){$this->cadre_general = $cadre_general;}
     
   }
?>