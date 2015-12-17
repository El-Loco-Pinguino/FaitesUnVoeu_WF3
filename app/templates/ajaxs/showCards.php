<?php
	header ("Content-type: image/png;");
	if(isset($_GET['firstname']) && isset($_GET['size']) && isset($_GET['weight']) && isset($_GET['carte']) && isset($_GET['sex']))
	{

		$cible = "../public/assets/images/photo/";
		//OK 
		$firstname = strtoupper($_GET['firstname']);
		$size = htmlentities(strip_tags($_GET['size']));
		$weight = htmlentities(strip_tags($_GET['weight']));
		$baby = htmlentities(strip_tags($_GET['baby']));
		$carte = htmlentities(strip_tags($_GET['carte']));
		$sex = htmlentities(strip_tags($_GET['sex']));

		//$urlPhoto = filter_var($baby, FILTER_VALIDATE_URL)
		/*move_uploaded_file($_FILES['baby']['tmp_name'], $cible."photo".$size.$weight);
*/
		$image = imagecreatefrompng('http://wf3-h2'.$carte);

		//if ($_GET['baby'] != "" && $urlPhoto != "")
		if ($_GET['baby'] != "" )
		{
			$photo = imagecreatefromjpeg($baby);
			$tmp = getimagesize($baby);
			imagecopyresized($image, $photo, 60, 300, 0, 0,120, 120, $tmp[0], $tmp[1]);
		}
		
		$orange = imagecolorallocate($image, 255, 128, 0);
		$bleu = imagecolorallocate($image, 0, 0, 255);
		$bleuclair = imagecolorallocate($image, 156, 227, 254);
		$noir = imagecolorallocate($image, 0, 0, 0);
		$blanc = imagecolorallocate($image, 255, 255, 255);
				
		if($sex == 0)
		{
			$text1 = "Je m'appelle ".$firstname;
			$text2 = "Je suis toute petite ";
			$text3 = "Mais avec mes ".$weight." g";
			$text4 = "et mes ".$size." cm,";
			$text5 = "Je suis la fierté ";
			$text6 = "de mes parents!";
			$text7 = "J'ai vraiment hâte ";
			$text8 = "de vous rencontrer!";
			$text9 = "A bientôt, ".$firstname."";			
		}
		else
		{
			$text1 = "Je m'appelle ".$firstname;
			$text2 = "Je suis tout petit ";
			$text3 = "Mais avec mes ".$weight." g";
			$text4 = "et mes ".$size." cm,";
			$text5 = "Je suis la fierté ";
			$text6 = "de mes parents!";
			$text7 = "J'ai vraiment hâte ";
			$text8 = "de vous rencontrer!";
			$text9 = "A bientôt, ".$firstname." ";
			 
		}
		
		

		imagestring($image, 5, 40, 115, utf8_decode($text1), $noir);
		imagestring($image, 5, 40, 130, utf8_decode($text2), $noir);
		imagestring($image, 5, 40, 145, utf8_decode($text3), $noir);
		imagestring($image, 5, 40, 160, utf8_decode($text4), $noir);
		imagestring($image, 5, 40, 175, utf8_decode($text5), $noir);
		imagestring($image, 5, 40, 190, utf8_decode($text6), $noir);
		imagestring($image, 5, 40, 205, utf8_decode($text7), $noir);
		imagestring($image, 5, 40, 220, utf8_decode($text8), $noir);
		imagestring($image, 5, 40, 245, utf8_decode($text9), $noir);

		
		
		imagepng($image);
		
		
	}
?>