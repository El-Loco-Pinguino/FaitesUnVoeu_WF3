<?php
namespace Controller;

use \W\Controller\Controller;

class RegisterController extends Controller
{

	/**
	* Formulaire de login
	*/
	public function form()
	{
		// afficher le formulaire
		$this->show('register/register');
	}

	/**
	* Ajout d'un utilisateur
	*/
	public function add()
	{
		// récupération du Modèle 'register'
		$util = new \Manager\RegisterManager();
		// création d'un tableau contenant les infos à ajouter.
		// le mot de passe est crypté avec password_hash
		$newUtil = array
		(
			'username' => $this->e($_POST['username']),
			'password' => password_hash(htmlentities($_POST['password']), PASSWORD_DEFAULT),
			'email' => $this->e($_POST['email']),
			'role' => "Membre" // Groupe par défaut, allowTo pour attribuer des privilèges importants !
		);
		// ajout de l'utilisateur
		// le strip_tag est activé par défaut
		$util->insert($newUtil);
		
		// retour à l'accueil
		$this->redirectToRoute('home');
	}
	// méthode e() comme dans les vues
	private function e($chaine) {
		return htmlentities($chaine);
	}
}