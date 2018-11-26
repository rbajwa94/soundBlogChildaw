<?php get_header(); ?>

		<div id="content-wrapper" class="wrapper">


		<?php while ( have_posts() ) : the_post(); 
		
			if ( get_post_format() ) {
				get_template_part( 'inc/format/content', get_post_format() );
			} 
			else {
				get_template_part( 'inc/format/content', 'single' );
			}

			krakatau_lite_comment_reply();
			if ( comments_open() || '0' != get_comments_number() ) comments_template(); 

		endwhile; // end of the loop. ?>		


		</div><!-- wrapper -->
		
<?php get_footer(); ?>