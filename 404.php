<?php
/**
 * The template for displaying 404 (page not found) pages.
 *
 * For more info: https://codex.wordpress.org/Creating_an_Error_404_Page
 */

get_header(); ?>
			
	<div class="content">

		<div class="inner-content">
	
			<main class="main" role="main">

				<article class="content-not-found">
				
					<header class="article-header banner">
						<h1><?php _e( 'Page Not Found', 'jointswp' ); ?></h1>
					</header> <!-- end article header -->
			
					<section class="entry-content">
						<div class="grid-container">
							<div class="grid-x grid-padding-x">
								<div class="cell small-12">
									<h3><?php _e( "The page you were looking for can't be found.  Please you the main navigation to find what you're looking for!", "jointswp" ); ?></h3>
								</div>
							</div>
						</div>
					</section> <!-- end article section -->
			
				</article> <!-- end article -->
	
			</main> <!-- end #main -->

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>