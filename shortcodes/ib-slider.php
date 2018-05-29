<?php

/**
 * Slider Shortcode
 */

if( ! function_exists('infibiz_slide_shortcode')) :
    function infibiz_slide_shortcode($atts){
        extract(shortcode_atts([
            'count'     => '5',
            'orderby'   => 'menu_order',
            'order'     => 'ASC'
        ],$atts));

        $query = new WP_Query([
            'post_type'         => 'infobiz_slide',
            'posts_per_page'    => $count, 
            'orderby'           => $orderby,
            'order'             => $order
        ]);

        $html = '<div id="theme-main-banner" class="banner-one section-margin-bottom">';
        ob_start();
        ?>
		
        <?php 
            while($query->have_posts()): $query->the_post();
                
                $title_options = get_post_meta(get_the_ID(), '_slider_meta_options', true);
                $buttons = $title_options['buttons'];
                $image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full');
                
                
        

        ?>
			<div data-src="<?php echo $image[0];?>">
				<div class="camera_caption">
					<div class="container">
                        <?php if($title_options['subtitle_small']):?><p class="wow fadeInUp animated"><?php echo esc_attr($title_options['subtitle_small']); ?></p><?php endif; ?>
                        <?php the_title('<h1 class="wow fadeInUp animated" data-wow-delay="0.2s">', '</h1>'); ?>
						<?php if($title_options['subtitle_large']): ?><h3 class="wow fadeInUp animated p-color" data-wow-delay="0.4s"><?php echo esc_attr($title_options['subtitle_large']); ?></h3><?php endif;?>
						
                        <?php foreach($buttons as $button) : ?>
                        <a href="<?php echo esc_url($button['button_link']); ?>" class="wow fadeInRight animated theme-button-one" data-wow-delay="0.6s"><?php echo esc_attr($button['button_text']); ?></a>
                        <?php endforeach; ?>
					</div> <!-- /.container -->
				</div> <!-- /.camera_caption -->
			</div>
		<?php endwhile;?>

        <?php
        $html .= ob_get_clean();
        $html .= '</div>';

        return $html;
    }
    add_shortcode('ib-slider', 'infibiz_slide_shortcode' );

endif;  //end of infibiz_slide_shortcode




