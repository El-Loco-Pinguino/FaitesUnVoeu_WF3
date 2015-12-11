<?php
	namespace Manager;
	
	class RegisterManager extends \W\Manager\Manager
	{
		protected $table = 'users';
		
		protected $primaryKey;
		
		protected $dbh;
		
		public function __construct()
		{
			$this->dbh = \W\Manager\ConnectionManager::getDbh();
		}
	}

?>