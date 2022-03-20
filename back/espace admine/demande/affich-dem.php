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
  <title>Demande dadoption </title>
</head>
<body>
       <button ><a href="../logout.php"> DECONEXION</a></button>
       <button><a href="../index.php"> acuille</a></button>
  <div>
  
     <div class="chien">
            
                <h1>demande dadoption chiens</h1>
           <ul>
             
           <?php while($a=$adopte->fetch()){ ?>
                  
                  <h4>demande du <?= $a['date_env']?> </h4>
                <li> Mr <?= $a['noma']?> <?= $a['prenom']?> </li>
              
                <li>son  mail :  <?= $a['email']?></li>
                <li>son adresse : <?= $a['adress']?></li>
                <li>sa demande : <br> <?= $a['demande']?></li>
                <li>chiens demander  <a href="../ajout_animaux/affichiens.php?id=<?=$a['id_c']?>"><?= $a['nom_c']?></a></li>
                <button><a href="supp.php?id=<?=$a['id']?>">suprimer</a> </button>

          <?php } ?>
            </ul> 
         </dive> 

         <div class="chats">
            
                <h1>demande dadoption chats</h1>
           <ul>
             
           <?php while($b=$adopte_h->fetch()){ ?>
                  
                  <h4>demande du <?= $b['date_env']?> </h4>
                <li> Mr <?= $b['noma']?> <?= $b['prenom']?> </li>
              
                <li>son  mail :  <?= $b['email']?></li>
                <li>son adresse : <?= $b['adress']?></li>
                <li>sa demande : <br> <?= $b['demande']?></li>
                <li>chats demander  <a href="../ajout_chats/affichats.php?id=<?=$b['id_c']?>"><?= $b['nom_c']?></a></li>
                <button><a href="supph.php?id=<?=$b['id']?>">suprimer</a> </button>
          <?php } ?>
            </ul> 
         </dive> 


         <div class="equide">
            
                <h1>demande dadoption equidés</h1>
           <ul>
             
           <?php while($c=$adopte_e->fetch()){ ?>
                  
                  <h4>demande du <?= $c['date_env']?> </h4>
                <li> Mr <?= $c['noma']?> <?= $c['prenom']?> </li>
              
                <li>son  mail :  <?= $c['email']?></li>
                <li>son adresse : <?= $c['adress']?></li>
                <li>sa demande : <br> <?= $c['demande']?></li>
                <li>equidés demander  <a href="../ajout_equide/affiequide.php?id=<?=$c['id_c']?>"><?= $c['nom_c']?></a></li>
                <button><a href="suppe.php?id=<?=$c['id']?>">suprimer</a> </button>
          <?php } ?>
            </ul> 
         </dive> 
         <div class="equide">
            
            <h1>demande dadoption rongeur</h1>
       <ul>
         
       <?php while($d=$adopte_r->fetch()){ ?>
              
              <h4>demande du <?= $d['date_env']?> </h4>
            <li> Mr <?= $d['noma']?> <?= $d['prenom']?> </li>
          
            <li>son  mail :  <?= $d['email']?></li>
            <li>son adresse : <?= $d['adress']?></li>
            <li>sa demande : <br> <?= $d['demande']?></li>
            <li>ronguer demander  <a href="../ajout_rogneurs/affirogne.php?id=<?=$d['id_c']?>"><?= $d['nom_c']?></a></li>
            <button><a href="suppr.php?id=<?=$d['id']?>">suprimer</a> </button>
      <?php } ?>
        </ul> 
     </dive> 
        
</body>
</html>
