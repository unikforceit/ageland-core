<?php

echo '<!--team section home2-->
        <section class="teams_second_home2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title text-center">
                            <h3>'.$settings['title'].'</h3>
                        </div>
                        <!--/.title-->
                    </div>
                    <div class="w-100"></div>
                    <div class="col-md-12">
                        <div class="team-member-inside-two">';
if ($settings['team_list']) {
    $loop=0;
    foreach ($settings['team_list'] as $team) {
        $loop++;
        if ($loop==1){
            $cls='one';
        }elseif ($loop==2){
            $cls='two';
        }elseif ($loop==3){
            $cls='three';
        }elseif ($loop==4){
            $cls='four';
        }elseif ($loop==5){
            $cls='five';
        }elseif ($loop==6){
            $cls='six';
        }else{
            $cls='seven';
        }
        echo ' <div class="team-single '.$cls.'">
                                <div class="img-info">
                                    '.get_that_image($team['image']).'
                                    <ul class="social">
                                        <li><a '.ageland_get_that_link($team['link1']).'>';\Elementor\Icons_Manager::render_icon( $team['icon1'], [ 'aria-hidden' => 'true' ] );echo'</a></li>
                                        <li><a '.ageland_get_that_link($team['link2']).'>';\Elementor\Icons_Manager::render_icon( $team['icon2'], [ 'aria-hidden' => 'true' ] );echo'</a></li>
                                        <li><a '.ageland_get_that_link($team['link3']).'>';\Elementor\Icons_Manager::render_icon( $team['icon3'], [ 'aria-hidden' => 'true' ] );echo'</a></li>
                                    </ul>
                                </div>
                                <div class="name">
                                    <h4>'.$team['t_title'].'</h4>
                                    <p>'.$team['t_desig'].'</p>
                                </div>
                            </div>
                            <!--/.team-single -->';
    }
}
echo '</div>
                        <!--/.team-member-inside-two-->
                    </div>
                </div>
            </div>';
if ($settings['icon_list']) {
    $loop=0;
    foreach ($settings['icon_list'] as $icon) {
        $loop++;
        if ($loop==1){
            $cls2='shape-one';
        }elseif ($loop==2){
            $cls2='shape-two';
        }elseif ($loop==3){
            $cls2='shape-three';
        }elseif ($loop==4){
            $cls2='shape-four';
        }elseif ($loop==5){
            $cls2='shape-five';
        }else{
            $cls2='shape-six';
        }
        echo ''.get_that_image($icon['image1'],''.$cls2.'').'';
    }
}
echo '</section>
        <!--team section home2-->';