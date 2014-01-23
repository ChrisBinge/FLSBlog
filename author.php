


<?php
/*
Template Name: Author Page
*/
get_header(); ?>

<div id="main-content" class="main-content">

<?php
	if ( is_front_page() && twentyfourteen_has_featured_posts() ) {
		// Include the featured content template.
		get_template_part( 'featured-content' );
	}
?>
	<div id="primary" class="content-area">
				
		<div id="content" class="site-content" role="main">
			<h1 class="entry-title">Our Authors</h1>
				<div class ="authorAlign">
					<div id ="authorSpace">
						<h2 id="authorName">Travis Caples</h2>
							<div id="copyPhoto">
								<div id="authorPhoto"><img src ="#"></div>
									<div id="copy">Here is some friendly 
										text about our awesome author Travis. We're expecting big things out of this guy.										
									</div>
								</div>
							</div>	

				</div>	
		</div><!-- #content -->
	</div><!-- #primary -->
	
</div><!-- #main-content -->

<?php

get_footer();

