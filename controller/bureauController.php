<?php


if($_POST['id']){
    $id=$_POST['id']; 
    if($id==0){
        echo "<option>Select bureau</option>";
    }else{
        require_once "../model/bureau.php";
        $sql = Bureau::getBureauById_Commun($id);
        foreach($sql as $row){
            echo '<option value="'.$row['id_bureau'].'">'.$row['nom_bureau'].'</option>';
            }
        }
    } 

?>