<?php $this->layout('layout', ['title' => 'Faites un vœu']) ?>



<?php $this->start('header_content') ?>	
	<p>Faites un v&oelig;u</p>
<?php $this->stop('header_content') ?>


<?php $this->start('nav_content') ?>
	
<?php $this->stop('nav_content') ?>

<?php $this->start('main_content') ?>	
<div class="container">
<div class="carouselvoeux center-block">

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
       
        <!-- Wrapper for carousel items -->
        <div class="carousel-inner">
         <div class="row">

<!-- Carousel indicators -->
        <ol class="carousel-indicators" id="caro">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>  

 	
 </div> 
            <div class="item active">
                <img src="<?= $this->assetUrl('images/slide1.jpeg'); ?>" class="img-responsive center-block" alt="Chania">
            </div>
            <div class="item">
                <img src="<?= $this->assetUrl('images/slide2.jpeg'); ?>" class="img-responsive center-block" alt="Chania">
            </div>
            <div class="item">
                <img src="<?= $this->assetUrl('images/slide3.jpeg'); ?>" class="img-responsive center-block" alt="Chania">
            </div>
             <div class="item">
                <img src="<?= $this->assetUrl('images/slide4.jpeg'); ?>" class="img-responsive center-block" alt="Chania">
            </div>
        </div>
        <!-- Carousel controls -->
        <a class="carousel-control left" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>

</div>
   
   </div>   
  

<?php $this->stop('main_content') ?>


<?php $this->start('main_footer') ?>	

<?php $this->stop('main_footer') ?>
