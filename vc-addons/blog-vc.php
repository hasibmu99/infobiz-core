<?php 
if(! function_exists('infobiz_slider_addons')){
    function infobiz_slider_addons(){
        vc_map([
            'name'      => __( 'Slider', 'infobiz' ),
            'base'      => 'ib-slider',
            'class'     => '',
            'category'  => 'Slider',
            'params'    => [
                [
                    'type'          => 'textfield',
                    'heading'       => __( 'Count', 'infobiz' ),
                    'param_name'    => 'count',
                    'value'         => '5',
                    'admin_label'   => true,
                    'description'   => __( 'Enter your Desired number of showing posts', 'my-text-domain' )
                ],
                [
                    'type'          => 'textfield',
                    'heading'       => __( 'Order By', 'infobiz' ),
                    'param_name'    => 'orderby',
                    'value'         => 'menu_order',
                    'description'   => __( 'Slider Order By', 'infobiz' )
                ],
                [
                    'type'          => 'textfield',
                    'heading'       => __( 'Order', 'infobiz' ),
                    'param_name'    => 'order',
                    'value'         => 'ASC',
                    'description'   => __( 'Slider Order', 'infobiz' )
                ]

            ]
        ]);
    }
    add_action('vc_before_init', 'infobiz_slider_addons');
}