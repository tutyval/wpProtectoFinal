
<?php get_header() ?>

	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"><!--inicio carrusel-->
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img class="d-block w-100" src="<?php echo get_theme_file_uri('/assets/imagen/mural.jpg'); ?>" alt="First slide">
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="<?php echo get_theme_file_uri('/assets/imagen/mural-1.jpg'); ?>" alt="Second slide">
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="<?php echo get_theme_file_uri('/assets/imagen/mural-2.jpg'); ?>" alt="Third slide">
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
	</div><!--cierre carrusel-->

	<div class="container"><!--inicio grillas-->
		<div class="row">
		      <?php
		          $arg = array(
		            'post_type'       => 'arte',
		            'posts_per_page'  => 3
		      );

		          $get_arg = new WP_Query( $arg );

		          while ( $get_arg->have_posts() ) {
		          $get_arg->the_post();
		      ?>
			<div class="col-sm">
				<div class="card" style="width: 18rem;">
					 <?php the_post_thumbnail('post', array('class' => 'card-img-top')); ?>			
					<div class="card-body">
						<h5 class="card-title"><?php the_title(); ?></h5>
						<p class="card-text"><?php the_excerpt(); ?></p>
						<a href="<?php the_permalink() ?>" class="btn btn-primary">Leer Más</a>
					</div>
				</div>
			</div>	
				<?php } wp_reset_postdata();
				?>		
		</div>
	</div><!--cierre grillas-->
 <?php get_footer() ?>