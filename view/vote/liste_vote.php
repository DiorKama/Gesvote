<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
   <title>Document</title>
</head>
<body>
       
  <div class="container">
      <div class="row">
      <div class="col-md-10 offset-md-1" style="margin-top:80px">
      <div class="panel-heading bg-primary">Liste des Vote</div>
			<div class="panel-body">
				<table class="table table-bordered table-striped">
            <tr>
                <th>Numero Vote</th>
                <th>Candidat</th>
                <th>Electeur</th>
                <th>Bureau de Vote</th>
                <th>ACTION</th>
                <th>ACTION</th>
            </tr>   
            <tr>
                <?php
                  require_once "model/vote.php";
            
                  $liste_vote=Vote::listeVote();
                  foreach($liste_vote as $vote){
                    echo"<tr>
                            <td>$vote[id_vote]</td> 
                            <td>$vote[nom_candidat]</td> 
                            <td>$vote[prenom_electeur]&nbsp;$vote[nom_electeur]</td>
                            <td>$vote[nom_bureau]</td> 
                            <td><a href='controller/voteController.php&id_vote=$vote[id_vote]' class='btn btn-danger'><i class='far fa-trash-alt'></i><a/></td>
                            <td><a href='?page=editvote&id_vote=$vote[id_vote]' class='btn btn-info '><i class='far fa-edit'></i><a/></td>
                      </tr>";

                  }

                ?>
            </tr>     
       </table>
       </div>
      </div>
   </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
</body>
</html>