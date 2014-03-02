<?php get_header(); ?>

<div class="row">
  <div class="span8">
    <h1>RECENT POSTD</h1>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
    <p><?php the_excerpt(); ?></p>
    <a href="<?php the_permalink(); ?>" title="Read the rest of <?php the_title(); ?>
" class="more-link">Read the rest of this article »</a>
    <p><em><?php the_time('l, F jS, Y'); ?></em></p>
    <hr>

    <?php endwhile; else: ?>
      <p><?php _e('Sorry, there are no posts.'); ?></p>
    <?php endif; ?>

  </div>
  <div class="span4 ">

    <?php get_sidebar(); ?>   

  </div>
</div>

<?php get_footer(); ?>

