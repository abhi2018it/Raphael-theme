<?php get_header() ?>
<div class="page-content">
	<div class="container">
		<div class="page-404">
			<div class="page-404__text">
				<h3><?php _e( '404 Page not found', 'rap' ); ?>.</h3>
				<p><?php _e( 'Sorry, but the page you are looking for has not been found', 'rap' ); ?>.<br>
					<?php _e( 'Please check your spelling', 'rap' ); ?>.</p>
			</div>
			<div class="page-404__back_btn">
				<a href="/" class="btn"><?php _e( 'Go To Homepage', 'rap' ); ?></a>
			</div>
		</div>
	</div>
</div>
<?php get_footer() ?>
