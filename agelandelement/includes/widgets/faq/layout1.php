<?php

    echo '<!--faq section here-->
        <section class="faq_section section_padding overflow-hidden">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-6">
                        <div class="faq_section_img">
                            '.get_that_image($settings['image'], 'faq_img').'
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="ag_faq_section_content_wrapper mt-5 mt-lg-0">
                            <h2 class="title">'.$settings['title'].'</h2>
                            <div class="dl_accordion_container">
                                <div class="dl_accordion">';

if ($settings['faq_list']) {
    $index = 0;
    foreach ($settings['faq_list'] as $faq) {
        $index++;
        if ($index == 1){
            $show = 'is-active';
            $collapsed = '';
        } else {
            $show = '';
            $collapsed = 'ease-out';
        }
        echo '<div class="dl_accordion_item dl_accordion_style_01 '.$show.' '.$collapsed.'">
                                        <div class="dl_accordion_item_title">
                                            <h3 class="dl_accordion_title">'.$faq['f_title'].'</h3>
                                        </div>
                                        <div class="dl_accordion_panel">
                                            <p class="dl_desc">'.$faq['f_info'].'</p>
                                        </div>
                                    </div>';
    }
}
echo '</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--faq section end-->';