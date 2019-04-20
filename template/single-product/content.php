<?php global $post; $review = adsTmpl::review(); $product = adsTmpl::product(); ?>
<div class="js-tabs-single-product tabs" role="tabpanel">
	<!-- Nav tabs -->
	<ul class="nav nav-tabs" role="tablist">
		<li role="presentation" class="active">
			<a href="#details"  data-scroll="details" aria-controls="details" role="tab" data-toggle="tab" aria-expanded="true">
				<?php _e( 'Product Description', 'rap' ) ?>
			</a>
		</li>
		<?php if ( cz( 'tp_tab_item_specifics' ) ): ?>
			<li role="presentation">
				<a href="#specifics" aria-controls="specifics" role="tab" data-toggle="tab" aria-expanded="false">
					<?php _e( 'Item Specifics', 'rap' ) ?></a>
			</li>
		<?php endif; ?>

		<?php if ( cz( 'tp_tab_shipping' ) ): ?>
			<li role="presentation">
				<a href="#shipping" aria-controls="shipping" role="tab" data-toggle="tab" aria-expanded="false">
					<?php _e( 'Shipping & Payment ', 'rap' ) ?>
				</a>
			</li>
		<?php endif; ?>

        <?php if ( cz( 'tp_single_enable_why_buy_from_us' ) ): ?>
			<li role="presentation">
				<a href="#why_buy" aria-controls="why_buy" role="tab" data-toggle="tab" aria-expanded="false">
					<?php echo cz('tp_single_enable_tab_name') ?>
				</a>
			</li>
		<?php endif; ?>
	</ul>
	<!-- Tab panes -->
	<div class="tab-content">
		<div role="tabpanel" class="tab-pane active" id="details">
			<?php get_template_part( 'template/single-product/tab/_details' ) ?>
		</div>
		<?php if ( cz( 'tp_tab_item_specifics' ) ): ?>
			<div role="tabpanel" class="tab-pane" id="specifics">
				<?php get_template_part( 'template/single-product/tab/_specifics' ) ?>
			</div>
		<?php endif; ?>

		<?php if ( cz( 'tp_tab_shipping' ) ): ?>
			<div role="tabpanel" class="tab-pane" id="shipping">
				<?php get_template_part( 'template/single-product/tab/_shipping' ) ?>
			</div>
		<?php endif; ?>

        <?php if ( cz( 'tp_single_enable_why_buy_from_us' ) ): ?>
			<div role="tabpanel" class="tab-pane" id="why_buy">
				<?php get_template_part( 'template/single-product/tab/_why_buy' ) ?>
			</div>
		<?php endif; ?>
	</div>
</div>