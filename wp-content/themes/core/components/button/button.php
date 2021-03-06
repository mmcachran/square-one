<?php
declare( strict_types=1 );

/**
 * @var array $args Arguments passed to the template
 */
// phpcs:ignore VariableAnalysis.CodeAnalysis.VariableAnalysis.UndefinedVariable
$c = \Tribe\Project\Templates\Components\button\Button_Controller::factory( $args );

if ( ! $c->has_content() ) {
	return;
}
?>
<button
	<?php echo $c->classes(); ?>
	<?php echo $c->attributes(); ?>
>
	<?php echo $c->content(); ?>
</button>
