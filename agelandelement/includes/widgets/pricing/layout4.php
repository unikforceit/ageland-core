<?php
echo '<!--pricing plane-->
        <section class="pricing_plan pricing_plan_shape pricing_plan_bg_img overflow-hidden sec_padding">
            <div class="container">
                <div class="row justify-content-xl-between">
                    <div class="col-xl-5 col-md-6">
                        <div class="ag_pricing_contect_wrapper mt-5">
                            <h2 class="title">Not any hidden charge, Choose Your <span>pricing plan</span></h2>
                            <p class="description">Lorem ipsum dolor sit amet,consetetur sadipscing elitr, Lorem ipsum dolor sit amet, At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren.
                            </p>
                            <div class="toggle-container cf">
                                <div class="switch-toggles">
                                    <div class="monthly">Monthly</div>
                                    <!-- active -->
                                    <div class="yearly">Yearly</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-5">
                        <div id="price_tables">
                            <div class="monthly cf active">
                                <div class="ag_pricing_plan_wrapper">
                                    <h5 class="plan_category">Standard</h5>
                                    <h2 class="price">$9.99</h2>
                                    <p class="phrase">Per Month</p>
                                    <ul class="feature_list">
                                        <li>50GB Bandwidth</li>
                                        <li>Business & Finance Analysing</li>
                                        <li>24 hour support</li>
                                        <li>Customer Management</li>
                                    </ul>
                                    <a href="https://wppro.unikforce.com/ageland/contact/" class="ag_btn btn_2">Purchase</a>
                                </div>
                            </div>
                            <div class="yearly cf">
                                <div class="ag_pricing_plan_wrapper">
                                    <h5 class="plan_category">Professional</h5>
                                    <h2 class="price">$90.99</h2>
                                    <p class="phrase">Per Year</p>
                                    <ul class="feature_list">
                                        <li>50GB Bandwidth</li>
                                        <li>Business & Finance Analysing</li>
                                        <li>24 hour support</li>
                                        <li>Customer Management</li>
                                    </ul>
                                    <a href="https://wppro.unikforce.com/ageland/contact/" class="ag_btn btn_2">Purchase</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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