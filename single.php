<?php
/**
 * The Template for displaying all single posts
 */
get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();

					/*
					 * Include the post format-specific template for the content. If you want to
					 * use this in a child theme, then include a file called called content-___.php
					 * (where ___ is the post format) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
<<<<<<< HEAD

					
=======
>>>>>>> 0c7dc33b837c60c9ee51ed1b95be31c2c6644acb
				endwhile;
			?>
			<div class="fb-comments" data-numposts="6" data-colorscheme="dark"></div>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php
get_footer();
