<?php
  session_start();
  if(!$_SESSION['pseudo']) {
      header('Location: conexion.html');
  }
  
  include '../../database.php';
  $chiens=$db -> query('SELECT * FROM chiens ORDER BY datepub DESC');

 
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../../CSS/admin/anime.css">
  <title>chiens-admin</title>
</head>
<body>
              

          <div class="menu">         
     
           <button><a href="../index.php"> acuille</a></button>
         <button><a href="ajoutchiens.php"> ajouter chiens</a></button> 
         <button ><a href="../logout.php"> DECONEXION</a></button>
        </div>


                    



                          
                           <h1>chiens ajouter </h1>
                        

          
         <div class="banime">


                
                <?php while($c=$chiens->fetch()){ ?>
            <dive class="anime">
                       <div class="img">
                  <a href="affichiens.php?id=<?=$c['id']?>"> <img src="img/<?=$c['id']?>.jpg" > </a>
                        </div>
                        <div class="c">
                    <div class="txt">
                         <div class="nomc">
                <p><span> Nom:</span> <a href="affichiens.php?id=<?=$c['id']?>">  <?= $c['nom']?></a></p>
                <p> <span> Categorie : </span><?= $c['categorie']?></p>
                              </div>
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
