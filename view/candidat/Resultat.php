<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
       
  <div class="container">
      <div class="row">
      <div class="col-md-10 offset-md-1">
        <table class="table table-bordered" style="margin-top:100px;">
            <tr>
                <th>Id Candidat</th>
                <th>Nom Candidat</th>
                <th>Partie</th>
                <th>Photo de Partie</th>
                <th>Supprimer</th>
            </tr>   
            <tr>
                <?php
                  require_once "model/candidat.php";
                  $obj_candidat=new Candidat();
                  $liste_candidat=$obj_candidat->getAllCandidat();
                  foreach($liste_candidat as $candidat){
                    echo"<tr>
                            <td>$candidat[id_candidat]</td>; 
                            <td>$candidat[nom_candidat]</td>; 
                            <td>$candidat[nom_partie]</td>; 
                            <td>$candidat[photo_parti]</td>; 
                            <td><a href='' class='btn btn-info'>supprimer</a></td>
                        </tr>";

                  }

                ?>
            </tr>     
       </table>
      </div>
  </div>

</body>
</html>