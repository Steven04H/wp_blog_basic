<?php
	/**
 * 
 *
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 */

get_header(); ?>
<section id="primary" class="content-area">
<div class="page-container">
		<main id="main" class="site-main" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
			
			<?php endwhile; // end of the loop. ?>
		</main><!-- #main -->
	</div>
	<?php get_footer(); ?>
</section><!-- #primary -->
