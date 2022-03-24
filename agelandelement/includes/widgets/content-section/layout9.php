<?php
    echo'<!--about us-->
        <section class="about_us_sec about_p" id="about_id">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 offset-md-5">
                        <div class="about_content">
                            <h3>'.$settings['title'].'</h3>
                            <div>'.$settings['info'].'</div>
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
        <!--about us-->
        
        
        
        <!--about -us content-->
        <section class="about_content_iner">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="content_text_about">
                            <h4>'.$settings['title2'].'</h4>
                            <p>'.$settings['info2'].'</p>
                        </div>
                        <!--/.content_text_about-->
                    </div>
                    <div class="col-md-6">
                        <div class="content_text_about">
                            <h4>'.$settings['title3'].'</h4>
                            <p>'.$settings['info3'].'</p>
                        </div>
                        <!--/.content_text_about-->
                    </div>
                </div>
            </div>
            <!--/.container-->
        </section>
        <!--about -us content-->';