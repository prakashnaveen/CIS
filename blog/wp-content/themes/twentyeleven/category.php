<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>
<div class="wrapper" >
<?php if ( have_posts() ) : ?>
    <h2><span id="fall1_3"><?php
						printf( __( '%s', 'twentyeleven' ),  single_cat_title( '', false ) );
					?></span></h2>
							<?php /* Start the Loop */ ?>
        <section class="blog_left">
        <ul class="blog_list">
				<?php while ( have_posts() ) : the_post(); 
                 $postdata1=get_page($post->ID);
	             $content1=apply_filters('the_content',$postdata1->post_content);?>

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
			<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'twentyeleven' ); ?></p>
			<?php get_search_form(); ?>
			</div><!-- .entry-content -->
				
</li></ul>
</section><!-- #content -->
			<?php endif;?>
            
 <?php get_sidebar();?> 
</div><!-- wrapper -->
<?php get_footer(); ?>
