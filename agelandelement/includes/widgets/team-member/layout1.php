<?php

echo '<!--meet our team-->
        <section class="meet_our_team">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="title text-center">
                            <h3>'.$settings['title'].'</h3>
                            <p>'.$settings['info'].'</p>
                        </div>
                        <!--/.title-->
                    </div>
                    <div class="w-100"></div>';
if ($settings['team_list']) {
    foreach ($settings['team_list'] as $team) {
        echo '<div class="col-md-3">
                        <div class="teams_single_in" data-aos="fade-up" data-aos-duration="500">
                            '.ageland_get_that_image($team['image']).'
                            <ul class="social">
                                <li><a '.ageland_get_that_link($team['link1']).'>';\Elementor\Icons_Manager::render_icon( $team['icon1'], [ 'aria-hidden' => 'true' ] );echo'</a></li>
                                <li><a '.ageland_get_that_link($team['link2']).'>';\Elementor\Icons_Manager::render_icon( $team['icon2'], [ 'aria-hidden' => 'true' ] );echo'</a></li>
                                <li><a '.ageland_get_that_link($team['link3']).'>';\Elementor\Icons_Manager::render_icon( $team['icon3'], [ 'aria-hidden' => 'true' ] );echo'</a></li>
                            </ul>
                            <div class="name">
                                <h4>'.$team['t_title'].'</h4>
                            </div>
                        </div>
                        <!--/.teams_single_in-->
                    </div>';
    }
}
echo '</div>
            </div>
            <!--/.container-->
            <div class="meet_elem">';
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
        }else{
            $cls='shape-five';
        }
        echo ''.ageland_get_that_image($icon['image1'],''.$cls.'').'';
    }
}
echo '</div>
        </section>
        <!--meet our team-->';