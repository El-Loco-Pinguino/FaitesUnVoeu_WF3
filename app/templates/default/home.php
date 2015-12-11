<?php $this->layout('layout', ['title' => 'Faites un voeu']) ?>



<?php $this->start('header_content') ?>	
	<p>Faites un voeu</p>
<?php $this->stop('header_content') ?>


<?php $this->start('nav_content') ?>
	
<?php $this->stop('nav_content') ?>

<?php $this->start('main_content') ?>	
<div class="row center-block">
<div class="carousel slide col-xs-12 col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-4" data-ride="carousel">
  <!-- Indicators -->


  <!-- Wrapper for slides --><div class="row">
  <div class="carousel-inner" role="listbox">
    <div class="item active ">
      <img src="<?= $this->assetUrl('images/slide1.jpeg'); ?>" class="img-responsive center-block" alt="Chania">
      <div class="carousel-caption">
        ..
      </div>
    </div>
    <div class="item">
      <img src="<?= $this->assetUrl('images/slide2.jpeg'); ?>" class="img-responsive center-block" alt="Chania">
    </div>
    ...
  </div>
<div class="row">

</div>



















	<!-- <div class="row">
		<div id="myCarousel" class=" container carousel slide col-xs-12 col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-4" data-ride="carousel">
		  
		 <ol class="carousel-indicators">
		    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		    <li data-target="#myCarousel" data-slide-to="1"></li>
		    <li data-target="#myCarousel" data-slide-to="2"></li>
		    <li data-target="#myCarousel" data-slide-to="3"></li>
		  </ol>

	
		  <div class="carousel-inner" role="listbox">
		    <div class="item active">
		      <img src="<?= $this->assetUrl('images/slide1.jpeg'); ?>" class="img-responsive" alt="Chania">	
		    </div>

		    <div class="item">
		      <img src="<?= $this->assetUrl('images/slide2.jpeg'); ?>" class="img-responsive" alt="Chania">	
		    </div>

		    <div class="item">
		      <img src="<?= $this->assetUrl('images/slide3.jpeg'); ?>" class="img-responsive" alt="Chania">	
		    </div>

		  </div>

	Left and right controls
		  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
	</div> -->
	<div class="row">




	</div>
<?php $this->stop('main_content') ?>


<?php $this->start('main_footer') ?>	

<?php $this->stop('main_footer') ?>
