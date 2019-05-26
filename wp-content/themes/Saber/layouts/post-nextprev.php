<?php 

/**
 * NEXT / PREVIOUS POSTS (精华版)
 */

if ( akina_option('post_nepre') == 'yes') {
?>
<section class="post-squares nextprev">
	<div class="post-nepre <?php if(get_next_post()){echo 'half';}else{echo 'full';} ?> previous">
		<?php previous_post_link('%link','<div class="background" style="background-image:url(./wp-content/themes/Saber/images/d/1.png);"></div><span class="label"></span><div class="info"><h3>%title</h3><hr></div>') ?>
	</div>
	<div class="post-nepre <?php if(get_previous_post()){echo 'half';}else{echo 'full';} ?> next">
		<?php next_post_link('%link','<div class="background" style="background-image:url(./wp-content/themes/Saber/images/d/2.png);"></div><span class="label"></span><div class="info"><h3>%title</h3><hr></div>') ?>
	</div>
</section>
<?php } ?>
