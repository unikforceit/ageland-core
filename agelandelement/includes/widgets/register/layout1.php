<?php
echo '<!-- register-area start here  -->
        <section class="register-area section">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-6 order-1 order-lg-0">
                        <div class="register-info">
                            <div class="brand-logo">
                                '.ageland_get_that_image($settings['image']).'
                            </div>
                            <h2>'.$settings['title'].'</h2>
                            <p>'.$settings['info'].'</p>
                            <div class="register-left-image">
                                '.ageland_get_that_image($settings['image2']).'
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 order-0 order-lg-1">
                        <div class="register-form-area shadow">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                  <a class="nav-link active" id="sign-up-tab" data-toggle="tab" href="#sign-up" role="tab" aria-controls="sign-up" aria-selected="true">'.esc_html('Sign Up').'</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                  <a class="nav-link" id="sign-in-tab" data-toggle="tab" href="#sign-in" role="tab" aria-controls="sign-in" aria-selected="false">'.esc_html('Sign In').'</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="sign-up" role="tabpanel" aria-labelledby="sign-up-tab">
                                   <div class="register-wrap">
                                       <div class="register-form">
                                            <form action="#">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" id="sign_up_firstname" name="sign_up_firstname" placeholder="First Name" />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" id="sign_up_lastname" name="sign_up_lastname" placeholder="Last Name" />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <input type="email" class="form-control" id="sign_up_email" name="sign_up_email" placeholder="Email" />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <input type="password" class="form-control password" id="sign_up_password" name="sign_up_password" placeholder="Password" />
                                                            <span class="fa fa-fw fa-eye icon toggle-password"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <input type="password" class="form-control repassword" id="sign_up_repassword" name="sign_up_repassword" placeholder="Retype Password" />
                                                            <span class="fa fa-fw fa-eye icon toggle-repassword"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group form-check">
                                                            <input type="checkbox" class="form-check-input" id="sign_up_check">
                                                            <label class="form-check-label" for="sign_up_check">By Creating an account you to the <a href="#">terms of use</a>  our <a href="#">privacy policy.</a></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <button type="submit" class="submit-btn">'.esc_html('Sign Up').'</button>
                                                    </div>
                                                </div>
                                            </form>
                                       </div>
                                        <div class="tab-register text-center">
                                            <h4 class="otehr-option"><span>or</span></h4>
                                            <a class="google-regiter" href="#">  '.ageland_get_that_image($settings['icon']).' Sign Up with Google</a>
                                            <p>Already have account?  <a href="#">Sign In</a></p>
                                        </div>
                                   </div>
                                </div>
                                <div class="tab-pane fade" id="sign-in" role="tabpanel" aria-labelledby="sign-in-tab">
                                    <div class="register-wrap">
                                        <div class="register-form">
                                             <form action="#">
                                                 <div class="row">
                                                     <div class="col-lg-12">
                                                         <div class="form-group">
                                                             <input type="email" class="form-control" id="sign_in_email" name="sign_in_email" placeholder="Email" />
                                                         </div>
                                                     </div>
                                                     <div class="col-lg-12">
                                                         <div class="form-group">
                                                             <input type="password" class="form-control password" id="sign_in_password" name="sign_in_password" placeholder="Password" />
                                                             <span class="fa fa-fw fa-eye icon toggle-password"></span>
                                                         </div>
                                                     </div>
                                                     <div class="col-lg-12">
                                                        <a class="forget-password" href="#">'.esc_html('Forgot Password').'</a>
                                                     </div>
                                                     <div class="col-lg-12">
                                                         <button type="submit" class="submit-btn">'.esc_html('Sign in').'</button>
                                                     </div>
                                                 </div>
                                             </form>
                                        </div>
                                         <div class="tab-register text-center">
                                            <h4 class="otehr-option"><span>or</span></h4>
                                            <a class="google-regiter" href="#"> '.ageland_get_that_image($settings['icon2']).' Sign In with Google</a>
                                            <p>New user?  <a href="#">Sign Up</a> for free</p>
                                         </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- register-area end here  -->';