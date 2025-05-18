<?php
    class Point
    {
       private $id_point;
       private $titre;
       private $procedures_recommandations;
       private $id_PV;

       public function __construct($id_point,$titre,$procedures_recommandations,$id_PV)
       {
          $this->id_point=$id_point;
          $this->titre=$titre;
          $this->procedures_recommandations=$procedures_recommandations;
          $this->id_PV=$id_PV;
       }
       public function getId_Point(){return $this->id_point;}

       public function getTitre(){return $this->titre;}
       public function setTitre($titre){$this->titre = $titre;}

       public function getProcedures_recommandations(){return $this->procedures_recommandations;}
       public function setProcedures_recommandations($procedures_recommandations){$this->procedures_recommandations = $procedures_recommandations;}

       public function getId_PV(){return $this->id_PV;}
       public function setId_PV($id_PV){$this->id_PV = $id_PV;}
    }
?>