<?php
require_once 'db.php';
    class Bureau{
        public $id_bureau;
        public $nom_bureau;
        public $num_bureau;
        public $id_arron;

        public function __construct($id_bureau=null,$nom_bureau,$num_bureau,$id_arron){
            $this->id_bureau=$id_bureau;
            $this->nom_bureau=$nom_bureau;
            $this->num_bureau=$num_bureau;
            $this->id_arron=$id_arron;
        }
        public function addBureau(){
            $ob_connexion=new Connexion();
            // l appel de la methode de connexion getdb()
            $db=$ob_connexion->getDB();
            $ret=false;
            if (!is_null($db))
             {
                $sql="INSERT INTO bureau(nom_bureau,num_bureau,id_arron)values(:nom_bureau,:num_bureau,:id_arron)";
                $element=$db->prepare($sql);
                $element->execute(array(
                  ':nom_bureau' => $this->nom_bureau,
                  ':num_bureau' => $this->num_bureau,
                  ':id_arron' => $this->id_arron
                   ));
                $ret=true;
        }else{
          echo "erreur de connexion a la base";
        }
        return $ret;
        }

       public static function getBureauById_Commun($id_commune){
        $ob_connexion=new Connexion();
        $db=$ob_connexion->getDB();
        $bureauByCommune=null;
        if (!is_null($db))
         {
            $sql="SELECT * from bureau WHERE id_commune=$id_commune";
            $result=$db->query($sql);
            $bureauByCommune=$result->fetchAll(PDO::FETCH_ASSOC);
         }
         return $bureauByCommune;
       }

        
    }

?>