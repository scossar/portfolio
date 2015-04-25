<?php use Testeleven\PositionedContent\TemplateTags; ?>
<div class="image-panel">
	<?php TemplateTags\post_in_position('about-us', 'positioned_full', 2); ?>
	<div class="image-panel-image">
		<?php TemplateTags\post_in_position('about-us-image', 'positioned_image') ?>
	</div>
</div>
<div class="image-panel">
	<?php TemplateTags\post_in_position('how-we-got-here', 'positioned_full', 2); ?>
	<div class="image-panel-image">
		<?php TemplateTags\post_in_position('how-we-got-here-image', 'positioned_image') ?>
	</div>
</div>
<div class="image-panel">
	<?php TemplateTags\post_in_position('why-this-makes-us-great', 'positioned_full', 2); ?>
	<div class="image-panel-image">
		<?php TemplateTags\post_in_position('why-this-makes-us-great-image', 'positioned_image') ?>
	</div>
</div>