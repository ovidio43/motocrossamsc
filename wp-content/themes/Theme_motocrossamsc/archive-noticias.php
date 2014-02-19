<?php
/**
 * The template for displaying Archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one. For example, Twenty Fourteen
 * already has tag.php for Tag archives, category.php for Category archives,
 * and author.php for Author archives.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
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
                        <h2>NOTICIAS</h2>
                        <div class="content_pages">
                            <div class="table_news">
                                <div class="table_cell_news">
                                    <?php
                                        $type = 'noticias';
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
                                        <a href="<?php the_permalink(); ?>">                               
                                            <div class="detail_content">
                                                <h3> <?php the_title(); ?> </h3>
                                                <div class="block_detail_content">
                                                    <h5><?php the_date(); ?></h5>
                                                    <div class="cont_news"><?php the_excerpt(); ?></div>
                                                </div>
                                            </div>
                                        </a>
                                    <?php
                                     endwhile;
                                        wp_reset_query();
                                    else:
                                        ?>
                                        <p><?php _e('Sorry, no slider matched your criteria.'); ?></p>
                                    <?php endif; ?>

                                    <!--<div class="detail_content">
                                        <h3> Robles, presidente del Motociclismo </h3>
                                        <div class="block_detail_content">
                                            <h5>23/02/2013</h5>
                                            <p>La Asociación de Motociclismo Santa Cruz (AMSC) tiene nuevo presidente, se trata de Cristian Robles, en las elecciones votaron deportistas y dirigentes, haciendo un total de 154 votantes. Robles tuvo a su favor 123 votos y Núñez solo 30, mientras que un voto fue declarado nulo. Una vez finalizado el conteo, el nuevo directorio fue [...]</p>
                                        </div>
                                    </div>
                                    <div class="detail_content">
                                        <h3> Robles, presidente del Motociclismo </h3>
                                        <div class="block_detail_content">
                                            <h5>23/02/2013</h5>
                                            <p>La Asociación de Motociclismo Santa Cruz (AMSC) tiene nuevo presidente, se trata de Cristian Robles, en las elecciones votaron deportistas y dirigentes, haciendo un total de 154 votantes. Robles tuvo a su favor 123 votos y Núñez solo 30, mientras que un voto fue declarado nulo. Una vez finalizado el conteo, el nuevo directorio fue [...]</p>
                                        </div>
                                    </div>-->
                                </div>
                                <div class="table_cell_news_one">
                                </div>
                            </div>
                        </div>
                  </div>
            </div>
<?php get_footer(); ?>
