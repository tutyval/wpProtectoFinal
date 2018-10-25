<?php get_header() ?>
      <!--carrusel-->
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-90" <img src="<?php echo get_theme_file_uri('/assets/imagen/copa.jpg'); ?>" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-99" src="<?php echo get_theme_file_uri('/assets/imagen/muni1.jpg'); ?>" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-90" src="<?php echo get_theme_file_uri('/assets/imagen/musica.jpg'); ?>" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div><!-- cierre carrusel-->
  
  <!-- comienzo grillas-->
  <div class="container">
    <div class="row">
      <?php
          $arg = array(
            'post_type'       => 'Home',
            'posts_per_page'  => 3
      );

          $get_arg = new WP_Query( $arg );

          while ( $get_arg->have_posts() ) {
          $get_arg->the_post();
      ?>

       <div class="card col-12 col-md-4" style="width: 18rem;">
         <?php the_post_thumbnail('post', array('class' => 'card-img-top')); ?>          
          <div class="card-body">
            <h5 class="card-title"><?php the_title(); ?></h5>
            <p class="card-text"><?php the_excerpt(); ?></p>
            <a href="<?php the_permalink() ?>" class="btn btn-primary">leer mas</a>
          </div>
        </div>
        <?php } wp_reset_postdata();
    ?>
      </div>
  </div><!--fin grillas-->
<!--galeria de fotos-->

 <ul class="galeria">
  <li class="galeria__item"><img src="<?php echo get_theme_file_uri('/assets/imagen/muni-1.png'); ?>" alt="foto portafolio"class="galeria__img"></li>
  <li class="galeria__item"><img src="<?php echo get_theme_file_uri('/assets/imagen/muni-5.png'); ?>" alt="foto portafolio"class="galeria__img"></li>
  <li class="galeria__item"><img src="<?php echo get_theme_file_uri('/assets/imagen/muni-6.png'); ?>" alt="foto portafolio"class="galeria__img"></li>
  <li class="galeria__item"><img src="<?php echo get_theme_file_uri('/assets/imagen/muni-4.png'); ?>" alt="foto portafolio"class="galeria__img"></li>
  <li class="galeria__item"><img src="<?php echo get_theme_file_uri('/assets/imagen/muni-2.png'); ?>" alt="foto portafolio"class="galeria__img"></li>
  <li class="galeria__item"><img src="<?php echo get_theme_file_uri('/assets/imagen/muni-3.png'); ?>" alt="foto portafolio"class="galeria__img"></li>
  <li class="galeria__item"><img src="<?php echo get_theme_file_uri('/assets/imagen/muni-7.png'); ?>" alt="foto portafolio"class="galeria__img"></li>
  <li class="galeria__item"><img src="<?php echo get_theme_file_uri('/assets/imagen/municipalidad-quilicura-noche.jpg'); ?>" alt="foto portafolio"class="galeria__img"></li>
 </ul> <!--fin galeria--> 
 <?php get_footer() ?>