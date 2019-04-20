<?php
/**
 * Created by PhpStorm.
 * User: pavel
 * Date: 09.09.2015
 * Time: 8:51
 */

function rem_create_pages() {

    global $wp_rewrite;

    if ( isset( $_POST[ 'tp_create' ] ) && $_POST[ 'tp_create' ] == true && is_admin() ) {
        update_option( 'posts_per_rss', 20 );
        update_option( 'posts_per_page', 20 );
        update_option( 'show_on_front', 'page' );
        update_option( 'comments_per_page', 25 );
        update_option( 'page_comments', 1 );
        //$wp_rewrite->set_permalink_structure( '/%category%/%postname%/' );
        $wp_rewrite->set_permalink_structure( '/%postname%/' );

	    $pageObj = new rem_PageTemplate();
	    $pageObj->addPage( array( 'title' => __('Home', 'rap'), 'post_name' => 'home', 'static' => 'front' ) );
	    $pageObj->addPage( array( 'title' => __('Blog', 'rap'), 'post_name' => 'blog', 'static' => 'posts' ) );

	    $pageObj->addPage( array( 'title' => __('Subscription', 'rap'), 'post_name' => 'subscription' ) );
	    $pageObj->addPage( array( 'title' => __('Thank you', 'rap'), 'post_name' => 'thank-you-contact' ) );
	    $pageObj->addPage( array( 'title' => __('Payment methods', 'rap'), 'post_name' => 'payment-methods' ) );
	    $pageObj->addPage( array( 'title' => __('Shipping & Delivery', 'rap'), 'post_name' => 'shipping-delivery' ) );
	    $pageObj->addPage( array( 'title' => __('About Us', 'rap'), 'post_name' => 'about-us' ) );
	    $pageObj->addPage( array( 'title' => __('Contact Us', 'rap'), 'post_name' => 'contact-us' ) );
	    $pageObj->addPage( array( 'title' => __('Privacy Policy', 'rap'), 'post_name' => 'privacy-policy' ) );
	    $pageObj->addPage( array( 'title' => __('Terms and Conditions', 'rap'), 'post_name' => 'terms-and-conditions' ) );
	    $pageObj->addPage( array( 'title' => __('Refunds & Returns Policy', 'rap'), 'post_name' => 'refund-policy' ) );
	    $pageObj->addPage( array( 'title' => __('Frequently Asked Questions', 'rap'), 'post_name' => 'frequently-asked-questions' ) );
	    $pageObj->addPage( array( 'title' => __('Track your order', 'rap'), 'post_name' => 'track-your-order' ) );
	    $pageObj->addPageContent( array( 'title' => __('Account', 'rap'), 'post_name' => 'account', 'content' => '[ads_account]' ) );
	    $pageObj->addPageContent( array( 'title' => __('Orders', 'rap'), 'post_name' => 'orders', 'content' => '[ads_orders]' ) );

	    $pageObj->addPage( array( 'title' => __('Your shopping cart', 'rap'), 'post_name' => 'cart' ) );
	    $pageObj->addPage( array( 'title' => __('Thank you page', 'rap'), 'post_name' => 'thankyou' ) );

	    $pageObj->create();

	    $memu   = array();
	    $memu[] = array( 'title' => __( 'Home', 'rap' ), 'url' => '/' );
	    $memu[] = array( 'title' => __( 'Products', 'rap' ), 'url' => '/product/' );
	    $memu[] = array( 'title' => __( 'Shipping', 'rap' ), 'url' => '/shipping-delivery/' );
	    $memu[] = array( 'title' => __( 'Returns', 'rap' ), 'url' => '/refund-policy/' );
	    $memu[] = array( 'title' => __( 'About', 'rap' ), 'url' => '/about-us/' );
	    $memu[] = array( 'title' => __( 'Tracking', 'rap' ), 'url' => '/track-your-order/' );
	    $memu[] = array( 'title' => __( 'Contact', 'rap' ), 'url' => '/contact-us/' );
	    createMemu( $memu, 'Top Menu', 'top_menu' );

	    $memu   = array();
	    $memu[] = array( 'title' => __( 'About us', 'rap' ), 'url' => '/about-us/' );
	    $memu[] = array( 'title' => __( 'Privacy Policy', 'rap' ), 'url' => '/privacy-policy/' );
	    $memu[] = array( 'title' => __( 'Terms and Conditions', 'rap' ), 'url' => '/terms-and-conditions/' );
	    $memu[] = array( 'title' => __( 'Contact Us', 'rap' ), 'url' => '/contact-us/' );
	    createMemu( $memu, 'Company Info', 'footer-help' );

	    $memu   = array();
	    $memu[] = array( 'title' => __( 'Payment methods', 'rap' ), 'url' => '/payment-methods/' );
	    $memu[] = array( 'title' => __( 'Shipping & Delivery', 'rap' ), 'url' => '/shipping-delivery/' );
	    $memu[] = array( 'title' => __( 'Returns Policy', 'rap' ), 'url' => '/refund-policy/' );
	    $memu[] = array( 'title' => __( 'Frequently Asked Questions', 'rap' ), 'url' => '/frequently-asked-questions/' );
	    createMemu( $memu, 'Need Some Help?', 'footer-company' );

        $memu   = array();
        $memu[] = array( 'title' => __( 'Costumes', 'rap' ), 'url' => '/costumes/', 'slug' => 'costumes' );
        $memu[] = array( 'title' => __( 'Custom category', 'rap' ), 'url' => '/custom-category/', 'slug' => 'custom-category' );
        $memu[] = array( 'title' => __( 'Gifts', 'rap' ), 'url' => '/gifts/', 'slug' => 'gifts' );
        $memu[] = array( 'title' => __( 'Jewelry', 'rap' ), 'url' => '/jewelry/', 'slug' => 'jewelry' );
        $memu[] = array( 'title' => __( 'Men clothing', 'rap' ), 'url' => '/men-clothing/', 'slug' => 'men-clothing' );
        $memu[] = array( 'title' => __( 'Phone cases', 'rap' ), 'url' => '/phone-cases/', 'slug' => 'phone-cases' );
        $memu[] = array( 'title' => __( 'Posters', 'rap' ), 'url' => '/posters/', 'slug' => 'posters' );
        $memu[] = array( 'title' => __( 'T-shirts', 'rap' ), 'url' => '/t-shirts/', 'slug' => 't-shirts' );
        $memu[] = array( 'title' => __( 'Toys', 'rap' ), 'url' => '/toys/', 'slug' => 'toys' );
        $memu[] = array( 'title' => __( 'Women clothing', 'rap' ), 'url' => '/women-clothing/', 'slug' => 'women-clothing' );
        add_action( 'init', 'createCategoryProduct', 10, $memu );

    }
}
add_action('admin_init', 'rem_create_pages');

//@TODO
function createCategoryProduct()
{
	$category   = array();
	$category[] = array( 'title' => __( 'Costumes', 'rap' ), 'url' => '/costumes/', 'slug' => 'costumes' );
	$category[] = array( 'title' => __( 'Custom category', 'rap' ), 'url' => '/custom-category/', 'slug' => 'custom-category' );
	$category[] = array( 'title' => __( 'Gifts', 'rap' ), 'url' => '/gifts/', 'slug' => 'gifts' );
	$category[] = array( 'title' => __( 'Jewelry', 'rap' ), 'url' => '/jewelry/', 'slug' => 'jewelry' );
	$category[] = array( 'title' => __( 'Men clothing', 'rap' ), 'url' => '/men-clothing/', 'slug' => 'men-clothing' );
	$category[] = array( 'title' => __( 'Phone cases', 'rap' ), 'url' => '/phone-cases/', 'slug' => 'phone-cases' );
	$category[] = array( 'title' => __( 'Posters', 'rap' ), 'url' => '/posters/', 'slug' => 'posters' );
	$category[] = array( 'title' => __( 'T-shirts', 'rap' ), 'url' => '/t-shirts/', 'slug' => 't-shirts' );
	$category[] = array( 'title' => __( 'Toys', 'rap' ), 'url' => '/toys/', 'slug' => 'toys' );
	$category[] = array( 'title' => __( 'Women clothing', 'rap' ), 'url' => '/women-clothing/', 'slug' => 'women-clothing' );
	foreach ( $category as $key => $item ) {
		wp_insert_term(
			$item[ 'title' ],
			'product_cat',
			array(
				'description' => '',
				'slug'        => $item[ 'slug' ],
				'parent'      => 0
			)
		);

	}
}

function createMemu( $memu, $menu_name, $location = false )
{
	$menu_exists = wp_get_nav_menu_object( $menu_name );
	if ( !$menu_exists ) {
		$menu_id = wp_create_nav_menu( $menu_name );

		if ( $location ) {
			$locations              = get_theme_mod( 'nav_menu_locations' );
			$locations[ $location ] = $menu_id;
			set_theme_mod( 'nav_menu_locations', $locations );
		}

		foreach ( $memu as $key => $item ) {
			wp_update_nav_menu_item( $menu_id, 0, array(
				'menu-item-title'    => $item[ 'title' ],
				'menu-item-position' => $key,
				'menu-item-url'      => home_url( $item[ 'url' ] ),
				'menu-item-status'   => 'publish' ) );
		}

		return true;
	}

	return false;
}

class rem_PageTemplate
{
	private
		$_pages = array();

	function __construct()
	{
	}

	/**
	 * @param $page
	 * @throws Exception
	 */
	public function addPage( $page )
	{

		if ( empty( $page[ 'post_name' ] ) )
			throw new Exception( 'no post_name' );

		$page[ 'content' ] = $this->getContent( $page[ 'post_name' ] );

		array_push( $this->_pages, $page );
	}

	/**
	 * addPageContent
	 *
	 * @param type $pageObj
	 * @throws Exception
	 */
	public function addPageContent($pageObj)
	{
		if (empty($pageObj['post_name'])) {
			throw new Exception( 'no post_name' );
		}

		if (empty($pageObj['content'])) {
			throw new Exception(' no post_content');
		}

		array_push( $this->_pages, $pageObj );
	}

	/**
	 * @return int|WP_Error
	 */
	public function create()
	{
		foreach ( $this->_pages as $page ) {

			$new_page = array(
				'post_type'    => 'page',
				'post_title'   => $page[ 'title' ],
				'post_name'    => $page[ 'post_name' ],
				'post_content' => $page[ 'content' ],
				'post_status'  => 'publish',
				'post_author'  => 1,
			);

			if ( !$this->issetPage( $page[ 'post_name' ] ) ) {
				$id = wp_insert_post( $new_page );
				if ( isset( $page[ 'static' ] ) && $page[ 'static' ] == 'front' ) update_option( 'page_on_front', $id );
				if ( isset( $page[ 'static' ] ) && $page[ 'static' ] == 'posts' ) update_option( 'page_for_posts', $id );
			}
		}
	}

	/**
	 * @param $slug
	 * @return bool
	 */
	private function issetPage( $slug )
	{
		$args       = array(
			'pagename'           => $slug
		);

		$page_check = new WP_Query( $args );
		if ( $page_check->post ) return true;

		return false;
	}

	/**
	 * @param $pagename
	 * @return mixed|string
	 */
	private function getContent( $pagename )
	{
		$file = dirname( __FILE__ ) . '/pages_default/' . $pagename . '.php';
		if ( file_exists( $file ) ) {
			ob_start();
			include( $file );
			$text = ob_get_contents();
			ob_end_clean();

			return $text;
		}

		return '';
	}
}