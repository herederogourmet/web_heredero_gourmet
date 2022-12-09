
<?php get_header('wordpress'); ?>

<?php // ↓↓↓ Loop Example  ?>
<?php if ( have_posts() ) : the_post(); ?>
	<section class="container">
		<h1><?php the_title(); ?></h1>
		<h2>mamaaaaa</h2>
	</section>
<?php endif; ?>

<?php get_footer(); ?>