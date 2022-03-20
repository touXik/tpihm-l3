<?php
  session_start();
  if(!$_SESSION['email']) {
      header('Location: conexion.html');
  }
  
  include '../database.php';
  $equide=$db -> query('SELECT * FROM equide ORDER BY datepub DESC');

 
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
  <div>
  
     <div class="chien">
          
                <h1>equide ajouter </h1>
           <ul>
                <?php while($c=$equide->fetch()){ ?>
                  <a href="../espace admine/ajout_equide/affiequide.php?id=<?=$c['id']?>"> <img src="../espace admine/ajout_equide/img/<?=$c['id']?>.jpg" > </a>
                <li><a href="../espace admine/ajout_equide/affiequide.php?id=<?=$c['id']?>"> <?= $c['nom']?></a></li>
                <li><?= $c['categorie']?></li>
                <li><?= $c['info']?></li>
                <button name="adopte" ><a href="../adopte/adopte_e.php?id=<?=$c['id']?>">adopte</a> </button> 
                  <?php } ?>
         
            </ul> 
         </dive> 
        
</body>
</html>
