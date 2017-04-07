<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container">

		<div class="entry-content" style="margin-top:80px">
			<h2 class="white-text">Quer ser um prestador de serviços parceiro da Autem? Preencha o cadastro abaixo e em breve entraremos em contato:</h2>
			<br><br>
			<?php
				/* translators: %s: Name of current post */
				the_content();
			?>
		</div><!-- .entry-content -->
	</div>
	<footer class="entry-footer">
	</footer><!-- .entry-footer -->

</article><!-- #post-## -->