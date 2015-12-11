<?php
	namespace Manager;
	
	class NaissancesManager extends \W\Manager\Manager
	{
		protected $table = 'naissances';
		
		protected $primaryKey;
		
		protected $dbh;
		
		public function __construct()
		{
			$this->dbh = \W\Manager\ConnectionManager::getDbh();
		}
	}

?>