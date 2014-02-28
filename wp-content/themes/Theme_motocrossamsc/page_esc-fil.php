<?php
/**
 *Template name: template_esc_fil
 *
 */
 ?>
<?php get_header();
 require_once(get_template_directory() . '/lib/sliders.php');
 ?>
           
             <div class="body_block_two">
                  <span class="backgroud_body_two"></span>
                  <div class="wrapper">
                        <h2><img src="<?php echo get_template_directory_uri(); ?>/img/campeones_2011.png" rel="campeones_2011.png" alt="h_campeones_2011.png"></h2>
                        <div class="content_pages">
                            <div class="content_calendary">
                               <?php
                                      $page = get_page_by_path('esc-fil');
                                      $args = array(
                                          'post_type' => 'page',
                                          'post__in' => array($page->ID)
                                      );
                                      query_posts($args);
                                      while (have_posts()) : the_post();
                                          the_content();
                                      endwhile;
                                      wp_reset_query(); 
                                  ?>
                            </div>
                        </div>
                  </div>
            </div>
<?php get_footer(); ?>
