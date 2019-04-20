<?php

/**
 *<div class="wrap-sortby">
<ul class="sortby">
<li class="hidden-xs"><strong><?php _e( 'Sort by', 'rap' ) ?></strong></li>
<?php do_action('sortby_show'); ?>

</ul>
</div>
 */
function sortby_show() {

	$ico = array(
		'desc' => 'ico ico-desc',
		'asc'  => 'ico ico-asc',
	);

	$orderby = function_exists('ads_get_orderby_param') ? ads_get_orderby_param() : '';
	$order   = function_exists('ads_get_order_param') ? ads_get_order_param() : '';

	$order = ( $order == 'asc' ) ? 'asc' : 'desc';

	$s = isset( $_GET[ 's' ] ) ? '&s=' . $_GET[ 's' ] : '';

	$list = function_exists('ads_sortby_list') ? ads_sortby_list() : array();

	foreach ( $list as $key => $val ) {

		$class = ( $key == $orderby ) ? 'active' : "";

		if ( is_array( $val[ 'order' ] ) ) {

			$o = ( $order == 'asc' ) ? 'desc' : 'asc';

			printf(
				'<li><a href="?orderby=%1$s&order=%2$s%5$s" class="%3$s">%4$s <span class="%6$s"></span></a></li>',
				$key, $o, $class, $val[ 'title' ], $s, $ico[ $o ]
			);
		} else {
			printf(
				'<li><a href="?orderby=%1$s%4$s" class="%2$s">%3$s <span class="%5$s"></span></a></li>',
				$key, $class, $val[ 'title' ], $s, $ico[ 'desc' ]
			);
		}
	}
}

add_action('sortby_show', 'sortby_show');

function sortby_show_select(
    $ico = array(
        'desc' => 'ic icon-desc',
        'asc'  => 'ic icon-asc',
    )
) {

    $orderby = function_exists('ads_get_orderby_param') ? ads_get_orderby_param() : '';
    $order   = function_exists('ads_get_order_param') ? ads_get_order_param() : '';

    $s = isset( $_GET[ 's' ] ) ? '&s=' . $_GET[ 's' ] : '';

    $list = function_exists('ads_sortby_list') ? ads_sortby_list() : array();

    foreach ( $list as $key => $val ) {

        $selected = ( $key == $orderby ) ? 'selected="selected"' : "";

        if ( is_array( $val[ 'order' ] ) ) {

            printf(
                '<option value="?orderby=%1$s&order=%2$s%3$s" %4$s>%5$s, %6$s</option>',
                $key,
                'desc',
                $s,
                ( $key == $orderby && 'desc' == $order  ) ? 'selected="selected"' : "",
                $val[ 'title' ],
                __( 'high to low', 'rap' )
            );

            printf(
                '<option value="?orderby=%1$s&order=%2$s%3$s" %4$s>%5$s, %6$s</option>',
                $key,
                'asc',
                $s,
                ( $key == $orderby && 'asc' == $order ) ? 'selected="selected"' : "",
                $val[ 'title' ],
                __( 'low to high', 'rap' )
            );
        } else {
            printf(
                '<option value="?orderby=%1$s%2$s" %3$s>%4$s</option>',
                $key, $s, $selected, $val[ 'title' ]
            );
        }
    }
}


add_action('sortby_show_select', function (){
    ?>
    <div class="sort-select">
	<label for="">
		<?php _e( 'Sort by', 'rap' ); ?>:</label>
		<?php echo '<select class="js-select_sort picker">'; ?>
		<?php sortby_show_select(); ?>
		<?php echo '</select>'; ?>
    </div>
<?php
});