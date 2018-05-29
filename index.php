<?php get_header(); ?>
<div class="row" style=" margin-left:0px;">
  <div class="col-sm-8" style="margin-top:10px;">
  <!-- Start the Loop. -->
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php if ( in_category( '3' ) ) : ?>
 		<div class="post-cat-three">
 	<?php else : ?>
 		<div class="post">
 	<?php endif; ?>
 	<!-- Display the Title as a link to the Post's permalink. -->
<div class="post-body">
    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
 	<h3 class="title-link"><a class="title-link" href="<?php the_permalink(); ?>" rel="bookmark" title=" <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
<div class="row">
    <div class="col-sm-4">
    <?php
	if ( has_post_thumbnail() ) {
    the_post_thumbnail();
}
	?>
	</div>
	<div class="col-sm-7">
 	<small><p><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></p></small>
<div class="entry">
 		<p> <?php echo wp_trim_words( get_the_content(), 45 ); ?> </p>
	</div>
		 	<small><p class="postmetadata"><?php _e( 'Posted in', 'Green-travel-blog' ); ?> <?php the_category( ', ' ); ?></p></small>
<a class="title-link" href="<?php the_permalink(); ?>" rel="bookmark" title=" <?php the_title_attribute(); ?>"><button class=" btn btn-info read-more-button"> Read More</button></a>
	</div></div>
</div>    
  </div>
	</div> <!-- closes the first div box -->
		<!-- Stop The Loop (but note the "else:" - see next line). -->
<?php endwhile; else : ?>

     <!-- The very first "if" tested to see if there were any Posts to -->
 	<!-- display.  This "else" part tells what do if there weren't any. -->
 	<p><?php _e( 'Sorry, no posts matched your criteria.', 'Green-travel-blog' ); ?></p>
    <!-- REALLY stop The Loop. -->
 <?php endif; ?>
<?php if (function_exists("pagination")) {
    pagination($additional_loop->max_num_pages);
} ?>
 </div>
    <div class="col-sm-4 search-f">
  <?php get_search_form(); ?>
  <div class="" >
  <!--Side bar area-->
  <div  class="wid">
   <?php get_template_part('sidebar'); ?>
  </div> 
  </div> 
  </div>
  </div> 
  </div>
</div>
<?php get_footer(); ?>




