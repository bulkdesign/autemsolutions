<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <title>Autem Solutions</title>
  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="<?php bloginfo('template_url') ?>/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?php bloginfo('template_url') ?>/font/Mangerica-Regular/styles.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <?php wp_head(); ?>
</head>
<body>
<!-- NAVBAR -->
<div class="navbar-fixed scrollspy hide-on-small-only" id="home">
  <nav class="white-transparent z-depth-0" role="navigation">
    <div class="nav-wrapper container">
      <ul class="hide-on-med-and-down">
        <?php wp_nav_menu( array( 'theme_location' => 'new-menu' ) ); ?>
      </ul>
    </div>
  </nav>
</div>
<!-- MENU MOBILE -->
<div class="navbar-fixed scrollspy" id="home">
  <nav class="autem z-depth-0 hide-on-med-and-up" role="navigation">
    <div class="nav-wrapper container">
      <ul id="nav-mobile" class="side-nav">
        <?php wp_nav_menu( array( 'theme_location' => 'new-menu' ) ); ?>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
      <div class="container">
        <div class="col s12 right">
          <a id="logo-container" href="/" class="brand-logo hide-on-med-and-up"><img src="<?php bloginfo('template_url') ?>/img/logo_mobile.png" /></a>
        </div>
      </div>
    </div>
  </nav>
</div>
<!-- LOGO -->
<div class="container">
  <div class="col s12 center">
    <a id="logo-container" href="/" class="brand-logo hide-on-small-only"><img src="<?php bloginfo('template_url') ?>/img/logo_small.png" /></a>
  </div>
</div>