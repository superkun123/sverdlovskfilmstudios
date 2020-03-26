<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SFS
 */

?>

  <!doctype html>
  <html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta property="og:image" content="<?php echo get_template_directory_uri() ?>/img/thumbnail.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/img/favicon.ico" type="image/x-icon">
	  <title>Свердловская киностудия</title>
	
	<?php wp_head(); ?>
  </head>
  <body>




<header class="header-home">
<div class="pos-f-t">
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4">
      <?php wp_nav_menu( array (
               'theme_location' => 'top',
               'container' => false,
               'menu_class' => 'nav'

               
             )); ?>
    </div>
  </div>
  <nav class="navbar navbar-dark bg-dark">
    <li class="nav-item logo">
      <a class="nav-link disabled" href="<?php bloginfo('url') ?>">
        <img src="<?php echo get_template_directory_uri() ?>/img/logo.png" alt="Лого">
      </a>
    </li>
    <div class="right-side-nav">
    <li>
      <a href="#" data-toggle="modal" data-target="#exampleModalCenter9" class="trailer">Сценарий </a>
    </li>
    <li>
      <a href="#" data-toggle="modal" data-target="#exampleModalCenter7" class="trailer">Резюме</a>
    </li>
    <li>
      <a href="#" data-toggle="modal" data-target="#exampleModalCenter8" class="trailer">Услуги</a>
    </li>
    <!-- <li>
      <a href="">прикрепить резюме</a>
    </li>
    <li>
      <a href="">прикрепить письмо по услугам</a>
    </li> -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent"
      aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    </div>
  </nav>
</div>
</header>