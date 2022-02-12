

<?php
  session_start();
  if(!$_SESSION['pseudo']) {
      header('Location: conexion.html');
  }
  
  include '../../database.php';

  if(isset($_GET['id']) AND !empty($_GET['id'])){
    $get_id=htmlspecialchars($_GET['id']);
    $chats= $db -> prepare('SELECT * FROM chats WHERE id=?');
    $chats->execute(array($get_id));
   if($chats->rowCount()==1){
    
       $chats=$chats->fetch();
       $id=$chats['id'];
       $nom=$chats['nom'];
       $categorie=$chats['categorie'];
       $info=$chats['info'];
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
       <button ><a href="chats.php"> chats</a></button><br>
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

