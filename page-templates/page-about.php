<?php 
/**
 * Template Name: About Page
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
							
							<div class="full-width-copy cell small-12 tablet-11 tablet-offset-1">	
								<?php the_field('s1_full_width_copy');?>
							</div>
							
							<div class="left cell small-12 medium-6 tablet-5 tablet-offset-1">
								<?php the_field('s1_left_copy');?>
								
								<?php 
								$link = get_field('s1_left_button_link');
								if( $link ): 
								    $link_url = $link['url'];
								    $link_title = $link['title'];
								    $link_target = $link['target'] ? $link['target'] : '_self';
								    ?>
								    <a class="button solid" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
								<?php endif; ?>
								
							</div>
							
							<div class="right cell small-12 medium-6 tablet-5 tablet-offset-1">
								<?php the_field('s1_right_copy');?>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-flower.svg" alt="flower sketch"/>
							</div>
							
						</div>
					</div>
					
				</section>
				

				<section class="s2 fade-in">
					<div class="grid-container">
						<div class="grid-x grid-padding-x">
							
							<div class="cell small-12 medium-6 medium-offset-3 text-center">
								<h3 class="no-bp"><?php the_field('s2_centered_copy');?></h3>
							</div>							
							
						</div>
					</div>
				</section>


				<section class="map">
					
					<?php 
					$image = get_field('map_image');
					if( !empty( $image ) ): ?>
					    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
					<?php endif; ?>
					
				</section>
				
				<?php if( have_rows('s3_image_slider') ):?>
				<section class="img-slider full-width">
					<div class="click-right-slider">
						<?php while ( have_rows('s3_image_slider') ) : the_row();?>	
						
							<?php 
							$image = get_sub_field('single_slide');
							if( !empty( $image ) ): ?>
							    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
							<?php endif; ?>
					
						<?php endwhile;?>
					</div>
				</section>
				<?php endif;?>
			    		    	
			    					
			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>