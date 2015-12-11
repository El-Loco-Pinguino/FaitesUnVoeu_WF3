<?php
	header ("Content-type: image/png;");
	if(isset($_GET['firstname']) && isset($_GET['size']) && isset($_GET['weight']) && isset($_GET['baby']) && isset($_GET['carte']) && isset($_GET['sex']))
	{
		//OK 
		$firstname = htmlentities(strip_tags($_GET['firstname']));
		$size = htmlentities(strip_tags($_GET['size']));
		$weight = htmlentities(strip_tags($_GET['weight']));
		$baby = htmlentities(strip_tags($_GET['baby']));
		$carte = htmlentities(strip_tags($_GET['carte']));
		$sex = htmlentities(strip_tags($_GET['sex']));
		
		$image = imagecreatefrompng('http://wf3-h2'.$carte);
		$orange = imagecolorallocate($image, 255, 128, 0);
		$bleu = imagecolorallocate($image, 0, 0, 255);
		$bleuclair = imagecolorallocate($image, 156, 227, 254);
		$noir = imagecolorallocate($image, 0, 0, 0);
		$blanc = imagecolorallocate($image, 255, 255, 255);
		
		if($sex == 0)
		{
			$text1 = "Je m'appelle ".$firstname;
			$text2 = "Je suis toute petite avec mes ".$weight."g";
			$text3 = "et ".$size."cm.";
			$text4 = "Mais je prends déjà une grande place,";
			$text5 = "dans le coeur de mes parents!";
			$text6 = "J'ai vraiment hâte de vous rencontrer!";
			$text7 = "A bientôt, ".$firstname."";
		}
		else
		{
			$text1 = "Je m'appelle ".$firstname;
			$text2 = "Je suis tout petit avec mes ".$weight."g";
			$text3 = "et ".$size."cm.";
			$text4 = "Mais je prends déjà une grande place,";
			$text5 = "dans le coeur de mes parents!";
			$text6 = "J'ai vraiment hâte de vous rencontrer!";
			$text7 = "A bientôt, ".$firstname."";
		}
		
		utf8_encode($text1);
		utf8_encode($text2);
		utf8_encode($text3);
		utf8_encode($text4);
		utf8_encode($text5);
		utf8_encode($text6);
		utf8_encode($text7);
		
		imagestring($image, 4, 10, 150, $text1, $blanc);
		imagestring($image, 4, 10, 160, $text2, $blanc);
		imagestring($image, 4, 10, 170, $text3, $blanc);
		imagestring($image, 4, 10, 180, $text4, $blanc);
		imagestring($image, 4, 10, 190, $text5, $blanc);
		imagestring($image, 4, 10, 200, $text6, $blanc);
		imagestring($image, 4, 10, 210, $text7, $blanc);
		imagepng($image);
		
		
		
	
		
		
		
		
		
		
		
	}
?>