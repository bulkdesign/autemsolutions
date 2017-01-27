<?php
/**
 * The main template file
 *
 * @package WordPress
 * @subpackage Archwork
 */

get_header(); ?>

<!-- BANNER -->
<div class="hide-on-small-only" id="home">
  <div class="slider">
    <ul class="slides">
      <li><img src="<?php bloginfo('template_url') ?>/img/banner1.jpg" /></li>
      <li><img src="<?php bloginfo('template_url') ?>/img/banner2.jpg" /></li>
      <li><img src="<?php bloginfo('template_url') ?>/img/banner3.jpg" /></li>
      <li><img src="<?php bloginfo('template_url') ?>/img/banner4.jpg" /></li>
    </ul>
  </div>
</div>
<!-- QUEM SOMOS -->
<div class="container hide-on-small-only">
  <div class="section">
    <div class="row">
      <div class="col s12 hide-on-small-only">
        <h1 class="autem-text center titulo scrollspy" id="quemsomos">Quem somos</h1>
      </div>
      <div class="col s12 m9">
        <h3 class="titulo autem-text">Venha com a gente nessa cauda de cometa.</h3>
        <p>
          Somos uma fábrica de foguetes. Sim, somos esse foguetinho aí que você está vendo em nossa identidade e colaboraremos para a sua empresa ser um também – ao infinito e além!<br><br>
          A Autem é o resultado do nosso sonho, e justamente por acreditarmos que sonhos podem sair do universo das ideias para se materializarem é que trabalhamos para tornar tangível o sonho de outras pessoas. Sinta-se à vontade para compartilhar o seu conosco, queremos conhecer as suas aspirações, de verdade.<br>
          <br>
          Acreditamos que o nosso trabalho é o melhor do mundo – definitivamente amamos o que fazemos -, então trabalhar é um prazer para nós, o que indica o seguinte: pensaremos e executaremos nossos planejamentos para a sua empresa com aquela vontade que só quem ama o que faz é capaz de sentir.<br><br>
          O nosso objetivo é sempre viabilizar um contexto favorável para que o seu sonho se realize. Nós criamos realidade a partir daquilo que você sente.
        </p>
        <br><br>
      </div>
      <div class="col m3 hide-on-small-only center icone-quemsomos">
        <img src="<?php bloginfo('template_url') ?>/img/megaphone.png" />
      </div>
    </div>
  </div>
</div>
<div class="divider"></div>
<!-- DIFERENCIAIS -->
<div class="autem white-text">
  <div class="container">
    <div class="section">
      <div class="row">
        <div class="col s12">
          <h1 class="center titulo scrollspy" id="diferenciais">Diferenciais</h1>
        </div>
        <div class="col s12">
          <h3 class="modaltitulo center">Também conhecida como decoladora de empresas.</h3>
          <p>Não sei como você está pensando em fazer, mas nesta parte dá pra colocar as features da Autem Solutions. Como seu rascunho não tinha exatamente como seria esta parte, estou deixando em forma de colunas mesmo.</p>
        </div>
        <div class="diferenciais">
          <div class="col s12 m3 center">
            <img src="<?php bloginfo('template_url') ?>/img/feature1.png">
            <h3 class="strong">Fazemos isso</h3>
            <p>O Davi roubou o chocolate do próprio sobrinho.</p>
          </div>
          <div class="col s12 m3 center">
            <img src="<?php bloginfo('template_url') ?>/img/feature2.png">
            <h3 class="strong">E isso</h3>
            <p>Depois veio dizer que sou cúmplice.</p>
          </div>
          <div class="col s12 m3 center">
            <img src="<?php bloginfo('template_url') ?>/img/feature3.png">
            <h3 class="strong">Mais isso aqui</h3>
            <p>Eu não gostaria de ter um tio assim...</p>
          </div>
          <div class="col s12 m3 center">
            <img src="<?php bloginfo('template_url') ?>/img/feature4.png">
            <h3 class="strong">E também isso</h3>
            <p>Além de roubar o sobrinho ainda por cima quer botar a culpa no amigo.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- SERVICOS -->
<div class="autem-text">
  <div class="container">
    <div class="section">
      <div class="row">
        <div class="col s12">
          <h1 class="titulo center scrollspy autem-text" id="servicos">Serviços</h1>
        </div>
        <div class="col s12">
          <p class="grey-text">Bom, não chegamos a conversar a respeito desta parte do site. De qualquer forma teremos que mexer nela quando você enviar os textos e etc.
        <br><br></p>
        </div>
        <div class="servicos">
          <div class="col s12 m3 center">
            <img src="<?php bloginfo('template_url') ?>/img/feature1.png">
            <h3 class="strong">Decolagem de foguetes</h3>
            <p class="grey-text">Lançamentos contábeis, balanço patrimonial, demonstrações de resultados e SPED contábil.</p>
          </div>
          <div class="col s12 m3 center">
            <img src="<?php bloginfo('template_url') ?>/img/feature2.png">
            <h3 class="strong">Treinamento de Tinder</h3>
            <p class="grey-text">Planejamento triburário, escrituração e livros fiscais, apuração e controle de taxas e tributos, atendimento de obrigações acessórias e parcelamento de tributos.</p>
          </div>
          <div class="col s12 m3 center">
            <img src="<?php bloginfo('template_url') ?>/img/feature3.png">
            <h3 class="strong">Consigliere de mafiosos</h3>
            <p class="grey-text">Admissões e rescisões, férias e 13º, pró-labore, impostos previdenciários e orientação e adequação das Normas Trabalhistas (PPRA, PCMSO, PPP).</p>
          </div>
          <div class="col s12 m3 center">
            <img src="<?php bloginfo('template_url') ?>/img/feature4.png"></a>
            <h3 class="strong">YouTuber amador</h3>
            <p class="grey-text">Abertura e encerramento de empresas, mudança societária, planejamento estratégico, acessoria empresarial e serviços para pessoas físicas e autônomos.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>