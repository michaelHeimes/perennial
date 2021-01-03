<?php 
/**
 * Template Name: Private Dining Page
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

				<section class="alt-rows">
					<div class="grid-container">
					<?php if( have_rows('alternating_rows') ):?>
						<?php while ( have_rows('alternating_rows') ) : the_row();?>	
						
							<?php if( have_rows('single_row') ):?>
								<?php while ( have_rows('single_row') ) : the_row();?>	
								<div class="single-row grid-x grid-padding-x">

									<div class="img-wrap fade-in cell small-12 medium-6" style="background-image: url(<?php the_sub_field('image');?>)"></div>
									
									<div class="copy-wrap cell small-12 medium-6">
										
										<div class="inner fade-in-up">
										
											<?php the_sub_field('copy');?>
											
											<?php 
											$link = get_sub_field('button_link');
											if( $link ): 
											    $link_url = $link['url'];
											    $link_title = $link['title'];
											    $link_target = $link['target'] ? $link['target'] : '_self';
											    ?>
											<div class="btn-wrap text-center">
											    <a class="button solid" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
											</div>
											<?php endif; ?>
											
										</div>
										
									</div>
							
								</div>
								<?php endwhile;?>
							<?php endif;?>
						

					
						<?php endwhile;?>
					<?php endif;?>
					</div>
				</section>			    				
												
				<?php get_template_part('parts/partial', 'contact-card');?>
											    					
			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>