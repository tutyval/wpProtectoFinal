<!DOCTYPE html>
  <html <?php language_attributes(); ?>>
    <head>
      <meta charset="<?php bloginfo('charset') ?>">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title><?php bloginfo('name'); ?></title>
      <?php wp_head() ?>
    </head>
  <body>
    <nav class="navbar navbar-expand-lg"><!-- barra-->
      <a class="navbar-light-brand" href="#">
        <img src="<?php echo get_theme_file_uri('/assets/imagen/logo-trans.png'); ?>" alt="foto portafolio">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <!-- inicio botones barra-->
        <ul class="nav justify-content-end">
          <li class="nav-item">
            <a class="nav-link text-light" href="<?php echo get_home_url();?>">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="/arte-callejero">Arte Callejero</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="/pagina-arquitectura">Arquitectura</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="/pagina-gastronomia">Gastronomia</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="/contacto">Contacto</a>
          </li>
        </ul><!--cierre botones barra-->
      </nav><!--cierre barra-->



