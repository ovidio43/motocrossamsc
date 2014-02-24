<div class="body_block_one">
        <div class="wrapper">
            <div class="banner-slider">
                <ul class="slider_">
                    <?php
                          $type = 'banner';
                          $args = array(
                              'post_type' => $type,
                              'post_status' => 'publish',
                              'orderby' => 'date',
                              'order' => 'DESC',
                              'posts_per_page' => 100);
                          $myposts = new WP_Query($args);
                          if ($myposts->have_posts()) :
                              while ($myposts->have_posts()) :
                                  $myposts->the_post();
                                   $featured = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()),'large',false);
                        ?>
                            <li>
                                <img src="<?php echo $featured['0']; ?>" title="<?php echo get_the_title(); ?>">
                            </li>
                             <?php endwhile; 
                             wp_reset_query();
                       else: ?>
                            <p><?php _e('Sorry, no slider matched your criteria.'); ?></p>
                       <?php endif; ?>

                    <!--<li>
                        <img src="<?php //echo get_template_directory_uri(); ?>/img/imgbx_one.jpg">
                    </li>
                    <li>
                        <img src="<?php //echo get_template_directory_uri(); ?>/img/imgbx_two.jpg">
                    </li>
                    <li>
                        <img src="<?php //echo get_template_directory_uri(); ?>/img/imgbx_three.jpg">
                    </li>
                    <li>
                        <img src="<?php //echo get_template_directory_uri(); ?>/img/imgbx_for.jpg">
                    </li>
                    <li>
                        <img src="<?php //echo get_template_directory_uri(); ?>/img/imgbx_five.jpg">
                    </li>
                    <li>
                        <img src="<?php //echo get_template_directory_uri(); ?>/img/imgbx_six.jpg">
                    </li>
                    <li>
                        <img src="<?php //echo get_template_directory_uri(); ?>/img/imgbx_seven.jpg">
                    </li>
                    <li>
                        <img src="<?php //echo get_template_directory_uri(); ?>/img/imgbx_eight.jpg">
                    </li>
                    <li>
                        <img src="<?php //echo get_template_directory_uri(); ?>/img/imgbx_nine.jpg">
                    </li>
                    <li>
                        <img src="<?php //echo get_template_directory_uri(); ?>/img/imgbx_ten.jpg">
                    </li>-->
                </ul>
            </div>
        </div>
</div>