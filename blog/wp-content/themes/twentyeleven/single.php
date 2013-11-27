<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

	<div class="wrapper" >

				<?php while ( have_posts() ) : the_post(); ?>
  <h2><span id="fall1_3"><?php the_title();?></span></h2>              
 <section class="blog_left">
        <ul class="blog_list">

					<?php get_template_part( 'content-single', get_post_format() ); ?>
					<?php userphoto_the_author_photo(); the_author(); echo '<br/>'; ?>
                    <?php  the_author_meta('description') ?> 
					<?php comments_template( '', true ); ?>

				<?php endwhile; // end of the loop. ?>
</ul>
</section>
<?php get_sidebar(); ?>
		</div><!-- #wrapper -->

<?php get_footer(); ?>