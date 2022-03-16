<?php
    echo'<!--recent-blog-->
        <section class="blog_sec home2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title text-center">
                            <h3>'.$settings['title'].'</h3>
                        </div>
                        <!--/.title-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-md-7">
                        <div class="owl-carousel blog_slider_2">';
if ($wp_query->have_posts()) {
    while ($wp_query->have_posts()) {
        $wp_query->the_post();
        echo '<div class="single_blog_in blog_style_01">
                                <div class="card">
                                    <div class="images">
                                        <a href="' . get_the_permalink() . '">';
                                        if (has_post_thumbnail()) {
                                            the_post_thumbnail('full');
                                        }
                                        echo '</a>
                                        <div class="dates">
                                            <p><a href="' . get_day_link(get_the_time('Y'), get_the_time('m'), get_the_time('j')) . '"> ' . get_the_time('F, Y') . '</a></p>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h2><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></h2>
                                        <p>' . wp_trim_words(get_the_excerpt(),10) . '
                                        </p>
                                        <ul>
                                            <li>
                                                <p>'.get_avatar( get_the_author_meta('ID')).' by <a href="'.get_author_posts_url(get_the_author_meta('ID')).'">'.get_the_author().'</a></p>
                                                </p>
                                            </li>
                                            <li><a href="#"><i class="fas fa-bell"></i> 15</a></li>
                                            <li>
                                                <a href="#"><i class="fas fa-comment-alt"></i>'.get_comments_number().' </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>';
    }
    wp_reset_postdata();
}
echo ' </div>
                        <!--/.blog_slider_owl-->
                    </div>
                    <div class="col-lg-4 col-md-5">
                        <div class="ag_blog_newsletter mt-5 mt-lg-0">
                            <div class="ag_blog_newsletter_wrapper">
                                <h4>'.$settings['news_title'].'</h4>
                                <p>'.$settings['news_info'].'</p>
                                <form>
                                    <input type="email" placeholder="Email Address" />
                                    <button type="submit" class="ag_btn btn_1">Subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.container-->
        </section>
        <!--recent-blog-->';