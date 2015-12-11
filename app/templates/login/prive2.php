<?php $this->layout('layout', ['title' => 'Page privée 2']);

/************************************
*									*
* début de la section main_content	*
*									*
************************************/
$this->start('main_content'); 
?>

<img src="<?= $this->assetUrl('images/wf3.png'); ?>">
<h1>Cette page est privée</h1>

<pre>
<?php
if(isset($_SESSION['user'])) print_r($_SESSION);

// infos de l'utilisateur venant du contrôleur
if(is_array($loggedUser)) print_r($loggedUser);
else echo '<h3>Non connecté!</h3>';
print_r($w_user);
?>
</pre>

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