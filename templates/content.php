<article class="col-md-4" <?php post_class(); ?>>
  <header>
   <div class="title">
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      </div>
       <?php if ( has_post_thumbnail() ) {
	the_post_thumbnail(); } ?>

  </header>
  <div class="entry-summary">
    <?php the_excerpt(); ?>
  </div>
</article>
