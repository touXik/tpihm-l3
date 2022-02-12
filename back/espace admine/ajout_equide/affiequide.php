

<?php
  session_start();
  if(!$_SESSION['pseudo']) {
      header('Location: conexion.html');
  }
  
  include '../../database.php';

  if(isset($_GET['id']) AND !empty($_GET['id'])){
    $get_id=htmlspecialchars($_GET['id']);
    $equidé= $db -> prepare('SELECT * FROM equidé WHERE id=?');
    $equidé->execute(array($get_id));
   if($equidé->rowCount()==1){
    
       $equidé=$equidé->fetch();
       $id=$equidé['id'];
       $nom=$equidé['nom'];
       $categorie=$equidé['categorie'];
       $info=$equidé['info'];
       }else{
       die('cet article nexistepas');
   }
}else{
   die('errure');
}

 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
 

  <title>Document</title>
</head>
<body>
       <button ><a href="logout.php"> DECONEXION</a></button><br>
       <button><a href="equide.php">equide</a></button>
       <form action="" methode="POST">  
         <img src="img/<?=$id?>.jpg" alt="<?=$nom?>">  
       <h1> <?=$nom ?></h1> <br>
            <h2> <?= $categorie ?> </h2><br>
            <p> <?= $info ?> </p>
</form>
<button><a href="supp.php?id=<?= $get_id?>">suprimer</a> </button>
                <button><a href="modifier.php?edit=<?= $get_id?>"> modifier</a></button>
            
</body>
</html>

