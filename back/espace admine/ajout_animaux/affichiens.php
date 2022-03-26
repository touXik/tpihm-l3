

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
  <link rel="stylesheet" href="../../../CSS/admin/affich.css">
  <link rel="icon" type="images/png" href="../../../images/log2.jpeg">

  <title>animal</title>
</head>
<body>
           <div class="menu">
                     <button ><a href="../logout.php"> DECONEXION</a></button><br>
                     <button ><a href="chiens.php"> chiens</a></button><br>
           </div>
        <div class="el">
            
                     <!-- <form action="" methode="POST">   -->
                <div class="img">
                       <img src="img/<?=$id?>.jpg" alt="<?=$nom?>">  
                </div>
           <div class="txt">
                          <h1><span> Nom : </span> <?=$nom ?></h1> <br>
                          <h2><span> Categorie : </span><?= $categorie ?> </h2><br>
                          <p><span> Information : </span><br><?= $info ?> </p>
                      <!-- </form> -->
             </div> 

            <div class="bt1">                 
                     <button class="s"><a href="supp.php?id=<?= $get_id?>">suprimer</a> </button>
                     <button><a href="modifier.php?edit=<?= $get_id?>"> modifier</a></button>
            </div> 
         
        </div>
</body>
</html>

