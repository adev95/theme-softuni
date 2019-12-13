<?php if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
} ?>
<div class="motocycles">
<?php get_header(); ?>

<!-- Page Content -->
<div class="container">
  <div class="card border-0 shadow my-5">
    <div class="card-body p-5">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <h1 class="font-weight-light"><?php the_title(); ?></h1>
      <div class="content"><?php the_content(); ?></div>
      <div style="height: 700px"></div>
    </div>
  </div>
</div>
<?php endwhile;
    endif; ?>
   
<?php get_footer(); ?>  
</div>