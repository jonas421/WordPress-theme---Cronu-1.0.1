<?php
/**************************************************************
 *
 * List type - Post item Template
 *
 * @package  		 TRUEWordpress Theme 1E
 * @Version			 1.0.1
 * @file     		 templates/post-list-item.php
 * @author   		 TRUEWordpress Team
 * @Author Link 	 http://truewordpress.com
 * @license	 		 GNU General Public License
 * @license url: 	 http://www.gnu.org/licenses/gpl-3.0.html
 **************************************************************/	

// get Social Links
$facebook = get_post_meta(get_the_ID(), 'post_facebook');
$twitter = get_post_meta(get_the_ID(), 'post_twitter');
$google = get_post_meta(get_the_ID(), 'post_google');
$linkedin = get_post_meta(get_the_ID(), 'post_linkedin');
?>

<div class = "list-item after-clear <?php echo ot_get_option('general_animation') == 'on'? 'wow fadeInUp': ''; ?>">
	
	<h3><?php the_title(); ?></h3>

	<div class = "item-info">
		<span class = "post-user">By <a href = "<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><i class = "fa fa-user"></i><?php the_author(); ?></a></span>
		<span class = "post-comments"><i class = "fa fa-comments"></i> <?php echo get_comments_number(); ?></span>
		<span class = "post-date"><i class = "fa fa-calendar"></i><?php the_time('M d, Y'); ?></span>

		<?php if(get_the_category()): ?>
			<span class = "post-categories"><i class = "fa fa-folder"></i> <?php the_category(' '); ?></span>
		<?php endif; ?>

		<?php if(get_the_tags()): ?>
			<span class = "post-tags"><i class = "fa fa-tags"></i> <?php the_tags(' '); ?></span>
		<?php endif; ?>
	</div>
	
	<div class = "item-content col-lg-12 col-md-12 after-clear">
		<?php if(has_post_thumbnail()): ?>

			<div class = "col-lg-4 col-md-4 item-thumb">
				<?php the_post_thumbnail('image-blog-thumb', array('alt' => get_the_title())); ?>

				<div class = "item-social">

					<?php if($facebook[0]): ?>
						<a href = "http://<?php echo $facebook[0]; ?>" target = "_blank" class = "social-btn color-facebook<?php echo ot_get_option('socialsider_color') == 'on'? '': '-hover'; ?>"><i class = "fa fa-facebook"></i></a>
					<?php endif; ?>

					<?php if($twitter[0]): ?>
						<a href = "http://<?php echo $twitter[0]; ?>" target = "_blank" class = "social-btn color-twitter<?php echo ot_get_option('socialsider_color') == 'on'? '': '-hover'; ?>"><i class = "fa fa-twitter"></i></a>
					<?php endif; ?>

					<?php if($google[0]): ?>
						<a href = "http://<?php echo $google[0]; ?>" target = "_blank" class = "social-btn color-google-plus<?php echo ot_get_option('socialsider_color') == 'on'? '': '-hover'; ?>"><i class = "fa fa-google-plus"></i></a>
					<?php endif; ?>

					<?php if($linkedin[0]): ?>
						<a href = "http://<?php echo $linkedin[0]; ?>" target = "_blank" class = "social-btn color-linkedin<?php echo ot_get_option('socialsider_color') == 'on'? '': '-hover'; ?>"><i class = "fa fa-linkedin"></i></a>
					<?php endif; ?>

				</div>
			</div>
			
			<div class = "item-description-wrapper col-lg-8 col-md-8">
		<?php else: ?>
		
			<div class = "item-description-wrapper col-lg-12 col-md-12">
		<?php endif; ?>

			<div class = "item-description after-clear">
				
				<?php if(ot_get_option('blog_postformat') == 'on'): ?>
					<label class = "post-format-icon post-format-<?php echo get_post_format(); ?>"></label>
				<?php endif; ?>

				<?php the_excerpt(); ?>

			</div>

			<?php if(!has_post_thumbnail()): ?>

				<div class = "item-social">

					<?php if($facebook[0]): ?>
						<a href = "http://<?php echo $facebook[0]; ?>" target = "_blank" class = "social-btn color-facebook<?php echo ot_get_option('socialsider_color') == 'on'? '': '-hover'; ?>"><i class = "fa fa-facebook"></i></a>
					<?php endif; ?>

					<?php if($twitter[0]): ?>
						<a href = "http://<?php echo $twitter[0]; ?>" target = "_blank" class = "social-btn color-twitter<?php echo ot_get_option('socialsider_color') == 'on'? '': '-hover'; ?>"><i class = "fa fa-twitter"></i></a>
					<?php endif; ?>

					<?php if($google[0]): ?>
						<a href = "http://<?php echo $google[0]; ?>" target = "_blank" class = "social-btn color-google-plus<?php echo ot_get_option('socialsider_color') == 'on'? '': '-hover'; ?>"><i class = "fa fa-google-plus"></i></a>
					<?php endif; ?>

					<?php if($linkedin[0]): ?>
						<a href = "http://<?php echo $linkedin[0]; ?>" target = "_blank" class = "social-btn color-linkedin<?php echo ot_get_option('socialsider_color') == 'on'? '': '-hover'; ?>"><i class = "fa fa-linkedin"></i></a>
					<?php endif; ?>

				</div>

			<?php endif; ?>

			<div class = "item-action">
				<a href = "<?php the_permalink(); ?>" class = "item-btn"><?php echo __('Read More', 'truewordpress'); ?> <i class = "fa fa-angle-double-right"></i></a>									
			</div>
		</div>
	</div>
</div>