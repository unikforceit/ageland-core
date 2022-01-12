<?php

namespace Elementor;

if (!defined('ABSPATH')) 
    exit; // Exit if accessed directly


class ageland_sidebar extends Widget_Base {

    public function get_name() {
        return 'ageland-sidebar';
    }
 
    public function get_title() {
        return __('Sidebar', 'ageland');
    }

    public function get_icon() {
        return 'eicon-form-horizontal';
    }

    public function get_categories() {
        return ['agelandelement-addons'];
    }

    protected function _register_controls() {

        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'Sidebar', 'ageland' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'image1',
            [
                'label' => __( 'Image 1', 'ageland' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
         $this->add_control(
            'image2',
            [
                'label' => __( 'Image 2', 'ageland' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
         $this->add_control(
            'image3',
            [
                'label' => __( 'Image 3', 'ageland' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
         $this->add_control(
            'image4',
            [
                'label' => __( 'Image 4', 'ageland' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'layout',
            [
                'label' => __( 'Layout', 'ageland' ),
                'type' => \Elementor\Controls_Manager::CHOOSE,
                'options' => [
                    'layout1' => [
                        'title' => __( 'Search', 'ageland' ),
                        'icon' => 'eicon-form-horizontal',
                    ],
                    'layout2' => [
                        'title' => __( 'Category', 'ageland' ),
                        'icon' => 'eicon-post-slider',
                    ],
                    'layout3' => [
                        'title' => __( 'News', 'ageland' ),
                        'icon' => 'eicon-post-slider',
                    ],
                    'layout4' => [
                        'title' => __( 'Archive', 'ageland' ),
                        'icon' => 'eicon-post-slider',
                    ],
                    'layout5' => [
                        'title' => __( 'Tags', 'ageland' ),
                        'icon' => 'eicon-post-slider',
                    ],
                ],
                'default' => 'layout1',
                'toggle' => true,
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
        echo ' <div class="blog-sidebar">';
        include dirname(__FILE__). '/' . $settings['layout']. '.php';
        echo ' </div>';
    }


}
Plugin::instance()->widgets_manager->register( new ageland_sidebar() );