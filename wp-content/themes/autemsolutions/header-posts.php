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
  <link href="<?php bloginfo('template_url') ?>/font/Mangerica-Regular/fonts.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <?php wp_head(); ?>
</head>
<body>
<!-- NAVBAR -->
<div class="navbar-fixed scrollspy hide-on-med-and-down" id="home">
  <nav class="autem">
    <div class="nav-wrapper container row">
      <div class="col s12 m2">
        <a href="/" class="brand-logo hide-on-med-and-down">
          <img class="center" src="<?php bloginfo('template_url') ?>/img/logo_autem.png" />
        </a>
      </div>
      <div class="col m10">
        <ul class="white-transparent right hide-on-med-and-down">
          <li><a href="http://www.autemsolutions.com.br">Home</a></li>
          <li><a href="http://www.autemsolutions.com.br/#autem">Autem</a></li>
          <li><a href="http://www.autemsolutions.com.br/#tripulacao">Tripulação</a></li>
          <li><a href="http://www.autemsolutions.com.br/#diferenciais">Diferenciais</a></li>
          <li><a href="http://www.autemsolutions.com.br/#servicos">Serviços</a></li>
          <li><a href="#">Vídeos</a></li>
          <li><a href="http://www.autemsolutions.com.br/#contato">Contato</a></li>
          <li><a href="http://www.autemsolutions.com.br/prestadores-servico">Parceiros</a></li>
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
        <li><a href="http://www.autemsolutions.com.br">Home</a></li>
        <li><a href="http://www.autemsolutions.com.br/#autem">Autem</a></li>
        <li><a href="http://www.autemsolutions.com.br/#tripulacao">Tripulação</a></li>
        <li><a href="http://www.autemsolutions.com.br/#diferenciais">Diferenciais</a></li>
        <li><a href="http://www.autemsolutions.com.br/#servicos">Serviços</a></li>
        <li><a href="#">Vídeos</a></li>
        <li><a href="http://www.autemsolutions.com.br/#contato">Contato</a></li>
        <li><a href="http://www.autemsolutions.com.br/prestadores-servico">Parceiros</a></li>
      </ul>
    </div>
  </nav>
</div>