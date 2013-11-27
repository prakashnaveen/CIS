<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

<div class="wrapper" >

			<?php if ( have_posts() ) : ?>

				<h2><span id="fall1_3"><?php printf( __( 'Search Results for: %s', 'twentyeleven' ), '<span>' . get_search_query() . '</span>' ); ?></span></h2>
<section class="blog_left">				
			
	  <ul class="blog_list">		
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php
						/* Include the Post-Format-specific template for the content.
						 * If you want to overload this in a child theme then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'content', get_post_format() );
					?>

				<?php endwhile; ?>

				</ul>
</section><!-- #content -->
			<?php else : ?>

				
					<h2><span id="fall1_3"><?php _e( 'Nothing Found', 'twentyeleven' ); ?></span></h2>
	      <section class="blog_left">
            <ul class="blog_list">	
            <li>
					<div class="entry-content">
						<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'twentyeleven' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				</li></ul>
</section><!-- #content -->
		<?php endif; ?>

			
<?php get_sidebar(); ?>            
		</div><!-- #primary -->


<?php get_footer(); ?>