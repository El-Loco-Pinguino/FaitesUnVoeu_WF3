<?php
	
	if(isset($_GET['firstname']) && isset($_GET['size']) && isset($_GET['weight']) && isset($_GET['baby']) && isset($_GET['carte']) && isset($_GET['sex']))
	{

		
		//OK 
		$firstname = htmlentities(strip_tags($_GET['firstname']));
		$size = htmlentities(strip_tags($_GET['size']));
		$weight = htmlentities(strip_tags($_GET['weight']));
		$baby = htmlentities(strip_tags($_GET['baby']));
		$carte = htmlentities(strip_tags($_GET['carte']));
		$sex = htmlentities(strip_tags($_GET['sex']));

		/*move_uploaded_file($baby, $this->assetUrl("images/".$firstname));

		if(!file_exists($baby))
		{
			$baby = "";
			echo "string";
		}

		*/
		
		$tCarte = array
		(
			'firstname' => $firstname,
			'size' => $size,
			'weight' => $weight,
			'baby' => $baby,
			'carte' => $carte,
			'sex' => $sex
		);

		
		$_SESSION['firstname'] = $firstname;
		$_SESSION['size'] = $size;
		$_SESSION['weight'] = $weight;
		$_SESSION['baby'] = $baby;
		$_SESSION['carte'] = $carte;
		$_SESSION['sex'] = $sex;

		
		
		echo json_encode($tCarte);
	}
?>