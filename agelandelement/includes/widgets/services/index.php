<?php
namespace Elementor;
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class ageland_services extends Widget_Base {

   public function get_name() {
      return 'ageland-services';
   }

   public function get_title() {
      return __( 'Ageland Services', 'ageland' );
   }
    public function get_categories() {
		return [ 'agelandelement-addons' ];
	}
   public function get_icon() { 
        return 'eicon-posts-group';
   }

    protected function _register_controls() {

        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'Services', 'ageland' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'title',
            [
                'label' => __( 'Title', 'ageland' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Useful Features', 'ageland' ),
            ]
        );
        $this->add_control(
            'info',
            [
                'label' => __('Info', 'ageland'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __('Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Amet, dui, lacus in non massa id tellus amet tincidunt. Lacus ut integer
                 blandit diam nibh pulvinar. Ultrices phasellus', 'ageland'),
            ]
        );
        $this->add_control(
            'query_type1',
            [
                'label' => __('Query type', 'ageland'),
                'type' => Controls_Manager::SELECT,
                'default' => 'category1',
                'options' => [
                    'category1' => __('Category', 'ageland'),
                    'individual1' => __('Individual', 'ageland'),
                ],
            ]
        );

        $this->add_control(
            'cat_query1',
            [
                'label' => __('Category', 'ageland'),
                'type' => Controls_Manager::SELECT2,
                'options' => ae_drop_cat('service_category'),
                'multiple' => true,
                'label_block' => true,
                'condition' => [
                    'query_type1' => 'category1',
                ],
            ]
        );

        $this->add_control(
            'id_query1',
            [
                'label' => __('Posts', 'ageland'),
                'type' => Controls_Manager::SELECT2,
                'options' => ae_drop_posts('services'),
                'multiple' => true,
                'label_block' => true,
                'condition' => [
                    'query_type1' => 'individual1',
                ],
            ]
        );
        $this->add_control(
            'posts_per_page1',
            [
                'label' => __('Posts Per Page', 'ageland'),
                'type' => Controls_Manager::NUMBER,
                'default' => 3,
            ]
        );
        $this->add_control(
            'image',
            [
                'label' => __( 'Shap Image', 'ageland' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'condition' => [
                    'layout' => 'layout3',
                ],
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'shape_title',
            [
                'label' => __( 'Shape Title', 'ageland' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Shape Icon', 'ageland' ),
            ]
        );
        $this->add_control(
            'shape_list',
            [
                'label' => __( 'Shape List', 'ageland' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'condition' => [
                    'layout' => ['layout3'],
                ],
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'shape_title' => __( 'Shape', 'ageland' ),
                    ],
                    [
                        'shape_title' => __( 'Shape', 'ageland' ),
                    ],
                    [
                        'shape_title' => __( 'Shape', 'ageland' ),
                    ],

                ],
                'title_field' => '{{{ shape_title }}}',
            ]
        );
        $this->add_control(
            'button',
            [
                'label' => __( 'Button Icon', 'ageland' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('Explore', 'ageland'),
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
        $this->add_control(
            'shape22',
            [
                'label' => __( 'Choose Image', 'ageland' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'shape33',
            [
                'label' => __( 'Choose Image', 'ageland' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'content_section2',
            [
                'label' => __( 'Services 2', 'ageland' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'query_type',
            [
                'label' => __('Query type', 'ageland'),
                'type' => Controls_Manager::SELECT,
                'default' => 'category',
                'options' => [
                    'category' => __('Category', 'ageland'),
                    'individual' => __('Individual', 'ageland'),
                ],
            ]
        );

        $this->add_control(
            'cat_query',
            [
                'label' => __('Category', 'ageland'),
                'type' => Controls_Manager::SELECT2,
                'options' => ae_drop_cat('service_category'),
                'multiple' => true,
                'label_block' => true,
                'condition' => [
                    'query_type' => 'category',
                ],
            ]
        );

        $this->add_control(
            'id_query',
            [
                'label' => __('Posts', 'ageland'),
                'type' => Controls_Manager::SELECT2,
                'options' => ae_drop_posts('services'),
                'multiple' => true,
                'label_block' => true,
                'condition' => [
                    'query_type' => 'individual',
                ],
            ]
        );
        $this->add_control(
            'posts_per_page',
            [
                'label' => __('Posts Per Page', 'ageland'),
                'type' => Controls_Manager::NUMBER,
                'default' => 2,
            ]
        );
        $this->add_control(
            'shape2',
            [
                'label' => __( 'Choose Image', 'ageland' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'shape3',
            [
                'label' => __( 'Choose Image', 'ageland' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'content_sty',
            [
                'label' => __( 'Style', 'ageland' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'mshape1',
            [
                'label' => __( 'Choose Image', 'ageland' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'mshape2',
            [
                'label' => __( 'Choose Image', 'ageland' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'mshape3',
            [
                'label' => __( 'Choose Image', 'ageland' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'mshape4',
            [
                'label' => __( 'Choose Image', 'ageland' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'mshape5',
            [
                'label' => __( 'Choose Image', 'ageland' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'mshape6',
            [
                'label' => __( 'Choose Image', 'ageland' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'post_title_color',
            [
                'label' => __( 'Title Color', 'ageland' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service .item h4' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'post_titleh_color',
            [
                'label' => __( 'Title Hover Color', 'ageland' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service .item h4:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'ttih',
                'label' => __( 'Title Typography', 'ageland' ),
                'selector' => '{{WRAPPER}} .service .item h4',
            ]
        );
        $this->add_control(
            'post_in_color',
            [
                'label' => __( 'Info Color', 'ageland' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service .item p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'ttihii',
                'label' => __( 'Info Typography', 'ageland' ),
                'selector' => '{{WRAPPER}} .service .item p',
            ]
        );
        $this->add_control(
            'icon_c',
            [
                'label' => __( 'Icon Color', 'ageland' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service .item .hexagon i' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'icon_cl',
            [
                'label' => __( 'Icon Hover', 'ageland' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service .item:hover .hexagon i' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'icon_bg',
            [
                'label' => __( 'Icon Hover Background', 'ageland' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service .item:hover .hexagon:before, 
                    {{WRAPPER}} .service .item:hover .hexagon:after, {{WRAPPER}} .service .item:hover .hexagon' => 'border-color: {{VALUE}}; background: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'btnt',
                'label' => __( 'Button Typography', 'ageland' ),
                'selector' => '{{WRAPPER}} .service .item .thm-btn',
            ]
        );
        $this->add_control(
            'btn_c',
            [
                'label' => __( 'Button Color', 'ageland' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service .item .thm-btn' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'btn_bg',
            [
                'label' => __( 'Button Background', 'ageland' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service .item .thm-btn' => 'background: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'btn_hc',
            [
                'label' => __( 'Button Hover Color', 'ageland' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service .item:hover .thm-btn' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'btn_bgh',
            [
                'label' => __( 'Button Hover Background', 'ageland' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service .item:hover .thm-btn' => 'background: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'content_margin',
            [
                'label' => __( 'Row Gap', 'ageland' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .service .item' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();

    }

    protected function render() {

        $settings = $this->get_settings_for_display();

        $tax_args = array(
            'taxonomy' => 'product_cat',
            'number' => $settings['show_cat'],
            'include' => $settings['cat_query'],
            'hide_empty' => false,
        );
        $categories = get_terms($tax_args);

        $per_page = $settings['posts_per_page'];
        $cat = $settings['cat_query'];
        $id = $settings['id_query'];


        if($settings['query_type'] == 'category'){
            $query_args = array(
                'post_type' => 'services',
                'posts_per_page' => $per_page,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'service_category',
                        'field' => 'term_id',
                        'terms' => $cat,
                    ) ,
                ) ,
            );
        }

        if($settings['query_type'] == 'individual'){
            $query_args = array(
                'post_type' => 'services',
                'posts_per_page' => $per_page,
                'post__in' =>$id,
                'orderby' => 'post__in'
            );
        }

        $wp_query = new \WP_Query($query_args);

        $per_page1 = $settings['posts_per_page1'];
        $cat1 = $settings['cat_query1'];
        $id1 = $settings['id_query1'];


        if($settings['query_type1'] == 'category1'){
            $query_args1 = array(
                'post_type' => 'services',
                'posts_per_page' => $per_page1,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'service_category',
                        'field' => 'term_id',
                        'terms' => $cat1,
                    ) ,
                ) ,
            );
        }

        if($settings['query_type1'] == 'individual1'){
            $query_args1 = array(
                'post_type' => 'services',
                'posts_per_page' => $per_page1,
                'post__in' =>$id1,
                'orderby' => 'post__in'
            );
        }

        $wp_query1 = new \WP_Query($query_args1);

        include dirname(__FILE__). '/' . $settings['layout']. '.php';
    }


    protected function content_template() {}

   public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register( new ageland_services() );
?>