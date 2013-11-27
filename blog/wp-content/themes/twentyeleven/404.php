<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>
<div class="wrapper" >
<h2><span id="fall1_3"><?php _e( 'This is somewhat embarrassing, isn&rsquo;t it?', 'twentyeleven' ); ?></span></h2>
<section class="blog_left">
				<div class="entry-content">
				<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching, or one of the links below, can help.', 'twentyeleven' ); ?></p>

				<?php get_search_form(); ?>
					<?php
					/* translators: %1$s: smilie */
					$archive_content = '<p>' . sprintf( __( 'Try looking in the monthly archives. %1$s', 'twentyeleven' ), convert_smilies( ':)' ) ) . '</p>';
					the_widget( 'WP_Widget_Archives', array('count' => 0 , 'dropdown' => 1 ), array( 'after_title' => '</h2>'.$archive_content ) );
					?>

					<?php //the_widget( 'WP_Widget_Tag_Cloud' ); ?>

				</div><!-- .entry-content -->
	</section>	
<?php get_sidebar();?> 
	</div><!--#wrapper-->

<?php get_footer(); ?>