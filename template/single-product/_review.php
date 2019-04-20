<?php
/**
 * Created by PhpStorm.
 * User: pavel
 * Date: 03.06.2016
 * Time: 15:11
 */
$reviews = adsTmpl::review();
$posts_per_page = ( isset( $wp_query->query_vars[ 'comments_per_page' ] ) &&
                    intval( $wp_query->query_vars[ 'comments_per_page' ] ) ) ?
	$wp_query->query_vars[ 'comments_per_page' ] :
	intval( get_option( 'comments_per_page' ) );

?>

<?php if ( comments_open() ): ?>
    <div class="">
        <div class="wrap-review_list">
            <?php if (cz('tp_enable_leave_review_box') && class_exists('models\review\RenderForm')):?>
                <div class="review-form" style="display: none;">
                    <div class="head"><?php _e('We want to hear from you!', 'rap');?></div>
                    <?php echo \models\review\RenderForm::showReview();?>
                </div>
                <div class="write-reviews"><div class="write js-write"><?php _e('Write a review', 'rap');?></div></div>
            <?php endif;?>
            <div class="review_list">
                        <?php

                        $args = array(
                            'walker'            => null,
                            'max_depth'         => '',
                            'style'             => 'tr',
                            'callback'          => 'list_review',
                            'end-callback'      => null,
                            'type'              => 'all',
                            'reply_text'        => 'Reply',
                            'page'              => 1,
                            'per_page'          => $posts_per_page,
                            'avatar_size'       => 32,
                            'reverse_top_level' => null,
                            'reverse_children'  => '',
                            'format'            => 'html5',
                            'echo'              => true,
                            'status'            => 'approve'
                        );

                        wp_list_comments( $args, $reviews->comments );
                        ?>
                    </div>
                        <?php if( get_comment_pages_count() > 1 ): ?>
                        <div class="more-reviews wrap-load_reviews"><div class="load_reviews"><?php _e('More reviews', 'rap');?></div></div>
                        <?php endif; ?>
                        <div class="inner-box-comment-form">
                            <div class="wrap-pagination js-pagination pagination" style="display: none;">
                                <div class="pagination">
                                    <?php
                                    paginate_comments_links(
                                        array(
                                            'prev_text' => '&laquo;',
                                            'next_text' => '&raquo;',
                                            'current'   => $reviews->getPage()
                                        )
                                    );
                                    ?>
                                </div>
                            </div>
                        </div>
        </div>
    </div>
<?php endif; ?>

