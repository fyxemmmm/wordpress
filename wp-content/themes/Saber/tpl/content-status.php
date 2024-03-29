<?php

/**

 * Template part for displaying posts.

 *

 * @link https://codex.wordpress.org/Template_Hierarchy

 *

 * @package Akina

 */



?>



<article class="post post-list" itemscope="" itemtype="http://schema.org/BlogPosting">

<div class="post-status">

 <div class="postava">

  <a href="javascript:;">

  	<img alt="<?php the_author(); ?>" src="<?php echo get_avatar_profile_url(); ?>" class="avatar avatar-64 photo" height="64" width="64">

  </a>

  </div>

  <div class="s-content">

	<p><?php echo mb_strimwidth(strip_shortcodes(strip_tags(apply_filters('the_content', $post->post_content))), 0, 150,"...");?></p>

	<div class="s-time">

	<?php if(is_sticky()) : ?>

			<i class="iconfont hotpost">&#xe758;</i>

		 <?php endif ?>

	  <i class="iconfont">&#xe65f;</i><?php echo poi_time_since(strtotime($post->post_date_gmt));//the_time('Y-m-d');?>

	  </div>

	</div>

	<footer class="entry-footer">

	<div class="info-meta">

       <div class="comnum">  

        <span><i class="iconfont">&#xe731;</i><?php comments_popup_link('NOTHING', '1 条咸鱼', '% 条咸鱼'); ?></span>

		</div>

		<div class="views"> 

		<span><i class="iconfont">&#xe73d;</i><?php echo get_post_views(get_the_ID()); ?> 调戏</span>

		 </div>   

        </div>		

	</footer><!-- .entry-footer -->

	</div>	

	<hr>

</article><!-- #post-## -->



