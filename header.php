<?php

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Howling Mad</title>
    <?php wp_head(); ?>
</head>
<body>
<header class="site-header">
    <div class="logo">
        <a href="<?php echo esc_url(home_url('/') ); ?>">
            <img src="<?php echo get_template_directory_uri();?>/images/logo.png" alt="Howling Mad Press logo" class="logoImg">
        </a>
    </div><!-- end .logo -->
    
    <!-- Social Menu -->
        <?php 
            $args1 = array (
                'theme_location' => 'social-menu',
                 'container' => 'nav',
                 'container_class' => 'social',
                 'container_id' => 'social',
                'link_before' => '<span class="sr-text">',
                'link_after' => '</span>'
            );
            wp_nav_menu($args1);
        ?>
    <!-- end .social -->
    <section class="site-branding">
          <div class="site-title">
              <h1><a href="<?php bloginfo('url');?>"><?php bloginfo('name'); ?> </a></h1>
          </div>

          <div class="site-description">
              <h2><?php bloginfo('description'); ?></h2>
          </div>
    </section> <!-- end .site-branding -->
    
   <!-- Main Header Menu  -->
        <?php 
            $args = array(
                'theme_location' => 'primary-menu',
                'container' => 'nav',
                'container_class' => 'site-nav'
            );
            wp_nav_menu($args);
        ?>
    <!-- end .site-nav -->
    
</header>

        