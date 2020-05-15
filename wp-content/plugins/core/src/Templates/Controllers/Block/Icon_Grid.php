<?php
declare( strict_types=1 );

namespace Tribe\Project\Templates\Controllers\Block;

use Tribe\Project\Blocks\Types\Icon_Grid as Icon_Grid_Block;
use Tribe\Project\Templates\Components\Card;
use Tribe\Project\Templates\Components\Image as Image_Component;
use Tribe\Project\Templates\Components\Link;
use Tribe\Project\Templates\Models\Image;
use Tribe\Project\Theme\Config\Image_Sizes;

class Icon_Grid extends Block_Controller {

	public function render( string $path = '' ): string {
		$header      = $this->get_header();
		$description = $this->get_description();
		$cards       = $this->get_cards();

		return sprintf(
			'<div class="placeholder-block-%s">
				<h2>%s</h2>
				%s
				%s
			</div>',
			sanitize_html_class( $this->block_type->name() ),
			$header,
			$description,
			implode( '', $cards )
		);
	}

	private function get_header(): string {
		return $this->attributes[ Icon_Grid_Block::HEADER ] ?? '';
	}

	private function get_description(): string {
		return $this->attributes[ Icon_Grid_Block::DESCRIPTION ] ?? '';
	}

	private function get_cards(): array {
		return array_map( [ $this, 'get_card' ], $this->attributes[ Icon_Grid_Block::CARDS ] ?? [] );
	}

	private function get_card( array $card ): string {
		return $this->factory->get( Card::class, [
			Card::TITLE  => $this->get_card_title( $card ),
			Card::TEXT   => $this->get_card_text( $card ),
			Card::BUTTON => $this->get_card_cta( $card ),
			Card::IMAGE  => $this->get_card_icon( $card ),
		] )->render();
	}

	private function get_card_title( array $card ): string {
		return $card[ Icon_Grid_Block::TITLE ] ?? '';
	}

	private function get_card_icon( array $card ): string {
		if ( empty( $card[ Icon_Grid_Block::ICON ]['id'] ) ) {
			return '';
		}
		try {
			return $this->factory->get( Image_Component::class, [
				Image_Component::ATTACHMENT   => Image::factory( $card[ Icon_Grid_Block::ICON ]['id'] ),
				Image_Component::SRC_SIZE     => Image_Sizes::COMPONENT_CARD,
				Image_Component::USE_LAZYLOAD => false,
			] )->render();
		} catch ( \InvalidArgumentException $e ) {
			return '';
		}
	}

	private function get_card_text( array $card ): string {
		return $card[ Icon_Grid_Block::CONTENT ] ?? '';
	}

	private function get_card_cta( array $card ): string {
		$cta = wp_parse_args( $card[ Icon_Grid_Block::CTA ] ?? [], [
			'text'   => '',
			'url'    => '',
			'target' => '',
		] );

		return $this->factory->get( Link::class, [
			Link::URL        => $cta['url'],
			Link::CONTENT    => $cta['text'] ?: $cta['url'],
			Link::TARGET     => $cta['target'],
			Link::ARIA_LABEL => '', // TODO
			Link::CLASSES    => [ 'card-grid--card__cta' ],
		] )->render();
	}
}
