
<?php
  session_start();
  if(!$_SESSION['pseudo']) {
      header('Location: conexion.html');
  }
  
  include '../../database.php';
$mode_edit=0;

  if(isset($_GET['edit']) AND !empty($_GET['edit'])){
      $mode_edit=1;
      $edit_id=htmlspecialchars($_GET['edit']);
      $edit_rogneur=$db -> prepare('SELECT * FROM rogneur WHERE id= ?');
      $edit_rogneur->execute(array($edit_id));

      if($edit_rogneur->rowCount() == 1){
           $edit_rogneur= $edit_rogneur->fetch();
      }else{
          die('erreur larticle nexixte pas ');
      }
  }


if(isset($_POST['nom'])){
    if(!empty($_POST['nom']) AND !empty($_POST['categorie']) AND !empty($_POST['info']) ){
               $nom=htmlspecialchars($_POST['nom']);
               $categorie=htmlspecialchars($_POST['categorie']);
               $info=nl2br(htmlspecialchars($_POST['info']));
          if($mode_edit==0){
              $inserAnimaux= $db-> prepare('INSERT INTO rogneur (nom,categorie,info) VALUES(? , ? , ?)');
               $inserAnimaux-> execute (array($nom, $categorie, $info)); 
             
               echo' <h1>larticle a bine ajouter</h1>';
          }else{
              $update = $db->prepare('UPDATE rogneur SET nom=?,categorie=?,info=?,date_edit=NOW() WHERE id=?');
              $update->execute(array($nom, $categorie, $info,$edit_id)); 
               header('Location:affirogneur.php?id='.$edit_id);
              echo' <h1>larticle a bine ajoure</h1>';
          }
       
        

    }else{
        echo'<h1>vuiller compliter tout les champs</h1>';

    }
}


 
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
        <button><a href="rogneur.php">rogneur</a></button>
    <form  method="POST">
         
     <input type="text" name="nom" placeholder="son nom" value=" <?=$edit_rogneur['nom'] ?>" ><br>
     <input type="text" name="categorie" placeholder=" sa categorie " value="<?= $edit_rogneur['categorie']?>"><br>
     <textarea name="info" placeholder="ses information"  > <?=$edit_rogneur['info']?> </textarea> <br>
     <input type="submit" name="submit">
    </form>

 
</body>
</html>