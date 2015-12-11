///JQUERY
$(document).ready(function()
{
	//Quand on clique sur une carte 
	$('.carte').click(function()
	{
		//On d�selectionne toutes les cartes 
		$('.carte').removeClass('selected');
		//On ajoute la class selected a la carte cliqu�e
		$(this).addClass('selected');
		$('[name=carte]').val($(this).attr('src'));
	});
	//Selectionne la premi�re carte 
	$('.carte:first').click();
	
	//Formulaire de repmplissage des donn�es de la carte
	$('#formCreateCard').submit(function(event)
	{
		//On emp�che l'envoie du formulaire et donc le rafraichissement de la pages
		event.preventDefault();
		
		//Ajax
		$.ajax
		(
			{
				//Url du script a ex�cuter
				url:"/FaitesUnVoeu_WF3/public/createCards",
				//On renvoie les informations en JSON
				dataType:"JSON",
				//On envoie les donn�es du formulaire et de la carte selectionn�e
				data:
				{
					firstname:$('[name=firstname]').val(),
					carte:$('[name=carte]').val(),
					size:$('[name=size]').val(),
					weight:$('[name=weight]').val(),
					baby:$('[name=baby]').val(),
					sex:$('[name=sex]:checked').val()
				},
				//On utilise la method GET
				method:"GET",
				//Functuion executer quand le fichier a �t� trouv�
				success: function(Data)
				{
					//Si il y a une carte selectionn�e
					if($('.selected').length > 0)
					{
						//On affiche le resultat dans une fenetre modal Jquery UI
						$('#dialog').html("<img src='/FaitesUnVoeu_WF3/public/showCards?firstname="+Data['firstname']+"&size="+Data['size']+"&weight="+Data['weight']+"&baby="+Data['baby']+"&carte="+Data['carte']+"&sex="+Data['sex']+"'>").attr('title', 'Votre selection').dialog();
						
					}
					else
					{
						//Sinon on affiche un message d'erreur dans une fenetre modal jquery UI
						$('#dialog').html('<p class="text-warning">Veuillez s&eacute;lectionner un mod&egrave;le de carte.</p>');
						$('#dialog').dialog();
					}
						
				},
				error: function()
				{
					//En cas d'erreur de chargement de scripts
				},
				complete: function()
				{
					//Est ex�cuter dans tout les cas, avec ou sans erreurs
				}
			}
		);
	});
})