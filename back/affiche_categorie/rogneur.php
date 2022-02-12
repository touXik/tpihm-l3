<?php
  session_start();
  if(!$_SESSION['email']) {
      header('Location: conexion.html');
  }
  
  include '../database.php';
  $rogneur=$db -> query('SELECT * FROM rogneur ORDER BY datepub DESC');

 
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
       <button ><a href="../logout.php"> DECONEXION</a></button>
       <button><a href="../../index.php"> acuille</a></button>
  
  
     <div class="chien">
                
                <h1>rogneur ajouter </h1>
           <ul>
                <?php while($c=$rogneur->fetch()){ ?>
                  <a href="../espace admine/ajout_rogneurs/affirogne.php?id=<?=$c['id']?>"> <img src="../espace admine/ajout_rogneurs/img/<?=$c['id']?>.jpg" > </a>
                <li><a href="../espace admine/ajout_rogneurs/affirogne.php?id=<?=$c['id']?>"> <?= $c['nom']?></a></li>
                <li><?= $c['categorie']?></li>
                <li><?= $c['info']?></li>
             
                  <?php } ?>
         
            </ul> 
         </dive> 
        
</body>
</html>
