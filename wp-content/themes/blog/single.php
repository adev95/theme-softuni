<?php if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
} ?>

<?php get_header(); ?>

<div class="container pt-5 pb-5">
    <p>single.php</p> // Just to know where is loaded
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <div class="content"><?php the_content(); ?>
                <p>Today's Mood:<p>
            </div>
            <p>Today's Mood:<p>
                    <p> <?php echo get_post_meta($post->ID, 'Mood', true); ?></p>

            <?php endwhile;
            endif; ?>
            <p>Today's Mood:<p>
                    <?php
                    global $wp_query;
                    $postid = $wp_query->post->ID;
                    echo get_post_meta($postid, 'Mood', true);
                    wp_reset_query();
                    ?>
</div>
<?php get_footer(); ?>