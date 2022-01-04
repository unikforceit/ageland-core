<?php

                    echo '<!--testimonials home 2-->
        <section class="testimonials_home2">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div class="title text-center">
                            <h3>'.$settings['title'].'</h3>
                            <p>'.$settings['info'].'</p>
                        </div>
                        <!--/.title-->
                    </div>
                    <div class="col-md-8 offset-md-2">
                        <div class="owl-carousel" id="testimonials_home2_owl">';

if ($settings['testi_list']) {
    foreach ($settings['testi_list'] as $testi) {
        echo '<div>
                                <div class="single_testi_in2">
                                    '.get_that_image($testi['thumb']).'
                                    <h4>'.$testi['t_title'].'</h4>
                                    <h5>'.$testi['t_subtitle'].'</h5>
                                    <h2><i class="fas fa-quote-left"></i></h2>
                                    <p>'.$testi['t_info'].'
                                    </p>
                                </div>
                                <!--/.single_testi_in2-->
                            </div>';
    }
}
echo '</div>
                    </div>
                </div>
            </div>
            <!--/.container-->';

if ($settings['icon_list']) {
    $loop=0;
    foreach ($settings['icon_list'] as $icon) {
        $loop++;
        if ($loop==1){
            $cls='shape-three';
        }elseif ($loop==2){
            $cls='shape-four';
        }elseif ($loop==3){
            $cls='shape-five';
        }else{
            $cls='shape-six';
        }
        echo ''.get_that_image($icon['ico'],''.$cls.'').'';
    }
}
echo '</section>
        <!--testimonials home 2-->';