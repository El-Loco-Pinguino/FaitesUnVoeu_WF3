<?php
	
	$w_routes = array(
		['GET', '/', 'Default#home', 'home'],
		['GET', '/naissances', 'Naissances#naissances', 'naissances'],
		['GET', '/contacts', 'Contacts#contacts', 'contacts'],
		['GET', '/createCards', 'Ajaxs#createCards', 'createCards'],
		['GET', '/showCards', 'Ajaxs#showCards', 'showCards'],
		['GET', '/login', 'Login#login', 'login'],
		['POST', '/checkLogin', 'Login#checkLogin', 'checkLogin'],
		['POST', '/register', 'Register#add', 'registerAdd'],
		['GET', '/close', 'Login#close', 'close'],
		['GET', '/prive', 'Login#prive', 'prive'],
		['GET', '/prive2', 'Login#prive2', 'prive2'],
		['GET', '/prive3', 'Login#prive3', 'prive3'],
		['GET', '/admin', 'Admin#admin', 'admin'],
		['POST', '/addcontacts', 'Contacts#addcontacts', 'addContacts'],
		['GET', '/admin/cartemod/[i:id]', 'Carte#mod', 'carteMod'],
		['GET', '/admin/cartedel/[i:id]', 'Carte#del', 'carteDel'],
		['GET', '/CarteImprim', 'Imprim#CarteImprim', 'CarteImprim'],
		['GET', '/UserDel/[i:id]', 'Admin#userDel', 'UserDel'],		
		['POST', '/Addcard', 'Admin#addCard', 'AddCard']
	);