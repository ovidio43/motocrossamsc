
<?php get_header();
 require_once(get_template_directory() . '/lib/sliders.php');
 ?>
             <div class="body_block_two">
                  <span class="backgroud_body_two"></span>
                  <div class="wrapper">
                        <h2> 
                            <img src="<?php echo get_template_directory_uri(); ?>/img/fecha.png">
                        </h2>
                        <div class="content_pages">
                            <div class="post_ranking">  
                                          <div class="wrap_ranking">
                                              <span class="ranking_background_header"></span>
                                          </div>
                                         <?php
                                              $type = 'planilla';
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
                                         ?> 
                                            <div class="contet_detail_rankings">
                                                <div class="wrap_ranking">      
                                                  <a href="#"><?php the_title(); ?></a>
                                                </div>
                                                <div class="post_detail_ranking_one">
                                                    <ul class="hover_detail_ranking">
                                                        <li class="border_bottom "><a href="#" class="color_text">CATEGORIAS</a></li>
                                                        <li class="border_bottom"><a href="<?php the_permalink(); ?>?idpost=enduro">ENDURO</a></li>
                                                        <li><a href="<?php the_permalink(); ?>?idpost=cross">CROSS</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                           <?php
                                         endwhile;
                                            wp_reset_query();
                                        else:
                                            ?>
                                            <p><?php _e('Sorry, no slider matched your criteria.'); ?></p>
                                  <?php endif; ?>
                                      <div class="wrap_ranking">
                                          <span class="ranking_background_footer"></span>
                                      </div>
                                      
                                      
                                  </div>
                             

                                <!--<div class="wrap_detail_ranking">
                                    <div class="post_detail_ranking">
                                        <span class="ranking_background_header"></span>
                                        <a href="#">Departamental 2013</a>
                                        <span class="ranking_background_footer"></span>
                                    </div>
                                    <div class="post_detail_ranking_one">
                                        <ul class="hover_detail_ranking">
                                                <li class="border_bottom "><a href="#" class="color_text">CATEGORIAS</a></li>
                                                <li class="border_bottom"><a href="#">ENDURO</a></li>
                                                <li><a href="#">CROSS</a></li>
                                          </ul>
                                    </div>-->            
                        </div>
                  </div>
            </div>
<?php get_footer(); ?>
