<?php
/**
 * The template for displaying the footer. 
 *
 * Comtains closing divs for header.php.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */			
 ?>
					
				<footer class="footer" role="contentinfo">
					
					<?php if( $page_link = get_field('fwcta_page_link') ):?>					
					<div class="pre-footer">
						<div class="grid-container">
							<div class="grid-x grid-padding-x">
								<div class="cell small-12 medium-8 medium-offset-2 text-center">
									
									<a class="arrow-link" href="<?php echo $page_link;?>">
										<h2><?php the_field('fwcta_text');?><img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-right-white.svg"/></h2>
									</a>
								
								</div>
							</div>
						</div>
					</div>
					<?php endif;?>
					
					<div class="inner-footer">
						<div class="grid-container">
							<div class="grid-x grid-padding-x">		
								
								<div class="cell small-12 medium-6 large-4">
									<?php 
									$image = get_field('footer_logo', 'option');
									if( !empty( $image ) ): ?>
									    <img class="footer-logo" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
									<?php endif; ?>
									
									<div class="address">
										<?php the_field('address', 'option');?>
										
										<p>
											<a href="tel:<?php the_field('phone_number', 'option');?>">T. <?php the_field('phone_number', 'option');?></a>
										</p>
											
										<p class="email-wrap">
											<a href="mailto:<?php the_field('email_address', 'option');?>">E. <?php the_field('email_address', 'option');?></a>
										</p>
										
										<div class="grid-x grid-padding-x">
											<div class="cell shrink">
												<a href="<?php the_field('facebook_url', 'option');?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook.svg"/></a>
											</div>
											<div class="cell shrink">
												<a href="<?php the_field('instagram_url', 'option');?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram-white.svg"/></a>
											</div>
											<div class="cell shrink">
												<a href="mailto:<?php the_field('email_address', 'option');?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/email.svg"/></a>
											</div>											
										</div>
										
									</div>
									
								</div>

								<div class="cell small-12 tablet-6 large-3 large-offset-1">

									<div class="grid-x grid-padding-x">
										
										<div class="hours-wrap cell small-12">
											<?php the_field('dinner_hours', 'option');?>
										</div>											

										<div class="hours-wrap cell small-12">
											<?php the_field('lunch_hours', 'option');?>
										</div>	
									
									</div>
												
								</div>
						
								<div class="cell small-12 medium-6 large-3 large-offset-1">
									<nav role="navigation">
			    						<?php joints_footer_links(); ?>
			    					</nav>
			    					
			    					<div class="divider"></div>
			    					
			    					<div class="name"><?php bloginfo('name'); ?></div>
			    					
			    				</div>
							
								
							</div>
						</div>
					</div> <!-- end #inner-footer -->
					
					<div class="post-footer">
						<div class="grid-container">
							<div class="grid-x grid-padding-x align-justify">		

								<div class="small-12 medium-shrink cell">
									<p class="source-org copyright">&copy; Copyright <?php echo date('Y'); ?> Prennial.</p>
								</div>

								<div class="small-12 medium-shrink cell">
									<p class="source-org copyright"><a href="https://proprdesign.com/" target="_blank">Made by Propr Design</a></p>
								</div>
								
							</div>
						</div>
					</div>
				
				</footer> <!-- end .footer -->
			
			</div>  <!-- end .off-canvas-content -->
					
		</div> <!-- end .off-canvas-wrapper -->
		
		<?php wp_footer(); ?>
		
	</body>
	
</html> <!-- end page -->