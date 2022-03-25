<link rel="stylesheet" type="text/css" href="../css/stylescnx.css">
<link rel="stylesheet" href="../CSS/mssalrt.css">
<?php


if (isset($_POST['submit'])){
    extract($_POST);
  


     if (!empty($lastname) && !empty($firstname) && !empty($email) && !empty($password) && !empty($cpassword)){


        if($password == $cpassword){

        $options = [
            'cost' => 12,
        ];
        $hashpass = password_hash($password, PASSWORD_BCRYPT, $options);

        include 'database.php';
        global $db;


        $c = $db->prepare("SELECT email FROM user WHERE email = :email");
        $c->execute(['email' => $email]);

        $result= $c->rowCount();

        if($result ==0){

             $q = $db->prepare("INSERT INTO user(lastname,firstname,email,password) VALUES(:lastname,:firstname,:email,:password)");
        $q->execute([
            'lastname'=>$lastname,
            'firstname'=>$firstname,
            'email'=>$email,
            'password'=>$hashpass
        ]);
           
           include '../html/minilogin.html';

        } else{
            
             include '../html/register.html';
             include '../html/alrt.html';
        
        }




       

    } else {
      
            include '../html/register.html'; 
            include '../html/alrt1.html';
       
    }
      


        
          
                

            }
             else {
            echo " <h3> Veuillez Completer tout les champs ! <b> Merci </b> </h3> ";
              ?>
        <a href="../html/register.html"><h1>Retourne<h1></a>
        <?php
                  }



        }
