<?php
	namespace Manager;
	
	class AdminManager extends \W\Manager\Manager
	{
		protected $table = 'users';
		protected $table = 'naissances';
		
		protected $primaryKey;
		
		protected $dbh;

		public function __construct() {
			// récupération du singleton de connexion
			$this->dbh = \W\Manager\ConnectionManager::getDbh();
		}

	}

?>