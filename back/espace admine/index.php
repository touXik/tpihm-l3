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
  <title>Document</title>
</head>
<body>
       <button ><a href="logout.php"> DECONEXION</a></button>
  <div>
   <h1>ajouter animaux</h1>
     <ul>
       <li> <a href="ajout_animaux/chiens.php">chiens</a> </li>
       <li><a href="ajout_chats/chats.php">chats</a></li>
       <li><a href="ajout_equide/equide.php">equidé</a></li>
       <li><a href="ajout_rogneurs/rogneur.php">rogneurs</a></li>
     </ul>
     </div>
    
         <button><a href="affichmss.php">boit reception</a></button>
</body>
</html>


