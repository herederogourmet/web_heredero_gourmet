<?php get_header('wordpress'); ?>

<?php // ↓↓↓ Loop Example  ?>
<?php if ( have_posts() ) : the_post(); ?>
	<section class="container">
		<video autoplay loop muted>
			<source src="<?php echo get_template_directory_uri(); ?>/assets/video/fire.mp4" type="video/mp4">
		</video>
	</section>
	<section class="prueba">

	</section>
<?php endif; ?>

<?php get_footer(); ?>