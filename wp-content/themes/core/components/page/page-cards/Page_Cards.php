<?php
declare( strict_types=1 );

namespace Tribe\Project\Templates\Components\Page;

use Tribe\Project\Components\Component;
use Tribe\Project\Templates\Components\Card;

class Page_Cards extends Component {

	public const SUBHEADER = 'subheader';
	public const CARD_ONE  = 'card_one';

	public function init() {
		$this->data[ self::CARD_ONE ]  = $this->get_card_one();
	}

	protected function get_card_one() {
		return $this->factory->get( Card::class, [
			//Card::CLASSES        => [ 'c-card' ],
			Card::IMAGE          => [ 'This is an image.' ],
			Card::ICON           => [ 'This is an icon.' ],
			Card::TITLE          => [ 'This is card title.' ],
			Card::META_PRIMARY   => [ 'This is primary meta.' ],
			Card::META_SECONDARY => [ 'This is secondary meta.' ],
			Card::TEXT           => [ 'This is text.' ],
			Card::ACTION         => [ 'This is an action.' ],
			Card::VARIATION      => Card::VARIANT_ELEVATED,
			Card::MEDIA_POSITION => Card::MEDIA_TOP,
		] )->get_rendered_output();
	}

}
