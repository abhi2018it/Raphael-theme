<?php global $post; ?>

<?php if ( $post->post_content != '' ) : ?>

	<div class="content" itemprop="description" itemtype="http://schema.org/Product">

		<div class="wrap-content"><?php the_content() ?></div>

	</div>

<?php endif; ?>