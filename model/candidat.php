<?php
require_once 'db.php';
    class Candidat{
        public $id_candidat;
        public $nom_candidat;
        public $nom_partie;
       
      
        public function addCandidat($nom_candidat,$nom_partie) :bool{
            $ob_connexion=new Connexion();
            // l appel de la methode de connexion getdb()
            $db=$ob_connexion->getDB();
            $ret=false;
            if (!is_null($db))
             {
                $sql="INSERT INTO candidat(nom_candidat,nom_partie)values(:nom_candidat,:nom_partie)";
                $element=$db->prepare($sql);
                $element->execute(array(
                  ':nom_candidat' =>$nom_candidat,
                  ':nom_partie' => $nom_partie
                   ));
                $ret=true;
        }else{
          echo "erreur de connexion a la basse";
        }
        return $ret;
        }

        function getAllCandidat(){
            // instancier la class de connexion a la base de donnee
            $ob_connexion=new Connexion();
            // l appel de la methode de connexion getdb()
            $db=$ob_connexion->getDB();
            $allCandidat=null;
            if (!is_null($db))
             {
                $sql="SELECT * from candidat";
                $result=$db->query($sql);
                $allCandidat=$result->fetchAll(PDO::FETCH_ASSOC);
             }
          return $allCandidat;
    }
    // recuperer le nom d'un electeur
 public static function getNomCandidat($id_candidat){ 
   // instancier la class de connexion a la base de donnee
   $ob_connexion=new Connexion();
   // l appel de la methode de connexion getdb()
   $db=$ob_connexion->getDB();
   $candidat=null;
   if (!is_null($db))
      {
         $sql="SELECT nom_candidat from candidat WHERE id_candidat=$id_candidat";
         $result=$db->query($sql);
         $candidat=$result->fetchAll(PDO::FETCH_ASSOC);
      }
   return $candidat;
   }
   function deleteCandidat($id_candidat){
      $ob_connexion=new Connexion();
      $db=$ob_connexion->getDB();
      $result=0;
     if(!is_null($db))
     {
      $sql = "DELETE FROM candidat WHERE id_candidat=$id_candidat";
      $result=$db->query($sql);
     }
     return  $result;
    }
     
     
 

    }

?>