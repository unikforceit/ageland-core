<?php

    echo '<!--about us-->
        <section class="about_us_sec" id="about_id">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 offset-md-5">
                        <div class="about_content">
                            <h3>'.$settings['title'].'</h3>
                            <p>'.$settings['info'].'</p>
                            <a '.ageland_get_that_link($settings['link']).' class="btn">'.$settings['button'].'</a>
                        </div>
                        <!--/.about_content-->
                    </div>
                </div>
            </div>
            <!--/.container-->
            <div class="right_bg_about">
                '.get_that_image($settings['image'], 'one').'
                '.get_that_image($settings['image1'], 'two').'
            </div>
        </section>
        <!--about us-->';