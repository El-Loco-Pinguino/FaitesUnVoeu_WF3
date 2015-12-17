<?php $this->layout('layout', ['title' => "Administration - Faites un vœu"]); ?>


<?php $this->start('header_content') ?>	
	<p>Administration - Faites un v&oelig;u</p>
<?php $this->stop('header_content') ?>

<?php $this->start('nav_content') ?>	

<?php $this->stop('nav_content') ?>

<?php $this->start('main_content') ?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12">
				<div class='row'>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<table border="1">
							<tr>
								<th class='col-xs-1'>Carte</th>
								<th class='col-xs-1'>Nom</th>
								<th class='col-xs-1'>Hauteur</th>
								<th class='col-xs-1'>Largeur</th>
								<th class='col-xs-1'>Prix</th>
								<th class='col-xs-1'>Lien</th>
								<th class='col-xs-1'>Supprimer</th>
							</tr>
							
							<?php
								for($i = 0; $i < count($tGallerie); $i++)
								{
							?>
									<tr>
										<td class='col-xs-1'><img class='img_admin' src='http://wf3-h2/FaitesUnVoeu_WF3/public/assets/cartes/<?php echo $tGallerie[$i]['link']; ?>'></td>
										<td class='col-xs-1'><?php echo $tGallerie[$i]['name']; ?></td>
										<td class='col-xs-1'><?php echo $tGallerie[$i]['height']; ?></td>
										<td class='col-xs-1'><?php echo $tGallerie[$i]['width']; ?></td>
										<td class='col-xs-1'><?php echo $tGallerie[$i]['price']; ?></td>
										<td class='col-xs-1'><?php echo $tGallerie[$i]['link']; ?></td>
										<td class='col-xs-1'><a class='btn btn-danger' href='<?= $this->url('carteDel', ['id' => $tGallerie[$i]['id']]) ?>'>Supprimer</a></td>
									</tr>
							<?php
								}
							?>
						</table>
						<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modal_addCard">
							Créer la carte
						</button>
					</div>
					<div class='col-xs-12 col-sm-6 col-md-6 col-lg-6'>
					</div>
					<div class='col-xs-12 col-sm-6 col-md-6 col-lg-6'>
						<table border=1>
							<tr>
								<th class='col-xs-1'>Id</th>
								<th class='col-xs-1'>Nom d'utilisateur</th>
								<th class='col-xs-1'>Adresse mail</th>
								<th class='col-xs-1'>Rôle</th>
								<th class='col-xs-1'>Supprimer</th>
							</tr>
						<?php
							for($i = 0; $i < count($tUsers); $i++)
							{
						?>
							<tr>
								<td class='col-xs-1'><?php echo $tUsers[$i]['id']; ?></td>
								<td class='col-xs-1'><?php echo $tUsers[$i]['username']; ?></td>
								<td class='col-xs-1'><?php echo $tUsers[$i]['email']; ?></td>
								<td class='col-xs-1'><?php echo $tUsers[$i]['role']; ?></td>
								<td class='col-xs-1'><a class='btn btn-danger' href='<?= $this->url('UserDel', ['id' => $tUsers[$i]['id']]) ?>'>Supprimer</a></td>
							</tr>
						<?php
							}
						?>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php $this->stop('main_content') ?>