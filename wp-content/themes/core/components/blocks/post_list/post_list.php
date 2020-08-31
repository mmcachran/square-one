<?php
declare( strict_types=1 );

use Tribe\Project\Templates\Components\blocks\post_list\Post_List_Controller;

/**
 * @var array $args Arguments passed to the template
 */
// phpcs:ignore VariableAnalysis.CodeAnalysis.VariableAnalysis.UndefinedVariable
$c = Post_List_Controller::factory( $args );
?>

<section <?php echo $c->get_classes(); ?> <?php echo $c->get_attrs(); ?>>
	<div <?php echo $c->get_container_classes(); ?>>

		<?php if ( ! empty( $c->get_header_args() ) ) { ?>
			<?php get_template_part(
				'components/content_block/content_block',
				null,
				$c->get_header_args()
			); ?>
		<?php } ?>
		<?php foreach ( $c->get_posts_card_args() as $card_args ) { ?>
			<?php get_template_part( 'components/card/card', null, $card_args ); ?>
		<?php } ?>
	</div>
</section>
