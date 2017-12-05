<style type="text/css">
	
img {
	max-width: 100%;
	height: auto;
}

</style>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="row">
		<div class="col l2">&nbsp;</div>
		<div class="col l8 s12">
			<header class="entry-header">
				<div class="container">
					<?php
						if ( is_single() ) :
							the_title( '<h3 class="entry-title white-text autem-thin">', '</h3>' );
						else :
							the_title( sprintf( '<h3 class="entry-title autem-thin"><a href="%s" rel="bookmark" class="white-text">', esc_url( get_permalink() ) ), '</a></h2>' );
						endif;
					?>
					<blockquote><p>Escrito por <?php the_author(); ?> em <?php the_date(); ?></p></blockquote>
				</div>
			</header><!-- .entry-header -->
			<div class="entry-content tips justify white-text">
				<div class="container">
					<?php
						/* translators: %s: Name of current post */
						the_content();
					?>
				</div>
			</div><!-- .entry-content -->
		</div>
		<div class="col l2">&nbsp;</div>
	</div>
	<footer class="entry-footer">
	</footer><!-- .entry-footer -->

</article><!-- #post-## -->