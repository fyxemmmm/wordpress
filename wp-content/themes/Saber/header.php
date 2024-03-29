<?php

/**

 * The header for our theme.

 *

 * This is the template that displays all of the <head> section and everything up until <div id="content">

 *

 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials

 *

 * @package Akina

 */

?>

<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

<meta charset="<?php bloginfo( 'charset' ); ?>">

<meta name="viewport" content="width=device-width, initial-scale=1">

<title itemprop="name"><?php global $page, $paged;wp_title( '-', true, 'right' );

bloginfo( 'name' );$site_description = get_bloginfo( 'description', 'display' );

if ( $site_description && ( is_home() || is_front_page() ) ) echo " - $site_description";if ( $paged >= 2 || $page >= 2 ) echo ' - ' . sprintf( __( '第 %s 页'), max( $paged, $page ) );?>

</title>



<script src="<?php bloginfo('template_url'); ?>/js/jquery.min2.js" type="text/javascript"></script>

<script type="text/javascript">jQuery.noConflict();jQuery(document).ready(function(){jQuery(window).bind("beforeunload",function(){ jQuery("html").fadeOut("' . $fadeunloadspeed . '");});});</script>



<?php

if ( akina_option('progress_type') == 'loadprogress') { ?>

<script src="<?php bloginfo('template_url'); ?>/js/nprogress.js"></script>

<?php }?>



<?php	

if (akina_option('akina_meta') == true) {

	$keywords = '';

	$description = '';

	if ( is_singular() ) {

		$keywords = '';

		$tags = get_the_tags();

		$categories = get_the_category();

		if ($tags) {

			foreach($tags as $tag) {

				$keywords .= $tag->name . ','; 

			};

		};

		if ($categories) {

			foreach($categories as $category) {

				$keywords .= $category->name . ','; 

			};

		};

		$description = mb_strimwidth( str_replace("\r\n", '', strip_tags($post->post_content)), 0, 240, '…');

	} else {

		$keywords = akina_option('akina_meta_keywords');

		$description = akina_option('akina_meta_description');

	};

?>

<meta name="description" content="<?php echo $description; ?>" />

<meta name="keywords" content="<?php echo $keywords; ?>" />

<?php } ?>
<!-- 网站logo -->
<!-- <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/ico.png"/>  -->

<?php wp_head(); ?>

<script type="text/javascript">

if (!!window.ActiveXObject || "ActiveXObject" in window) { //is IE?

  alert('请抛弃万恶的IE系列浏览器吧。');

}

</script>

   

<!--/*阅读进度条js*/-->

<?php

	if ( akina_option('progress_type') == 'readprogress') { ?>

	<script type="text/javascript">

		document.onscroll = function(){

		var scrollDistance = getScrollTop();

		var pxx = scrollAct(scrollDistance)

		document.getElementById("readprogress").style.width = pxx;

		}

		function scrollAct(insetOff) {

		var webHeight = document.body.scrollHeight - window.innerHeight;

		var p = (insetOff / webHeight ) * 100;

		return p.toString() + "%";

		}

		function getScrollTop() {

		var scrollPos;

		if (window.pageYOffset) {

		scrollPos = window.pageYOffset; }

		else if (document.compatMode && document.compatMode != 'BackCompat')

		{ scrollPos = document.documentElement.scrollTop; }

		else if (document.body) { scrollPos = document.body.scrollTop; }

		return scrollPos;

		}

	</script>

 <?php }?>



   











</head>

<body <?php body_class(); ?>>







<!--/*阅读进度条布局*/-->



<?php

if ( akina_option('progress_type') == 'readprogress') { ?>

<div id="readprogress"></div>

<?php }?>





	<section id="main-container">



		<?php 

		if(!akina_option('head_focus')){ 

		$filter = akina_option('focus_img_filter');

		?>

		<div class="headertop <?php echo $filter; ?>">

			<?php get_template_part('layouts/imgbox'); ?>

		</div>	

		<?php } ?>

		<div id="page" class="site wrapper">

			<header class="site-header" role="banner">

				<div class="site-top">

					<div class="site-branding">

						<?php if (akina_option('akina_logo')){ ?>

						<div class="site-title"><a href="<?php bloginfo('url');?>" ><img class="tiaodan" OnMouseOver="rbq()" src="<?php echo akina_option('akina_logo'); ?>"></a></div>

						<?php }else{ ?>

						<h1 class="site-title"><a href="<?php bloginfo('url');?>" ><?php bloginfo('name');?></a></h1>	

						<?php } ?><!-- logo end -->

					</div><!-- .site-branding -->

					<?php header_user_menu(); if(akina_option('top_search') == 'yes') { ?>

					<div class="searchbox"><i class="iconfont js-toggle-search iconsearch">&#xe65c;</i></div>

					<?php } ?>

					<div class="lower"><?php if(!akina_option('shownav')){ ?>

						<div id="show-nav" class="showNav">

							<div class="line line1"></div>

							<div class="line line2"></div>

							<div class="line line3"></div>

						</div><?php } ?>

						<nav><?php wp_nav_menu( array( 'depth' => 2, 'theme_location' => 'primary', 'container' => false ) ); ?></nav><!-- #site-navigation -->

					</div>	

				</div>

			</header><!-- #masthead -->

			<?php the_headPattern(); ?>

		    <div id="content" class="site-content">

