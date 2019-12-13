<?php
if (!defined('ABSPATH')) exit;
global $sloganPlugin;
?>

<div class="slogan-container wrapper">
        <h1><?php echo esc_html(get_admin_page_title()); ?></h1> 


        <form method="post" action="<?php echo esc_html(admin_url('admin-post.php')); ?>">
        <input class="text-box"type="hidden" name="slogan-admin-form" value="1" />
                <div class="information">
                   <h2><?php _e('Лозунг на месеца:'); ?></h2>
                        <p>
                            <label><?php _e('Лозунг:'); ?></label><br />
                            <textarea class="text-box" name="text" style="width:600px;"><?php echo $sloganPlugin->getOption('text'); ?></textarea>
                        </p>
                        <p>
                            <label><?php _e('Автор:'); ?></label><br />
                            <textarea class="text-box" name="author"><?php echo $sloganPlugin->getOption('author'); ?></textarea>
                        </p>
                </div>
 
        <?php
        wp_nonce_field('slogan-save', 'slogan-message');
        submit_button(); ?>  
    </form>
</div>