<?php
/**
 *Template name: template_calendary
 *
 */
 get_header(); 
 require_once(get_template_directory() . '/lib/sliders.php');
?>
             <div class="body_block_two">
                  <span class="backgroud_body_two"></span>
                  <div class="wrapper">
                        <h2><img src="<?php echo get_template_directory_uri(); ?>/img/calendario.png"></h2>
                        <div class="content_pages">
                            <div class="content_calendary">
                               <?php
                                      $page = get_page_by_path('calendario-de-eventos');
                                      $args = array(
                                          'post_type' => 'page',
                                          'post__in' => array($page->ID)
                                      );
                                      query_posts($args);
                                      while (have_posts()) : the_post();
                                ?>
                                <h3><?php the_field('ccalendary'); ?></h3>
                                <hr>
                                <div class="calendary_margin">
                                 <?php
                                     
                                          the_content();
                                      endwhile;
                                      wp_reset_query(); 
                                  ?>

                                </div>

                            </div>
                        </div>
                  </div>
            </div>
<?php get_footer(); ?>
