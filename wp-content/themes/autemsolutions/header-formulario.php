<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <meta name="keywords" content="autem, solutions, autem solutions, consultoria, marketing, vendas, empreendedorismo">
  <meta name="description" content="Nós somos a Autem Solutions. O nosso objetivo é sempre viabilizar um contexto favorável para que o seu sonho se realize.">
  <meta name="google-site-verification" content="ajMSUi6wddq-vPzXnC9nLI_d8CdLmUwdkzRAO4LSoBw" />
  <title>Autem Solutions</title>
  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="<?php bloginfo('template_url') ?>/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?php bloginfo('template_url') ?>/animations.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?php bloginfo('template_url') ?>/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?php bloginfo('template_url') ?>/formulario.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?php bloginfo('template_url') ?>/font/Mangerica-Regular/fonts.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?php bloginfo('template_url') ?>/font/Mangerica-Thin/fonts.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <?php wp_head(); ?>
</head>
<body class="tips">
<!-- HEADER -->
<div class="fullwidth">
  <h1 class="white-text header">Marketing to boost your dreams</h1>
  <img src="<?php bloginfo('template_url'); ?>/img/header.png" />
</div>
<!-- NAVBAR -->
<div class="scrollspy hide-on-med-and-down" id="home">
  <nav class="autem z-depth-0">
    <div class="nav-wrapper container row">
      <div class="col s12 m2">
        <a href="/" class="brand-logo hide-on-med-and-down">
          <img class="center" src="<?php bloginfo('template_url') ?>/img/logo_autem.png" />
        </a>
      </div>
      <div class="col m10">
        <ul class="right hide-on-med-and-down">
          <?php wp_nav_menu( array( 'theme_location' => 'new-menu' ) ); ?>
        </ul>
      </div>
    </div>
  </nav>
</div>
<!-- NAVBAR MOBILE -->
<div class="navbar-fixed scrollspy hide-on-large-only" id="home">
  <nav class="autem z-depth-0">
    <div class="nav-wrapper container row">
      <div class="col s12">
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <a href="/" class="brand-logo center mobile-logo"><img src="<?php bloginfo('template_url') ?>/img/logo_mobile.png" /></a>
      </div>
      <ul class="side-nav" id="mobile-demo">
        <?php wp_nav_menu( array( 'theme_location' => 'new-menu' ) ); ?>
      </ul>
    </div>
  </nav>
</div>