<?php
function adstm_single_gallery( $items = array(), $alt = '' , $name='product-slider-desc') {
	if ( ! $items || count( $items ) == 0 ) {?>
        <div class="js-productSlider product-slider" style="display: none;">
        </div>
		<?php
		return false;
	}

	?>
    <div class="slider-box hidden-xs">
        <div class="js-productSlider product-slider <?php echo $name; ?>" style="display: none;">
            <?php

            foreach ( $items as $k => $item ) {
                printf(
                    '<a href="%3$s" ><img src="%1$s?1000" class="img-responsive" alt="%2$s"></a><meta itemprop="image" content="%1$s" />',
                    $item[ 'ads-large' ],
                    $alt,
                    $item[ 'full' ]
                );
            }
            ?>
        </div>
    </div>
    <div class="itemadapslider">
        <div class="owl-carouselcont swiper-container">
            <div class="swiper-wrapper">
                <?php foreach( $items as $k => $item ) {
                    printf(
                        '<div class="swiper-slide">
							<div class="itembgr" style="background-image: url(%1$s?1000);"></div>
						</div>',
                        $item[ 'ads-large' ]
                    );
                }
                ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
	<?php
}


add_action('adstm_single_gallery', 'adstm_single_gallery', 10 ,2);