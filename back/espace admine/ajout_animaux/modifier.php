
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
      $edit_chiens=$db -> prepare('SELECT * FROM chiens WHERE id= ?');
      $edit_chiens->execute(array($edit_id));

      if($edit_chiens->rowCount() == 1){
           $edit_chiens= $edit_chiens->fetch();
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
              $inserAnimaux= $db-> prepare('INSERT INTO chiens (nom,categorie,info) VALUES(? , ? , ?)');
               $inserAnimaux-> execute (array($nom, $categorie, $info)); 
             
               echo' <h1>larticle a bine ajouter</h1>';
          }else{
              $update = $db->prepare('UPDATE chiens SET nom=?,categorie=?,info=?,date_edit=NOW() WHERE id=?');
              $update->execute(array($nom, $categorie, $info,$edit_id)); 
               header('Location:affichiens.php?id='.$edit_id);
              echo' <h1>larticle a bine mise ajoure</h1>';
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
    <link rel="stylesheet" href="../../../CSS/admin/stylescnx.css">
    <title>admin-modifier</title>
</head>
<body>

    

    <button><a href="../index.php">acuilleeee</a></button>
            <button><a href="chiens.php">chiens</a></button>

    <form action="" method="POST" enctype="multipart/form-data">
     <h1>modifier chiens </h1>
     

          


              <div class="input-form">
                       <input type="text" name="nom"   placeholder=" " required value=" <?=$edit_chiens['nom'] ?>"  ><br>
                       <label for="nom">Nom</label>
             </div>


               <div class="input-form">
                          <input type="text" name="categorie"  placeholder=" " required value="<?= $edit_chiens['categorie']?>"><br>
                          <label for="categorie">categorie</label>
              </div>


                  <h4>information</h4>

                <div class="input-form">
                           
                         <textarea name="info" placeholder="information " required  ><?=$edit_chiens['info']?></textarea> <br>
                         
                 </div>


                        <div class="submit-form">
                            <button type="submit" name="submit">MODIFIER</button>
                         </div>

    </form>

 
</body>
</html>