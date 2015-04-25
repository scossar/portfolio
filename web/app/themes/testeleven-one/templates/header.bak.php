<?php use Roots\Sage\Nav; ?>

<header class="banner navbar navbar-default navbar-static-top" role="banner">
  <div class="container">
    <div class="navbar-header">
<!--      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">-->
<!--        <span class="sr-only">--><?//= __('Toggle navigation', 'sage'); ?><!--</span>-->
<!--        <span class="icon-bar"></span>-->
<!--        <span class="icon-bar"></span>-->
<!--        <span class="icon-bar"></span>-->
<!--      </button>-->
	    <div class="logo">
		    <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>">
			    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/t11-logo.png"
			         alt="testeleven web development"/>
		    </a>
	    </div>
    </div>

<!--    <nav class="collapse navbar-collapse" role="navigation">-->
	   <nav role="navigation">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation',
                     'walker' => new Nav\SageNavWalker(), 'menu_class' => 'nav nav-tabs']);
      endif;
      ?>
    </nav>
  </div>
</header>
