

<?php
  session_start();
  if(!$_SESSION['pseudo']) {
      header('Location: conexion.html');
  }
  
  include '../../database.php';

  if(isset($_GET['id']) AND !empty($_GET['id'])){
    $get_id=htmlspecialchars($_GET['id']);
    $rogneur= $db -> prepare('SELECT * FROM rogneur WHERE id=?');
    $rogneur->execute(array($get_id));
   if($rogneur->rowCount()==1){
    
       $rogneur=$rogneur->fetch();
       $id=$rogneur['id'];
       $nom=$rogneur['nom'];
       $categorie=$rogneur['categorie'];
       $info=$rogneur['info'];
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
       <button><a href="rogneur.php">rogneur</a></button>
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

