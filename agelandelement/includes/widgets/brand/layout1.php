<?php

echo '
<!-- Start Brand -->
    <section class="brand-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="brand-logo">
                        <div class="swiper brandSlider">
                            <div class="swiper-wrapper">';
if ($settings['brand_list']) {
    foreach ($settings['brand_list'] as $brand) {
        echo '<div class="swiper-slide">
                                    ' . get_that_image($brand['image']) . '
                                </div>';
    }
}
echo '</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="badge">
                        ' . get_that_image($settings['image']) . '
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Brand -->
'; ?>