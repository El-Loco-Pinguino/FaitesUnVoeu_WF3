<?php

	if(isset($_POST['subject']) && isset($_POST['message']) && isset($_POST['mail']) && isset($_POST['name']) && isset($_POST['firstname']))
	{
		
		$subject = htmlentities(strip_tags($_POST['subject']));
		$message = htmlentities(strip_tags($_POST['message']));
		$mails = htmlentities(strip_tags($_POST['mail']));
		$name = utf8_encode(htmlentities(strip_tags($_POST['name'])));
		$firstname = utf8_encode(htmlentities(strip_tags($_POST['firstname'])));
		
		$mail = new PHPMailer();
		$mail->IsSMTP();
		$mail->Host = 'smtp.orange.fr';
		$mail->SMTPAuth   = false;
		$mail->Port = 25; // Par défaut
		 
		// Expéditeur
		$mail->SetFrom($mails, $name . " " . $firstname);
		// Destinataire
		
		$mail->AddAddress('alcene@live.fr', 'fuv@admin.fr');
		// Objet
		$mail->Subject = $subject;
		 
		// Votre message
		$mail->MsgHTML($message);
		 
		// Envoi du mail avec gestion des erreurs
		if(!$mail->Send()) {
		  echo 'Erreur : ' . $mail->ErrorInfo;
		} else {
		  echo 'Message envoyé !';
		} 
		$mail->SmtpClose();
		unset($mail);
	}

		
?>
