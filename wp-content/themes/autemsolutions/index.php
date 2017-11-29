<?php
/**
 * The main template file
 *
 * @package WordPress
 * @subpackage Archwork
 */

get_header(); ?>

<!-- BANNER -->
<div class="container">
  <div class="hide-on-small-only" id="home">
    <div class="slider">
      <ul class="slides">
        <?php do_action('slideshow_deploy', '31'); ?>
      </ul>
    </div>
  </div>
</div>
<!-- AUTEM -->
<div class="autem-text">
  <div class="container">
    <div class="section">
      <div class="row">
        <div class="col s12">
          <h1 class="autem-text center titulo scrollspy" id="autem">Autem</h1>
        </div>
        <div class="col s12">
          <h3 class="modaltitulo center">Venha com a gente nessa cauda de cometa.</h3>
        </div>
        <div class="tripulacao">
          <div class="col s12">
            <div class="col s12 l6">
              <div class="bloco-azul-left">
                <p class="justify white-text">Somos uma fábrica de foguetes. Sim, somos esse foguetinho aí que você está vendo em nossa identidade e colaboraremos para a sua empresa ser um também – ao infinito e além!</p>
              </div>
            </div>
            <div class="col s12 l6 right">
              <div class="bloco-azul-right invisible">
                <p class="justify">A Autem é o resultado do nosso sonho, então sinta-se à vontade para compartilhar o seu conosco, queremos conhecer as suas aspirações, de verdade.</p>
              </div>
            </div>
          </div>
          <div class="divider"></div>
          <div class="col s12">
            <div class="col s12 l3 left">
              <div class="bloco-azul-left invisible">
                <p class="justify">Por aqui trabalhamos de forma horizontal, sem barreiras entre as pessoas – e não somente entre os profissionais da Autem, mas principalmente entre nós e você. Estamos juntos nessa, não há motivo para hierarquizarmos nada, pelo contrário.</p>
              </div>
            </div>
            <div class="col s12 l9 right">
              <div class="bloco-azul-right-custom">
                <p class="justify white-text">Trabalhamos com inovação e temos certeza de que ela nos permite evoluir – e em todos os sentidos: se a humanidade chegou até aqui, com certeza é porque algumas pessoas, individualmente ou em grupo, inovaram, mas não existe inovação sem pesquisa e referências, e nós sabemos muito bem disso. Inovamos sempre a partir de uma base sólida.</p>
              </div>
            </div>
          </div>
          <div class="divider"></div>
          <div class="col s12">
            <div class="col s12 l8 left">
              <div class="bloco-azul-left">
                <p class="justify white-text">Acreditamos que o nosso trabalho é o melhor do mundo, definitivamente amamos o que fazemos! E isso indica o seguinte: pensaremos e executaremos nossos planejamentos para a sua empresa com aquela vontade que só quem ama o que faz é capaz de sentir.</p>
              </div>
            </div>
            <div class="col s12 l4 right">
              <div class="bloco-azul-right invisible">
                <p class="justify">O nosso objetivo é sempre viabilizar um contexto favorável para que o seu sonho se realize. Nós criamos realidade a partir daquilo que você sonha.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="divider"></div>
<!-- TRIPULACAO -->
<!-- <div class="container">
  <div class="section">
    <div class="row">
      <div class="col s12">
        <h1 class="center titulo scrollspy autem-text" id="tripulacao">Tripulação</h1>
      </div>
      <div class="tripulacao">
        <div class="col s12">
          <div class="col s12 l3 center">
            <img src="<?php //bloginfo('template_url') ?>/img/1-anna.png">
            <h3 class="strong center">Anna<br>Desbravadora intergaláctica</h3>
            <p class="justify">A Anna é formada em Comunicação Institucional pela UTFPR e pós-graduada em Comportamentos de Consumo. Com experiência anterior em agências de publicidade e assessorias de imprensa, por aqui ela é a responsável por passear pela infinidade do universo e trazer até nós todas as informações necessárias para subsidiar o nosso trabalho e, consequentemente, o seu sucesso. Inovamos a partir de muita pesquisa.</p>
          </div>
          <div class="col s12 l3 center">
            <img src="<?php //bloginfo('template_url') ?>/img/2-danielle.png">
            <h3 class="strong center">Danielle<br>Sentinela sideral</h3>
            <p class="justify">Administradora com experiência em Planejamento, a Danielle organiza tudo o que a sua nave utilizará durante a jornada no espaço que iniciaremos juntos, mas sempre na velocidade da luz. Ela também utiliza seu histórico em Consultorias e Auditorias para manter o cronograma das estratégias em dia, porque a decolagem, o vôo e a aterrissagem da sua nave devem ser perfeitos. Pós-graduada em Comportamentos de Consumo, a nossa sentinela  ainda articula o fluxo de informações e ações para garantir que você chegue ao destino combinado no menor tempo possível.</p>
          </div>
          <div class="col s12 l3 center">
            <img src="<?php //bloginfo('template_url') ?>/img/3-davi.png">
            <h3 class="strong center">Davi<br>Navegador espacial</h3>
            <p class="justify">O Davi identifica espacial e temporalmente as rotas e territórios mais inóspitos, a fim de encontrar neles a área perfeita para a sua nave aterrissar ou até mesmo para evitar uma colisão com meteoros vagantes. Com 14 anos de experiência na área comercial e criação de departamentos comerciais, ele é formado em Economia pela Universidade Federal do Paraná e Gestão Comercial pela FAE Business School (Curitiba/PR), além de ter em sua mochila de suprimentos espaciais, treinamentos em metodologia de vendas pela Mercury International e outras instituições.</p>
          </div>
          <div class="col s12 l3 center">
            <img src="<?php //bloginfo('template_url') ?>/img/4-igor.png">
            <h3 class="strong center">Igor<br>Mensageiro interplanetário</h3>
            <p class="justify">Redator publicitário há seis anos, Igor é graduado em Comunicação Organizacional pela UTFPR e especialista em Construção de Imagem. Desde 2008 realiza a assessoria de imprensa do maior evento de rua de Curitiba, é colunista do site Curitiba Cult, professor de escrita criativa e produção de conteúdo, e não descansa enquanto o maior número de pessoas possível não fica sabendo que a sua empresa existe.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="divider"></div> -->
<!-- DIFERENCIAIS -->
<div class="autem white-text">
  <div class="container">
    <div class="section">
      <div class="row">
        <div class="col s12">
          <h1 class="center titulo scrollspy white-text" id="diferenciais">Diferenciais</h1>
        </div>
        <div class="col s12">
          <h3 class="modaltitulo center">Protocolo de decolagem.</h3>
        </div>
        <div class="tripulacao">
          <div class="col s12">
            <div class="col s12 l3 center">
              <img class="diferenciais center" src="<?php bloginfo('template_url') ?>/img/feature1.png">
              <h3 class="strong center">Idealizamos com dados empíricos</h3>
              <p class="justify">Nada por aqui é feito sem certezas. Não trabalhamos com achismos na Autem. Então, antes de começar qualquer trabalho, pesquisaremos muito e recolheremos o maior número de informações possíveis sobre a sua empresa, o seu segmento, o cenário no qual a sua marca está inserida e outras inúmeras variáveis que possam implicar em alguma interferência para o seu negócio, sejam elas positivas ou negativas.</p>
            </div>
            <div class="col s12 l3 center">
              <img class="diferenciais center" src="<?php bloginfo('template_url') ?>/img/feature2.png">
              <h3 class="strong center">Planejamos com inovação</h3>
              <p class="justify">Não ficamos sem rumo. Antes de caminharmos, sempre saberemos qual trajeto seguir e, principalmente, onde queremos chegar. Estratégia é fundamental para não se perder, evitar gastos desnecessários e, claro, gerar resultados tangíveis. No entanto, acreditamos que uma viagem pode sempre ser inovadora, basta que encontremos as oportunidades certas.</p>
            </div>
            <div class="col s12 l3 center">
              <img class="diferenciais center" src="<?php bloginfo('template_url') ?>/img/feature3.png">
              <h3 class="strong center">Executamos com responsabilidade</h3>
              <p class="justify">A maioria das consultorias do mercado apenas analisam o seu contexto, oferecem soluções – muitas vezes boas, de verdade -, mas não a executam, deixando o trabalho todo para a sua equipe. Então, deixe a execução conosco. Estamos aqui pra isso.</p>
            </div>
            <div class="col s12 l3 center">
              <img class="diferenciais center" src="<?php bloginfo('template_url') ?>/img/feature4.png">
              <h3 class="strong center">Avaliamos com transparência</h3>
              <p class="justify">Somos muito autocríticos, o que significa dizer que jamais deixaremos de avaliar o nosso próprio trabalho para sabermos se realmente estamos entregando o melhor resultado, ou seja, sempre após finalizarmos uma execução, avaliaremos os resultados para apresentarmos à sua empresa, só assim saberemos se devemos mudar de rota ou não. O mercado não é estático, então a sua estratégica precisa ser dinâmica.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- SERVICOS -->
<!-- Para decolar -->
<div class="autem-text">
  <div class="container">
    <div class="section">
      <div class="row">
        <div class="col s12">
          <h1 class="autem-text center titulo scrollspy" id="servicos">Para decolar: Rocket Marketing</h1>
        </div>
        <div class="col s12">
          <p class="justify">A partir de uma metodologia americana utilizada por diferentes empresas estrangeiras, desenvolvemos um pack de serviços especiais – e fundamentais – para fazer com que a sua empresa decole. E ele funciona da seguinte maneira:</p>
        </div>
        <div class="tripulacao">
          <div class="col s12">
            <div class="col s12 l6">
              <div class="bloco-azul-left">
                <h4 class="white-text">1) Pesquisa</h4>
                <p class="justify white-text">Encontramos as informações que você precisa saber sobre o seu mercado, seu público e, claro, o seu concorrente. Com as informações corretas a sua empresa pode acertar mais. Pesquisas de mercado podem descobrir, por exemplo, como o consumidor do que você vende se comporta.</p>
              </div>
            </div>
            <div class="col s12 l6 right">
              <div class="bloco-azul-right invisible">
                <h4>2) Estratégia</h4>
                <p class="justify">Para chegar a um destino é necessário saber o caminho. Com as informações recolhidas na pesquisa é possível traçar um planejamento assertivo, funcional e que otimize os recursos da sua empresa. Na estratégia podemos criar e/ou posicionar a sua marca; estruturar ou reestruturar portfólios; posicionar preços e pagamentos; elaborar processos e canais de venda.</p>
              </div>
            </div>
          </div>
          <div class="col s12">
            <div class="col s12 l9">
              <div class="bloco-azul-left invisible">
                <h4>3) Canais de comunicação integrada</h4>
                <p class="justify">Para que o seu público seja alcançado pelas estratégias desenvolvidas, encontramos os canais certos e a mensagem mais relevante – aquela que atingirá os seus futuros clientes. O meio é a mensagem: se você escolher o canal errado, de nada adianta a mensagem ser a certa.<br>
                Estratégias on e offline com foco em veículos ou redes sociais – aproximação com influenciadores digitais; definição de materiais e formatos de conteúdos impressos e digitais; segmentação de mídia, entre outros.</p>
              </div>
            </div>
            <div class="col s12 l3">
              <div class="bloco-azul-contato">
                <p class="justify white-text"><span><a href="#contato" style="color: #FFFFFF">Entre em contato conosco</a></span> e saiba como o rocket marketing tem colaborado com organizações no mundo inteiro.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Para navegar -->
<div class="autem-text">
  <div class="container">
    <div class="section">
      <div class="row">
        <div class="col s12">
          <h1 class="center titulo scrollspy" id="diferenciais">Para navegar: outros serviços</h1>
        </div>
        <div class="tripulacao">
          <div class="col s12">
            <div class="col s12 l3 center">
              <img class="diferenciais center" src="<?php bloginfo('template_url') ?>/img/servicos/1.png">
              <h3 class="strong center">Pesquisas de mercado</h3>
              <p class="justify">Primárias, qualitativas e quantitativas; Secundárias exploratórias; Pesquisa de público-alvo; Tendências.</p>
            </div>
            <div class="col s12 l3 center">
              <img class="diferenciais center" src="<?php bloginfo('template_url') ?>/img/servicos/2.png">
              <h3 class="strong center">Elaboração de estratégias de comunicação e marketing</h3>
              <p class="justify">Criação e/ou posicionamento de marca; Estruturação ou reestruturação de portfólio; Posicionamento de preço e pagamento; Elaboração de processos e canais de venda.</p>
            </div>
            <div class="col s12 l3 center">
              <img class="diferenciais center" src="<?php bloginfo('template_url') ?>/img/servicos/3.png">
              <h3 class="strong center">Estruturação de departamento vendas</h3>
              <p class="justify">Gerenciamento dos processos de vendas; Suporte para equipe de vendas; Gestão das vendas e outras especificidades do departamento.</p>
            </div>
            <div class="col s12 l3 center">
              <img class="diferenciais center" src="<?php bloginfo('template_url') ?>/img/servicos/4.png">
              <h3 class="strong center">Treinamentos de marketing, comunicação e vendas</h3>
              <p class="justify">Treinamentos individuais ou de equipe; Compartilhamento de estratégias de persuasão; Estudos em oratória, entre outros.</p>
            </div>
          </div>
          <div class="col s12">
            <div class="col s12 l3 center">
              <img class="diferenciais center" src="<?php bloginfo('template_url') ?>/img/servicos/5.png">
              <h3 class="strong center">Criação e planejamento de canais de comunicação integrada</h3>
              <p class="justify">Estratégias on e offline com foco em veículos ou redes sociais; Definição de materiais e formatos de conteúdos impressos e digitais; Segmentação de mídia, entre outros.</p>
            </div>
            <div class="col s12 l3 center">
              <img class="diferenciais center" src="<?php bloginfo('template_url') ?>/img/servicos/6.png">
              <h3 class="strong center">Criação e gerenciamento de ações de marketing e promoção</h3>
              <p class="justify">Definição de critérios de promoção; Desenvolvimento e acompanhamento de ações promocionais; Integração dos canais de marketing.</p>
            </div>
            <div class="col s12 l3 center">
              <img class="diferenciais center" src="<?php bloginfo('template_url') ?>/img/servicos/7.png">
              <h3 class="strong center">Indicação de fornecedores para projetos de marketing e acompanhamento de entrega</h3>
              <p class="justify">Definição de serviços condizentes com cada cliente ou projeto; Contratação; Briefing e avaliação dos profissionais; Contratação, entre outros.</p>
            </div>
            <div class="col s12 l3 center">
              <img class="diferenciais center" src="<?php bloginfo('template_url') ?>/img/servicos/8.png">
              <h3 class="strong center">Acompanhamento de performance das ações de marketing e vendas</h3>
              <p class="justify">Avaliação de índices; Adaptação de estratégias; Definição de novos objetivos, entre outras demandas.</p>
            </div>
          </div>
          <div class="col s12">
            <div class="col s12 l3 center">
              <img class="diferenciais center" src="<?php bloginfo('template_url') ?>/img/servicos/9.png">
              <h3 class="strong center">Personalização visual de canais online</h3>
            </div>
            <div class="col s12 l3 center">
              <img class="diferenciais center" src="<?php bloginfo('template_url') ?>/img/servicos/10.png">
              <h3 class="strong center">Producão de conteúdo - on e offline</h3>
            </div>
            <div class="col s12 l3 center">
              <img class="diferenciais center" src="<?php bloginfo('template_url') ?>/img/servicos/11.png">
              <h3 class="strong center">Desenvolvimento de materiais gráficos</h3>
            </div>
            <div class="col s12 l3 center">
              <img class="diferenciais center" src="<?php bloginfo('template_url') ?>/img/servicos/12.png">
              <h3 class="strong center">Criação e gerenciamento de campanhas de links patrocinados</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- CLIENTES -->
<div class="autem-text">
  <div class="container">
    <div class="section">
      <div class="row">
        <div class="col s12">
          <h1 class="center titulo scrollspy" id="clientes">Clientes</h1>
        </div>
        <div class="clientes">
          <!-- Row 1 -->
          <div class="col s12">
            <div class="col s12 l3 center">
              <img class="clientes center" src="<?php bloginfo('template_url') ?>/img/logos/7-ufpr.jpg">
              <h3 class="strong center">UFPR</h3>
            </div>
            <div class="col s12 l3 center">
              <img class="clientes center" src="<?php bloginfo('template_url') ?>/img/logos/4-ipam.jpg">
              <h3 class="strong center">IPAM - Instituto de Preservação da Amazônia</h3>
            </div>
            <div class="col s12 l3 center">
              <img class="clientes center" src="<?php bloginfo('template_url') ?>/img/logos/2-adega.jpg">
              <h3 class="strong center">Adega Chablis</h3>
            </div>
            <div class="col s12 l3 center">
              <img class="clientes center" src="<?php bloginfo('template_url') ?>/img/logos/6-kingdom.jpg">
              <h3 class="strong center">Kingdom Batel</h3>
            </div>
          </div>
          <!-- Row 2 -->
          <div class="col s12">
            <div class="col s12 l3 center">
              <img class="clientes center" src="<?php bloginfo('template_url') ?>/img/logos/5-mol.jpg">
              <h3 class="strong center">MOL Advogados</h3>
            </div>
            <div class="col s12 l3 center">
              <img class="clientes center" src="<?php bloginfo('template_url') ?>/img/logos/8-brasliv.jpg">
              <h3 class="strong center">Brasliv</h3>
            </div>
            <div class="col s12 l3 center">
              <img class="clientes center" src="<?php bloginfo('template_url') ?>/img/logos/1-imunova.jpg">
              <h3 class="strong center">Imunova Análises Biológicas</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>