<?php
//
//echo '<!--recent-blog-->
//        <section class="blog_sec">
//            <div class="container">
//                <div class="row">
//                    <div class="col-md-12">
//                        <div class="title text-center">
//                            <h3>' . $settings['title'] . '</h3>
//                        </div>
//                        <!--/.title-->
//                    </div>
//                    <div class="w-100"></div>
//                    <div class="col-md-12">
//                        <div class="owl-carousel" id="blog_slider_owl">';
//if ($wp_query->have_posts()) {
//    while ($wp_query->have_posts()) {
//        $wp_query->the_post();
//        echo ' <div>
//                                <div class="single_blog_in">
//                                    <div class="card">
//                                        <div class="images">
//                                            <a href="' . get_the_permalink() . '">';
//        if (has_post_thumbnail()) {
//            the_post_thumbnail('full');
//        }
//        echo '</a>
//                                            <div class="dates">
//                                                <p><a href="' . get_day_link(get_the_time('Y'), get_the_time('m'), get_the_time('j')) . '"> ' . get_the_time('F, Y') . '</a></p>
//                                            </div>
//                                        </div>
//                                        <div class="card-body">
//                                            <h2><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></h2>
//                                            <p>' . wp_trim_words(get_the_excerpt(), 10) . '
//                                            </p>
//                                            <ul>
//                                                <li>
//                                                    <p>' . get_avatar(get_the_author_meta('ID')) . ' by <a href="' . get_author_posts_url(get_the_author_meta('ID')) . '">' . get_the_author() . '</a></p>
//                                                </li>
//                                                <li><a href="#"><i class="fas fa-bell"></i> 15</a></li>
//                                                <li>
//                                                    <a href="#"><i class="fas fa-comment-alt"></i>' . get_comments_number() . ' </a>
//                                                </li>
//                                            </ul>
//                                        </div>
//                                    </div>
//                                </div>
//                                <!--/.single_blog_in-->
//                            </div>';
//    }
//    wp_reset_postdata();
//}
//echo '</div>
//                        <!--/.blog_slider_owl-->
//                    </div>
//                </div>
//            </div>
//            <!--/.container-->
//        </section>
//        <!--recent-blog-->'; ?>

<?php echo '
<!-- Start Blog Section -->
<section class="blog-section pt-160 pb-160">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="section-header">
                    <span class="sub-title">' . $settings['subtitle'] . '</span>
                    <h3 class="title">' . $settings['title'] . '</h3>
                    <p class="info mr-100">' . $settings['info'] . '</p>
                </div>
            </div>
        </div>
        <div class="blog-post pt-72">
            <div class="row justify-content-center">';
if ($wp_query->have_posts()) {
    while ($wp_query->have_posts()) {
        $wp_query->the_post();
        echo '
                <div class="col-lg-4 col-md-6 wow animate__fadeInLeft" data-wow-duration="4s">
                    <div class="blog-item">
                        <div class="blog-thumb">';
        if (has_post_thumbnail()) {
            the_post_thumbnail('full');
            echo '<a href="' . get_the_permalink() . '" class="blog-hover">
                                <img src="' . get_template_directory_uri() . '/assets/img/blog_hover.svg" alt="">
                            </a>';
        }
        echo '</div>
                        <div class="blog-info">
                            <a href="' . get_the_permalink() . '" class="title">' . get_the_title() . '</a>
                            <p>' . wp_trim_words(get_the_excerpt(), 10, '...') . '</p>
                        </div>
                    </div>
                </div>
                ';
    }
    wp_reset_postdata();
}
echo '</div>
        </div>
    </div>
</section>
<!-- End Blog Section -->
'; ?>