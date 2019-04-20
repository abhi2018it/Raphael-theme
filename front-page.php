<?php get_header() ?>
<?php $home_url = home_url(); ?>
    <div class="">
        <div class="home-slider" style="opacity: 0">
            <?php do_action( 'ads_top_category' ) ?>
        </div>
    </div>

    <!-- MOST POPULAR CATEGORIES -->
    <?php if(cz('most_popular_enable')){?>
    <div id="most-popular-categories" class="most-popular-categories">
        <div class="container">
            <div class="p-heading">
                <h3 class="p-title hidden-xs">
                    <a href="<?php echo  cz('most_popular_link_head'); ?>"><?php echo  cz('most_popular_head'); ?></a>
                </h3>
            </div>
            <div class="row wrap-slider-most">
                    <?php $mp = cz('most_popular_list');
                     $class_bg = cz('most_popular_fix') ? 'active' : '';?>
                <div class="slider-most owl-theme owl-carousel">
                    <?php
                    foreach ($mp as $item)
                    printf('<div class="wrap-item"><a href="%1$s"><div class="bg %4$s"><div class="bg-img" style="background: url(%2$s?1000) center/cover no-repeat"><div style="background: %6$s;" class="bg-over"></div></div><div style="color: %5$s"><div class="text">%3$s</div></div></div></a></div>',
                        $item['link'],
                        $item['image'],
                        $item['name'],
	                    $class_bg,
	                    isset($item['color']) ? $item['color'] : '#fff',
	                    isset($item['bg_color']) ? $item['bg_color'] : 'rgba(0,0,0,.3)'
                        );
                    ?>
                    </div>

            </div>
        </div>
    </div>
    <?php } ?>

    <!--TOP SELLING PRODUCT-->
    <div id="top-selling-product" class="aship-box-products list-product top-selling-product">
        <div class="container">
            <div class="p-heading">
                <h3 class="aship-title p-title">
                    <a href="<?php echo $home_url?>/product/?orderby=orders">
	                    <?php _e( 'Top Selling Products', 'rap' ); ?>
                    </a>
                </h3>
            </div>
            <div class="row">
				<?php get_template_part( 'template/loop/home/_topselling' ); ?>
            </div>
        </div>
    </div>
    <!--BEST DEALS-->
    <div id="best-deals" class="aship-box-products list-product best-deals">
        <div class="container">
            <div class="p-heading">
                <h3 class="aship-title p-title">
                    <a href="<?php echo $home_url?>/product/?orderby=discount">
	                    <?php _e( 'Best deals', 'rap' ); ?>
                    </a>
                </h3>
            </div>
            <div class="row">
				<?php get_template_part( 'template/loop/home/_bestdials' ); ?>
            </div>
        </div>
    </div>
    <!--NEW ARRIVALS-->
    <div id="new-arrivals" class="aship-box-products list-product new-arrivals">
        <div class="container">
            <div class="p-heading">
                <h3 class="aship-title p-title">
                    <a href="<?php echo $home_url?>/product/?orderby=newest">
	                    <?php _e( 'new arrivals', 'rap' ); ?>
                    </a>
                </h3>
            </div>
            <div class="row">
				<?php get_template_part( 'template/loop/home/_arrivals' ); ?>
            </div>
        </div>
    </div>

<?php if(cz('testimonials_enabled')):?>

    <div id="review-home" class="review-home">
        <div class="container">
            <div class="slider-review">
                <?php foreach (cz('testimonials') as $item):?>
                <div class="">
                    <div class="user"><img src="<?php echo $item['image'] ?>?1000" alt=""></div>
                    <div class="name"><?php echo $item['country'] ?></div>
                    <div class="text"><?php echo $item['text'] ?></div>
                    <div class="star">
                        <span class="starRating">
                            <div class="stars">
                                <?php for($i=1;$i<=5;$i++){
	                                printf('<span class="star %1$s"></span>', $item['stars'] >= $i ? 'star-full' : 'star-no');
                                }?>

                            </div>
                        </span>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>

<?php endif;?>

<?php if ( cz('s_in_name_api') ): ?>

    <div id="instagram-home">
        <div class="p-heading">
            <h3 class="p-title">
                <a target="_blank" href="<?php echo cz('s_link_in'); ?>"><?php echo cz('s_in_name_group'); ?></a>
            </h3>
        </div>
        <div class="instagram-user">#<?php echo cz('s_in_name_api'); ?></div>
        <div class="">
            <div class="slider-instagram">
                <?php get_template_part( 'template/social' ); ?>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php if(cz('home_blog_enable')):?>
    <?php get_template_part( 'template/home/blog' ); ?>
<?php endif;?>


<?php if(cz('tp_home_article')):?>
    <div class="home_article">
        <div class="container">
            <?php do_action( 'adstm_home_article' ) ?>
        </div>
    </div>
<?php endif;?>

<?php
if ( adsTmpl::is_enableSubscribe() ):?>
    <div class="page-subscribe">
        <div class="container">
            <?php do_action( 'adstm_subscribe_form' ) ?>
        </div>
    </div>
<?php endif; ?>

<?php get_template_part( 'template/widget/_features' ); ?>

<?php get_footer() ?>