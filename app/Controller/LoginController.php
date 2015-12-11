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
		$util = $user->getUserByUsernameOrEmail(htmlentities($_POST['login']));
		// vérification login/password
		if($auth->isValidLoginInfo(htmlentities($_POST['login']), 
								   htmlentities($_POST["pass"])))
		{
			// connexion de l'utilisateur
			$auth->logUserIn($util);
			//redirection vers une page privée (ou admin, en fonction des privilèges)
			if ($SESSION["user"]["role"] == "Administrateur") {
				$this->redirectToRoute('admin');
			} else {
				$this->redirectToRoute('prive');
			}
		} else {
		//si non valide retour au formulaire
			echo("Le login ou le mot de passe sont incorrects.");
			echo "<a href=".$this->redirectToRoute('home').">Retour à l'index</a>";
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

	/**
	* pour la page privée
	*/
	public function prive()
	{
		// récupération d'un objet sécurité
		$auth = new AuthentificationManager();
		//refresh de l'utilisateur
		$auth->refreshUser();
		//récupération de l'utilisateur connecté
		$loggedUser = $this->getUser();
		$this->show('login/prive', array('loggedUser'=>$loggedUser));
	}

	/**
	* Pour la page privée 2
	*/
	public function prive2()
	{
		//droits pour Admin ou president ou dieu ou Chef
		$this->allowTo(['Administrateur', 'President', 'Dieu', 'Chef']);
		//récupération de l'utilisateur connecté
		$loggedUser = $this->getUser();
		$this->show('login/prive2', array('loggedUser'=>$loggedUser));
	}


	/**
	* Pour la page privée 3
	*/
	public function prive3()
	{
		//droits pour Admin uniquement
		$this->allowTo('Administrateur');
		//récupération de l'utilisateur connecté
		$loggedUser = $this->getUser();
		$this->show('login/prive3', array('loggedUser'=>$loggedUser));	
	}

	public function admin()
	{
		//droits pour Admin uniquement
		$this->allowTo('Administrateur');
		//récupération de l'utilisateur connecté
		$loggedUser = $this->getUser();
		$this->show('admin', array('loggedUser'=>$loggedUser));	
	}
	/************************
	*						*
	*		THE END!		*
	*						*
	************************/
}