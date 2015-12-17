<?php
	namespace Manager;
	
	class ImprimManager extends \W\Manager\Manager
	{
		
		public function __construct()
		{
			$this->dbh = \W\Manager\ConnectionManager::getDbh();
		}

	}

?>