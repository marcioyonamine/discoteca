<?php

/*
Template Name: Mario
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
<section class="veja-ainda">
<div class="container-fluid">
	<h1 class="veja">Veja também:</h1>
	<div class="row">
		<div class="col-md-4">
			<div class="box-veja-ainda">
				<div class="title-veja-ainda">
					<a href="http://centrocultural.cc/discoteca/index.php/oneyda-alvarenga/">
						<p><strong>Oneyda Alvarenga</strong></p>
					</a>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="box-veja-ainda">
				<div class="title-veja-ainda">
					<a href="http://centrocultural.cc/discoteca/index.php/historia/">
						<p>Sobre a <strong>Discoteca</strong></p>
					</a>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="box-veja-ainda">
				<div class="title-veja-ainda">
					<a href="http://centrocultural.cc/discoteca/index.php/2015/07/06/entrevista-com-flavia-toni/">
						<p>Entrevista com <strong>Flávia Toni</strong></p>
					</a>
				</div>
			</div>
		</div>
	</div>
</div> 
</section>

<?php get_footer(); ?>