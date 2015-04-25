<?php
namespace Testeleven\Testeleven\Promotions;

function display_promotions() {
	$args  = array(
		'post_type' => 'promotion',
	);
	$query = new \WP_Query($args);
	?>
	<?php if ($query->have_posts()) : ?>
		<?php while ($query->have_posts()) : $query->the_post(); ?>
			<div class="promotion-entry editable">
				<header class="entry-header">
					<h2><?php the_title(); ?></h2>
					<?php if ($duration = get_field('promotion_duration')) : ?>
						<div class="promotion-duration">
							<?php echo $duration; ?>
						</div>
					<?php endif; ?>
				</header>
				<div class="entry-content">
					<?php the_content(); ?>
					<!--					--><?php //if (have_rows('promotion_prices')) : ?>
					<!--						<table class="table">-->
					<!--							<div class="promotion-prices">-->
					<!--								--><?php //while (have_rows('promotion_prices')) : the_row(); ?>
					<!--									--><?php //$promotion_price = get_sub_field('price') ? get_sub_field('price') : '<strong>FREE</strong>'; ?>
					<!--									--><?php //$promotion_name = get_sub_field('product_name'); ?>
					<!--									<tr>-->
					<!--										<td>-->
					<?php //echo $promotion_name; ?><!--</td>-->
					<!--										<td>-->
					<?php //echo $promotion_price; ?><!--</td>-->
					<!--									</tr>-->
					<!--								--><?php //endwhile; ?>
					<!--							</div>-->
					<!--						</table>-->
					<!--					--><?php //endif; ?>
				</div>
			</div>
			<?php if ($contact_form = get_field('promotion_contact')) : ?>
				<div class="promotion-contact">
					<header>
						<?php $title = "Contact us about <em>'" . get_the_title() . "'</em>" ?>
						<h3><?php echo $title; ?></h3>
					</header>
					<?php gravity_form($contact_form, false, false, false, '', false); ?>
				</div>
			<?php endif; ?>
		<?php endwhile; ?>
	<?php endif; ?>
	<?php
	wp_reset_postdata();
}