<?php $this->layout('layout', ['title' => "Administration"]);

/************************************
*									*
* début de la section main_content	*
*									*
************************************/
$this->start('main_content'); 
?>

<h1>Que faire ?</h1>
<h2>Gérer les modèles de cartes</h2>
<p>Double-cliquer sur une carte pour la supprimer.</p>
	<div class="col-xs-6 col-md-4">
		<?php
			if(count($tGallerie) > 0)
			{
				foreach($tGallerie as $carte)
				{
					if($carte['type'] == 0) //0 => portrait
					{
						echo "<div class='carteAEffacer' class='col-xs-12 col-sm-6 col-md-4 portrait'><div class='row'><img class='carte img-thumbnail' src='".$this->assetUrl('cartes/'.$carte['link'])."'></div></div>";
					}
					else
					{
						echo "<div class='carteAEffacer' class='col-xs-12 col-sm-6 col-md-4 portrait'><div class='row'><img class='carte img-thumbnail' src='".$this->assetUrl('cartes/'.$carte['link'])."'></div></div>";
					}
				}
			}
			else
			{
				echo "<p class='col-xs-12'>Pas de cartes à afficher.</p>";
			}					
		?>
	</div>
	<label><input type="file" accept="png,jpeg" placeholder="Importer une carte"></label>
<h2>Gérer les utilisateurs</h2>
<div class="col-xs-6 col-md-offset-4">
	<?php
		// Générer la liste de tous les membres, admins exclus ! (Un site sans admin, la misère !)
		if(count($tUsers) > 0)
			{
				foreach($tUsers as $idMembre)
				{
					echo "<ol>";
					if(!$idMembre["role"] == "Administrateur") // Si non-admin, on l'affiche. Si admin, ne pas afficher (raisons de sécurité évidentes)
					{
						echo "<li class='row'>".$idMembre["username"]." <button>Supprimer</button></li>";
					}
					else
					{
						
					}
					echo "</ol>";
				}
			}
			else
			{
				echo "<p class='col-xs-12'>Pas de cartes à afficher.</p>";
			}	
	?>
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