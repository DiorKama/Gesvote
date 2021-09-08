<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>D</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <form method='POST' action='controller/votecontroller.php' style="margin-top:80px;">
            <div class="row g-0">  
            <?php             
            foreach($listeCandidat as $ele){
            ?>   
                <div class="col-md-2">
                   <img src="<?php echo $ele['photo_parti']; ?>" class="img-fluid rounded-start" alt="...">
               </div>
                <div class="col-md-4">
                 <div class="card-body">
                    <h5 class="card-title"><?php echo $ele['nom_candidat'] ?></h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text text-center"><small class="text-muted ">
                        <input type="radio" style="width:30px; height:30px;margin-right:60px;margin-top:10px;" name="choix_vote" value="<?php echo $ele['id_candidat']; ?>">
                        <button type="submit" name="btn_vote" class="btn btn-block btn-info">voter</button>
                    </small></p>
                 </div>
                </div>
                
                   
                <?php    
          }
            ?>
            </div>
             </form>
                   
              </div>
          </div>
      </div>
</body>
</html>