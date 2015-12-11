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
	<script src="<?= $this->assetUrl('js/jquery.min.js') ?>"></script>
	<script src="<?= $this->assetUrl('js/bootstrap.min.js') ?>"></script>
	<script src="<?= $this->assetUrl('js/jquery-ui.min.js') ?>"></script>
	<script src="<?= $this->assetUrl('js/script.js') ?>"></script>
</head>

<body>
<header>
	
	<div class="row">
		<div class="col-xs-4" id="login">
			<?= $this->section('header_login') ?>
			<?php
				if(isset($_SESSION['user']['id']))
				{
					echo "<div class='col-xs-8'>".$_SESSION['user']['username'] . " (" . $_SESSION['user']['role'].")</div>";
					echo "<div class='col-xs-4'><a class=\"btn btn-info\" href=\"http://wf3-h2/FaitesUnVoeu_WF3/public/close\">Se déconnecter</a></div>";
				}
				else
				{
			?>
					<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal_login">
						S'identifier
					</button>
					<?php 
					if(!isset($_SESSION['user']['id']))
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
		<div class="col-xs-8">
			<?= $this->section('header_content') ?>
		</div>
	</div>
</header>
	<div class="container">
		<section>
			<!-- Menu -->
			<?= $this->section('nav_content') ?>
			<nav class="navbar navbar-default navbar-static-top">

			<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false">
						<span class="sr-only">Menu</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#"></a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="menu">
					<ul class="row nav navbar-nav">
						<li class="center-block">
							<li><a class="btn btn-info" href="http://wf3-h2/FaitesUnVoeu_WF3/public/">Home</a></li>
							<li><a class="btn btn-info" href="http://wf3-h2/FaitesUnVoeu_WF3/public/naissances">Naissances</a></li>
							<li><a class="btn btn-info" href="http://wf3-h2/FaitesUnVoeu_WF3/public/contacts">Contacts</a></li>
								
							<?php
							if(isset($_SESSION['user']))
							{
								if($_SESSION['user']['role'] == 'Administrateur')
								{
								?>
									<li><a class="btn btn-info" href="http://wf3-h2/FaitesUnVoeu_WF3/public/admin">Administration</a></li>
								<?php
								}
							}
							?>
						</li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</nav>
		</section>		

		<section>
		<!-- Contenu Principal -->
		<?= $this->section('main_content') ?>
		</section>
	</div>
	<!-- Footer -->
	<footer class="container-fluid">
	<?= $this->section('main_footer') ?>
		<div class="col-md-12">
			<address>
				<p>Vous pouvez nous contacter à cette adresse :</p>
				<p><strong>faites un voeux</strong></p>
				<p>rue des cygognes</p>
				<p>02350 Buire</p>
			</address>
		</div>
	</footer>
<!-- Footer -->

	<?= $this->section('modal_login') ?>
	<!-- Modal -->
	<div class="modal fade" id="myModal_login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="myModalLabel">Identifiez vous</h4>
				</div>
			<div class="modal-body">
				<form method="POST" action="<?= $this->url('checkLogin'); ?>">
					<div class="form-group">
						<label>Login</label>
						<input class="form-control" type="text" name="login" placeholder="Login" required>
					</div>
					<div class="form-group">
						<label>Pass</label>
						<input class="form-control" type="password" name="pass" placeholder="Mot de passe" required>
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
					<h4 class="modal-title" id="myModalLabel">Enregistrez vous</h4>
				</div>
			<div class="modal-body">
				<form method="POST" action="<?= $this->url('registerAdd'); ?>">
					<div class="form-group">
						<label>Login</label>
						<input class="form-control" type="text" name="username" placeholder="Identifiant">
					</div>
					<div class="form-group">
						<label>Mot de passe</label>
						<input class="form-control" type="password" name="password" placeholder="Mot de passe">
					</div>
					<div class="form-group">
						<label>Pass</label>
						<input class="form-control" type="mail" name="email" placeholder="Adresse mail">
					</div>
					<input class="form-control btn btn-success" type="submit" value="Se connecter">
				</form>
			</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
</body>

</html>