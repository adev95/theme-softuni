<?php if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
} ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
    <title>Blog</title>
</head>

<body <?php body_class(); ?>>
    <header>

    <!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow fixed-top">
  <div class="container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <?php  
            $menu_items = wp_get_nav_menu_items('menu');
            $menu_list;
 
            foreach( $menu_items as $menu_item ) {
                
                $link = $menu_item->url;
                $title = $menu_item->title;
                
                $menu_list .= '<li class="nav-item">'."\n";
                $menu_list .= '<a class="nav-link" href="'.$link.'">'.$title.'</a>'."\n";
                $menu_list .= '</li>'."\n";
                
            }

            echo $menu_list;
        
        ?>
        

      </ul>
    </div>
  </div>
</nav>    

    </header>