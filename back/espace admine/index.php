<?php
  session_start();
  if(!$_SESSION['pseudo']) {
      header('Location: conexion.html');
  }
  
  include '../database.php';
  $chiens=$db -> query('SELECT * FROM chiens ORDER BY datepub DESC');

 
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="../../CSS/admin/admin.css">
  <title>admin</title>
</head>
<body>
    <div class="menu">
      
        <button><a class="bt" href="affichmss.php">boit reception</a></button>
         <button><a class="bt" href="demande/affich-dem.php">demande d'adoption</a></button> 
         <button ><a class="bt" href="logout.php"> DECONEXION</a></button>
     
   </div>
               <div class="title">
                       <h1>ajouter animaux</h1>
                      </div>
     <!-- <ul> -->
       <div class="cat">
        
          <div class="c1">
          <div class="images">
                  <a href="ajout_animaux/chiens.php">   <img src="../../images/chiens.jpg" ></a>
                  </div>
                    <div class="txt">
              <p> <a href="ajout_animaux/chiens.php">chiens</a> </p>
                        </div>
           </div>
       
           <div class="c1">
           <div class="images">
                    <a href="ajout_chats/chats.php"> <img src="../../images/chats.jpg" ></a>
                    </div>
                    <div class="txt">
               <p><a href="ajout_chats/chats.php">chats</a></p>
                     </div>
            </div>
           
           <div class="c1">
                          <div class="images">
                     <a href="ajout_equide/equide.php">  <img src="../../images/équidés.jpeg"></a>
                    </div>
                    <div class="txt">
                     <p><a href="ajout_equide/equide.php">equidé</a></p>
                    </div>
             </div>
     
            <div class="c1">
            <div class="images">
                     <a href="ajout_rogneurs/rogneur.php"> <img src="../../images/rongeur.jpg"></a>
                     </div>
                    <div class="txt">
                    <p> <a href="ajout_rogneurs/rogneur.php">rogneurs</a></p>
                      </div>
             </div>
      </div> 
     <!-- </ul>-->
     
    
        
  </body>
</html>


