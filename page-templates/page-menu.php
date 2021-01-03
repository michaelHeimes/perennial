<?php 
/**
 * Template Name: Menu Page
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
						<div class="grid-x grid-margin-x">
						    <div class="full-width-copy cell small-12">
								<?php the_field('full_width_copy');?>
							</div>
						</div>
				    </div>
			    </section>
			    
			    
				<section class="menu-items">
					<div class="grid-container">
						<div class="grid-x grid-margin-x" data-equalizer data-equalize-on="medium" data-equalize-on-stack="true">
														
							<?php if( have_rows('menu_categories') ):?>
							<ul class="menu-accordion accordion cell small-12" data-accordion data-multi-expand="true" data-allow-all-closed="true">
								<?php while ( have_rows('menu_categories') ) : the_row();?>	
								
								<?php if( have_rows('single_category') ):?>
									<?php while ( have_rows('single_category') ) : the_row();?>	
									

										<li class="accordion-item" data-accordion-item>
											<a href="#" class="accordion-title"><h2><?php the_sub_field('category_name');?></h2></a>
										
											<div class="accordion-content big-copy" data-tab-content>
												
												<?php if( have_rows('sub_categories') ):?>
													<?php while ( have_rows('sub_categories') ) : the_row();?>	
													
														<?php if( have_rows('single_sub_category') ):?>
															<?php while ( have_rows('single_sub_category') ) : the_row();?>		
															
															<div class="single-sub-category">	
																
																<h3><?php the_sub_field('sub_category_name');?></h3>
												
																<?php if( have_rows('items') ):?>
																	<ul>
																	<?php while ( have_rows('items') ) : the_row();?>	
																	
																	<?php if( have_rows('single_item') ):?>
																		<?php while ( have_rows('single_item') ) : the_row();?>	
																		<li data-equalizer-watch>
																			<div class="top">
																				<span class="name"><?php the_sub_field('name');?></span>
																				<span class="price"><?php the_sub_field('price');?></span>
																			</div>
					
																			<div class="bottom">
																				<?php the_sub_field('description');?>
																			</div>
																		</li>
																		<?php endwhile;?>
																	<?php endif;?>
																
																	<?php endwhile;?>
																	</ul>
																<?php endif;?>
																
															</div>

														<?php endwhile;?>
													<?php endif;?>

													<?php endwhile;?>
												<?php endif;?>
												
											</div>
											
										</li>
									
									<?php endwhile;?>
								<?php endif;?>
								
								<?php endwhile;?>
							</ul>
							<?php endif;?>
							
						</div>
					</div>
				</section>			    	
			    					
			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>