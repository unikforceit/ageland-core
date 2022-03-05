<?php

echo '<!--hero section-->
        <section class="hero_banner" id="home_id">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="hero_inside_text">
                            <h4>'.$settings['sub_title'].'</h4>
                            <h1>'.$settings['title'].'</h1>
                            <h5>'.$settings['info'].'</h5>
                            <p>'.$settings['info2'].'</p>
                            <div class="hero-btn">
                                <a '.get_that_link($settings['link1']).' class="btn">'.$settings['button1'].'</a>
                                <button class="btn-play video-btn" data-toggle="modal" data-src="'.$settings['link2']['url'].'" data-target="#myModal">
                                    <i class="fa fa-play"></i> <b>'.$settings['button2'].' <i
                                            class="fas fa-angle-double-right"></i></b>
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">

                                            <div class="modal-body">

                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <!-- 16:9 aspect ratio -->
                                                <div class="embed-responsive embed-responsive-16by9">
                                                    <iframe class="embed-responsive-item" id="video"></iframe>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!--/modal-->
                            </div>
                        </div>
                        <!--/.hero_inside_text-->
                    </div>
                    <div class="col-md-5">
                        <div class="banner_dashboard_right">
                            '.get_that_image($settings['image']).'
                        </div>
                        <!--/.banner_dashboard_right-->
                    </div>
                </div>
            </div>
            <!--/.container-->
        </section>
        <!--hero section-->';
