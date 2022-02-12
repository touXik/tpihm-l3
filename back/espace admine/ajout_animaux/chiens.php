<?php
  session_start();
  if(!$_SESSION['pseudo']) {
      header('Location: conexion.html');
  }
  
  include '../../database.php';
  $chiens=$db -> query('SELECT * FROM chiens ORDER BY datepub DESC');

 
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
       <button><a href="../index.php"> acuille</a></button>
  <div>
  
     <div class="chien">
            <button><a href="ajoutchiens.php"> ajouter chiens</a></button>
                <h1>chiens ajouter </h1>
           <ul>
                <?php while($c=$chiens->fetch()){ ?>
                  <a href="affichiens.php?id=<?=$c['id']?>"> <img src="img/<?=$c['id']?>.jpg" > </a>
                <li><a href="affichiens.php?id=<?=$c['id']?>"> <?= $c['nom']?></a></li>
                <li><?= $c['categorie']?></li>
                <li><?= $c['info']?></li>
                <button><a href="supp.php?id=<?=$c['id']?>">suprimer</a> </button>
                <button><a href="modifier.php?edit=<?=$c['id']?>"> modifier</a></button>
                  <?php } ?>
         
            </ul> 
         </dive> 
        
</body>
</html>
