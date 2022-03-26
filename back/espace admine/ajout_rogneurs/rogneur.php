<?php
  session_start();
  if(!$_SESSION['pseudo']) {
      header('Location: conexion.html');
  }
  
  include '../../database.php';
  $rogneur=$db -> query('SELECT * FROM rogneur ORDER BY datepub DESC');

 
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../../CSS/admin/anime.css">
  <link rel="icon" type="images/png" href="../../../images/log2.jpeg">
  <title>rongeur</title>
</head>
<body>


          
         <div class="menu">         
     
           <button><a href="../index.php"> acuille</a></button>
         <button><a href="ajoutrogne.php"> ajouter rogneur</a></button> 
         <button ><a href="../logout.php"> DECONEXION</a></button>
        </div>


                    



                          
                           <h1>rogneur ajouter </h1>
                        

          
         <div class="banime">


                
                <?php while($c=$rogneur->fetch()){ ?>
                    <dive class="anime">
                       <div class="img">
                  <a href="affirogne.php?id=<?=$c['id']?>"> <img src="img/<?=$c['id']?>.jpg" > </a>
                        </div>
                        <div class="c">
                    <div class="txt">
                         <div class="nomc">
                <p> Nom: <a href="affirogne.php?id=<?=$c['id']?>"> <span> <?= $c['nom']?></span></a></p>
                <p>Categorie : <?= $c['categorie']?></p></div>
                        <div class="info">
                             <div class="dvi">
                        <h4>information :</h4>  
                             </div>
                             <div class="dvp">
                 <p ><?= $c['info']?></p>
                                </div>
                         </div>
                     </div>
                     <div class="button">
                           <!-- <div class="s"> -->
                <button class="s"><a href="supp.php?id=<?=$c['id']?>">suprimer</a> </button>
                                <!-- </div> -->
                         <!-- <div class="m"> -->
                <button class="m"><a href="modifier.php?edit=<?=$c['id']?>"> modifier</a></button>
                             <!-- </div> -->
                </div>
                        </div>
                </dive>
                  <?php } ?>
               
         </dive>
 
        
</body>
</html>
