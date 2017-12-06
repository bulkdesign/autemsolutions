<?php /* Template Name: Contato */ ?>

<?php get_header('posts'); ?>

<style type="text/css">
	
	body {
		background: linear-gradient(to bottom, rgba(0, 0, 0, 0.45) 0%, rgba(0, 0, 0, 0.45) 100%, rgba(0, 0, 0, 0.45) 100%), url('https://images.unsplash.com/photo-1503647098920-d5a4604f42c3?auto=format&fit=crop&w=2000&q=80&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D');
		background-size: cover;
		background-position: center;
	    background-attachment: fixed;
	}

</style>

<div class="container">
	<div class="row">
		<div class="contato">
			<div class="col s12">
				<h1 class="white-text">Fale Conosco</h1>
			</div>
			<div class="col l12 s12">
				<?php echo do_shortcode('[contact-form-7 id="18" title="Contato"]'); ?>
			</div>			
			<div class="col s12 margin-top center">
				<a href="http://www.autemsolutions.com.br/prestadores-de-servico/">
					<div class="col l3 m4 s4 hoverable">
						<p class="text-center white-text">SEJA UM FORNECEDOR</p>
						<img style="display:block;margin:0px auto;" width="50" src="<?php bloginfo('template_url'); ?>/img/contato/icone2.png" />
					</div>
				</a>
				<a href="http://www.autemsolutions.com.br/tripulacao/">			
					<div class="col l3 m4 s4 hoverable">
						<p class="text-center white-text">FAÇA PARTE DA TRIPULAÇÃO</p>
						<img style="display:block;margin:0px auto;" width="50" src="<?php bloginfo('template_url'); ?>/img/contato/icone3.png" />
					</div>
				</a>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>