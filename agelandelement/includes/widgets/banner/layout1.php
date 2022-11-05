<!-- Start Banner -->
<section class="banner-1">
    <div class="banner-element-1">
        <?php echo ageland_get_that_image($settings['top_element'])?>
    </div>
    <div class="bannerRating-1">
        <div class="bannerRating-1_wrap">
            <div class="icon">
                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M31.9163 12.091C31.7056 11.4148 31.1309 10.9361 30.4536 10.8722L21.2162 9.99705L17.5655 1.07817C17.2959 0.422913 16.6826 0 16 0C15.3174 0 14.7039 0.422913 14.436 1.07817L10.7853 9.99705L1.54643 10.8722C0.869173 10.9374 0.295678 11.4161 0.0837609 12.091C-0.126936 12.7671 0.0676473 13.5088 0.579862 13.9775L7.56263 20.3668L5.50377 29.8294C5.35313 30.5252 5.61192 31.2446 6.16515 31.6619C6.46252 31.8874 6.81189 32 7.16248 32C7.46376 32 7.76527 31.9164 8.03457 31.7483L16 26.7783L23.964 31.7483C24.5482 32.1126 25.2829 32.0792 25.8349 31.6619C26.3881 31.2446 26.6469 30.5252 26.4963 29.8294L24.4374 20.3668L31.4202 13.9775C31.9321 13.5088 32.127 12.7687 31.9163 12.091Z"
                        fill="#FAC252" />
                </svg>
            </div>
            <div class="content">
                <p class="rating"><?php echo esc_html($settings['rating']);?></p>
                <p><?php echo esc_html($settings['rating_text']);?></p>
            </div>
        </div>
    </div>
    <div class="happy_coustomer d-flex justify-content-center align-items-center">
        <div class="happy_coustomer_wrap d-flex justify-content-center align-items-lg-center">
            <ul class="customer d-flex align-items-center">
                <li><img src="assets/img/customers/customer_1.png" alt=""></li>
                <li><img src="assets/img/customers/customer_2.png" alt=""></li>
                <li><img src="assets/img/customers/customer_3.png" alt=""></li>
            </ul>
            <div class="content">
                <p><?php echo esc_html($settings['customers']);?></p>
                <span><?php echo esc_html($settings['customer_text']);?></span>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="banner-left">
                    <h3 class="title"><?php echo esc_html($settings['title']);?></h3>
                    <p class="info"><?php echo esc_html($settings['desc']);?></p>
                    <a <?php echo ageland_get_that_link($settings['learn_more_link']);?> class="banner_btn"><?php echo esc_html($settings['learn_more']);?></a>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="banner-right">
                    <div class="banner_img">
                        <?php echo ageland_get_that_image($settings['right_image'])?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Banner -->
