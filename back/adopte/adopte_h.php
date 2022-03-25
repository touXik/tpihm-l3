
<?php


session_start();
if(!$_SESSION['email']) {
  header('Location: ../../html/login.html');
}

 include '../database.php';
  $chats=$db -> query('SELECT * FROM chats ORDER BY datepub DESC');
 
//    if(!$_SESSION['password']) {
//        header('Location: ../index.html');
//    }

        


             if(isset($_POST['submit'])){
     if(!empty($_POST['noma']) AND !empty($_POST['prenom']) AND !empty($_POST['email']) AND !empty($_POST['adress']) AND  !empty($_POST['demande']) ){
                   $get_id=htmlspecialchars($_GET['id']);
                  $chats= $db -> prepare('SELECT * FROM chats WHERE id=?');
                  $chats->execute(array($get_id));
                  if($chats->rowCount()==1){
  
                    $chats=$chats->fetch();
                    $id_c=$chats['id'];
                    $nom_c=$chats['nom'];
                    $categorie_c=$chats['categorie'];
                    $info_c=$chats['info'];
                  }else{
                      die('cet article nexistepas');
                  }
                $noma=htmlspecialchars($_POST['noma']);
                $prenom=htmlspecialchars($_POST['prenom']); 
                $email=htmlspecialchars($_POST['email']);
                $adress=nl2br(htmlspecialchars($_POST['adress']));
                $demande=htmlspecialchars($_POST['demande']);
               
               
               
                       
          $ins= $db-> prepare('INSERT INTO adopte_h (noma,prenom,email,adress,demande,id_c,nom_c) VALUES(? , ? , ?, ?, ?,?,?)');
          $ins-> execute (array($noma, $prenom, $email, $adress, $demande,$id_c,$nom_c));
     
                     $n=1;
              
                      
       

     }else{
         $n=0;
         echo'<h1>veuillez completer tous les champs</h1>';

     }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../../css/stylescnx.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
 <link rel="stylesheet" href="../../CSS/mssalrt.css">
   
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
 
  <title>Document</title>
</head>
<body>
<header class="header">

    <div id="menu-btn" class="fas fa-bars"></div>

    <a href="../../index.php" class="logo"> <span>sweet</span>Tails </a>

        <nav class="navbar">
            <a href="../../index.php">accueil</a>
            <a href="../../html/contact.html">contact</a>
            <a href="../affiche_categorie/chiens.php">chiens</a>
             
        </nav>


</header> 


<div class="form-container">
<div class="mssg-alrt">
   <?php 
             if (isset($n) ){
                
                ?>
              
               <div class="wrapper">
        <div id="toast">
            <div class="container-1">
                <i class="fas fa-check-square"></i>
            </div>
            <div class="container-2">
                <p>Success</p>
                <p>demande envoiyer</p>
            </div>
            <button id="close" onclick="closeToast()">
                &times;
            </button>
        </div>
    </div>
    
   
    <script src="../../js/alrt.js"></script>
    <?php
                 
               
             }
      ?>
</div>

  <form  method="post" action="" enctype="multipart/form-data">
    <h3>saisir les informations</h3>
    <input type="text" name="noma"  placeholder="nom" class="box" required>
    <input type="text" name="prenom"  placeholder="prénom" class="box" required>
    <input type="email" name="email" placeholder="email" class="box" required>
    <input type="text" name="adresse"  placeholder="adresse" class="box" required>
    <textarea placeholder="votre message" name="demande" class="box" cols="30" rows="3" required></textarea>
    <input type="submit" name="submit" value="confirmer" class="btn">
  </form>


</div>

<footer id="footer" class="footer"> 
  <span class="copyrights">&copy; 2022 - Sweet tails</span>
  <a href="#" class="conditions">Condition générales d'adoption</a>
</footer>


<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="../../js/script.js"></script>


</body>
</html>