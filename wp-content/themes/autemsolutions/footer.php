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
          Rua Whatever, bairro Whatever - Curitiba, PR<br>
          CEP 80000-000<br>
          Fone: (41) 1234-5678<br>
        </p>
      </div>
      <div class="col m4">
        <h5 class="white-text">Contato</h5>
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
              <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
                <a class="a2a_button_facebook"></a>
                <a class="a2a_button_linkedin"></a>
                <a class="a2a_button_youtube"></a>
                <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
              </div>
              <script async src="https://static.addtoany.com/menu/page.js"></script>
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