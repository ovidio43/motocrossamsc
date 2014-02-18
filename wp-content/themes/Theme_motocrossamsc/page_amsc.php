
/**
 *Template name: template_amsc
 *
 */
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
                        <h2>AMSC</h2>
                        <div class="content_pages">
                            <?php
                                $page = get_page_by_path('ascm');
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
                            
                            <div class="mini_wrapper">
                                <h3>Directorio</h3>
                                <div class="directory style_h">
                                    <div class="dates style_h">NOMBRE</div>
                                    <div class="dates style_h">CARGO</div>
                                </div>
                                <?php
                                    $rows = get_field('list_directorio');
                                    if ($rows) {
                                        foreach ($rows as $row) { ?>
                                            <div class="directory">
                                                <div class="dates"><?php echo $row['name_directory']; ?></div>
                                                <div class="dates"><?php echo $row['charge']; ?></div>
                                            </div>
                                            
                                <?php   }
                                    }
                                ?>
                                <!--<div class="directory">
                                    <div class="dates">Cristian Robles</div>
                                    <div class="dates"> Presidente</div>
                                </div>


                                <div class="directory">
                                    <div class="dates">Boris Lino  </div>
                                    <div class="dates">Vicepresidente</div>
                                </div>
                                <div class="directory">
                                    <div class="dates">Alberto Franco </div>
                                    <div class="dates"> Comisión Técnica</div>
                                </div>
                                <div class="directory">
                                    <div class="dates">Limbert Cespedes    </div>
                                    <div class="dates"> Secretario General</div>
                                </div>
                                <div class="directory">
                                    <div class="dates">Jose Chineco Paz    </div>
                                    <div class="dates">Secretario de Hacienda</div>
                                </div>
                                <div class="directory">
                                    <div class="dates">Livia    </div>
                                    <div class="dates"> Secretario AMSC</div>
                                </div>
                                <div class="directory">
                                     <div class="dates">Walter Aguirre  </div>
                                    <div class="dates"> Secretario de Prensa</div>
                                </div>
                                <div class="directory">
                                    <div class="dates">Alberto Ruiz Dorado </div>
                                    <div class="dates">Director de Prueba</div>
                                </div>
                                <div class="directory">
                                    <div class="dates">Ricardo Morales </div>
                                    <div class="dates"> Comisión Deportiva</div>
                                </div>
                                <div class="directory">
                                    <div class="dates">Roberto Vergara </div>
                                    <div class="dates"> Comisión Medica</div>
                                </div>
                                <div class="directory">
                                    <div class="dates">Jose Chineco Paz    </div>
                                    <div class="dates">Secretario de Hacienda</div>
                                </div>
                                <div class="directory">
                                    <div class="dates">
                                        Alberto Jordan <br>
                                        Luis Lavayen <br>
                                        Carlos Suárez 
                                    </div>
                                    <div class="dates"> Tribunal disciplinario </div>
                                </div>
                                <div class="directory">
                                    <div class="dates">
                                         José Miguel Fernández <br>
                                         José Luis Justiniano  
                                    </div>
                                    <div class="dates"> Vocales  </div>
                                </div>
                                <div class="directory">
                                    <div class="dates">Carla Ruiz Masay  </div>
                                    <div class="dates">Community Manager</div>
                                </div>
                                <div class="directory">
                                    <div class="dates">Jenny Duran    </div>
                                    <div class="dates">Secretaria de Actas</div>
                                </div>-->
                            </div>
                        </div>
                  </div>
            </div>
<?php get_footer(); ?>
