
<?php get_header();
 require_once(get_template_directory() . '/lib/sliders.php');
 ?>
             <div class="body_block_two">
                  <span class="backgroud_body_two"></span>
                  <div class="wrapper">
                        <h2> <img src="<?php echo get_template_directory_uri(); ?>/img/galeriadeimagenes.png"></h2>
                        <div class="content_pages">
                            <div class="image_content">
                                <ul class="block_img">
                                <?php
                                  $type = 'imagenes';
                                  $args=array(
                                    'post_type' => $type,
                                    'post_status' => 'publish',
                                    'orderby' => 'date',
                                    'order' => 'DESC');                 
                                     $myposts = new WP_Query( $args );
                                     if ( $myposts->have_posts() ) : 
                                          while ( $myposts->have_posts() ) : 
                                                  $myposts->the_post();    
                                                  $featured = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()),'large',false);
                                ?>
                                    <li>
                                         <?php 
                                         $cont=1;
                                         $images = get_field('list_imagenes');
                                         if( $images ): ?>
                                              <?php foreach( $images as $image ): ?>
                                                  <a class="fancygallery"  href="<?php echo $image['sizes']['large']; ?>" rel="gallery_<?php echo get_the_ID(); ?>"  title="Sed vel sapien vel sem uno">
                                                  </a>
                                                  <?php $cont++; ?>
                                              <?php endforeach; ?>
                                         <?php endif; ?>
                                        <a class="fancygallery img_galery" rel="gallery_<?php  echo get_the_ID(); ?>"  href="<?php echo $featured['0']; ?>" id="<?php echo get_the_ID(); ?>">
                                           <img src="<?php echo $featured['0']; ?>" title="<?php echo get_the_title(); ?>">
                                           <br><br>
                                           <h5><?php the_title(); ?></h5>
                                           <h5><?php echo $cont; ?> &nbsp;Fotos</h5> 
                                        </a>
                                       
                                    </li>
                                 <?php endwhile; 
                                   wp_reset_query();
                                   else: ?>
                                   <p><?php _e('Sorry, no slider matched your criteria.'); ?></p>
                                   <?php endif; ?>
                                 
                                </ul>
                            </div>
                        </div>
                  </div>
            </div>
<?php get_footer(); ?>
