<?php
  require "Model.class.php";
  require "PV.class.php";
  require "Suivi.class.php";
  require "PointsAugmentes.class.php";
  require "Droit.class.php";
  require "Personnel.class.php";
  require "Direction.class.php";
  require "Delais.class.php";
  require "Participants.class.php";

  class Manager extends Model
  {
     private $PVs;
     private $Suivis;
     private $Points;
     private $Droits;
     private $Personnels;
     private $Directions;
     private $Delais;
     private $Participants;

     public function ajoutPV($pv)
     {
        $this->PVs[] = $pv;
     }

     public function ajoutSuivis($suivi)
     {
        $this->Suivis[] = $suivi;
     }

     public function ajoutPoints($point)
     {
        $this->Points[] = $point;
     }

     public function ajoutDroits($droit)
     {
        $this->Droits[] = $droit;
     }

     public function ajoutPersonnels($personnel)
     {
        $this->Personnels[] = $personnel;
     }

     public function ajoutDirections($direction)
     {
        $this->Directions[] = $direction;
     }

     public function ajoutDelais($delais)
     {
        $this->Delais[] = $delais;
     }

     public function ajoutParticipants($participant)
     {
        $this->Participants[] = $participant;
     }
      
      
     public function chargementPVs()
     {
        $req = $this->getBdd()->prepare("SELECT * FROM PV ORDER BY id_PV");
        $req->execute();
        $PVs = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();

        foreach($PVs as $pv)
        {
            $p = new PV($pv["id_PV"],$pv["administration"],$pv["datePV"],$pv["lieu"],$pv["sujet"],$pv["cadre_general"]);
            $this->ajoutPV($p);
        }
     }

     public function chargementSuivis()
     {
        $req = $this->getBdd()->prepare("SELECT * FROM Suivi ORDER BY id_suivi");
        $req->execute();
        $Suivis = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();

        foreach($Suivis as $suivi)
        {
            $s = new Suivi($suivi["id_suivi"],$suivi["remarques"],$suivi["dateSuivi"],$suivi["id_PV"]);
            $this->ajoutSuivis($s);
        }
     }

     public function chargementPoints()
     {
        $req = $this->getBdd()->prepare("SELECT * FROM pointsaugmentes ORDER BY id_point");
        $req->execute();
        $Points = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();

        foreach($Points as $point)
        {
            $po = new Point($point["id_point"],$point["titre"],$point["procedures_recommandations"],$point["id_PV"]);
            $this->ajoutPoints($po);
        }
     }

     public function chargementDroits()
     {
        $req = $this->getBdd()->prepare("SELECT * FROM Droit ORDER BY code");
        $req->execute();
        $Droits = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();

        foreach($Droits as $droit)
        {
            $d = new Droit($droit["privilege"],$droit["code"]);
            $this->ajoutDroits($d);
        }
     }

     public function chargementPersonnels()
     {
        $req = $this->getBdd()->prepare("SELECT * FROM Personnel ORDER BY matricule");
        $req->execute();
        $Personnels = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();

        foreach($Personnels as $personnel)
        {
            $pr = new Personnel($personnel["matricule"],$personnel["nom_prenom"],$personnel["statut"],$personnel["numero_tlf"],$personnel["adresse_mail"],$personnel["privilege"],$personnel["code_chron_dir"]);
            $this->ajoutPersonnels($pr);
        }
     }

     public function chargementDirections()
     {
        $req = $this->getBdd()->prepare("SELECT * FROM Direction ORDER BY code_chrono");
        $req->execute();
        $Directions = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();

        foreach($Directions as $direction)
        {
            $dr = new Direction($direction["code_chrono"],$direction["nom_direction"]);
            $this->ajoutDirections($dr);
        }
     }

     public function chargementDelais()
     {
        $req = $this->getBdd()->prepare("SELECT * FROM Delais ORDER BY matricule,id_suivi");
        $req->execute();
        $Delais = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();

        foreach($Delais as $delais)
        {
            $de = new Delais($delais["id_suivi"],$delais["matricule"],$delais["delai"]);
            $this->ajoutDelais($de);
        }
     }

     public function chargementParticipants()
     {
        $req = $this->getBdd()->prepare("SELECT * FROM Participants ORDER BY matricule,id_PV");
        $req->execute();
        $Participants = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();

        foreach($Participants as $participant)
        {
            $pa = new Participant($participant["matricule"],$participant["id_PV"],$participant["signe"],$participant["dateSignature"]);
            $this->ajoutParticipants($pa);
        }
     }






     public function getPVs()
     {
        return $this->PVs;
     }
     
     public function getSuivis()
     {
        return $this->Suivis;
     }

     public function getPoints()
     {
        return $this->Points;
     }

     public function getDroits()
     {
        return $this->Droits;
     }

     public function getPersonnels()
     {
        return $this->Personnels;
     }

     public function getDirections()
     {
        return $this->Directions;
     }

     public function getDelais()
     {
        return $this->Delais;
     }

     public function getParticipants()
     {
        return $this->Participants;
     }


     public function SupprimerPV($id_PV)
     {
        foreach ($this->PVs as $index => $pv) {
            if ($pv->getId_PV() === $id_PV) {
                unset($this->PVs[$index]);
                $this->PVs = array_values($this->PVs);
                echo "Le PV avec l'ID $id_PV a été supprimé.\n";
                return true;
            }
        }
     }

     public function SupprimerSuivis($id_suivi)
     {
        foreach ($this->Suivis as $index => $suivi) {
            if ($suivi->getId_Suivi() === $id_suivi) {
                unset($this->Suivis[$index]);
                $this->Suivis = array_values($this->Suivis);
                echo "Le Suivi avec l'ID $id_suivi a été supprimé.\n";
                return true;
            }
        }
     }

     public function SupprimerPoints($id_point)
     {
        foreach ($this->Points as $index => $point) {
            if ($point->getId_Point() === $id_point) {
                unset($this->Points[$index]);
                $this->Points = array_values($this->Points);
                echo "Le Point avec l'ID $id_point a été supprimé.\n";
                return true;
            }
        }
     }

     public function SupprimerDroits($privilege)
     {
        foreach ($this->Droits as $index => $droit) {
            if ($droit->getDroit() === $privilege) {
                unset($this->Droits[$index]);
                $this->Droits = array_values($this->Droits);
                echo "Le privilege $privilege a été supprimé.\n";
                return true;
            }
        }
     }

     public function SupprimerPersonnels($matricule)
     {
        foreach ($this->Personnels as $index => $personnel) {
            if ($personnel->getMatricule() === $matricule) {
                unset($this->Personnels[$index]);
                $this->Personnels = array_values($this->Personnels);
                echo "Le Personnel avec le matricule $matricule a été supprimé.\n";
                return true;
            }
        }
     }

     public function SupprimerDirections($code_chrono)
     {
        foreach ($this->Directions as $index => $direction) {
            if ($direction->getCode_chrono() === $code_chrono) {
                unset($this->Directions[$index]);
                $this->Directions = array_values($this->Directions);
                echo "La Direction avec le code chrono $code_chrono a été supprimé.\n";
                return true;
            }
        }
     }

     public function SupprimerDelais($id_suivi, $matricule)
     {
        foreach ($this->Delais as $index => $delais) {
            if ($delais->getId_Suivi() === $id_suivi && $delais->getMatricule() === $matricule) {
               unset($this->Delais[$index]);
               $this->Delais = array_values($this->Delais);
               echo "Le Délai avec id_suivi $id_suivi et matricule $matricule a été supprimé.\n";
               return true;
            }    
        }
    }

    public function SupprimerParticipants($id_PV, $matricule)
     {
        foreach ($this->Participants as $index => $participant) {
            if ($participant->getId_PV() === $id_PV && $participant->getMatricule() === $matricule) {
               unset($this->Participants[$index]);
               $this->Participants = array_values($this->Participants);
               echo "Le Participant avec le matricule $matricule a été supprimé.\n";
               return true;
            }    
        }
    }
  }    
?>