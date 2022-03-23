<?php

namespace Elementor;

if (!defined('ABSPATH')) 
    exit; // Exit if accessed directly


class ageland_counter_step extends Widget_Base {

    public function get_name() {
        return 'ageland-counter-step';
    }
 
    public function get_title() {
        return __('Counter Step', 'ageland');
    }

    public function get_icon() {
        return 'eicon-form-horizontal';
    }

    public function get_categories() {
        return ['agelandelement-addons'];
    }

    protected function register_controls() {

        $this->start_controls_section(
            'counter_step',
            [
                'label' => __( 'Content', 'ageland' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'title',
            [
                'label' => __('Title', 'ageland'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __('Built The App That Everyone Will Love.', 'ageland'),
            ]
        );
        $this->add_control(
            'info',
            [
                'label' => __('Info', 'ageland'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'condition' => [
                    'layout' => 'layout2',
                ],
                'default' => __('Lorem ipsum dolor sit amet, conse ctet erur adher ipgr 
                iscing elit. Risus mi elementum ipsum dictumst mauris duis nullam laoyreet.
                 Viverra adipiscing non. Semper urna habitant ut vel enim lecerstus tellus 
                 blandit. Proin vel.', 'ageland'),
            ]
        );
        $this->add_control(
            'image',
            [
                'label' => __( 'Choose Image', 'ageland' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'condition' => [
                    'layout' => 'layout2',
                ],
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'counter_number',
            [
                'label' => __( 'Counter Number', 'ageland' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '25', 'ageland' ),
            ]
        );
        $repeater->add_control(
            'counter_title',
            [
                'label' => __( 'Counter Title', 'ageland' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Ageland', 'ageland' ),
            ]
        );
        $repeater->add_control(
            'counter_pre',
            [
                'label' => __( 'Counter Prefix', 'ageland' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '$', 'ageland' ),
            ]
        );
        $repeater->add_control(
            'counter_suff',
            [
                'label' => __( 'Counter Suffix', 'ageland' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'K', 'ageland' ),
            ]
        );
        $this->add_control(
            'counter_list',
            [
                'label' => __( 'Counter List', 'ageland' ),
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
                'title_field' => '{{{ counter_title }}}',
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
                ],
                'default' => 'layout1',
                'toggle' => true,
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'bottom_sec',
            [
                'label' => __( 'Layout-1 Bottom Content', 'ageland' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                'condition' => [
                    'layout' => 'layout1',
                ],
            ]
        );
        $repeater2 = new \Elementor\Repeater();
        $repeater2->add_control(
            'conten_title',
            [
                'label' => __('Title', 'ageland'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('Customized Registration', 'ageland'),
            ]
        );
        $repeater2->add_control(
            'conten_info',
            [
                'label' => __('Info', 'ageland'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lacus lorem accu bmsan, placerat nisi magna duis enim. In morbi scelerisque lobortis viverra accu mdsan. Eleifend vel, eu praesent amet orcid amet lectus et rutrum. Enim mauris nisl lacus vitae leo. Varius aliquam adip eseriscing euismod congue orci ante. Viverra sit non nulla turpis. Vulputate tellus euismod sit a placerat aliquam dignissim suscipit. Edst eget proin proin neque iaculis. Ultricdbes viverra nulla imperdiet id scele bsrisque', 'ageland'),
            ]
        );
        $this->add_control(
            'conten_list',
            [
                'label' => __( 'Bottom Content', 'ageland' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater2->get_controls(),
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
                'title_field' => '{{{ conten_title }}}',
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

        include dirname(__FILE__). '/' . $settings['layout']. '.php';
    }


}
Plugin::instance()->widgets_manager->register( new ageland_counter_step() );