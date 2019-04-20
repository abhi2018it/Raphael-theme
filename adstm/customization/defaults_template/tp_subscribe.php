<div class="title">
	<?php _e( 'Subscribe to our newsletter', 'rap' ) ?>
</div>
<div class="text"><?php _e('Register now to get updates on promotions and coupons.', 'rap');?></div>
<div class="hr"></div>
<form method="post" accept-charset="UTF-8">
    <input type="hidden" name="meta_web_form_id" value="*ENTER YOUR VALUE*"/>
    <input type="hidden" name="listname" value="*ENTER YOUR VALUE*"/>
    <input type="hidden" name="meta_adtracking" value="*ENTER YOUR VALUE*"/>

    <input  type="email" name="email" value="" placeholder="<?php _e( 'Your email', 'rap' ); ?>" required="required">
    <button name="submit" type="submit" value="Submit" class="submit"><?php _e( 'Subscribe', 'rap' ); ?></button>
</form>