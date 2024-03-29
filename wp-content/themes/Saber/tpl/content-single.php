<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Akina
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if(akina_option('patternimg') || !get_post_thumbnail_id(get_the_ID())) { ?>
	<header class="entry-header">
		
		
	</header><!-- .entry-header -->
	<?php } ?>
	<div class="entry-content">

		 <?php the_content() ?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'ondemand' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php the_reward(); ?>

	
	<div class="post-tags">
		<?php if ( has_tag() ) { echo '<i class="iconfont">&#xe68c;</i> '; the_tags('', ' ', ' ');}?>
	</div>
    <?php get_template_part('layouts/sharelike'); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
