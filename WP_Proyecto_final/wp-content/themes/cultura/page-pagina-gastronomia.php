<?php get_header() ?>
	<div class="jumbotron jumbotron-fluid">
		<div class="container">
			<h1 class="display-4">Gastronomia</h1>
			<p class="lead">Sabores Quilicuranos</p>
		</div>
	</div>
	<div class="container">
		<div class="row">
			    <?php
      $arg = array(
        'post_type'       => 'Gastronomia',
        'posts_per_page'  => -1
      );

      $get_arg = new WP_Query( $arg );

      while ( $get_arg->have_posts() ) {
        $get_arg->the_post();
      ?>
			<div class="col-sm .col-md-6">
				<div class="card" style="width: 18rem;">
					<div class="card-body">
						<h5 class="card-title"><?php the_title(); ?> </h5>
						<?php the_post_thumbnail('post', array('class' => 'card-img-top')); ?>
						<p class="card-text"><?php the_excerpt(); ?></p>				
					</div>
				</div>
			</div>
			    <?php } wp_reset_postdata();
                ?>
		</div>
	</div><!--cierre container-->
 <?php get_footer() ?>