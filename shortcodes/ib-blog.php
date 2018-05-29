<?php 
if(! defined('ABSPATH')) {die;}

if(! function_exists('infobiz_blog_shortcode')):
    add_shortcode('blogs', 'infobiz_blog_shortcode');
    function infobiz_blog_shortcode($atts){
        extract(shortcode_atts([
            'count'     => '5',
            'orderby'   => 'menu_order',
            'order'     => 'ASC'
        ],$atts));

        $query = new WP_Query([
            'post_type'         => 'blog',
            'posts_per_page'    => $count,
            'orderby'           => $orderby,
            'order'             => $order
        ]);
        
        $html = '';
        ob_start();
        ?>

        <?php 
            while($query->have_posts()): $query->the_post();
                $image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()),'full');
                $description = get_post_meta(get_the_ID(), 'description', true);
                var_dump($description);
                
        ?>
            <div class="col-md-4 col-sm-6 col-xs-12">

                <div class="single-service">
                <?php if($image):?><div class="image"><img src="<?php echo $image[0];?>"></div><?php endif;?>
                    <div class="text">
                        <h4><a href="service-details.html"></a><?php the_title(); ?><i class="flaticon-pie-chart"></i></h4>
                <?php if($description):?><p><?php echo $description; ?></p><?php endif; ?>
                    </div>
                </div>

            </div>
        <?php endwhile;?>
        <?php
        $html .= ob_get_clean();
        return $html;
    }
endif;

if(! function_exists('slider_meta_boxes') ) {

    add_filter( 'cs_metabox_options' , 'slider_meta_boxes' );

    function slider_meta_boxes($options){
        $options = [];

        $options[] = [
            'id'    => '_slider_meta_options',
            'title' => __('Slider Options' , 'infobiz'),
            'post_type' => 'infobiz_slide',
            'context'   => 'normal',
            'priority'  => 'default',
            'sections'  => [
                [
                    'name'      => 'title_section',
                    'title'     => __( 'Title Option' , 'infobiz' ),
                    'icon'      => 'fa fa-wifi',
                    'fields'    => [
                        
                        [
                            'id'    => 'subtitle_large',
                            'type'  => 'text',
                            'title' => __( 'Subtitle Large', 'infobiz' )
                        ],
                        [
                            'id'    => 'subtitle_small',
                            'type'  => 'text',
                            'title' => __( 'Subtitle Small', 'infobiz' )
                        ]

                    ]

                ],
                [
                    'name'      => 'button_section',
                    'title'     => __( 'Button Option' , 'infobiz' ),
                    'icon'      => 'fa fa-wifi',
                    'fields'    => [
                        
                        [
                            'id'    => 'buttons',
                            'type'  => 'group',
                            'title' => __( 'Slide Buttons', 'infobiz' ),
                            'button_title' => __('Add New', 'infobiz'),
                            'accordion_title'   => __('Adding Button', 'infobiz'),
                            'fields'    => [
                                [
                                    'id'    => 'button_text',
                                    'type'  => 'text',
                                    'title' => __( 'Text', 'infobiz' )
                                ],
                                [
                                    'id'    => 'button_link',
                                    'type'  => 'text',
                                    'title' => __('Link','infobiz')
                                ]
                            ]
                        ]
                    ]

                ],

            ]
        ];
        

        return apply_filters( 'infobiz_meta_boxes', $options );
    }
}
