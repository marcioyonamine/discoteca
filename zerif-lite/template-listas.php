<?php

/*
Template Name: Listas
*/



get_header(); ?>

<div class="clear"></div>

</header> <!-- / END HOME SECTION  -->



	<div id="content" class="site-content">

<div class="container">



<div class="col-md-12">

	<div id="primary" class="content-area">

		<main id="main" class="site-main" role="main">



			<?php while ( have_posts() ) : the_post(); ?>



				<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>



		</main><!-- #main -->

	</div><!-- #primary -->

</div><!-- .content-left-wrap -->


</div><!-- .container -->
<section class="veja-ainda-listas">
<div class="container-fluid">
	<h1 class="veja">Veja ainda:</h1>
	<div class="row">
		<div class="col-md-4">
			<div class="box-veja-ainda">
				<div class="title-veja-ainda">
					<p><strong>Partituras</strong></p>
				</div>
				<div class="text-veja-ainda">
					<p>Personality, communicates your values communicates your values. With your close involvement, we competitors. With your close involvement, we gather information and examine your.</p>
					<p><a href="#">- ENTRE AQUI -</a></p>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="box-veja-ainda">
				<div class="title-veja-ainda">
					<p><strong>Livros</strong></p>
				</div>
				<div class="text-veja-ainda">
					<p>Personality, communicates your values, and distinguishes you from your competitors. With your close involvement, we competitors. With your close involvement, we gather information and examine your.</p>
					<p><a href="http://centrocultural.cc/discoteca/index.php/mario-de-andrade/">- ENTRE AQUI -</a></p>
					
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="box-veja-ainda">
				<div class="title-veja-ainda">
					<p><strong>Álbuns</strong></p>
				</div>
				<div class="text-veja-ainda">
					<p>Personality, communicates your values, and distinguishes you from your competitors. With your close involvement, we competitors. With your close involvement, we gather information and examine your.</p>
					<p><a href="#">- ENTRE AQUI -</a></p>
				</div>
			</div>
		</div>
	</div>
</div> 
</section>

<?php get_footer(); ?>