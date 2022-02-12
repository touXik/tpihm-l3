<?php
if(isset($_POST['submit']))
{
	if(!empty($_POST['Nom']) AND !empty($_POST['email']) AND !empty($_POST['message']))
	{
		$header="MIME-Version: 1.0\r\n";
		$header.='From:"SWEET-TAILS"<email-expediteur@example.org>'."\n";
		$header.='Content-Type:text/html; charset="uft-8"'."\n";
		$header.='Content-Transfer-Encoding: 8bit';

		$message='
		<html>
			<body>
			   
				<div align="center"> 
				 <img src="../images/sweet-tails" alt="sweet-tails" width="70%">
				 <br/>
				<u>Nom de l\'expéditeur :</u>'.$_POST['Nom'].'<br />
					<u>Mail de l\'expéditeur :</u>'.$_POST['email'].'<br />
					<u>Nume de l\'expéditeur :</u>'.$_POST['num'].'<br />
					<br />
					'.nl2br($_POST['message']).'
				</div>
			</body>
		</html>
		';

		mail("tailssweet85@gmail.com", "CONTACT -SITE-SWEET_TAILS", $message, $header);        
		echo "Votre message a bien été envoyé !";
		
	}
	else
	{
		echo "Tous les champs doivent être complétés !";
	}
}
?>

