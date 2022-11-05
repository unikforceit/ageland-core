<section class="main-content">
    <div class="archive-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="faq">
                        <div class="accordion" id="accordionExample">
                            <?php if ($settings['faq_list']) {
                                $loop = 0;
                                foreach ($settings['faq_list'] as $faq) {
                                    $loop++;
                                    if ($loop == 1) {
                                        $clps = '';
                                        $show = 'show';
                                        $exp = 'true';
                                    } else {
                                        $clps = 'collapsed';
                                        $show = '';
                                        $exp = 'false';
                                    }
                                    ?>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header <?php echo esc_attr($clps); ?>"
                                            id="faq<?php echo esc_attr($faq['_id'] . $uniq_item); ?>"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#collapse<?php echo esc_attr($faq['_id'] . $uniq_item); ?>"
                                            aria-expanded="<?php echo esc_attr($exp); ?>"
                                            aria-controls="collapse<?php echo esc_attr($faq['_id'] . $uniq_item); ?>">
                                            <?php echo esc_html($faq['f_title']); ?>
                                        </h2>
                                        <div id="collapse<?php echo esc_attr($faq['_id'] . $uniq_item); ?>"
                                             class="accordion-collapse collapse <?php echo esc_attr($show); ?>"
                                             aria-labelledby="faq<?php echo esc_attr($faq['_id'] . $uniq_item); ?>"
                                             data-bs-parent="#<?php echo esc_attr($uniq_id); ?>">
                                            <div class="accordion-body">
                                        <span>
                                            <?php echo esc_html($faq['f_info']); ?>
                                        </span>
                                            </div>
                                        </div>
                                    </div>
                                <?php }
                            } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>