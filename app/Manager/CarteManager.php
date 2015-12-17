<?php
	namespace Manager;
	
	class CarteManager extends \W\Manager\Manager
	{
		protected $table = 'naissances';
		
		protected $primaryKey;
		
		protected $dbh;

		public function __construct() {
			// r�cup�ration du singleton de connexion
			$this->dbh = \W\Manager\ConnectionManager::getDbh();
		}
	}

?>