<?php
/**
 * The template for displaying the footer
 *
 * @package WordPress
 * @subpackage Archwork
 */
?>

<footer class="page-footer autem-dark">
  <div class="container">
    <div class="row">
      <div class="col s12 m4">
        <h5 class="white-text">Autem Solutions</h5>
        <p class="grey-text text-lighten-4">
          E-mail: <a href="mailto:hello@autemsolutions.com.br">hello@autemsolutions.com.br</a>
          <br>
          Fone: (41) 4101-7740
        </p>
      </div>
      <div class="col m4">
        <h5 class="white-text scrollspy" id="contato">Contato</h5>
        <div class="row">
          <?php echo do_shortcode('[contact-form-7 id="18" title="Contato"]'); ?>
          <!--  <form class="col s12">
            <div class="row">
              <div class="input-field col s12">
                <input placeholder="Nome" id="nome" type="text" class="validate">
                <input placeholder="E-mail" id="email" type="email" class="validate">
                <input placeholder="Telefone" id="phone" type="text" class="validate">
                <button class="right btn waves-effect waves-light" type="submit" name="action">Enviar
                </button>
              </div>
            </div>
          </form> -->
        </div>
      </div>
      <div class="col m1">&nbsp;</div>
      <div class="col m3">
        <h5 class="white-text">Nós, nas Redes Sociais</h5>
          <ul>
            <li>
              <!-- AddToAny BEGIN -->
              <div class="a2a_kit a2a_kit_size_32 a2a_default_style social">
                <a href="https://www.facebook.com/autemsolutions" target="blank">
                  <img src="<?php bloginfo('template_url') ?>/img/facebook.png">
                </a>
                <a href="https://www.instagram.com/autemsolutions" target="blank">
                  <img src="<?php bloginfo('template_url') ?>/img/instagram.png">
                </a>
              </div>
              <!-- AddToAny END -->
             </li>
          </ul>
      </div>
    </div>
  </div>
  <div class="footer-copyright">
    <div class="container center">
      Todos os direitos reservados &copy; <?php echo date('Y'); ?> | Made by <a class="purple-text" href="http://www.bulkdesign.com.br">Bulk Design</a>
    </div>
  </div>
</footer>
<!-- Scripts -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-97845794-1', 'auto');
  ga('send', 'pageview');
</script>
<!-- Load Facebook SDK for JavaScript -->
  <div id="fb-root"></div>
  <script>
    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
  </script>
  <script src="<?php bloginfo('template_url') ?>/js/jquery.min.js"></script>
  <script src="<?php bloginfo('template_url') ?>/js/jquery.mask.min.js"></script>
  <script src="<?php bloginfo('template_url') ?>/js/materialize.js"></script>
  <script src="<?php bloginfo('template_url') ?>/js/init.js"></script>
  <?php wp_footer(); ?>
</body>
</html>