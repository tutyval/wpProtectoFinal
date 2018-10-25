<?php get_header() ?>
<br><br>
	<div class="container">
		<div class="row">
			<?php
          $arg = array(
            'post_type'       => 'Arquitectura-post',
            'posts_per_page'  => -1
      );

          $get_arg = new WP_Query( $arg );

          while ( $get_arg->have_posts() ) {
          $get_arg->the_post();
      ?>
			<div class="col-6">
				<?php the_post_thumbnail('articulo', array('class' => 'card-img-top')); ?>
			</div>
			<div class="col-6">
				<h1><?php the_title(); ?></h1>
				<p><?php the_excerpt(); ?> </p>				
			</div>
			 <?php } wp_reset_postdata();?>
		</div>
	</div>
			
 <?php get_footer() ?>