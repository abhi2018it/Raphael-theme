<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post() ?>
    <?php do_action('adstm_init_product');
    $product = adsTmpl::product();
    $review = adsTmpl::review();
    $info = adsTmpl::singleProduct();
    ?>
    <div class="breadcrumbs">
        <div class="container">
            <?php adsTmpl::breadcrumbs() ?>
        </div>
    </div>
    <div class="product-content" itemscope itemtype="http://schema.org/Product">
        <div class="container">

            <?php do_action('adstm_start_form_product'); ?>

            <div class="row">
                <div class="col-xs-60 product-content-left">

                    <div class="product-main">
                        <div class="wrap-tumb wrap-swim">
                            <div class="js-swim">
                                <?php if(cz('tp_show_discount')):?>
                                    <div class="youSave" data-singleProductBox="savePercent" style="display:none;">
                                        <span class="savePercent"><span data-singleProduct="savePercent"></span>% <span class="off"><?php _e('off', 'rap');?></span></span>
                                    </div>
                                <?php endif;?>
                                <?php do_action('adstm_single_gallery', $product['gallery'] , get_the_title() ); ?>

                            </div>
                        </div>

                        <div class="wrap-meta">
                            <div class="box-padding">
                                <h1 class="title-product" itemprop="name"><?php the_title() ?></h1>

                                <div class="rate-price">
		                            <?php if(cz( 'tp_share' ) || cz('tp_tab_item_review')):?>
                                        <div class="box-rate-share">
				                            <?php if(cz('tp_tab_item_review')):?>
                                                <div class="rate">
						                            <?php if ( $product['rate'] > 0 && $review->countFeedback() > 0 ):
							                            echo $info->starRating(false);
							                            printf('<div class="countFeedback"><span class="rate-info">%2$s</span> (<a title="'.__('Read all reviews', 'rap').'" href="#box-feedback">'._n( '%s Review', '%s Reviews', $review->countFeedback(), 'rap' ).'</a>)</div>', $review->countFeedback(), $product['rate']);
							                            ?>
						                            <?php else: ?>

                                                        <div class="no-reviews">
                                                            <a title="<?php _e( 'Add review', 'rap' ); ?>" href="#box-feedback">
									                            <?php _e( 'There are no reviews yet', 'rap' ); ?>
                                                            </a>
                                                        </div>

						                            <?php endif; ?>
                                                </div>
				                            <?php endif; ?>
                                            <div class="hidden-xs">
					                            <?php do_action('adstm_single_share') ?>
                                            </div>
                                        </div>
		                            <?php endif; ?>

                                    <div class="price-rate">

                                        <div class="product-meta" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                            <meta itemprop="price" content="<?php echo $product['_salePrice']; ?>" />
                                            <meta itemprop="priceCurrency" content="<?php echo $product[ 'currency' ]; ?>" />

                                            <div class="price" data-singleProductBox="price" style="display:none;">
                                                <span class="value" data-singleProduct="price"></span>
                                            </div>

                                            <div class="salePrice" data-singleProductBox="salePrice" style="display:none;">
                                                <span class="value" data-singleProduct="savePrice"></span>
                                            </div>

                                            <div class="box-stock-desc hidden-xs">
                                                <span style="display: none;" data-singleProduct="stock"><?php echo $product[ 'stock' ]; ?></span>

					                            <?php if ($product['stock'] <= 0) : ?>
                                                    <div class="stock" data-singleProductBox="stock" itemprop="availability" href="http://schema.org/InStock">
							                            <?php _e('Out of stock', 'rap'); ?>
                                                    </div>
					                            <?php elseif(cz('tp_single_stock_enabled')):?>
                                                    <div style="display: none" class="stock" data-singleProductBox="stock" itemprop="availability" href="http://schema.org/InStock"><?php _e( 'Only', 'rap' ); ?>
                                                        <span data-singleProduct="stock"><?php echo $product['stock']; ?></span> <?php _e( 'left in stock', 'rap' ); ?>
                                                    </div>
					                            <?php endif; ?>
                                            </div>


                                            <div class="shipping" style="display:none;">
                                                <div class="name"><?php _e( 'Shipping', 'rap' ); ?>:</div>
					                            <?php echo $product[ 'renderShipping' ]; ?>
                                            </div>

                                        </div>


                                    </div>

                                </div>

		                        <?php do_action('adstm_single_sku', $product[ 'sku' ], $product[ 'skuAttr' ]) ?>

                                <div class="box-input_quantity-mobile visible-xs" style="display: none">
	                                <?php get_template_part( 'template/single-product/meta/_input_quantity'); ?>
                                </div>

                                <div class="box-stock-mobile visible-xs">
		                            <?php if ($product['stock'] <= 0) : ?>
                                        <div class="stock" data-singleProductBox="stock">
				                            <?php _e('Out of stock', 'rap'); ?>
                                        </div>
		                            <?php elseif(cz('tp_single_stock_enabled')):?>
                                        <div style="display: none" class="stock" data-singleProductBox="stock"><?php _e( 'Only', 'rap' ); ?>
                                            <span data-singleProduct="stock"><?php echo $product['stock']; ?></span> <?php _e( 'left in stock', 'rap' ); ?>
                                        </div>
		                            <?php endif; ?>
                                </div>

                                <div class="single-totalOrder">
                                    <div class="box-total_price" style="display: none">
				                        <?php get_template_part( 'template/single-product/meta/_total_price'); ?>
                                    </div>

                                    <?php if(cz('tp_single_shipping_description')):?>
                                    <div class="info-sipping"><img src="<?php echo get_template_directory_uri(); ?>/images/single/check.svg?1000" alt=""><?php echo cz('tp_single_shipping_description'); ?></div>
                                    <?php endif;?>

                                    <div class="box-input_quantity hidden-xs">
		                                <?php get_template_part( 'template/single-product/meta/_input_quantity'); ?>
                                    </div>

                                    <?php do_action('ads_countdown_timer', adsTmpl::product('post_id'));?>

			                        <?php $class = cz('add_fix') ? 'hidden-xs': ''; ?>
                                    <div class="box-btn">
                                        <div class=">">
		                                    <?php //TODO mobile in footer
		                                    if ($product[ 'stock' ] != 0 ) : ?>
                                                <div class="single-active-btn <?php echo $class;?>">
                                                <?php

                                                do_action('adstm_single_btn_add_to_cart') ?>
                                                </div>
		                                    <?php endif; ?>

		                                    <?php if(cz('tp_single_enable_payment_icons')):?>
                                                <div class="info-secure">
                                                    <div class="head"><span><?php echo cz('tp_single_enable_payment_text');?></span></div>
                                                    <ul>
	                                                    <?php
	                                                    $tmp = '<li><img src="%s" alt=""></li>';
	                                                    tmpCz('single_payment_icons_1', $tmp);
	                                                    tmpCz('single_payment_icons_2', $tmp);
	                                                    tmpCz('single_payment_icons_3', $tmp);
	                                                    tmpCz('single_payment_icons_4', $tmp);
	                                                    tmpCz('single_payment_icons_5', $tmp);
	                                                    tmpCz('single_payment_icons_6', $tmp);
	                                                    ?>
                                                    </ul>
                                                </div>
		                                    <?php endif;?>

                                            <div class="hidden-lg">
                                                <div class="view_cart"><?php _e('View cart', 'rap');?></div>
                                            </div>

                                            <div class=""><?php do_action('adstm_single_btn_express_checkout_enabled');?></div>
                                        </div>

                                        <div class="visible-lg view_cart-lg">
                                            <div class="view_cart"><?php _e('View cart', 'rap');?></div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>


                </div>
            </div>
            <?php do_action('adstm_end_form_product'); ?>

            <div class="row">

                <div class="col-xs-60">
                    <?php get_template_part( 'template/single-product/content' ); ?>
                </div>

                <div class="col-xs-60 single_share-mobile visible-xs">
                    <?php do_action('adstm_single_share') ?>
                </div>

            </div>

        </div>

        <?php do_action('adstm_start_loop_related_product', 6);

        if ( have_posts() ) : ?>

        <div class="aship-box-products list-product recommended recommended-xs visible-xs">
            <div class="aship-title head">
                <?php _e( 'You may also love', 'rap' );?>
            </div>
            <div class="container">
                <div class="row">
                    <div class="">
                        <div class="js-slider-related owl-theme owl-carousel">
                            <?php while ( have_posts() ) :	the_post();

	                            do_action('adstm_iterator_loop_product');

	                            echo '<div class="">';

	                            echo '<div class="wrap_product">';

	                            do_action('adstm_product_item',  'ads-big');

	                            echo '</div>';
	                            echo '</div>';

                            endwhile; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php endif;do_action('adstm_end_loop_product');?>

        <?php if(cz('tp_tab_item_review')):?>
        <div class="container">

            <div class="row">

                <?php if(comments_open()):?>
                    <div class="col-xs-60">
                        <div id="box-feedback" class="feedback-title">
                            <?php _e( 'Reviews', 'rap' );?>
                        </div>
                        <?php if($review->countFeedback() > 0):?>
                        <div class="reviews-text"><img src="<?php echo get_template_directory_uri(); ?>/images/single/verified.svg" alt=""><?php _e('Our reviews are verified for authenticity', 'rap');?></div>
                        <?php else:;?>
                            <div class="reviews-text"><?php _e('There are no reviews yet', 'rap');?></div>
                            <span class="reviews-no starRating">
                                <div class="stars">
                                    <span class="star star-no"></span>
                                    <span class="star star-no"></span>
                                    <span class="star star-no"></span>
                                    <span class="star star-no"></span>
                                    <span class="star star-no"></span>
                                </div>
                            </span>
                        <?php endif; ?>
                        <?php get_template_part( 'template/single-product/tab/_feedback' ) ?>
                    </div>
                <?php endif; ?>
            </div>


        </div>
        <?php endif; ?>
    </div>

    <?php endwhile; endif; ?>

	<?php do_action('adstm_start_loop_related_product', 6);

	if ( have_posts() ) : ?>

        <div class="aship-box-products list-product recommended hidden-xs">
            <div class="aship-title head">
				<?php _e( 'You may also love', 'rap' );?>
            </div>
            <div class="container">
                <div class="row">
                    <div class="">
                        <div class="js-slider-related owl-theme owl-carousel">
							<?php while ( have_posts() ) :	the_post();

								do_action('adstm_iterator_loop_product');

								echo '<div class="">';

								echo '<div class="wrap_product">';

								do_action('adstm_product_item',  'ads-big');

								echo '</div>';
								echo '</div>';

							endwhile; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

	<?php endif; do_action('adstm_end_loop_product');?>


<?php get_footer(); ?>