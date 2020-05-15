<?php
declare( strict_types=1 );

namespace Tribe\Project\Templates\Controllers\Block;

use Tribe\Project\Blocks\Types\Interstitial as Interstitial_Block;
use Tribe\Project\Templates\Components\Image as Image_Component;
use Tribe\Project\Templates\Components\Link;
use Tribe\Project\Templates\Models\Image;
use Tribe\Project\Theme\Config\Image_Sizes;

class Interstitial extends Block_Controller {

	public function render( string $path = '' ): string {
		$layout = $this->get_layout();
		$image  = $this->get_image();
		$text   = $this->get_description();
		$cta    = $this->get_cta();

		return sprintf(
			'<div class="placeholder-block-%s">
				<h2>%s</h2>
				<h3>Layout</h3>
				<pre>%s</pre>
				<h3>Image</h3>
				<pre>%s</pre>
				<h3>Text</h3>
				<pre>%s</pre>
				<h3>CTA</h3>
				<pre>%s</pre>
			</div>',
			sanitize_html_class( $this->block_type->name() ),
			esc_html( $this->block_type->name() ),
			esc_html( $layout ),
			esc_html( $image ),
			esc_html( $text ),
			esc_html( $cta )
		);
	}


	private function get_layout(): string {
		return $this->attributes[ Interstitial_Block::LAYOUT ] ?? Interstitial_Block::LAYOUT_LEFT;
	}

	private function get_image(): string {
		if ( empty( $this->attributes['image']['id'] ) ) {
			return '';
		}
		try {
			return $this->factory->get( Image_Component::class, [
				Image_Component::ATTACHMENT   => Image::factory( $this->attributes[ Interstitial_Block::IMAGE ]['id'] ),
				Image_Component::SRC_SIZE     => Image_Sizes::COMPONENT_CARD,
				Image_Component::USE_LAZYLOAD => false,
			] )->render();
		} catch ( \InvalidArgumentException $e ) {
			return '';
		}
	}

	private function get_description(): string {
		return $this->attributes[ Interstitial_Block::DESCRIPTION ] ?? Interstitial_Block::DESCRIPTION;
	}

	private function get_cta(): string {
		$cta = wp_parse_args( $this->attributes[ Interstitial_Block::CTA ] ?? [], [
			'text'   => '',
			'url'    => '',
			'target' => '',
		] );

		return $this->factory->get( Link::class, [
			Link::URL        => $cta['url'],
			Link::CONTENT    => $cta['text'] ?: $cta['url'],
			Link::TARGET     => $cta['target'],
			Link::ARIA_LABEL => '', // TODO
			Link::CLASSES    => [ 'interstitial__cta' ],
		] )->render();
	}
}
