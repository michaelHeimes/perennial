<?php 
/**
 * Template Name: Catering Page
 *
 * This is the template that displays all pages by default.
 */

get_header(); ?>
	
	<div class="content">
	
		<div class="inner-content">
	
		    <main class="main" role="main">
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			    	<?php get_template_part( 'parts/loop', 'page' ); ?>
			    
			    <?php endwhile; endif; ?>	
			    
			    
			    <section class="s1">
				    <div class="grid-container">
						<div class="grid-x grid-padding-x">
						    <div class="big-copy cell small-12">
								<?php the_field('full_width_copy');?>
							</div>
						</div>
				    </div>
			    </section>

				<section class="img-slider full-width">
					<?php if( have_rows('s1_slider') ):?>
					<div class="click-right-slider">
						<?php while ( have_rows('s1_slider') ) : the_row();?>	
						
							<?php 
							$image = get_sub_field('single_slide');
							if( !empty( $image ) ): ?>
							    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
							<?php endif; ?>
					
						<?php endwhile;?>
					</div>
					<?php endif;?>
				</section>			    				
												
				<?php get_template_part('parts/partial', 'contact-card');?>
											    					
			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>