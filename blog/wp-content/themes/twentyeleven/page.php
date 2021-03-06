<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
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

					<?php get_template_part( 'content', 'page' ); ?>

					<?php //comments_template( '', true ); ?>

				<?php endwhile; // end of the loop. ?>
</ul>
</section>
<?php get_sidebar(); ?>
		</div><!-- #wrapper -->

<?php get_footer(); ?>
		