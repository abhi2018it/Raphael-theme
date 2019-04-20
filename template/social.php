<?php
$in = new adstm_instagram(cz('s_in_name_api'));
$in->size = 'low';
$params = $in->params();

if($params['images'])foreach ($params['images'] as $image) {
    printf('<div class="">
    <a target="_blank" href="%2$s">
        <div class="medias-box">
            <div class="thumb-box">
                <div class="thumb-wrap">
                    <img src="%1$s" alt="">
                </div> 
            </div>
        </div>
    </a>
</div>',
        $image,
        cz('s_link_in')
    );
}