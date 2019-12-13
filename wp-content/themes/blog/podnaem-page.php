  <?php if (!defined('ABSPATH')) {
      exit; // Exit if accessed directly.
  } ?>

  <?php
  /**
   * Template name: Pod_naem page
   */
  ?>

  <?php get_header(); ?>

  <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4"><?php the_title(); ?></h1>
    <div class="content"><?php the_content(); ?></div>
  </div>

<div class="container">
  <div class="card-deck mb-3 text-center">
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Ауди А4</h4>
      </div>
      <div class="card-body">
      <h1 class="card-title pricing-card-title">
           
           <?php
             global $wp_query;
             $postid = 50;
             echo get_post_meta($postid, 'Наем-ден', true);
             wp_reset_query();
           ?>
       
         <small class="text-muted">/ ден</small></h1>
     <ul class="list-unstyled mt-3 mb-4">
   <hr>
     <li>
         <p>
           Годинa:
         </P>

         <p> 
           <?php
             global $wp_query;
             $postid = 50;
             echo get_post_meta($postid, 'Година', true);
             wp_reset_query();
           ?>
         </p>
     </li>
 <hr>
     <li>
         <p>
           Moщност:
         </P>

         <p> 
           <?php
             global $wp_query;
             $postid = 50;
             echo get_post_meta($postid, 'Мощност', true);
             wp_reset_query();
           ?>
         </p>
     </li>
 <hr>
     <li>
         <p>
           Тегло:
         </P>

         <p> 
           <?php
             global $wp_query;
             $postid = 50;
             echo get_post_meta($postid, 'Тегло', true);
             wp_reset_query();
           ?>
         </p>
     </li> 
 <hr>
     <li>
         <p>
           Разход:
         </P>

         <p> 
           <?php
             global $wp_query;
             $postid = 50;
             echo get_post_meta($postid, 'Разход', true);
             wp_reset_query();
           ?>
         </p>
     </li>
 <hr>
     </ul>
        <button type="button" class="btn btn-lg btn-block btn-primary" onclick="window.location.href='<?php echo get_permalink(50)?>'">Разгледай</button>
      

        <!-- New car -->

      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Ауди А6</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">
           
              <?php
                global $wp_query;
                $postid = 81;
                echo get_post_meta($postid, 'Наем-ден', true);
                wp_reset_query();
              ?>
          
            <small class="text-muted">/ ден</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
      <hr>
        <li>
            <p>
              Годинa:
            </P>

            <p> 
              <?php
                global $wp_query;
                $postid = 81;
                echo get_post_meta($postid, 'Година', true);
                wp_reset_query();
              ?>
            </p>
        </li>
    <hr>
        <li>
            <p>
              Moщност:
            </P>

            <p> 
              <?php
                global $wp_query;
                $postid = 81;
                echo get_post_meta($postid, 'Мощност', true);
                wp_reset_query();
              ?>
            </p>
        </li>
    <hr>
        <li>
            <p>
              Тегло:
            </P>

            <p> 
              <?php
                global $wp_query;
                $postid = 81;
                echo get_post_meta($postid, 'Тегло', true);
                wp_reset_query();
              ?>
            </p>
        </li> 
    <hr>
        <li>
            <p>
              Разход:
            </P>

            <p> 
              <?php
                global $wp_query;
                $postid = 81;
                echo get_post_meta($postid, 'Разход', true);
                wp_reset_query();
              ?>
            </p>
        </li>
    <hr>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-primary" onclick="window.location.href='<?php echo get_permalink(81)?>'">Разгледай</button>
      </div>
    </div>

    <!-- New car -->

    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Ауди А8</h4>
      </div>
      <div class="card-body">
      <h1 class="card-title pricing-card-title">
           
           <?php
             global $wp_query;
             $postid = 83;
             echo get_post_meta($postid, 'Наем-ден', true);
             wp_reset_query();
           ?>
       
         <small class="text-muted">/ ден</small></h1>
     <ul class="list-unstyled mt-3 mb-4">
   <hr>
     <li>
         <p>
           Годинa:
         </P>

         <p> 
           <?php
             global $wp_query;
             $postid = 83;
             echo get_post_meta($postid, 'Година', true);
             wp_reset_query();
           ?>
         </p>
     </li>
 <hr>
     <li>
         <p>
           Moщност:
         </P>

         <p> 
           <?php
             global $wp_query;
             $postid = 83;
             echo get_post_meta($postid, 'Мощност', true);
             wp_reset_query();
           ?>
         </p>
     </li>
 <hr>
     <li>
         <p>
           Тегло:
         </P>

         <p> 
           <?php
             global $wp_query;
             $postid = 83;
             echo get_post_meta($postid, 'Тегло', true);
             wp_reset_query();
           ?>
         </p>
     </li> 
 <hr>
     <li>
         <p>
           Разход:
         </P>

         <p> 
           <?php
             global $wp_query;
             $postid = 83;
             echo get_post_meta($postid, 'Разход', true);
             wp_reset_query();
           ?>
         </p>
     </li>
 <hr>
     </ul>
          <button type="button" class="btn btn-lg btn-block btn-primary" onclick="window.location.href='<?php echo get_permalink(83)?>'">Разгледай</button>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>