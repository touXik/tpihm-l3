

<?php
  session_start();
  if(!$_SESSION['pseudo']) {
      header('Location: ../conexion.html');
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
 
  <link rel="stylesheet" href="../../../CSS/admin/affich.css">
  <link rel="icon" type="images/png" href="../../../images/log2.jpeg">

 <title>animal</title>
</head>
<body>
          <div class="menu">
                    <button ><a href="../logout.php"> DECONEXION</a></button><br>
                    <button ><a href="chats.php"> chats</a></button><br>
          </div>
       <div class="el">
           
                  
               <div class="img">
                      <img src="img/<?=$id?>.jpg" alt="<?=$nom?>">  
               </div>
          <div class="txt">
                         <h1><span> Nom : </span> <?=$nom ?></h1> <br>
                         <h2><span> Categorie : </span><?= $categorie ?> </h2><br>
                         <p><span> Information : </span><br><?= $info ?> </p>
                    
            </div> 

           <div class="bt1">                 
                    <button class="s"><a href="supp.php?id=<?= $get_id?>">suprimer</a> </button>
                    <button><a href="modifier.php?edit=<?= $get_id?>"> modifier</a></button>
           </div> 
        
       </div>

</body>
</html>

