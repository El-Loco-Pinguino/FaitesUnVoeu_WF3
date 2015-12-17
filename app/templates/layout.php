	<!DOCTYPE html>
	<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?= $this->e($title) ?></title>

		<link rel="stylesheet" href="<?= $this->assetUrl('css/bootstrap.min.css') ?>">
		<link rel="stylesheet" href="<?= $this->assetUrl('css/jquery-ui.structure.min.css') ?>">
		<link rel="stylesheet" href="<?= $this->assetUrl('css/jquery-ui.theme.min.css') ?>">
		<link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>">
		<link rel="stylesheet" href="<?= $this->assetUrl('css/print.css') ?>" type="text/css" media="print">
		<script src="<?= $this->assetUrl('js/jquery.min.js') ?>"></script>
		<script src="<?= $this->assetUrl('js/bootstrap.min.js') ?>"></script>
		<script src="<?= $this->assetUrl('js/jquery-ui.min.js') ?>"></script>
		<script src="<?= $this->assetUrl('js/jquery.confirm.min.js') ?>"></script>
		<script src="<?= $this->assetUrl('js/script.js') ?>"></script>
		
		<?php
			if(isset($erreur))
			{
				echo '<script>alert()</script>';
			}
		?>
		
	</head>

	<body>
	<header>
		<?= $this->section('header_content') ?>
	</header>
		
		<section>
			<!-- Menu -->
			<?= $this->section('nav_content') ?>


			<nav class="navbar navbar-default navbar-fixed-top">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
							<span class="sr-only">Menu</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="../public/">Faites un v&oelig;u !</a>
					</div>
					<div id="navbar" class="navbar-collapse collapse">
						<ul class="nav navbar-nav">
							<li><a class="btn btn-info" href="/FaitesUnVoeu_WF3/public/">Accueil</a></li>
							<li><a class="btn btn-info" href="/FaitesUnVoeu_WF3/public/naissances">Naissances</a></li>
							<li><a class="btn btn-info" href="/FaitesUnVoeu_WF3/public/contacts">Contact</a></li>
							<?php
								if(isset($_SESSION['user']['id']))
								{
									echo '<li><a class="btn btn-info" href="/FaitesUnVoeu_WF3/public/admin">Administration</a></li>';
								}									
							?>
							</ul>
						<ul class="nav navbar-nav navbar-right">
							<li>	
								<div id="login">
									<?= $this->section('header_login') ?>
									<?php
									if(isset($_SESSION['user']['id']))
									{
										echo "<div>".$_SESSION['user']['username'] . " (" . $_SESSION['user']['role'].")</div>";
										echo "<div><a class=\"btn btn-info\" href=\"/FaitesUnVoeu_WF3/public/close\">Se déconnecter</a></div>";
									}
									else
									{
									?>
									<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal_login">
										S'authentifier
									</button>
									<?php 
									//if(!isset($_SESSION['user']['id']))
									if(false)
									{
									?>
										<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal_insc">
											S'enregistrer
										</button>	
									<?php
									}
									?>
									<?php
									}

									?>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</nav>
	
		</section>		

		<section>
		<!-- Contenu Principal -->
		<?= $this->section('main_content') ?>
		</section>

		<?= $this->section('modal_login') ?>
		<!-- Modal -->
		<div class="modal fade" id="myModal_login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="myModalLabel">Identifiez-vous</h4>
					</div>
				<div class="modal-body">
					<form method="POST" action="<?= $this->url('checkLogin'); ?>">
						<div class="form-group">
							<label>Login</label>
							<input class="form-control" type="text" name="username" placeholder="Identifiant" required>
						</div>
						<div class="form-group">
							<label>Pass</label>
							<input class="form-control" type="password" name="password" placeholder="Mot de passe" required>
						</div>
						<input class="form-control btn btn-success" type="submit" value="Se connecter">
					</form>
				</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
		
		<?= $this->section('modal_insc') ?>
		<!-- Modal -->
		<div class="modal fade" id="myModal_insc" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="myModalLabel">Enregistrez-vous</h4>
					</div>
				<div class="modal-body">
					<form method="POST" action="<?= $this->url('registerAdd'); ?>">
						<div class="form-group">
							<label>Login</label>
							<input class="form-control" type="text" name="username" placeholder="Identifiant" required>
						</div>
						<div class="form-group">
							<label>Mot de passe</label>
							<input class="form-control" type="password" name="password" placeholder="Mot de passe" required>
						</div>
						<div class="form-group">
							<label>Pass</label>
							<input class="form-control" type="mail" name="email" placeholder="Adresse mail" required>
						</div>
						<input class="form-control btn btn-success" type="submit" value="Creer le compte">
					</form>
				</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
		
		<?= $this->section('modal_addCard') ?>
		<!-- Modal -->
		<div class="modal fade" id="modal_addCard" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="myModalLabel">Remplissez les champs</h4>
					</div>
				<div class="modal-body">
					<form method="POST" id='form_addCard' action="<?= $this->url('AddCard'); ?>">
						<div class="form-group">
							<label>Nom de la carte</label>
							<input class="form-control" type="text" name="name" placeholder="Nom de la carte" required>
						</div>
						<div class="form-group">
							<label>Hauteur</label>
							<input class="form-control" type="number" name="height" placeholder="Hauteur" required>
						</div>
						<div class="form-group">
							<label>Largeur</label>
							<input class="form-control" type="number" name="width" placeholder="Largeur" required>
						</div>
						<div class="form-group">
							<label>Portrait / Paysage</label>
							
							<select name='type' class="form-control" required>
								<option value='0'>Portrait</option>
								<option value='1'>Paysage</option>
							</select>
						</div>
						<div class="form-group">
							<label>Prix *</label>
							<input class="form-control" type="number" name="price" placeholder="Prix (Optionnel)">
						</div>
						<div class="form-group">
							<label>Lien de la carte</label>
							<input class="form-control" type="text" name="link" placeholder="Lien de la carte" required>
						</div>
						<input class="form-control btn btn-success" id='submit_addcard' type="submit" value="Créer la carte" required>
					</form>
				</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->

	<!-- Footer -->
		<footer class="container-fluid">
		<?= $this->section('main_footer') ?>
			<div class="row">
				<div class="col-md-4">
					<img id="cigogneFooter" alt="Cigogne bleue pour le pied de page" src="<?= $this->assetUrl('images/Cigogne.png') ?>">
				</div>
				<div class="col-md-4">

				</div>
				<div class="col-md-4">
					<address>
						<p>Vous pouvez nous contacter à cette adresse :
						<strong>Faites un v&oelig;u</strong>
						<p>Rue des Cigognes --- 02500 Buire, FRANCE</p>
					</address>
				</div>
		</footer>
	<!-- Footer -->
	</body>

	</html>