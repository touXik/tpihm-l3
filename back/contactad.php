<?php
       session_start();
include 'database.php';


$contact=$db -> query('SELECT * FROM contact ORDER BY date_pub DESC');



      


           if(isset($_POST['submit'])){
   if(!empty($_POST['Nom']) AND !empty($_POST['email']) AND !empty($_POST['sujet']) AND !empty($_POST['message_pub']) ){
              $Nom=htmlspecialchars($_POST['Nom']);
              $email=htmlspecialchars($_POST['email']);
              $sujet=htmlspecialchars($_POST['sujet']);
              $message_pub=nl2br(htmlspecialchars($_POST['message_pub']));
           
           

        $ins= $db-> prepare('INSERT INTO contact (Nom,email,sujet,message_pub) VALUES(? , ? , ?,?)');
        $ins-> execute (array($Nom,$email,$sujet,$message_pub));
           
      
        

            

            include '../html/contactad.html';
            include '../html/alrt0.html';
     
     

   }else{
       echo'<h1>vuiller completer tout les champs</h1>';

   }
}




?>
