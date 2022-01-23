
<link rel="stylesheet" type="text/css" href="../css/stylescnx.css">
<?php 

if(isset($_POST['submit']))
{
	if(isset($_POST['Nom']) and isset($_POST['email']) and isset($_POST['num']) and isset($_POST['message']))
{
   if(!empty($_POST['Nom']) and !empty($_POST['email']) and !empty($_POST['num'])  and !empty($_POST['message']))
   {
   	$Nom=htmlspecialchars($_POST['Nom']);
   	$email=htmlspecialchars($_POST['email']);
   	$num=htmlspecialchars($_POST['num']);
   	$message=htmlspecialchars($_POST['message']);

   	echo "<h1> Contact </h1> <h2> <b>Mr(Mme): $Nom </b> </h2> <h3> Votre message est bien reçu <h3> <p> Message :  < $message ><br> on vous contactera le plus vite possible pare votre adresse : <<b>$email<b> > . ou pare votre numéro de télèphone : <b>$num <b> </p> <h1> Merci !</h1> ";
           
           ?>

        <a href="../index.php"><h1>Retourne<h1></a>
        <?php


       } 
	}
}
?>