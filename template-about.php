<?php
/*
Template Name: Contact About
*/
?>
<div class="about">
<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
</div>
