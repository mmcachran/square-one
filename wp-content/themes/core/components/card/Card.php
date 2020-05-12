<?php

namespace Tribe\Project\Templates\Components;

/**
 * Class Card
 *
 * @property string   $tag
 * @property string[] $classes
 * @property string[] $attrs
 * @property string   $image
 * @property string   $title
 * @property string   $text
 * @property string   $button
 */
class Card extends Context {
	public const TAG     = 'tag';
	public const CLASSES = 'classes';
	public const ATTRS   = 'attrs';
	public const IMAGE   = 'image';
	public const TITLE   = 'title';
	public const TEXT    = 'text';
	public const BUTTON  = 'button';

	protected $path = __DIR__ . '/card.twig';

	protected $properties = [
		self::TAG     => [
			self::DEFAULT => 'div',
		],
		self::CLASSES => [
			self::DEFAULT       => [],
			self::MERGE_CLASSES => [ 'c-card' ],
		],
		self::ATTRS   => [
			self::DEFAULT => [],
		],
		self::IMAGE   => [
			self::DEFAULT => '',
		],
		self::TITLE   => [
			self::DEFAULT => '',
		],
		self::TEXT    => [
			self::DEFAULT => '',
		],
		self::BUTTON  => [
			self::DEFAULT => '',
		],
	];
}
