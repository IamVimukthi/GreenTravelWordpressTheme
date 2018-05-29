<?php
get_header();
?>
<div class="row" style=" margin-left:0px;">
  <div class="col-sm-8" style="margin-top:10px;">
<div class="post-body">
  <?php
if(have_posts()):
	while(have_posts()) :  the_post(); ?>
	<h2 class="single-post-title"><?php the_title(); ?></h2>
		<small><p><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></p></small>
		<p class="single-post-content"><?php the_content() ?> </p>
		 	<small><p class="postmetadata"><?php _e( 'Posted in','Green-travel-blog' ); ?> <?php the_category( ', ' ); ?></p></small>
			<?php the_tags() ?>
			
			<?php next_posts_link(); ?>
			
			
		 	<hr><b>Comments</b>
<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() ) :

                  comments_template( '', true );
                 

					
					  next_comments_link(); 
				endif; 
			?>
	<?php endwhile;
		else :
	     echo'<p>No content found</p>';
		 endif;
?>
</div>
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
<?php		
get_footer();
	?>
	
	