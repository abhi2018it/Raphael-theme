<?php
$tmpl = new ads\adsTemplate();

$tmpl->addItem( 'switcher', array( 'label' => __( 'Enable pre-selected variation', 'rap' ), 'name' => 'tp_single_enable_pre_selected_variation'));
$tmpl->addItem( 'switcher', array( 'label' => __( 'Enable social share icons', 'rap' ), 'name' => 'tp_share'));
$tmpl->addItem( 'text', array( 'label' => __( 'Shipping description', 'rap' ), 'name' => 'tp_single_shipping_description'));

$tmpl->addItem( 'switcher', array( 'label' => __( 'Enable payment icons', 'rap' ), 'name' => 'tp_single_enable_payment_icons'));
$tmpl->addItem( 'text', array( 'name' => 'tp_single_enable_payment_text'));
$tmpl->addItem( 'uploadImg', array( 'label' => __( 'Image 1 (recommended size: 50*35px)', 'rap' ), 'name' => 'single_payment_icons_1', 'width'=> 49, 'height'=> 33));
$tmpl->addItem( 'uploadImg', array( 'label' => __( 'Image 1 (recommended size: 50*35px)', 'rap' ), 'name' => 'single_payment_icons_2', 'width'=> 49, 'height'=> 33));
$tmpl->addItem( 'uploadImg', array( 'label' => __( 'Image 1 (recommended size: 50*35px)', 'rap' ), 'name' => 'single_payment_icons_3', 'width'=> 49, 'height'=> 33));
$tmpl->addItem( 'uploadImg', array( 'label' => __( 'Image 1 (recommended size: 50*35px)', 'rap' ), 'name' => 'single_payment_icons_4', 'width'=> 49, 'height'=> 33));
$tmpl->addItem( 'uploadImg', array( 'label' => __( 'Image 1 (recommended size: 50*35px)', 'rap' ), 'name' => 'single_payment_icons_5', 'width'=> 49, 'height'=> 33));
$tmpl->addItem( 'uploadImg', array( 'label' => __( 'Image 1 (recommended size: 50*35px)', 'rap' ), 'name' => 'single_payment_icons_6', 'width'=> 49, 'height'=> 33));

$tmpl->addItem( 'switcher', array( 'label' => __( 'Enable item specifics tab', 'rap' ), 'name' => 'tp_tab_item_specifics'));
$tmpl->addItem( 'switcher', array( 'label' => __( 'Enable Shipping&Payment tab', 'rap' ), 'name' => 'tp_tab_shipping'));
$tmpl->addItem( 'textarea', array( 'label' => __( 'Shipping&Payment description', 'rap' ), 'name' => 'tp_single_shipping_payment_content'));

$tmpl->addItem( 'switcher', array( 'label' => __( 'Enable additional information tab', 'rap' ), 'name' => 'tp_single_enable_why_buy_from_us'));
$tmpl->addItem( 'text', array('label' => __('Additional information tab', 'rap'),'name' => 'tp_single_enable_tab_name'));
$tmpl->addItem( 'textarea', array( 'name' => 'tp_single_why_buy_content'));

$tmpl->addItem( 'switcher', array( 'label' => __( 'Enable Reviews block', 'rap' ), 'name' => 'tp_tab_item_review'));
$tmpl->addItem( 'switcher', array( 'label' => __( 'Show review date', 'rap' ), 'name' => 'review_date'));
$tmpl->addItem( 'switcher', array( 'label' => __( 'Enable Write a review option', 'rap' ), 'name' => 'tp_enable_leave_review_box'));
$tmpl->addItem( 'switcher', array( 'label' => __( 'Enable country flag in reviews', 'rap' ), 'name' => 'tp_comment_flag'));
$tmpl->addItem( 'switcher', array( 'label' => __( 'Show random related products', 'rap' ), 'name' => 'tp_single_show_random_related_products'));
$tmpl->addItem( 'switcher', array( 'label' => __( 'Sticky Add to cart button (mobile)', 'rap' ), 'name' => 'add_fix'));

$tmpl->addItem( 'switcher', array( 'label' => __( 'Show number of products left in stock', 'rap' ), 'name' => 'tp_single_stock_enabled'));
$tmpl->addItem( 'text', array( 'label' => __( 'Show if number of products left in stock is fewer than', 'rap' ), 'name' => 'tp_single_stock_count'));

//$tmpl->addItem( 'switcher', array( 'label' => __( 'Enable quantity of orders', 'rap' ), 'name' => 'tp_show_quantity_orders'));
//$tmpl->addItem( 'switcher', array( 'label' => __( 'Enable packaging details in a Shipping and Free Returns tab', 'rap' ), 'name' => 'tp_pack'));
//$tmpl->addItem( 'switcher', array( 'label' => __( 'Enable shipping details on product page', 'rap' ), 'name' => 'tp_shipping_details'));
//$tmpl->addItem( 'switcher', array( 'label' => __( 'Enable best price guarantee label', 'rap' ), 'name' => 'tp_best_price_guarantee'));
//$tmpl->addItem( 'switcher', array( 'label' => __( 'Enable buyer protection banner', 'rap' ), 'name' => 'tp_single_buyer_protection'));

$tmpl->addItem( 'buttons', array( 'class'=>'btn btn-green ads-no js-adstm-save','name'=>'save', 'value' => __( 'Save Settings', 'rap' )) );
$tmpl->addItem( 'buttons', array( 'class'=>'btn btn-blue ads-no js-adstm-save','name'=>'default', 'value' => __( 'Default', 'rap' ) ) );
$tmpl->template('ads-single-product',$tmpl->renderItems());
?>

<div class="wrap">
	<div class="row">
		<div class="col-md-30">
			<form id="custom_form" method="POST">
				<?php
				wp_nonce_field( 'cz_setting_action', 'cz_setting' ); ?>
				<?php
				$tmpl->renderPanel( array(
					'panel_title'   => __('Single Product Page Settings', 'rap'),
					'panel_class'   => 'success',
					'panel_content' => '<div data-adstm_action="general" data-adstm_template="#ads-single-product"></div>'
				) );

				?>

                <button form="custom_form" class="btn btn-save no-ads" name="save"><?php _e( 'Save Settings', 'rap' ) ?></button>
				<button form="custom_form" class="btn btn-default" name="default"><?php _e( 'Default', 'rap' ) ?></button>
			</form>

		</div>
	</div>
</div>