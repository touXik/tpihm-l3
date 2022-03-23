<?php
  session_start();
  if(!$_SESSION['pseudo']) {
      header('Location: ../conexion.html');
  }
  
  include '../../database.php';
  $adopte=$db -> query('SELECT * FROM adopte ORDER BY date_env DESC');
  $adopte_h=$db -> query('SELECT * FROM adopte_h ORDER BY date_env DESC');
  $adopte_e=$db -> query('SELECT * FROM adopte_e ORDER BY date_env DESC');
  $adopte_r=$db -> query('SELECT * FROM adopte_r ORDER BY date_env DESC');

 
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../../CSS/admin/message.css">
  <title>Demande dadoption </title>
</head>
<body>
                     <div class="menu">
                           <button ><a href="../logout.php"> DECONEXION</a></button>
                           <button><a href="../index.php"> acuille</a></button>
                    </div>
  
  
     
                      
    <div class="messages">
           <div class="messaget">
                    <div class="title">
                           <h1>demande chiens</h1>
                      </div>
              
            
               <div class="txt">
                      <?php while($a=$adopte->fetch()){ ?>
                        <div class="ms">
                                            <div class="info">
                                <h4><span>demande du : </span><?= $a['date_env']?> </h4>
                              <p><span> Nom & prénom : </span><?= $a['noma']?> <?= $a['prenom']?> </p>
              
                              <p><span>emil : </span><?= $a['email']?></p>
                              <p><span>adresse : </span><?= $a['adress']?></p>
                              <p><span>demande : </span><?= $a['demande']?></p>
                              <p><span>chiens demander --> </span><a class="d" href="../ajout_animaux/affichiens.php?id=<?=$a['id_c']?>"><?= $a['nom_c']?></a></p>
                      </div>
                      <div class="button">
                              <button class="s"><a href="supp.php?id=<?=$a['id']?>">suprimer</a> </button>
                      </div>
                      </div>
                      <?php } ?>
                    <!-- </div> -->
              </div> 

              </div>
         <!-- <div class="messages"> -->
         <div class="messaget">
                      <div class="title">
                                <h1>demande chats</h1>
                          </div>

                      <div class="txt">
                                <?php while($b=$adopte_h->fetch()){ ?>
                              <div class="ms">

                                           <div class="info">
                                               <h4><span>demande du : </span><?= $b['date_env']?> </h4>
                                                       <p><span> Nom & prénom : </span><?= $b['noma']?> <?= $b['prenom']?> </p>
              
                                                    <p><span>emil : </span><?= $b['email']?></p>
                                                    <p><span>adresse : </span><?= $b['adress']?></p>
                                                    <p><span>demande : </span><?= $b['demande']?></p>
                                                     <p><span>p>chats demander --> </span><a class="d" href="../ajout_chats/affichats.php?id=<?=$b['id_c']?>"><?= $b['nom_c']?></a></p>
                                             </div>

                                   <div class="button">
                                       <button class="s"><a href="supph.php?id=<?=$b['id']?>">suprimer</a></button>
                                     </div>
                            </div>
                        <?php } ?>
                     </div>   
           </div>


        
         <!-- <div class="messages"> -->
         <div class="messaget">
                       <div class="title">
                          <h1>demande equidés</h1>
                      </div>

            <div class="txt">
             
                         <?php while($c=$adopte_e->fetch()){ ?>
                    <div class="ms">
                          <div class="info">
                                    <h4><span>demande du : </span><?= $c['date_env']?> </h4>
                                    <p><span> Nom & prénom : </span><?= $c['noma']?> <?= $c['prenom']?> </p>
                  
                                 <p><span>emil : </span><?= $c['email']?></p>
                                     <p><span>adresse : </span><?= $c['adress']?></p>
                                     <p><span>demande : </span><?= $c['demande']?></p>
                                     <p><span>equidés demander --> </span><a class="d" href="../ajout_equide/affiequide.php?id=<?=$c['id_c']?>"><?= $c['nom_c']?></a></p>
                            </div>
    
                            <div class="button">
                              <button class="s"><a href="suppe.php?id=<?=$c['id']?>">suprimer</a> </button>
                            </div>

                       </div>
                          <?php } ?>
            </div>
           </div> 
        
         <!-- <div class="messages"> -->
         <div class="messaget">
                   <div class="title">
                       <h1>demande rongeur</h1>
                   </div>

            <div class="txt">
                     <?php while($d=$adopte_r->fetch()){ ?>
                     <div class="ms">
                                            <div class="info">
                                   <h4><span>demande du : </span><?= $d['date_env']?> </h4>
                                  <p><span>Nom & prenom : </span><?= $d['noma']?> <?= $d['prenom']?> </p>                     
                                   <p><span>emil : </span><?= $d['email']?></p>
                                  <p><span>adresse : </span><?= $d['adress']?></p>
                                 <p><span>demande : </span> <?= $d['demande']?></p>
                                 <p><span>ronguer demander --> </span><a class='d'  href="../ajout_rogneurs/affirogne.php?id=<?=$d['id_c']?>"><?= $d['nom_c']?></a></p>
                          </div>

                          <div class="button">
                                 <button class="s"><a href="suppr.php?id=<?=$d['id']?>">suprimer</a> </button>
                          </div>

              </div>
                                <?php } ?>
                   

            </div>

                        </div>
     </dive> 
        
</body>
</html>
