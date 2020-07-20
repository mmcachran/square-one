<?php

namespace Tribe\Project\Templates\Components;

use Tribe\Project\Components\Component;

/**
 * Class Accordion
 *
 * The accordion component is a simple component for title/content row ui's with
 * clickable titles that expand the associated content.
 *
 * This component has these features out of box:
 *  - Full accessibility baked in.
 *  - Lightweight CSS based height animations
 *  - Full support for livetext in panel instances, including in the repeater rows and titles
 *  - Intelligent editing support during live panel preview, rows expand
 *    according to the current one being editing in the panel ui.
 *  - One item open at a time, with scrolling to keep items on screen. Easily switchable in the js.
 *
 * @property string[] $rows
 * @property string[] $container_classes
 * @property string[] $container_attrs
 * @property string[] $row_classes
 * @property string   $row_header_tag
 * @property string[] $row_header_classes
 * @property string[] $row_header_container_classes
 * @property string[] $row_content_classes
 * @property string[] $row_content_container_classes
 * @property string   $row_header_name
 * @property string   $row_content_name
 */
class Accordion extends Component {

	public const ROWS                          = 'rows';
	public const CONTAINER_CLASSES             = 'container_classes';
	public const CONTAINER_ATTRS               = 'container_attrs';
	public const ROW_CLASSES                   = 'row_classes';
	public const ROW_HEADER_TAG                = 'row_header_tag';
	public const ROW_HEADER_CLASSES            = 'row_header_classes';
	public const ROW_HEADER_CONTAINER_CLASSES  = 'row_header_container_classes';
	public const ROW_CONTENT_CLASSES           = 'row_content_classes';
	public const ROW_CONTENT_CONTAINER_CLASSES = 'row_content_container_classes';
	public const ROW_HEADER_NAME               = 'row_header_name';
	public const ROW_CONTENT_NAME              = 'row_content_name';

	protected function defaults(): array {
		return [
			self::ROWS                          => [],
			self::CONTAINER_CLASSES             => [ 'c-accordion' ],
			self::CONTAINER_ATTRS               => [ 'data-js' => 'c-accordion' ],
			self::ROW_HEADER_TAG                => 'h3',
			self::ROW_CLASSES                   => [ 'c-accordion__row' ],
			self::ROW_HEADER_CLASSES            => [ 'c-accordion__header', 'h5' ],
			self::ROW_HEADER_CONTAINER_CLASSES  => [ 'c-accordion__header-container' ],
			self::ROW_CONTENT_CLASSES           => [ 'c-accordion__content' ],
			self::ROW_CONTENT_CONTAINER_CLASSES => [ 'c-accordion__content-container', 't-sink', 's-sink' ],
			self::ROW_HEADER_NAME               => 'title',
			self::ROW_CONTENT_NAME              => 'row_content',
		];
	}

}
