<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 */

get_header(); ?>
<div class="wrapper" >
    <h2><strong id="fall1">blog<?php //echo get_cat_name(2) ;?></strong> <span id="fall1_2"><?php  //echo category_description(2);?>Stay In Touch. Don’t Spam.</span></h2>
    <section class="blog_left">
      <ul class="blog_list">
      <?php query_posts(array('post_type' => 'post','orderby' => 'post_date','order' => 'DESC','post_status' => 'publish','showposts'=>3,'paged'=>$paged));
	  if(have_posts()): while(have_posts()): the_post();
	  
	 $postdata=get_page($post->ID);
	 $content=apply_filters('the_content',$postdata->post_content);
	  ?>
        <li>
          <section class="left_coll">
            <section class="date_box"><strong><?php the_time('M j'); ?></strong> <span><?php the_time('Y'); ?></span></section>
          </section>
          <section class="blog_content">
            <h3><a href="<?php the_permalink();?>"><?php the_title();?></a> </h3>
			<span>by <?php the_author();?><?php //the_category();?></span>
            
            <?php if ( comments_open() && ! post_password_required() ) : ?>
			
				 <small class="comment"><a href="<?php the_permalink();?>">	<?php comments_number( '0 ', '1 ', '% ' ); ?> </a></small>
			
			<?php endif; ?>
          <?php echo substr($content,0,300);?>...
          </section>
        </li>
        <?php endwhile; endif;?>
         
      </ul>
       <?php if(function_exists('wp_paginate')) {
		wp_paginate('nextpage=Next&previouspage=Prev');
	}; ?>
      
      <!--<ul class="paging">
        <li><a href="#">prev</a></li>
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li><a href="#">next</a></li>
      </ul>-->
    </section>
    
   <?php get_sidebar();?> 
    
  </div>
<?php get_footer(); ?>