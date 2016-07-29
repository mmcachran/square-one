<?php


namespace Tribe\Project\Taxonomies\Config;


use Tribe\Libs\Taxonomy\Taxonomy_Config;

class Example extends Taxonomy_Config {

	public function get_args() {
		return [
			'hierarchical' => false,
			'exclusive' => true,
			'meta_box' => 'radio',
		];
	}

	public function get_labels() {
		return [
			'singular' => __( 'Example', 'tribe' ),
			'plural' => __( 'Examples', 'tribe' ),
			'slug' => __( 'examples', 'tribe' ),
		];
	}

	public function default_terms() {
		return [
		];
	}
}
