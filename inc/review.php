<?php
/**
 * Created by PhpStorm.
 * User: sunfun
 * Date: 07.09.16
 * Time: 9:21
 */
if(!function_exists('list_review')){
	function list_review( $comment, $args, $depth ) {
        $images = maybe_unserialize($comment->images);
        $size = 'ads-thumb';
        $gallery = \ads\adsPost::get_gallery($images, $size);

        if (!$gallery) {
	            $gallery = array();
	        }
		?>
		<div itemscope itemtype="http://schema.org/Review" <?php comment_class('feedback-one'); ?> id="li-comment-<?php comment_ID() ?>">
			<div class="author-text" itemprop="author" itemscope itemtype="http://schema.org/Person">
				<?php printf( '<span class="name" itemprop="name">%1$s</span>', $comment->comment_author); ?>
				<?php if($comment->flag AND cz('tp_comment_flag')){
					printf( '<img class="flag" src="%1$s"/>',  pachFlag( $comment->flag ) . '?1000' );
				} ?>
			</div>
			<div class="feedback" itemprop="reviewBody">

				<?php if(cz('review_date'))printf( '<div class="date">%1$s</div>', date_i18n( 'j M Y H:i', strtotime( $comment->comment_date ) )); ?>

                <div class="star-text">
					<span itemprop="itemReviewed" itemscope itemtype="http://schema.org/Thing">
					<meta itemprop="name" content="<?php the_title(); ?>"/>
					</span>

                    <div class="stars" itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating">
                        <meta itemprop="ratingValue" content="<?php echo $comment->star; ?>"/>
                        <meta itemprop="bestRating" content="5.0"/>
						<?php  adsFeedBackTM::renderStarRating( $comment->star ); ?>
                    </div>
                </div>

				<?php printf( '<p class="text">%1$s</p>', $comment->comment_content ); ?>
                <div class="gallery">
                    <?php foreach ($gallery as $image):?>
	                        <a href="<?php echo $image['url']?>">
		                            <img src="<?php echo $image[$size];?>" >
		                        </a>
	                    <?php endforeach; ?>
                </div>
			</div>
		</div>
		<?php
	}
}