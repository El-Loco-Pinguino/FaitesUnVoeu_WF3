<?php $this->layout('layout', ['title' => $title]);

/************************************
*									*
* début de la section main_content	*
*									*
************************************/
$this->start('main_content'); 

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