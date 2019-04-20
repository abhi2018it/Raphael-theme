<?php
$tmpl = new ads\adsTemplate();


$tmpl->addItem( 'uploadImgCrop', array( 'label' => __( 'Background image (recommended size: 1920*440px)', 'rap' ), 'name' => 'tp_bg1_about','width'=> 1920, 'height'=> 440, 'crop_name'=> 'bgabout'));
$tmpl->addItem( 'text', array( 'label' => __( 'Title', 'rap' ), 'name' => 'tp_about_b1_title'));
$tmpl->addItem( 'textarea', array( 'label' => __( 'Description', 'rap' ), 'name' => 'tp_about_b1_description'));
$tmpl->addItem( 'buttons', array( 'class'=>'btn btn-green ads-no js-adstm-save','name'=>'save', 'value' => __( 'Save Settings', 'rap' )) );
$tmpl->addItem( 'buttons', array( 'class'=>'btn btn-blue ads-no js-adstm-save','name'=>'default', 'value' => __( 'Default', 'rap' ) ) );

$tmpl->template('ads-block1',$tmpl->renderItems());

$tmpl->addItem( 'text', array( 'label' => __( 'Title', 'rap' ), 'name' => 'tp_about_us_keep_in_contact_title'));
$tmpl->addItem( 'textarea', array( 'label' => __( 'Description', 'rap' ), 'name' => 'tp_about_us_keep_in_contact_description'));
$tmpl->addItem( 'buttons', array( 'class'=>'btn btn-green ads-no js-adstm-save','name'=>'save', 'value' => __( 'Save Settings', 'rap' )) );
$tmpl->addItem( 'buttons', array( 'class'=>'btn btn-blue ads-no js-adstm-save','name'=>'default', 'value' => __( 'Default', 'rap' ) ) );
$tmpl->template('ads-block2',$tmpl->renderItems());


$tmpl->addItem( 'switcher', array( 'label' => __( 'Enable this block', 'rap' ), 'name' => 'tp_our_core_values'));
$tmpl->addItem( 'buttons', array( 'class'=>'btn btn-green ads-no js-adstm-save','name'=>'save', 'value' => __( 'Save Settings', 'rap' )) );
$tmpl->addItem( 'buttons', array( 'class'=>'btn btn-blue ads-no js-adstm-save','name'=>'default', 'value' => __( 'Default', 'rap' ) ) );
$tmpl->template('ads-block3',$tmpl->renderItems());

$tmpl->addItem( 'switcher', array( 'label' => __( 'Enable this block', 'rap' ), 'name' => 'tp_our_partners'));
$tmpl->addItem( 'textarea', array( 'label' => __( 'Description', 'rap' ), 'name' => 'tp_our_partners_description'));
$tmpl->addItem( 'buttons', array( 'class'=>'btn btn-green ads-no js-adstm-save','name'=>'save', 'value' => __( 'Save Settings', 'rap' )) );
$tmpl->addItem( 'buttons', array( 'class'=>'btn btn-blue ads-no js-adstm-save','name'=>'default', 'value' => __( 'Default', 'rap' ) ) );
$tmpl->template('ads-block4',$tmpl->renderItems());

?>

<div class="wrap">
	<div class="row">
		<div class="col-md-30">
			<form id="custom_form" method="POST">
				<?php
				wp_nonce_field( 'cz_setting_action', 'cz_setting' ); ?>
				<?php
				$tmpl->renderPanel( array(
					'panel_title'   => __('About Us Page Settings', 'rap'),
					'panel_class'   => 'success',
					'panel_content' => '<div data-adstm_action="general" data-adstm_template="#ads-block1"></div>'
				) );

				$tmpl->renderPanel( array(
					'panel_title' => __('Our Core Values', 'rap'),
					'panel_class'   => 'success',
					'panel_content' => '<div data-adstm_action="general" data-adstm_template="#ads-block3"></div>'
				) );

				$tmpl->renderPanel( array(
					'panel_title'   => __('Keep in contact with us', 'rap'),
					'panel_class'   => 'success',
					'panel_content' => '<div data-adstm_action="general" data-adstm_template="#ads-block2"></div>'
				) );

				$tmpl->renderPanel( array(
                    'panel_title' => __('Our Partners', 'rap'),
					'panel_class'   => 'success',
					'panel_content' => '<div data-adstm_action="general" data-adstm_template="#ads-block4"></div>'
				) );

				?>

                <button form="custom_form" class="btn btn-save no-ads" name="save"><?php _e( 'Save Settings', 'rap' ) ?></button>
				<button form="custom_form" class="btn js-save-default btn-default" name="default"><?php _e( 'Default', 'rap' ) ?></button>
			</form>

		</div>
	</div>
</div>