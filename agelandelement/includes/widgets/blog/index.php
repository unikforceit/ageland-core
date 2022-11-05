<?php

namespace Elementor;
if (!defined('ABSPATH')) exit; // Exit if accessed directly

class ageland_blog extends Widget_Base
{

    public function get_name()
    {
        return 'ageland-blog';
    }

    public function get_title()
    {
        return __('Blog', 'ageland');
    }

    public function get_categories()
    {
        return ['agelandelement-addons'];
    }

    public function get_icon()
    {
        return 'eicon-posts-group';
    }

    protected function register_controls()
    {

        $this->start_controls_section(
            'content_section',
            [
                'label' => __('Blog', 'ageland'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'layout',
            [
                'label' => __('Layout', 'ageland'),
                'type' => \Elementor\Controls_Manager::CHOOSE,
                'options' => [
                    'layout1' => [
                        'title' => __('Home 1 Blog', 'ageland'),
                        'icon' => 'eicon-form-horizontal',
                    ],
                    'layout2' => [
                        'title' => __('Home 2 Blog', 'ageland'),
                        'icon' => 'eicon-post-slider',
                    ],
                    'layout3' => [
                        'title' => __('Layout 3', 'ageland'),
                        'icon' => 'eicon-post-slider',
                    ],
                    'layout4' => [
                        'title' => __('Layout 4', 'ageland'),
                        'icon' => 'eicon-post-slider',
                    ],
                ],
                'default' => 'layout1',
                'toggle' => true,
            ]
        );// layouts

        $this->add_control(
            'subtitle',
            [
                'label' => __('Sub Title', 'ageland'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __('Blogs', 'ageland'),
            ]
        ); // subtitle
        $this->add_control(
            'title',
            [
                'label' => __('Title', 'ageland'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __('Browse our resource center', 'ageland'),
            ]
        ); // title
        $this->add_control(
            'info',
            [
                'label' => __('Info', 'ageland'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __('Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam.', 'ageland'),
            ]
        ); // info

        $this->add_control(
            'query_type',
            [
                'label' => __('Query type', 'ageland'),
                'type' => Controls_Manager::SELECT,
                'default' => 'individual',
                'options' => [
                    'category' => __('Category', 'ageland'),
                    'individual' => __('Individual', 'ageland'),
                ],
            ]
        ); // query type
        $this->add_control(
            'cat_query',
            [
                'label' => __('Category', 'ageland'),
                'type' => Controls_Manager::SELECT2,
                'options' => ae_drop_cat('category'),
                'multiple' => true,
                'label_block' => true,
                'condition' => [
                    'query_type' => 'category',
                ],
            ]
        ); // category query
        $this->add_control(
            'id_query',
            [
                'label' => __('Posts', 'ageland'),
                'type' => Controls_Manager::SELECT2,
                'options' => ae_drop_posts('post'),
                'multiple' => true,
                'label_block' => true,
                'condition' => [
                    'query_type' => 'individual',
                ],
            ]
        ); // Post query
        $this->add_control(
            'posts_per_page',
            [
                'label' => __('Posts Per Page', 'ageland'),
                'type' => Controls_Manager::NUMBER,
                'default' => 3,
            ]
        ); // post per page

        $this->end_controls_section();

        $this->start_controls_section(
            'content_sty',
            [
                'label' => __('Style', 'ageland'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        ); // start style section
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'shape',
                'label' => __('Shape', 'ageland'),
                'types' => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .section-bg:after',
            ]
        );
        $this->add_control(
            'post_title_color',
            [
                'label' => __('Title Color', 'ageland'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .default-blog .caption a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'ttih',
                'label' => __('Title Typography', 'ageland'),
                'selector' => '{{WRAPPER}} .default-blog .caption a',
            ]
        );
        $this->add_control(
            'post_inhaa_color',
            [
                'label' => __('Meta Color', 'ageland'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .default-blog .post-meta span, 
                    {{WRAPPER}} .default-blog .post-meta i' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'ttihiaai',
                'label' => __('Meta Typography', 'ageland'),
                'selector' => '{{WRAPPER}} .default-blog .post-meta span, 
                {{WRAPPER}} .default-blog .post-meta i',
            ]
        );
        $this->add_control(
            'post_bg',
            [
                'label' => __('Post BG', 'ageland'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .default-blog .caption' => 'background: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_section();

    }

    protected function render()
    {

        $settings = $this->get_settings_for_display();

        $per_page = $settings['posts_per_page'];
        $cat = $settings['cat_query'];
        $id = $settings['id_query'];

        if ($settings['query_type'] == 'category') {
            $query_args = array(
                'post_type' => 'post',
                'posts_per_page' => $per_page,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'category',
                        'field' => ' ',
                        'terms' => $cat,
                    ),
                ),
            );
        }

        if ($settings['query_type'] == 'individual') {
            $query_args = array(
                'post_type' => 'post',
                'posts_per_page' => $per_page,
                'post__in' => $id,
                'orderby' => 'post__in'
            );
        }

        $wp_query = new \WP_Query($query_args);

        include dirname(__FILE__) . '/' . $settings['layout'] . '.php';
    }

    protected function content_template()
    {
    }

    public function render_plain_content($instance = [])
    {
    }

}

Plugin::instance()->widgets_manager->register(new ageland_blog());
?>