<?php

namespace Tribe\Project\Components_Docs\Templates;

use Tribe\Project\Templates\Components\Component;

class Constants extends Component {

	const TEMPLATE_NAME = 'constants.twig';

	const CONSTANTS  = 'constants';
	const ITEM_CLASS = 'item_class';

	public function parse_options( array $options ): array {
		$defaults = [
			self::CONSTANTS  => [],
			self::ITEM_CLASS => '',
		];

		return wp_parse_args( $options, $defaults );
	}

	public function get_data(): array {
		$data = [
			self::CONSTANTS  => $this->options[ self::CONSTANTS ],
			self::ITEM_CLASS => $this->options[ self::ITEM_CLASS ],
		];

		return $data;
	}

}