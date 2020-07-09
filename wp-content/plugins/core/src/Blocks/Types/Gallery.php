<?php
declare( strict_types=1 );

namespace Tribe\Project\Blocks\Types;

use Tribe\Gutenpanels\Blocks\Block_Type_Interface;
use Tribe\Gutenpanels\Blocks\Sections\Content_Section;
use Tribe\Gutenpanels\Blocks\Sections\Sidebar_Section;
use Tribe\Project\Blocks\Block_Type_Config;

class Gallery extends Block_Type_Config {

	public const NAME = 'tribe/gallery';

	public const IMAGES          = 'images';
	public const TITLE           = 'title';
	public const DESCRIPTION     = 'description';
	public const LAYOUT          = 'layout';
	public const LAYOUT_GRID     = 'layout-grid';
	public const LAYOUT_MODAL    = 'layout-modal';
	public const LAYOUT_CAROUSEL = 'layout-carousel';

	public function build(): Block_Type_Interface {
		return $this->factory->block( self::NAME )
			->set_label( __( 'Gallery', 'tribe' ) )
			->add_class( 'c-panel c-panel--gallery' )
			->add_data_source( 'className-c-panel', self::LAYOUT )
			->set_dashicon( 'menu-alt' )
			->add_sidebar_section( $this->background_sidebar() )
			->add_content_section( $this->content_area() )
			->build();
	}

	private function background_sidebar(): Sidebar_Section {
		return $this->factory->sidebar()->section()
			->set_label( __( 'Layout Settings', 'tribe' ) )
			->add_field(
				$this->factory->sidebar()->field()->image_select( self::LAYOUT )
					->add_option( self::LAYOUT_GRID, __( 'Grid', 'tribe' ), 'editor-alignleft' )
					->add_option( self::LAYOUT_MODAL, __( 'Modal', 'tribe' ), 'editor-aligncenter' )
					->add_option( self::LAYOUT_CAROUSEL, __( 'Carousel', 'tribe' ), 'editor-aligncenter' )
					->set_default( self::LAYOUT_GRID )
					->build()
			)
			->build();
	}

	private function content_area(): Content_Section {
		return $this->factory->content()->section()
			->add_class( 'gallery__content gallery__content-container' )
			->add_field(
				$this->factory->content()->field()->text( self::TITLE )
					->set_label( __( 'Title', 'tribe' ) )
					->set_placeholder( 'Gallery Title' )
					->add_class( 'gallery__title h1' )
					->build()
			)
			->add_field(
				$this->factory->content()->field()->richtext( self::DESCRIPTION )
					->set_label( __( 'Description', 'tribe' ) )
					->add_class( 'gallery__description t-sink s-sink' )
					->build()
			)
			->add_field(
				$this->factory->content()->field()->gallery( self::IMAGES )
					->set_label( __( 'Images', 'tribe' ) )
					->add_class( 'gallery__images' )
					->build()
			)
			->build();
	}

}
