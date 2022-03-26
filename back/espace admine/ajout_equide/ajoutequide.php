<?php
   
   include '../../database.php';
    $equide=$db -> query('SELECT * FROM equide ORDER BY datepub DESC');
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

            $inserAnimaux= $db-> prepare('INSERT INTO equide (nom,categorie,info,date_edit) VALUES(? , ? , ?,NOW())');
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
    <link rel="stylesheet" href="../../../CSS/admin/stylescnx.css">
    <link rel="icon" type="images/png" href="../../../images/log2.jpeg">
    <title>admin-ajout équidès</title>
</head>
<body>
<div>      
          
       

    <button><a href="../index.php">acuilleeee</a></button>
            <button><a href="equide.php">equide</a></button>

    <form action="" method="POST" enctype="multipart/form-data">
     <h1>ajouter equidés </h1>
     

          


              <div class="input-form">
                       <input type="text" name="nom"  id="password" placeholder=" " required><br>
                       <label for="nom">Nom</label>
             </div>


               <div class="input-form">
                          <input type="text" name="categorie" id="password" placeholder=" " required><br>
                          <label for="categorie">categorie</label>
              </div>


                   <div class="submit-form">
                       <input type="file" name="img">importer image </input> <br>
                   </div>
                  <h4>information</h4>

                <div class="input-form">
                           
                         <textarea name="info" placeholder="information " required  ></textarea> <br>
                         
                 </div>


                        <div class="submit-form">
                            <button type="submit" name="submit">AJOUTER</button>
                         </div>

    </form>

 </div>
</body>
</html>