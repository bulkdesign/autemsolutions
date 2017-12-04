<?php /* Template Name: Contato */ ?>

<?php get_header('posts'); ?>

<div class="container">
	<div class="row">
		<div class="oquefazemos">
			<div class="col s12">
				<h1 class="white-text">Fale Conosco</h1>
			</div>
			<div class="col l12 s12">
				<?php echo do_shortcode('[contact-form-7 id="18" title="Contato"]'); ?>
			</div>			
			<div class="col s12 margin-top center">
				<div class="col l2 s12 hoverable">
					<p class="text-center white-text">SEJA UM FORNECEDOR</p>
					<img style="display:block;margin:0px auto;" width="50" src="<?php bloginfo('template_url'); ?>/img/contato/icone2.png" />
				</div>				
				<div class="col l2 s12 hoverable">
					<p class="text-center white-text">FAÇA PARTE DA TRIPULAÇÃO</p>
					<img style="display:block;margin:0px auto;" width="50" src="<?php bloginfo('template_url'); ?>/img/contato/icone3.png" />
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>