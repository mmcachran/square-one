<?php
declare( strict_types=1 );

namespace Tribe\Project\Templates\Components\routes\index;

use Tribe\Project\Templates\Components\Abstract_Controller;
use Tribe\Project\Templates\Models\Breadcrumb;

class Controller extends Abstract_Controller {

	private $sidebar_id = '';

	/**
	 * Render the header component
	 *
	 * Bypasses the get_header() function to
	 * load our component instead of header.php
	 *
	 * @return void
	 */
	public function render_header(): void {
		do_action( 'get_header', null );
		get_template_part( 'components/document/header/header', 'index' );
	}


	/**
	 * Render the sidebar component
	 *
	 * Bypasses the get_sidebar() function to
	 * load our component instead of sidebar.php
	 *
	 * @return void
	 */
	public function render_sidebar(): void {
		do_action( 'get_sidebar', null );
		get_template_part( 'components/sidebar/sidebar', 'index', [ 'sidebar_id' => $this->sidebar_id ] );
	}

	/**
	 * Render the footer component
	 *
	 * Bypasses the get_footer() function to
	 * load our component instead of footer.php
	 *
	 * @return void
	 */
	public function render_footer(): void {
		do_action( 'get_footer', null );
		get_template_part( 'components/document/footer/footer', 'index' );
	}

	public function render_breadcrumbs(): void {
		get_template_part( 'components/breadcrumbs/breadcrumbs', 'index', [ 'breadcrumbs' => $this->get_breadcrumbs() ] );
	}

	/**
	 * @return Breadcrumb[]
	 */
	protected function get_breadcrumbs(): array {
		$page = get_option( 'page_for_posts' );
		$url  = $page ? get_permalink( $page ) : home_url();

		return [
			new Breadcrumb( $url, __( 'News', 'tribe' ) ),
		];
	}
}
