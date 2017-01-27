<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container">
		<div class="row">
			<div class="col s12">
				<header class="entry-header">
					<?php
						if ( is_single() ) :
							the_title( '<h1 class="entry-title">', '</h1>' );
						else :
							the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark" class="autem-text">', esc_url( get_permalink() ) ), '</a></h2>' );
						endif;
					?>
				</header><!-- .entry-header -->
			</div>
		</div>

		<div class="entry-content">
			<?php
				/* translators: %s: Name of current post */
				the_content();
			?>
		</div><!-- .entry-content -->
	</div>
	<footer class="entry-footer">
	</footer><!-- .entry-footer -->

</article><!-- #post-## -->