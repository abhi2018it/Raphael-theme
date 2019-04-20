<style rel="stylesheet">

    /* Template color */

    <?php if( cz('tp_color') ):
        $tp_color = cz('tp_color');
    ?>

    .desc-header .text-shipping i {
        background-color: <?php echo $tp_color; ?>;
    }

    .btn-bord {
        height: 40px;
        border: 1px solid <?php echo $tp_color;?>;
        border-radius: 3px;
        color: <?php echo $tp_color;?>;
        font-size: 14px;
        font-weight: 400;
        line-height: 25px;
    }

    .btn-bord:hover {
        color: #fff;
        background-color: <?php echo $tp_color;?>;
        border-color: <?php echo $tp_color;?>;
    }

    .desc-header .text-shipping {
        color: <?php echo $tp_color; ?>;
    }

    .product-sku .sku-row .value .meta-item-img.active {
        box-shadow: 0 0 0 2px <?php echo $tp_color; ?>;
    }

    .product-sku .sku-row .value .meta-item-text.active {
        box-shadow: 0 0 0 2px <?php echo $tp_color; ?>;
    }

    .desc-header .search-post input:focus+button, .desc-header .search-post input:valid+button{
        background: <?php echo $tp_color; ?>;
    }
    .desktop-top-panel .login-button:before{
        border-bottom: 1px solid <?php echo $tp_color; ?>;
    }
    .desktop-top-panel .pages-menu>ul>li>a{
        border-bottom: 1px solid <?php echo $tp_color; ?>;
    }

    .desc-header .search-post button:before {
        color: <?php echo $tp_color; ?>;
    }

    .desktop-top-panel .dropdown_currency span:after {
        border-bottom: 1px solid <?php echo $tp_color; ?>;
    }

    .desc-header .search-post.is-focus input+button:hover:before,
    .desc-header .search-post input:valid+button:hover:before{
        color: <?php echo $tp_color; ?>!important;
    }

    .desc-header .search-post.is-focus input+button:hover,
    .desc-header .search-post input:focus+button:hover,
    .desc-header .search-post input:valid+button:hover {
        background: #fff;
    }

    .desktop-top-panel .login-button:hover:before{
        border-color: <?php  echo cz('tp_color_additional');?>;
    }

    .desktop-top-panel .dropdown_currency span:before,
    .desktop-top-panel .dropdown_currency span,
    .desktop-top-panel .login-button,
    .footer-copyright,
    .box-partners .name,
    .footer-head, .footer-head a, .head-social, .head-social a{
        color: <?php  echo cz('tp_color_additional');?>;
    }

    .top-panel {
        background-color: <?php echo $tp_color; ?>;
    }

    .footer {
        background-color: <?php echo $tp_color; ?>;
    }

    .fotorama__thumb-border {
        border-color: <?php echo $tp_color; ?>;
    }

    .tabsClass .nav-tabs>li.active>a,
    .tabsClass .nav-tabs>li.active>a:focus,
    .tabsClass .nav-tabs>li.active>a:hover {
        border-bottom: 1px solid <?php echo $tp_color; ?>;
        color: <?php echo $tp_color; ?>;
    }

    .tabsClass .nav-tabs > li > a:hover, .tabsClass .nav-tabs > li > a:focus {
        color: <?php echo $tp_color; ?>;
    }

    body.account nav.navbar a,
    body.account nav.navbar a:hover,
    body.orders nav.navbar a,
    body.orders nav.navbar a:hover {
        color: <?php echo $tp_color; ?>;
    }

    body.shipping-delivery .page-content .shipping-page-content-with-icons .h1:after,
    body.shipping-delivery .page-content .shipping-page-content-with-icons .h2:after,
    body.shipping-delivery .page-content .shipping-page-content-with-icons .h3:after,
    body.shipping-delivery .page-content .shipping-page-content-with-icons h1:after,
    body.shipping-delivery .page-content .shipping-page-content-with-icons h2:after,
    body.shipping-delivery .page-content .shipping-page-content-with-icons h3:after,
    body.refund-policy .page-content .shipping-page-content-with-icons .h1:after,
    body.refund-policy .page-content .shipping-page-content-with-icons .h2:after,
    body.refund-policy .page-content .shipping-page-content-with-icons .h3:after,
    body.refund-policy .page-content .shipping-page-content-with-icons h1:after,
    body.refund-policy .page-content .shipping-page-content-with-icons h2:after,
    body.refund-policy .page-content .shipping-page-content-with-icons h3:after,
    .tab-content #shipping .shipping-page-content-with-icons .h1:after,
    .tab-content #shipping .shipping-page-content-with-icons .h2:after,
    .tab-content #shipping .shipping-page-content-with-icons .h3:after,
    .tab-content #shipping .shipping-page-content-with-icons h1:after,
    .tab-content #shipping .shipping-page-content-with-icons h2:after,
    .tab-content #shipping .shipping-page-content-with-icons h3:after {
        background-color: <?php echo $tp_color; ?>;
    }

    .sharePopup .jssocials-shares .jssocials-share-link:hover {
        color: <?php echo $tp_color; ?>;
    }

    .accordionClass .panel-heading .panel-title a {
        color: <?php echo $tp_color; ?>;
    }

    .accordionClass .panel-heading .panel-title a:before {
        color: <?php echo $tp_color; ?>;
    }

    .mobile-menu .category-menu .menu-list li.current-menu-item > a span, .mobile-menu .category-menu .menu-list li.current-cat > a span {
        color: <?php echo $tp_color; ?>;
    }

    .mobile-menu .category-menu .menu-list li a:focus, .mobile-menu .category-menu .menu-list li a:active {
        color: <?php echo $tp_color; ?>;
    }

    .contact-form .item .btn {
        background: <?php echo $tp_color; ?>;
        border: 1px solid <?php echo $tp_color; ?>;
    }
    .contact-form .item .btn:hover {
        color: <?php echo $tp_color; ?>;
        background: #fff;
    }

    #tracking-form .btn {
        background: <?php echo $tp_color; ?>!important;
        border: 1px solid <?php echo $tp_color; ?>!important;
        color: #fff!important;
    }

    #tracking-form .btn:hover, #tracking-form .btn:focus, #tracking-form .btn:active {
        background: #fff!important;
        color: <?php echo $tp_color; ?>!important;
    }

    .b-pagination a:hover{
        color: <?php echo $tp_color; ?>;
    }

    .desc-header .cart .cart__icon svg {
        fill: <?php echo cz('cart_color'); ?>;
    }

    .desc-header .cart:hover .cart__icon svg {
        fill:  <?php echo cz('cart_color_hover'); ?>;
    }
    <?php endif; ?>

    /* Menu hover color */

    <?php if( cz('tp_menu_hover_color') ):
        $menu_hover_color = cz('tp_menu_hover_color');
    ?>

    .box-menu .menu ul li a:hover {
        color: <?php echo $menu_hover_color; ?>;
    }

    .categories-menu-line > li:hover > a span {
        box-shadow: inset 0px -1px 0 0 <?php echo $menu_hover_color; ?>;
    }

    .categories-menu-line>li.active>a,
    .categories-menu-line>li.current-cat-ancestor>a,
    .categories-menu-line>li.current-cat-parent>a,
    .categories-menu-line>li.current-cat>a,
    .categories-menu-line>li.current-menu-ancestor>a,
    .categories-menu-line>li.current-menu-item>a,
    .categories-menu-line>li.current-menu-parent>a,
    .categories-menu-line>li:hover>a,
    .categories-menu-line>li>a:hover {
        color: <?php echo $menu_hover_color; ?>;
    }

    .categories-menu-line>li.more.active:before,
    .categories-menu-line>li.more:hover:before {
        color: <?php echo $menu_hover_color; ?>;
    }

    .sort-select .dropdown-menu>li>a:focus,
    .sort-select .dropdown-menu>li>a:hover {
        color: <?php echo $menu_hover_color; ?>;
    }

    .desktop-top-panel .dropdown-menu a:hover {
        color: <?php echo $menu_hover_color; ?>;
    }

    <?php endif; ?>

    /* Discount bg-color */

    <?php if( cz('tp_discount_bg_color') ):
        $disc_bg = cz('tp_discount_bg_color');
    ?>

    .product-item .discount {
        background-color: <?php echo $disc_bg; ?>!important;
    }
    .single-product .savePercent {
        background-color: <?php echo $disc_bg; ?>!important;
    }


    <?php endif; ?>

    /* Prices color */

    <?php if( cz('tp_price_color') ):
        $tp_price_color = cz('tp_price_color');
    ?>

    .product-item .wrap-price .salePrice,
    .product-meta .salePrice .value {
        color: <?php echo $tp_price_color; ?>;
    }

    <?php endif; ?>

    /* Cart button colors */

    <?php if( cz('tp_cart_pay_btn_color') ):
        $tp_cart_pay_btn_color = cz('tp_cart_pay_btn_color');
    ?>

    body.cart .b-cart-btn_active #process-checkout {
        background-color: <?php echo $tp_cart_pay_btn_color; ?>;
    }

    <?php endif; ?>

    <?php if( cz('tp_cart_pay_btn_color_hover') ):
        $tp_cart_pay_btn_color_hover = cz('tp_cart_pay_btn_color_hover');
    ?>

    body.cart .b-cart-btn_active #process-checkout:hover,
    body.cart .b-coupon .b-coupon__btn:hover {
        background-color: <?php echo $tp_cart_pay_btn_color_hover; ?>;
    }

    .single-active-btn .btn_add-cart {
        background-color: <?php echo $tp_cart_pay_btn_color; ?>;
        border-color: <?php echo $tp_cart_pay_btn_color; ?>;
    }

    .single-active-btn .btn_add-cart:hover{
        background-color: <?php echo $tp_cart_pay_btn_color_hover; ?>;
    }
    <?php endif; ?>

    /*Home*/

    <?php
     $fsd = intval(cz('slider_home_fs_desk'));
    $fsd = $fsd > 0 ? $fsd : 50;
    $fsdh = $fsd *1.2;

    $fsm = intval(cz('slider_home_fs_mob'));
    $fsm = $fsm > 0 ? $fsm : 34;
    $fsmh = $fsm*1.2;
    ?>
    .home-slider .info .text {
        font-size: <?php echo $fsm;?>px;
        line-height: <?php echo $fsmh;?>px;
    }
    @media (min-width: 1200px){
        .home-slider .info .text {
            font-size: <?php echo $fsd;?>px;
            line-height: <?php echo $fsdh;?>px;
        }
    }


    .home-slider .info .ft .btn.shop_now {
        background-color: <?php echo cz('tp_home_buttons_color');?>
    }

    .home-slider .info .ft .btn.shop_now:hover {
        background-color: <?php echo cz('tp_home_buttons_color_hover');?>;
        color: <?php echo cz('tp_home_buttons_color');?>;
    }

    .home-slider .info .text {
        color: <?php echo cz('tp_color_text_countdown');?>;
    }

    #prHome_video .btn_model_video{
        background: <?php echo cz('tp_home_buttons_color');?>;
        border: 1px solid <?php echo cz('tp_home_buttons_color');?>;
    }

    #prHome_video .btn_model_video:active, #prHome_video .btn_model_video:focus, #prHome_video .btn_model_video:hover {
        color: <?php echo cz('tp_home_buttons_color');?>;
        text-decoration: none;
        background: #fff;
    }

    /*Features*/
    .features-main-text{
        color: <?php echo cz('features_title_color');?>;
    }

    .features .text-feat p {
        color: <?php echo cz('features_text_color');?>;
    }

    /*About*/
    .abous_b1 h1 {
        background: url( "<?php echo cz('tp_bg1_about');?>") center center no-repeat;
    }

    /*blog*/
    .blog-subscribe__btn {
        background-color: <?php echo cz('blog_buttons');?>;
        border: 1px solid <?php echo cz('blog_buttons');?>;
    }

    .blog-subscribe__btn:hover {
        background-color: #fff;
        color: <?php echo cz('blog_buttons');?>;
    }

    .blog-footer__btn {
        background-color: <?php echo cz('blog_buttons');?>;
        color: #fff;
    }
    .blog-footer__btn:active, .blog-footer__btn:hover {
        background-color: #fff;
        color: <?php echo cz('blog_buttons');?>;
    }

    .blog-page__btn {
        color: <?php echo cz('blog_more');?>;
        border: 1px solid <?php echo cz('blog_more');?>;
    }
    .blog-page__btn:active, .blog-page__btn:hover {
        background-color: <?php echo cz('blog_more');?>;
        color: #fff;
    }
    #comments .submit {
        border: 1px solid <?php echo cz('blog_more');?>;
        color: <?php echo cz('blog_more');?>;
    }

    #comments .submit:hover {
        background-color: <?php echo cz('blog_more');?>;
    }

    .btn_shopping{
        background-color: <?php echo cz('about_review_color');?>;
        border: 1px solid <?php echo cz('about_review_color');?>;
    }

    .btn_shopping:hover{
        background-color: <?php echo cz('about_review_color_hover');?>;
        border: 1px solid <?php echo cz('about_review_color_hover');?>;
    }

    .btn_contact{
        border: 1px solid <?php echo cz('about_review_color');?>;
        color: <?php echo cz('about_review_color');?>;
    }
    .btn_contact:hover{
        border: 1px solid <?php echo cz('about_review_color_hover');?>;
        color: <?php echo cz('about_review_color_hover');?>;
    }

    .addReviewForm .submit-review{
        border: 1px solid <?php echo cz('about_review_color');?>;
        color: <?php echo cz('about_review_color');?>;
    }

    .addReviewForm .submit-review:hover {
        color: #fff;
        border: 1px solid <?php echo cz('about_review_color_hover');?>;
        background-color: <?php echo cz('about_review_color_hover');?>;
    }

    .addReviewForm .fileinput-button {
        border-color: <?php echo cz('about_review_color');?>;
    }

    .addReviewForm .fileinput-button i:before {
        border-color: <?php echo cz('about_review_color');?>;
        color: <?php echo cz('about_review_color');?>;
    }
    .addReviewForm .fileinput-button:hover {
        border: 1px solid  <?php echo cz('about_review_color_hover');?>;
    }
    .addReviewForm .fileinput-button:hover i:before {
        color: <?php echo cz('about_review_color_hover');?>;
    }

</style>

<style>
    .btn-guest,
    .btn-account,
    .btn-default,
    .btn-login{
        background: transparent;
        color: <?php echo cz('login_subscription_color');?>!important;
        border: 1px solid <?php echo cz('login_subscription_color');?>!important;
    }

    .btn-default:active,
    .btn-default:focus,
    .btn-default:hover,

    .btn-guest:active,
    .btn-guest:focus,
    .btn-guest:hover,

    .btn-account:active,
    .btn-account:focus,
    .btn-account:hover,


    .btn-login:active,
    .btn-login:focus,
    .btn-login:hover{
        background: <?php echo cz('login_subscription_color');?>!important;
        color: #fff!important;
    }

    .page-subscribe button{
        color: <?php echo cz('login_subscription_color');?>;
        border: 1px solid <?php echo cz('login_subscription_color');?>;
    }

    .page-subscribe button:hover {
        background-color: <?php echo cz('login_subscription_color');?>;
        color: #fff;
    }

    <?php
     foreach( cz( 'slider_home' ) as $key => $item ) {

        if ( ! $item[ 'img' ] ){
        continue;
        }
        if ($item[ 'img_adap' ]){
            printf('
                %s
                %s
                ',
                '@media(min-width:1024px){
                    .scene'.$key.' {background: url('.$item[ 'img' ].') no-repeat center center transparent;background-size:cover;}
                }',
                '@media(max-width:1023px){
                    .scene'.$key.' {background: url('.$item[ 'img_adap' ].') no-repeat center center transparent;background-size:cover;}
                }'

                );
        }else{
            echo '.scene'.$key.' {background: url('.$item[ 'img' ].') no-repeat center center transparent;background-size:cover;}';
        }

     }
     ?>

</style>