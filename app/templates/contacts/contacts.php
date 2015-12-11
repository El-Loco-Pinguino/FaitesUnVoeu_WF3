<?php $this->layout('layout', ['title' => 'Contacts - Faites un voeu']) ?>



<?php $this->start('header_content') ?>	
	<p>Contacts - Faites un voeu</p>
<?php $this->stop('header_content') ?>


<?php $this->start('nav_content') ?>	

<?php $this->stop('nav_content') ?>

<?php $this->start('main_content') ?>	
	<div class="row">
		<div>
			<form method="POST" id="form_contact" action="<?= $this->url('addContacts'); ?>">
				<div class="form-group">
					<label for='firstname'>Sujet</label>
					<input type='text' name="Subject" class="form-control" placeholder='Sujet'>
				</div>
				<div class="form-group">
					<label for='firstname'>Message</label>
					<textarea class="form-control" placeholder="Votre message ici..."></textarea>
				</div>
				<div class="form-group">
					<label for='firstname'>Email</label>
					<input type='text' name="Subject" class="form-control" placeholder='Email'>
				</div>
				<div class="form-group">
					<label for='firstname'>Nom</label>
					<input type='text' name="Subject" class="form-control" placeholder='Nom'>
				</div>
				<div class="form-group">
					<label for='firstname'>Prénom</label>
					<input type='text' name="Subject" class="form-control" placeholder='Prénom'>
				</div>
				<div class="form-group">
					<input type='submit' name="btn-submitcontact" class="form-control btn btn-success">
				</div>
				
			</form>
		</div>
	</div>
<?php $this->stop('main_content') ?>

<?php $this->start('main_footer') ?>	

<?php $this->stop('main_footer') ?>

<?php $this->start('modal_login') ?>	

<?php $this->stop('modal_login') ?>

<?php $this->start('modal_insc') ?>	

<?php $this->stop('modal_insc') ?>

