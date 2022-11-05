<?php
    echo'<!--services section -->
        <section class="services_section section_padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="ag_section_title mb_55 text-center">
                            <h2 class="title">'.$settings['title'].'</h2>
                        </div>
                    </div>
                </div>
                <div class="row">';
if ($settings['feature_list']) {
    foreach ($settings['feature_list'] as $feature) {
        echo '<div class="col-lg-4 col-sm-6">
                        <div class="ag_icon_box_inner icon_box_style_01">
                            '.ageland_get_that_image($feature['image'],'services_icon').'
                            <h4 class="title">'.$feature['feature_title'].'</h4>
                            <p class="description">'.$feature['feature_info'].'</p>
                        </div>
                    </div>';
    }
}
echo '</div>
            </div>
        </section>
        <!--services section end -->';