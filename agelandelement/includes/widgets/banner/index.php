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
            'desc',
            [
                'label' => __( 'Description', 'ageland' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'A Forward Thinking digital agency, that helps clients world-wide build stronger
                        digital presence that people remember.', 'ageland' ),
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
                    'layout' => 'layout2',
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
                    '{{WRAPPER}} .banner-left .title' => 'color: {{VALUE}};',
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