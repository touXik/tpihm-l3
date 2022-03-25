
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
  <link rel="stylesheet" href="../../CSS/admin/message.css">
  <title>Document</title>
</head>
<body>

               <div class="menu">
                    <button ><a href="logout.php"> DECONEXION</a></button>
                     <button ><a href="index.php"> acuille</a></button>
              </div>

       <div class="messages">

                  <div class="title">
                        <h1>message reçu</h1>
                    </div>

                    <div class="txt">
          
                              <?php while($m=$contact->fetch()){ ?>
                                    <div class="ms">
                                            <div class="info">
                                                   <p><span> NOM : </span><?= $m['Nom']?></a></p>
                                                   <p><span>  Email : </span><?= $m['email']?></p>
                                                   <p><span> Numéro : </span><?= $m['sujet']?></p>
                                                   <p><span> Message : </span><?= $m['message_pub']?></p>
                                             </div>

                                             <div class="button">
                                                   <button class="s"><a href="suppmss.php?id=<?=$m['id']?>">suprimer</a> </button>
                                              </div>
                                      </div>
                                <?php } ?>
         
                   </div>
          
        </dive>  
         
</body>
</html>


