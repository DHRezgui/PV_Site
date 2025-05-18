<?php
  class Suivi
  {
     private $id_suivi;
     private $remarques;
     private $dateSuivi;
     private $id_PV;

     public function __construct($id_suivi,$remarques,$dateSuivi,$id_PV)
     {
        $this->id_suivi=$id_suivi;
        $this->remarques=$remarques;
        $this->dateSuivi=$dateSuivi;
        $this->id_PV=$id_PV;
     }
     public function getId_Suivi(){return $this->id_suivi;}

     public function getRemarques(){return $this->remarques;}
     public function setRemarques($remarques){$this->remarques = $remarques;}

     public function getDateSuivi(){return $this->dateSuivi;}
     public function setDateSuivi($dateSuivi){$this->dateSuivi = $dateSuivi;}

     public function getId_PV(){return $this->id_PV;}
     public function setId_PV($id_PV){$this->id_PV = $id_PV;}
  }
?>