<?php
/**
 *Template name: template_contactos
 *
 */
 get_header();
 ?>
 <script type="text/javascript">
     jQuery('#form_client').validate({
            rules: {
                fname: {required: true},
                fphone: {number: true},
                femail: {required: true, email: true}
            }
        });
</script>

 <?php
 require_once(get_template_directory() . '/lib/sliders.php');
 ?>
           
             <div class="body_block_two">
                  <span class="backgroud_body_two"></span>
                  <div class="wrapper">
                        <h2><img src="<?php echo get_template_directory_uri(); ?>/img/contact.png"></h2>
                        <div class="content_pages">
                             <h1>Dirección</h1>
                            <p>Villa Deportiva Abran Telchi</p>
                            <p>Av. Santa Dumont 4to anillo</p>
                            <p>Tel: 358 – 7829</p>

                            <div id="contact_form"> 
                                    <div id="form_contact">
                                     <?php
                                      $page = get_page_by_path('contactos');
                                      $args = array(
                                          'post_type' => 'page',
                                          'post__in' => array($page->ID)
                                      );
                                      query_posts($args);
                                      while (have_posts()) : the_post();?>
                                        <form method="post" action="<?php  get_template_directory_uri().'/'.the_permalink(); ?>/lib/send_contact.php" id="frm_contact" name="form_client">
                                            <input type="text" name="fname" id="fname" class="textfield" value="Nombre"> 
                                            <input type="text" name="fphone" id="fphone" class="textfield" value="Telefono"> 
                                            <input type="text" name="femail" id="femail" class="textfield" value="E-mail"> 
                                            <textarea name="fmensaje" id="fmensaje" rows="10" cols="30" style="resize: none;">Mensaje</textarea>
                                            <input type="submit" value="enviar"> 
                                            <!--<img src="<?php //echo get_template_directory_uri(); ?>/img/btn_contact.gif" alt="Enviar" id="submit_contact">-->
                                            
                                        </form>
                                    <?php     
                                        endwhile;
                                        wp_reset_query(); 
                                    ?>
                                    </div>
                                    <div id="map_contact">
                                        <iframe width="579" height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=es&amp;geocode=&amp;q=villa+olimpica,+santa+cruz+bolivia&amp;sll=37.0625,-95.677068&amp;sspn=33.901528,86.044922&amp;ie=UTF8&amp;hq=villa+olimpica,&amp;hnear=Santa+Cruz+de+la+Sierra,+Andr%C3%A9s+Ib%C3%A1%C3%B1ez,+Santa+Cruz,+Bolivia&amp;cid=14119724340441553200&amp;ll=-17.816768,-63.181772&amp;spn=0.020429,0.04961&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>                            </div>                          
                                    </div>
                            </div>
                        </div>
                  </div>
            </div>
<?php get_footer(); ?>
