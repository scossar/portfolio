<?php

use Roots\Sage\Config;
use Roots\Sage\Wrapper;
use Testeleven\PositionedContent\TemplateTags;

?>

<?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if lt IE 9]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <section class="splash-wrapper">
    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>
	    <div class="wrap container what-we-do" role="document">
        <div class="content row">
					<?php TemplateTags\post_in_position('quick-introduction', 'positioned_full', 1); ?>
	        <div class="action">
		        <a class="action-call" href="#">Try a Demonstration Site</a>
	        </div>
	        <div class="more-info">
		        <?php TemplateTags\post_in_position('find-out-more', 'positioned_content'); ?>
	        </div>
        </div><!-- /.content -->
      </div><!-- /.wrap -->
    </section><!-- /. splash-wrapper -->
    <section class="wrap container how-we-do-it" role="document">
	    <div class="content row">
		    <?php TemplateTags\post_in_position('what-we-can-do-for-you', 'positioned_title', 2); ?>
		    <div class="image-panel">
			    <?php TemplateTags\post_in_position('assess-the-organization', 'positioned_full', 3); ?>
			    <div class="image-panel-image">
			      <?php TemplateTags\post_in_position('assessment-image', 'positioned_image'); ?>
			    </div>
        </div>
		    <div class="image-panel">
			    <?php TemplateTags\post_in_position('build', 'positioned_full', 3); ?>
			    <div class="image-panel-image">
			      <?php TemplateTags\post_in_position('build-image', 'positioned_image'); ?>
			    </div>
        </div>
		    <div class="image-panel">
			    <?php TemplateTags\post_in_position('launch', 'positioned_full', 3); ?>
			    <div class="image-panel-image">
			      <?php TemplateTags\post_in_position('launch-image', 'positioned_image'); ?>
			    </div>
				</div>
		    <div class="image-panel">
			    <?php TemplateTags\post_in_position('you-fill-in-the-blanks', 'positioned_full', 3); ?>
			    <div class="image-panel-image">
			      <?php TemplateTags\post_in_position('fill-in-the-blanks-image', 'positioned_image'); ?>
			    </div>
		    </div>
	    </div>
    </section>
    <?php
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
</html>
