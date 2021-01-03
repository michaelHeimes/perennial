<?php
/**
 * Template part for displaying page content in page.php
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">
						
	<header class="article-header banner text-center">
		
		<?php if(!is_page_template('page-templates/page-contact.php')):?>
		
			<?php 
			$image = get_field('banner_image');
			if( !empty( $image ) ): ?>
			    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
			<?php endif; ?>
			
		<?php else:?>

			<h1 class="text-center"><?php the_title(); ?></h1>

		<?php endif;?>		
		
	</header> <!-- end article header -->
					
</article> <!-- end article -->