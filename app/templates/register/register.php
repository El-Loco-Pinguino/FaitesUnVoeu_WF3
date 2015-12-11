<?php $this->layout('layout', ['title' => $title]);

/************************************
*									*
* début de la section main_content	*
*									*
************************************/
$this->start('main_content'); 
?>

<div class="form">
<form method="post" action="<?= $this->url('registerAdd'); ?>">
<p>
	<input type="text" name="username" placeholder="Identifiant">
</p>
<p>
    <input type="password" name="password" placeholder="Mot de passe">
</p>
<p>
    <input type="text" name="email" placeholder="Adresse mail">
</p>

<p><input type="submit" value="S'enregistrer"></p>
</form>

</div>

<?php 
$this->stop('main_content');

/************************************
*									*
* début de la section main_footer	*
*									*
************************************/
$this->start('main_footer');
?>
<div class="menu">
<?php
// création d'un menu avec toutes les routes définies dans la configuration...
$this->stop('main_footer');
 
?>
</div>