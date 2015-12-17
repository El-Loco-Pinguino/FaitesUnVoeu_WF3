<?php

namespace Controller;

use \W\Controller\Controller;

class ImprimController extends Controller
{
	/**
	 * Page des page imprimable par défaut
	 */
	public function CarteImprim()
	{
		
		$tmp = "<img src='/FaitesUnVoeu_WF3/public/showCards?firstname=".$_SESSION['firstname']."&size=".$_SESSION['size']."&weight=".$_SESSION['weight']."&baby=".$_SESSION['baby']."&carte=".$_SESSION['carte']."&sex=".$_SESSION['sex']."'>";

		$this->show('Imprim/CarteImprim',['Carte' => $tmp]);
	}
	
}