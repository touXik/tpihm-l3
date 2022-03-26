<?php

  
  include '../database.php';
  $equide=$db -> query('SELECT * FROM equide ORDER BY datepub DESC');

 
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="../../css/stylescat.css">
  <link rel="icon" type="images/png" href="../../images/log2.jpeg">
   <title>équidès</title>
  
</head>
<body>
   
 
    <header class="header">

<div id="menu-btn" class="fas fa-bars"></div>

<a href="../../index.html" class="logo"> <span>sweet</span>Tails </a>

    <nav class="navbar">
        <a href="../../index.html">accueil</a>
       
        <a href="../../html/contact.html">contact</a>
        <a href="../../html/login.html">connexion</a>
        <a href="../../html/register.html">inscription</a>
    </nav>

<div id="login-btn">
       
</div>

</header> 
     
<section class="services" id="services">



<div class="box-container">
  <?php while($c=$equide->fetch()){ ?>

    <div class="box">
             <div class="img">
                        <img src="../espace admine/ajout_equide/img/<?=$c['id']?>.jpg" width="200" height="200"  >
             </div>

             <div class="txt">
                  <div class="cat">
                      <h1><?= $c['categorie']?></h2>
                    </div>

                    <div class="h">
             <div class="nom">
                      <h2> <?= $c['nom']?></h2> 
                   </div>    
             

            <div class="info">
                       
                       <p><?= $c['info']?></p>
            </div>
                        </div>
         </div>
            <div class="bttn">
                     <button> <a href="../adopte/adopte_h.php?id=<?=$c['id']?>" class="btn">adopte</a></button>
             </div>
      
    </div>
   <?php } ?>
</div>
</section>
  
   

<footer id="footer" class="footer"> 
  <span class="copyrights">&copy; 2022 - Sweet tails</span>
  <a href="#" class="conditions">Conditions générales d'adoption</a>
</footer>



<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="../../js/script.js"></script>
        
</body>
</html>
