<?php
/**
 * The Sidebar containing the main widget area.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

$options = twentyeleven_get_theme_options();
$current_layout = $options['theme_layout'];

if ( 'content' != $current_layout ) :
?>
<section class="blog_right">
      
      <section class="subscribe_row">
        <!--<form action="#">
          <fieldset>
            <input type="text" value="Enter your email" class="input">
            <input type="submit" value="Subscribe" class="subscribe_bth">
          </fieldset>
        </form>-->
         <?php if ( ! dynamic_sidebar( 'sidebar-8' ) ) : ?>
			<?php endif; // end sidebar widget area ?>
      </section>
     
       <?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
			<?php endif; // end sidebar widget area ?>
      
       <?php if ( ! dynamic_sidebar( 'sidebar-6' ) ) : ?>
			<?php endif; // end sidebar widget area ?>
      <h3>Latest Video</h3>
      <section class="small_video">
      <?php if ( ! dynamic_sidebar( 'sidebar-7' ) ) : ?>
			<?php endif; // end sidebar widget area ?>
      </section>
<!--      <section class="right_banner"><a href="#"><img src="<?php bloginfo('template_url');?>/common/images/right_banner.jpg" alt=""></a></section>
 -->    </section>

		<!--<div id="secondary" class="widget-area" role="complementary">
			<?php //if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
			<?php //endif; // end sidebar widget area ?>
		</div>--><!-- #secondary .widget-area -->
<?php endif; ?>