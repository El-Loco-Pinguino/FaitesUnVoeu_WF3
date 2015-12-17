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
		$tGallerie = $naissances->findAll();
		
		$utilisateur = new UserManager();
		
		$tUsers = $utilisateur->findAll();
		
		$this->show('admin/admin', ['tGallerie' => $tGallerie, 'tUsers' => $tUsers]);
	}
	
	public function userDel($id)
	{
		$naissances = new UserManager();
		$naissances->delete($id);
		
		$this->admin();
	}
	
	private function CheckPrice($param)
	{
		
		if(!isset($param))
		{
			$retour = 0;
		}
		else
		{
			$retour = $param;
		}
		
		return $retour;
	}
	
	public function addCard()
	{
		// récupération du Modèle 'register'
		$card = new \Manager\NaissancesManager();
		// création d'un tableau contenant les infos à ajouter.
		// le mot de passe est crypté avec password_hash
		$newCard = array
		(
			'name' => $this->e($_POST['name']),
			'height' => $this->e($_POST['height']),
			'width' => $this->e($_POST['width']),
			'type' => $this->e($_POST['type']),
			'price' => $this->CheckPrice($this->e($_POST['price'])),
			'link' => $this->e($_POST['link']),
		);
		// ajout de l'utilisateur
		// le strip_tag est activé par défaut
		$card->insert($newCard);
		
		$this->redirectToRoute('admin');
	}
	
	public function e($param)
	{
		return htmlentities(strip_tags($param));
	}
}