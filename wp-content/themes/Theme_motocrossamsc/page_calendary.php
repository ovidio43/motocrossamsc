<?php
/**
 *Template name: template_calendary
 *
 */
 ?>
<?php get_header(); ?>
            <div class="body_block_one">
                    <div class="wrapper">
                        <div class="banner-slider">
                            <ul class="slider_">
                                <li>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/imgbx_one.jpg">
                                </li>
                                <li>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/imgbx_two.jpg">
                                </li>
                                <li>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/imgbx_three.jpg">
                                </li>
                                <li>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/imgbx_for.jpg">
                                </li>
                                <li>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/imgbx_five.jpg">
                                </li>
                                <li>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/imgbx_six.jpg">
                                </li>
                                <li>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/imgbx_seven.jpg">
                                </li>
                                <li>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/imgbx_eight.jpg">
                                </li>
                                <li>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/imgbx_nine.jpg">
                                </li>
                                <li>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/imgbx_ten.jpg">
                                </li>
                            </ul>
                        </div>
                    </div>
            </div>
             <div class="body_block_two">
                  <span class="backgroud_body_two"></span>
                  <div class="wrapper">
                        <h2>CALENDARIO</h2>
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
                                <h3><?php the_field('ccalendary'); //CALENDARIO DEPARTAMENTAL GESTION 2013 ?></h3>
                                <hr>
                                <div class="calendary_margin">
                                 <?php
                                     
                                          the_content();
                                      endwhile;
                                      wp_reset_query(); 
                                  ?>

                                      <!--<div class="table_calendary">
                                          <div class="calendary_cells">ORDEN </div>
                                          <div class="calendary_cells">FECHA </div>
                                          <div class="calendary_cells">CIRCUITO</div>
                                          <div class="calendary_cells">MODALIDAD</div>
                                          <div class="calendary_cells">LUGAR</div>
                                      </div>
                                      <div class="table_calendary">   
                                          <div class="calendary_cells">1</div>
                                          <div class="calendary_cells">09-10-Marzo </div>
                                          <div class="calendary_cells">Villa Deportiva</div>
                                          <div class="calendary_cells">Circuito</div>
                                          <div class="calendary_cells"> Santa Cruz</div>
                                      </div>
                                      <div class="table_calendary">            
                                          <div class="calendary_cells">2</div>
                                          <div class="calendary_cells">13-14- Abril</div>
                                          <div class="calendary_cells">Puesto Fernandez</div>
                                          <div class="calendary_cells">Circuito</div>
                                          <div class="calendary_cells">Puesto Fernandez</div>
                                      </div>
                                      <div class="table_calendary">
                                          <div class="calendary_cells">3 </div>
                                          <div class="calendary_cells">11-12- Mayo </div>
                                          <div class="calendary_cells">Villa Deportiva</div>
                                          <div class="calendary_cells"> Circuito </div>
                                          <div class="calendary_cells">Santa Cruz</div>
                                      </div>
                                      <div class="table_calendary">        
                                          <div class="calendary_cells">4 </div>
                                          <div class="calendary_cells">08-09- Junio </div>
                                          <div class="calendary_cells">Jorge Pimentel</div>
                                          <div class="calendary_cells">Circuito</div>
                                          <div class="calendary_cells">Mairana</div>
                                      </div>

                                      <div class="table_calendary">     
                                          <div class="calendary_cells">5</div>
                                          <div class="calendary_cells">20-21-Julio  </div>
                                          <div class="calendary_cells">Villa Deportiva </div>
                                          <div class="calendary_cells">Circuito </div>
                                          <div class="calendary_cells">Santa Cruz</div>
                                      </div>
                                      <div class="table_calendary">        
                                          <div class="calendary_cells">6</div>
                                          <div class="calendary_cells">10-11-Agosto  </div>
                                          <div class="calendary_cells">El Torno</div>
                                          <div class="calendary_cells">Circuito </div>
                                          <div class="calendary_cells"> El Torno</div>
                                      </div>
                                      <div class="table_calendary">                    
                                          <div class="calendary_cells">7</div>
                                          <div class="calendary_cells">14-15 Septiembre</div>
                                          <div class="calendary_cells">Villa Deportiva</div>
                                          <div class="calendary_cells">Circuito</div>
                                          <div class="calendary_cells">Santa Cruz</div>
                                      </div>
                                      <div class="table_calendary">       
                                          <div class="calendary_cells">8 </div>
                                          <div class="calendary_cells">12-13- Octubre </div>
                                          <div class="calendary_cells">Kito Cardona </div>
                                          <div class="calendary_cells"> Circuito </div>
                                          <div class="calendary_cells">Montero</div>
                                      </div>
                                      <div class="table_calendary">            
                                          <div class="calendary_cells">9 </div>
                                          <div class="calendary_cells">26-27- Octubre </div>
                                          <div class="calendary_cells">Villa Deportiva</div>
                                          <div class="calendary_cells">Circuito</div>
                                          <div class="calendary_cells">Santa Cruz</div>
                                      </div>

                                       <div class="table_calendary">                        
                                          <div class="calendary_cells">10</div>
                                          <div class="calendary_cells">09-10-Noviembre</div>
                                          <div class="calendary_cells">Yapacani</div>
                                          <div class="calendary_cells">Circuito</div>
                                          <div class="calendary_cells">Yapacani </div>
                                      </div>
                                      <div class="table_calendary">          
                                          <div class="calendary_cells">11 </div>
                                          <div class="calendary_cells">30-01- Diciembre </div>
                                          <div class="calendary_cells"> Villa Deportiva </div>
                                          <div class="calendary_cells"> Circuito </div>
                                          <div class="calendary_cells">Santa Cruz</div>
                                      </div>-->
                                </div>

                            </div>
                        </div>
                  </div>
            </div>
<?php get_footer(); ?>
