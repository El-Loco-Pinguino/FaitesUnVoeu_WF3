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
		
		$tCarte = array
		(
			'firstname' => $firstname,
			'size' => $size,
			'weight' => $weight,
			'baby' => $baby,
			'carte' => $carte,
			'sex' => $sex
		);
		
		echo json_encode($tCarte);
	}
?>