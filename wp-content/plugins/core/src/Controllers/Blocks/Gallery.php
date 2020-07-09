<?php
declare( strict_types=1 );

namespace Tribe\Project\Controllers\Blocks;

use Tribe\Project\Blocks\Types\Gallery as Gallery_Block;
use Tribe\Project\Templates\Components\Content_Block;
use Tribe\Project\Templates\Components\Image as Image_Component;
use Tribe\Project\Templates\Components\Panels\Gallery as Container;
use Tribe\Project\Templates\Components\Text;
use Tribe\Project\Templates\Models\Image;
use Tribe\Project\Theme\Config\Image_Sizes;

class Gallery extends Block_Controller {

	public function render( $attributes, $content, $block_type ) {
		$this->attributes = $attributes;
		$this->content    = $content;
		$this->block_type = $block_type;

		$args = [
			Container::LAYOUT            => $this->get_layout(),
			Container::MEDIA             => $this->get_media(),
			Container::CONTENT           => $this->get_content(),
		];

		$this->render_component( 'panels/gallery/Gallery.php', $args );
	}

	private function get_layout(): string {
		return $this->attributes[ Gallery_Block::LAYOUT ] ?? Gallery_Block::LAYOUT_GRID;
	}

	private function get_media(): array {
		if ( empty( $this->attributes[ Gallery_Block::IMAGES ] ) ) {
			return [];
		}

		return [];
	}

	private function get_image( $attachment_id ): array {
		return [
			Image_Component::ATTACHMENT      => Image::factory( (int) $attachment_id ),
			Image_Component::AS_BG           => true,
			Image_Component::USE_LAZYLOAD    => true,
			Image_Component::WRAPPER_TAG     => 'div',
			Image_Component::WRAPPER_CLASSES => [ 'hero__figure' ],
			Image_Component::IMG_CLASSES     => [ 'hero__img', 'c-image__bg' ],
			Image_Component::SRC_SIZE        => Image_Sizes::CORE_FULL,
			Image_Component::SRCSET_SIZES    => [
				Image_Sizes::CORE_FULL,
				Image_Sizes::CORE_MOBILE,
			],
		];
	}

	private function get_content(): array {
		return [
			Content_Block::CLASSES => [ 'gallery__content-container' ],
			Content_Block::TITLE   => $this->get_headline(),
			Content_Block::TEXT    => $this->get_text(),
		];
	}

	private function get_headline(): array {
		if ( empty( $this->attributes[ Gallery_Block::TITLE ] ) ) {
			return [];
		}

		return [
			Text::TAG     => 'h2',
			Text::CLASSES => [ 'gallery__title', 'h2' ],
			Text::TEXT    => $this->attributes[ Gallery_Block::TITLE ],
		];
	}

	private function get_text(): array {
		if ( empty($this->attributes[ Gallery_Block::DESCRIPTION ] ) ) {
			return [];
		}

		return [
			Text::CLASSES => [ 'gallery__description', 't-sink', 's-sink' ],
			Text::TEXT    => $this->attributes[ Gallery_Block::DESCRIPTION ],
		];
	}
}
