<?php
    echo'<!-- about section -->
        <section class="about_section about_bg padding_bottom">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-5 col-md-6 order-2 order-md-1">
                        <div class="ag_about_text_box">
                            <h2 class="title"> '.$settings['title'].'</h2>
                            <p class="description">'.$settings['info'].'</p>
                            <a '.get_that_link($settings['link']).' class="ag_btn btn_1">'.$settings['button'].'</a>
                            <h4 class="sub_title"><span>Try Us </span> for better services.</h4>
                            <p class="description">We’ve a huge number of team members and all member’s are highly skilled & experienced.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 order-1 order-md-2">
                        <div class="ag_img_box mb-5 mt-md-0">
                            '.get_that_image($settings['image'], 'img-fluid').'
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about section end -->';