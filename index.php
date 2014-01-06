<?php get_header() ?>
<?php if (is_home()) { ?>
	<div id="content">
		<?php while ( have_posts() ) : the_post();
			if ( has_post_thumbnail()) {
			  echo '<a href="' . get_permalink($post->ID) . '" >';
			  the_post_thumbnail('ipad');
			  echo '</a>';
			}
		endwhile; ?>	        	
	</div>
<?php } ?> 
<?php get_footer() ?>