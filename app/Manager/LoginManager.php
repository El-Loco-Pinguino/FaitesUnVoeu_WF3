<?php
	namespace Manager;
	
	class LoginManager extends \W\Manager\Manager
	{
		protected $table = 'wusers';
		
		protected $primaryKey;
		
		protected $dbh;
		
		public function __construct()
		{
			$this->dbh = \W\Manager\ConnectionManager::getDbh();
		}
	}

?>