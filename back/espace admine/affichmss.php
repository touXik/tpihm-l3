
<?php
  session_start();
  if(!$_SESSION['pseudo']) {
      header('Location: conexion.html');
  }
  
  include '../database.php';
  $contact=$db -> query('SELECT * FROM contact ORDER BY date_pub DESC');

 
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
       <button ><a href="index.php"> acuille</a></button>
       <div class="messages">
                <h1>message recu</h1>
           <ul>
                <?php while($m=$contact->fetch()){ ?>
            
                <li><?= $m['Nom']?></a></li>
                <li><?= $m['email']?></li>
                <li><?= $m['num']?></li>
                <li><?= $m['message_pub']?></li>
                <button><a href="suppmss.php?id=<?=$m['id']?>">suprimer</a> </button>
                
                  <?php } ?>
         
            </ul> 
         </dive>   
</body>
</html>


