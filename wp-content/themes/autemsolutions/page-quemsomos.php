<?php /* Template Name: Quem Somos */ ?>

<?php get_header('posts'); ?>

<style type="text/css">
	
	body {
		background: linear-gradient(to bottom, rgba(0, 0, 0, 0.65) 0%, rgba(0, 0, 0, 0.65) 100%, rgba(0, 0, 0, 0.65) 100%), url(https://images.unsplash.com/photo-1493970866116-fe0cad1a5727?auto=format&fit=crop&w=2000&q=80&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D);
	    background-size: cover;
	    background-attachment: fixed;
	}

</style>

<div class="row" style="margin-bottom: 0">
	<div class="col s12">
		<div class="container">
			<div class="col l12 mvv white-text">
				<h1>MISSÃO: IMPULSIONAR SONHOS</h1>
				<p class="justify">Queremos ajudar pessoas e empreendimentos a tornarem sustentáveis os seus objetivos e, com isso, impactar diretamente na economia e na vida das pessoas, fazendo com que cada vez mais empresas e profissionais tenham oportunidade de crescer. Acreditamos muito no poder da conexão e, portanto, buscamos fazer nosso trabalho através dela, conectando pessoas a empresas, ofertas a demandas e oportunidades a realizações.</p>
				<h1>VISÃO</h1>
				<p class="justify">Nos tornarmos referência – não necessariamente em tamanho ou capital – mas no exemplo. Nosso foco é trabalhar com empresas que impactem positivamente o ambiente a sua volta e nos tornarmos seus parceiros e apoiadores, para fazê-los crescer, prosperar e influenciar na economia e na vida das pessoas.</p>
				<h1>VALORES</h1>
				<p class="justify">
					<ul>
						<li>Busca constante pela perfeição nos nossos processos e na entrega aos nossos clientes</li>
						<li>Fidelidade aos nossos compromissos, colocando-os sempre acima da lucratividade e da conveniência</li>
						<li>Busca pela inovação, em todos os nossos setores e mentes</li>
						<li>Ética, honestidade e dignidade em todas as nossas relações, dentro e fora da empresa</li>
						<li>Preço justo e acessível, conjugado com um trabalho de altíssima qualidade</li>
					</ul>
				</p>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col s12">
		<div class="container">
			<div class="col l12 s12 clientes white-text">
				<h1 class="white-text">DEPOIMENTOS</h1>
				<div class="col l12 s12">
					<div class="col l4 s12">
						<img src="<?php bloginfo('template_url'); ?>/img/logos/1-imunova.jpg" />
						<p class="padding20 justify">O trabalho com a Autem para desenvolver e estruturar o departamento comercial foi essencial para a Imunova. Ao perceber a melhor forma de entender as demandas dos clientes e sistematizar todo o processo de venda conseguimos triplicar o nosso resultado no primeiro ano e transmitir a credibilidade que a empresa já obteve no mercado empresa para os novos clientes.
						<br><br>
						Diretor de P&D<br>
						Imunova Análises Biológicas 
						</p>
					</div>
					<div class="col l4 s12">
						<img src="<?php bloginfo('template_url'); ?>/img/logos/3-dhl.jpg" />
						<p class="padding20 justify">A Autem Solutions nos ajudou bastante no entendimento de nosso mercado de atuação, comportamento de nossos competidores e por fim numa estratégia bastante assertiva de abordagem junto ao mercado. O conhecimento do mercado pela Autem, juntamente com uma metodologia sólida nos garantiu excelentes resultados a Estratégia de Expansão Sul da DHL Supply Chain.
 						<br><br>
						César Rodrigues<br>
						Operations General Manager<br>
						DHL Supply Chain
					</div>
					<div class="col l4 s12">
						<img src="<?php bloginfo('template_url'); ?>/img/logos/4-ipam.jpg" />
						<h3 class="white-text center">IPAM Amazônia</h3>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row poweredby" style="margin-top: 150px;">
	<div class="col s12">
		<div class="container">
			<div class="col s12 center">
				<h5 class="white-text">Powered by</h5>
				<img style="width:200px;margin: 0;" src="<?php bloginfo('template_url'); ?>/img/parceiros/5-questionpro.png" />
			</div>
		</div>
	</div>
</div>
<div class="row soliciteavisita" style="margin-top: 50px;margin-bottom:50px">
	<div class="col s12">
		<div class="container">
			<div class="col s12">
				<h5 class="white-text">SOLICITE UMA VISITA</h5>
			</div>
			<div class="col s12 center">
				<?php echo do_shortcode('[contact-form-7 id="18" title="Contato"]'); ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>