<?php

    echo'<!--interested project-->
        <section class="interested_pro">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="title text-center">
                            <h3>'.$settings['title'].'</h3>
                            <p>'.$settings['info'].'</p>
                            <a '.ageland_get_that_link($settings['link']).' class="btn theme_btn">'.$settings['button'].'</a>
                        </div>
                        <!--/.title-->
                    </div>
                </div>
            </div>
            <!--/.container-->';
if ($settings['icon_list']) {
    $loop=0;
    foreach ($settings['icon_list'] as $icon) {
        $loop++;
        if ($loop==1){
            $cls='shape-one';
        }elseif ($loop==2){
            $cls='shape-two';
        }elseif ($loop==3){
            $cls='shape-three';
        }elseif ($loop==4){
            $cls='shape-four';
        }elseif ($loop==5){
            $cls='shape-five';
        }else{
            $cls='shape-six';
        }
        echo ''.get_that_image($icon['iconnn'],''.$cls.'').'';
    }
}
echo '</section>
        <!--interested project-->';