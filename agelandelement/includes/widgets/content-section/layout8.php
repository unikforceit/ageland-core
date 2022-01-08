<?php
    echo'<!--cta section here-->
        <section class="cta_section_style_02 cta_bg section_padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="ag_cta_section_wrapper cta_wrapper_style_02 text-center">
                            <h2 class="title">'.$settings['title'].'</h2>
                            <p class="description">'.$settings['info'].'</p>
                            <a '.get_that_link($settings['link']).' class="ag_btn btn_1">'.$settings['button'].'</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--cta section end-->';