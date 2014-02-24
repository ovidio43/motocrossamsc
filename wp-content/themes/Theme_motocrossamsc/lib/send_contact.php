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
    $name=$_POST["fname"];
    $phone=$_POST["fphone"];
    $email=$_POST["femail"];
    $mensaje=$_POST["fmensaje"];
    function sendMail_client() {
        $subject = 'MOTOCROSS - SOLICITUD ';
        $from = "alfonsin.marquez@altra.com.bo";
        $headers .= 'Content-type:text/html;charset=UTF-8 \rn'
                . 'From: Registration <noreply@niaf.net>\rn';
        $body = '';
        $body .= $name.'<br>';
        $body .= $phone.'<br><br>';
        $body .= $mensaje;
        if (mail($from, $subject, $body, $headers)) {
            return  "mensaje enviado";
        }else{
            return  "mensaje no enviado";  
        }
        
}

     require_once(get_template_directory() . '/lib/sliders.php');
 ?>
             <div class="body_block_two">
                  <span class="backgroud_body_two"></span>
                  <div class="wrapper">
                        <h2><img src="<?php echo get_template_directory_uri(); ?>/img/contact.png"></h2>
                        <div class="content_pages">
                            <?php
                             echo sendMail_client();
                            ?>
                        </div>
                  </div>
            </div>
<?php get_footer(); ?>
