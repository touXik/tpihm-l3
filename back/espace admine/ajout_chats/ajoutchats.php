<?php
   
   include '../../database.php';
    $chats=$db -> query('SELECT * FROM chats ORDER BY datepub DESC');
   session_start();
   if(!$_SESSION['pseudo']) {
       header('Location: conexion.html');
   }
  
          
 

               if(isset($_POST['submit'])){
       if(!empty($_POST['nom']) AND !empty($_POST['categorie']) AND !empty($_POST['info']) ){
                  $nom=htmlspecialchars($_POST['nom']);
                  $categorie=htmlspecialchars($_POST['categorie']);
                  $info=nl2br(htmlspecialchars($_POST['info']));
               
                //   var_dump($_FILES);
                //   var_dump(exif_imagetype($_FILES['img']['tmp_name']));

            $inserAnimaux= $db-> prepare('INSERT INTO chats (nom,categorie,info,date_edit) VALUES(? , ? , ?,NOW())');
            $inserAnimaux-> execute (array($nom, $categorie, $info));
            $lastid = $db->lastInsertId();

          if(isset($_FILES['img'])AND !empty($_FILES['img']['name'])){
              if(exif_imagetype($_FILES['img']['tmp_name'])==2){
                  $chemin= 'img/'.$lastid.'.jpg';
                  move_uploaded_file($_FILES['img']['tmp_name'],$chemin);
              } else{
                  $message='Votre image doit etre au format jpg';
              }
          }
          echo " larticle   $nom  est ajouter ";
         

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
<div>
       <button><a href="../index.php">acuilleeee</a></button>
       <button><a href="chats.php">chats</a></button>
    <form action="" method="POST" enctype="multipart/form-data">
     <h1>ajouter chats </h1>
     <input type="text" name="nom" placeholder="son nom " ><br>
     <input type="text" name="categorie"placeholder=" sa categorie " ><br>
     <textarea name="info" placeholder="ses information"></textarea> <br>
     <input type="file" name="img"><br>
     <input type="submit" name="submit">
    </form>

 </div>
</body>
</html>