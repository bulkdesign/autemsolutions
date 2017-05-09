<?php /* Template Name: Blog */ ?>

<?php get_header('posts'); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container">
		<div class="entry-content" style="margin-top:80px">
			<h2 class="autem-text">Autem Tips</h2>
			<br><br>

			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">
					<div class="row">
						<?php query_posts( 'posts_per_page=20' ); ?>
				    	<?php if ( have_posts() ) : ?>
			    		<?php while ( have_posts() ) : the_post(); ?>
						<div class="col s12 m6 l4">
							<div class="card hoverable">
							  <a href="<?php the_permalink();?>">
							    <div class="card-image">
							      <div class="card-action autem-text">
						          <?php the_post_thumbnail(); ?>
						          <h3><?php the_title();?></h3>
						          <div class="divider"></div>
						          <div class="container">
						            <?php the_excerpt() ?>
						          </div>             
							      </div>
							    </div>
							  </a>
							</div>
						</div>
				    	<?php endwhile; ?>
				        <?php endif; ?>
			    	</div>
			    	<div class="row">
			    		<?php echo do_shortcode('[youtube_channel]'); ?>
			    	</div>
				</main><!-- .site-main -->
			</div><!-- .content-area -->
		</div>
	</div>
</article>

<?php get_footer(); ?>