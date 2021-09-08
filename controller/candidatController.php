<?php
   require_once "../model/candidat.php";
   if(isset($_POST['btn_valider_candidat'])){
    $nom_candidat=$_POST['nom_candidat'];
    $nom_partie=$_POST['nom_partie'];
    $ob_candidat=new Candidat();
    if($ob_candidat->addCandidat($nom_candidat,$nom_partie)){
        header("location:../?page=listCandidat");
    }else{
        header("location:../?page=addCandidat&non_ok");
    }
}

    // suppression
    if(isset($_GET['id_Candidat'])){
        $id_candidat=$_GET['id_Candidat'];
        $obj_can=new Candidat();
        $nbr_lign=$obj_can->deleteCandidat($id_candidat);
        if($nbr_lign!=0){
            header("location:../?page=listCandidat&reussi");
        }else{
            header("location:../?page=listCandidat&non_reussi");    
        }
   }
?>