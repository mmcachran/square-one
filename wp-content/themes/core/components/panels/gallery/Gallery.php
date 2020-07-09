<?php
declare( strict_types=1 );

namespace Tribe\Project\Templates\Components\Panels;

use Tribe\Project\Components\Component;

/**
 * Class Gallery
 *
 * @property string   $layout
 * @property array    $images
 * @property string   $content
 * @property string[] $container_classes
 * @property string[] $content_classes
 * @property string[] $classes
 * @property string[] $attrs
 */
class Gallery extends Component {
	public const LAYOUT            = 'layout';
	public const MEDIA             = 'media';
	public const CONTENT           = 'content';
	public const CONTAINER_CLASSES = 'container_classes';
	public const CONTENT_CLASSES   = 'content_classes';
	public const CLASSES           = 'classes';
	public const ATTRS             = 'attrs';

	protected function defaults(): array {
		return [
			self::LAYOUT            => 'layout-grid',
			self::MEDIA             => '',
			self::CONTENT           => '',
			self::CONTAINER_CLASSES => [ 'gallery__container', 'l-container' ],
			self::CONTENT_CLASSES   => [ 'gallery__content' ],
			self::CLASSES           => [ 'c-panel', 'c-panel--gallery' ],
			self::ATTRS             => [],
		];
	}

	public function init() {
		if ( $this->data[ self::LAYOUT ] ) {
			$this->data[ self::CLASSES ][] = 'c-panel--' . $this->data[ self::LAYOUT ];
		}
	}
}
