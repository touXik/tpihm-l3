<link rel="stylesheet" type="text/css" href="../css/stylescnx.css">

<?php session_start(); 

?>

<?php

if(isset($_SESSION['lastname']) && isset($_SESSION['firstname']) && isset($_SESSION['email']) &&   isset($_SESSION['date'])){
    
     

}else{
   
    // include '../html/login.html'; 
    // include '../html/alrt1.html';
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
                $_SESSION['email']= $email;
             header('Location:../index.php');

      ?>
<a href="../html/login.html">Deconexion</a>
<?php


                

            }else {
             
                  include '../html/login.html'; 
                  include '../html/alrt1.html';

            }

        }else {
           
            include '../html/login.html'; 
            include '../html/alrt3.html';


        }
      


        
            
        } else { echo " <h2> veuiller complete l'ensemble des champs </h2> ";
                ?>

<a href="../html/login.html">Retourne</a>
<?php

    }

 }

?>


