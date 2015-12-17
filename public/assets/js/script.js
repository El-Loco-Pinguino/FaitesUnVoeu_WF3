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
	
	//Formulaire de repmplissage des donn�es de la carte => naissance.php
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
				data:$(this).serialize(),
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
		$('#VersionImprimable').show();
	});
	
	
	//contacts
	
	$('#form_contact').submit(function(event)
	{
		event.preventDefault();
		$.ajax
		(
			{
				url:"/FaitesUnVoeu_WF3/public/addcontacts",
				data: $('#form_contact').serialize(),
				dataType:"JSON",
				method:"POST",
				success: function(Data)
				{
					
				},
				error:function()
				{
					
				},
				complete: function()
				{
					
				}
				
			}
		)
	});
	
	$('#btn-submitcontact').confirm
	(
		{
			text: "&Ecirc;tes vous s&ucirc;r de vouloir envoyer ce message &agrave; un administrateur ?",
			title: "Confirmation requise",
			confirm: function(button) 
			{
				$('#form_contact').submit();
			},
			cancel: function(button) 
			{
				
			},
			confirmButton: "Oui",
			cancelButton: "Non",
			post: true,
			confirmButtonClass: "btn-danger",
			cancelButtonClass: "btn-default",
			dialogClass: "modal-dialog modal-lg" // Bootstrap classes for large modal
		}
	);	
})