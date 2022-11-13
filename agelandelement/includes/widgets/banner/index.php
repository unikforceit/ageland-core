<?php

namespace Elementor;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class ageland_banner extends Widget_Base
{

    public function get_name()
    {
        return 'ageland-banner';
    }

    public function get_title()
    {
        return __('Ageland Banner', 'ageland');
    }

    public function get_categories()
    {
        return ['agelandelement-addons'];
    }

    public function get_icon()
    {
        return 'eicon-image';
    }

    protected function register_controls()
    {

        $this->start_controls_section(
            'content_section',
            [
                'label' => __('Content', 'ageland'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'layout',
            [
                'label' => esc_html__( 'Layout', 'ageland' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    'layout1'  => esc_html__( 'Layout 1', 'ageland' ),
                    'layout2'  => esc_html__( 'Layout 2', 'ageland' ),
                    'layout3'  => esc_html__( 'Layout 3', 'ageland' ),
                    'layout4'  => esc_html__( 'Layout 4', 'ageland' ),
                    'layout5'  => esc_html__( 'Layout 5', 'ageland' ),
                ],
                'default' => 'layout1',
            ]
        );
        $this->add_control(
            'title',
            [
                'label' => __( 'Title', 'ageland' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Push - beacuse boring is bad for Business', 'ageland' ),
            ]
        );
        $this->add_control(
            'title_two',
            [
                'label' => __( 'Title Two', 'ageland' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Problems Build Your', 'ageland' ),
            ]
        );
        $this->add_control(
            'banner_Highlight_one',
            [
                'label' => __( 'bannerHighlight One', 'ageland' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Digital Agency', 'ageland' ),
            ]
        );
        $this->add_control(
            'banner_Highlight_two',
            [
                'label' => __( 'bannerHighlight Two', 'ageland' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Our Passion', 'ageland' ),
            ]
        );
        $this->add_control(
            'desc',
            [
                'label' => __( 'Description', 'ageland' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'A Forward Thinking digital agency, that helps clients world-wide build stronger
                        digital presence that people remember.', 'ageland' ),
            ]
        );
        $this->add_control(
            'customer_title',
            [
                'label' => __( 'customer Title', 'ageland' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Our job is to find the simplest expression of your brand, and then amplify it with all the resources to us.', 'ageland' ),
            ]
        );
        $this->add_control(
            'learn_more',
            [
                'label' => __( 'Learn More', 'ageland' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Learn More About Us', 'ageland' ),
            ]
        );
        $this->add_control(
            'learn_more_link', [
                'label' => __('Learn More Link', 'ageland'),
                'type' => Controls_Manager::URL,
                'show_external' => true,
                'default' => [
                    'url' => 'https://unikforce.com',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
        $this->add_control(
            'left_image',
            [
                'label' => __( 'Left Image', 'ageland' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
                'condition' => [
                    'layout' => ['layout2', 'layout4'],
                ]
            ]
        );
        $this->add_control(
            'center_image',
            [
                'label' => __( 'center Image', 'ageland' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
                'condition' => [
                    'layout' => ['layout4'],
                ]
            ]
        );
        $this->add_control(
            'right_image',
            [
                'label' => __( 'Right Image', 'ageland' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
                'condition' => [
                    'layout' => ['layout1', 'layout2','layout4'],
                ]
            ]
        );
        $this->add_control(
            'right_shape',
            [
                'label' => __( 'Right Shape', 'ageland' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
                'condition' => [
                    'layout' => ['layout3'],
                ]
            ]
        );

        $this->add_control(
            'center_shape',
            [
                'label' => __( 'Center Shape', 'ageland' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
                'condition' => [
                    'layout' => ['layout3'],
                ]
            ]
        );

        $this->add_control(
            'banner_left_shape',
            [
                'label' => __( 'Banner Left Shape', 'ageland' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
                'condition' => [
                    'layout' => ['layout3', 'layout5']
                ]
            ]
        );


        $this->end_controls_section();
        $this->start_controls_section(
            'content_customer',
            [
                'label' => __('Customer Content', 'ageland'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'rating',
            [
                'label' => __( 'Rating', 'ageland' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '4.8/5', 'ageland' ),
            ]
        );
        $this->add_control(
            'rating_text',
            [
                'label' => __( 'Rating Text', 'ageland' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Rating', 'ageland' ),
            ]
        );
        $this->add_control(
            'customers',
            [
                'label' => __( 'Number Of Customer', 'ageland' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '2291', 'ageland' ),
            ]
        );
        $this->add_control(
            'customer_text',
            [
                'label' => __( 'Customer Text', 'ageland' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Happy Customer', 'ageland' ),
            ]
        );
        $this->add_control(
            'icon1',
            [
                'label' => __( 'Social Icons 1', 'ageland' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fab fa-twitter',
                    'library' => 'brand',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'elements',
            [
                'label' => __('Elements', 'ageland'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'top_element',
            [
                'label' => __( 'Top Element', 'ageland' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
                'condition' => [
                    'layout' => 'layout1',
                ]
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'content_style',
            [
                'label' => __('Title', 'ageland'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'title_color',
            [
                'label' => __( 'Title Color', 'ageland' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .banner-left .title, {{WRAPPER}} ..bannerTwo-content .title' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title',
                'label' => __( 'Title Typography', 'ageland' ),
                'selector' => [
                    '{{WRAPPER}} .banner-left .title,
                    {{WRAPPER}} .bannerTwo-content .title',

                ],

            ]
        );
        $this->add_control(
            'info_color',
            [
                'label' => __( 'Info Color', 'ageland' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .banner-left .info, {{WRAPPER}} .bannerTwo-content .info' => 'color: {{VALUE}};',
                ],
                'condition' => [
                    'layout' => ['layout1', 'layout2', 'layout3', 'layout5'],
                ]
            ]
        );
        $this->add_control(
            'bannerHighlight_left_bg_color',
            [
                'label' => __( 'bannerHighlight BG Color', 'ageland' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .banner-4 .bannerTwo-content .title .bannerHighlight,
                    {{WRAPPER}} .bannerTwo-content .title .bannerHighlight' =>  'background: {{VALUE}}',
                ],
                'condition' => [
                    'layout' => ['layout2','layout4'],
                ]
            ]
        );

        $this->add_control(
            'bannerHighlight_right_bg_color',
            [
                'label' => __( 'bannerHighlight BG Color', 'ageland' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .banner-4 .bannerTwo-content .title .bannerHighlight.bg-yellow' =>  'background: {{VALUE}}',
                ],
                'condition' => [
                    'layout' => ['layout4'],
                ]
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'info',
                'label' => __( 'Info Typography', 'ageland' ),
                'selector' => '{{WRAPPER}} .banner-left .info',
            ]

        );
        $this->add_control(
            'button_bg_color',
            [
                'label' => __( 'Button BG Color', 'ageland' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} btn-default' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'button_bg_color',
            [
                'label' => __( 'Button BG Color', 'ageland' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} btn-default' =>  'background: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'Button title',
                'label' => __( 'Button Title Typography', 'ageland' ),
                 'selectors' => [
                     '{{WRAPPER}} .banner_btn, 
                    {{WRAPPER}} .btn-default',
    ],

            ]
        );
        $this->add_control(
            'button_padding',
            [
                'label' => esc_html__('Button Padding', 'thepack'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .banner_btn, 
                    {{WRAPPER}} .btn-default' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'video_title_color',
            [
                'label' => __( 'video Title Color', 'ageland' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .banner-btn ul li a.video-text' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'Video title',
                'label' => __( 'Video Title Typography', 'ageland' ),
                'selector' => '{{WRAPPER}} .banner-btn ul li a.video-text',
            ]
        );
        $this->add_control(
            'image_padding',
            [
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em'],
                'selectors' => [
                    '{{WRAPPER}} img' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'bannerHighlight_border',
                'label' => esc_html__( 'BannerHighlight Border', 'textdomain' ),
                'selector' => '{{WRAPPER}} .banner-4 .bannerTwo-content .title .bannerHighlight',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'bannerHighlight_two_border',
                'label' => esc_html__( 'bannerHighlight Two Border', 'textdomain' ),
                'selector' => '{{WRAPPER}} .banner-4 .bannerTwo-content .title .bannerHighlight.bg-yellow',
            ]
        );
        $this->add_control(
            'bannerHighlight_padding',
            [
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .banner-4 .bannerTwo-content .title .bannerHighlight' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        include dirname(__FILE__) . '/' . $settings['layout'] . '.php';
    }

}

Plugin::instance()->widgets_manager->register(new ageland_banner());
?>