<?php $this->layout('layout', ['title' => 'Contacts - Faites un vœu']) ?>



<?php $this->start('header_content') ?>	
	<p>Contact - Faites un v&oelig;u</p>
<?php $this->stop('header_content') ?>


<?php $this->start('nav_content') ?>	

<?php $this->stop('nav_content') ?>

<?php $this->start('main_content') ?>	
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-sm-offset-3">
				<form method="POST" id="form_contact">
					<div class="form-group">
						<label for='firstname'>Sujet</label>
						<input type='text' name="subject" class="form-control" placeholder='Sujet' required>
					</div>
					<div class="form-group">
						<label for='firstname'>Message</label>
						<textarea name="message" placeholder='Votre message...' class="form-control" required ></textarea>
					</div>
					<div class="form-group">
						<label for='firstname'>Email</label>
						<input type='mail' name="mail" class="form-control" placeholder='Votre mail'  required>
					</div>
					<div class="form-group">
						<label for='firstname'>Nom</label>
						<input type='text' name="name" class="form-control" placeholder='Nom'  required>
					</div>
					<div class="form-group">
						<label for='firstname'>Prénom</label>
						<input type='text' name="firstname" class="form-control" placeholder='Prénom'  required>
					</div>
					<div class="form-group">
						<input type='button' value="Envoyer le message" name="btn-submitcontact" id="btn-submitcontact" class="btn btn-success form-control"  required>
					</div>
				</form>
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

