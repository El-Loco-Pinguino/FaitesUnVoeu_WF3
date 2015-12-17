<?php

namespace Controller;

use \W\Controller\Controller;

class CarteController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function mod($id)
	{
		
		// $naissances = new \Manager\NaissancesManager();
		// $naissances->update($id);

		// $this->show('admin/admin');
	}

	public function del($id)
	{
		$naissances = new \Manager\NaissancesManager();
		$naissances->delete($id);
		
		$this->redirectToRoute('admin');
	}
}