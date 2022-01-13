<?php

namespace Elementor;

if (!defined('ABSPATH')) 
    exit; // Exit if accessed directly


class ageland_project extends Widget_Base {

    public function get_name() {
        return 'ageland-project';
    }
 
    public function get_title() {
        return __('Project Filter', 'ageland');
    }

    public function get_icon() {
        return 'eicon-form-horizontal';
    }

    public function get_categories() {
        return ['agelandelement-addons'];
    }

    protected function _register_controls() {

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
                'default' => __( 'Case Studies', 'ageland' ),
            ]
        );
        $this->add_control(
            'info',
            [
                'label' => __( 'Description', 'ageland' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet,, lacus  non massa id amet tincidunt. Lacus ut integer blandit diam.', 'ageland' ),
            ]
        );
        $this->add_control(
            'feature_title',
            [
                'label' => __( 'Case Title', 'ageland' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Featured In Design', 'ageland' ),
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'feature_title',
            [
                'label' => __( 'Feature', 'ageland' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Adobe illustator', 'ageland' ),
            ]
        );
        $this->add_control(
            'feature_list',
            [
                'label' => __( 'Feature List', 'ageland' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'condition' => [
                    'layout' => ['layout1'],
                ],
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'title' => __( 'Adobe illustator', 'ageland' ),
                    ],
                    [
                        'title' => __( 'Valid HTML5 / CSS3', 'ageland' ),
                    ],
                    [
                        'title' => __( 'CSS3 Animations', 'ageland' ),
                    ],
                    [
                        'title' => __( 'W3C Validate Code', 'ageland' ),
                    ],
                ],
                'title_field' => '{{{ feature_title }}}',
            ]
        );
        $this->add_control(
            'button',
            [
                'label' => __( 'Button Icon', 'ageland' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('Get Started', 'ageland'),
            ]
        );
        $this->add_control(
            'link', [
                'label' => __('Link', 'ageland'),
                'type' => Controls_Manager::URL,
                'show_external' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
        $this->add_control(
            'cat_query',
            [
                'label' => __('Category', 'ageland'),
                'type' => Controls_Manager::SELECT2,
                'options' => ae_drop_cat('project_cat'),
                'multiple' => true,
                'label_block' => true,
            ]
        );
        $this->add_control(
            'show_cat',
            [
                'label' => esc_html__('Show Category', 'ageland'),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'default' => esc_html__('5', 'ageland'),
            ]
        );
        $this->add_control(
            'posts_per_page',
            [
                'label' => __('Posts Per Page', 'ageland'),
                'type' => Controls_Manager::NUMBER,
                'default' => 6,
            ]
        );
        $this->add_control(
            'layout',
            [
                'label' => __( 'Layout', 'ageland' ),
                'type' => \Elementor\Controls_Manager::CHOOSE,
                'options' => [
                    'layout1' => [
                        'title' => __( 'One', 'ageland' ),
                        'icon' => 'eicon-form-horizontal',
                    ],
                    'layout2' => [
                        'title' => __( 'Two', 'ageland' ),
                        'icon' => 'eicon-post-slider',
                    ],
                    'layout3' => [
                        'title' => __( 'Three', 'ageland' ),
                        'icon' => 'eicon-post-slider',
                    ],
                    'layout4' => [
                        'title' => __( 'Four', 'ageland' ),
                        'icon' => 'eicon-post-slider',
                    ],
                    'layout5' => [
                        'title' => __( 'Five', 'ageland' ),
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

        $settings = $this->get_settings_for_display();

            $tax_args = array(
                'taxonomy' => 'project_cat',
                'number' => $settings['show_cat'],
                'include' => $settings['cat_query'],
                'hide_empty' => false,
            );
            $the_query = new \WP_Query(array(
                'post_type' => 'project',
                'posts_per_page' => $settings['posts_per_page'],
                'tax_query' => array(
                    array(
                        'taxonomy' => 'project_cat',
                        'field' => 'term_id',
                        'terms' => $settings['cat_query'],
                    )
                )
            ));
            $categories = get_terms($tax_args);

        include dirname(__FILE__). '/' . $settings['layout']. '.php';
    }


}
Plugin::instance()->widgets_manager->register( new ageland_project() );