<?php
namespace Elementor;
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class ageland_features extends Widget_Base {

   public function get_name() {
      return 'ageland-features';
   }

   public function get_title() {
      return __( 'Features', 'ageland' );
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
                'label' => __( 'Features', 'ageland' ),
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
                'condition' => [
                    'layout' => 'layout1',
                ],
                'default' => __('Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Amet, dui, lacus in non massa id tellus amet tincidunt. Lacus ut integer
                 blandit diam nibh pulvinar. Ultrices phasellus', 'ageland'),
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'image',
            [
                'label' => __( 'Choose Image', 'ageland' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $repeater->add_control(
            'feature_title',
            [
                'label' => __( 'Feature', 'ageland' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Ageland', 'ageland' ),
            ]
        );
        $repeater->add_control(
            'feature_info',
            [
                'label' => __('Info', 'ageland'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __('Lorem ipsum dolor sit amet,consetetur sadipcing elitr, no sea takimata sanctus est Lorem ipsum dolor sit amet.', 'ageland'),
            ]
        );
        $this->add_control(
            'feature_list',
            [
                'label' => __( 'Feature List', 'ageland' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'title' => __( 'Ageland', 'ageland' ),
                    ],
                    [
                        'title' => __( 'Ageland', 'ageland' ),
                    ],
                    [
                        'title' => __( 'Ageland', 'ageland' ),
                    ],
                ],
                'title_field' => '{{{ feature_title }}}',
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
                ],
                'default' => 'layout1',
                'toggle' => true,
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
            'post_title_color',
            [
                'label' => __( 'Title Color', 'ageland' ),
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
                'label' => __( 'Title Typography', 'ageland' ),
                'selector' => '{{WRAPPER}} .default-blog .caption a',
            ]
        );
        $this->add_control(
            'post_inhaa_color',
            [
                'label' => __( 'Meta Color', 'ageland' ),
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
                'label' => __( 'Meta Typography', 'ageland' ),
                'selector' => '{{WRAPPER}} .default-blog .post-meta span, 
                {{WRAPPER}} .default-blog .post-meta i',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'banner-area-v3',
                'label' => __('banner-area-v3', 'ageland'),
                'types' => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .measure_business_sec:before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'banner-area-v33',
                'label' => __('banner-area-v3', 'ageland'),
                'types' => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .measure_business_sec:after',
            ]
        );
        $this->end_controls_section();

    }

    protected function render() {

        $settings = $this->get_settings_for_display();

        include dirname(__FILE__). '/' . $settings['layout']. '.php';
    }
    

    protected function content_template() {}

   public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register( new ageland_features() );
?>