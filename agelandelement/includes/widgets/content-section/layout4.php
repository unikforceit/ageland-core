<?php
    echo'<!--interested project-->
        <section class="interested_pro home2">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="title text-center">
                            <h3>'.$settings['title'].'</h3>
                            <p>'.$settings['info'].'</p>
                            <a '.get_that_link($settings['link']).' class="btn">'.$settings['button'].'</a>
                        </div>
                        <!--/.title-->
                    </div>
                </div>
            </div>
            <!--/.container-->
        </section>
        <!--interested project-->';