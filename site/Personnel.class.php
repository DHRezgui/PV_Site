<?php
  class Personnel
  {
    private $matricule;
    private $nom_prenom;
    private $statut;
    private $numero_tlf;
    private $adresse_mail;
    private $privilege;
    private $code_chrono_dir;

    public function __construct($matricule,$nom_prenom,$statut,$numero_tlf,$adresse_mail,$privilege,$code_chrono_dir)
    {
        $this->matricule=$matricule;
        $this->nom_prenom=$nom_prenom;
        $this->statut=$statut;
        $this->numero_tlf=$numero_tlf;
        $this->adresse_mail=$adresse_mail;
        $this->privilege=$privilege;
        $this->code_chrono_dir=$code_chrono_dir;
    }
    public function getMatricule(){return $this->matricule;}
    public function setMatricule($matricule){$this->matricule = $matricule;}

    public function getNom_Prenom(){return $this->nom_prenom;}
    public function setNom_Prenom($nom_prenom){$this->nom_prenom = $nom_prenom;}

    public function getStatut(){return $this->statut;}
    public function setStatut($statut){$this->statut = $statut;}

    public function getNumero_tlf(){return $this->numero_tlf;}
    public function setNumero_tlf($numero_tlf){$this->numero_tlf = $numero_tlf;}

    public function getAdresse_mail(){return $this->adresse_mail;}
    public function setAdresse_mail($adresse_mail){$this->adresse_mail = $adresse_mail;}

    public function getPrivilege(){return $this->privilege;}
    public function setPrivilege($privilege){$this->privilege = $privilege;}

    public function getCode_chrono_dir(){return $this->code_chrono_dir;}
    public function setCode_chrono_dir($code_chrono_dir){$this->code_chrono_dir = $code_chrono_dir;}

  }
?>