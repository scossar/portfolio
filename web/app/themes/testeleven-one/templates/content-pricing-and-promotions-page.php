<?php
use Testeleven\Testeleven\Promotions;
use Testeleven\PositionedContent\TemplateTags;
?>

<?php Promotions\display_promotions(); ?>
<?php TemplateTags\post_in_position('pricing-information', 'positioned_full', 2); ?>