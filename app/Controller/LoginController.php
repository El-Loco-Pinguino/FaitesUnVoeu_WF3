<?php
namespace Controller;

use \W\Controller\Controller;
use \W\Security\AuthentificationManager;
use \W\Manager\UserManager;

class LoginController extends Controller
{

	/**
	* Formulaire de login
	*/
	public function login()
	{
		// afficher le formulaire
		$this->show('login/login');
	}


	/**
	* Authentification
	*/
	public function checkLogin()
	{
		// récupération d'un objet sécurité
		$auth = new AuthentificationManager();
		// récupération d'un objet utilisateur
		$user = new UserManager();
		// récupération des infos de l'utilisateur en cours
		$util = $user->getUserByUsernameOrEmail(htmlentities($_POST['username']));
		// vérification login/password
		if($auth->isValidLoginInfo(htmlentities($_POST['username']),  htmlentities($_POST["password"])))
		{
			// connexion de l'utilisateur
			$auth->logUserIn($util);
			//redirection vers une page privée (ou admin, en fonction des privilèges)
			
			if ($_SESSION["user"]["role"] == "Administrateur") 
			{
				$this->redirectToRoute('admin');
			} 
			else
			{
				$this->close();
				$this->redirectToRoute('home');
			}
		}
		else
		{
			$this->redirectToRoute('home');
		}
	}

	/**
	* Déconnexion
	*/
	public function close()
	{
		// récupération d'un objet sécurité
		$auth = new AuthentificationManager();
		//déconnexion
		$auth->logUserOut();
		// Fermeture de session
		session_destroy();
		//retour à l'accueil
		$this->redirectToRoute('home');
	}
	

	public function admin()
	{
		//droits pour Admin uniquement
		$this->allowTo('Administrateur');
		//récupération de l'utilisateur connecté
		$loggedUser = $this->getUser();
		$this->show('admin', array('loggedUser'=>$loggedUser));	
	}
}