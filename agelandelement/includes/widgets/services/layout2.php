<?php

echo '<!--service provide-->
        <section class="service_provide_sec_home2">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="service_title title text-center">
                            <h3>Services wer provided</h3>
                            <p>Lorem ipsum dolor sit amet,consetetur sadipscing elitr, Lorem ipsum dolor sit amet, At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren sed diam voluptua.
                            </p>
                        </div>
                        <!--/.title-->
                    </div>
                    <div class="w-100"></div>
                    <div class="col-md-12">
                        <ul class="nav nav-tabs" role="tablist">';
$loop = 0;
foreach ($categories as $category) {
    $loop++;
    if ($loop == 1) {
        $act = 'active';
    } else {
        $act = '';
    }
    echo '<li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">
                                    <div class="single_two_in">
                                        <img src="img/home2/icon/service1.png" alt="#">
                                        <h4>' . $category->name . '</h4>
                                    </div>
                                    <!--/.single_two_in-->
                                </a>
                            </li>';
}
echo '</ul>
                    </div>

                    <div class="col-md-12">
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="tab-images text-right">
                                            <img src="img/home2/software-design.jpg" alt="#">
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="tabs-content-in">
                                            <h3>Software Design</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eismod tempor incidunt labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.Risus commodo viverra maecenas accumsan.</p>
                                            <p>Lorem ipsum dolor sit amet, Stet clita kasd gubergren, stet clita kasd gubergren Lorem ipsum dolor sit amet.</p>
                                            <a href="#" class="btn">Learn More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/.tab-pane-->
                            <div class="tab-pane" id="tabs-2" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="tab-images text-right">
                                            <img src="img/home2/software-design.jpg" alt="#">
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="tabs-content-in">
                                            <h3>Real Data Analytics</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eismod tempor incidunt labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.Risus commodo viverra maecenas accumsan.</p>
                                            <p>Lorem ipsum dolor sit amet, Stet clita kasd gubergren, stet clita kasd gubergren Lorem ipsum dolor sit amet.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/.tab-pane-->
                            <div class="tab-pane" id="tabs-3" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="tab-images text-right">
                                            <img src="img/home2/software-design.jpg" alt="#">
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="tabs-content-in">
                                            <h3>E-commerce Website</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eismod tempor incidunt labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.Risus commodo viverra maecenas accumsan.</p>
                                            <p>Lorem ipsum dolor sit amet, Stet clita kasd gubergren, stet clita kasd gubergren Lorem ipsum dolor sit amet.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/.tab-pane-->
                            <div class="tab-pane" id="tabs-4" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="tab-images text-right">
                                            <img src="img/home2/software-design.jpg" alt="#">
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="tabs-content-in">
                                            <h3>Real Data Analytics</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eismod tempor incidunt labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.Risus commodo viverra maecenas accumsan.</p>
                                            <p>Lorem ipsum dolor sit amet, Stet clita kasd gubergren, stet clita kasd gubergren Lorem ipsum dolor sit amet.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/.tab-pane-->
                        </div>
                    </div>
                </div>
            </div>
            <!--/.container-->
        </section>
        <!--service provide-->';