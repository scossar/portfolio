<?php
namespace Testeleven\Testeleven\Portfolio;
use Roots\Sage\Utils;

function display_portfolio_entries() {
	$args = array(
		'post_type' => 'portfolio_entry',
	);
	$query = new \WP_Query($args);
	?>
	<?php if ($query->have_posts()) : ?>
		<?php $count = 0; ?>
		<?php while ($query->have_posts()) : $query->the_post(); ?>
			<div class="portfolio-entry editable">
				<?php $title = get_the_title(); ?>
				<?php // If there is a url we want to link the title to it ?>
				<?php if ($url = get_field('portfolio_url')) : ?>
					<header class="content-header">
						<h2>
							<a href="<?php echo $url; ?>"><?php echo $title; ?></a>
						</h2>
					</header>
				<?php else : ?>
				  <header>
					  <h2><?php echo $title; ?></h2>
				  </header>
				<?php endif; ?>
				<div class="entry-content">
					<?php the_field('portfolio_description'); ?>
					<?php if ($url) : ?>
						<div class="visit-site">
							See the full <a href="<?php echo $url; ?>"><?php echo $title; ?></a> site.
						</div>
					<?php endif; ?>
				</div>
				<?php display_carousel($count); ?>
				<?php if (!is_preview()) : ?>
					<div class="edit-post"><?php edit_post_link(); ?></div>
				<?php endif; ?>
			</div>
			<?php $count = $count + 1; ?>
		<?php endwhile; ?>
	<?php endif; ?>
<?php
	wp_reset_postdata();
}

// Creates a sub-loop of portfolio images
function display_carousel($entry_count, $indicators = false) {
	?>
	<?php if (have_rows('portfolio_images')) : ?>
	  <?php $image_count = 0; ?>
		<div id="portfolio-carousel-<?php echo $entry_count; ?>" class="carousel slide"
			data-ride="carousel" data-interval="false">
			<?php if ($indicators) : ?>
		  <ol class="carousel-indicators">
			  <?php while (have_rows('portfolio_images')) : the_row(); ?>
				  <li data-target="#portfolio-carousel-<?php echo $entry_count; ?>"
					  data-slide-to="<?php echo $image_count; ?>"
					  class="<?php add_active($image_count); ?>"></li>
				  <?php $image_count = $image_count + 1; ?>
			  <?php endwhile; ?>
			  <?php $image_count = 0; ?>
		  </ol>
			<?php endif; ?>
			<div class="carousel-inner" role="listbox">
				<?php while (have_rows('portfolio_images')) :the_row(); ?>
					<?php $image = get_sub_field('portfolio_image'); ?>
					<div class="item <?php add_active($image_count); ?>">
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
						<div class="image-caption"><?php // Add image caption here ?></div>
					</div>
					<?php $image_count = $image_count + 1; ?>
				<?php endwhile; ?>
			</div>
			<a class="left carousel-control" role="button" data-slide="prev"
			   href="#portfolio-carousel-<?php echo $entry_count; ?>">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" role="button" data-slide="next"
			   href="#portfolio-carousel-<?php echo $entry_count; ?>">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	<?php endif; ?>
<?php
}

function add_active($count) {
	if ($count == 0) {
		echo 'active';
	}
}