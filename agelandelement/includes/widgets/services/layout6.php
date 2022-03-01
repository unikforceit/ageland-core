<!--service-page-inner-->
<section class="service_page_inner">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="title text-center">
                    <h3><?php echo esc_html("Services we'r provided");?></h3>
                    <p><?php echo esc_html("Lorem ipsum dolor sit amet,At vero eos et accusam et justo duo dolores et ea rebum, no
                            sea takimata sanctus est Lorem ipsum dolor sit amet. At vero eos et accusam.");?></p>
                </div>
                <!--/.title-->
            </div>
            <div class="w-100"></div>
            <?php if ($wp_query->have_posts()) {
                while ($wp_query->have_posts()) {
                    $wp_query->the_post();
                    get_template_part('template-parts/services', 'content');

                }
            } else{


                get_template_part('template-parts/content', 'none');

            }; ?>
            <div class="w-100 my-4"></div>
            <div class="col-md-12">
                <div class="pagination-post">
                    <?php ageland_pagination(); ?>
                </div>
                <!--/.pagination-post-->
            </div>
            <div class="w-100 my-4"></div>
        </div>
    </div>
    <!--/.container-->
    <img src="<?php echo get_template_directory_uri()?>/assets/img/img1.png" alt="#" class="shape-one" />
    <img src="<?php echo get_template_directory_uri()?>/assets/img/img2.png" alt="#" class="shape-two" />
    <img src="<?php echo get_template_directory_uri()?>/assets/img/img3.png" alt="#" class="shape-three" />
    <img src="<?php echo get_template_directory_uri()?>/assets/img/img4.png" alt="#" class="shape-four" />
    <img src="<?php echo get_template_directory_uri()?>/assets/img/img5.png" alt="#" class="shape-five" />
    <img src="<?php echo get_template_directory_uri()?>/assets/img/img6.png" alt="#" class="shape-six" />
</section>
<!--service-page-inner-->