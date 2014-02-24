
<?php get_header();

    $name=$_POST["fname"];
    $phone=$_POST["fphone"];
    $email=$_POST["femail"];
    $mensaje=$_POST["fmensaje"];

    function sendMail_client() {
        $subject = 'MOTOCROSS - SOLICITUD ';
        $from = "alfonsin.marquez@altra.com.bo";
        $headers .= $email;
        $body = '';
        $body .= $name.'<br>';
        $body .= $phone.'<br><br>';
        $body .= $mensaje;
        if (wp_mail($from, $subject, $body, $headers)) {
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
