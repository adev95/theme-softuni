<?php if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
} ?>
<div class="cars">
    <div class="cars-color">
<?php get_header(); ?>

<div class="container-fluid">
    
</div>

    <div class="d-flex align-items-center flex-column">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <h1><?php the_title(); ?></h1>    
      <?php endwhile;
      endif; ?>
    </div>

    <div class="content-cars container pt-5 pb-5">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <div class="content"><?php the_content(); ?></div>
                
        <?php endwhile;
        endif; ?>
    </div>

 <!-- Cars Section -->
 <section class="page-cars" id="cars">
    <div class="container">
      <h2 class="text-center mt-0">Данни за автомобила:</h2>
      <hr class="divider my-4">
      <div class="row">
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <i class="far fa-4x fa-calendar-alt text-primary mb-4"></i>
            <h3 class="h4 mb-2">Година:</h3>
            <p class="text-muted mb-0">
                  <?php
                    global $wp_query;
                    $postid = $wp_query->post->ID;
                    echo get_post_meta($postid, 'Година', true);
                    $text = apply_filters('the_excerpt', get_post_field('post_excerpt', $post_id-50));
                    echo $text;
                    wp_reset_query();
                  ?>
              </p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <i class="fas fa-4x fa-weight-hanging text-primary mb-4"></i>
            <h3 class="h4 mb-2">Тегло</h3>
              <p class="text-muted mb-0">
                  <?php
                    global $wp_query;
                    $postid = $wp_query->post->ID;
                    echo get_post_meta($postid, 'Тегло', true);
                    wp_reset_query();
                  ?>
              </p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <i class="fas fa-4x fa-car text-primary mb-4"></i>
            <h3 class="h4 mb-2">Мощност</h3>
            <p class="text-muted mb-0">
                  <?php
                    global $wp_query;
                    $postid = $wp_query->post->ID;
                    echo get_post_meta($postid, 'Мощност', true);
                    wp_reset_query();
                  ?>
              </p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
          <i class="fas fa-4x fa-gas-pump text-primary mb-4"></i>
            <h3 class="h4 mb-2">Разход на гориво</h3>
            <p class="text-muted mb-0">
                  <?php
                    global $wp_query;
                    $postid = $wp_query->post->ID;
                    echo get_post_meta($postid, 'Разход', true);
                    wp_reset_query();
                  ?>
              </p>
          </div>
        </div>
      </div>
    </div>
  </section>
    </div>
  </div>