<?php

        echo'<!--testimonials- sec-->
        <section class="testimonials_sec">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="testimonials_image_btn">
                            <ul class="nav nav-tabs" role="tablist">';
if ($settings['testi_list']) {
    $loop=0;
    foreach ($settings['testi_list'] as $testi) {
        $loop++;
        if ($loop==1){
            $cls='one';
            $act = 'active show';
        }elseif ($loop==2){
            $cls='two';
            $act = '';
        }elseif ($loop==3){
            $cls='three';
            $act = '';
        }elseif ($loop==4){
            $cls='four';
            $act = '';
        }else{
            $act = '';
            $cls='five';
        }
        echo '<li class="nav-item '.$cls.'">
                                    <a class="nav-link '.$act.'" data-toggle="tab" href="#tabs-'.$loop.'" role="tab">'.ageland_get_that_image($testi['thumb'],'people').'</a>
                                </li>';
    }
}
echo '</ul>
                            <!-- Tab panes -->
                        </div>
                    </div>
                    <div class="col-md-5 offset-md-1">
                        <div class="testimonials_content_tab h-100">
                            <div class="row h-100">
                                <div class="col-md-12 align-self-center">
                                    <div class="tab-content">';

if ($settings['testi_list']) {
    $loop2 = 0;
    foreach ($settings['testi_list'] as $testi) {
        $loop2++;
        if ($loop2 == 1){
            $act2 = 'active show';
        }else{
            $act2 = '';
        }
        echo '<div class="tab-pane '.$act2.'" id="tabs-'.$loop2.'" role="tabpanel">
                                            <div class="single_testi_inside">
                                                '.ageland_get_that_image($settings['quote']).'
                                                <p>'.$testi['t_info'].'</p>
                                                <h4>'.$testi['t_title'].'</h4>
                                                <h5>'.$testi['t_subtitle'].'</h5>
                                            </div>
                                            <!--/.single_testi_inside-->
                                        </div>';
    }
}
echo '</div>
                                </div>
                            </div>
                        </div>
                        <!--/.testimonials_content_tab-->
                    </div>
                </div>
            </div>
            <!--/.container-->
        </section>
        <!--testimonials- sec-->';