<?php $this->layout('layout', ['title' => 'Naissances - Faites un vœu']) ?>



<?php $this->start('header_content') ?>	
	<p>Naissances - Faites un v&oelig;u</p>
<?php $this->stop('header_content') ?>


<?php $this->start('nav_content') ?>	

<?php $this->stop('nav_content') ?>

<?php $this->start('main_content') ?>
	
	<div class="container-fluid">
		<div class="gallerie-naissances">
			<div class="row">
				<div class="col-xs-12">
					<div class="row">
						<div class="col-xs-6 col-md-4">
							<form id="formCreateCard" method='POST'>
								<div class="form-group">	
										<label for='firstname'>Prénom</label>
										<input type='text' name="firstname" class="form-control" placeholder='Prénom' required>
								</div>
								<div class="form-group">
									<div class="input-group">
										<label for='size'>Taille (cm)</label>
										<input type="number" name="size" class="form-control" placeholder='Taille (cm)' required>
									</div>
								</div>
								<div class="form-group">
									<div class="input-group">
										<label for='weight'>Poids</label>
										<input type="text" name="weight" class="form-control" placeholder='Poids' required>
										<div class="input-group-addon">g</div>
									</div>
								</div>
								<div class="form-group">
									<label for='baby'>Photo</label>
									<input type="text" name="baby" class="form-control" placeholder='URL de la photo'>
								</div>
								<div class="form-group">
									<label>Carte sélectionnée</label>	
									<input type="hidden" name="carte" class="form-control" placeholder="Carte sélectionnée">
								</div>
								<div class="form-group">
									<div class="radio col-xs-offset-1">
										<input type="radio" name="sex" value="1" class="input-control" checked>
										Garçon
									  <label>Garçon</label>
									</div>
									<div class="radio col-xs-offset-1">
										<input type="radio" name="sex" value="0" class="input-control">
										Fille
									  <label>Fille</label>
									</div>
								</div>
								<div class="input-group">
									<input type="submit" class="form-control btn btn-success" id="btnCreateCard" value="Créer">
								</div>
								<div>
									<a href="CarteImprim" id="VersionImprimable">Version imprimable</a>
								</div>
							</form>
						</div>
						<div class="col-xs-6 col-md-8">
						<?php
							if(count($tGallerie) > 0)
							{
								foreach($tGallerie as $carte)
								{
									if($carte['type'] == 0) //0 => portrait
									{
										echo "<div class='col-xs-12 col-sm-6 col-md-2 portrait'><div class='row'><img class='col-xs-12 carte img-thumbnail' src='".$this->assetUrl('cartes/'.$carte['link'])."'></div></div>";
									}
									else
									{
										echo "<div class='col-xs-12 col-sm-6 col-md-2 portrait'><div class='row'><img class='col-xs-12 carte img-thumbnail' src='".$this->assetUrl('cartes/'.$carte['link'])."'></div></div>";
									}
								}
							}
							else
							{
								echo "<p class='col-xs-12'>Pas de cartes à afficher.</p>";
							}
							
							
						?>
						</div>
					</div>
				</div>
				<!-- Modal preview -->
				<div id="dialog">
					
				</div>
			</div>
		</div>
	</div>
	

<?php $this->stop('main_content') ?>

<?php $this->start('main_footer') ?>	

<?php $this->stop('main_footer') ?>

<?php $this->start('modal_login') ?>	

<?php $this->stop('modal_login') ?>

<?php $this->start('modal_insc') ?>	

<?php $this->stop('modal_insc') ?>

