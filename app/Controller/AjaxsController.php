<?php

namespace Controller;

use \W\Controller\Controller;

class AjaxsController extends Controller
{
	/**
	 * Page des creation dynamique de cartes par défaut
	 */
	public function createCards()
	{
		$this->show('ajaxs/createCards');
	}
	
	public function showCards()
	{
		$this->show('ajaxs/showCards');
	}
}