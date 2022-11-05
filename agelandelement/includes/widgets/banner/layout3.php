<?php
//echo '<!--hero section-->
//        <section class="ag_banner_part banner_bg_img_shape overflow-hidden">
//            <div class="container">
//                <div class="row justify-content-between align-items-center">
//                    <div class="col-lg-6">
//                        <div class="ag_banner_content_inner banner_style_02">
//                            <h5 class="sub_title">' . $settings['sub_title'] . '</h5>
//                            <h2 class="banner_title">' . $settings['title'] . '</h2>
//                            <p class="description">' . $settings['info'] . '</p>
//                            <div class="btn_list">
//                                <a ' . ageland_get_that_link($settings['link1']) . ' class="ag_btn btn_1 ">' . $settings['button1'] . '</a>
//
//                                <a ' . ageland_get_that_link($settings['link2']) . ' class=" video_popup_btn">
//                                    <span class="fa fa-play btn_box_shadow_1"></span>
//                                </a>
//                            </div>
//                        </div>
//                    </div>
//                    <div class="col-lg-5">
//                        <div class="ag_img_box pr-0 image_animation_style_01 mouse_move_animation overflow-visiable">
//                            ' . get_that_image($settings['image'], 'img-fluid') . '
//                            <div class="profile_thumb_shape wow fadeIn" data-wow-delay=".6s">'; ?>
<!--    <div class="layer layer2" data-depth="0.20"><img src="--><?php //echo esc_url($settings['image4']['url']); ?><!--" alt="#"-->
<!--                                                     data-parallax='{"x": 0, "y": 0, "rotateZ": -40 }'></div>-->
<?php //echo '</div>
//                        </div>
//                    </div>
//                </div>
//            </div>';
//if ($settings['shape_list']) {
//    $loop = 0;
//    foreach ($settings['shape_list'] as $shape) {
//        $loop++;
//        if ($loop == 1) {
//            $cls = 'one';
//        } elseif ($loop == 2) {
//            $cls = 'two';
//        } elseif ($loop == 3) {
//            $cls = 'three';
//        } elseif ($loop == 4) {
//            $cls = 'four';
//        } elseif ($loop == 5) {
//            $cls = 'two';
//        } else {
//            $cls = 'one';
//        }
//        echo '' . get_that_image($shape['shape_image'], 'home_four_banner_shape_0' . $loop . ' shape-' . $cls . '') . '';
//    }
//}
//echo '</section>
//        <!--hero section-->'; ?>

<?php echo '
<!-- Start Contact Form -->
<section class="contact-form-section">
    <div class="archive-section">
        <div class="container">
            <div class="row justify-content-center justify-content-lg-between">
                <div class="col-lg-7 wow animate__fadeInUp" data-wow-duration="2s">
                    <div class="contact-form">
                        <div class="input-group">
                                <span class="input-icon">
                                    <svg width="15" height="13.5" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.427 5.63818L10.0945 8.34796C9.46492 8.84746 8.57908 8.84746 7.94946 8.34796L4.58887 5.63818" stroke="#224259" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12.6816 14.75C14.9627 14.7563 16.5 12.8822 16.5 10.5788V5.42751C16.5 3.12412 14.9627 1.25 12.6816 1.25H5.31835C3.03734 1.25 1.5 3.12412 1.5 5.42751V10.5788C1.5 12.8822 3.03734 14.7563 5.31835 14.75H12.6816Z" stroke="#224259" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>

                                </span>
                            <input type="text" class="form-control" placeholder="Name" aria-label="Name">
                        </div>
                        <div class="input-group">
                                <span class="input-icon">
                                    <svg width="15" height="13.5" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.427 5.63818L10.0945 8.34796C9.46492 8.84746 8.57908 8.84746 7.94946 8.34796L4.58887 5.63818" stroke="#224259" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12.6816 14.75C14.9627 14.7563 16.5 12.8822 16.5 10.5788V5.42751C16.5 3.12412 14.9627 1.25 12.6816 1.25H5.31835C3.03734 1.25 1.5 3.12412 1.5 5.42751V10.5788C1.5 12.8822 3.03734 14.7563 5.31835 14.75H12.6816Z" stroke="#224259" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>

                                </span>
                            <input type="email" class="form-control" placeholder="Email" aria-label="Email">
                        </div>
                        <div class="input-group">
                                <span class="input-icon">
                                    <svg width="15" height="13.5" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.427 5.63818L10.0945 8.34796C9.46492 8.84746 8.57908 8.84746 7.94946 8.34796L4.58887 5.63818" stroke="#224259" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12.6816 14.75C14.9627 14.7563 16.5 12.8822 16.5 10.5788V5.42751C16.5 3.12412 14.9627 1.25 12.6816 1.25H5.31835C3.03734 1.25 1.5 3.12412 1.5 5.42751V10.5788C1.5 12.8822 3.03734 14.7563 5.31835 14.75H12.6816Z" stroke="#224259" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>

                                </span>
                            <input type="number" class="form-control" placeholder="Phone No" aria-label="Phone No">
                        </div>
                        <div class="input-group">
                            <textarea class="form-control" placeholder="Project Details"></textarea>
                        </div>
                        <button type="submit" class="contact_form_btn">Send Your Message</button>
                    </div>
                </div>
                <div class="col-lg-5 wow animate__fadeInUp" data-wow-duration="3s">
                    <div class="section-header pb-48">
                        <span class="sub-title">' . $settings['sub_title'] . '</span>
                        <h3 class="title">' . $settings['title'] . '</h3>
                    </div>
                    <div class="support-items">
                        <div class="support-item">
                            <div class="icon icon-1">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                            d="M17.98 10.79V14.79C17.98 15.05 17.97 15.3 17.94 15.54C17.71 18.24 16.12 19.58 13.19 19.58H12.79C12.54 19.58 12.3 19.7 12.15 19.9L10.95 21.5C10.42 22.21 9.56 22.21 9.03 21.5L7.82999 19.9C7.69999 19.73 7.41 19.58 7.19 19.58H6.79001C3.60001 19.58 2 18.79 2 14.79V10.79C2 7.86001 3.35001 6.27001 6.04001 6.04001C6.28001 6.01001 6.53001 6 6.79001 6H13.19C16.38 6 17.98 7.60001 17.98 10.79Z"
                                            stroke="#224259" stroke-width="1.5" stroke-miterlimit="10"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    <path
                                            d="M21.98 6.79001V10.79C21.98 13.73 20.63 15.31 17.94 15.54C17.97 15.3 17.98 15.05 17.98 14.79V10.79C17.98 7.60001 16.38 6 13.19 6H6.79004C6.53004 6 6.28004 6.01001 6.04004 6.04001C6.27004 3.35001 7.86004 2 10.79 2H17.19C20.38 2 21.98 3.60001 21.98 6.79001Z"
                                            stroke="#224259" stroke-width="1.5" stroke-miterlimit="10"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M13.4955 13.25H13.5045" stroke="#224259" stroke-width="2"
                                          stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M9.9955 13.25H10.0045" stroke="#224259" stroke-width="2"
                                          stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M6.4955 13.25H6.5045" stroke="#224259" stroke-width="2"
                                          stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div class="content">
                                <h4 class="title">Technical and account support</h4>
                                <p class="info">We’re here to help! If you have technical issues or questions about
                                    your account. <a href="#">Contact Support.</a></p>
                            </div>
                        </div>
                        <div class="support-item">
                            <div class="icon icon-2">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                            d="M11.9697 22C17.4926 22 21.9697 17.5228 21.9697 12C21.9697 6.47715 17.4926 2 11.9697 2C6.44688 2 1.96973 6.47715 1.96973 12C1.96973 17.5228 6.44688 22 11.9697 22Z"
                                            stroke="white" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    <path
                                            d="M12 16.5C14.4853 16.5 16.5 14.4853 16.5 12C16.5 9.51472 14.4853 7.5 12 7.5C9.51472 7.5 7.5 9.51472 7.5 12C7.5 14.4853 9.51472 16.5 12 16.5Z"
                                            stroke="white" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    <path d="M4.90039 4.93018L8.44039 8.46018" stroke="white" stroke-width="1.5"
                                          stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M4.90039 19.07L8.44039 15.54" stroke="white" stroke-width="1.5"
                                          stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M19.0498 19.07L15.5098 15.54" stroke="white" stroke-width="1.5"
                                          stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M19.0498 4.93018L15.5098 8.46018" stroke="white" stroke-width="1.5"
                                          stroke-linecap="round" stroke-linejoin="round" />
                                </svg>

                            </div>
                            <div class="content">
                                <h4 class="title">Technical and account support</h4>
                                <p class="info">For general queries, including partnership opportunities, please
                                    email. <a href="mailto:ageland@mail.com">ageland@mail.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Contact Form -->
';