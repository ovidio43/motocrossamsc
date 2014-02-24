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
<?php get_header();
    $val=$_GET["idpost"];
     require_once(get_template_directory() . '/lib/sliders.php');
 ?>
             <div class="body_block_two">
                  <span class="backgroud_body_two"></span>
                  <div class="wrapper">
                        <h2><img src="<?php echo get_template_directory_uri(); ?>/img/ranking.png"></h2>
                        <div class="content_pages">
                            <?php
                                 while ( have_posts() ) : the_post(); 
                                    if ($val=="enduro"){ 
                                        $title=the_title();
                                        ?>
                                          <h3> <?php $title; ?>  </h3> 
                                          ENDURO
                                         <?php  the_field('enduro');
                                      } else {?>
                                            <h3> <?php $title; ?> </h3> 
                                            CROSS
                                            <?php 
                                             the_field('cross'); 
                                        } ?>

                            <?php     
                                endwhile;
                            ?>
                        </div>
                  </div>
            </div>
<?php get_footer(); ?>
