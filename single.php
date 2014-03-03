<?php get_header(); ?>

<div class="row">
  <div class="span8">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<h3><?php the_title(); ?></h3>
		<p><em> written by <?php the_author(); ?> ,<?php the_time('l, F jS, Y'); ?> </em></p>
 
	  <p>	<?php the_content(); ?></p>
	  
	  <p>	<?php the_author(); ?></p>

	  	<hr>
	  	
	  	<div class="well">
		<?php comments_template(); ?>
</div>
	<?php endwhile; else: ?>
		<p><?php _e('Sorry, this page does not exist.'); ?></p>
	<?php endif; ?>

  </div>
  <div class="span4">
	<?php get_sidebar(); ?>  	
  </div>
</div>

<?php get_footer(); ?>
