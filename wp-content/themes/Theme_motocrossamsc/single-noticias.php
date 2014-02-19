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
                            <?php
                                 while ( have_posts() ) : the_post(); ?>
                                 <h3> <?php the_title(); ?> </h3> <br>
                            <?php      the_content();
                                endwhile;
                            ?>
                        </div>
                  </div>
            </div>
<?php get_footer(); ?>
