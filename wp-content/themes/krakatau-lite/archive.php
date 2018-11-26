<?php get_header(); ?>

		<div id="content-wrapper" class="wrapper">

			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>


					<?php if ( get_post_format() ) {
						get_template_part( 'inc/format/content', get_post_format() );
					} else {
						get_template_part( 'inc/format/content','single' );
					} ?>

				<?php endwhile; ?>

		</div><!-- wrapper -->

		<?php krakatau_lite_content_nav( 'nav-below' ); ?>


			<?php else : ?>
				<?php get_template_part( 'inc/format/content', 'no-result' ); ?>
			<?php endif; ?>


<?php get_footer(); ?>