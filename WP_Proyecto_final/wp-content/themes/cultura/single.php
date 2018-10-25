<?php get_header() ?>

	<?php the_post(); ?>
		<div class="container">
			<?php the_post_thumbnail('post', array('class' => 'img-fluid')); ?>
			<h2><?php the_title() ?></h2>
			<p><?php the_content() ?></p>
		</div>
<?php get_footer() ?>