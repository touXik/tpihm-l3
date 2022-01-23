<link rel="stylesheet" type="text/css" href="../css/stylescnx.css">

<?php session_start(); ?>

<?php

if(isset($_SESSION['lastname']) && isset($_SESSION['firstname']) && isset($_SESSION['email']) &&                   isset($_SESSION['date'])){
    
     

}else{
    echo"veuiller voous connecter a votre compts";
}



if (isset($_POST['submit'])){
    extract($_POST);
  



     if ( !empty($email) && !empty($password)){


        include 'database.php';
        global $db;
        $q = $db->prepare("SELECT * FROM user WHERE email = :email");
        $q->execute(['email'=> $email]);
        $result = $q-> fetch();

        if($result == true)
        {
            if(password_verify($password, $result['password'])){

                echo " <h1 >NATURE EMOI VOUS S'OUHAITE LA BIENVENU </h1> <br> <h3> information de votre compte </h3>";

        ?>
 
                       <p>VOTRE NOM : <?= $_SESSION['lastname']; ?> </p>
                       <p>VOTRE PRENOM : <?= $_SESSION['firstname']; ?> </p>
                       <p>VOTRE EMAIL : <?= $_SESSION['email']; ?> </p>
                       <p>DATE DE CREATION : <?= $_SESSION['date']; ?> </p>
                       
   <?php
                $_SESSION['lastname']= $result['lastname'];

                $_SESSION['firstname']= $result['firstname'];
                $_SESSION['email']= $result['email'];
                $_SESSION['date']= $result['date'];
      
      echo " <h3>Merci !</h3> ";

      ?>
<a href="../html/login.html">Deconexion</a>
<?php


                

            }else {
                echo " <h2> ERREUR ! </h2> <br> Votre <b> mot de passe </b> est <b> incorrecte </b>";
                ?>

<a href="../html/login.html">Retourne</a>
<?php

            }

        }else {
            echo " <h2> le compte portant  lemail : < " .$email . "   > n'existe pas </h2> <br> ";
            ?>

<a href="../html/login.html"> <h1>Retourne</h1></a>
<?php

        }
      


        
            
        } else { echo " <h2> veuiller complete l'ensemble des champs </h2> ";
                ?>

<a href="../html/login.html">Retourne</a>
<?php

    }

 }

?>


