<?php
    echo'<!--cta section here-->
        <section class="cta_section cta_bg section_padding grdient_overlay">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="ag_cta_section_wrapper text-center">
                            <h2 class="title text-white">'.$settings['title'].'</h2>
                            <p class="description text-white">'.$settings['info'].'</p>
                            <a '.get_that_link($settings['link']).' class="ag_btn btn_1">'.$settings['button'].'</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--cta section end-->';