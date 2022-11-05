<?php

namespace Elementor;

if (!defined('ABSPATH')) 
    exit; // Exit if accessed directly


class ageland_faq extends Widget_Base {

    public function get_name() {
        return 'ageland-faq';
    }
 
    public function get_title() {
        return __('FAQ', 'ageland');
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
                        'title' => __( 'FAQ Main', 'ageland' ),
                        'icon' => 'eicon-form-horizontal',
                    ],
                    'layout2' => [
                        'title' => __( 'Layout 2', 'ageland' ),
                        'icon' => 'eicon-post-slider',
                    ],
                    'layout3' => [
                        'title' => __( 'Layout 3', 'ageland' ),
                        'icon' => 'eicon-post-slider',
                    ],
                ],
                'default' => 'layout1',
                'toggle' => true,
            ]
        );

//        FAQ repeater
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'f_title',
            [
                'label' => __( 'Title', 'ageland' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'How do I create a Ageland account?', 'ageland' ),
            ]
        );
        $repeater->add_control(
            'f_info',
            [
                'label' => __( 'Info', 'ageland' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.", 'ageland' ),
            ]
        );
        $this->add_control(
            'faq_list',
            [
                'label' => __( 'Faq List One', 'ageland' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'f_title' => __( 'How do I create a Ageland account?', 'ageland' ),
                    ],
                    [
                        'f_title' => __( 'How many team members can I add?', 'ageland' ),
                    ],
                    [
                        'f_title' => __( 'Is there a limit on free transactions?', 'ageland' ),
                    ],

                ],
                'title_field' => '{{{ f_title }}}',
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
        $uniq_id = uniqid('accordion');
        $uniq_item = uniqid();
        include dirname(__FILE__). '/' . $settings['layout']. '.php';
    }

    protected function content_template()
    {
    }

    public function render_plain_content($instance = [])
    {
    }

}
Plugin::instance()->widgets_manager->register( new ageland_faq() );