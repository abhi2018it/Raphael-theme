<?php get_header() ?>

<!-- About -->
<div class="page-about">
    <div class="container-fluid abous_b1">
        <h1><?php echo cz('tp_about_b1_title'); ?></h1>
        <div class="container">
            <div class="row">
                <div class="col-xs-60 col-md-48 col-md-offset-6">
                    <p><?php echo cz('tp_about_b1_description'); ?></p>
                </div>
            </div>
        </div>
    </div>


	<?php if(cz('tp_our_core_values')): ?>

		<div class="container-fluid abous_b2">
			<div class="container">
				<div class="row">
					<h2><?php _e('Our core values', 'rap'); ?></h2>
					<ul class="col-sm-60">
						<li class="col-sm-12 col-xs-60">
							<i class="ico_about ico1">
                                <svg version="1.1" id="Слой_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     viewBox="0 0 63.9 54" style="enable-background:new 0 0 63.9 54;" xml:space="preserve">
<style type="text/css">
    .st0{fill:<?php echo cz('tp_color'); ?>;stroke:<?php echo cz('tp_color'); ?>;stroke-width:0.216;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:22.9256;}
</style>
                                    <g>
                                        <path class="st0" d="M13.6,12.3c1.4,0.3,2.4,1.7,2.2,3.1c-0.3,1.5-1.7,2.4-3.1,2.2c-1.4-0.3-2.4-1.7-2.1-3.1
		C10.7,13,12.1,12.1,13.6,12.3L13.6,12.3z M12.3,19.4c2.5,0.4,4.8-1.2,5.3-3.7s-1.2-4.8-3.7-5.3c-2.5-0.4-4.8,1.2-5.3,3.7
		C8.2,16.6,9.8,19,12.3,19.4L12.3,19.4z"/>
                                        <path class="st0" d="M16.9,37.7c-1.4-0.3-2.4-1.7-2.2-3.1c0.3-1.5,1.7-2.4,3.1-2.2c1.4,0.3,2.4,1.7,2.1,3.1
		C19.8,37,18.4,38,16.9,37.7L16.9,37.7z M21.9,35.9c0.4-2.5-1.2-4.8-3.7-5.3c-2.5-0.4-4.8,1.2-5.3,3.7c-0.4,2.5,1.2,4.8,3.7,5.3
		S21.4,38.3,21.9,35.9L21.9,35.9z"/>
                                        <path class="st0" d="M9.7,28.6c-1.5-0.3-2.5-1.7-2.2-3.2c0.3-1.5,1.7-2.5,3.2-2.2s2.5,1.7,2.2,3.2C12.6,27.8,11.2,28.8,9.7,28.6
		L9.7,28.6z M11,21.4c-2.5-0.5-4.9,1.2-5.3,3.7c-0.5,2.5,1.2,4.9,3.7,5.3c2.5,0.5,4.9-1.2,5.3-3.7C15.2,24.2,13.5,21.8,11,21.4
		L11,21.4z"/>
                                        <path class="st0" d="M41.8,40.3c-0.2,0.2-0.5,0.2-0.7,0L34.8,34c-0.2-0.2-0.2-0.5,0-0.7l0.2-0.2c0.2-0.2,0.5-0.2,0.7,0
		c6.8,6.8,6.4,6.4,6.4,6.6C42.1,40,41.9,40.1,41.8,40.3L41.8,40.3z M34.8,43.7c-1.4-1.4-2-2-3.4-3.4l2.8-4.1l4.7,4.7L34.8,43.7
		L34.8,43.7z M31.5,49.7c-2.2,2.2-5.4,3-8.2,2c-1.4-4.1,1.3-9.6,5.5-9.6c1.1,0,2.2,0.4,3,1.2C33.5,45,33.4,47.9,31.5,49.7L31.5,49.7
		z M22,45.1C9.6,44.2,0.5,33,2.2,20.6C3.8,9.4,13.6,1.7,24.3,2c4.9,0.2,9,1.9,9.3,4c0.3,1.8-2.1,3.7-2.4,3.9l-3.8,2.9
		c-3,2.3-3.4,6.6-0.9,9.4c2.1,2.3,5.8,2.8,8.5,0.8l3.8-2.9c0.9-0.6,2.3-1.4,3.5-1.4c1.6,0,2.6,1.6,2.8,4.7l-9,7.9
		c-2-0.7-4.1,1.5-3.2,3.4c-3.7,5.5-3.6,5.2-3.7,5.5C26,40,23.4,42.2,22,45.1L22,45.1z M63,12.1c-1.8-1.8-4.4-0.5-5.5,0.4l-10.7,9.4
		c-0.6-4.1-2.7-5.1-4.5-5.1c-2,0-4,1.3-4.6,1.8l-3.8,2.9c-2.1,1.6-5.1,1-6.5-1.3c-1.2-2-0.7-4.5,1.1-5.9l3.8-2.9
		c5.5-4.2,3.9-9.9-6.2-11.1c-12.2-1.5-24,7.1-25.9,20c-1.9,13.3,7.8,25.4,21,26.7c-0.5,1.9-0.4,4,0.4,5.9c0.1,0.2,0.3,0.4,0.5,0.5
		c5.7,2.4,13-1.8,12.6-7.5c0.3,0-0.1,0.2,5.6-3.7c2,0.9,4.2-1.1,3.4-3.1l13.3-15.1c0.3-0.4,0.3-1-0.1-1.3c-0.4-0.3-1-0.3-1.3,0.1
		l-13,14.9l-5-5c0.4-0.4,20.2-17.7,21.1-18.5c0,0,1.9-1.6,3-0.5c1.1,1.1-0.5,2.9-0.5,3l-3.5,4c-0.3,0.4-0.3,1,0.1,1.3
		c0.4,0.3,1,0.3,1.3-0.1l3.5-4C63.5,16.5,64.9,13.9,63,12.1L63,12.1z"/>
                                    </g>
</svg>
                            </i>

							<div class=""><?php _e('Be Adventurous, Creative, and Open-Minded', 'rap'); ?></div>
						</li>
						<li class="col-sm-12 col-xs-60">
							<i class="ico_about ico2">
                                <svg version="1.1" id="Слой_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     viewBox="0 0 66.8 54" style="enable-background:new 0 0 66.8 54;" xml:space="preserve">
<style type="text/css">
    .st0{fill:<?php echo cz('tp_color'); ?>;}
</style>
                                    <path class="st0" d="M62.4,5c-5.7-6-15.2-6.5-21.6-1.2L33.4,10L26,3.8C19.7-1.5,10.2-1,4.4,5C1.4,8.2-0.2,12.6,0,17
	c0.2,4.4,2.3,8.6,5.7,11.4L9,31.2c-0.7,1.6-0.6,3.4,0.5,4.8c0.8,1.1,2,1.7,3.3,1.9c0.3,0,0.6,0,0.9,0c0,0.2,0,0.4,0,0.7
	c0,1.5,0.7,2.8,1.9,3.7c1,0.8,2.2,1.1,3.3,1c0,0.2,0,0.5,0,0.7c0,1.5,0.7,2.8,1.9,3.7c1,0.8,2.1,1.1,3.3,1c0,0.2,0,0.5,0,0.7
	c0,1.5,0.7,2.8,1.9,3.7c0.8,0.7,1.8,1,2.9,1c1.1,0,2.3-0.4,3.2-1.2l0.4-0.3c0.9,0.8,2.1,1.2,3.2,1.2c1.2,0,2.4-0.4,3.3-1.3
	c1-0.9,1.5-2.2,1.5-3.5c0-0.1,0-0.2,0-0.4c0.2,0,0.4,0.1,0.7,0.1c1.2,0,2.4-0.4,3.3-1.3c1-0.9,1.5-2.2,1.5-3.5c0-0.1,0-0.2,0-0.4
	c0.2,0,0.4,0.1,0.7,0.1c1.2,0,2.4-0.4,3.3-1.3c1-0.9,1.5-2.2,1.5-3.5c0-0.1,0-0.2,0-0.4c0.2,0,0.4,0.1,0.7,0.1
	c1.2,0,2.4-0.4,3.3-1.3c1-0.9,1.5-2.2,1.5-3.5c0-0.4-0.1-0.7-0.1-1c0,0,0,0,0,0l4.7-4c3.4-2.8,5.5-7,5.7-11.4
	C67,12.6,65.4,8.2,62.4,5z M7.1,26.8c-3-2.5-4.7-6-4.9-9.9C2,13,3.3,9.3,6,6.5c5-5.2,13.2-5.6,18.6-1l17.5,14.7
	c0.6,0.5,0.9,1.2,1,1.9c0,0.8-0.2,1.5-0.7,2c-1,1-2.5,1.1-3.6,0.2l-7.9-6.4c-0.5-0.4-1.1-0.3-1.5,0.2c0,0,0,0,0,0l0,0
	c-1.3,1.7-3.3,2.6-5.4,2.6c-3.8,0-6.9-3.1-6.9-6.9H15c0,3.4,1.8,6.3,4.5,7.9l-9.1,7.6c-0.1,0-0.1,0.1-0.1,0.1L7.1,26.8z M27.1,51.3
	c-0.6-0.5-1-1.3-1-2.1c0-0.8,0.3-1.6,1-2.1l0.6-0.5c0.2,1.1,0.7,2.1,1.5,2.9l1.6,1.5l-0.2,0.2C29.5,52,28.1,52.1,27.1,51.3z
	 M37.3,50.8c-1,0.9-2.6,1-3.6,0L30.6,48c-0.5-0.5-0.9-1.2-0.9-1.9c0-0.7,0.3-1.4,0.8-2c0.5-0.5,1.1-0.7,1.8-0.7
	c0.6,0,1.3,0.2,1.8,0.7l1,1l2.1,2c0.5,0.5,0.8,1.2,0.9,1.9C38.1,49.6,37.8,50.3,37.3,50.8z M42.7,45.7c-1,0.9-2.6,1-3.6,0l-0.4-0.4
	c0,0,0,0,0,0L36,42.8l0,0c-0.5-0.5-0.9-1.2-0.9-1.9c0-0.7,0.3-1.4,0.8-2c0.5-0.5,1.1-0.7,1.8-0.7c0.6,0,1.3,0.2,1.8,0.7l3.2,2.9
	c0.5,0.5,0.9,1.2,0.9,1.9C43.5,44.5,43.2,45.2,42.7,45.7z M48.1,40.6c-1,0.9-2.6,1-3.6,0l-3.2-2.9c-0.5-0.5-0.9-1.2-0.9-1.9
	s0.3-1.4,0.8-2c0.5-0.5,1.2-0.7,1.8-0.7c0.6,0,1.3,0.2,1.8,0.7l2.3,2.1l0.9,0.8c0.5,0.5,0.8,1.2,0.9,1.9
	C48.9,39.4,48.6,40.1,48.1,40.6z M53.5,35.4c-1,0.9-2.6,1-3.6,0l-0.4-0.4c0,0,0,0,0,0l-2.5-2.3l-0.3-0.3c-0.5-0.5-0.9-1.2-0.9-1.9
	c0-0.7,0.3-1.4,0.8-2c0.5-0.5,1.1-0.7,1.8-0.7c0.6,0,1.3,0.2,1.8,0.7l3.2,2.9c0.5,0.5,0.9,1.2,0.9,1.9S54,34.9,53.5,35.4z
	 M64.6,16.9c-0.2,3.9-2,7.4-4.9,9.9l-4.3,3.7c-0.1-0.2-0.3-0.3-0.4-0.5l-3.2-2.9c-1.8-1.7-4.7-1.7-6.5,0.1c-1,0.9-1.5,2.2-1.5,3.5
	c0,0.1,0,0.2,0,0.4c-1.4-0.2-2.9,0.2-3.9,1.2c-1,0.9-1.5,2.2-1.5,3.5c0,0.1,0,0.2,0,0.4c-1.4-0.2-2.9,0.2-3.9,1.2
	c-1,0.9-1.5,2.2-1.5,3.5c0,0.1,0,0.2,0,0.4c-1.4-0.2-2.9,0.2-3.9,1.2c-0.3,0.3-0.5,0.6-0.7,0.9c-0.1,0-0.3,0.1-0.4,0.2l-2.3,1.9
	c0,0,0,0,0,0l-0.3,0.3c-1,0.8-2.4,0.9-3.4,0.1c-0.6-0.5-1-1.3-1-2.1c0-0.8,0.3-1.6,0.9-2.1l0,0l0,0l11.2-9.4l-1.4-1.7l-11.2,9.4l0,0
	h0h0l-0.3,0.3c-1,0.8-2.4,0.9-3.4,0.1c-0.6-0.5-1-1.3-1-2.1s0.3-1.6,0.9-2.1l0,0l11.4-9.5l-1.4-1.7l-11.4,9.5c0,0,0,0,0,0L15,35.1
	c-0.6,0.5-1.2,0.7-2,0.6c-0.7-0.1-1.4-0.4-1.8-1c-0.8-1.1-0.6-2.8,0.6-3.8l10-8.3c0.7,0.2,1.5,0.3,2.3,0.3c2.4,0,4.7-0.9,6.3-2.6
	l7.2,5.8c2,1.6,4.7,1.4,6.5-0.4c0.9-1,1.4-2.3,1.3-3.6c-0.1-1.3-0.7-2.6-1.7-3.5l-8.5-7.1l7.1-5.9c5.5-4.6,13.7-4.1,18.6,1
	C63.5,9.3,64.8,13,64.6,16.9z"/>
</svg>
                            </i>

							<div class=""><?php _e('Create Long-Term Relationships with Our Customers', 'rap'); ?></div>
						</li>
						<li class="col-sm-12 col-xs-60">
							<i class="ico_about ico3">
                                <svg version="1.1" id="Слой_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     viewBox="0 0 60.3 54" style="enable-background:new 0 0 60.3 54;" xml:space="preserve">
<style type="text/css">
    .st0{fill:<?php echo cz('tp_color'); ?>;stroke:<?php echo cz('tp_color'); ?>;stroke-width:0.4069;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:22.9256;}
    .st1{fill:none;stroke:<?php echo cz('tp_color'); ?>;stroke-width:2.4414;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:22.9256;}
</style>
                                    <g>
                                        <path class="st0" d="M53.4,46.2v6H42v-6c-1.6,0-3.3,0-4.9,0c3.5-4.5,6.9-9.1,10.4-13.6c0.1-0.1,0.2-0.1,0.3,0
		c3.2,4.4,6.4,8.8,9.5,13.2c0.1,0.1,0.2,0.5-0.3,0.5L53.4,46.2L53.4,46.2z M29,0.8c-7.2,9.6-14,16.5-21.2,26.1
		C7.2,27.8,7.4,29,8.9,29h8.6v6.4c-1.2-1.6-2.3-3.2-3.5-4.8c-0.5-0.6-1.4-0.6-2,0c-3.9,5.1-7.5,9.8-11.5,15C-0.2,46.8,0.6,48,1.8,48
		h3.8v5.8h49.7V48c1,0,2,0,2.9,0c1.6-0.1,2.1-1.3,1.4-2.3c-3.6-5-7.2-10-10.8-14.9c-0.5-0.7-1.5-0.7-2,0l-3.7,4.9V29h7
		c1.1,0.1,2.2-1.1,1.4-2.3L31.4,0.8C30.7,0,29.7,0.1,29,0.8L29,0.8z M40.2,52.2H20.6c0-1.4,0-2.8,0-4.2c1,0,2,0,2.9,0
		c1.7,0,2.3-1,1.4-2.3l-5.7-7.8V27.2c-2.9,0-5.7,0-8.6,0c-0.6,0-0.5-0.5-0.3-0.8L29.5,3.2c0.4-0.5,1-0.5,1.3,0
		c6,8.5,12,14.8,18.1,23.3c0.3,0.4,0.1,0.8-0.4,0.8h-7.4V38c-2,2.6-3.9,5.1-5.9,7.7c-0.8,1.2-0.2,2.3,1.4,2.3h3.6L40.2,52.2
		L40.2,52.2z M18.8,46.2v6H7.4v-6c-1.3,0-3,0-4.3,0c-0.3,0-0.4-0.2-0.3-0.5c3.2-4.2,6.6-8.6,9.8-12.8c0.3-0.4,0.7-0.2,0.9,0
		c3.1,4.3,6.2,8.5,9.3,12.8c0.2,0.2,0,0.5-0.2,0.4L18.8,46.2L18.8,46.2z"/>
                                        <path class="st1" d="M51,47.2V50h-4.5 M16.4,47.2V50h-4.5"/>
                                    </g>
</svg>
                            </i>

							<div class=""><?php _e('Pursue Growth and Learning', 'rap'); ?></div>
						</li>
						<li class="col-sm-12 col-xs-60">
							<i class="ico_about ico4">
                                <svg version="1.1" id="Слой_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     viewBox="0 0 69.1 54" style="enable-background:new 0 0 69.1 54;" xml:space="preserve">
<style type="text/css">
    .st0{fill:<?php echo cz('tp_color'); ?>;stroke:<?php echo cz('tp_color'); ?>;stroke-width:0.7087;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:22.9256;}
</style>
                                    <g>
                                        <path class="st0" d="M57.5,32c-0.3,0.2-0.3,0.6-0.2,0.9l4.2,9.9l-26.8-7l4.8-18.3l26.9,7.1L57.5,32L57.5,32z M68.7,24
		c-0.1-0.3-0.3-0.5-0.6-0.6l-29.1-7.6c-0.2-0.1-0.4,0-0.6,0.1c-0.2,0.1-0.3,0.3-0.4,0.5l-5.2,19.8l-4.3,16.5
		c-0.1,0.4,0.1,0.8,0.6,0.9c0.1,0,0.1,0,0.2,0c0.3,0,0.7-0.2,0.7-0.6l4.1-15.8l28.4,7.4c0.1,0,0.1,0,0.2,0c0.2,0,0.4-0.1,0.6-0.3
		c0.2-0.2,0.2-0.5,0.1-0.8L59,32.8l9.5-8.1C68.7,24.6,68.8,24.3,68.7,24L68.7,24z"/>
                                        <path class="st0" d="M30.5,23.1L2.8,20.9l7.2-8c0.2-0.3,0.3-0.6,0.1-0.9L4.2,2L32,4.2L30.5,23.1L30.5,23.1z M33.4,3
		c-0.1-0.2-0.3-0.3-0.5-0.3l-30-2.4c-0.3,0-0.6,0.1-0.7,0.4C2,1,2,1.3,2.1,1.5l6.3,10.7L0.6,21c-0.2,0.2-0.3,0.5-0.1,0.8
		c0.1,0.3,0.4,0.5,0.7,0.5l29.2,2.3l-0.7,9.1c0,0.4,0.3,0.8,0.7,0.8c0,0,0,0,0.1,0c0.4,0,0.7-0.3,0.8-0.7l0.8-9.8l1.6-20.4
		C33.6,3.4,33.5,3.1,33.4,3L33.4,3z"/>
                                        <path class="st0" d="M11.4,43.4c0.2,0,0.4-0.1,0.5-0.2l1.9-1.9c0.3-0.3,0.3-0.8,0-1.1s-0.8-0.3-1.1,0l-1.9,1.9
		c-0.3,0.3-0.3,0.8,0,1.1C11,43.3,11.2,43.4,11.4,43.4L11.4,43.4z"/>
                                        <path class="st0" d="M16.1,38.7c0.2,0,0.4-0.1,0.5-0.2l1.9-1.9c0.3-0.3,0.3-0.8,0-1.1s-0.8-0.3-1.1,0l-1.9,1.9
		c-0.3,0.3-0.3,0.8,0,1.1C15.7,38.6,15.9,38.7,16.1,38.7L16.1,38.7z"/>
                                        <path class="st0" d="M12.8,38.4c0.2,0.2,0.3,0.2,0.5,0.2c0.2,0,0.4-0.1,0.5-0.2c0.3-0.3,0.3-0.8,0-1.1L12,35.4
		c-0.3-0.3-0.8-0.3-1.1,0c-0.3,0.3-0.3,0.8,0,1.1L12.8,38.4L12.8,38.4z"/>
                                        <path class="st0" d="M17.5,43.2c0.2,0.2,0.3,0.2,0.5,0.2c0.2,0,0.4-0.1,0.5-0.2c0.3-0.3,0.3-0.8,0-1.1l-1.9-1.9
		c-0.3-0.3-0.8-0.3-1.1,0c-0.3,0.3-0.3,0.8,0,1.1L17.5,43.2L17.5,43.2z"/>
                                        <path class="st0" d="M39.1,34.4c0.1,0,0.1,0,0.2,0c0.3,0,0.7-0.2,0.7-0.6l3.3-13c0.1-0.4-0.1-0.8-0.6-0.9c-0.4-0.1-0.8,0.1-0.9,0.6
		l-3.3,13C38.5,33.9,38.7,34.3,39.1,34.4L39.1,34.4z"/>
                                        <path class="st0" d="M27.2,20.5C27.2,20.5,27.2,20.5,27.2,20.5c0.5,0,0.8-0.3,0.8-0.7l1-13.5c0-0.4-0.3-0.8-0.7-0.8
		c-0.4,0-0.8,0.3-0.8,0.7l-1,13.5C26.4,20.1,26.8,20.5,27.2,20.5L27.2,20.5z"/>
                                    </g>
</svg>
                            </i>

							<div class=""><?php _e('Inspire Happiness and Positivity', 'rap'); ?></div>
						</li>
						<li class="col-sm-12 col-xs-60">
							<i class="ico_about ico5">
                                <svg version="1.1" id="Слой_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     viewBox="0 0 52.8 54" style="enable-background:new 0 0 52.8 54;" xml:space="preserve">
<style type="text/css">
    .st0{fill:<?php echo cz('tp_color'); ?>;stroke:<?php echo cz('tp_color'); ?>;stroke-width:0.216;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:22.9256;}
    .st1{fill:none;stroke:<?php echo cz('tp_color'); ?>;stroke-width:2.5511;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:22.9256;}
    .st2{fill:none;stroke:<?php echo cz('tp_color'); ?>;stroke-width:2.5513;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:22.9256;}
    .st3{fill:none;stroke:<?php echo cz('tp_color'); ?>;stroke-width:2.5512;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:22.9256;}
</style>
                                    <path class="st0" d="M36.6,15.1l-1.1-1.1c-1.6-1.6-3.9-2.3-6.1-2l-0.3-1.9c0.5-0.1,0.9-0.1,1.4-0.1c2.4,0,4.6,0.9,6.3,2.6l1.1,1.1
	L36.6,15.1L36.6,15.1z"/>
                                    <path class="st0" d="M24.5,15.1l-1.3-1.3l1.1-1.1c0.7-0.7,1.5-1.3,2.4-1.7l0.8,1.7c-0.7,0.3-1.4,0.8-1.9,1.4L24.5,15.1L24.5,15.1z"
                                    />
                                    <polygon class="st0" points="4.4,37 6.2,37.2 6.5,35.3 4.6,35.1 "/>
                                    <path class="st0" d="M19.7,46.6l-1.2-1.5l2-1.6c1-0.8,2-1.4,3.1-1.4c2.2-0.1,3.5-0.4,4.4-1.1L40.5,31c0.5-0.4,0.8-1,0.9-1.7
	s-0.1-1.3-0.5-1.8l-8.2-10.4c-0.8-1-2.5-1.2-3.5-0.4l-10.3,8.2c-0.3,0.2-0.6,0.3-1,0.3c-0.6-0.1-1.1-0.6-1.2-1.2l-0.6-7
	c-0.1-0.9-0.8-1.6-1.7-1.7c-1-0.1-2,0.6-2.1,1.7c0,0.1,0,0.2,0,0.3l0.5,11.3c0,0.3,0,0.6,0,0.9c-0.2,1.4-0.9,2.8-2.1,3.7L9.7,34
	l-1.2-1.5l1.1-0.9c0.7-0.6,1.2-1.5,1.3-2.4c0-0.2,0-0.4,0-0.6l-0.5-11.3c0-0.2,0-0.4,0-0.6c0.2-2.1,2.1-3.6,4.2-3.3
	c1.8,0.2,3.2,1.7,3.3,3.4l0.5,6l9.5-7.5c0.9-0.7,2.1-1.1,3.2-0.9s2.2,0.7,2.9,1.6l8.2,10.4c0.7,0.9,1.1,2.1,0.9,3.2
	s-0.7,2.2-1.6,2.9l-12.5,9.9c-1.6,1.2-3.6,1.5-5.5,1.5c-0.6,0-1.1,0.3-2,1L19.7,46.6L19.7,46.6z"/>
                                    <path class="st0" d="M16.8,54l-1.2-1.5l2.7-2.1c0.5-0.4,0.8-1,0.9-1.7s-0.1-1.3-0.5-1.8L8,33.4c-0.8-1-2.5-1.2-3.5-0.4l-2.7,2.1
	l-1.2-1.5l2.7-2.1c0.9-0.7,2.1-1.1,3.2-0.9c1.1,0.1,2.2,0.7,2.9,1.6l10.7,13.5c0.7,0.9,1.1,2.1,0.9,3.2s-0.7,2.2-1.6,2.9L16.8,54
	L16.8,54z"/>
                                    <path class="st1" d="M1.3,26c0-5.7,1.9-11.3,5.6-15.8c8.6-10.4,24-11.9,34.4-3.3"/>
                                    <path class="st2" d="M51.2,32.1C48.8,43.3,39.4,51.6,28,52.8"/>
                                    <path class="st3" d="M47,13.2c2.4,3.2,4,7,4.4,11"/>
</svg>
                            </i>

							<div class=""><?php _e('Make Sure Our Customers are Pleased', 'rap'); ?></div>
						</li>
					</ul>
				</div>
			</div>
		</div>

	<?php endif; ?>

    <div class="container-fluid abous_b6">
        <div class="container">
            <div class="row">
                <div class="col-mg-20">
                    <h2><?php echo cz('tp_about_us_keep_in_contact_title'); ?></h2>

                    <p class="text"><?php echo cz('tp_about_us_keep_in_contact_description'); ?></p>
                </div>
                <div class="col-mg-20">
                    <a class="btn btn_shopping"
                       href="<?php echo esc_url( home_url('/product/') ) ?>"><?php _e('Start shopping', 'rap'); ?></a>
                    <a class="btn btn_contact"
                       href="<?php echo esc_url( home_url('/contact-us/') ) ?>"><?php _e('Contact us', 'rap'); ?></a>
                </div>
            </div>
        </div>
    </div>


	<?php if(cz('tp_our_partners')): ?>

		<div class="container-fluid abous_b4">
			<div class="container">
				<div class="row">
					<div class="col-xs-60">
						<h2><?php _e('Our partners', 'rap'); ?></h2>

						<p><?php echo cz('tp_our_partners_description'); ?>.</p>
                        <div class="bg1">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/about/b4-1.png?1000" alt="" class="img-responsive">
                        </div>
                        <div class="bg2">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/about/b4-2.png?1000" alt="" class="img-responsive">
                        </div>
					</div>

				</div>
			</div>
		</div>

	<?php endif; ?>



</div>

<?php get_footer() ?>
