<?php $this->layout('layout', ['title' => 'Naissances - Faites un vœu']) ?>



<?php $this->start('header_content') ?>	
	<p>Naissances - Faites un v&oelig;u</p>
<?php $this->stop('header_content') ?>


<?php $this->start('nav_content') ?>	

<?php $this->stop('nav_content') ?>

<?php $this->start('main_content') ?>
	
	<div class="container-fluid">

		<div class="row no-padding">

			<div class="col-xs-4 col-xs-offset-4">

			   <div id="imprimer"><?php echo $Carte ?></div>

			</div>

		</div>

		<div class="row">

			<div class="col-xs-2 col-xs-offset-5">

			   <div class="imprimButton">

			   		<input type="button" onclick="window.print()" class="form-control btn btn-success" id="impression" value="Imprimer">
								
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

