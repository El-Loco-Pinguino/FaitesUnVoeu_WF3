<?php

namespace Controller;

use \W\Controller\Controller;

class NaissancesController extends Controller
{
	/**
	 * Page des naissances par défaut
	 */
	public function naissances()
	{
		$naissances = new \Manager\NaissancesManager();
		$all = $naissances->findAll();
		
		$this->show('naissances/naissances', ['tGallerie' => $all]);
	}
}