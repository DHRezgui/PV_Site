<?php
   class Droit
   {
      private $privilege;
      private $code;
      

      public function __construct($privilege,$code)
      {
         $this->privilege=$privilege;
         $this->code=$code;
      }

      public function getDroit(){return $this->privilege;}
      public function setDroit($privilege){$this->privilege = $privilege;}

      public function getCode(){return $this->code;}
      public function setCode($code){$this->code = $code;}
   }

?>