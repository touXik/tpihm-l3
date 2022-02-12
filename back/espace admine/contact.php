<?php
include '../database.php';


$contact=$db -> query('SELECT * FROM contact ORDER BY date_pub DESC');



      


           if(isset($_POST['submit'])){
   if(!empty($_POST['Nom']) AND !empty($_POST['email']) AND !empty($_POST['num']) AND !empty($_POST['message_pub']) ){
              $Nom=htmlspecialchars($_POST['Nom']);
              $email=htmlspecialchars($_POST['email']);
              $num=htmlspecialchars($_POST['num']);
              $message_pub=nl2br(htmlspecialchars($_POST['message_pub']));
           
           

        $ins= $db-> prepare('INSERT INTO contact (Nom,email,num,message_pub) VALUES(? , ? , ?,?)');
        $ins-> execute (array($Nom,$email,$num,$message_pub));
           
      
        

        header('Location:../../index.html#contact');
        echo' <h1>message envoiyer</h1>';
     

   }else{
       echo'<h1>vuiller compliter tout les champs</h1>';

   }
}




?>

