<?php
/**
 * The main template file
 *
 * @package WordPress
 * @subpackage Archwork
 */

get_header(); ?>

<!-- AUTEM -->
<div class="autem-text">
  <div class="container">
    <div class="section" style="padding-top:0;padding-bottom:0;">
      <div class="row" style="margin-bottom:0;">
        <div class="col s12">
          <div class="col l6 hide-on-med-and-down">
            <div class="astronauta"></div>
          </div>
          <div class="col l6 s12 margin-bottom">
            <h1 class="black-text right-align padding-top">NÓS ACREDITAMOS NOS SEUS SONHOS</h1>
            <p class="black-text justify">Nossa missão é ajudar pessoas e empreendimentos a tornarem seus objetivos sustentáveis e, com isso, impactar diretamente na economia e na vida das pessoas, fazendo com que cada vez mais empresas e profissionais tenham oportunidade de crescer.</p>
            <h1 class="black-text right-align padding-top">E NO PODER DA CONEXÃO</h1>
            <p class="black-text justify">Nos propomos a conectar pessoas e empresas, ofertas e demandas, oportunidades e realizações. Para que isso seja possível, procuramos estudar cuidadosamente ambas as partes e então aplicar as técnicas e ferramentas mais efetivas para promover esse encontro.</p>
          </div>
        </div>
    </div>
  </div>
</div>

<!-- CARROUSEL DO BLOG -->
<div class="carousel carousel-slider center" data-indicators="true">
  <div class="carousel-fixed-item center"> 
    <?php query_posts( 'posts_per_page=5' ); ?>
    <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
  </div>
  <div class="carousel-item white-text" href="#one!" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.65) 0%, rgba(0, 0, 0, 0.65) 100%, rgba(0, 0, 0, 0.65) 100%), url(<?php the_post_thumbnail_url(); ?>);background-repeat: no-repeat;background-size: 100%;background-position-y: 10%;">
      <div class="row">
        <div class="container">
          <h1 class="text-white padding-top" style="font-size:20px">Últimos Artigos do Blog</h1>
          <h3 style="margin-top:80px;"><?php the_title();?></h3>
          <a href="<?php the_permalink();?>" class="btn waves-effect autem white-text" style="z-index: 999999">Ler artigo</a>
        </div>
      </div>
          <?php endwhile; ?>
        <?php endif; ?>
      <?php wp_reset_query(); ?>
  </div>
</div>

<!-- COMO TRABALHAMOS -->
<div class="autem white-text">
  <div class="container">
    <div class="section">
      <div class="row">
        <div class="col s12">
          <h1 class="titulo scrollspy padding-top" id="servicos">COMO TRABALHAMOS</h1>
        </div>
        <div class="col s12">
          <p class="justify">
            Entendemos que para oferecer uma solução eficiente não podemos contar com suposições e com a sorte, por isso baseamos nosso trabalho em pesquisa, conhecimento e experiência para entregarmos valor aos nossos clientes.
            <br><br>
            Um bom planejamento de marketing só é possível se sabemos bem com o que estamos lidando. É necessário conhecer o comportamento dos consumidores, entender o setor e todas as forças que podem interferir nele para poder agir com segurança e assertividade.
            <br><br>
            O diferencial em qualquer caminhada é ter informações e saber como lidar com elas. Conhecimento que não é aplicado não serve de muita coisa, né? Nosso trabalho é pesquisar, entregar esses dados e, a partir deles, indicar as estratégias e soluções. 
            <br><br>
            Nosso foguete transforma dados em ações. Esse é o jeito Autem Solutions de trabalhar: respeitando a confiança depositada por nossos clientes e utilizando metodologias consagradas para garantir a qualidade em todos os serviços prestados. 
          </p>
        </div>

        <div class="col s12 comotrabalhamos">
          <div class="animatedParent" data-sequence="100">
            <h3 class="center animated growIn" data-id="1">Soluções Inteligentes</h3>
          </div>
        </div>
        <div class="col l10 push-l1 s12 padding-bottom30">
          <div class="animatedParent" data-sequence="300">
            <div class="center col l25 s12 animated growIn" data-id="1">
              <img src="<?php bloginfo('template_url'); ?>/img/comotrabalhamos/icone1.png" />
              <p class="center">Pesquisa</p>
            </div>
            <div class="col l25 hide-on-med-and-down animated fadeInUpShort bounceOutDown" data-id="2">
              <img class="padding-top30" src="<?php bloginfo('template_url'); ?>/img/comotrabalhamos/seta.png" />
            </div>
            <div class="center col l25 s12 animated growIn" data-id="3">
              <img src="<?php bloginfo('template_url'); ?>/img/comotrabalhamos/icone2.png" />
              <p class="center">Estratégia</p>
            </div>
            <div class="col l25 hide-on-med-and-down animated fadeInUpShort" data-id="4">
              <img class="padding-top30" src="<?php bloginfo('template_url'); ?>/img/comotrabalhamos/seta.png" />
            </div>
            <div class="center col l25 s12 animated growIn" data-id="5">
              <img src="<?php bloginfo('template_url'); ?>/img/comotrabalhamos/icone3.png" />
              <p class="center">Plano de Comunicação</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="fullwidth hide-on-med-and-down">
  <a href="/?page_id=650" class="white-text header"><h1>Conheça Nossas Soluções<br>Para Decolar a Sua Empresa</h1></a>
  <div style="width: 100%; height: 450px; background: linear-gradient(to bottom, rgba(0, 0, 0, 0.65) 0%, rgba(0, 0, 0, 0.65) 100%, rgba(0, 0, 0, 0.65) 100%), url(<?php bloginfo('template_url'); ?>/img/imagem-final.jpg); background-size: 100% 100%"></div>
</div>
<div class="fullwidth hide-on-large-only">
  <a href="/?page_id=650" class="white-text header"><h1>Conheça Nossas Soluções<br>Para Decolar a Sua Empresa</h1></a>
  <div style="width: 100%; height: 250px; background: linear-gradient(to bottom, rgba(0, 0, 0, 0.65) 0%, rgba(0, 0, 0, 0.65) 100%, rgba(0, 0, 0, 0.65) 100%), url(<?php bloginfo('template_url'); ?>/img/imagem-final.jpg); background-size: 100% 100%"></div>
</div>


<?php get_footer(); ?>