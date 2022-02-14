<?php
echo '<!--pricing plane-->
<section class="pricing_plan pricing_plan_shape_style_02 pricing_plan_bg_img overflow-hidden section_padding">
    <div class="container">
        <div class="row">';
            if ($settings['mlist']) {
                foreach ($settings['mlist'] as $monthly){
                    echo '<div class="col-lg-4 col-sm-6">
                        <div class="ag_pricing_plan_wrapper">
                            <h5 class="plan_category">' . $monthly['rmtitle'] . '</h5>
                            <h2 class="price">' . $monthly['rmprice'] . '</h2>
                            <p class="phrase">' . $monthly['rmsub'] . '</p>
                            <ul class="feature-list">';
                    ageland_list_control($monthly['rmfeatures'], '');
                    echo '</ul>
                            <a ' . get_that_link($monthly['rmlink']) . ' class="ag_btn btn_2">' . $monthly['rmbutton'] . '</a>
                        </div>
                </div>';}
        }
echo '</div>
    </div>';
    if ($settings['shapelist']){
        $index = 0;
        foreach ($settings['shapelist'] as $shape){
            $index++;
            if ($index == 1){
                $class = 'shape_img_01 shape-one';
            }elseif ($index == 2){
                $class = 'shape_img_02 shape-two';
            }elseif ($index == 3){
                $class = 'shape_img_03 shape-three';
            }elseif ($index == 4){
                $class = 'shape_img_04 shape-four';
            }elseif ($index == 5){
                $class = 'shape_img_06 shape-four';
            }else{
                $class = 'shape_img_06 shape-four';
            }
            echo get_that_image($shape['shapel'], $class);
        }
    }

echo '</section>
<!--pricing plane-->';