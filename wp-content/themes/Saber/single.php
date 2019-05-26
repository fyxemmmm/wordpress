<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Akina
 */

get_header(); ?>
	
		<?php
		while ( have_posts() ) : the_post();
			get_template_part( 'tpl/content', 'single' );
			get_template_part('layouts/post','nextprev');  
		    get_template_part('layouts/authorprofile'); 
		endwhile; // End of the loop.
		?>
		</main><!-- #main -->
<canvas id='canvas'></canvas>

	</div><!-- #primary -->
<?php
get_sidebar();
get_footer();
