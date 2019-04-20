<?php

function adstm_product_item($img_size = 'ads-big'){

$info = new adsProductTM( array(
	'attributes' => true,
	'alimeta'    => true
) );

$product = $info->singleProductMin($img_size);

$discount = '';
if ( $product[ 'discount' ] && cz('tp_show_discount')) {
	$discount = sprintf( '<div class="discount"><div class="wrap-discount"><span class="percnt">%1$d&percnt;</span><span class="info">%2$s</span></div></div>',
					$product[ 'discount' ],
					__('off', 'rap')
				);
}

$price = "<div class='price'></div>";
 if ( $product[ '_price' ] > 0 && $product[ '_price' ] !== $product[ '_salePrice' ]){
	 $price = "<div class='price js-price'></div>";
}

echo "<div itemscope itemtype=\"http://schema.org/Product\" class='product-item' data-post_id='{$info->getPostId()}'>
	{$info->getHiddenFields()}
	<a href='{$info->getLink()}'>
		<div class='wrap-img'>
		
		<div class='box-img'>";
					do_action('ads_product_item_thumb_box', $product['post_id']);
					echo "<div class='img_content'>";
                        if( cz( 'tp_item_imgs_lazy_load' ) ) { ?>
                            <img data-src="<?php echo $product[ 'thumb' ]; ?>?10000">
                        <?php }else{ ?>
                            <img src="<?php echo $product[ 'thumb' ]; ?>?10000">
                        <?php }
					echo "</div>
		</div>
		{$discount}
		</div>
		<div class='wrap-content'>
			<div class='title'><div class='text' itemprop=\"name\">{$info->getTitle()}</div></div>
			<span class='starRating'>{$info->starRating($info->getCommentCount(), $info->getCommentCount() > 1 ? __('reviews', 'rap') : __('review', 'rap'))}</span>
			<div class='wrap-price' itemprop='offers' itemscope itemtype='http://schema.org/Offer'>
				<meta itemprop='price' content='{$product[ '_salePrice_nc' ]}'>
				<meta itemprop='priceCurrency' content='{$product[ 'currency' ]}'/>
				<div class='salePrice js-salePrice'></div>
				{$price}
			</div>
		</div>
	</a>
</div>";

}


add_action('adstm_product_item', 'adstm_product_item', 10 , 1);