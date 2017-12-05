<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <meta name="keywords" content="autem, solutions, autem solutions, consultoria, marketing, vendas, empreendedorismo">
  <meta name="description" content="Nós somos a Autem Solutions. O nosso objetivo é sempre viabilizar um contexto favorável para que o seu sonho se realize.">
  <meta name="google-site-verification" content="ajMSUi6wddq-vPzXnC9nLI_d8CdLmUwdkzRAO4LSoBw" />
  <title>
    <?php if ( is_category() ) {
      echo 'Categoria de &quot;'; single_cat_title(); echo '&quot; | '; bloginfo( 'name' );
    } elseif ( is_tag() ) {
      echo 'Arquivo de &quot;'; single_tag_title(); echo '&quot; | '; bloginfo( 'name' );
    } elseif ( is_archive() ) {
      wp_title(''); echo ' Arquivo | '; bloginfo( 'name' );
    } elseif ( is_search() ) {
      echo 'Buscar por &quot;'.wp_specialchars($s).'&quot; | '; bloginfo( 'name' );
    } elseif ( is_home() || is_front_page() ) {
      bloginfo( 'name' ); echo ' | '; bloginfo( 'description' );
    }  elseif ( is_404() ) {
      echo 'Erro 404 - Não Encontrado | '; bloginfo( 'name' );
    } elseif ( is_single() ) {
      wp_title('');
    } else {
      echo wp_title( ' | ', false, right ); bloginfo( 'name' );
    } ?>
  </title>
  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="<?php bloginfo('template_url') ?>/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?php bloginfo('template_url') ?>/animations.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?php bloginfo('template_url') ?>/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?php bloginfo('template_url') ?>/font/Mangerica-Regular/fonts.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?php bloginfo('template_url') ?>/font/Mangerica-Thin/fonts.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <?php wp_head(); ?>
</head>

<style type="text/css">
  
.card {
  background-color: transparent;
}

</style>

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
<div class="scrollspy hide-on-large-only" id="home">
  <nav class="autem z-depth-0">
    <div class="nav-wrapper container row">
      <div class="col s12">
        <a href="/" class="brand-logo center mobile-logo"><img src="<?php bloginfo('template_url') ?>/img/logo_mobile.png" /></a>
        <main class="right hide-on-large-only">
            <a class="white-text toggle-overlay"><i class="small material-icons">menu</i></a>
        </main>
      </div>
      <ul>
        <!-- Mobile Menu -->
        <aside>
            <div class="outer-close toggle-overlay">
                <a class="white-text right close"><i class="margin-clear small material-icons">clear</i></a>
            </div>
            <nav class="mobile-menu">
                <?php wp_nav_menu( array( 'theme_location' => 'new-menu' ) ); ?>
            </nav>
        </aside>
      </ul>
    </div>
  </nav>
</div>