<?php
    echo'<!--services section -->
        <section class="services_section padding_bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ag_services_section_wrapper">';
if ($settings['feature_list']) {
    foreach ($settings['feature_list'] as $feature) {
        echo '<div class="ag_icon_box_inner icon_box_style_01">
                                '.ageland_get_that_image($feature['image'],'services_icon').'
                                <h4 class="title">'.$feature['feature_title'].'</h4>
                                <p class="description">'.$feature['feature_info'].'</p>
                            </div>';
    }
}
echo '</div>
                    </div>
                </div>
            </div>
        </section>
        <!--services section end -->';