<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

?>

<section id="primary" class="content-area inner">
	<div id="main" class="site-main content" role="main">
		<?php if ( have_posts() ) : ?>
			
			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();
					global $post;
					do_action( 'freeio_service_detail_content', $post );
				// End the loop.
				endwhile;
			?>

		<?php else : ?>
			<div class="container">
				<?php get_template_part( 'content', 'none' ); ?>
			</div>
		<?php endif; ?>
	</div><!-- .site-main -->
</section><!-- .content-area -->
<?php get_footer(); ?>