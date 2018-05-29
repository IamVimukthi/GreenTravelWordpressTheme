<?php 
get_header();


if(have_posts()): ?>

<h4>Search result for:<b> <?php the_search_query();?></b> </h4>


<?php while ( have_posts() ) : the_post(); ?>

 	<?php if ( in_category( '3' ) ) : ?>
 		<div class="post-cat-three">
 	<?php else : ?>
 		<div class="post">
 	<?php endif; ?>


 	<!-- Display the Title as a link to the Post's permalink. -->
<div class="post-body">

 	<h2 class="title-link"><a class="title-link" href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>




 	<small><p><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></p></small>

 	<div class="entry">
 		<?php the_content(); ?>
 	</div>

 	<p class="postmetadata"><?php _e( 'Posted in', 'Green-travel-blog' ); ?> <?php the_category( ', ' ); ?></p>
 	</div>
 	</div> <!-- closes the first div box -->

 <?php endwhile; else : ?>

 	<p><?php _e( 'Sorry, no posts matched your criteria.', 'Green-travel-blog' ); ?></p>


 	<!-- REALLY stop The Loop. -->
 <?php endif; ?>
  

<?php
get_footer();
?>
