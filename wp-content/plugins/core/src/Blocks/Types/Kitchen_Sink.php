<?php
declare( strict_types=1 );

namespace Tribe\Project\Blocks\Types;

use Tribe\Gutenpanels\Blocks\Block_Type_Interface;
use Tribe\Gutenpanels\Blocks\Sections\Content_Section;
use Tribe\Gutenpanels\Blocks\Sections\Sidebar_Section;
use Tribe\Gutenpanels\Blocks\Sections\Toolbar_Section;
use Tribe\Project\Blocks\Block_Type_Config;

class Kitchen_Sink extends Block_Type_Config {
	public const NAME = 'tribe/kitchen-sink';

	public function build(): Block_Type_Interface {
		return $this->factory->block( self::NAME )
			->set_label( 'Kitchen Sink' )
			->set_dashicon( 'menu-alt' )
			->add_sidebar_section( $this->sidebar_selects() )
			->add_sidebar_section( $this->sidebar_images() )
			->add_sidebar_section( $this->sidebar_texts() )
			->add_content_section( $this->content_area() )
			->add_toolbar_section( $this->layout_toolbar() )
			->build();
	}

	private function sidebar_selects(): Sidebar_Section {
		return $this->factory->sidebar()->section()
			->set_label( 'Sidebar Selects Section' )
			->add_field(
				$this->factory->sidebar()->field()->checkbox( 'sidebar10' )
					->set_label( 'Checkbox Field' )
					->add_option( 'first', 'First Option' )
					->add_option( 'second', 'Second Option' )
					->set_default( 'first', 'second' )
					->build()
			)
			->add_field(
				$this->factory->sidebar()->field()->radio( 'sidebar11' )
					->set_label( 'Radio Field' )
					->add_option( 'first', 'First Option' )
					->add_option( 'second', 'Second Option' )
					->set_default( 'second' )
					->build()
			)
			->add_field(
				$this->factory->sidebar()->field()->image_select( 'sidebar12' )
					->set_label( __( 'Image Select Field', 'tribe' ) )
					->add_option( 'first', __( 'First', 'tribe' ), 'https://via.placeholder.com/100x60.png?text=First' )
					->add_option( 'second', __( 'Second', 'tribe' ), 'https://via.placeholder.com/100x60.png?text=Second' )
					->set_default( 'first' )
					->build()
			)
			->add_field(
				$this->factory->sidebar()->field()->select( 'sidebar13' )
					->set_label( __( 'Select Field', 'tribe' ) )
					->add_option( 'first', __( 'First', 'tribe' ) )
					->add_option( 'second', __( 'Second', 'tribe' ) )
					->set_default( 'second' )
					->build()
			)
			->add_field(
				$this->factory->sidebar()->field()->toggle( 'sidebar14' )
					->set_label( 'Toggle Field' )
					->set_on_off_labels( __( 'Enabled', 'tribe' ), __( 'Disabled', 'tribe' ) )
					->set_default( false )
					->build()
			)
			->add_field(
				$this->factory->sidebar()->field()->swatch_select( 'sidebar15' )
					->set_label( 'Swatch Select Field' )
					->add_option( 'red', 'Red', '#FF0000' )
					->add_option( 'green', 'Green', '#00FF00' )
					->add_option( 'blue', 'Blue', '#0000FF' )
					->build()
			)
			->build();
	}

	private function sidebar_images(): Sidebar_Section {
		return $this->factory->sidebar()->section()
			->set_label( 'Sidebar Media Section' )
			->add_field(
				$this->factory->sidebar()->field()->image( 'sidebar20' )
					->set_label( 'Image Field' )
					->build()
			)
			->add_field(
				$this->factory->sidebar()->field()->gallery( 'sidebar21' )
					->set_label( 'Gallery Field' )
					->build()
			)
			->add_field(
				$this->factory->sidebar()->field()->embed( 'sidebar22' )
					->set_label( 'Embed Field' )
					->build()
			)
			->build();
	}

	private function sidebar_texts(): Sidebar_Section {
		return $this->factory->sidebar()->section()
			->set_label( 'Sidebar Text Section' )
			->add_field(
				$this->factory->sidebar()->field()->text( 'sidebar30' )
					->set_label( 'Text Field' )
					->build()
			)
			->add_field(
				$this->factory->sidebar()->field()->textarea( 'sidebar31' )
					->set_label( 'Textarea Field' )
					->build()
			)
			->add_field(
				$this->factory->sidebar()->field()->richtext( 'sidebar32' )
					->set_label( 'Richtext Field' )
					->build()
			)
			->add_field(
				$this->factory->sidebar()->field()->link( 'sidebar33' )
					->set_label( 'Link Field' )
					->build()
			)
			->add_field(
				$this->factory->sidebar()->field()->url( 'sidebar34' )
					->set_label( 'URL Field' )
					->build()
			)
			->add_field(
				$this->factory->sidebar()->field()->email( 'sidebar35' )
					->set_label( 'Email Field' )
					->build()
			)
			->add_field(
				$this->factory->sidebar()->field()->number( 'sidebar36' )
					->set_label( 'Number Field' )
					->build()
			)
			->add_field(
				$this->factory->sidebar()->field()->range( 'sidebar37' )
					->set_label( 'Range Field' )
					->set_minimum( 2 )
					->set_maximum( 20 )
					->set_step( 2 )
					->set_handles( 8, 14 )
					->build()
			)
			->add_field(
				$this->factory->sidebar()->field()->html( 'sidebar38' )
					->set_label( 'Static HTML Field' )
					->set_content( '<p>This is just some <strong>HTML</strong> that you cannot edit.</p>' )
					->build()
			)
			->build();
	}

	private function content_area(): Content_Section {
		return $this->factory->content()->section()
			->add_field(
				$this->factory->content()->field()->checkbox( 'content10' )
					->set_label( 'Checkbox Field' )
					->add_option( 'first', 'First Option' )
					->add_option( 'second', 'Second Option' )
					->set_default( 'first', 'second' )
					->build()
			)
			->add_field(
				$this->factory->content()->field()->radio( 'content11' )
					->set_label( 'Radio Field' )
					->add_option( 'first', 'First Option' )
					->add_option( 'second', 'Second Option' )
					->set_default( 'second' )
					->build()
			)
			->add_field(
				$this->factory->content()->field()->image_select( 'content12' )
					->set_label( __( 'Image Select Field', 'tribe' ) )
					->add_option( 'first', __( 'First', 'tribe' ), 'https://via.placeholder.com/100x60.png?text=First' )
					->add_option( 'second', __( 'Second', 'tribe' ), 'https://via.placeholder.com/100x60.png?text=Second' )
					->set_default( 'first' )
					->build()
			)
			->add_field(
				$this->factory->content()->field()->select( 'content13' )
					->set_label( __( 'Select Field', 'tribe' ) )
					->add_option( 'first', __( 'First', 'tribe' ) )
					->add_option( 'second', __( 'Second', 'tribe' ) )
					->set_default( 'second' )
					->build()
			)
			->add_field(
				$this->factory->content()->field()->toggle( 'content14' )
					->set_label( 'Toggle Field' )
					->set_on_off_labels( __( 'Enabled', 'tribe' ), __( 'Disabled', 'tribe' ) )
					->set_default( false )
					->build()
			)
			->add_field(
				$this->factory->content()->field()->swatch_select( 'content15' )
					->set_label( 'Swatch Select Field' )
					->add_option( 'red', 'Red', '#FF0000' )
					->add_option( 'green', 'Green', '#00FF00' )
					->add_option( 'blue', 'Blue', '#0000FF' )
					->build()
			)
			->add_field(
				$this->factory->content()->field()->image( 'content20' )
					->set_label( 'Image Field' )
					->build()
			)
			->add_field(
				$this->factory->content()->field()->gallery( 'content21' )
					->set_label( 'Gallery Field' )
					->build()
			)
			->add_field(
				$this->factory->content()->field()->embed( 'content22' )
					->set_label( 'Embed Field' )
					->build()
			)
			->add_field(
				$this->factory->content()->field()->text( 'content30' )
					->set_label( 'Text Field' )
					->build()
			)
			->add_field(
				$this->factory->content()->field()->textarea( 'content31' )
					->set_label( 'Textarea Field' )
					->build()
			)
			->add_field(
				$this->factory->content()->field()->richtext( 'content32' )
					->set_label( 'Richtext Field' )
					->build()
			)
			->add_field(
				$this->factory->content()->field()->link( 'content33' )
					->set_label( 'Link Field' )
					->build()
			)
			->add_field(
				$this->factory->content()->field()->url( 'content34' )
					->set_label( 'URL Field' )
					->build()
			)
			->add_field(
				$this->factory->content()->field()->email( 'content35' )
					->set_label( 'Email Field' )
					->build()
			)
			->add_field(
				$this->factory->content()->field()->number( 'content36' )
					->set_label( 'Number Field' )
					->build()
			)
			->add_field(
				$this->factory->content()->field()->range( 'content37' )
					->set_label( 'Range Field' )
					->set_minimum( 2 )
					->set_maximum( 20 )
					->set_step( 2 )
					->set_handles( 8, 14 )
					->build()
			)
			->add_field(
				$this->factory->content()->field()->html( 'content38' )
					->set_label( 'Static HTML Field' )
					->set_content( '<p>This is just some <strong>HTML</strong> that you cannot edit.</p>' )
					->build()
			)
			->build();
	}

	private function layout_toolbar(): Toolbar_Section {
		return $this->factory->toolbar()->section()
			->add_field(
				$this->factory->toolbar()->field()->icon_select( 'layout' )
					->add_dashicon_option( 'left', __( 'Align Left', 'tribe' ), 'editor-alignleft' )
					->add_dashicon_option( 'center', __( 'Align Center', 'tribe' ), 'editor-aligncenter' )
					->build()
			)
			->build();
	}
}
