<?php

namespace Controller;

use \W\Controller\Controller;

class ContactsController extends Controller
{
	/**
	 * Page des naissances par défaut
	 */
	public function contacts()
	{
		$this->show('contacts/contacts');
	}
	
	public function addContacts()
	{
		$this->show('contacts/addcontacts');
	}
}