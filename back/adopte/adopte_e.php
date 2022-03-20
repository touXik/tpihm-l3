<?php


session_start();
if(!$_SESSION['email']) {
  header('Location: ../../html/login.html');
}

 include '../database.php';
  $equide=$db -> query('SELECT * FROM equide ORDER BY datepub DESC');
 
//    if(!$_SESSION['password']) {
//        header('Location: ../index.html');
//    }

        


             if(isset($_POST['submit'])){
     if(!empty($_POST['noma']) AND !empty($_POST['prenom']) AND !empty($_POST['email']) AND !empty($_POST['adress']) AND  !empty($_POST['demande']) ){
                   $get_id=htmlspecialchars($_GET['id']);
                  $equide= $db -> prepare('SELECT * FROM equide WHERE id=?');
                  $equide->execute(array($get_id));
                  if($equide->rowCount()==1){
  
                    $equide=$equide->fetch();
                    $id_c=$equide['id'];
                    $nom_c=$equide['nom'];
                    $categorie_c=$equide['categorie'];
                    $info_c=$equide['info'];
                  }else{
                      die('cet article nexistepas');
                  }
                $noma=htmlspecialchars($_POST['noma']);
                $prenom=htmlspecialchars($_POST['prenom']); 
                $email=htmlspecialchars($_POST['email']);
                $adress=nl2br(htmlspecialchars($_POST['adress']));
                $demande=htmlspecialchars($_POST['demande']);
               
               
               
                       
          $ins= $db-> prepare('INSERT INTO adopte_e (noma,prenom,email,adress,demande,id_c,nom_c) VALUES(? , ? , ?, ?, ?,?,?)');
          $ins-> execute (array($noma, $prenom, $email, $adress, $demande,$id_c,$nom_c));
          // $lastid = $db->lastInsertId();

      //   if(isset($_FILES['img'])AND !empty($_FILES['img']['name'])){
      //       if(exif_imagetype($_FILES['img']['tmp_name'])==2){
      //           $chemin= 'img/'.$lastid.'.jpg';
      //           move_uploaded_file($_FILES['img']['tmp_name'],$chemin);
      //       } else{
      //           $message='Votre image doit etre au format jpg';
      //       }
      //   }
      
       
        echo " demande envoiyer ";
       

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
         

  <form action="" method="POST" enctype="multipart/form-data">
   <h1>vuiller saisire info</h1>
   <input type="text" name="noma" placeholder="nom" ><br>
   <input type="text" name="prenom" placeholder="prénom " ><br>
   <input type="text" name="email"placeholder=" email " ><br>
   <input type="text" name="adress"placeholder=" adress" ><br>
   <textarea name="demande" placeholder="message"></textarea> <br>
   
   <input type="submit" name="submit"placeholder="confirmer" >
  </form>


</div>

</body>
</html>