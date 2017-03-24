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
      <?php do_action('slideshow_deploy', '31'); ?>
    </ul>
  </div>
</div>
<!-- QUEM SOMOS -->
<div class="container">
  <div class="section">
    <div class="row">
      <div class="col s12">
        <h1 class="autem-text center titulo scrollspy" id="autem">Autem</h1>
      </div>
      <div class="col s12">
        <h3 class="titulo autem-text">Venha com a gente nessa cauda de cometa.</h3>
        <div style="inline-block">
          <div class="bloco-azul-left"></div>
          Somos uma fábrica de foguetes. Sim, somos esse foguetinho aí que você está vendo em nossa identidade e colaboraremos para a sua empresa ser um também – ao infinito e além!
          <br><br>
          A Autem é o resultado do nosso sonho, então sinta-se à vontade para compartilhar o seu conosco, queremos conhecer as suas aspirações, de verdade.
          <br><br>
          Por aqui trabalhamos de forma horizontal, sem barreiras entre as pessoas – e não somente entre os profissionais da Autem, mas principalmente entre nós e você. Estamos juntos nessa, não há motivo para hierarquizarmos nada, pelo contrário.
          <br><br>
          <div class="bloco-azul-right"></div>
          Trabalhamos com inovação e temos certeza de que ela nos permite evoluir – e em todos os sentidos: se a humanidade chegou até aqui, com certeza é porque algumas pessoas, individualmente ou em grupo, inovaram, mas não existe inovação sem pesquisa e referências, e nós sabemos muito bem disso. Inovamos sempre a partir de uma base sólida.
          <br><br>
          Acreditamos que o nosso trabalho é o melhor do mundo, definitivamente amamos o que fazemos! E isso indica o seguinte: pensaremos e executaremos nossos planejamentos para a sua empresa com aquela vontade que só quem ama o que faz é capaz de sentir.
          <br><br>
          O nosso objetivo é sempre viabilizar um contexto favorável para que o seu sonho se realize. Nós criamos realidade a partir daquilo que você sonha.
        </div>
        <br><br>
      </div>
    </div>
  </div>
</div>
<div class="divider"></div>
<!-- EQUIPE -->
<div class="container">
  <div class="section">
    <div class="row">
      <div class="col s12">
        <h1 class="center titulo scrollspy autem-text" id="tripulacao">Tripulação</h1>
      </div>
      <div class="tripulacao">
        <div class="col s12 l4 center">
          <img src="<?php bloginfo('template_url') ?>/img/1-anna.png">
          <h3 class="strong">Anna<br>Desbravadora intergaláctica</h3>
          <p>A Anna é formada em Comunicação Institucional pela UTFPR e pós-graduada em Comportamentos de Consumo. Com experiência anterior em agências de publicidade e assessorias de imprensa, por aqui ela é a responsável por passear pela infinidade do universo e trazer até nós todas as informações necessárias para subsidiar o nosso trabalho e, consequentemente, o seu sucesso. Inovamos a partir de muita pesquisa.</p>
        </div>
        <div class="col s12 l4 center">
          <img src="<?php bloginfo('template_url') ?>/img/2-danielle.png">
          <h3 class="strong">Danielle<br>Sentinela sideral</h3>
          <p>Administradora com experiência em Planejamento, a Danielle organiza tudo o que a sua nave utilizará durante a jornada no espaço que iniciaremos juntos, mas sempre na velocidade da luz. Ela também utiliza seu histórico em Consultorias e Auditorias para manter o cronograma das estratégias em dia, porque a decolagem, o vôo e a aterrissagem da sua nave devem ser perfeitos. Pós-graduada em Comportamentos de Consumo, a nossa sentinela  ainda articula o fluxo de informações e ações para garantir que você chegue ao destino combinado no menor tempo possível.</p>
        </div>
        <div class="col s12 l4 center">
          <img src="<?php bloginfo('template_url') ?>/img/3-davi.png">
          <h3 class="strong">Davi<br>Navegador espacial</h3>
          <p>O Davi identifica espacial e temporalmente as rotas e territórios mais inóspitos, a fim de encontrar neles a área perfeita para a sua nave aterrissar ou até mesmo para evitar uma colisão com meteoros vagantes. Com 14 anos de experiência na área comercial e criação de departamentos comerciais, ele é formado em Economia pela Universidade Federal do Paraná e Gestão Comercial pela FAE Business School (Curitiba/PR), além de ter em sua mochila de suprimentos espaciais, treinamentos em metodologia de vendas pela Mercury International e outras instituições.</p>
        </div>
        <div class="col s12 m12 l8 offset-l2 margin-top">
          <div class="col s12 l6 center">
            <img src="<?php bloginfo('template_url') ?>/img/4-igor.png">
            <h3 class="strong">Igor<br>Mensageiro interplanetário</h3>
            <p>Redator publicitário há seis anos, Igor é graduado em Comunicação Organizacional pela UTFPR e especialista em Construção de Imagem. Desde 2008 realiza a assessoria de imprensa do maior evento de rua de Curitiba, é colunista do site Curitiba Cult, professor de escrita criativa e produção de conteúdo, e não descansa enquanto o maior número de pessoas possível não fica sabendo que a sua empresa existe.</p>
          </div>
          <div class="col s12 l6 center">
            <img src="<?php bloginfo('template_url') ?>/img/5-rafaela.png">
            <h3 class="strong">Rafaela<br>Caçadora de cometas</h3>
            <p>A Rafaela viaja pelo universo em busca do buzz que somente os cometas mais brilhantes são capazes de causar. Entusiasta de novas ideias, encontra na união da sua formação em Marketing com seu repertório em Tendências de Mercado e Inovação, o mix perfeito para movimentar projetos inovadores, criativos e também para agitar o seu público quando ele está muito parado. Por aqui a Rafa ainda utiliza suas referências estéticas – resultados de seus estudos em História da Arte e experiência com construção de presença digital – para garantir que o seu sonho seja representado imageticamente como ele merece.</p>
          </div>
        </div>
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
          <h3 class="modaltitulo center">Protocolo de decolagem.</h3>
        </div>
        <div class="diferenciais">
          <div class="col s12 m3 center">
            <img src="<?php bloginfo('template_url') ?>/img/feature1.png">
            <h3 class="strong">Idealizamos com dados empíricos</h3>
            <p>Nada por aqui é feito sem certezas. Não trabalhamos com achismos na Autem. Então, antes de começar qualquer trabalho, pesquisaremos muito e recolheremos o maior número de informações possíveis sobre a sua empresa, o seu segmento, o cenário no qual a sua marca está inserida e outras inúmeras variáveis que possam implicar em alguma interferência para o seu negócio, sejam elas positivas ou negativas.</p>
          </div>
          <div class="col s12 m3 center">
            <img src="<?php bloginfo('template_url') ?>/img/feature2.png">
            <h3 class="strong">Planejamos com inovação</h3>
            <p>Não ficamos sem rumo. Antes de caminharmos, sempre saberemos qual trajeto seguir e, principalmente, onde queremos chegar. Estratégia é fundamental para não se perder, evitar gastos desnecessários e, claro, gerar resultados tangíveis. No entanto, acreditamos que uma viagem pode sempre ser inovadora, basta que encontremos as oportunidades certas.</p>
          </div>
          <div class="col s12 m3 center">
            <img src="<?php bloginfo('template_url') ?>/img/feature3.png">
            <h3 class="strong">Executamos com responsabilidade</h3>
            <p>A maioria das consultorias do mercado apenas analisam o seu contexto, oferecem soluções – muitas vezes boas, de verdade -, mas não a executam, deixando o trabalho todo para a sua equipe. Então, deixe a execução conosco. Estamos aqui pra isso.</p>
          </div>
          <div class="col s12 m3 center">
            <img src="<?php bloginfo('template_url') ?>/img/feature4.png">
            <h3 class="strong">Avaliamos com transparência</h3>
            <p>Somos muito autocríticos, o que significa dizer que jamais deixaremos de avaliar o nosso próprio trabalho para sabermos se realmente estamos entregando o melhor resultado, ou seja, sempre após finalizarmos uma execução, avaliaremos os resultados para apresentarmos à sua empresa, só assim saberemos se devemos mudar de rota ou não. O mercado não é estático, então a sua estratégica precisa ser dinâmica.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- SERVICOS -->
<!-- <div class="autem-text">
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
            <img src="<?php // bloginfo('template_url') ?>/img/feature1.png">
            <h3 class="strong">Decolagem de foguetes</h3>
            <p class="grey-text">Lançamentos contábeis, balanço patrimonial, demonstrações de resultados e SPED contábil.</p>
          </div>
          <div class="col s12 m3 center">
            <img src="<?php // bloginfo('template_url') ?>/img/feature2.png">
            <h3 class="strong">Treinamento de Tinder</h3>
            <p class="grey-text">Planejamento triburário, escrituração e livros fiscais, apuração e controle de taxas e tributos, atendimento de obrigações acessórias e parcelamento de tributos.</p>
          </div>
          <div class="col s12 m3 center">
            <img src="<?php // bloginfo('template_url') ?>/img/feature3.png">
            <h3 class="strong">Consigliere de mafiosos</h3>
            <p class="grey-text">Admissões e rescisões, férias e 13º, pró-labore, impostos previdenciários e orientação e adequação das Normas Trabalhistas (PPRA, PCMSO, PPP).</p>
          </div>
          <div class="col s12 m3 center">
            <img src="<?php // bloginfo('template_url') ?>/img/feature4.png"></a>
            <h3 class="strong">YouTuber amador</h3>
            <p class="grey-text">Abertura e encerramento de empresas, mudança societária, planejamento estratégico, acessoria empresarial e serviços para pessoas físicas e autônomos.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> -->

<?php get_footer(); ?>