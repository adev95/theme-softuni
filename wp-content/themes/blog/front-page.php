<?php if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
} ?>

<?php get_header(); ?>

<header class="masthead">
  <div class="container h-100">
    <div class="row h-100 align-items-center">
      <div class="col-12 text-center">
        <h1 class="font-weight-light">Здравейте!</h1>
        <p class="lead">Това е моята първа тема с Wordpress и Bootstrap!</p>
      </div>
    </div>
  </div>
</header>

<hr>
<!-- Page Content -->
<section class="py-5">
  <div class="container">
    <h2 class="font-weight-light">Добре дошли!</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus ab nulla dolorum autem nisi officiis blanditiis voluptatem hic, assumenda aspernatur facere ipsam nemo ratione cumque magnam enim fugiat reprehenderit expedita.</p>
    <hr>
  </div>
</section>

<div id="circles "class="container">

  <div class="row">
      <div class="col-lg-4">
        <div class="photo_icons" style="background-image: url('<?php echo get_the_post_thumbnail_url(50)?>')"></div>
        <h3> <?php echo get_the_title(50);?> </h3>
        <p> <?php echo get_the_excerpt(50);?> </p>
        <button type="button" class="btn btn-block" onclick="window.location.href='<?php echo get_permalink(50)?>'">Прочети повече</button>
      </div>

      <div class="col-lg-4">
          <div class="photo_icons"  style="background-image: url('<?php echo get_the_post_thumbnail_url(81)?>')"></div>
          <h3> <?php echo get_the_title(81);?> </h3>
          <p> <?php echo get_the_excerpt(81);?> </p>
          <button type="button" class="btn btn-block" onclick="window.location.href='<?php echo get_permalink(81)?>'">Прочети повече</button>
      </div>

      <div class="col-lg-4">
          <div class="photo_icons" style="background-image: url('<?php echo get_the_post_thumbnail_url(83)?>')"></div>
          <h3> <?php echo get_the_title(83);?> </h3>
          <p> <?php echo get_the_excerpt(83);?> </p>
          <button type="button" class="btn btn-block" onclick="window.location.href='<?php echo get_permalink(83)?>'">Прочети повече</button>
      </div>
  </div>
</div>

<div class="container">

<hr>

<h1 class="centered"> ПОСЛЕДНИ ПУБЛИКАЦИИ</h1>

<hr>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <div class="content"><?php the_content(); ?></div>
    <?php endwhile;
    endif; ?>
</div>

<?php get_footer(); ?>