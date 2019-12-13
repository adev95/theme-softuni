<?php
if (!defined('ABSPATH')) exit;
global $sloganPlugin;
?>

<div class="d-flex align-items-center flex-column">
    <h1 class="slogan-title">
        <?php the_title(); ?>
    </h1>

    <div class="slogan-container">
        <p class="quotation-mark p-3">“</p>
            <div class="p-3">
                <?php echo $sloganPlugin->getOption('text');?> 
            </div>
        <hr>
            <div class="p-3">
                <?php echo $sloganPlugin->getOption('author'); ?>
            </div>
    </div>
</div>