<?php
declare( strict_types=1 );

namespace Tribe\Project\Templates\Components\Blocks;

use Tribe\Project\Components\Component;
use Tribe\Project\Blocks\Types\Interstitial\Interstitial as Interstitial_Block;

/**
 * Class Interstitial
 *
 * @property string   $layout
 * @property string   $media
 * @property string   $content
 * @property string[] $container_classes
 * @property string[] $media_classes
 * @property string[] $content_classes
 * @property string[] $classes
 * @property string[] $attrs
 */
class Interstitial extends Component {

	public const LAYOUT            = 'layout';
	public const MEDIA             = 'media';
	public const CONTENT           = 'content';
	public const CONTAINER_CLASSES = 'container_classes';
	public const MEDIA_CLASSES     = 'media_classes';
	public const CONTENT_CLASSES   = 'content_classes';
	public const CLASSES           = 'classes';
	public const ATTRS             = 'attrs';

	protected function defaults(): array {
		return [
			self::LAYOUT            => Interstitial_Block::LAYOUT_LEFT,
			self::MEDIA             => '',
			self::CONTENT           => '',
			self::CONTAINER_CLASSES => [ 'b-interstitial__container', 'l-container' ],
			self::MEDIA_CLASSES     => [ 'b-interstitial__media' ],
			self::CONTENT_CLASSES   => [ 'b-interstitial__content' ],
			self::CLASSES           => [ 'c-block', 'b-interstitial', 'c-block--full-bleed' ],
			self::ATTRS             => [],
		];
	}

	public function init() {
		$this->data[ self::CLASSES ][] = 'c-block--' . $this->data[ self::LAYOUT ];
	}

}
