<?php
/**
 * The template for displaying the footer
 *
 * @package WordPress
 * @subpackage Archwork
 */
?>

<footer class="page-footer autem-dark">
  <div class="container padding-top">
    <div class="row">
      <div class="col s12">
        <div class="col s12 m6">
          <h5 class="white-text">AUTEM SOLUTIONS</h5>
          <p class="grey-text text-lighten-4">
            E-mail: <a href="mailto:hello@autemsolutions.com.br">hello@autemsolutions.com.br</a>
            <br>
            Fone: (41) 4101-7740
            <br>
            Rua Dr. Roberto Barrozo, 307 - Centro Cívico, Curitiba - PR
            <br>
            CEP 80520-070
          </p>
        </div>
        <div class="col m6">
          <div class="right">
            <h5 class="white-text">CONECTE-SE CONOSCO</h5>
            <ul class="right right-align">
              <li>
                <!-- AddToAny BEGIN -->
                <div class="a2a_kit a2a_kit_size_32 a2a_default_style social">
                  <a href="https://www.facebook.com/autemsolutions" target="blank">
                    <img src="<?php bloginfo('template_url') ?>/img/facebook.png">
                  </a>
                  <a href="https://www.instagram.com/autemsolutions" target="blank">
                    <img src="<?php bloginfo('template_url') ?>/img/instagram.png">
                  </a>
                  <a href="https://www.linkedin.com/company/16221781/" target="blank">
                    <img src="<?php bloginfo('template_url') ?>/img/linkedin.png">
                  </a>
                </div>
                <!-- AddToAny END -->
               </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-copyright">
    <div class="container center" style="font-size: 11px;">
      Todos os direitos reservados &copy; <?php echo date('Y'); ?> | Made by <a class="purple-text" href="http://www.bulkdesign.com.br">Bulk Design</a>
    </div>
  </div>
</footer>
<!-- Scripts -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 854951154;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/854951154/?guid=ON&amp;script=0"/>
</div>
</noscript>

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
  <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
  <script src="<?php bloginfo('template_url') ?>/js/jquery.mask.min.js"></script>
  <script src="<?php bloginfo('template_url') ?>/js/materialize.js"></script>
  <script src="<?php bloginfo('template_url') ?>/js/init.js"></script>
  <script src="<?php bloginfo('template_url') ?>/js/jquery.parallax.js"></script>
  <script src="<?php bloginfo('template_url') ?>/js/css3-animate-it.js"></script>
  <script src="<?php bloginfo('template_url') ?>/js/jquery.sticky.js"></script>
  <script type="text/javascript">
  _linkedin_data_partner_id = "46180";
  </script><script type="text/javascript">
  (function(){var s = document.getElementsByTagName("script")[0];
  var b = document.createElement("script");
  b.type = "text/javascript";b.async = true;
  b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
  s.parentNode.insertBefore(b, s);})();
  </script>
  <noscript>
  <img height="1" width="1" style="display:none;" alt="" src="https://dc.ads.linkedin.com/collect/?pid=46180&fmt=gif" />
  </noscript>
  <?php wp_footer(); ?>
</body>
</html>