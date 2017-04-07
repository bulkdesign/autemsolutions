<?php
/**
 * The template for displaying the footer
 *
 * @package WordPress
 * @subpackage Autem Solutions
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
      <div class="col m1">&nbsp;</div>
      <div class="col m3 right">
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
  <script src="<?php bloginfo('template_url') ?>/js/jquery.maskedinput.min.js"></script>
  <?php wp_footer(); ?>
</body>
</html>