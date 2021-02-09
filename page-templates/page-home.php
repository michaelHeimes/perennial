<?php 
/**
 * Template Name: Home Page
 *
 * This is the template that displays all pages by default.
 */

get_header(); ?>
	
	<div class="content">
	
		<div class="inner-content">
	
		    <main class="main" role="main">
			    			    
			    <section class="hero max">
				    
				    <?php if( have_rows('hero_slider') ):?>
				    <div class="hero-slider">
				    	<?php while ( have_rows('hero_slider') ) : the_row();?>	
				    	
				    	<?php if( have_rows('single_slide') ):?>
				    		<?php while ( have_rows('single_slide') ) : the_row();?>	
				    	
							<div class="single-slide">
								
								<div class="img-wrap">
									<?php 
									$image = get_sub_field('image');
									if( !empty( $image ) ): ?>
									    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
									<?php endif; ?>
								</div>
																
							</div>
				    	
				    		<?php endwhile;?>
				    	<?php endif;?>
				    
				    	<?php endwhile;?>
				    </div>
				    <?php endif;?>
				    
			    </section>	
			    	

<!--
				<?php if($copy = get_field('announcement_copy')):?>
				<section class="announcement-copy cream-bg big-copy">
					<div class="grid-container">
						<div class="grid-x grid-padding-x align-middle">
							<div class="cell small-12 text-center">
								<?php echo $copy;?>
							</div>
						</div>
					</div>
				</section>	
				<?php endif;?>	
-->	    

				<h1 class="show-for-sr"><?php the_title();?></h1>
			    
			    <section class="intro-copy">
				    <div class="grid-container">
						<div class="grid-x grid-padding-x">
							<div class="cell small-12 medium-10 medium-offset-1 large-8 large-offset-2 text-center">
						    	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/flower@2x.png" alt="prennial sketch"/>
						    	<h3 class="no-bp"><?php the_field('intro_copy');?></h3>
							</div>
						</div>
				    </div>
			    </section>				
			    	
			    
			    <section class="home-menu">
				    <div class="grid-container">
						<div class="grid-x grid-padding-x">		
							
							<div class="left fade-in-left cell small-12 medium-6 xxlarge-7"> 
								
								<?php if( have_rows('menu_image_slider') ):?>
								<div class="menu-slider click-right-slider">
									<?php while ( have_rows('menu_image_slider') ) : the_row();?>	
									<?php 
									$image = get_sub_field('single_slide');
									if( !empty( $image ) ): ?>
									<div>
									    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
									</div>
									<?php endif; ?>
									<?php endwhile;?>
								</div>
								<?php endif;?>
								
							</div>
							
							<div class="right fade-in-up cell small-12 medium-6 large-5 large-offset-1 xxlarge-4 xxlarge-offset-1">
								
								<h2><?php the_field('menu_heading');?></h2>
								
								<p class="big-copy"><?php the_field('menu_copy');?></p>
								
								<div class="menu-cat-wrap">
									<?php the_field('menu_categories');?>
								</div>
								
								<?php 
								$link = get_field('menu_link');
								if( $link ): 
								    $link_url = $link['url'];
								    $link_title = $link['title'];
								    $link_target = $link['target'] ? $link['target'] : '_self';
								    ?>
								    <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
								<?php endif; ?>
								
							</div>
				    
						</div>
				    </div>
			    </section>

			    
			    <section class="ig-feed">
				    <div class="grid-container">
						<div class="grid-x grid-padding-x">	
							
							<div class="copy-wrap fade-in-left cell small-12 medium-4">
								
								<h2><?php the_field('ig_heading');?></h2>
								<p class="big-copy"><?php the_field('ig_copy');?></p>		
								
								<a href="<?php the_field('instagram_url', 'option');?>" target="_blank">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram.svg" alt="instagram icon"/>
								</a>
								
							</div>
							
							<div class="fade-in cell small-12 medium-auto">
								
								<?php echo do_shortcode('[instagram-feed]');?>
								
							</div>
				    
						</div>
				    </div>
			    </section>
			    
			    
			    <section id="neighborhood" class="neighborhood">
				    <div class="grid-container">
						<div class="grid-x grid-padding-x">	

							<div class="img-wrap cell small-12 medium-4 tablet-6">
								<?php 
								$image = get_field('map_image');
								if( !empty( $image ) ): ?>
								    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
								<?php endif; ?>
							</div>
							
							<div class="text-wrap cell small-12 medium-8 tablet-6 text-center">
								
								<div class="grid-container">
								<div class="cream-bg grid-x grid-padding-x align-middle align-center">
									
									<div class="inner fade-in-up">
										<h2><?php the_field('directions_heading');?></h2>
										<p class="big-copy"><?php the_field('directions_copy');?></p>
										
										<?php 
										$link = get_field('directions_link');
										if( $link ): 
										    $link_url = $link['url'];
										    $link_title = $link['title'];
										    $link_target = $link['target'] ? $link['target'] : '_self';
										    ?>
										    <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
										<?php endif; ?>	
										
									</div>
								
	
								
								</div>
								</div>						
								
							</div>
							
						</div>
				    </div>
			    </section>
			    		    	
			    					
			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>