<?php

namespace Elementor;

if (!defined('ABSPATH')) 
    exit; // Exit if accessed directly


class ageland_product_feature extends Widget_Base {

    public function get_name() {
        return 'ageland-product_feature';
    }
 
    public function get_title() {
        return __('Product feature', 'ageland');
    }

    public function get_icon() {
        return 'eicon-form-horizontal';
    }

    public function get_categories() {
        return ['agelandelement-addons'];
    }

    protected function register_controls() {

        $this->start_controls_section(
            'product_feature_section',
            [
                'label' => __( 'Content', 'ageland' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'title',
            [
                'label' => __( 'Title', 'ageland' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Got A Question?', 'ageland' ),
            ]
        );
        $this->add_control(
            'image',
            [
                'label' => __( 'Choose Image', 'ageland' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'f_title1',
            [
                'label' => __( 'Title', 'ageland' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Pixel Precision', 'ageland' ),
            ]
        );
        $repeater->add_control(
            'f_info1',
            [
                'label' => __( 'Info', 'ageland' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Lorem ipsum dolor sit amet, con sezs evcte adipise Wcing bibendum ut nulla sempertfd vivea
                 neque vefel gra egw vida amet Nulla', 'ageland' ),
            ]
        );
        $this->add_control(
            'product_list_left',
            [
                'label' => __( 'Product List LEft', 'ageland' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'f_title' => __( 'How Can I Integrate Avocode To My Current Tool Stack?', 'ageland' ),
                    ],
                    [
                        'f_title' => __( 'How Can I Integrate Avocode To My Current Tool Stack?', 'ageland' ),
                    ],
                    [
                        'f_title' => __( 'How Can I Integrate Avocode To My Current Tool Stack?', 'ageland' ),
                    ],

                ],
                'title_field' => '{{{ f_title1 }}}',
            ]
        );
        $repeater2 = new \Elementor\Repeater();
        $repeater2->add_control(
            'f_title2',
            [
                'label' => __( 'Title', 'ageland' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Pixel Precision', 'ageland' ),
            ]
        );
        $repeater2->add_control(
            'f_info2',
            [
                'label' => __( 'Info', 'ageland' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Lorem ipsum dolor sit amet, con sezs evcte adipise Wcing bibendum ut nulla sempertfd
                 vivea neque vefel gra egw vida amet Nulla', 'ageland' ),
            ]
        );
        $this->add_control(
            'product_list_right',
            [
                'label' => __( 'Product List Right', 'ageland' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater2->get_controls(),
                'default' => [
                    [
                        'f_title' => __( 'How Can I Integrate Avocode To My Current Tool Stack?', 'ageland' ),
                    ],
                    [
                        'f_title' => __( 'How Can I Integrate Avocode To My Current Tool Stack?', 'ageland' ),
                    ],
                    [
                        'f_title' => __( 'How Can I Integrate Avocode To My Current Tool Stack?', 'ageland' ),
                    ],

                ],
                'title_field' => '{{{ f_title2 }}}',
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

        $settings = $this->get_settings();
        echo'<!-- spectiality area start here  -->
        <section class="spectiality-area section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="section-title-three mb-37 text-center ">
                            <h2 class="title">'.$settings['title'].'</h2>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="spectiality-left">
                            <ul class="spectiality-list">';
                            if ($settings['product_list_left']) {
                                foreach ($settings['product_list_left'] as $p_left) {
                                    echo '<li class="sinle-spectiality">
                                    <h3>'.$p_left['f_title1'].'</h3>
                                    <p>'.$p_left['f_info1'].'</p>
                                </li>';
                            }
                        }
                                echo '</ul>
                        </div>
                    </div>
                    <div class="col-lg-4 d-md-none d-lg-block">
                        <div class="spectiality-img text-center">
                        '.get_that_image($settings['image']).'
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="spectiality-right">
                            <ul class="spectiality-list">';
                            if ($settings['product_list_right']) {
                                foreach ($settings['product_list_right'] as $p_right) {
                                    echo '<li class="sinle-spectiality">
                                    <h3>'.$p_right['f_title2'].'</h3>
                                    <p>'.$p_right['f_info2'].'</p>
                                </li>';
                            }
                        }
                                echo '</ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- spectiality area end here  -->';
    }


}
Plugin::instance()->widgets_manager->register( new ageland_product_feature() );