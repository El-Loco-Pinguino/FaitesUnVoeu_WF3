<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Security\AuthentificationManager;
use \W\Manager\UserManager;

class AdminController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function admin()
	{
		
		$naissances = new \Manager\NaissancesManager();
		$all = $naissances->findAll();
		
		$this->show('admin/admin', ['tGallerie' => $all]);
	}

	public function listemembres()
	{
		$utilisateur = new \Manager\UserManager();
		$tUsers = $utilisateur->findAll();
	}

	
}