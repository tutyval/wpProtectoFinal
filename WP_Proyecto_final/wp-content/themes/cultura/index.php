<!-- Archivo de cabecera global de Wordpress -->
<?php get_header(); ?>
<!-- Contenido de página de inicio -->

  <section>
    <h1><?php the_title(); ?></h1>
    <?php the_content(); ?>
  </section>
<!-- Archivo de pié global de Wordpress -->
<?php get_footer(); ?>