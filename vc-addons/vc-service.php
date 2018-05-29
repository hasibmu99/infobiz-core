<?php 

if(! function_exists('infobiz_service_vc')){
    function infobiz_service_vc(){
        vc_map([
            'name'  => 'Service Add-ons',
            'base'  => 'service',
            'category'  => __('Service', 'infobiz'),
            'params'    => [
                [
                    'type'  => 'textfield',
                    'heading'   => __('Title', 'infobiz'),
                    'param_name'    => 'title_text',
                    'description'   => __('Title Text')
                ],
                [
                    'type'  => 'textarea',
                    'heading'   => __('Description', 'infobiz'),
                    'param_name'    => 'content_text',
                    'description'   => __('Content Text')
                ],
                [
                    'type'  => 'textfield',
                    'heading'   => __('Link', 'infobiz'),
                    'param_name'    => 'link',
                    'description'   => __('Link','infobiz')
                ],
                [
                    'type'  => 'textfield',
                    'heading'   => __('Big Number', 'infobiz'),
                    'param_name'    => 'big_number',
                    'description'   => __('Number','infobiz')
                ]
            ]

        ]);
    }
    add_action('vc_before_init', 'infobiz_service_vc');
}