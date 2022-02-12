

<?php
  session_start();
  if(!$_SESSION['pseudo']) {
      header('Location: conexion.html');
  }
  
  include '../../database.php';

  if(isset($_GET['id']) AND !empty($_GET['id'])){
    $get_id=htmlspecialchars($_GET['id']);
    $chiens= $db -> prepare('SELECT * FROM chiens WHERE id=?');
    $chiens->execute(array($get_id));
   if($chiens->rowCount()==1){
    
       $chiens=$chiens->fetch();
       $id=$chiens['id'];
       $nom=$chiens['nom'];
       $categorie=$chiens['categorie'];
       $info=$chiens['info'];
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
       <button ><a href="../logout.php"> DECONEXION</a></button><br>
       <button ><a href="chiens.php"> chiens</a></button><br>
       
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

