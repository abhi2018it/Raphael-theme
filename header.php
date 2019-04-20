<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js" xmlns="http://www.w3.org/1999/html">
<head>
	<link rel="shortcut icon" href="<?php _cz( 'tp_favicon' ); ?>"/>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="apple-mobile-web-app-capable" content="yes"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <?php adsTmpl::box_meta(); ?>

	<link  href="<?php echo get_template_directory_uri(); ?>/assets/css/head.css?100" rel="stylesheet">



	<!--[if lt IE 9]>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>    <![endif]-->

	<?php wp_head(); ?>

	<style>
		<?php echo cz('tp_style');?>
	</style>
	<?php echo cz( 'tp_head' ); ?>

    <?php $body_classes = [];

    $current_post_type = get_post_type(get_the_ID());
    $post_type_is_product = $current_post_type === 'product';

    if( cz( 'tp_item_imgs_lazy_load' ))
        array_push( $body_classes, 'js-items-lazy-load' );


    if (cz('tp_single_enable_pre_selected_variation')) {
        if ($post_type_is_product) {
            array_push($body_classes, 'js-show-pre-selected-variation');
        }
    }

    ?>

</head>

<body <?php body_class($body_classes); ?>>

<div class="js-slideout-menu" >
    <div class="mobile-menu  js-mobile-menu">
        <div class="head-menu">
            <div class="link-home">
                <a class="name-home" href="/"><?php _e( 'Home', 'rap' ); ?></a>
                <a class="name-menu"><?php _e( 'Menu', 'rap' ); ?></a>
            </div>
            <div class="btn-close js-btn-close"></div>
        </div>

        <div class="category-menu">
            <ul class="menu-list">
                <?php do_action('ads_menu_product');?>
            </ul>
        </div>
        <div class="pages-menu">
	        <?php do_action('ads_pages_menu'); ?>
        </div>
    </div>
</div>

<div class="wrap js-slideout-panel">
    <div class="top-panel">
        <div class="container">
            <div class="row visible-xs mobile-top-panel">
                <div class="col-xs-60">
                    <div class="text-shipping">
                        <?php if(cz('tp_text_top_header')){
                            do_action('adstm_shipping_icon');
                        echo cz('tp_text_top_header');
                        }  ?>
                    </div>
                    <div class="top-right">
		                <div class="box-active">
			                <?php do_action('adstm_loginButton') ?>
                        </div>
                        <div class="box-active box-active-currency">
                            <?php do_action('adstm_dropdown_currency') ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row hidden-xs desktop-top-panel">
                <div class="col-xs-60">
                    <div class="pages-menu">
		                <?php do_action('ads_pages_menu'); ?>
                    </div>

                    <div class="top-right">
                        <div class="box-active">
					        <?php do_action('adstm_loginButton') ?>
                        </div>
                        <div class="box-active">
		                    <?php do_action('adstm_dropdown_currency') ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

	<header>
        <div class="container visible-xs">
            <div class="row mobile-header">
                <div class="col-xs-60">
                    <button type="button" class="navbar-toggle js-toggle-menu">
                        <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span>
                        <span class="icon-bar"></span> <span class="icon-bar"></span>
                    </button>
                    <div class="wrap box">
                        <div class="box-logo">
	                        <?php do_action('adstm_logo_header') ?>
                        </div>
                        <div class="box-search">
		                    <?php do_action('adstm_search') ?>
                        </div>
                        <div class="box-cart">
	                        <?php do_action('adstm_cart_quantity_link') ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="container hidden-xs">
            <div class="row desc-header">
                <div class="col-xs-60">
                    <button type="button" class="visible-xs visible-sm navbar-toggle js-toggle-menu">
                        <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span>
                        <span class="icon-bar"></span> <span class="icon-bar"></span>
                    </button>
                    <div class="wrap">
						<?php do_action('adstm_logo_header') ?>
                        <div class="search-wrap">
                            <div class="box">
	                            <?php     printf('<form method="GET" action="%1$s" class="search-post">
                        <input class="js-autocomplete-search" autocomplete="off" type="text" id="s" value="" name="s"
                               placeholder="" required>
                        <button type="submit"><span></span></button>
                        <span class="clear"></span>
                        <label>%2$s</label> 
                    </form>',
                                    adstm_home_url('/' ),
                                    __( "SEARCH", 'rap' )
                                ); ?>
                            </div>
	                    </div>
                        <div class="text-shipping">
                            <?php if(cz('tp_text_top_header')){
                                do_action('adstm_shipping_icon');
                                echo cz('tp_text_top_header'); }
                            ?>
                        </div>
						<?php do_action('adstm_cart_quantity_link') ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="categories-menu hidden-xs">
            <div class="container">
                <div class="row">
                    <div class="categories-menu-box col-xs-60">
                        <ul class="categories-menu-line">
					        <?php ads_menu_product(3); ?>
                            <li class="more js-more parent-top"><a href="#"><?php _e('More', 'rap'); ?></a></li>
                        </ul>
                    </div>
                    <div class="box-categories-menu-sub">
                        <div class="menu-sub-wrap">
                            <div class="box-menu">
                                <div class="menu menu-1"><ul></ul></div>
                                <div class="menu menu-2">
                                    <ul></ul>
                                    <div class="wrap-product wrap-product-2">
                                        <div class="product product1">
                                            <a href="">
                                                <div class="item">
                                                    <div class="box-img"><img  src=""></div>
                                                    <div class="box-title"><div class="text"></div></div>
                                                </div></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="menu menu-3">
                                    <ul></ul>
                                    <div class="wrap-product-3 wrap-product-3">
                                        <div class="product product1">
                                            <a href="">
                                                <div class="item">
                                                    <div class="box-img"><img  src=""></div>
                                                    <div class="box-title"><div class="text"></div></div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="product product2">
                                            <a href="">
                                                <div class="item">
                                                    <div class="box-img"><img  src=""></div>
                                                    <div class="box-title"><div class="text"></div></div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="menu menu-4">
                                    <ul></ul>
                                    <div class="wrap-product wrap-product-4">
                                        <div class="product product1">
                                            <a href="">
                                                <div class="item">
                                                    <div class="box-img"><img  src=""></div>
                                                    <div class="box-title"><div class="text"></div></div>
                                                </div></a>
                                        </div>
                                        <div class="product product2">
                                            <a href="">
                                                <div class="item">
                                                    <div class="box-img"><img  src=""></div>
                                                    <div class="box-title"><div class="text"></div></div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="categories-menu-bg"></div>
    </header>