<?php get_header() ?>
<?php if (is_home()) { ?>
	<div id="wrapper">
		<div id="article-list">
			<?php while ( have_posts() ) : the_post();
				if ( has_post_thumbnail()) { ?>
				<div class="featured-article"> 
					<?php echo '<a href="' . get_permalink($post->ID) . '" >';
					  the_post_thumbnail('ipad'); ?>
					  <div class="excerpt">
					  	<?php the_title(); ?>
					  	<?php the_excerpt(); ?>
					  </div>
					  <?php echo '</a>'; ?>
				</div>
				<?php }
			endwhile; ?>	        	
		</div>
		<div id="sidebar">
			<h2 id="side-title">Recent Posts</h2>
			<?php get_archives('postbypost', '10', 'custom', '<li>', '</li>'); ?>
		</div>
	</div>
<?php } ?> 
<?php get_footer() ?>