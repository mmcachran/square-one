<?php
declare( strict_types=1 );

namespace Tribe\Project\Blocks\Types\Support;

use Tribe\Gutenpanels\Blocks\Block_Type_Interface;
use Tribe\Gutenpanels\Blocks\Sections\Content_Section;
use Tribe\Project\Blocks\Block_Type_Config;
use Tribe\Project\Blocks\Types\Icon_Grid;

class Icon_Grid_Card extends Block_Type_Config {
	public const NAME = 'tribe/icon-grid--card';

	public function build(): Block_Type_Interface {
		return $this->factory->block( self::NAME )
			->set_label( 'Card' )
			->set_dashicon( 'menu-alt' )
			->set_parents( Icon_Grid::NAME )
			->add_content_section( $this->content_area() )
			->build();
	}

	private function content_area(): Content_Section {
		$icon = $this->factory->content()->field()->image( Icon_Grid::ICON );

		$header = $this->factory->content()->field()->text( Icon_Grid::TITLE )
			->add_class( 'h2' );

		$content = $this->factory->content()->field()->richtext( Icon_Grid::CONTENT );

		$cta = $this->factory->content()->field()->link( Icon_Grid::CTA )
			->set_label( __( 'Call to Action', 'tribe' ) );

		return $this->factory->content()->section()
			->add_field( $icon->build() )
			->add_field( $header->build() )
			->add_field( $content->build() )
			->add_field( $cta->build() )
			->build();
	}

}
