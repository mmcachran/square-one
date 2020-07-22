<?php

namespace Tribe\Project\Templates\Components;

use Tribe\Project\Components\Component;

/**
 * Class Card
 *
 * @property string[] $classes
 * @property array    $image
 * @property array    $icon
 * @property array    $title
 * @property array    $meta_primary
 * @property array    $meta_secondary
 * @property array    $text
 * @property array    $action
 * @property string   $variation
 * @property string   $media_position
 */
class Card extends Component {

	public const CLASSES        = 'classes';
	public const IMAGE          = 'image';
	public const ICON           = 'icon';
	public const TITLE          = 'title';
	public const META_PRIMARY   = 'meta_primary';
	public const META_SECONDARY = 'meta_secondary';
	public const TEXT           = 'text';
	public const ACTION         = 'action';

	public const VARIATION        = 'variation';
	public const VARIANT_ELEVATED = 'elevated';
	public const VARIANT_OUTLINED = 'outlined';

	public const MEDIA_POSITION = 'media_position';
	public const MEDIA_TOP      = 'top';
	public const MEDIA_RIGHT    = 'right';
	public const MEDIA_BOTTOM   = 'bottom';
	public const MEDIA_LEFT     = 'left';
	public const MEDIA_BEHIND   = 'behind';

	public const LAYOUT_STACKED = 'stacked';
	public const LAYOUT_INLINE  = 'inline';
	public const LAYOUT_OVERLAY = 'overlay';

	// want like image/icon/title below to keep the pertinent card classes I want
	// where does that belong...child array args? unique TITLE_CLASSES arg?
	// should my sectioning within cards also have a class arg for them?
	// how much allowance for adding/tweaking class names do we want to a certain degree
	// especially for the styles that are required for a given component...
	// should I actually only have a

	protected function defaults(): array {
		return [
			self::CLASSES        => [ 'c-card' ],
			self::IMAGE          => [],
			self::ICON           => [],
			self::TITLE          => [],
			self::META_PRIMARY   => [],
			self::META_SECONDARY => [],
			self::TEXT           => [],
			self::ACTION         => [],
			self::VARIATION      => '',
			self::MEDIA_POSITION => self::MEDIA_TOP,
		];
	}

	public function init() {
		$this->data[ self::CLASSES ][] = 'c-card--' . $this->data[ self::VARIATION ];

		if ( ! empty( self::IMAGE ) ) {
			// could add, customize, merge, etc.
			//$this->[ self::IMAGE ][ImageComponent::Classes] = [ 'custom classes here' ];

			$this->data[ self::CLASSES ][] = 'c-card--media-' . $this->data[ self::MEDIA_POSITION ];

			if ( $this->data[ self::MEDIA_POSITION ] === self::MEDIA_TOP || $this->data[ self::MEDIA_POSITION ] === self::MEDIA_BOTTOM ) {
				$this->data[ self::CLASSES ][] = 'c-card--' . self::LAYOUT_STACKED;
			}

			if ( $this->data[ self::MEDIA_POSITION ] === self::MEDIA_LEFT || $this->data[ self::MEDIA_POSITION ] === self::MEDIA_RIGHT ) {
				$this->data[ self::CLASSES ][] = 'c-card--' . self::LAYOUT_INLINE;
			}

			if ( $this->data[ self::MEDIA_POSITION ] === self::MEDIA_BEHIND ) {
				$this->data[ self::CLASSES ][] = 'c-card--' . self::LAYOUT_OVERLAY;
			}
		}
	}

}
