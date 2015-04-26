<?php use Roots\Sage\Nav\NavWalker; ?>

<header class="banner navbar navbar-default navbar-static-top" role="banner">
  <div class="container">
    <div class="row">
      <div class="header-secondary hidden-xs">
        <?php get_template_part('templates/menu-secondary'); ?>
      </div>
      <div class="site-logo">
        <a href="<?php echo esc_url(home_url('/')); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/t11-logo-3.png"
               alt="testeleven web development"/>
        </a>
      </div>
      <div class="navbar-header">
        <div class="text-center">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only"><?= __('Toggle navigation', 'sage'); ?></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
      </div>

      <nav class="collapse navbar-collapse" role="navigation">
        <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new NavWalker(), 'menu_class' => 'nav navbar-nav']);
        endif;
        ?>
      </nav>
    </div>
  </div>
</header>
