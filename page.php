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
		
		<p class="single-post-content"><?php the_content() ?> </p>
				<small><p><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></p></small>
		 

<?php
 	$defaults = array(
		'before'           => '<p>' . __( 'Pages:','Green-travel-blog' ),
		'after'            => '</p>',
		'link_before'      => '',
		'link_after'       => '',
		'next_or_number'   => 'number',
		'separator'        => ' ',
		'nextpagelink'     => __( 'Next page','Green-travel-blog' ),
		'previouspagelink' => __( 'Previous page','Green-travel-blog' ),
		'pagelink'         => '%',
		'echo'             => 1
	);
 
        wp_link_pages( $defaults );

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
	
	