    <div class="jumbotron">

                <h1>At Duarte &amp; Obolensky<br> we fight for you.</h1>
                <p>Put the law office of Duarte &amp; Obolensky to work for you. Our legal team has the knowledge and experience to fight for your rights.</p>
                <p><a href="/about/" >Learn more &raquo;</a></p>
            </div>

<div class="news clearfix">
<?php get_template_part('templates/page', 'header'); ?>

<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'roots'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', get_post_format()); ?>
<?php endwhile; ?>

</div>

<section class="carousel">
<!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img src="<?php bloginfo('template_url'); ?>/assets/img/dolaw-1.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
            <h1 class="maa">Nicholas Obolensky &amp; Jesse Duarte</h1>
            </div>
          </div>
        </div>
         <div class="item">
        <img src="<?php bloginfo('template_url'); ?>/assets/img/dolaw-3.jpg" alt="Third slide">
                     <div class="container">
            <div class="carousel-caption">
              <h1>Auto Accidents.</h1>
              <p>We work tirelessly to make you whole.</p>
            </div>
          </div>
        </div>
        <div class="item">
        <img src="<?php bloginfo('template_url'); ?>/assets/img/dolaw-2.jpg" alt="Second slide">
                     <div class="container">
            <div class="carousel-caption">
              <h1>Family Law</h1>
              <p>We balance reason and compassion.</p>
            </div>
          </div>
        </div>
        <div class="item">
        <img src="<?php bloginfo('template_url'); ?>/assets/img/dolaw-4.jpg" alt="Second slide">
                     <div class="container">
            <div class="carousel-caption">
              <h1>Criminal Defense</h1>
              <p></p>
            </div>
          </div>
        </div>

      </div>
     <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->
    </section>
