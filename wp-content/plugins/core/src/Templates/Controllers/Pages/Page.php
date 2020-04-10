<?php


namespace Tribe\Project\Templates\Controllers\Pages;

use Exception;
use Tribe\Project\Templates\Abstract_Controller;
use Tribe\Project\Templates\Component_Factory;
use Tribe\Project\Templates\Components\Breadcrumbs;
use Tribe\Project\Templates\Components\Button;
use Tribe\Project\Templates\Components\Document\Document;
use Tribe\Project\Templates\Components\Image;
use Tribe\Project\Templates\Components\Main\Main;
use Tribe\Project\Templates\Components\Pages\Page as Page_Context;
use Tribe\Project\Templates\Components\Pagination;
use Tribe\Project\Templates\Controllers\Footer\Footer_Wrap;
use Tribe\Project\Templates\Controllers\Footer\Site_Footer;
use Tribe\Project\Templates\Controllers\Head;
use Tribe\Project\Templates\Controllers\Header\Subheader;
use Tribe\Project\Templates\Controllers\Masthead;
use Tribe\Project\Templates\Controllers\Sidebar\Main_Sidebar;
use Tribe\Project\Templates\Template_Interface;

class Page extends Abstract_Controller {
	/**
	 * @var Head
	 */
	private $head;
	/**
	 * @var Subheader
	 */
	private $subheader;
	/**
	 * @var Main_Sidebar
	 */
	private $sidebar;
	/**
	 * @var Footer_Wrap
	 */
	private $footer;
	/**
	 * @var Masthead
	 */
	private $masthead;

	public function __construct(
		Component_Factory $factory,
		Head $head,
		Masthead $masthead,
		Subheader $subheader,
		Main_Sidebar $sidebar,
		Site_Footer $footer
	) {
		parent::__construct( $factory );
		$this->head      = $head;
		$this->masthead  = $masthead;
		$this->subheader = $subheader;
		$this->sidebar   = $sidebar;
		$this->footer    = $footer;
	}

	public function render( string $path = '' ): string {
		the_post();

		return $this->factory->get( Document::class, [
			Document::LANG       => $this->get_language_attributes(),
			Document::BODY_CLASS => $this->get_body_class(),
			Document::HEAD       => $this->head->render(),
			Document::MASTHEAD   => $this->masthead->render(),
			Document::SIDEBAR    => $this->sidebar->render(),
			Document::FOOTER     => $this->footer->render(),
			Document::MAIN       => $this->get_main()->render(),
		] )->render();
	}

	protected function get_main( string $path = '' ): Template_Interface {
		return $this->factory->get( Main::class, [
			Main::HEADER  => $this->subheader->render(),
			Main::CONTENT => $this->build_content()->render( $path ),
		] );
	}

	protected function build_content(): Template_Interface {
		return $this->factory->get( Page_Context::class, [
			Page_Context::COMMENTS    => $this->get_comments(),
			Page_Context::BREADCRUMBS => $this->get_breadcrumbs(),
			Page_Context::PAGINATION  => $this->get_pagination(),
			Page_Context::POST        => $this->get_post(),
		] );
	}

	protected function get_post() {
		return [
			'content'        => apply_filters( 'the_content', get_the_content() ),
			'permalink'      => get_the_permalink(),
			'featured_image' => $this->get_featured_image(),
		];
	}

	protected function get_featured_image() {
		$image_id = get_post_thumbnail_id();

		if ( empty( $image_id ) ) {
			return '';
		}

		try {
			$image = \Tribe\Project\Templates\Models\Image::factory( $image_id );
		} catch ( Exception $e ) {
			return '';
		}

		$options = [
			Image::ATTACHMENT      => $image,
			Image::WRAPPER_CLASSES => [ 'page__image' ],
		];

		return $this->factory->get( Image::class, $options )->render();
	}

	protected function get_comments() {
		if ( comments_open() || get_comments_number() > 0 ) {
			ob_start();
			comments_template();

			return ob_get_clean();
		}

		return '';
	}

	protected function get_breadcrumbs() {
		$news_url = get_permalink( get_option( 'page_for_posts' ) );

		$items = [
			[
				'url'   => $news_url,
				'label' => __( 'News', 'tribe' ),
			],
		];

		$options = [
			Breadcrumbs::ITEMS           => $items,
			Breadcrumbs::WRAPPER_CLASSES => [],
		];

		$crumbs = $this->factory->get( Breadcrumbs::class, $options );

		return $crumbs->render();
	}

	protected function get_pagination(): string {
		$get_prev_post = $this->get_pagination_item( get_previous_post() );
		$get_next_post = $this->get_pagination_item( get_next_post() );
		$prev_post     = sprintf( '<span class="pagination__item-label">%s</span> %s', __( 'Previous', 'tribe' ), $get_prev_post );
		$next_post     = sprintf( '<span class="pagination__item-label">%s</span> %s', __( 'Next', 'tribe' ), $get_next_post );

		$options = [
			Pagination::NEXT_POST         => empty( $get_next_post ) ? '' : $next_post,
			Pagination::PREV_POST         => empty( $get_prev_post ) ? '' : $prev_post,
			Pagination::LIST_CLASSES      => [ 'g-row', 'g-row--no-gutters', 'g-row--col-2', 'pagination__list' ],
			Pagination::LIST_ITEM_CLASSES => [ 'g-col', 'pagination__item' ],
			Pagination::WRAPPER_CLASSES   => [ 'pagination', 'pagination--single' ],
			Pagination::WRAPPER_ATTRS     => [ 'aria-labelledby' => 'pagination__label-single' ],
		];

		$pagination = $this->factory->get( Pagination::class, $options );

		return $pagination->render();
	}

	protected function get_pagination_item( $post_id ): string {

		if ( empty( $post_id ) ) {
			return '';
		}

		$options = [
			Button::URL         => get_the_permalink( $post_id ),
			Button::LABEL       => get_the_title( $post_id ),
			Button::BTN_AS_LINK => true,
			Button::CLASSES     => [ 'c-pagination__link', 'anchor', 'pagination__item-anchor' ],
		];

		$link = $this->factory->get( Button::class, $options );

		return $link->render();
	}

	protected function get_language_attributes() {
		ob_start();
		language_attributes();

		return ob_get_clean();
	}

	protected function get_body_class() {
		return implode( ' ', get_body_class() );
	}

}
