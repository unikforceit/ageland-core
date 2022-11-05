<?php

namespace Elementor;

if (!defined('ABSPATH')) 
    exit; // Exit if accessed directly


class ageland_chooseus extends Widget_Base {

    public function get_name() {
        return 'ageland-chooseus';
    }
 
    public function get_title() {
        return __('Choose Us', 'ageland');
    }

    public function get_icon() {
        return 'eicon-form-horizontal';
    }

    public function get_categories() {
        return ['agelandelement-addons'];
    }

    protected function register_controls() {

        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'Content', 'ageland' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'layout',
            [
                'label' => __( 'Layout', 'ageland' ),
                'type' => \Elementor\Controls_Manager::CHOOSE,
                'options' => [
                    'layout1' => [
                        'title' => __( 'Home 1 Banner', 'ageland' ),
                        'icon' => 'eicon-form-horizontal',
                    ],
                    'layout2' => [
                        'title' => __( 'Choose Banner', 'ageland' ),
                        'icon' => 'eicon-post-slider',
                    ],
                ],
                'default' => 'layout1',
                'toggle' => true,
            ]
        );

        $this->add_control(
            'image',
            [
                'label' => __('Choose Image', 'ageland'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'subtitle',
            [
                'label' => __( 'Sub Title', 'ageland' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Why choose us', 'ageland' ),
            ]
        );
        $this->add_control(
            'title',
            [
                'label' => __( 'Title', 'ageland' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'We are an Digital agency based on Bangladesh.', 'ageland' ),
            ]
        );
        $this->add_control(
            'info',
            [
                'label' => __( 'Info', 'ageland' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'A full-cycle digital service agency. We do from design to end-to-end development to maintenance. We have been worked with more than 50+ brands.', 'ageland' ),
            ]
        );
        $this->add_control(
            'button1',
            [
                'label' => __('Button 1', 'ageland'),
                'type' => Controls_Manager::TEXT,
                'default' => __('Learn More', 'ageland'),
            ]
        );
        $this->add_control(
            'link1', [
                'label' => __('Link 1', 'ageland'),
                'type' => Controls_Manager::URL,
                'show_external' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );

        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'cItem_title',
            [
                'label' => __( 'Choose Item Title', 'ageland' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Worked with biggest brands.', 'ageland' ),
            ]
        );
        $repeater->add_control(
            'cItem_info',
            [
                'label' => __( 'Choose Item Info', 'ageland' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat.', 'ageland' ),
            ]
        );
        $this->add_control(
            'cItem_list',
            [
                'label' => __( 'Choose Item List', 'ageland' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'w_title' => __( 'Worked with biggest brands.', 'ageland' ),
                    ],
                    [
                        'w_title' => __( 'Awards winning team.', 'ageland' ),
                    ],
                ],
                'title_field' => '{{{ w_title }}}',
            ]
        );
        $this->end_controls_section();
        
        $this->start_controls_section(
            'section_settings',
            [
                'label' => __( 'General', 'ageland' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'slider_number',
            [
                'label' => __('Slider Number', 'ageland'),
                'type' => Controls_Manager::NUMBER,
                'default' => 2,
            ]
        );
        $this->add_control(
            'post_title_color',
            [
                'label' => __( 'Title Color', 'ageland' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .why-chooseus .single-item .inner-box .image-box .caption' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'post_titlea_color',
            [
                'label' => __( 'Title Active Color', 'ageland' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .why-chooseus .single-item .inner-box .image-box .overlay-box h4' => 'color: {{VALUE}}; border-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'ttih',
                'label' => __( 'Title Typography', 'ageland' ),
                'selector' => '{{WRAPPER}} .why-chooseus .single-item .inner-box .image-box .caption',
            ]
        );
        $this->add_control(
            'hh_c',
            [
                'label' => __( 'Content Color', 'ageland' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .why-chooseus .single-item .inner-box .overlay-box p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'ttihaa',
                'label' => __( 'Content Typography', 'ageland' ),
                'selector' => '{{WRAPPER}} .why-chooseus .single-item .inner-box .overlay-box p',
            ]
        );
        $this->add_control(
            'hh_caa',
            [
                'label' => __( 'Button Color', 'ageland' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .why-chooseus .single-item .inner-box .image-box .overlay-box .read-more' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'ttihaaccc',
                'label' => __( 'Button Typography', 'ageland' ),
                'selector' => '{{WRAPPER}} .why-chooseus .single-item .inner-box .image-box .overlay-box .read-more',
            ]
        );
        $this->add_control(
            'icon_cb',
            [
                'label' => __( 'Overlay BG', 'ageland' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .why-chooseus .single-item .inner-box .image-box .overlay-box, 
                    {{WRAPPER}} .why-chooseus .single-item .inner-box .image-box .caption' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_section();

    }
        
    protected function render(){

        $settings = $this->get_settings_for_display();
        include dirname(__FILE__). '/' . $settings['layout']. '.php';

//        echo ' <!-- service area start here  -->
//        <section class="service-area section" id="category">
//            <div class="container">
//                <div class="row">
//                    <div class="col-lg-12">
//                        <div class="section-title text-center">
//                            <h2 class="title">'.$settings['title'].'</h2>
//                            <p class="sub-title">'.$settings['info'].'</p>
//                        </div>
//                    </div>
//                </div>
//                <div class="row m-b-30 ">';
//
//        if ($settings['work_list']) {
//            foreach ($settings['work_list'] as $work) {
//                echo '<div class="col-lg-3 col-md-6 col-sm-6">
//                        <div class="single-service text-center">
//                            <div class="service-icon">
//                                <i class="'.$work['icon']['value'].'"></i>
//                            </div>
//                            <h4 class="service-title">'.$work['w_title'].'</h4>
//                        </div>
//                    </div>';
//            }
//        }
//                echo '</div>
//            </div>
//        </section>
//        <!-- service area end here  -->';
    }


}
Plugin::instance()->widgets_manager->register( new ageland_chooseus() );